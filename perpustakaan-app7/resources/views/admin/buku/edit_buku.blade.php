@extends('Layout.v_template')
@section('title','Edit Buku')

@section('content')
<p><a href="/buku" class="btn btn-success tbn-sm">Kembali</a></p>
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
        <form role="form" action="/buku/update/" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_buku" value="{{ $edit->id_buku }}">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Kode buku</label>
              <input type="text" class="form-control"   name="kode_buku" placeholder="kode buku" value="{{ $edit->kode_buku }}" readonly >
              <div class="text-danger">
                @error('kode_buku')
                {{ $message }}
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Judul</label>
              <input type="text" class="form-control"  name="judul" placeholder="Judul" value="{{ $edit->judul }}">
              <div class="text-danger">
                @error('judul')
                {{ $message }}
                  @enderror
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Kategori</label>
                <select class="form-control" name="id_kategori">
                    <option value="">- Pilih -</option>
                    @foreach($kategori as $k)
                        @if($k->id_kategori == $edit->id_kategori))
                        <option value="{{ $k->id_kategori }}" selected>
                            {{ $k->nama_kategori }}
                        </option>
                        @else
                        <option value="{{ $k->id_kategori }}">
                            {{ $k->nama_kategori }}
                        </option>
                        @endif
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Pengarang</label>
                <input type="text" class="form-control" name="pengarang" placeholder="Pengarang" value="{{ $edit->pengarang }}">
                <div class="text-danger">
                  @error('pengarang')
                  {{ $message }}
                    @enderror
                </div>
              </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tahun Terbit</label>
                <input type="text" class="form-control" name="tahun_terbit" placeholder="Tahun Terbit" value="{{ $edit->tahun_terbit }}">
                <div class="text-danger">
                  @error('tahun_terbit')
                  {{ $message }}
                    @enderror
                </div>
              </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" value="{{ $edit->penerbit }}">
                <div class="text-danger">
                  @error('penerbit')
                  {{ $message }}
                    @enderror
                </div>
              </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Stok</label>
                <input type="text" class="form-control" name="stok" placeholder="Stok" value="{{ $edit->stok }}">
                <div class="text-danger">
                  @error('stok')
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
