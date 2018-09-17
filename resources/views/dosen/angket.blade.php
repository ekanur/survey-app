@extends('layouts.app')

@section('content') 

<form method="POST" action="{{ url("/angket-dosen") }}">
  {{ csrf_field() }}
  <div align="center">
    <div class="col-lg-8 text-sm-left">
      <div class="card card-small mb-4" >
        <div class="card-header border-bottom">
          <h6 class="m-0">Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan tempat Ibu/Bapak bekerja?</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q1" name="q1" class="custom-control-input" value="Ya">
                   <label class="custom-control-label" for="radio1q1">Ya</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q1"  name="q1" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label" for="radio2q1">Tidak</label>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4 quest_1" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Darimana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan tempat Ibu/Bapak bekerja?</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col-sm-12">
              <label>Boleh lebih dari satu jawaban</label>
              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <fieldset>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c1q2" value="Rapat Jurusan">
                      <label class="custom-control-label" for="c1q2">Rapat Jurusan</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c2q2" value="Katalog dan/atau dokumen Jurusan lainnya">
                      <label class="custom-control-label" for="c2q2">Katalog dan/atau dokumen Jurusan lainnya</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c3q2" value="Membaca banner">
                      <label class="custom-control-label" for="c3q2">Membaca banner</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c4q2" value="Kegiatan kemahasiswaan">
                      <label class="custom-control-label" for="c4q2">Kegiatan kemahasiswaan</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c5q2" value="Laman UM">
                      <label class="custom-control-label" for="c5q2">Laman UM</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c6q2" value="Lain-lain">
                      <label class="custom-control-label" for="c6q2">Lain-lain</label>
                    </div>
                  </fieldset>
                </div>
              </div>
              
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4 quest_1" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Bagaimana menurut Ibu/Bapak, kinerja Jurusan/Prodi dalam mencapai visi dan sasarannya?</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <label></label>
                  <fieldset>
                   <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio1q3" name="q3" class="custom-control-input" value="Sudah selaras dengan visi dan kinerja sudah maksimal">
                    <label class="custom-control-label" for="radio1q3"> Sudah selaras dengan visi dan kinerja sudah maksimal</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio2q3" name="q3" class="custom-control-input" value="Sudah selaras dengan visi, namun kinerja kurang maksimal">
                    <label class="custom-control-label" for="radio2q3"> Sudah selaras dengan visi, namun kinerja kurang maksimal</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio3q3" name="q3" class="custom-control-input" value="Kurang selaras dengan visi, namun kinerja maksimal">
                    <label class="custom-control-label" for="radio3q3"> Kurang selaras dengan visi, namun kinerja maksimal</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio4q3" name="q3" class="custom-control-input" value="Kurang selaras dengan visi dan kinerja kurang maksimal">
                    <label class="custom-control-label" for="radio4q3"> Kurang selaras dengan visi dan kinerja kurang maksimal</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio5q3" name="q3" class="custom-control-input" value="Tidak tahu karena tidak mengetahui rumusan visi/misi jurusan">
                    <label class="custom-control-label" for="radio5q3"> Tidak tahu karena tidak mengetahui rumusan visi/misi jurusan</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio6q3" name="q3" class="custom-control-input" value="Tidak tahu karena tidak pernah memperhatikan">
                    <label class="custom-control-label" for="radio6q3"> Tidak tahu karena tidak pernah memperhatikan</label>
                  </div>

                </fieldset>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
