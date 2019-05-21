@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard
                    <a type="button" class="btn btn-outline-primary float-right" href="/parkir/tambah">Tambah</a>
                </div>
                

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nomor Polisi</th>
                            <th scope="col">Jenis Kendaraan</th>
                            <th scope="col">Edit Data</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $parkirs as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->noPol}}</td>
                            <td>{{$item->jenisKendaraan}}</td>
                            <td>
                                <a class="btn btn-outline-warning" href="/parkir/{{$item->id}}/edit">Edit</a>
                                <a class="btn btn-outline-danger" href="/parkir/{{$item->id}}/destroy">Hapus</a>
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
