<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{

    public function run()
    {
        $array=[
            [ 'kode' => 'C1', 'nama_kriteria' => 'Batang',  'jenis' => 'benefit','bobot' => '0.4', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C2', 'nama_kriteria' => 'Warna Batang',  'jenis' => 'benefit','bobot' => '0.25', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C2', 'nama_kriteria' => 'Kecerahan Daun',  'jenis' => 'benefit','bobot' => '0.2', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C2', 'nama_kriteria' => 'Pucuk Daun',  'jenis' => 'benefit','bobot' => '0.15', 'created_at' => now(), 'updated_at' => now() ],   
        ];
        foreach($array as $key => $row){
            DB::table('kriterias')->insert($row);
        }
    }
}
