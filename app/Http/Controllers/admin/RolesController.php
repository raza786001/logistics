<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index(){
       //$role= Role::where('id',22)->first();
//          $role = Role::create(['name' => 'waqar']);
       //   $role->givePermissionTo('permission_update');
       //   dd('end');
        $permissions = Permission::get();
        return view('admin.pages.roles.create',compact('permissions'));
    }

    public function store(Request $request){
        // dd($request->permission);
       $role = Role::create([
            'name'=>$request->rolename
       ]);

       foreach($request->permission as $per){
        $role->givePermissionTo($per);
        echo $per ."<br>";  
       }
       
        
    }
}
