@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-header">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Wisata</h1>
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
                <div class="card-header">Data Wisata</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Wisata</label>
                        <input type="text" name="nama_wisata" value="{{$wisata->nama_wisata}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" name="harga" value="{{$wisata->harga}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar Wisata</label>
                        <br>
                        <img src="{{ $wisata->image() }}" style="width:350px; height:350px; padding:10px;" />
                    </div>
                    <div class="form-group">
                        <a href="{{url('admin/wisata')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
