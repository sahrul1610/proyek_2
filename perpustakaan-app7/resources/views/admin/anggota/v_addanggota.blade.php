@extends('Layout.v_template')
@section('title', 'Tambah Anggota')
@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-xs-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">

                <h3 class="box-title">@yield('title')</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/anggota/insert" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIS</label>
                        <input type="text" class="form-control"   name="nis" placeholder="Nis" value="{{ old('Nis') }}">
                        <div class="text-danger">
                            @error('nis')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text" class="form-control"  name="nama_anggota" placeholder="nama anggota" value="{{ old('nama_anggota') }}">
                        <div class="text-danger">
                            @error('nama_anggota')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
                        <div class="text-danger">
                            @error('alamat')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tempat, Tanggal Lahir</label>
                        <input type="text" class="form-control" name="ttl_anggota" placeholder="Tempat Tanggal Lahir " value="{{ old('ttl_anggota') }}">
                        <div class="text-danger">
                            @error('ttl_anggota')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">No Telephone</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="No Telephone" value="{{ old('no_hp') }}">
                        <div class="text-danger">
                            @error('status_anggota')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    @endsection
