<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\CompanyQuestion;
use App\Models\Service;
use App\Models\Sponsor;
use App\Models\Faq;
use App\Models\CompanyVideo;
use App\Models\ServicePhoto;
use App\Models\ServiceVideo;
use App\Models\VideoFaq;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function inicio()
    {
        $revslider=Slider::all();
        $questions=CompanyQuestion::all();
        $servicios=Service::all();
        $patrocinadores=Sponsor::all();
        $preguntas=Faq::all();
        $multimedia=CompanyVideo::latest()->take(1)->get();
        $service_photo=ServicePhoto::latest()->take(1)->get();
        $service_video=ServiceVideo::latest()->take(1)->get();
        $faq_video=VideoFaq::latest()->take(1)->get();
        return view('inicio', compact('revslider','questions', 'servicios','patrocinadores','preguntas','multimedia', 'service_photo','service_video','faq_video'));
    }


}
