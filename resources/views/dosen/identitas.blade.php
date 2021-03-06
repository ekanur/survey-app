@extends('layouts.app')

@section('content') 
<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Identitas Dosen</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <form method="POST" action="{{ url("biodata-dosen") }}">
               {{ csrf_field() }}
               <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}" required=""> </div>
                  <div class="form-group col-md-6">
                    <label for="prodijurusan">Nama Prodi / Jurusan</label>
                    <input type="text" class="form-control" id="prodijurusan" name="prodijurusan"placeholder="Nama Prodi/Jurusan" required=""></div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="fakultas">Fakultas</label>
                      <select id="fakultas" name="fakultas" class="form-control" required="">
                        <option selected></option>
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
                      </select></div>
                      <div class="form-group col-md-6">
                        <label for="tmt">TMT</label>
                        <input type="date" class="form-control" name="tmt" id="tmt" value="{{old('tmt')}}" required=""> </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="jeniskelamin">Jenis Kelamin</label>
                          <select id="jeniskelamin" name="jeniskelamin" class="form-control" required="">
                            <option selected></option>
                            <option value="laki_laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="usia">Usia</label>
                          <select id="usia" name="usia" class="form-control" required="">
                            <option selected></option>
                            <option value="<30">Kurang dari 30</option>
                            <option value="31-40">31 - 40</option>
                            <option value="41-50">41 - 50</option>
                            <option value="51-60">51 - 60</option>
                            <option value=">60">Lebih dari 60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="pendidikan">Pendidikan Tertinggi</label>
                          <select id="pendidikan" name="pendidikan" class="form-control" required="">
                            <option selected></option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="lamamengajar">Lama Mengajar</label>
                          <input type="number" min="1" class="form-control" id="lamamengajar"name="lamamengajar" required=""> </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="jabatanfungsional">Jabatan Fungsional</label>
                            <select id="jabatanfungsional" class="form-control" name="jabatanfungsional" required="">
                              <option selected></option>
                              <option value="TP">TP - Tenaga Pendidik</option>
                              <option value="AA">AA - Asisten Ahli</option>
                              <option value="L">L - Lektor</option>
                              <option value="LK">LK - Lektor Kepala</option>
                              <option value="GB">GB - Guru Besar</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="tugastambahan">Tugas Tambahan</label>
                            <input type="text" class="form-control" id="tugastambahan" name="tugastambahan" value="{{old('tugastambahan')}}" required=""> </div>
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