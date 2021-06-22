<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'Admin',
            'lastname'  => 'Admin',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('admin'),
            'title'     => 'Administrator',
            'isActive'  => 1
        ]);

        User::create([
            'firstname' => 'Manager',
            'lastname'  => 'Manager',
            'email'     => 'manager@manager.com',
            'password'  => bcrypt('manager'),
            'title'     => 'Manager',
            'isActive'  => 1
        ]);

        User::create([
            'firstname' => 'Employee',
            'lastname'  => 'Employee',
            'email'     => 'employee@employee.com',
            'password'  => bcrypt('employee'),
            'title'     => 'Employee',
            'isActive'  => 1
        ]);


        User::factory(7)->create();
    }
}
