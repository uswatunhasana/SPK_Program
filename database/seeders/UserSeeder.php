<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UserSeeder extends Seeder
{

    public function run()
    {
        $array = [
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('890admin'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($array as $key => $row) {
            DB::table('users')->insert($row);
        }
    }
}
