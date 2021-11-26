
@extends("Layout.v_template")
@section('title','Anggota')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <p><a href="anggota/add" class=" btn btn-primary btn-sm"style="width: 150px;"><i class="fa fa-plus"></i>Tambah @yield('title')</a></p>
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


        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive ">
          <table id="example1" class="table table-hover">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat, Tanggal LAhir</th>
                    <th>Status</th>
                    <th>NoHp</th>
                    <th>Aksi</th>

                  </tr>
              </thead>

              <tbody>
                <?php $no =1; ?>
                @foreach ( $anggota as $data )

                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $data->nis }}
                      </td>
                      <td>{{ $data->nama_anggota }}</td>
                      <td>{{ $data->alamat }}</td>
                      <td>{{ $data->ttl_anggota }}</td>
                      <td>{{ $data->status_anggota}}</td>
                      <td>{{ $data->NoHp}}</td>
                      @if(auth()->user()->id_role == 1)
                      <td>
                          <a href="/anggota/detail/{{ $data->id_anggota }}" class="btn btn-sm btn-success"><i class="fa fa-search"></i></a>
                          <a href="/anggota/edit/{{ $data->id_anggota }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_anggota }}">
                              <i class="fa fa-trash"></i>
                            </button>
                    </td>
                    @elseif(auth()->user()->id_role == 2)
                    <td>
                        <a href="/anggota/detail/{{ $data->id_anggota }}" class="btn btn-sm btn-success"><i class="fa fa-search"></i></a>

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

  @foreach ( $anggota as $data)


  <div class="modal modal-danger fade" id="delete{{ $data->id_anggota }}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{ $data->nama_anggota }}</h4>
        </div>
        <div class="modal-body">
          <p>Apakah Anda yakin ingin anggota ini!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
          <a href="anggota/delete/{{ $data->id_anggota }}" class="btn btn-outline">Yes</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  @endforeach
@endsection


