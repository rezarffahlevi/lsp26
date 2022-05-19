@extends('layouts.master')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Data Guru</h3>
        @if(session('pesan'))
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss='alert' aria-hidden="alert">&times;</button>
            <h4><i class="fa fa-check"></i> Success</h4>
            {{session('pesan')}}
        </div>
        @endif
        <div class="box-header">
            <a href="/guru/create" class="btn btn-primary btn-sm">
                <i class="fa fa-plus-square"></i> Tambah Guru
            </a>
        </div>
    </div>
    <div class="box-body">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Alamat</th>
                        <th>Photo</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach ($guru as $data)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->nip }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td><img src="{{ url('images/'.$data->photo) }}" width="50" /></td>
                        <td>
                            <a href="/guru/profile/{{ $data->id }}" class="btn btn-success btn-sm">
                                Detail
                            </a>
                            <a href="/guru/edit/{{ $data->id }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                            <a href="/guru/delete/{{ $data->id }}" class="btn btn-danger btn-sm">
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php $no++ ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection