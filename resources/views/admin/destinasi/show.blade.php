@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-header">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Destinasi</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Destinasi</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" value="{{$destinasi->nama_provinsi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Nama Kota</label>
                        <input type="text" name="nama_kota" value="{{$destinasi->nama_kota}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Wisata</label>
                        <input type="text" name="" class="form-control" value="{{$destinasi->wisata->nama_wisata}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <input type="text" name="kategori" value="{{$destinasi->kategori}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tiket Masuk</label>
                        <input type="number" name="harga" value="{{$destinasi->harga}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" value="{{$destinasi->alamat}}" class="form-control" readonly>

                    </div>
                    <div class="form-group">
                        <label for="">Thumbnail</label>
                        <br>
                        <img src="{{ $destinasi->image() }}" style="width:350px; height:350px; padding:10px;" />
                    </div>
                    <div class="form-group">
                        <a href="{{url('admin/destinasi')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
