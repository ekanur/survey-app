@extends('layouts.app') 

@section('content') 
<div class="text-center text-info p-2 mb-4">
  Instrumen ini ditujukan untuk menilai tingkat kepuasan Ibu/Bapak terhadap kinerja Lembaga. Untuk itu, kami mohon Ibu/Bapak memberikan amatan dan cermatan terhadap kinerja Lembaga dengan menjawab pertanyaan yang tertera di angket. Kami ucapkan terima kasih atas partisipasi dan  kerjasama yang diberikan
</div>

<form method="POST" action="{{ url("/angket-alumni") }}">
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
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c1q2" value="Masa orientasi Maba">
                      <label class="custom-control-label" for="c1q2">Masa orientasi maba</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c2q2" value="Katalog dan atau dokumen Jurusan lainnya">
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
                  <label></label>
                  <fieldset>
                    <div class="custom-control custom-radio mb-1">
                      <input required="" type="radio" id="radio1q3" name="q3" class="custom-control-input" value="Kinerja sudah selaras dengan visi, misi, tujuan dan sasaran Program Studi/Jurusan">
                      <label class="custom-control-label" for="radio1q3"> Kinerja sudah selaras dengan visi, misi, tujuan dan sasaran Program Studi/Jurusan</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input required="" type="radio" id="radio2q3" name="q3" class="custom-control-input" value="Kinerja cukup selaras dengan visi, misi, tujuan dan sasaran Program Studi/Jurusan">
                      <label class="custom-control-label" for="radio2q3"> Kinerja cukup selaras dengan visi, misi, tujuan dan sasaran Program Studi/Jurusan</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input required="" type="radio" id="radio3q3" name="q3" class="custom-control-input" value="Kinerja kurang selaras dengan visi, misi, tujuan dan sasaran Program Studi/Jurusan">
                      <label class="custom-control-label" for="radio3q3"> Kinerja kurang selaras dengan visi, misi, tujuan dan sasaran Program Studi/Jurusan</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                      <input required="" type="radio" id="radio5q3" name="q3" class="custom-control-input" value="Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan dan sasaran Program Studi/Jurusan">
                      <label class="custom-control-label" for="radio5q3"> Tidak tahu karena tidak mengetahui rumusan visi, misi, tujuan dan sasaran Program Studi/Jurusan</label>
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
        <h6 class="m-0">{{ $list_pertanyaan['q4'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
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

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">{{ $list_pertanyaan['q5'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">

            <div class="col-sm-12">

              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <label class="text-info"><i>Boleh lebih dari satu jawaban</i></label>
                  <label for="checkboxd5"></label>
                  <fieldset>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c1q5" value="Bekerja di institusi pendidikan">
                      <label class="custom-control-label" for="c1q5">Bekerja di institusi pendidikan</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c2q5" value="Bekerja di institusi non-pendidikan">
                      <label class="custom-control-label" for="c2q5">Bekerja di institusi non-pendidikan</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c3q5" value="Bekerja di sektor swasta, bisnis atau BUMN">
                      <label class="custom-control-label" for="c3q5">Bekerja di sektor swasta, bisnis atau BUMN</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c4q5" value="Berwirausaha">
                      <label class="custom-control-label" for="c4q5">Berwirausaha</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c5q5" value="Studi Lanjut (S2/S3)">
                      <label class="custom-control-label" for="c5q5">Studi Lanjut (S2/S3) </label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input type="checkbox" class="custom-control-input" id="c6q5" value="Lain-lain">
                      <label class="custom-control-label" for="c6q5">Lain-lain</label>
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
</div>

<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
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
                    <input required="" type="radio" id="radio1q6" name="q6[]" class="custom-control-input" value="PNS">
                    <label class="custom-control-label" for="radio1q6">PNS</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio2q6" name="q6[]" class="custom-control-input" value="Non PNS">
                    <label class="custom-control-label" for="radio2q6"> Non PNS</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input type="radio"  name="q6[]" id="radio3q6"class="custom-control-input">
                    <label class="custom-control-label" for="radio3q6"> Lain-lain</label>
                    <input type="text" id="radio3q6_input" class="form-control">
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
        <h6 class="m-0">Semasa kuliah, berikan penilaian anda terhadap indikator berikut ini </h6>
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
                      <h6 class="m-0">A. Di Tingkat Prodi</h6>
                      <table width="100%">
                        <tbody>
                          <tr>
                            <td width="80%">{{ $list_pertanyaan['q7a1'] }}</td>
                            <td width="20%"><select name="q7a1" class="form-control">
                              <option value="4">Sangat Puas</option>
                              <option value="3">Puas</option>
                              <option value="2">Cukup Puas</option>
                              <option value="1">Tidak Puas</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td width="80%">{{ $list_pertanyaan['q7a2'] }}</td>
                            <td width="20%"><select name="q7a2" class="form-control">
                             <option value="4">Sangat Puas</option>
                             <option value="3">Puas</option>
                             <option value="2">Cukup Puas</option>
                             <option value="1">Tidak Puas</option>
                           </select></td>
                         </tr>
                         <tr>
                          <td width="80%">{{ $list_pertanyaan['q7a3'] }}</td>
                          <td width="20%"><select name="q7a3" class="form-control">
                           <option value="4">Sangat Puas</option>
                           <option value="3">Puas</option>
                           <option value="2">Cukup Puas</option>
                           <option value="1">Tidak Puas</option>
                         </select></td>
                       </tr>
                       <tr>
                        <td width="80%">{{ $list_pertanyaan['q7a4'] }}</td>
                        <td width="20%"><select name="q7a4" class="form-control">
                         <option value="4">Sangat Puas</option>
                         <option value="3">Puas</option>
                         <option value="2">Cukup Puas</option>
                         <option value="1">Tidak Puas</option>
                       </select></td>
                     </tr>
                     <tr>
                      <td width="80%">{{ $list_pertanyaan['q7a5'] }}</td>
                      <td width="20%"><select name="q7a5" class="form-control">
                       <option value="4">Sangat Puas</option>
                       <option value="3">Puas</option>
                       <option value="2">Cukup Puas</option>
                       <option value="1">Tidak Puas</option>
                     </select></td>
                   </tr>
                   <tr>
                    <td width="80%">{{ $list_pertanyaan['q7a6'] }}</td>
                    <td width="20%"><select name="q7a6" class="form-control">
                     <option value="4">Sangat Puas</option>
                     <option value="3">Puas</option>
                     <option value="2">Cukup Puas</option>
                     <option value="1">Tidak Puas</option>
                   </select></td>
                 </tr>
                 <tr>
                  <td width="80%">{{ $list_pertanyaan['q7a7'] }}</td>
                  <td width="20%"><select name="q7a7" class="form-control">
                   <option value="4">Sangat Puas</option>
                   <option value="3">Puas</option>
                   <option value="2">Cukup Puas</option>
                   <option value="1">Tidak Puas</option>
                 </select></td>
               </tr>
               <tr>
                <td width="80%">{{ $list_pertanyaan['q7a8'] }}</td>
                <td width="20%"><select name="q7a8" class="form-control">
                 <option value="4">Sangat Puas</option>
                 <option value="3">Puas</option>
                 <option value="2">Cukup Puas</option>
                 <option value="1">Tidak Puas</option>
               </select></td>
             </tr>
             <tr>
              <td width="80%">{{ $list_pertanyaan['q7a9'] }}</td>
              <td width="20%"><select name="q7a9" class="form-control">
               <option value="4">Sangat Puas</option>
               <option value="3">Puas</option>
               <option value="2">Cukup Puas</option>
               <option value="1">Tidak Puas</option>
             </select></td>
           </tr>
           <tr>
            <td width="80%">{{ $list_pertanyaan['q7a1'] }}</td>
            <td width="20%"><select name="q7a10" class="form-control">
             <option value="4">Sangat Puas</option>
             <option value="3">Puas</option>
             <option value="2">Cukup Puas</option>
             <option value="1">Tidak Puas</option>
           </select></td>
         </tr>
         <tr>
          <td width="80%">{{ $list_pertanyaan['q7a1'] }}</td>
          <td width="20%"><select name="q7a11" class="form-control">
           <option value="4">Sangat Puas</option>
           <option value="3">Puas</option>
           <option value="2">Cukup Puas</option>
           <option value="1">Tidak Puas</option>
         </select></td>
       </tr>
       <tr>
        <td width="80%">{{ $list_pertanyaan['q7a1'] }}</td>
        <td width="20%"><select name="q7a12" class="form-control">
         <option value="4">Sangat Puas</option>
         <option value="3">Puas</option>
         <option value="2">Cukup Puas</option>
         <option value="1">Tidak Puas</option>
       </select></td>
     </tr>
     <tr>
      <td width="80%">{{ $list_pertanyaan['q7a1'] }}</td>
      <td width="20%"><select name="q7a13" class="form-control">
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
      <h6 class="m-0">B. Di tingkat Fakultas/Universitas</h6>
      <table width="100%">
        <tbody>
          <tr>
            <td width="80%">{{ $list_pertanyaan['q7b1'] }}</td>
            <td width="20%"><select name="q7b1" class="form-control">
             <option value="4">Sangat Puas</option>
             <option value="3">Puas</option>
             <option value="2">Cukup Puas</option>
             <option value="1">Tidak Puas</option>
           </select></td>
         </tr>
         <tr>
          <td width="80%">{{ $list_pertanyaan['q7b2'] }}</td>
          <td width="20%"><select name="q7b2" class="form-control">
           <option value="4">Sangat Puas</option>
           <option value="3">Puas</option>
           <option value="2">Cukup Puas</option>
           <option value="1">Tidak Puas</option>
         </select></td>
       </tr>
       <tr>
        <td width="80%">{{ $list_pertanyaan['q7b3'] }}</td>
        <td width="20%"><select name="q7b3" class="form-control">
         <option value="4">Sangat Puas</option>
         <option value="3">Puas</option>
         <option value="2">Cukup Puas</option>
         <option value="1">Tidak Puas</option>
       </select></td>
     </tr>
     <tr>
      <td width="80%">{{ $list_pertanyaan['q7b4'] }}</td>
      <td width="20%"><select name="q7b4" class="form-control">
       <option value="4">Sangat Puas</option>
       <option value="3">Puas</option>
       <option value="2">Cukup Puas</option>
       <option value="1">Tidak Puas</option>
     </select></td>
   </tr>
   <tr>
    <td width="80%">{{ $list_pertanyaan['q7b5'] }}</td>
    <td width="20%"><select name="q7b5" class="form-control">
     <option value="4">Sangat Puas</option>
     <option value="3">Puas</option>
     <option value="2">Cukup Puas</option>
     <option value="1">Tidak Puas</option>
   </select></td>
 </tr>
 <tr>
  <td width="80%">{{ $list_pertanyaan['q7b6'] }}</td>
  <td width="20%"><select name="q7b6" class="form-control">
   <option value="4">Sangat Puas</option>
   <option value="3">Puas</option>
   <option value="2">Cukup Puas</option>
   <option value="1">Tidak Puas</option>
 </select></td>
</tr>
<tr>
  <td width="80%">{{ $list_pertanyaan['q7b7'] }}</td>
  <td width="20%"><select name="q7b7" class="form-control">
   <option value="4">Sangat Puas</option>
   <option value="3">Puas</option>
   <option value="2">Cukup Puas</option>
   <option value="1">Tidak Puas</option>
 </select></td>
</tr>
<tr>
  <td width="80%">{{ $list_pertanyaan['q7b8'] }}</td>
  <td width="20%"><select name="q7b8" class="form-control">
   <option value="4">Sangat Puas</option>
   <option value="3">Puas</option>
   <option value="2">Cukup Puas</option>
   <option value="1">Tidak Puas</option>
 </select></td>
</tr>
<tr>
  <td width="80%">{{ $list_pertanyaan['q7b9'] }}</td>
  <td width="20%"><select name="q7b9" class="form-control">
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
        <h6 class="m-0">{{ $list_pertanyaan['saran1'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <fieldset>
                   <div class="col-md-12">
                    <div class="card-body">
                      <textarea name="saran1" class="form-control"></textarea>
                    </div>
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
        <h6 class="m-0">{{ $list_pertanyaan['saran2'] }}</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <fieldset>
                   <div class="col-md-12">
                    <div class="card-body">
                     <textarea name="saran2" class="form-control"></textarea>
                   </div>
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
        <h6 class="m-0">Tuliskan saran dan rekomendasi Ibu/Bapak kepada pihak terkait</h6>
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

 //textareacounter
 $("textarea[name='saran1']").textareaCounter({ limit: 100 });
 $("textarea[name='saran2']").textareaCounter({ limit: 100 });
 $("textarea[name='saranjurusan']").textareaCounter({ limit: 100 });
 $("textarea[name='saranfakultas']").textareaCounter({ limit: 100 });
 $("textarea[name='saranuniversitas']").textareaCounter({ limit: 100 });


  //input handler untuk checkbox "Lain-lain_1"
  $(document).ready(function() {
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


    //input handler untuk checkbox "Lain-lain_2"
    $(document).ready(function() {
      if($("#c6q5").is(":checked")) {
        $("#c6q5_input").prop("required", true);
        $("#c6q5_input").prop("disabled", false);
      }
      else {
        $("#c6q5_input").prop("required", false);
        $("#c6q5_input").prop("disabled", true);
      }
      
      if($("#radio3q6").is(":selected")){
        $("#radio3q6_input").prop("required",true);
        $("#radio3q6_input").prop("disabled",false);
      }
      else{
        $("#radio3q6_input").prop("required",false);
        $("#radio3q6_input").prop("disabled",true);
      }
    });
    $("#c6q5").on("change", function(e) {
      $("#c6q5_input").prop("required", $(this).is(":checked"));
      $("#c6q5_input").prop("disabled", !$(this).is(":checked"));
    });

    $("input[name='q6[]']").on("change", function(e) {
      if($(this).attr('id') == 'radio3q6'){
        $("#radio3q6_input").prop("required",true);
        $("#radio3q6_input").prop("disabled",false);
      }
      else{
        $("#radio3q6_input").prop("required",false);
        $("#radio3q6_input").prop("disabled",true);
      }
    });

    $("#radio3q6_input").on("input", function(e) {
      $('#radio3q6').val($(this).val());

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