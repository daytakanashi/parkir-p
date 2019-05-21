<?php

namespace App\Http\Controllers;

use App\Enter;
use Illuminate\Http\Request;

class EnterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enter=Enter::paginate(10);

        return view('enter.index', ['enters' => $enter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Enter  $enter
     * @return \Illuminate\Http\Response
     */
    public function show(Enter $enter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enter  $enter
     * @return \Illuminate\Http\Response
     */
    public function edit(Enter $enter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enter  $enter
     * @return \Illuminate\Http\Response
     */
    public function masuk($id)
    {
        $enter= Enter::where('id',$id)
        ->first();
        $enter->masuk = date('H:i:s');
        $enter->update();

        $laporan= \App\Laporan::where('id',$id)
        ->first();
        $laporan->masuk = date('H:i:s');
        $laporan->update();
        
        return redirect('/enter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enter  $enter
     * @return \Illuminate\Http\Response
     */
    public function keluar($id)
    {
        $enter= Enter::where('id',$id)
        ->first();
        $enter->keluar = date('H:i:s');
        $enter->update();
        
        $laporan= \App\Laporan::where('id',$id)
        ->first();
        $laporan->keluar = date('H:i:s');
        $laporan->update();

        return redirect('/enter');
    }
}
