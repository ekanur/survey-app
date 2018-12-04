@extends('layouts.app')

@section('content') 
<div class="text-center text-info p-2 mb-4">
  Instrumen ini ditujukan untuk menilai tingkat kepuasan Ibu/Bapak terhadap kinerja Lembaga. Untuk itu, kami mohon Ibu/Bapak memberikan cermatan dan amatan terhadap kinerja Lembaga dengan menjawab pertanyaan yang tertera di angket. Kami ucapkan banyak terima kasih atas kerjasama dan partisipasi Ibu/Bapak.
</div>
<form method="POST" action="{{ url("/angket-dosen") }}">
  {{ csrf_field() }}
  <div align="center">
    <div class="col-lg-8 text-sm-left">
      <div class="card card-small mb-4" >
        <div class="card-header border-bottom">
          <h6 class="m-0">{{ $list_pertanyaan['q1'] }}</h6>
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

{{-- <div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4 quest_1" >
      <div class="card-header border-bottom">
        <h6 class="m-0">{{ $list_pertanyaan['q2'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col-sm-12">
              <label class="text-info"><i>Boleh lebih dari satu jawaban</i></label>
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
                     <input type="checkbox" class="custom-control-input" id="c6q2">
                      <label class="custom-control-label" for="c6q2" >Lain-lain</label>
                      <input type="text" name="q2[]" id="c6q2_input" class="form-control">
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
</div> --}}
 
{{-- <div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4 quest_1" >
      <div class="card-header border-bottom">
        <h6 class="m-0">{{ $list_pertanyaan['buktipemahamanvmts'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <div class="col-md-12">
                <div class="card-body">
                  <textarea name="buktipemahamanvmts" class="form-control words-limit"></textarea>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div> --}}


{{-- <div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4 quest_1" >
      <div class="card-header border-bottom">
        <h6 class="m-0">{{ $list_pertanyaan['q3'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <fieldset>
                   <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio1q3" name="q3" class="custom-control-input" value="Kinerja sudah selaras dengan visi, misi, tujuan, dan sasaran Program Studi/Jurusan">
                    <label class="custom-control-label" for="radio1q3">Kinerja sudah selaras dengan visi, misi, tujuan, dan sasaran Program Studi/Jurusan</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio2q3" name="q3" class="custom-control-input" value="Kinerja cukup selaras dengan visi, misi, tujuan, dan sasaran Program Studi/Jurusan">
                    <label class="custom-control-label" for="radio2q3"> Kinerja cukup selaras dengan visi, misi, tujuan, dan sasaran Program Studi/Jurusan</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio3q3" name="q3" class="custom-control-input" value="Kinerja kurang selaras dengan visi, misi, tujuan, dan sasaran Program Studi/Jurusan">
                    <label class="custom-control-label" for="radio3q3"> Kinerja kurang selaras dengan visi, misi, tujuan, dan sasaran Program Studi/Jurusan</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio4q3" name="q3" class="custom-control-input" value="Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan">
                    <label class="custom-control-label" for="radio4q3"> Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio5q3" name="q3" class="custom-control-input" value="Tidak tahu karena tidak pernah memperhatikan">
                    <label class="custom-control-label" for="radio5q3"> Tidak tahu karena tidak pernah memperhatikan</label>
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
</div> --}}

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">{{ $list_pertanyaan['q4'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item px-3">
          <div class="row">
            <div class="col">
              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
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

{{-- <div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4 quest_4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">{{ $list_pertanyaan['q5'] }} </h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col-sm-12">

              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <label class="text-info"><i>Boleh lebih dari satu jawaban</i></label><br>
                  <fieldset>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c1q5" value="Rapat">
                      <label class="custom-control-label" for="c1q5">Rapat</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c2q5" value="Katalog dan/atau dokumen Fakultas lainnya">
                      <label class="custom-control-label" for="c2q5">Katalog dan/atau dokumen Fakultas lainnya</label>
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
                      <input type="checkbox" class="custom-control-input" id="c6q5">
                      <label class="custom-control-label" for="c6q5" >Lain-lain</label>
                      <input type="text" name="q5[]" id="c6q5_input" class="form-control">
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
</div> --}}

{{-- <div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4 quest_4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">{{ $list_pertanyaan['q6'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <fieldset>
                   <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio1q6" name="q6" class="custom-control-input" value="Kinerja sudah selaras dengan visi, misi, tujuan, dan sasaran Fakultas">
                    <label class="custom-control-label" for="radio1q6"> Kinerja sudah selaras dengan visi, misi, tujuan, dan sasaran Fakultas</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio2q6" name="q6" class="custom-control-input" value="Kinerja cukup selaras dengan visi, misi, tujuan, dan sasaran Fakultas">
                    <label class="custom-control-label" for="radio2q6"> Kinerja cukup selaras dengan visi, misi, tujuan, dan sasaran Fakultas</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio3q6" name="q6" class="custom-control-input" value="Kinerja kurang selaras dengan visi, misi, tujuan, dan sasaran Fakultas">
                    <label class="custom-control-label" for="radio3q6"> Kinerja kurang selaras dengan visi, misi, tujuan, dan sasaran Fakultas</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio4q6" name="q6" class="custom-control-input" value="Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan, dan sasaran Fakultas">
                    <label class="custom-control-label" for="radio4q6"> Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan, dan sasaran Fakultas</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio5q6" name="q6" class="custom-control-input" value="Tidak tahu karena tidak pernah memperhatikan">
                    <label class="custom-control-label" for="radio5q6"> Tidak tahu karena tidak pernah memperhatikan</label>
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
</div> --}}

{{-- <div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">{{ $list_pertanyaan['q7'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item px-3">
          <div class="row">
            <div class="col">
              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <fieldset>
                    <div class="custom-control custom-radio mb-1">
                      <input required="" type="radio" id="radio1q7" name="q7" class="custom-control-input" value="Ya">
                      <label class="custom-control-label" for="radio1q7">Ya</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input required="" type="radio" id="radio2q7" name="q7" class="custom-control-input" value="Tidak">
                      <label class="custom-control-label" for="radio2q7">Tidak</label>
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
</div> --}}

{{-- <div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4 quest_7" >
      <div class="card-header border-bottom">
        <h6 class="m-0">{{ $list_pertanyaan['q8'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <label class="text-info"><i>Boleh lebih dari satu jawaban</i></label><br>
                  <fieldset>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q8[]" type="checkbox" class="custom-control-input" id="c1q8" value="Rapat">
                      <label class="custom-control-label" for="c1q8">Rapat</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q8[]" type="checkbox" class="custom-control-input" id="c2q8" value="Katalog dan/atau dokumen Universitas lainnya">
                      <label class="custom-control-label" for="c2q8">Katalog dan/atau dokumen Universitas lainnya</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q8[]" type="checkbox" class="custom-control-input" id="c3q8" value="Membaca banner">
                      <label class="custom-control-label" for="c3q8">Membaca banner</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q8[]" type="checkbox" class="custom-control-input" id="c4q8" value="Kegiatan kemahasiswaan">
                      <label class="custom-control-label" for="c4q8">Kegiatan kemahasiswaan</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q8[]" type="checkbox" class="custom-control-input" id="c5q8" value="Laman UM">
                      <label class="custom-control-label" for="c5q8">Laman UM</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input type="checkbox" class="custom-control-input" id="c6q8">
                      <label class="custom-control-label" for="c6q8" >Lain-lain</label>
                      <input type="text" name="q8[]" id="c6q8_input" class="form-control">
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
</div> --}}

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4 quest_7" >
      <div class="card-header border-bottom">
        <h6 class="m-0">{{ $list_pertanyaan['q9'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <fieldset>
                   <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio1q9" name="q9" class="custom-control-input" value="Kinerja sudah selaras dengan visi, misi, tujuan, dan sasaran Universitas">
                    <label class="custom-control-label" for="radio1q9"> Kinerja sudah selaras dengan visi, misi, tujuan, dan sasaran Universitas</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio2q9" name="q9" class="custom-control-input" value="Kinerja cukup selaras dengan visi, misi, tujuan, dan sasaran Universitas">
                    <label class="custom-control-label" for="radio2q9"> Kinerja cukup selaras dengan visi, misi, tujuan, dan sasaran Universitas</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio3q9" name="q9" class="custom-control-input" value="Kinerja kurang selaras dengan visi, misi, tujuan, dan sasaran Universitas">
                    <label class="custom-control-label" for="radio3q9"> Kinerja kurang selaras dengan visi, misi, tujuan, dan sasaran Universitas</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio4q9" name="q9" class="custom-control-input" value="Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan, dan sasaran Universitas">
                    <label class="custom-control-label" for="radio4q9"> Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan, dan sasaran Universitas</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio5q9" name="q9" class="custom-control-input" value="Tidak tahu karena tidak pernah memperhatikan">
                    <label class="custom-control-label" for="radio5q9"> Tidak tahu karena tidak pernah memperhatikan</label>
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

{{-- <div align="center">
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
                  <label class="text-info"><i>Wajib Mengisi Pilihan Berikut ini</i></label>
                  <table width="100%">
                    <tbody>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10b'] }}</td>
                        <td width="20%"><select name="q10b" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10c'] }}</td>
                        <td width="20%"><select name="q10c" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10d'] }}</td>
                        <td width="20%"><select name="q10d" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10a'] }}</td>
                        <td width="20%"><select name="q10a" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10f'] }}</td>
                        <td width="20%"><select name="q10f" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10h'] }}</td>
                        <td width="20%"><select name="q10h" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10i'] }}</td>
                        <td width="20%"><select name="q10i" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10e'] }}</td>
                        <td width="20%"><select name="q10e" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10g'] }}</td>
                        <td width="20%"><select name="q10g" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10j'] }}</td>
                        <td width="20%"><select name="q10j" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10k'] }}</td>
                        <td width="20%"><select name="q10k" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10l'] }}</td>
                        <td width="20%"><select name="q10l" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10m'] }}</td>
                        <td width="20%"><select name="q10m" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10n'] }}</td>
                        <td width="20%"><select name="q10n" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10x'] }}</td>
                        <td width="20%"><select name="q10x" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10y'] }}</td>
                        <td width="20%"><select name="q10y" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10z'] }}</td>
                        <td width="20%"><select name="q10z" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10bb'] }}</td>
                        <td width="20%"><select name="q10bb" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10o'] }}</td>
                        <td width="20%"><select name="q10o" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10p'] }}</td>
                        <td width="20%"><select name="q10p" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10q'] }}</td>
                        <td width="20%"><select name="q10q" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10r'] }}</td>
                        <td width="20%"><select name="q10r" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10s'] }}</td>
                        <td width="20%"><select name="q10s" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10t'] }}</td>
                        <td width="20%"><select name="q10t" class="form-control" required="">
                            <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10u'] }}</td>
                        <td width="20%"><select name="q10u" class="form-control" required="">
  
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10v'] }}</td>
                        <td width="20%"><select name="q10v" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q10w'] }}</td>
                        <td width="20%"><select name="q10w" class="form-control" required="">
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
</div>  --}}

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      {{-- <div class="card-header border-bottom">
        <h6 class="m-0">Isilah pertanyaan berikut</h6>
      </div> --}}
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          {{-- <div class="row">
            <div class="col"> --}}
              {{-- <div class="col-md-12">
                <div class="card-body">
                  <label>{{ $list_pertanyaan['kepuasankinerja'] }}</label>
                  <textarea name="kepuasankinerja" class="form-control words-limit"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card-body">
                  <label>{{ $list_pertanyaan['ketidakpuasankinerja'] }}</label>
                  <textarea name="ketidakpuasankinerja" class="form-control words-limit"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card-body">
                  <label>{{ $list_pertanyaan['rencanakinerja'] }}</label>
                  <textarea name="rencanakinerja" class="form-control words-limit"></textarea>
                </div>
              </div> --}}
              <div class="form-group text-center">
                <button type="submit" class="btn btn-md btn-success">Simpan</button>
              </div>
            {{-- </div>
          </div> --}}
        </li>
      </ul>
    </div>
  </div>
</div>

</form>
@endsection

@section('pagespecificjs') 
<script>
  $(document).ready(function() {
    //textareacounter
    $("textarea.words-limit").textareaCounter({ limit: 100 });

    if($("#c6q2").is(":checked")) {
      $("#c6q2_input").prop("required", true);
      $("#c5q2_input").prop("disabled", false);
    }
    else {
      $("#c6q2_input").prop("required", false);
      $("#c6q2_input").prop("disabled", true);
    }

    if($("#c6q5").is(":checked")) {
      $("#c6q5_input").prop("required", true);
      $("#c6q5_input").prop("disabled", false);
    }
    else {
      $("#c6q5_input").prop("required", false);
      $("#c6q5_input").prop("disabled", true);
    }

    if($("#c6q8").is(":checked")) {
      $("#c6q8_input").prop("required", true);
      $("#c6q8_input").prop("disabled", false);
    }
    else {
      $("#c6q8_input").prop("required", false);
      $("#c6q8_input").prop("disabled", true);
    }
  });

  $("#c6q2").on("change", function(e) {
    $("#c6q2_input").prop("required", $(this).is(":checked"));
    $("#c6q2_input").prop("disabled", !$(this).is(":checked"));
  });
  $("#c6q5").on("change", function(e) {
    $("#c6q5_input").prop("required", $(this).is(":checked"));
    $("#c6q5_input").prop("disabled", !$(this).is(":checked"));
  });
  $("#c6q8").on("change", function(e) {
    $("#c6q8_input").prop("required", $(this).is(":checked"));
    $("#c6q8_input").prop("disabled", !$(this).is(":checked"));
  });

  //Pertanyaan 1 jumper handler
  $("input[name='q1']").change(function(){
    ($(this).val().toLowerCase() == 'tidak') ? disableQuestion(".quest_1") : enableQuestion(".quest_1");
  });
  //Pertanyaan 4 jumper handler
  $("input[name='q4']").change(function(){
    ($(this).val().toLowerCase() == 'tidak') ? disableQuestion(".quest_4") : enableQuestion(".quest_4");
  });
  //Pertanyaan 7 jumper handler
  $("input[name='q7']").change(function(){
    ($(this).val().toLowerCase() == 'tidak') ? disableQuestion(".quest_7") : enableQuestion(".quest_7");
  });

  function disableQuestion(selector='') {
    if(selector) {
      $(selector).find("input:checkbox").prop('disabled', true);
      $(selector+" :input:radio").prop('required', false);
      $(selector+" :input").not(':button, :submit, :reset, :hidden, :radio, :checkbox').val('');
      $(selector+" :input:checkbox").prop('checked', false).prop('selected', false).trigger('change');
      $(selector).fadeOut();
    }
  }
  function enableQuestion(selector='') {
    if(selector) {
      $(selector+" :input:radio").prop('required', true);
      $(selector).find("input:checkbox").prop('disabled', false);
      $(selector).fadeIn();
    }
  }
</script> 
@endsection