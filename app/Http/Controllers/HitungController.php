<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use App\Models\Kriteria;

class HitungController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $matriks=[];
        $buffer= 0;
        $total= [];
        $i=0;
        $bobot= Kriteria::select('bobot')->get()->toArray();
        
        foreach ($request->bentuk_batang as $key => $val) {
            $matriks[$key][0] = round(($val/max($request->bentuk_batang)),2); 
        }
        foreach ($request->warna_batang as $key => $val) {
            $matriks[$key][1] = round(($val/max($request->warna_batang)),2); 
        }
        foreach ($request->daun as $key => $val) {
            $matriks[$key][2] = round(($val/max($request->daun)),2); 
        }
        foreach ($request->pucuk_daun as $key => $val) {
            $matriks[$key][3] = round(($val/max($request->pucuk_daun)),2); 
        }
    
        foreach($matriks as $matrik){
            foreach($matrik as $key => $val){
                $buffer= round(($buffer + ($val*$bobot[$key]['bobot'])),3);
            }
            $total[$i++] = $buffer;
            $buffer=0;
        }
        $total= collect($total)->sort()->reverse();
        $r=0;
        foreach ($total as $key => $val ){
            $hasil = new Alternatif;
            $hasil->nama_bibit = $request->nama_bibit;
            $hasil->nilai = $val;
            $hasil->rangking = $r++;
        }

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
