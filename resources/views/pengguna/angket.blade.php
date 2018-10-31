@extends('layouts.app')

@section('content') 

<div class="page-header row no-gutters py-4">
  <div class="col-12 text-center mb-0">
    <span class="text-info">Instrumen ini ditujukan untuk menilai tingkat kepuasan Ibu/Bapak terhadap kinerja Lembaga. Untuk itu, kami mohon Ibu/Bapak untuk memberikan amatan dan cermatan terhadap kinerja Lembaga dan menjawab pertanyaan yang tertera di angket. Kami ucapkan terima kasih atas partisipasi dan kerjasama yang diberikan.</span>
  </div>
</div>

<form method="POST" action="{{ url("/angket-pengguna") }}">
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
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c1q2" value="Dokumen Jurusan (mis: katalog)">
                      <label class="custom-control-label" for="c1q2">Dokumen Jurusan (mis: katalog)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c2q2" value="Dokumen Universitas (mis: prospectus)">
                      <label class="custom-control-label" for="c2q2">Dokumen Universitas (mis: prospectus)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c3q2" value="Membaca banner">
                      <label class="custom-control-label" for="c3q2">Membaca Banner</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c4q2" value="Kegiatan Kemahasiswaan">
                      <label class="custom-control-label" for="c4q2">Kegiatan Kemahasiswaan</label>
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
                    <input required="" type="radio" id="radio1q3" name="q3" class="custom-control-input" value="Kinerja sudah selaras dengan visi, misi, tujuan dan sasaran UM">
                    <label class="custom-control-label" for="radio1q3"> Kinerja sudah selaras dengan visi, misi, tujuan dan sasaran UM</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio2q3" name="q3" class="custom-control-input" value="Kinerja cukup selaras dengan visi, misi, tujuan dan sasaran UM">
                    <label class="custom-control-label" for="radio2q3"> Kinerja cukup selaras dengan visi, misi, tujuan dan sasaran UM</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio3q3" name="q3" class="custom-control-input" value="Kinerja kurang selaras dengan visi, misi, tujuan dan sasaran UM">
                    <label class="custom-control-label" for="radio3q3"> Kinerja kurang selaras dengan visi, misi, tujuan dan sasaran UM</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio4q3" name="q3" class="custom-control-input" value="Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan dan sasaran UM">
                    <label class="custom-control-label" for="radio4q3"> Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan dan sasaran UM</label>
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
        <h6 class="m-0">Menurut Ibu/Bapak, bagaimana kompetensi lulusan kami dalam aspek-aspek berikut </h6>
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
                        <td width="80%">{{ $list_pertanyaan['q4a'] }}</td>
                        <td width="20%"><select name="q4a" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4b'] }}</td>
                        <td width="20%"><select name="q4b" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4c'] }}</td>
                        <td width="20%"><select name="q4c" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4d'] }}</td>
                        <td width="20%"><select name="q4d" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4e'] }}</td>
                        <td width="20%"><select name="q4e" class="form-control" required="">
                          
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4f'] }}</td>
                        <td width="20%"><select name="q4f" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4g'] }}</td>
                        <td width="20%"><select name="q4g" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4h'] }}</td>
                        <td width="20%"><select name="q4h" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q4i'] }}</td>
                        <td width="20%"><select name="q4i" class="form-control" required="">
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
                        <td width="80%">{{ $list_pertanyaan['q5a'] }}</td>
                        <td width="20%"><select name="q5a" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5b'] }}</td>
                        <td width="20%"><select name="q5b" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5c'] }}</td>
                        <td width="20%"><select name="q5c" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5d'] }}</td>
                        <td width="20%"><select name="q5d" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5e'] }}</td>
                        <td width="20%"><select name="q5e" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5f'] }}</td>
                        <td width="20%"><select name="q5f" class="form-control" required="">
                          
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5g'] }}</td>
                        <td width="20%"><select name="q5g" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5h'] }}</td>
                        <td width="20%"><select name="q5h" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5i'] }}</td>
                        <td width="20%"><select name="q5i" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5j'] }}</td>
                        <td width="20%"><select name="q5j" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5k'] }}</td>
                        <td width="20%"><select name="q5k" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5l'] }}</td>
                        <td width="20%"><select name="q5l" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5m'] }}</td>
                        <td width="20%"><select name="q5m" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5n'] }}</td>
                        <td width="20%"><select name="q5n" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5o'] }}</td>
                        <td width="20%"><select name="q5o" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5p'] }}</td>
                        <td width="20%"><select name="q5p" class="form-control" required="">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">{{ $list_pertanyaan['q5q'] }}</td>
                        <td width="20%"><select name="q5q" class="form-control" required="">
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
                  <label>{{ $list_pertanyaan['saranjurusan'] }}</label>
                  <textarea name="saranjurusan" class="form-control" placeholder="Saran untuk Prodi / Jurusan"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card-body">
                  <label>{{ $list_pertanyaan['saranfakultas'] }}</label>
                  <textarea name="saranfakultas" class="form-control" placeholder="Saran untuk Fakultas"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card-body">
                  <label>{{ $list_pertanyaan['saranuniversitas'] }}</label>
                  <textarea name="saranuniversitas" class="form-control" placeholder="Saran untuk Universitas"></textarea>
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
    $("textarea[name='saranjurusan']").textareaCounter({ limit: 100 });
    $("textarea[name='saranfakultas']").textareaCounter({ limit: 100 });
    $("textarea[name='saranuniversitas']").textareaCounter({ limit: 100 });

    if($("#c6q2").is(":checked")) {
      $("#c6q2_input").prop("required", true);
      $("#c6q2_input").prop("disabled", false);
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