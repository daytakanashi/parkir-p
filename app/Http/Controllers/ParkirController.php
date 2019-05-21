<?php

namespace App\Http\Controllers;

use App\Parkir;
use Illuminate\Http\Request;

class ParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parkir=Parkir::paginate(10);

        return view('parkir.index', ['parkirs' => $parkir]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parkir.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parkir= new Parkir;
        $parkir->nama = $request['nama'];
        $parkir->alamat = $request['alamat'];
        $parkir->jenisKendaraan = $request['jenisKendaraan'];
        $parkir->noPol = $request['noPol'];
        $parkir->save();

        $enter= new \App\Enter;
        $enter->nama = $request['nama'];
        $enter->noPol = $request['noPol'];
        $enter->tanggal = date('Y-m-d');
        $enter->masuk = '0';
        $enter->keluar = '0';
        $enter->save();
        
        $jnsKndraan = $request['jenisKendaraan'];
        if($jnsKndraan == "Mobil"){
            $ongkos = "5000";
        }else if($jnsKndraan == "Motor"){
            $ongkos = "2000";
        }else if($jnsKndraan == "Sepeda"){
            $ongkos = "1000";
        }

        $laporan= new \App\Laporan;
        $laporan->nama = $request['nama'];
        $laporan->noPol = $request['noPol'];
        $laporan->jenisKendaraan = $request['jenisKendaraan'];
        $laporan->tanggal = date('Y-m-d');
        $laporan->masuk = '0';
        $laporan->keluar = '0';
        $laporan->bayar = $ongkos;
        $laporan->save();

        return redirect('/parkir');
    }

    public function show(Parkir $parkir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parkir  $parkir
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parkir=Parkir::find($id);
        return view('parkir.edit', ['parkirs' => $parkir]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parkir  $parkir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $parkir = parkir::find($id);
        $parkir->update($request->all());
        return redirect('/parkir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parkir  $parkir
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parkir = parkir::find($id);
        $parkir->delete($id);

        $parkir = \App\Enter::find($id);
        $parkir->delete($id);
        
        $parkir = \App\Laporan::find($id);
        $parkir->delete($id);

        return redirect()->back();
    }
}
