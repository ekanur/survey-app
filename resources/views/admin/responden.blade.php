@extends('layouts.app_admin')

@section('content')    

<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">SI Survei Kepuasan</span>
    <h3 class="page-title">Beranda</h3>
  </div>
</div>
<!-- End Page Header -->

<!-- Top Referrals Component -->
<div class="row">
  <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
    <div class="card card-small">
      <div class="card-header border-bottom">
        <h6 class="m-0">Jumlah Responden</h6>
      </div>
      <div class="card-body p-0">
        <ul class="list-group list-group-small list-group-flush">
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue"><a href="{{ url('admin/responden/dosen') }}">Dosen</a></span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{ $count['dosen'] }}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">Mahasiswa</span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{ $count['mahasiswa'] }}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">Alumni</span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{ $count['alumni'] }}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">Tenaga Kependidikan</span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{ $count['tendik'] }}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">Pengguna</span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{ $count['pengguna'] }}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">Mitra</span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{ $count['mitra'] }}</span>
          </li>
        </ul>
      </div>
      <div class="card-footer border-top">
        <div class="row">
          <div class="col text-right view-report">
            <a href="{{ url('admin/rekapitulasi') }}" class="text-info">Rekapitulasi &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Top Referrals Component -->

@endsection


@push("style")
<!-- <style type="text/css">
  a.report{
    border-radius: 0px !important;
  }
</style> -->
@endpush