@extends('layouts.master')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ubah Data Guru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/guru/update/{{$guru->id}}">
            @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$guru->nama}}">
                        <div class="text-danger">
                            @error('nama')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" class="form-control" placeholder="NIP" value="{{$guru->nip}}">
                        <div class="text-danger">
                            @error('nip')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="{{$guru->jabatan}}">
                        <div class="text-danger">
                            @error('jabatan')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan</label>
                        <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" value="{{$guru->pendidikan}}">
                        <div class="text-danger">
                            @error('pendidikan')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{$guru->tempat_lahir}}">
                        <div class="text-danger">
                            @error('tempat_lahir')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{$guru->tanggal_lahir}}">
                        <div class="text-danger">
                            @error('tanggal_lahir')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select class="form-control" name="agama" value="{{$guru->agama}}">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Budha</option>
                            <option>Katolik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telp">No. Telp</label>
                        <input type="text" name="telp" class="form-control" placeholder="No. Telp" value="{{$guru->telp}}">
                        <div class="text-danger">
                            @error('telp')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{$guru->alamat}}">
                        <div class="text-danger">
                            @error('alamat')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection