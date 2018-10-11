@extends('layouts.app_admin')

@section('content')    

<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">SI Survei Kepuasan</span>
    <h3 class="page-title">Data Responden - Dosen</h3>
  </div>
</div>
<!-- End Page Header -->

<!-- Top Referrals Component -->
<div class="row">
  <div class="col-md-12 mb-4">
    <div class="card card-small">
      <div class="card-header border-bottom">
        <h6 class="m-0">Tabel Responden</h6>
      </div>
      <div class="card-body pt-0">
        <div class="row border-bottom py-2 bg-light">
          <div class="col-12">
            <form action="" class="form-inline">
              <div class="form-group mr-sm-2">
                <select name="" id="" class="select2 form-control" title="Tampilkan data berdasarkan fakultas ">
                  <option value="">Pilih Fakultas</option>
                </select>
              </div>
              <div class="form-group mr-sm-2">
                <select name="" id="" class="select2 form-control" title="Tampilkan data berdasarkan jurusan">
                  <option value="">Pilih Jurusan</option>
                </select>
              </div>
              <div class="form-group mr-sm-2">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <i class="fa fa-calendar input-group-text"></i>
                  </div>
                  <input type="text" class="daterange input-sm form-control" name="rentang_tanggal" placeholder="Rentang Tanggal" id="rentang_tanggal" title="Tampilkan data berdasarkan tanggal mengisi angket">
                </div>
              </div>
            </form>
          </div>
        </div>
        {{-- Datatable --}}
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive pt-3">
              <table id="datatableServer" class="table mb-0 w-100">
                <thead class="">
                  <tr>
                    <th scope="col" class="border-0">#</th>
                    <th scope="col" class="border-0">NIP</th>
                    <th scope="col" class="border-0">Nama Responden</th>
                    <th scope="col" class="border-0">Jurusan</th>
                    <th scope="col" class="border-0">Fakultas</th>
                    <th scope="col" class="border-0">Tanggal Mengisi</th>
                    <th scope="col" class="border-0">Aksi</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
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

@section('pagespecificjs') 
<script>
  $(document).ready(function() {
    // Inisialisasi Select
    $('.select2').select2();
    minimumInputLength: 2
    maximumResultsForSearch: 5
    minimumResultsForSearch: 3

    // Inisialisasi DaterangePicker
    $('input.daterange').daterangepicker({
      autoUpdateInput: false,
      locale: {
        format: 'DD/MM/YYYY'
      }
    });

    //Inisialisasi Datatable
    var initDatatable1 = $('#datatableServer').DataTable({
        "processing": true,
        "serverSide": true,
        "searchDelay": 800,
        "order": [[1, 'asc']],
        "ajax": {
          url: "{{ url('/admin/responden/dosen/get_datatable') }}",
          type: "post",
          data: function(d) {
            d._token = "{{ csrf_token() }}";
            d.fakultas = $('#fakultas').val() || '';
            d.jurusan = $('#jurusan').val() || '';
            d.rentang_tanggal = $('#rentang_tanggal').val() || '';
          },
          error: function() {
            console.log('Get datatablle error!');
          }
        },
        "columnDefs": [
          {targets : "no-sort", orderable: false},
          {targets : "no-search", searchable: false},
          {targets : "no-view", visible: false}
        ],
        "drawCallback": function(settings) {}
    });

  }); //End Document Ready
</script>
@endsection