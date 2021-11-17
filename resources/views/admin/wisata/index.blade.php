@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Wisata</h1>
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
                    Data Wisata
                    <a href="{{route('wisata.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data Wisata</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>Gambar</th>
                                <th>Nama Wisata</th>
                                <th>Harga</th>
                                <th>alamat</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($wisata as $data)
                            <tr>
                                <td>{{$no+1}}</td>
                                <td><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="Cover"></td>
                                <td>{{$data->nama_wisata}}</td>
                                <td>{{$data->harga}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>
                                    <form action="{{route('wisata.destroy',$data->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('wisata.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('wisata.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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
