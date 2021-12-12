<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'alternatif_id',
        'nilai',
        'rangking',
    ];
    public function alternatif()
    {
    	return $this->belongsTo(Hasilnilai::class, 'alternatif_id');
    }
}
