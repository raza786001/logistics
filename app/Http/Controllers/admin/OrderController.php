<?php
// author ahmad khalil
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use db;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Order::get();
        return view('admin.pages.order.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return 'sasadas';
       
        return view('admin.pages.order.create');
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
            // 'email' => 'required',
            // 'password' => 'required',
            // 'is_admin' => '',
        ]);
        Order::create([
            'name' => $request->name,
            // 'email' => $request->email,
            'country_warehouse' => $request->country_warehouse,
            'phone_no' => $request->phone_no,
            'status' => $request->status,
            'type_of_service' => $request->type_of_service,
            // 'approvement' => $request->approvement,
            'total_fees' =>  $request->total_fees,
            // 'is_admin' =>$val,
        ]);
      return redirect('admin/order-view')->with('success','data added');
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
