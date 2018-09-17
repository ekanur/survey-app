@extends('layouts.app')
 
@section('content')    
<div class="row">
  <div class="col-lg col-md-6 col-sm-6 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <a class="card-body p-0 d-flex" href="{{url ('dosen')}}">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <i class="fas fa-user" style="font-size:48px;"></i>
            <span class="stats-small__label text-uppercase">DOSEN</span>
          </div>
        </div>
      </a>
      <a href="#" class="btn btn-info"><i class="fa fa-chart-pie"></i> Report</a>
    </div>

  </div>
  <div class="col-lg col-md-6 col-sm-6 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <a class="card-body p-0 d-flex" href="{{url ('mahasiswa')}}">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <i class="fas fa-users" style="font-size:48px;"></i>
            <span class="stats-small__label text-uppercase">MAHASISWA</span>
          </div>
        </div>
      </a>
      <a href="#" class="btn btn-info"><i class="fa fa-chart-pie"></i> Report</a>
    </div>
  </div>
  <div class="col-lg col-md-6 col-sm-6 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <a class="card-body p-0 d-flex" href="{{url ('tendik')}}">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <i class="fas fa-user-circle" style="font-size:48px;"></i>
            <span class="stats-small__label text-uppercase">TENAGA KEPENDIDIKAN</span>
          </div>
        </div>
      </a>
      <a href="#" class="btn btn-info"><i class="fa fa-chart-pie"></i> Report</a>
    </div>
  </div>
  <div class="col-lg col-md-6 col-sm-6 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <a class="card-body p-0 d-flex" href="{{url('alumni')}}">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <i class="fas fa-graduation-cap" style="font-size:48px;"></i>
            <span class="stats-small__label text-uppercase">ALUMNI</span>
          </div>
        </div>
      </a>
      <a href="#" class="btn btn-info"><i class="fa fa-chart-pie"></i> Report</a>
    </div>
  </div>
  <div class="col-lg col-md-6 col-sm-6 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <a class="card-body p-0 d-flex" href="{{url ('pengguna')}}">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <i class="fa fa-building" style="font-size:48px;"></i>
            <span class="stats-small__label text-uppercase">PENGGUNA</span>
          </div>
        </div>
      </a>  
      <a href="#" class="btn btn-info"><i class="fa fa-chart-pie"></i> Report</a>
    </div>
  </div>

  <div class="col-lg col-md-6 col-sm-6 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <a class="card-body p-0 d-flex" href="{{url ('mitra')}}">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <i class="fa fa-handshake" style="font-size:48px;"></i>
            <span class="stats-small__label text-uppercase">MITRA</span>
          </div>
        </div>
      </a>
      <a href="#" class="btn btn-info"><i class="fa fa-chart-pie"></i> Report</a>
    </div>
  </div>

</div>
<!-- End Small Stats Blocks -->
@endsection