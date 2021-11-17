@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambahkan Data Wilayah</h1>
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
                        <label for=""> Nama provinsi</label>
                        <input type="text" name="nama_provinsi" value="{{$destinasi->nama_provinsi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Nama Kota</label>
                        <input type="text" name="nama_kota" value="{{$destinasi->nama_kota}}" class="form-control" readonly>
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
