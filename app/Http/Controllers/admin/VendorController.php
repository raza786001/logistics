<?php
// author ahmad khalil
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Vendor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    if(auth()->user()->is_admin==2){
        $vendors = User::where('id',auth()->user()->is_admin)->get();
    }else{
        $vendors=User::get();
    }
        
        return view('admin.pages.vendors.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return 'sasadas';
       
        return view('admin.pages.vendors.create');
    }
    public function delete_vendor($id){

        User::where('id',$id)->delete();
        return redirect('/admin/vendors')->with('success','Vendor deleted successfully');
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val=2;
        $request->validate([
            
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'is_admin' => '',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request['password']),
            'is_admin' =>$val,
        ])->assignRole('vendor');
      return redirect('/admin/vendors')->with('success','data added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor,$id)
    {
        $vendors = User::where('id', $id)->first();
        
         return view('admin.pages.vendors.edit', compact('vendors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor,$id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        $request->validate([
            
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::where('id',$request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'is_admin' =>2,
            
        ]);
         return redirect('/admin/vendors')
                    ->with('success',"Vendor Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
}
