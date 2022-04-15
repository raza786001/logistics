<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = Permission::create(['name' => 'permission_create']);
        $permission = Permission::create(['name' => 'permission_update']);
        $permission = Permission::create(['name' => 'permission_delete']);

    }
}
