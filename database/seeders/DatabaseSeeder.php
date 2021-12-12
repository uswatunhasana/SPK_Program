<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            UserSeeder::class
        ]);
        $this->call([
            KriteriaSeeder::class
        ]);
        $this->call([
            KategoriSeeder::class
        ]);
    }
}
