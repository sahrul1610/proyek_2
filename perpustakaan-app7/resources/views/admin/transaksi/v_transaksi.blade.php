@extends('Layout.v_template')
@section('title','Transaksi')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <p><a href="/transaksi/form_peminjaman" class=" btn btn-primary btn-sm"style="width: 150px;"><i class="fa fa-plus"></i> Tambah @yield('title')</a></p>
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">data @yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Kode transaksi</th>
              <th>Buku</th>
              <th>Nama Peminjaman</th>
              <th>Tgl Pinjam</th>
              <th>Tgl kembali</th>
              <th>Denda</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php $no =1; ?>
            @foreach ( $peminjaman as $data )

                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->kode_peminjaman }}
                  </td>
                  <td>{{ $data->getBuku->judul}}</td>
                  <td>{{ $data->getAnggota->nama_anggota}}</td>
                  <td>{{ $data->tanggal_pinjam}}</td>
                  <td>{{ $data->tanggal_kembali}}</td>
                  <td>{{ $d->denda}}</td>
                  {{-- <td>{!! $data->tanggal_kembali - $data->tanggal_pinjam !!}</td> --}}
                  {{-- <td>{{ $data->email }}</td>
                  <td>{{ $data->password }}</td>
                  <td>{{ $data->getRole->nama }}</td> --}}
                  {{-- <td>1</td> --}}

                </tr>


            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      {{-- @foreach ( $users as $data)


      <div class="modal modal-danger fade" id="delete{{ $data->id }}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">{{ $data->name }}</h4>
            </div>
            <div class="modal-body">
              <p>Apakah Anda yakin ingin menghapus petugas ini!</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
              <a href="petugas/delete/{{ $data->id }}" class="btn btn-outline">Yes</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach --}}
@endsection
