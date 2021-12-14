<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Kategori;

use App\Models\Kriteria;

class HitungController extends Controller
{
    public function index()
    {
        $batangs = Kategori::where('kriteria_id','1')->select('*')->get();
        $warnas = Kategori::where('kriteria_id','2')->select('*')->get();
        $dauns = Kategori::where('kriteria_id','3')->select('*')->get();
        $pucuks = Kategori::where('kriteria_id','4')->select('*')->get();
        $hasils = Alternatif::with(['alternatif'])->orderBy('rangking', 'ASC')->get();
        $jumlah_alternatif = Alternatif::count();
        return view('welcome',compact('batangs','warnas','pucuks','dauns','hasils','jumlah_alternatif'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Alternatif::query()->truncate();
        $matriks = [];
        $buffer = 0;
        $total = [];
        $i = 0;
        $bobot = Kriteria::select('bobot')->get()->toArray();

        foreach ($request->bentuk_batang as $key => $val) {
            $matriks[$key][0] = round(($val / max($request->bentuk_batang)), 2);
        }
        foreach ($request->warna_batang as $key => $val) {
            $matriks[$key][1] = round(($val / max($request->warna_batang)), 2);
        }
        foreach ($request->daun as $key => $val) {
            $matriks[$key][2] = round(($val / max($request->daun)), 2);
        }
        foreach ($request->pucuk_daun as $key => $val) {
            $matriks[$key][3] = round(($val / max($request->pucuk_daun)), 2);
        }

        foreach ($matriks as $matrik) {
            foreach ($matrik as $key => $val) {
                $buffer = round(($buffer + ($val * $bobot[$key]['bobot'])), 3);
            }
            $total[$i++] = $buffer;
            $buffer = 0;
        }
        $total = collect($total)->sort()->reverse();
        $i=1;
        foreach($total as $t){
            $hasil = new Alternatif;
            $hasil->nama_bibit = $request->nama_bibit[$i-1];
            $hasil->nilai= $t ;
            $hasil->rangking = $i;
            $hasil->save();
            $i++;
        }     
        return redirect()->back();
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
