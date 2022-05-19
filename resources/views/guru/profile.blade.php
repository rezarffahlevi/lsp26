@extends('layouts.master')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Profile Data Guru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <p>{{$guru->nama}}</p>
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <p>{{$guru->nip}}</p>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <p>{{$guru->jabatan}}</p>
                    </div>
                    <div class="form-group">
                        <label for="pendidilam">Pendidikan</label>
                        <p>{{$guru->pendidilam}}</p>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <p>{{$guru->tempat_lahir}}</p>
                    </div>
                    <div class="form-group">
                        <label for="tangal_lahir">Tanggal Lahir</label>
                        <p>{{$guru->tangal_lahir}}</p>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <p>{{$guru->agama}}</p>
                    </div>
                    <div class="form-group">
                        <label for="telp">No. Telp</label>
                        <p>{{$guru->telp}}</p>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <p>{{$guru->alamat}}</p>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <a href="/guru" class="btn btn-primary">Kembali</a>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection