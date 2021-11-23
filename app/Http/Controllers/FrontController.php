<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactContact;
use App\Models\ContactCompany;
use App\Models\RegistrationForm;
use App\Models\PrivacyNotice;
use App\Models\Term;
use Dompdf\Dompdf;
use Dompdf\Options;

use App\Models\Description;
use App\Models\PhotoDescriptionGral;
use App\Models\ThruVideoTime;
use App\Models\ThruTime;
use App\Models\Testimonial;

use App\Models\Marca;
use App\Models\ExhibitorImage;
use App\Models\BrandVideo;
use App\Models\MademeAnExhibitor;

use App\Models\Master;
use App\Models\Lecturer;
use Carbon\Carbon;

use App\Models\ExposerImage;
use App\Models\Benefit;
use App\Models\Exponent;


use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;




class FrontController extends Controller
{

    public function register()
    {   
          
        return view ('front.pago');
    }

     public function form()
    {   
        
        return view ('front.registro');
    }

      public function stripeformulario()
    {     
        return view ('front.stripeform');
    }

    public function printlabel ($id){

        $user = RegistrationForm::find($id);
        $this->myPDF($id);
        return view('registereduser', compact('user'));
    }

    public function myPDF($id)
    {
        $user = RegistrationForm::find($id);
        $data = [
            'user'    => $user->name,
            'id' => $user->id
        ];
     //\PDF::setOptions(['isRemoteEnabled' => TRUE, 'defaultPaperSize'=> 'A4']);

        $dompdf= \PDF::loadView('registereduser2', $data)->setPaper('letter', 'portrait');;
        return $dompdf->download('boleto.pdf');

    }

    public function AvisoPrivacidad()
    {
        $footer=ContactCompany::latest()->take(1)->get();
        $aviso=PrivacyNotice::latest()->take(1)->get();
        return view('front.avisodeprevacidad', compact('aviso','footer'));
    }

    public function TerminosCondiciones()
    {
        $footer=ContactCompany::latest()->take(1)->get();
        $terminos=Term::latest()->take(1)->get();
        return view('front.terminosycondiciones', compact('terminos','footer'));
    }

    public function Nosotros()
    {
        $description=Description::latest()->take(1)->get();
        $des_photo=PhotoDescriptionGral::latest()->take(1)->get();
        $video_thru=ThruVideoTime::latest()->take(1)->get();
        $thru=ThruTime::all();
        $testimonial=Testimonial::all();
        return view('front.pages.nosotros', compact('description','des_photo','video_thru','thru','testimonial')); 
    }


    public function Marcas()
    {
        $marcas = Marca::paginate(8);
        $videos = BrandVideo::paginate(2);
        $image_exhibitor = ExhibitorImage::latest()->take(1)->get();
        return view('front.pages.marcas', compact('marcas','videos','image_exhibitor')); 
    }

    public function Cronograma()
    {
        $events = Master::orderBy('date', 'asc')->get();
        $free_events = Lecturer::orderBy('date', 'asc')->get();
 
        $juntos=[];
        foreach ($events as $key => $value) {
            $juntos[]=$value;
        }
           foreach ($free_events as $key => $value) {
            $juntos[]=$value;
        }

        $this->attributes['date'] = $juntos;
        arsort($juntos);
        

        return view('front.pages.cronograma', compact('free_events','events','juntos')); 
    }

    public function Magistral()
    {
        $benefits=Benefit::all();
        $multimedia=ExposerImage::latest()->take(1)->get();
        $expositor=Exponent::paginate(9);
        return view('front.pages.magistral', compact('benefits','multimedia','expositor')); 
    }

      public function ExpositorFormulario( Request $request)
    {
        if ($request->capcha !=null) {
            abort(403, 'Intento de SPAM registrado');
        }
        $formulario= MademeAnExhibitor::create($request->all());

        // email data for owner
        $email_data = array(
            'name' => $formulario->name,
            'email' => $formulario->email,
            'mensaje' => $formulario->message,
            'id' => $formulario->id,
        );

        // send email with the template to owner
        Mail::send('mails.expositorForm', $email_data, function ($message) use ($email_data) {
            $message->to('contacto@expodetailmexico.com', $email_data['name'])
                ->subject('Nuevo formulario de expositor')
                ->from('noreply@expodetailmexico.com', 'Expo Detail Mexico');
        });
        return redirect()->back()->with('success','Mensaje enviado');
    }



    public function Contacto()
    {
        return view('front.pages.contacto');
    }


    public function ContactoFormulario( Request $request)
    {
        if ($request->capcha !=null) {
            abort(403, 'Intento de SPAM registrado');
        }

        $formulario= ContactForm::create($request->all());

        // email data for owner
        $email_data = array(
            'name' => $formulario->name,
            'email' => $formulario->email,
            'subject' => $formulario->subject,
            'mensaje' => $formulario->message,
            'id' => $formulario->id,
        );

        // send email with the template to owner
        Mail::send('mails.contactForm', $email_data, function ($message) use ($email_data) {
            $message->to('contacto@expodetailmexico.com', $email_data['name'])
                ->subject('Nuevo formulario de contacto')
                ->from('noreply@expodetailmexico.com', 'Expo Detail Mexico');
        });
        return redirect()->back()->with('success','Mensaje enviado');
    }
}
