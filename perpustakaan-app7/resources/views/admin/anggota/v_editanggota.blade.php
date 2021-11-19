@extends('Layout.v_template')
@section('title','Edit Anggota')

@section('content')
<p><a href="/anggota" class="btn btn-success tbn-sm">Kembali</a></p>
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
        <form role="form" action="/anggota/update/{{ $edit->id_anggota }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">nis</label>
              <input type="text" class="form-control"   name="nis" placeholder="nis" value="{{ $edit->nis }}" readonly >
              <div class="text-danger">
                @error('nis')
                {{ $message }}
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">nama_anggota</label>
              <input type="text" class="form-control"  name="nama_anggota" placeholder="nama_anggota" value="{{ $edit->nama_anggota }}">
              <div class="text-danger">
                @error('nama_anggota')
                {{ $message }}
                  @enderror
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="alamat" value="{{ $edit->alamat }}">
                <div class="text-danger">
                  @error('alamat')
                  {{ $message }}
                    @enderror
                </div>
              </div>
            <div class="form-group">
                <label for="exampleInputPassword1">ttl_anggota</label>
                <input type="text" class="form-control" name="ttl_anggota" placeholder="ttl_anggota" value="{{ $edit->ttl_anggota }}">
                <div class="text-danger">
                  @error('ttl_anggota')
                  {{ $message }}
                    @enderror
                </div>
              </div>
            <div class="form-group">
                <label for="exampleInputPassword1">status_anggota"</label>
                <input type="text" class="form-control" name="status_anggota" placeholder="status_anggota" value="{{ $edit->status_anggota }}">
                <div class="text-danger">
                  @error('status_anggota')
                  {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">NoHp"</label>
                <input type="text" class="form-control" name="NoHp" placeholder="NoHp" value="{{ $edit->NoHp}}">
                <div class="text-danger">
                  @error('NoHp')
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

