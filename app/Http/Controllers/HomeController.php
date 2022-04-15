<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          //$role = Role::create(['name' => 'admin']);
          //$permission = Permission::create(['name' => 'create category ']);
        //   $permission = Permission::create(['guard_name' => 'web', 'name' => 'category create']);

        //   $role=Role::find(3);

        //   $role->givePermissionTo($permission);
        //  $permission->assignRole($role);
         auth()->user()->assignRole('admin');
         auth()->user()->givePermissionTo('category create');
    //       $role=Role::find(1);
    //    $permission=Permission::find(1);
    //    $role->givePermissionTo($permission);
    //  $role->removeRole($role);




    // Create a manager role for users authenticating with the api guard:
//$role = Role::create(['guard_name' => 'web', 'name' => 'vendor']);

// Define a `edit_project` permission for the admin users belonging to the api guard
//$permission = Permission::create(['guard_name' => 'web', 'name' => 'create']);
//return User::role('vendor')->get();
        return view('home');
    }
}
