<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;

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
        $data = $request->all();
        $hasil_alternatif = new Alternatif;

        foreach ($data as $key => $value) {
            $hasil_alternatif->nama_alternatif = $re
            return $value;
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
