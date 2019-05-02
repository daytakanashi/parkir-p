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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $enters as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->noPol}}</td>
                                <td>{{$item->tanggal}}</td>
                                <td>{{$item->masuk}}</td>
                                <td>{{$item->keluar}}</td>
                                <td>
                                    <a class="btn btn-outline-warning" href="/enter/{{$item->id}}/keluar">Keluar</a>
                                    <a class="btn btn-outline-danger" href="/enter/{{$item->id}}/masuk">Masuk</a>
                                </td>
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
