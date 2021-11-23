<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use App\Models\RegistrationForm;
use Omnipay\Omnipay;
use Illuminate\Support\Facades\Mail;

class RegisterPaymentController extends Controller
{

    private $_api_context;
    public function __construct()
    {
        $payPalConfig = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            env('PAYPAL_CLIENT_ID'), //Client ID
            env('PAYPAL_SECRET') //Client secret
        )
        );

              $this->_api_context->setConfig(
      array(
        'mode' => 'live',
        'log.LogEnabled' => true,
        'log.FileName' => 'PayPal.log',
        'log.LogLevel' => 'FINE'
      )
    );
    }

    public function payWithPaypal()
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal('120.00');
        $amount->setCurrency('MXN');

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('Entrada al evento, los días 5 y 6 de febrero del 2022');


        $callbackUrl = url('/paypal/status');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($this->_api_context);
            return redirect()->away($payment->getApprovalLink());

        } catch (PayPalConnectionException $ex) {
            echo $ex->getData();
        }
    }

    public function payPalStatus(Request $request)
    {
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
        $token = $request->input('token');

        if (!$paymentId || !$payerId || !$token) {
            $status = '¡Lo sentimos! El pago a través de PayPal no se pudo realizar.';
            return redirect('/registro')->with(compact('status'));
        }

        $payment = Payment::get($paymentId, $this->_api_context);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

           /** Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() === 'approved') {
            $status = '¡Gracias! El pago a través de PayPal se ha realizado correctamente. Llena tus datos para obtener tu boleto vía e-mail.';
            return redirect('/registro-formulario')->with(compact('status'));
        }

        $status = '¡Lo sentimos! El pago a través de PayPal no se pudo realizar.';
        return redirect('/registro')->with(compact('status'));
    }

    public function stripePayment(Request $request)
    {
              
        // Setup payment gateway
        $gateway = Omnipay::create('Stripe');
        $gateway->setApiKey(env('STRIPE_SECRET'));


        // Example form data
        $formData = [
            'number' => $request->number,
            'expiryMonth' => $request->expiryMonth,
            'expiryYear' => $request->expiryYear,
            'cvv' => $request->cvv
        ];



        // Send purchase request
        $response = $gateway->purchase(
            [
                'amount' => '120.00',
                'currency' => 'MXN',
                'card' => $formData
            ]
        )->send();
         
        // Process response
        if ($response->isSuccessful()) {

            // print_r($response);
            $status2 = '¡Gracias! El pago a través de Stripe se ha realizado correctamente. Llena tus datos para obtener tu boleto vía e-mail.';
            return redirect('/registro-formulario')->with(compact('status2'));

        } elseif ($response->isRedirect()) {
            
            // Redirect to offsite payment gateway
            $response->redirect();

        } else {

            // Payment failed
            //echo $response->getMessage();
            $status2 = '¡Lo sentimos! El pago a través de Stripe no se pudo realizar.';
            return redirect('/stripe-pay')->with(compact('status2'));
        }
    }

    public function save(Request $request)
    {

     $newRegister= new RegistrationForm;

     $newRegister->name= $request->name;
     $newRegister->phone= $request->phone;
     $newRegister->email= $request->email;
     $newRegister->company= $request->company;
     $newRegister->position= $request->position;
     $newRegister->link= 1;

     $newRegister->save();
 
     // email data fo user
        $email_data = array(
            'name' => $newRegister->name,
            'email' => $newRegister->email,
            'id' => $newRegister->id,
        );

        // send email with the template to user
        Mail::send('mails.boleto', $email_data, function ($message) use ($email_data) {
             $message->to($email_data['email'], $email_data['name'])
                ->subject('Tu boleto para el evento')
                ->from('noreply@expodetailmexico.com', 'Expo Detail Mexico');
        });

           // email data2 for owner
        $email_data2 = array(
            'name' => $newRegister->name,
            'email' => $newRegister->email,
            'company' => $newRegister->company,
            'position' => $newRegister->company,
            'id' => $newRegister->id,
        );

        // send email with the template to owner
        Mail::send('mails.userRegistration', $email_data2, function ($message) use ($email_data2) {
            $message->to('contacto@expodetailmexico.com', $email_data2['name'])
                ->subject('Nuevo usuario registrado')
                ->from('noreply@expodetailmexico.com', 'Expo Detail Mexico');
        });

        return view('front.successmail');
    
    
    }
}
