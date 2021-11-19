@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-header">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0"> Data Destinasi</h1>
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
                <div class="card-header">
                    Data Destinasi
                    <a href="{{route('destinasi.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Destinasi</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Provinsi</th>
                                <th>Nama Kota</th>
                                <th>Kategori</th>
                                <th>Nama Wisata</th>
                                <th>Tiket Masuk</th>
                                <th>Alamat</th>
                                <th>Thumbnail</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($destinasi as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama_provinsi}}</td>
                                <td>{{$data->nama_kota}}</td>
                                <td>{{$data->wisata->nama_wisata}}</td>
                                <td>{{$data->kategori}}</td>
                                <td>{{$data->harga}}</td>
                                <td>{{$data->alamat}}</td>
                                <td><img src="{{$data->image()}}" alt="" style="width:100px; height:100px;" alt="Cover"></td>
                                <td>
                                    <form action="{{route('destinasi.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('destinasi.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('destinasi.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