</div>

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Fakultas/Universitas tempat Ibu/Bapak bekerja?</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <label for="pd4"></label>
                  <fieldset>
                    <div class="custom-control custom-radio mb-1">
                      <input required="" type="radio" id="radio1q4" name="q4" class="custom-control-input" value="Ya">
                      <label class="custom-control-label" for="radio1q4">Ya</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input required="" type="radio" id="radio2q4" name="q4" class="custom-control-input" value="Tidak">
                      <label class="custom-control-label" for="radio2q4">Tidak</label>
                    </div>
                  </fieldset>

                </div>
              </div>
              
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4 quest_4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Darimana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Fakultas/Universitas tempat Ibu/Bapak bekerja?</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col-sm-12">

              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <label>Boleh lebih dari satu jawaban</label><br>
                  <fieldset>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c1q5" value="Rapat Jurusan">
                      <label class="custom-control-label" for="c1q5">Rapat Jurusan</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c2q5" value="Katalog dan/atau dokumen Fakultas/Universitas lainnya">
                      <label class="custom-control-label" for="c2q5">Katalog dan/atau dokumen Fakultas/Universitas lainnya</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c3q5" value="Membaca banner">
                      <label class="custom-control-label" for="c3q5">Membaca banner</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c4q5" value="Kegiatan kemahasiswaan">
                      <label class="custom-control-label" for="c4q5">Kegiatan kemahasiswaan</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c5q5" value="Laman UM">
                      <label class="custom-control-label" for="c5q5">Laman UM</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c6q5" value="Lain-lain">
                      <label class="custom-control-label" for="c6q5">Lain-lain</label>
                    </div>
                  </fieldset>
                </div>
              </div>
              
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4 quest_4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Bagaimana menurut Ibu/Bapak, kinerja Fakultas/Universitas dalam mencapai visi dan sasarannya?</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">


              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <fieldset>
                   <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio1q6" name="q6" class="custom-control-input" value="Sudah selaras dengan visi dan kinerja sudah maksimal">
                    <label class="custom-control-label" for="radio1q6"> Sudah selaras dengan visi dan kinerja sudah maksimal</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio2q6" name="q6" class="custom-control-input" value="Sudah selaras dengan visi, namun kinerja kurang maksimal">
                    <label class="custom-control-label" for="radio2q6"> Sudah selaras dengan visi, namun kinerja kurang maksimal</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio3q6" name="q6" class="custom-control-input" value="Kurang selaras dengan visi, namun kinerja maksimal">
                    <label class="custom-control-label" for="radio3q6"> Kurang selaras dengan visi, namun kinerja maksimal</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio4q6" name="q6" class="custom-control-input" value="Kurang selaras dengan visi dan kinerja kurang maksimal">
                    <label class="custom-control-label" for="radio4q6"> Kurang selaras dengan visi dan kinerja kurang maksimal</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio5q6" name="q6" class="custom-control-input" value="Tidak tahu karena tidak mengetahui rumusan visi/misi jurusan">
                    <label class="custom-control-label" for="radio5q6"> Tidak tahu karena tidak mengetahui rumusan visi/misi jurusan</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio6q6" name="q6" class="custom-control-input" value="Tidak tahu karena tidak pernah memperhatikan">
                    <label class="custom-control-label" for="radio6q6"> Tidak tahu karena tidak pernah memperhatikan</label>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
