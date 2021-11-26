@extends('Layout.v_template')

@section('title','Transaksi')

@section('content')

<div class="row">
  <div class="col-md-12">
    <form method="POST" action="{{ url('/transaksi/simpan_peminjaman') }}">
      {{ csrf_field() }}
      <div class="box">
        <div class="box-header">
          Form Peminjaman
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label> Kode Peminjaman </label>
                <input type="text" class="form-control" name="kode_peminjaman" placeholder="Masukkan Kode Peminjaman">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label> Nama Buku </label>
                <select class="form-control" name="kode_buku">
                  <option value="">- Pilih -</option>
                  @foreach($data_buku as $buku)
                  <option value="{{ $buku->kode_buku }}">
                    {{ $buku->judul }}
                  </option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label> Nama Anggota </label>
                <select class="form-control" name="id_anggota">
                  <option value="">- Pilih -</option>
                  @foreach($data_anggota as $anggota)
                    <option value="{{ $anggota->id_anggota }}">
                      {{ $anggota->nama_anggota }}
                    </option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label> Tanggal Pinjam </label>
                <input type="date" class="form-control" name="tanggal_pinjam">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label> Tanggal Kembali </label>
                <input type="date" class="form-control" name="tanggal_kembali">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label> ID petugas </label>
                <input type="text" class="form-control" name="id_petugas" value="{{ auth()->user()->id }}">
              </div>
            </div>
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Pinjam
          </button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
