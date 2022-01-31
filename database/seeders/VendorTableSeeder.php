<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Seeder;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::create([
            'name' => 'Vendor',
            'email' => 'vendor@ecom.com',
            'password' => bcrypt('vendor@123'),
        ]);
    }
}
