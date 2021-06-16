<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'firstname' => 'Admin',
            'lastname'  => 'Admin',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('admin'),
            'title'     => 'Administrator',
            'isActive'  => 1
        ]);

        \App\Models\User::create([
            'firstname' => 'Manager',
            'lastname'  => 'Manager',
            'email'     => 'manager@manager.com',
            'password'  => bcrypt('manager'),
            'title'     => 'Manager',
            'isActive'  => 1
        ]);

        \App\Models\User::create([
            'firstname' => 'Employee',
            'lastname'  => 'Employee',
            'email'     => 'employee@employee.com',
            'password'  => bcrypt('employee'),
            'title'     => 'Employee',
            'isActive'  => 1
        ]);
        \App\Models\User::factory(10)->create();

        $this->call([
            RolesAndPermissionsSeeder::class
        ]);
    }
}
