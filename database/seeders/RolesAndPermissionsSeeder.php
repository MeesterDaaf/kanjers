<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        foreach (Area::get() as $item) {
            Permission::create(['name' => 'index-' . $item]);
            Permission::create(['name' => 'view-' . $item]);
            Permission::create(['name' => 'edit-' . $item]);
            Permission::create(['name' => 'create-' . $item]);
            Permission::create(['name' => 'delete-' . $item]);
        }

        //create super admin user
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
        $user = User::where('title', 'Administrator')->first();
        $user->assignRole('super-admin');

        //create manager user
        $role = Role::create(['name' => 'manager']);
        $user = User::where('title', 'Manager')->first();
        $user->assignRole('manager');
        $role->givePermissionTo(['edit-users', 'index-roles']);

        //create employee user
        $role = Role::create(['name' => 'employee']);
        $user = User::where('title', 'Employee')->first();
        $user->assignRole('employee');
        $role->givePermissionTo('index-users');
    }
}
