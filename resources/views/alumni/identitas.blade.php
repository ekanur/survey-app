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
                  <input type="nama" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{old('nama')}}" required=""> 
                </div>

                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}" required=""> 
                </div>
              </div>
              <div class="form-row">
               <div class="form-group col-md-6">
                 <label for="prodijurusan">Nama Prodi</label>
                 <input type="text" class="form-control" id="prodijurusan" name="prodijurusan"placeholder="Nama Prodi/Jurusan" required="">
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
                <select id="tahun_masuk" name="tahun_masuk" class="form-control" required="">

                  <option value="">Pilih Tahun</option>
                  <?php
                  $thn_skr = date('Y');
                  for ($x = $thn_skr; $x >= 2009; $x--) {
                    ?>
                    <option value=" {{$x}} ">{{$x}}</option>
                    <?php
                  }
                  ?>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="tahun_lulus">Tahun Lulus</label>
                <select id="tahun_lulus" name="tahun_lulus" class="form-control" required="">

                  <option value="">Pilih Tahun</option>
                  <?php
                  $thn_skr = date('Y');
                  for ($x = $thn_skr; $x >= 2009; $x--) {
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
                <select id="tahun_bekerja" name="tahun_bekerja" class="form-control" required="">
                  <option value="">Pilih Tahun</option>
                  <?php
                  $thn_skr = date('Y');
                  for ($x = $thn_skr; $x >= 2012; $x--) {
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
                  <?php
                  $thn_max = 9;
                  for ($masa_tunggu = $thn_max; $masa_tunggu >= 1; $masa_tunggu--) {
                    ?>
                    <option value=" {{$masa_tunggu}}">{{$masa_tunggu}} tahun</option>
                    <?php
                  }
                  ?>
                </select></select>
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