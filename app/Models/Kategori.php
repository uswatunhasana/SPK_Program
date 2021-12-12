<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'kode',
        'nama_kategori',
        'nilai',
        'kriteria_id',
    ];
    public function kriteria()
    {
    	return $this->belongsTo(Kriteria::class, 'kriteria_id');
    }
}
