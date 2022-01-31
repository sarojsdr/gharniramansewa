<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'site_name' => 'Ecom',
            'site_favicon' => 'uploads/favicon.png',
            'site_logo' => 'uploads/logo.png',
            'contact_number' => '9815310063',
            'contact_email' => 'admin@ecom.com',
            'address' =>  'itahari',

        ]);
    }
}
