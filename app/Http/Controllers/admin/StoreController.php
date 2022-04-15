<?php

namespace App\Http\Controllers\admin;

use App\Models\Store;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\UpdateStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores=Store::get();
        return view('admin.pages.stores.index',compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendor = User::where('is_admin','=','2')->get();
        $category = Category::where('status','=','1')->get();
        
        return view('admin.pages.stores.create',compact('vendor','category'));
       // return view('admin.pages.stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'category' => 'required',
            'vendor' => 'required',
        ]);
        Store::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'category'=>$request->category,
            'vendor'=>$request->vendor,

        ]);
        return redirect('/admin/stores')->with('success','Store Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store,$id)
    {
        $category = Category::where('status','=','1')->get();
        $vendor = User::where('is_admin','=','2')->get();
         $stores=Store::where('id',$id)->first();
        return view('admin.pages.stores.edit',compact('stores','category','vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store,$id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStoreRequest  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        Store::where('id',$request->id)->update([
           'name'=>$request->name,
           'address'=>$request->address,
           'phone'=>$request->phone,
        ]);
        return redirect('/admin/stores')
                    ->with('success',"Store data Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store,$id)
    {
        Store::where('id',$id)->delete();
        return redirect('/admin/stores');
    }
}
