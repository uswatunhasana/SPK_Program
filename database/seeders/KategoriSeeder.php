<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $array=[
            [ 'kode' => 'C1.1', 'nama_kategori' => 'Besar dan lurus',  'nilai' => '3','kriteria_id' => '1', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C1.2', 'nama_kategori' => 'Besar dan bengkok',  'nilai' => '2','kriteria_id' => '1', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C1.3', 'nama_kategori' => 'Kecil dan lurus',  'nilai' => '1','kriteria_id' => '1', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C2.1', 'nama_kategori' => 'Coklat di bawah hijau ke atas',  'nilai' => '3','kriteria_id' => '2', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C2.2', 'nama_kategori' => 'Hijau tua di bawah hijau muda ke atas',  'nilai' => '2','kriteria_id' => '2', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C2.3', 'nama_kategori' => 'Terdapat bintik hitam',  'nilai' => '1','kriteria_id' => '2', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C3.1', 'nama_kategori' => 'hijau pekat',  'nilai' => '3','kriteria_id' => '3', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C3.2', 'nama_kategori' => 'hijau',  'nilai' => '2','kriteria_id' => '3', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C3.3', 'nama_kategori' => 'hijau muda',  'nilai' => '1','kriteria_id' => '3', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C4.1', 'nama_kategori' => 'Tunas/pucuk memutari batang dan sehat segar',  'nilai' => '3','kriteria_id' => '4', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C4.2', 'nama_kategori' => 'Tunas/pucuk tidak memutari batang dan sehat',  'nilai' => '2','kriteria_id' => '4', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kode' => 'C4.3', 'nama_kategori' => 'Tunas/pucuk tidak memutari batang dan tidak sehat/layu',  'nilai' => '1','kriteria_id' => '4', 'created_at' => now(), 'updated_at' => now() ],
        ];
        foreach($array as $key => $row){
            DB::table('kategoris')->insert($row);
        }
    }
}
