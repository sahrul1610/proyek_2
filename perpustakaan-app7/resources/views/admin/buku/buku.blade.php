@extends("Layout.v_template")
@section('title','Buku')
@section("page_scripts")


@section('content')
<div class="row">
    <div class="col-xs-12">
        <p><a href="/buku/add" class=" btn btn-primary btn-sm"style="width: 150px;">Tambah Buku</a></p>

        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> success</h4>
            {{  session("pesan")  }}
        </div>
        @endif
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data @yield('title')</h3>

                {{-- <div class="box-tools">
                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
                <table id="example1" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Tahun Terbit</th>
                            <th>Penerbit</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no =1; ?>
                        @foreach ($buku as $data )

                        <?php
                            $peminjaman = DB::table("peminjaman")
                                    ->where("id_buku", $data->id_buku)
                                    ->count();

                            $stok_terbaru = $data->stok - $peminjaman;
                        ?>
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->kode_buku}}
                            </td>
                            <td>{{ $data->getKategori->nama_kategori}}</td>
                            <td>{{ $data->judul }}</td>
                            <td>{{ $data->pengarang }}</td>
                            <td>{{ $data->tahun_terbit }}</td>
                            <td>{{ $data->penerbit }}</td>

                            <td>{{ $stok_terbaru }}</td>

                            @if(auth()->user()->id_role == 1)
                            <td>
                                <a href="/buku/detail/{{ $data->id_buku }}" class="btn btn-sm btn-success"><i class="fa fa-search"></i></a>

                                <a href="/buku/edit/{{ $data->id_buku }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_buku }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                            @elseif(auth()->user()->id_role == 2)
                            <td>
                                <a href="/buku/detail/{{ $data->id_buku }}" class="btn btn-sm btn-success"><i class="fa fa-search"></i></a>

                                {{-- <a href="/buku/edit/{{ $data->id_buku }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_buku }}">
                                    <i class="fa fa-trash"></i>
                                </button> --}}
                            </td>
                            @endif

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@foreach ( $buku as $data)


<div class="modal modal-danger fade" id="delete{{ $data->id_buku }}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{{ $data->judul }}</h4>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus Buku ini!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                    <a href="buku/hapus/{{ $data->id_buku }}" class="btn btn-outline">Yes</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endforeach
    @endsection
