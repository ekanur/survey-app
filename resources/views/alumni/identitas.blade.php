@extends('layouts.app')

@section('content') 

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Identitas Alumni</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <form method="POST" action="{{ url("biodata-alumni") }}">
               {{ csrf_field() }}
               <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="Nama">Nama</label>
                  <input type="nama" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{old('nama')}}" required=""focus()> 
                </div>

                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}" required=""> 
                </div>
              </div>
              <div class="form-row">
               <div class="form-group col-md-6">
                <label for="fakultas">Fakultas</label>
                <select id="fakultas" name="fakultas" class="select2 form-control" required="" placeholder="Fakultas">
                  <option></option>
                </select>
              </div>
               <div class="form-group col-md-6">
                 <label for="prodijurusan">Jurusan/Prodi</label>
                  <select id="prodijurusan" name="prodijurusan" class="select2 form-control" disabled="" required="" placeholder="Jurusan/Prodi">
                    <option></option>
                  </select>
               </div>

            </div>

            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="tahun_masuk">Tahun Masuk</label>
                
                <select class="select2 form-control"  id="tahun_masuk" name="tahun_masuk" required="">
                 <option value="">Pilih Tahun</option>
                 <?php
                 $thn_skr = date('Y')-2;
                 for ($x = $thn_skr; $x >= 1954; $x--) {
                  ?>
                  <option value=" {{$x}} ">{{$x}}</option>
                  <?php
                }
                ?>
              </select>

            </div>

            <div class="form-group col-md-6">
              <label for="tahun_lulus">Tahun Lulus</label>
              <select class="select2 form-control" id="tahun_lulus" name="tahun_lulus" required="">
               <option value="">Pilih Tahun</option>
               <?php
               $thn_skr = date('Y');
               for ($x = $thn_skr; $x >= 1958; $x--) {
                ?>
                <option value=" {{$x}} ">{{$x}}</option>
                <?php
              }
              ?>
            </select>
          </div>         
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="tahun_bekerja">Tahun Bekerja</label>
            <select class="select2 form-control"  id="tahun_bekerja" name="tahun_bekerja"required="">
             <option value="">Pilih Tahun</option>
             <?php
             $thn_skr = date('Y');
             for ($x = $thn_skr; $x >= 1954; $x--) {
              ?>
              <option value=" {{$x}} ">{{$x}}</option>
              <?php
            }
            ?>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="masa_tunggu">Masa Tunggu</label>
         <select class="select2 form-control" id="masa_tunggu" name="masa_tunggu" required="">
             <option value="">Pilih Bulan</option>
              <?php
               $bln_min = 1;
               for ($x = $bln_min; $x <= 36; $x++) {
                ?>
                <option value=" {{$x}} Bulan">{{$x}} Bulan</option>
                <?php
              }
              ?>
            </select>

        </div>
      </div>

      <button type="submit" class="btn btn-accent">Mulai Isi Angket</button>
    </form>
  </div>
</div>
</li>
</ul>
</div>
</div>

@endsection

@section('pagespecificjs') 
<script >
  // In your Javascript (external .js resource or <script> tag)
  $(document).ready(function() {
    //iniitalize general select2
    $('.select2').select2();

    var listFakultas = {!! json_encode($list_fakultas) !!};
    var listJurusanProdi = {!! json_encode($list_jurusan_prodi) !!};

    //Preparing initial data for select2 filter prodijurusan dan fakultas  
    var prodijurusan = null;
    var fakultas = null;
    dataSelectJurusanProdi = $.map(listJurusanProdi, function(row, idx) {
          return {"id": row.jur_nm.trim()+'/'+row.pro_nm.trim(), "text": row.jur_nm.trim()+'/'+row.pro_nm.trim()};
        });
    dataSelectFakultas = $.map(listFakultas, function(row, idx) {
        return {"id": row.fak_skt, "text": row.fak_nm+' ('+row.fak_skt+')', "fak_kd": row.fak_kd};
      });
    initSelectFilterJurusanProdi(dataSelectJurusanProdi);
    initSelectFilterFakultas(dataSelectFakultas);
    
    //INISIALISASI SELECT2 FAKULTAS & JURUSAN
    function initSelectFilterFakultas(data='') {
      data.unshift({'id': '', 'text': ''});
      fakultas = $('#fakultas').select2({ 
        placeholder: "Pilih Fakultas",
        data: data 
      });
      $('#fakultas').val("");
    }
    function initSelectFilterJurusanProdi(data='') {
      data.unshift({'id': '', 'text': ''});
      if(prodijurusan != null) {
        //reinit prodijurusan if already initialized
        $("#prodijurusan").empty().trigger("change");
      }
      prodijurusan = $('#prodijurusan').select2({ 
        placeholder: "Pilih Jurusan/Prodi",
        data: data 
      });
      $('#prodijurusan').val("");
    }
    //Event handler untuk onchange select filter fakultas
    $('#fakultas').on('change', function(e) {
      if($('#fakultas').val()) {
        let data = $('#fakultas').select2("data");
        let filteredJurusan = $.map(listJurusanProdi, function(row, idx) {
          if(row.fak_kd == data[0].fak_kd){
            return {"id": row.jur_nm.trim()+'/'+row.pro_nm.trim(), "text": row.jur_nm.trim()+'/'+row.pro_nm.trim()};
          }
        });
        initSelectFilterJurusanProdi(filteredJurusan);
        $("#prodijurusan").attr("disabled", false);
      }
      else {
        $("#prodijurusan").attr("disabled", true);
        $("#prodijurusan").val("");
      }
    });
  });


</script>
@endsection