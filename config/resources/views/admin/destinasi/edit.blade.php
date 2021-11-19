@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-header">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Destinasi</h1>
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
                    <form action="{{route('destinasi.update',$destinasi->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Masukan Nama Provinsi</label>
                            <input type="text" name="nama_provinsi" value="{{$destinasi->nama_provinsi}}" class="form-control @error('nama_provinsi') is-invalid @enderror">
                            @error('nama_provinsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nama Kota</label>
                            <input type="text" name="nama_kota" value="{{$destinasi->nama_kota}}" class="form-control @error('nama_kota') is-invalid @enderror">
                            @error('nama_kota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Wisata</label>
                            <select name="wisata_id" class="form-control @error('wisata_id') is-invalid @enderror" >
                                @foreach($wisata as $data)
                                    <option value="{{$data->id}}" {{$data->id == $destinasi->wisata_id ? 'selected="selected"' : '' }}>{{$data->nama_wisata}}</option>
                                @endforeach
                            </select>
                            @error('wisata_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <input type="text" name="kategori" class="form-control @error('kategori') is-invalid @enderror">
                            @error('kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tiket Masuk</label>
                            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror">
                            @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Alamat</label>
                            <input type="text" name="alamat" value="{{$destinasi->alamat}}" class="form-control @error('alamat') is-invalid @enderror">
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Gambar Wisata</label>
                            <br>
                            <img src="{{ $destinasi->image() }}" height="75" style="padding:10px;" />
                            <input type="file" name="cover" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
