@extends('layouts.app')

@section('content') 

<form method="POST" action="{{ url("/angket-mitra") }}">
  {{ csrf_field() }}
  <div align="center">
    <div class="col-lg-8 text-sm-left">
      <div class="card card-small mb-4" >
        <div class="card-header border-bottom">
          <h6 class="m-0">1.  Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Universitas Negeri Malang?</h6>
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
        <h6 class="m-0">Dari mana Ibu/Bapak mengetahui rumusan tersebut?</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <input type="text" name="q2" class="form-control" required="">
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
        <h6 class="m-0">Bagaimana menurut Ibu/Bapak, kinerja Universitas dalam mencapai visi dan sasarannya?</h6>
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
        <h6 class="m-0">Berikan penilaian Ibu/Bapak terhadap indikator berikut ini </h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">

              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <h6>(1 = Tidak Puas; 2 = Cukup Puas; 3 = Puas; 4 = Sangat Puas)</h6>
                  <table width="100%">
                    <tbody>
                      <tr>
                        <td width="85%">Kualitas informasi dan profil Universitas </td>
                        <td width="15%"><select name="q4a" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Kualitas jejaring yang dibangun Universitas</td>
                        <td width="15%"><select name="q4b" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Kontribusi Universitas terhadap mitra</td>
                        <td width="15%"><select name="q4c" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Kontribusi mitra terhadap kegiatan akademik Universitas</td>
                        <td width="15%"><select name="q4d" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Kontribusi mitra terhadap kegiatan non-akademik Universitas </td>
                        <td width="15%"><select name="q4e" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Keterlibatan Ibu/Bapak dalam kegiatan pembelajaran </td>
                        <td width="15%"><select name="q4f" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Keterlibatan Ibu/Bapak dalam kegiatan penelitian </td>
                        <td width="15%"><select name="q4g" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="85%">Keterlibatan Ibu/Bapak dalam pengabdian kepada masyarakat</td>
                        <td width="15%"><select name="q4h" class="form-control">
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
  //Pertanyaan 1 jumper handler
  $("input[name='q1']").change(function(){
    ($(this).val().toLowerCase() == 'tidak') ? disableQuestion(".quest_1") : enableQuestion(".quest_1");
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