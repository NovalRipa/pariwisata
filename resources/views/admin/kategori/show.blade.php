@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-header">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Kategori</h1>
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
                <div class="card-header">Kategori</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <input type="text" name="" class="form-control" value="{{$kategori->wisata->nama_kota}}" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('admin/kategori')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
