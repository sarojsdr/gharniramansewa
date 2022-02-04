<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@ecom.com',
            'password' => bcrypt('admin@123'),
            'image' => 'default.png',
            'phone' => '9815310063',
            'role_id' => 1,
            'status' => 1
        ]);

    }
}
