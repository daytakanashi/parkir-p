@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nomor Polisi</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Masuk</th>
                            <th scope="col">Keluar</th>
                            <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $laporans as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->noPol}}</td>
                                <td>{{$item->tanggal}}</td>
                                <td>{{$item->masuk}}</td>
                                <td>{{$item->keluar}}</td>
                                <td>{{$item->bayar}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
