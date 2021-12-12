<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Alternatif;

class DashboardController extends Controller
{

    public function index()
    {
        $batangs = Kategori::where('kriteria_id','1')->select('*')->get();
        $warnas = Kategori::where('kriteria_id','2')->select('*')->get();
        $dauns = Kategori::where('kriteria_id','3')->select('*')->get();
        $pucuks = Kategori::where('kriteria_id','4')->select('*')->get();
        $alternatifs = Alternatif::all();
        $jumlah_alternatif = Alternatif::count();
        return view('welcome',compact('batangs','warnas','pucuks','dauns','alternatifs','jumlah_alternatif'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
