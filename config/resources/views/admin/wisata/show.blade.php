@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambahkan Data Wisata</h1>
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
                        <label for=""> Nama Wisata</label>
                        <input type="text" name="name_wisata" value="{{$wisata->nama_wisata}}" class="form-control" readonly>
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
