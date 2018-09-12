@extends('layouts.app')

@section('content') 

<form method="POST" action="{{ url("/angket-dosen") }}">
<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Angket Dosen</h6>
 </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-0 px-3 pt-3">
          <div class="row">
            <div class="col-sm-12">
            {{ csrf_field() }}
                <label>Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan tempat Ibu/Bapak bekerja?</label>
                    <div class="custom-controls-stacked">
                      <div class="custom-control custom-radio mb-1">
                       <input type="radio" id="radio1q1" name="q1" class="custom-control-input">
                      <label class="custom-control-label" for="radio1q1">Ya</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" id="radio2q1"  name="q1" class="custom-control-input">
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
</form>


<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Angket Dosen</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col-sm-12">
              
                {{ csrf_field() }}
                <div class="form-row">
                  <div class="form-group col-md-12 text-sm-left">
                    <label>Darimana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan tempat Ibu/Bapak bekerja?</label>
                    <fieldset>
                      <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="c1q2">
                        <label class="custom-control-label" for="c1q2">Rapat Jurusan</label>
                      </div>
                      <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="c2q2">
                        <label class="custom-control-label" for="c2q2">Katalog dan/atau dokumen Jurusan lainnya</label>
                      </div>
                      <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="c3q2" value="c">
                        <label class="custom-control-label" for="c3q2">Membaca banner</label>
                      </div>
                      <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="c4q2">
                        <label class="custom-control-label" for="c4q2">Kegiatan kemahasiswaan</label>
                      </div>
                      <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="c5q2">
                        <label class="custom-control-label" for="c5q2">Laman UM</label>
                      </div>
                      <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="c6q2">
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
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Angket Dosen</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              
                {{ csrf_field() }}
                <div class="form-row">
                  <div class="form-group col-md-12 text-sm-left">
                    <label>Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan tempat Ibu/Bapak bekerja?</label>
                    <fieldset>
                     <div class="custom-control custom-radio mb-1">
                      <input type="radio" id="radio1q3" name="q3" class="custom-control-input">
                      <label class="custom-control-label" for="radio1q3"> Sudah selaras dengan visi dan kinerja sudah maksimal</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" id="radio2q3" name="q3" class="custom-control-input">
                      <label class="custom-control-label" for="radio2q3"> Sudah selaras dengan visi, namun kinerja kurang maksimal</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" id="radio3q3" name="q3" class="custom-control-input">
                      <label class="custom-control-label" for="radio3q3"> Kurang selaras dengan visi, namun kinerja maksimal</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" id="radio4q3" name="q3" class="custom-control-input">
                      <label class="custom-control-label" for="radio4q3"> Kurang selaras dengan visi dan kinerja kurang maksimal</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" id="radio5q3" name="q3" class="custom-control-input">
                      <label class="custom-control-label" for="radio5q3"> Tidak tahu karena tidak mengetahui rumusan visi/misi jurusan</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" id="radio6q3" name="q3" class="custom-control-input">
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
        <h6 class="m-0">Angket Dosen</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              
                {{ csrf_field() }}
                <div class="form-row">
                  <div class="form-group col-md-12 text-sm-left">
                    <label for="pd4">Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Fakultas/Universitas tempat Ibu/Bapak bekerja?</label>
                    <fieldset>
                      <div class="custom-control custom-radio mb-1">
                        <input type="radio" id="radio1q4" name="q4" class="custom-control-input">
                        <label class="custom-control-label" for="radio1q4">Ya</label>
                      </div>
                      <div class="custom-control custom-radio mb-1">
                        <input type="radio" id="radio2q4" name="q4" class="custom-control-input">
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
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Angket Dosen</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col-sm-12">
              
                {{ csrf_field() }}
                <div class="form-row">
                  <div class="form-group col-md-12 text-sm-left">
                    <label for="checkboxd5">Darimana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Fakultas/Universitas tempat Ibu/Bapak bekerja?</label>
                    <fieldset>
                      <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="c1q5">
                        <label class="custom-control-label" for="c1q5">Rapat Jurusan</label>
                      </div>
                      <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="c2q5">
                        <label class="custom-control-label" for="c2q5">Katalog dan/atau dokumen Fakultas/Universitas lainnya</label>
                      </div>
                      <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="c3q5">
                        <label class="custom-control-label" for="c3q5">Membaca banner</label>
                      </div>
                      <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="c4q5">
                        <label class="custom-control-label" for="c4q5">Kegiatan kemahasiswaan</label>
                      </div>
                      <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="c5q5">
                        <label class="custom-control-label" for="c5q5">Laman UM</label>
                      </div>
                      <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="c6q5">
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
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Angket Dosen</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              
                {{ csrf_field() }}
                <div class="form-row">
                  <div class="form-group col-md-12 text-sm-left">
                    <label>Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Fakultas / Universitas tempat Ibu/Bapak bekerja?</label><br>
                    <fieldset>
                     <div class="custom-control custom-radio mb-1">
                      <input type="radio" id="radio1q6" name="q6" class="custom-control-input">
                      <label class="custom-control-label" for="radio1q6"> Sudah selaras dengan visi dan kinerja sudah maksimal</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" id="radio2q6" name="q6" class="custom-control-input">
                      <label class="custom-control-label" for="radio2q6"> Sudah selaras dengan visi, namun kinerja kurang maksimal</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" id="radio3q6" name="q6" class="custom-control-input">
                      <label class="custom-control-label" for="radio3q6"> Kurang selaras dengan visi, namun kinerja maksimal</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" id="radio4q6" name="q6" class="custom-control-input">
                      <label class="custom-control-label" for="radio4q6"> Kurang selaras dengan visi dan kinerja kurang maksimal</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" id="radio5q6" name="q6" class="custom-control-input">
                      <label class="custom-control-label" for="radio5q6"> Tidak tahu karena tidak mengetahui rumusan visi/misi jurusan</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" id="radio6q6" name="q6" class="custom-control-input">
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
        <h6 class="m-0">Angket Dosen</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              
                {{ csrf_field() }}
                <div class="form-row">
                  <div class="form-group col-md-12 text-sm-left">
                    <h6 for="pd7">Berikan penilaian Ibu/Bapak terhadap indikator berikut ini <br>(1 = Tidak Puas; 2 = Cukup Puas; 3 = Puas; 4 = Sangat Puas)</h6><br>
                    <table width="100%">
                      <tbody>
                        <tr>
                          <td width="85%">Kualitas dan Transparansi proses penerimaan Dosen</td>
                          <td width="15%"><select name="pd7a" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Rumusan Visi, Misi, Tujuan, dan Sasaran Prodi</td>
                          <td width="15%"><select name="pd7b" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Rumusan Visi, Misi, Tujuan, dan Sasaran Fakultas</td>
                          <td width="15%"><select name="pd7c" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Rumusan Visi, Misi, Tujuan, dan Sasaran Universitas</td>
                          <td width="15%"><select name="pd7d" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Relevansi rumusan capaian pembelajaran dengan kebutuhan dunia kerja</td>
                          <td width="15%"><select name="pd7e" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Beban Mengajar</td>
                          <td width="15%"><select name="pd7f" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Ketersediaan sumber belajar untuk kegiatan pembelajaran</td>
                          <td width="15%"><select name="pd7g" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Penjadwalan Kegiatan pembelajaran</td>
                          <td width="15%"><select name="pd7h" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Kualitas sarana dan prasarana mengajar</td>
                          <td width="15%"><select name="pd7i" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Dukungan akademik dan pendanaan</td>
                          <td width="15%"><select name="pd7j" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Dukungan akademik pendanaan untuk diseminasi dan publikasi</td>
                          <td width="15%"><select name="pd7k" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Ketersediaan fasilitas untuk melakukan penelitian</td>
                          <td width="15%"><select name="pd7l" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Dukungan akademik dan pendanaan untuk pengabdian kepada masyarakat</td>
                          <td width="15%"><select name="pd7m" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Ketersediaan fasilitas untuk melakukan pengabdian kepada masyarakat</td>
                          <td width="15%"><select name="pd7n" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Kejelasan kelengkapan informasi persyaratan untuk memperoleh layanan akademik dan non-akademik</td>
                          <td width="15%"><select name="pd7o" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Prosedur pemberian layanan akademik dan non-akademik</td>
                          <td width="15%"><select name="pd7p" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Waktu pemberian layanan akademik dan non-akademik</td>
                          <td width="15%"><select name="pd7q" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Biaya pemberian layanan akademik dan non-akademik</td>
                          <td width="15%"><select name="pd7r" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Produk layanan akademik dan non-akademik</td>
                          <td width="15%"><select name="pd7s" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Kompetensi pelaksana layanan akademik dan non-akademik</td>
                          <td width="15%"><select name="pd7t" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Perilaku pelaksana layanan akademik dan non-akademik</td>
                          <td width="15%"><select name="pd7u" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Penanganan pengaduan terkait pelaksanaan layanan akademik dan non-akademik</td>
                          <td width="15%"><select name="pd7v" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Kualitas layanan akademik dan non-akademik</td>
                          <td width="15%"><select name="pd7w" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Dukungan untuk pengembangan profesi</td>
                          <td width="15%"><select name="pd7x" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Dukungan untuk kegiatan promosi dan dan retensi</td>
                          <td width="15%"><select name="pd7y" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Kualitas, keamanan, dan kenyamanan lingkungan kerja</td>
                          <td width="15%"><select name="pd7z" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Keselamatan lingkungan dan keamanan kerja</td>
                          <td width="15%"><select name="pd7aa" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td width="85%">Gaji dan Tunjangan</td>
                          <td width="15%"><select name="pd7bb" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
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
        <h6 class="m-0">Angket Dosen</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <Label>Tuliskan saran dan rekomendasi Ibu/Bapak kepada pihak terkait</Label>
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