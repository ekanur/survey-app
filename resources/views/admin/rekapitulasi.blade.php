@extends('layouts.app_admin')

@section('content')    

<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">SI Survei Kepuasan</span>
    <h3 class="page-title">Rekapitulasi Angket</h3>
  </div>
</div>
<!-- End Page Header -->

<div class="row">
  <div class="col-md-4 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <a class="card-body p-0 d-flex" href="{{url ('admin/rekap/dosen')}}">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <i class="fas fa-user" style="font-size:48px;"></i>
            <span class="stats-small__label text-uppercase">DOSEN</span>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <a class="card-body p-0 d-flex" href="{{url ('admin/rekap/mahasiswa')}}">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <i class="fas fa-users" style="font-size:48px;"></i>
            <span class="stats-small__label text-uppercase">MAHASISWA</span>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <a class="card-body p-0 d-flex" href="{{url ('admin/rekap/tendik')}}">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <i class="fas fa-user-circle" style="font-size:48px;"></i>
            <span class="stats-small__label text-uppercase">TENAGA KEPENDIDIKAN</span>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <a class="card-body p-0 d-flex" href="{{url('admin/rekap/alumni')}}">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <i class="fas fa-graduation-cap" style="font-size:48px;"></i>
            <span class="stats-small__label text-uppercase">ALUMNI</span>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <a class="card-body p-0 d-flex" href="{{url('admin/rekap/pengguna')}}">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <i class="fa fa-building" style="font-size:48px;"></i>
            <span class="stats-small__label text-uppercase">PENGGUNA</span>
          </div>
        </div>
      </a>  
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <a class="card-body p-0 d-flex" href="{{url('admin/rekap/mitra')}}">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <i class="fa fa-handshake" style="font-size:48px;"></i>
            <span class="stats-small__label text-uppercase">MITRA</span>
          </div>
        </div>
      </a>
    </div>
  </div>

</div>
@endsection


@push("style")
<!-- <style type="text/css">
  a.report{
    border-radius: 0px !important;
  }
</style> -->
@endpush