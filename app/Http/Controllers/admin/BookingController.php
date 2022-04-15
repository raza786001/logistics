<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
// use App\Category;
// use App\Service;
// use App\Salon;
// use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
// use Auth;

class BookingController extends Controller
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
        return view('admin.booking.index');
    }

    public function create()
    {
        return view('admin.pages.categories.create');
    }

    public function downloads()
    {
        return view('frontend.pages.downloads');
    }

    public function clients()
    {
        return view('frontend.pages.clients');
    }

    public function faqs()
    {
        return view('frontend.pages.faqs');
    }

    public function contactus()
    {
        return view('frontend.pages.contact-us');
    }
    public function aboutus()
    {
        return view('frontend.pages.aboutus');
    }
    public function login()
    {
        return view('frontend.auth.login');
    }

    public function register()
    {
        return view('frontend.auth.register');
    }
    public function categories()
    {
        $categories = Category::get();
        // dd($category);
        return view('frontend.pages.categories', compact('categories'));
    }
    public function saloons($id)
    {
        $saloons = Salon::where('cat_id', $id)->get();
        // dd($category);
        return view('frontend.pages.listing', compact('saloons'));
    }
    public function listing_details($id)
    {
        $services = Service::where('cat_id', $id)->get();
        // dd($services);
        return view('frontend.pages.listing_details', compact('services'));
    }
    public function owner_register()
    {
        return view('frontend.pages.owner-register');
    }
    public function registerdata(Request $request)
    {
        // dd($request);

        $request->validate([
            'name' => 'bail|required',
            'email' => 'bail|required',
            'gender' => 'bail|required',
            'password' => 'bail|required',
            'password_confirmation' => 'bail|required_with:password|same:password',
            'code' => 'bail|required',
            'phone' => 'bail|required|numeric'
        ]);
        // dd($request);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'code' => $request->code,
            'phone' => '+'.$request->phone,
            'role' => 3, 
        ]);
        return redirect('/user/owner-login');
        // return response()->json(['success' => true, 'msg' => 'Owner Created'], 200);
    }
    public function loginowner()
    {
        return view('frontend.pages.owner-login');
    }
    public function search(Request $request)
    {
        // dd($request);
        $categories = Category::where('name', 'like', '%' . $request->category . '%')->get();
        $salons = Salon::where('name', 'like', '%' . $request->search . '%')->get();
        // dd($request);
        return view('frontend.pages.home', compact('categories', 'salons'));
    }
    public function logindata(Request $request)
    {
        $request->validate([
            'email' => 'bail|required|email',
            'password' => 'bail|required',
        ]);

        $userdata = array(
            'email' => $request->email,
            'password' => $request->password,
            'role' => 3,
        );

        if (Auth::attempt($userdata))
        {
            return redirect('/');
        }else{
            return redirect('/user/owner-login');
        }
    }
}
