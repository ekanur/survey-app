@extends('layouts.app')

@section('content') 
<div class="text-center text-muted p-2">
  Instrumen ini ditujukan untuk menilai tingkat kepuasan Ibu/Bapak terhadap kinerja Lembaga. Untuk itu, kami mohon Ibu/Bapak memberikan amatan dan cermatan terhadap kinerja Lembaga dengan menjawab pertanyaan yang tertera di angket. Kami ucapkan terima kasih atas partisipasi dan  kerjasama yang diberikan
</p>
<form method="POST" action="{{ url("/angket-mitra") }}">
  {{ csrf_field() }}
  <div align="center">
    <div class="col-lg-8 text-sm-left">
      <div class="card card-small mb-4" >
        <div class="card-header border-bottom">
          <h6 class="m-0">Apakah Ibu/Bapak memahami rumusan visi, misi, tujuan, dan sasaran Universitas Negeri Malang (UM)?</h6>
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
        <h6 class="m-0">Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran UM?</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col-sm-12">
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
        <h6 class="m-0">Bagaimana menurut Ibu/Bapak, kinerja UM dalam mencapai visi, misi, tujuan, dan sasarannya?</h6>
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
                    <input required="" type="radio" id="radio4q3" name="q3" class="custom-control-input" value="Tidak tahu karena tidak mengetahui rumusan visi/misi jurusan">
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
        <h6 class="m-0">Berikan penilaian Ibu/Bapak terhadap indikator berikut ini </h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">

              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <label class="text-info"><i>Wajib mengisi pilihan berikut ini</i></label>
                  <table width="100%">
                    <tbody>
                      <tr>
                        <td width="80%">Kualitas informasi dan profil Universitas </td>
                        <td width="20%"><select name="q4a" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Kualitas jejaring yang dibangun Universitas</td>
                        <td width="20%"><select name="q4b" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Kontribusi Universitas terhadap mitra</td>
                        <td width="20%"><select name="q4c" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Kontribusi mitra terhadap kegiatan akademik Universitas</td>
                        <td width="20%"><select name="q4d" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Kontribusi mitra terhadap kegiatan non-akademik Universitas </td>
                        <td width="20%"><select name="q4e" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Keterlibatan Ibu/Bapak dalam kegiatan pembelajaran </td>
                        <td width="20%"><select name="q4f" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Keterlibatan Ibu/Bapak dalam kegiatan penelitian </td>
                        <td width="20%"><select name="q4g" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Keterlibatan Ibu/Bapak dalam pengabdian kepada masyarakat</td>
                        <td width="20%"><select name="q4h" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Kejelasan dan kelengkapan informasi yang diperlukan untuk memperoleh layanan kelembagaan</td>
                        <td width="20%"><select name="q4i" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Prosedur pemberian layanan kelembagaan</td>
                        <td width="20%"><select name="q4j" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Waktu pemberian layanan kelembagaan</td>
                        <td width="20%"><select name="q4k" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Biaya pemberian layanan kelembagaan</td>
                        <td width="20%"><select name="q4l" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Produk layanan kelembagaan</td>
                        <td width="20%"><select name="q4m" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Kompetensi pelaksana layanan kelembagaan</td>
                        <td width="20%"><select name="q4n" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Perilaku pelaksana layanan kelembagaan</td>
                        <td width="20%"><select name="q4o" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Penanganan pengaduan terkait layanan kelembagaan</td>
                        <td width="20%"><select name="q4p" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Kualitas layanan kelembagaan</td>
                        <td width="20%"><select name="q4q" class="form-control">
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
        <h6 class="m-0">Tuliskan saran dan rekomendasi Ibu/Bapak kepada Universitas</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="saranmitra" class="form-control" placeholder="Saran untuk universitas"></textarea>
              </div>
              <div class="form-group text-right">
                <button type="submit" class="btn btn-success">Simpan</button>
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
    //textareacounter
    $("textarea[name='saranmitra']").textareaCounter({ limit: 100 });

    //input handler untuk checkbox "Lain-lain"
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
      $(selector+" :input").not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
      $(selector+" :input:checkbox").prop('checked', false).prop('selected', false).trigger('change');
      $(selector).fadeOut();
    }
  }
  function enableQuestion(selector='') {
    if(selector) {
      $(selector).find("input:checkbox").prop('disabled', false);
      $(selector).fadeIn();
    }
  }
</script> 
@endsection