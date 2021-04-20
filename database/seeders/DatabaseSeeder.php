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
            'firstname' => 'admin',
            'lastname' => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('welkom')
        ]);
        \App\Models\User::factory(10)->create();
    }
}
