<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class PermissionController extends Controller
{
    public function index(){
        return view('admin.pages.permissions.create');
    }
    public function store(Request $request){
       
        Permission::create([
          'name'=>$request->permissionname
        ]);
    }
}
