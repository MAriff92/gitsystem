<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => "MOHD ARIFF BIN MOHD PAUZI",
            'email' => "ariff.pauzi@transwater.com.my",
            'password' => "$2y$10$6Acvk8Q2v1axJeEcoDLYn.KpZgijv65kMgCN8lwY.7Xz79kFzicai",
            'email_verified_at' => "2021-04-06 05:38:48",
            'type'  => "Admin",
        ]);
    }
}
