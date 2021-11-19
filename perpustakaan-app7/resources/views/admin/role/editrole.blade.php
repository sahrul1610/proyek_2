@extends("Layout.v_template")
@section('title','Role')

@section('content')
<div class="row">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data @yield('title')</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/role/update" method="POST" enctype="multipart/form-data">
                <div class="box-body">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $edit->id }}">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control"  name="nama" placeholder="Masukan nama" value="{{ $edit->nama }}">
                        <div class="text-danger">
                            @error('nama')
                            {{ $message }}
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
    </div>
</div>

@endsection
