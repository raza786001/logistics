<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Vendor;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function index(){
        $id= auth()->user();
        
        
        $vendors = User::get();
        
        return view('admin.pages.allusers.index', compact('vendors'));    
    }

    public function store(Request $request)
    {
       // dd($request);
        $val=2;
        $request->validate([
            
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'is_admin' => '',
        ]);
       $user= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request['password']),
            'is_admin' =>$val,
        ])->assignRole($request->rolename);
       
        foreach( $user->getPermissionsViaRoles() as $per){
              $user->givePermissionTo($per);
        }
      return redirect('/admin/vendors')->with('success','data added');
    }
    public function show(){
        $roles = Role::get();
        $permissions = Permission::get();
        return view('admin.pages.allusers.create',compact('roles','permissions'));
    }
}
