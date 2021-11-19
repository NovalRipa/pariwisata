@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-header">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0"> Data Kategori</h1>
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
                    Data Kategori
                    <a href="{{route('kategori.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Kategori</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>Kategori</th>
                                <th>Thumbnail</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($kategori as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->kategori}}</td>
                                <td><img src="{{$data->image()}}" alt="" style="width:100px; height:100px;" alt="Cover"></td>
                                <td>
                                    <form action="{{route('kategori.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
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
