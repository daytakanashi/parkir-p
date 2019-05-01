@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="/parkir/{{$parkirs->id}}/update" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama" placeholder="Sopo Jenengmu" value= "{{$parkirs->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamatmu Gek Endi " value= "{{$parkirs->alamat}}">
                        </div>
                        <div class="form-group">
                            <label for="noPol">Nomor Polisi</label>
                            <input name="noPol" type="text" class="form-control" id="noPol" placeholder="NoPolmu Piro" value= "{{$parkirs->noPol}}">
                        </div>
                        <div class="form-group">
                            <label for="jenisKendaraan">Jenis Kendaraan</label>
                            <select name="jenisKendaraan" class="form-control" id="jenisKendaraan">
                            <option value="Mobil" @if ($parkirs->jenisKendaraan=='Mobil')selected @endif>Mobil</option>
                            <option value="Motor"@if ($parkirs->jenisKendaraan=='Motor')selected @endif>Motor</option>
                            <option value="Sepeda"@if ($parkirs->jenisKendaraan=='Sepeda')selected @endif>Sepeda</option>
                            </select>
                        </div>
                            <button type="submit" class="btn float-right btn-outline-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
