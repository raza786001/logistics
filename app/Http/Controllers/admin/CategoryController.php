<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
// use App\Service;
// use App\Salon;
 //use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
// use Auth;

class CategoryController extends Controller
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
        $categories = Category::get();
        return view('admin.pages.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.pages.categories.create');
    }

    public function show($id)
    {
       
        $category = Category::where('id', $id)->first();
        
        return view('admin.pages.categories.edit', compact('category'));

    }

    public function destroy($id)
    {
        dd($id);
    }

    public function delete_category($id)
    {
        // dd($id);
        Category::where('id',$id)->delete();
            // $category->delete();
            return redirect('/admin/categories')
            ->with('success',"category deleted");
    }
    
    public function update(Request $request){
  //  dd($request);
  $request->validate([
    'image' => 'required',
    'name' => 'required|unique:categories'
]);
// dd($request);
// $category = new Category();
$image_name = 0;
if($request->hasFile('image'))
{
    $image = $request->file('image');
    $name = 'category_'.time().'.'. $image->getClientOriginalExtension();
    $destinationPath = public_path('/storage/images/categories');
    $image->move($destinationPath, $name);
    // $category->image = $name;
    $image_name = $name;
}
// dd('Move Files');
Category::where('id',$request->id)->update([
    'name'=>$request->name,
    'status' =>1,
    'image' => $image_name
]);
return redirect('/admin/categories')
            ->with('success',"category Updated");
    }

    public function store(Request $request)
    {
        //  dd($request);
        $request->validate([
            'image' => 'required',
            'name' => 'required|unique:categories'
        ]);
        // dd($request);
        // $category = new Category();
        $image_name = 0;
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $name = 'category_'.time().'.'. $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/images/categories');
            $image->move($destinationPath, $name);
            // $category->image = $name;
            $image_name = $name;
        }
        // dd('Move Files');
        Category::create([
            'name'=>$request->name,
            'status' =>1,
            'image' => $image_name
        ]);
        // $category->name = $request->name;
        // $category->id = $request->id;
        // $category->status = 1;
        // $category->save();
        $request->session()->flash('status', 'Task was successful!');
        return redirect('/admin/categories')
            ->with('success',"category create");
        // return response()->json(['success' => true,'data' => $category, 'msg' => 'category create'], 200);
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
