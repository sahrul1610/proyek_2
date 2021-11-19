@extends('Layout.v_template')
@section('title','Home')
@section('content')

@if(auth()->user()->id_role == 1)
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success">
            Selamat Datang <b>{{ auth()->user()->name }}</b>
        </div>
    </div>
</div>
@elseif(auth()->user()->id_role == 2)
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-danger">
            Selamat Datang <b>{{ auth()->user()->name }}</b>
        </div>
    </div>
</div>
@else
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-danger">
            <b>TIDAK JELAS</b>
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $jumlah_data_buku }}</h3>

          <p>New Books</p>
        </div>
        <div class="icon">
          <i class="ion-ios-book"></i>
        </div>
        <a href="/buku" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $jumlah_data_user }}<sup style="font-size: 20px">%</sup></h3>

          <p>Petugas</p>
        </div>
        <div class="icon">
          <i class="ion ion-person"></i>
        </div>
        <a href="/petugas" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $jumlah_data_anggota }}</h3>

          <p>Anggota</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="/anggota" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>65</h3>

          <p>Unique Visitors</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
@endsection