</div>

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Berikan penilaian Ibu/Bapak terhadap indikator berikut ini </h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">


              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  {{-- <h6>(1 = Tidak Puas; 2 = Cukup Puas; 3 = Puas; 4 = Sangat Puas)</h6> --}}
                  <table width="100%">
                    <tbody>
                      <tr>
                        <td width="85%">Kualitas dan Transparansi proses penerimaan Dosen</td>
                        <td width="15%"><select name="q7a" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Rumusan Visi, Misi, Tujuan, dan Sasaran Prodi</td>
                        <td width="15%"><select name="q7b" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Rumusan Visi, Misi, Tujuan, dan Sasaran Fakultas</td>
                        <td width="15%"><select name="q7c" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Rumusan Visi, Misi, Tujuan, dan Sasaran Universitas</td>
                        <td width="15%"><select name="q7d" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Relevansi rumusan capaian pembelajaran dengan kebutuhan dunia kerja</td>
                        <td width="15%"><select name="q7e" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Beban Mengajar</td>
                        <td width="15%"><select name="q7f" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Ketersediaan sumber belajar untuk kegiatan pembelajaran</td>
                        <td width="15%"><select name="q7g" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Penjadwalan Kegiatan pembelajaran</td>
                        <td width="15%"><select name="q7h" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Kualitas sarana dan prasarana mengajar</td>
                        <td width="15%"><select name="q7i" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Dukungan akademik dan pendanaan</td>
                        <td width="15%"><select name="q7j" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Dukungan akademik pendanaan untuk diseminasi dan publikasi</td>
                        <td width="15%"><select name="q7k" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Ketersediaan fasilitas untuk melakukan penelitian</td>
                        <td width="15%"><select name="q7l" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Dukungan akademik dan pendanaan untuk pengabdian kepada masyarakat</td>
                        <td width="15%"><select name="q7m" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Ketersediaan fasilitas untuk melakukan pengabdian kepada masyarakat</td>
                        <td width="15%"><select name="q7n" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Kejelasan kelengkapan informasi persyaratan untuk memperoleh layanan akademik dan non-akademik</td>
                        <td width="15%"><select name="q7o" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Prosedur pemberian layanan akademik dan non-akademik</td>
                        <td width="15%"><select name="q7p" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Waktu pemberian layanan akademik dan non-akademik</td>
                        <td width="15%"><select name="q7q" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Biaya pemberian layanan akademik dan non-akademik</td>
                        <td width="15%"><select name="q7r" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Produk layanan akademik dan non-akademik</td>
                        <td width="15%"><select name="q7s" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Kompetensi pelaksana layanan akademik dan non-akademik</td>
                        <td width="15%"><select name="q7t" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Perilaku pelaksana layanan akademik dan non-akademik</td>
                        <td width="15%"><select name="q7u" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Penanganan pengaduan terkait pelaksanaan layanan akademik dan non-akademik</td>
                        <td width="15%"><select name="q7v" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Kualitas layanan akademik dan non-akademik</td>
                        <td width="15%"><select name="q7w" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Dukungan untuk pengembangan profesi</td>
                        <td width="15%"><select name="q7x" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Dukungan untuk kegiatan promosi dan dan retensi</td>
                        <td width="15%"><select name="q7y" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Kualitas, keamanan, dan kenyamanan lingkungan kerja</td>
                        <td width="15%"><select name="q7z" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Keselamatan lingkungan dan keamanan kerja</td>
                        <td width="15%"><select name="q7aa" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Gaji dan Tunjangan</td>
                        <td width="15%"><select name="q7bb" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Tuliskan saran dan rekomendasi Ibu/Bapak kepada pihak terkait</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <div class="col-md-12">
                <div class="card-body">
                  <label>Program Studi / Jurusan</label>
                  <textarea name="saranjurusan" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card-body">
                  <label>Fakultas</label>
                  <textarea name="saranfakultas" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card-body">
                  <label>Universitas</label>
                  <textarea name="saranuniversitas" class="form-control"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

</form>

@endsection

@section('pagespecificjs') 
<script>
  //Pertanyaan 1 jumper handler
  $("input[name='q1']").change(function(){
    ($(this).val().toLowerCase() == 'tidak') ? disableQuestion(".quest_1") : enableQuestion(".quest_1");
  });
  //Pertanyaan 4 jumper handler
  $("input[name='q4']").change(function(){
    ($(this).val().toLowerCase() == 'tidak') ? disableQuestion(".quest_4") : enableQuestion(".quest_4");
  });

  function disableQuestion(selector='') {
    if(selector) {
      // $(selector).prop('disabled', true);
      $(selector).find("input").prop('disabled', true);
      $(selector).fadeOut();
    }
  }
  function enableQuestion(selector='') {
    if(selector) {
      // $(selector).prop('disabled', false);
      $(selector).find("input").prop('disabled', false);
      $(selector).fadeIn();
    }
  }
</script> 
@endsection