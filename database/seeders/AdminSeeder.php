<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'     => 'Administrator',
            'email'    => 'admin@email.com',
            'role'    => 'admin',
            'password' => bcrypt('password'),
        ]);
    
        Admin::create([
            'name'     => 'Member',
            'email'    => 'member@email.com',
            'role'    => 'member',
            'password' => bcrypt('password'),
        ]);
    }
}
