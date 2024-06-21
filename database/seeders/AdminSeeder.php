<?php

namespace Database\Seeders;

use App\Models\Admin;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::truncate();
        $admin = Admin::create([
           // 'name' => 'Admin',
           // 'type' => 'admin',
            'email' => 'yeasir123@gmail.com',
            'password' => Hash::make('1234'),
            
           // 'mobile' => '01631663679',
          //  'picture' => '',
         //   'status' => 1,
        ]);
    }
}
