<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
// use App\Category;
// use App\Service;
// use App\Salon;
 use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

// use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      

        return view('frontend.pages.home');
    }

    public function about()
    {
        return view('frontend.pages.about-us');
    }

    public function shipping_calculator()
    {
        return view('frontend.pages.shipping-calculator');
    }

    public function services()
    {
        return view('frontend.pages.services');
    }

    public function contactus()
    {
        return view('frontend.pages.contact-us');
    }

    public function testimonial()
    {
        return view('frontend.pages.testimonial');
    }
    
}
