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
                 <label for="prodijurusan">Prodi/Jurusan</label>
                 <input type="text" class="form-control" id="prodijurusan" name="prodijurusan"placeholder="Prodi/Jurusan" required="">
               </div>

               <div class="form-group col-md-6">
                <label for="fakultas">Fakultas</label>
                <select id="fakultas" name="fakultas" class="form-control" required="" placeholder="Fakultas">
                  <option selected value="">Fakultas</option>
                  <option value="fip">FIP (Fakultas Ilmu Pendidikan)</option>
                  <option value="fs">FS (Fakultas Sastra)</option>
                  <option value="fmipa">FMIPA (Fakultas Matematikan & IPA)</option>
                  <option value="fe">FE (Fakultas Ekonomi)</option>
                  <option value="ft">FT (Fakultas Teknik)</option>
                  <option value="fik">FIK (Fakultas Ilmu Keolahragaan)</option>
                  <option value="fis">FIS (Fakultas Ilmu Sosial)</option>
                  <option value="fppsi">FPPSI (Fakultas Pendidikan Psikologi)</option>
                  <option value="pasca">Pascasarjana</option>
                  <option value="vokasi">Program Pendidikan Profesi dan Vokasi</option>
                </select>
              </div>
            </div>

            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="tahun_masuk">Tahun Masuk</label>
                
                <select class="js-example-basic-single form-control"  id="tahun_masuk" name="tahun_masuk" required="">
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
              <label for="tahun_lulus">Tahun Lulus</label>
              <select class="js-example-basic-single form-control" id="tahun_lulus" name="tahun_lulus" required="">
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
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="tahun_bekerja">Tahun Bekerja</label>
            <select class="js-example-basic-single form-control"  id="tahun_bekerja" name="tahun_bekerja"required="">
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
          <select id="masa_tunggu" name="masa_tunggu" class="form-control" required="">
            <option value="">Pilih</option>
            
            <option value=" <1"> Kurang dari 1 Tahun</option>
            <option value="1-2"> 1-2 tahun</option>
            <option value=">2"> >2 tahun</option>
            
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
      $('.js-example-basic-single').select2();
      minimumInputLength: 3
      maximumResultsForSearch: 5
      minimumResultsForSearch: 3

    });


  </script>
  @endsection