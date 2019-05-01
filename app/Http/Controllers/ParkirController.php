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
        return redirect()->back();
    }
}
