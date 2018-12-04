@extends('layouts.app')

@section('content') 

<div class="page-header row no-gutters py-4">
  <div class="col-12 text-center mb-0">
    <span class="text-info">Instrumen ini ditujukan untuk menilai tingkat kepuasan Anda terhadap kinerja Lembaga. Untuk itu, kami mohon Anda untuk memberikan amatan dan cermatan terhadap kinerja Lembaga dan menjawab pertanyaan yang tertera di angket. Kami ucapkan terima kasih atas kerjasama dan perhatian yang diberikan.</span>
  </div>
</div>

<form method="POST" action="{{ url("/angket-mahasiswa") }}">
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

<div align="center">
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
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c1q2" value="Masa Orientasi Maba">
                      <label class="custom-control-label" for="c1q2">Masa Orientasi Maba</label>
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
</div>

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
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
                    <input required="" type="radio" id="radio1q3" name="q3" class="custom-control-input" value="Kinerja sudah selaras dengan visi, misi, tujuan dan sasaran Program Studi dan Jurusan">
                    <label class="custom-control-label" for="radio1q3"> Kinerja sudah selaras dengan visi, misi, tujuan dan sasaran Program Studi dan Jurusan</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio2q3" name="q3" class="custom-control-input" value="Kinerja cukup selaras dengan visi, misi, tujuan dan sasaran Program Studi dan Jurusan">
                    <label class="custom-control-label" for="radio2q3"> Kinerja cukup selaras dengan visi, misi, tujuan dan sasaran Program Studi dan Jurusan</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio3q3" name="q3" class="custom-control-input" value="Kinerja kurang selaras dengan visi, misi, tujuan dan sasaran Program Studi dan Jurusan">
                    <label class="custom-control-label" for="radio3q3"> Kinerja kurang selaras dengan visi, misi, tujuan dan sasaran Program Studi dan Jurusan</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio4q3" name="q3" class="custom-control-input" value="Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan dan sasaran Program Studi dan Jurusan">
                    <label class="custom-control-label" for="radio4q3"> Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan dan sasaran Program Studi dan Jurusan</label>
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
</div>

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Berikan penilaian Anda terhadap indikator berikut ini </h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <label class="text-info"><i>Wajib Mengisi Pilihan Berikut ini</i></label>
                  <div class="col-lg-12 text-sm-left">
                  <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                    <h6 class="m-0">a. Di Tingkat Prodi</h6>
                  <table width="100%">
                    <tbody>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a1'] }}</td>
                        <td width="20%"><select name="q4a1" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a2'] }}</td>
                        <td width="20%"><select name="q4a2" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a3'] }}</td>
                        <td width="20%"><select name="q4a3" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a4'] }}</td>
                        <td width="20%"><select name="q4a4" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a5'] }}</td>
                        <td width="20%"><select name="q4a5" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a6'] }}</td>
                        <td width="20%"><select name="q4a6" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a7'] }}</td>
                        <td width="20%"><select name="q4a7" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a8'] }}</td>
                        <td width="20%"><select name="q4a8" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a9'] }}</td>
                        <td width="20%"><select name="q4a9" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a10'] }}</td>
                        <td width="20%"><select name="q4a10" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a11'] }}</td>
                        <td width="20%"><select name="q4a11" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a12'] }}</td>
                        <td width="20%"><select name="q4a12" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a13'] }}</td>
                        <td width="20%"><select name="q4a13" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a14'] }}</td>
                        <td width="20%"><select name="q4a14" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a15'] }}</td>
                        <td width="20%"><select name="q4a15" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4a16'] }}</td>
                        <td width="20%"><select name="q4a16" class="form-control">
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
            <div class="col-lg-12 text-sm-left">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">b. Di Tingkat Fakultas/Universitas</h6>
                  <table width="100%">
                    <tbody>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4b1'] }}</td>
                        <td width="20%"><select name="q4b1" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4b2'] }}</td>
                        <td width="20%"><select name="q4b2" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4b3'] }}</td>
                        <td width="20%"><select name="q4b3" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4b4'] }}</td>
                        <td width="20%"><select name="q4b4" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4b5'] }}</td>
                        <td width="20%"><select name="q4b5" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4b6'] }}</td>
                        <td width="20%"><select name="q4b6" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4b7'] }}</td>
                        <td width="20%"><select name="q4b7" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4b8'] }}</td>
                        <td width="20%"><select name="q4b8" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4b9'] }}</td>
                        <td width="20%"><select name="q4b9" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4b10'] }}</td>
                        <td width="20%"><select name="q4b10" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4b11'] }}</td>
                        <td width="20%"><select name="q4b11" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4b12'] }}</td>
                        <td width="20%"><select name="q4b12" class="form-control">
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
        <h6 class="m-0">{{ $list_pertanyaan['pengalamanfaedah'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <div class="col-md-12">
                <div class="card-body">
                  <textarea name="pengalamanfaedah" class="form-control"></textarea>
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
        <h6 class="m-0">{{ $list_pertanyaan['pengalamanunfaedah'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <div class="col-md-12">
                <div class="card-body">
                  <textarea name="pengalamanunfaedah" class="form-control"></textarea>
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
        <h6 class="m-0">Tuliskan saran dan rekomendasi Anda kepada pihak terkait</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <div class="col-md-12">
                <div class="card-body">
                  <label>{{ $list_pertanyaan['saranjurusan'] }}</label>
                  <textarea name="saranjurusan" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card-body">
                  <label>{{ $list_pertanyaan['saranfakultas'] }}</label>
                  <textarea name="saranfakultas" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card-body">
                  <label>{{ $list_pertanyaan['saranuniversitas'] }}</label>
                  <textarea name="saranuniversitas" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-md btn-success">Simpan</button>
              </div>
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

   $(document).ready(function() {

    $("textarea[name='pengalamanfaedah']").textareaCounter({ limit: 100 });
    $("textarea[name='pengalamanunfaedah']").textareaCounter({ limit: 100 });
    $("textarea[name='saranjurusan']").textareaCounter({ limit: 100 });
    $("textarea[name='saranfakultas']").textareaCounter({ limit: 100 });
    $("textarea[name='saranuniversitas']").textareaCounter({ limit: 100 });
    $("textarea[name='buktipemahamanvmts']").textareaCounter({ limit: 100});

    if($("#c6q2").is(":checked")) {
      $("#c6q2_input").prop("required", true);
      $("#c5q2_input").prop("disabled", false);
    }
    else {
      $("#c6q2_input").prop("required", false);
      $("#c6q2_input").prop("disabled", true);
    }
  });
  $("#c6q2").on("change", function(e) {
    $("#c6q2_input").prop("required", $(this).is(":checked"));
    $("#c6q2_input").prop("disabled", !$(this).is(":checked"));
  });
  //Pertanyaan 1 jumper handler
  $("input[name='q1']").change(function(){
    ($(this).val().toLowerCase() == 'tidak') ? disableQuestion(".quest_1") : enableQuestion(".quest_1");
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