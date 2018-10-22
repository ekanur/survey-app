@extends('layouts.app_admin')

@section('content')    

<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 text-center text-sm-center mb-0">
      <img src="{{asset('images/um_logo_blue_text.png')}}" width="240"><br/><br/>
    <span class="text-uppercase page-subtitle">SI Survei Kepuasan</span>
    <h3 class="page-title">Jumlah Reponden</h3>
  </div>
</div>
<!-- End Page Header -->

<!-- Top Referrals Component -->
<!-- <div class="row">
  <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
    <div class="card card-small">
      <div class="card-header border-bottom">
        <h6 class="m-0">Jumlah Responden</h6>
      </div>
      <div class="card-body p-0">
        <ul class="list-group list-group-small list-group-flush">
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">
              <a href="{{ url('admin/responden/dosen') }}" data-toggle="tooltip" data-placement="top" title="Tampilkan responden dosen">Dosen</a>
            </span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{ $count['dosen'] }}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">
              <a href="{{ url('admin/responden/mahasiswa') }}" data-toggle="tooltip" data-placement="top" title="Tampilkan responden mahasiswa">Mahasiswa</a>
            </span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{ $count['mahasiswa'] }}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">
              <a href="{{ url('admin/responden/alumni') }}" data-toggle="tooltip" data-placement="top" title="Tampilkan responden alumni">Alumni</a>
            </span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{ $count['alumni'] }}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">
              <a href="{{ url('admin/responden/tendik') }}" data-toggle="tooltip" data-placement="top" title="Tampilkan responden tendik">Tenaga Kependidikan</a>
            </span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{ $count['tendik'] }}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">
              <a href="{{ url('admin/responden/pengguna') }}" data-toggle="tooltip" data-placement="top" title="Tampilkan responden pengguna">Pengguna</a>
            </span>
            <span class="ml-auto text-right text-semibold text-reagent-gray">{{ $count['pengguna'] }}</span>
          </li>
          <li class="list-group-item d-flex px-3">
            <span class="text-semibold text-fiord-blue">
              <a href="{{ url('admin/responden/mitra') }}" data-toggle="tooltip" data-placement="top" title="Tampilkan responden mitra">Mitra</a>
            </span>
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
</div> -->


<div class="row">
              <div class="col-md-4 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Dosen</span>
                        <h6 class="stats-small__value count my-3">{{ $count['dosen'] }}</h6>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Mahasiswa</span>
                        <h6 class="stats-small__value count my-3">{{ $count['mahasiswa'] }}</h6>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Tenaga Kependidikan</span>
                        <h6 class="stats-small__value count my-3">{{ $count['tendik'] }}</h6>
                      </div>
                    </div>
                  <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                </div>
              </div>
             </div>
              <div class="col-md-4 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Alumni</span>
                        <h6 class="stats-small__value count my-3">{{ $count['alumni'] }}</h6>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-4"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Pengguna</span>
                        <h6 class="stats-small__value count my-3">{{ $count['pengguna'] }}</h6>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-5"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Mitra</span>
                        <h6 class="stats-small__value count my-3">{{ $count['mitra'] }}</h6>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-5"></canvas>
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