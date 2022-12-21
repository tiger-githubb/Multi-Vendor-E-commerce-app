<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            [
                'id' => 1,
                'name' => 'Super Admin',
                'type' => 'superadmin',
                'vendor_id' =>0, 
                'mobile' => '90 00 00 00',
                'email' => 'admin@admin.com',
                'password' => '$2a$12$gKDbRtxpEmxry/Nn6uLgP.3mAztwRDBrlHHud0hgVz6KK3ELmZZru',
                'image' => '',
                'status' => 1,
            ]
            ];

            Admin::insert($adminRecords);
    }
}
