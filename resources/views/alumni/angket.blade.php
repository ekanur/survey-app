@extends('layouts.app')

@section('content') 

<form method="POST" action="{{ url("/angket-alumni") }}">
  {{ csrf_field() }}
  <div align="center">
    <div class="col-lg-8 text-sm-left">
      <div class="card card-small mb-4" >
        <div class="card-header border-bottom">
          <h6 class="m-0">Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Program Studi ketika Ibu/Bapak masih kuliah?</h6>
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
        <h6 class="m-0">Dari mana Ibu/Bapak mengetahui rumusan tersebut ?</h6>
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
                      <label class="custom-control-label" for="c1q2">Masa orientasi maba</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c2q2" value="Katalog dan/atau dokumen Jurusan lainnya">
                      <label class="custom-control-label" for="c2q2">Katalog dan/atau dokumen Jurusan lainnya</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input name="q2[]" type="checkbox" class="custom-control-input" id="c3q2" value="Membaca banner">
                      <label class="custom-control-label" for="c3q2">Membaca banner (poster ruang)</label>
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
                      <input type="text" name="q2[]" id="c6q2_input" class="form-control form-control-sm">

          
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
        <h6 class="m-0">Apakah pekerjaan Ibu/Bapak relevan dengan program studi yang ditempuh di Universitas Negeri Malang ?</h6>
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
        <h6 class="m-0">Dari pilihan Berikut, mana yang menjelaskan status karir Ibu/Bapak </h6>
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
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c1q5" value="Bekerja di sekolah negeri atau swasta">
                      <label class="custom-control-label" for="c1q5">Bekerja di sekolah negeri atau swasta</label>
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
                      <input name="q5[]" type="checkbox" class="custom-control-input" id="c5q5" value="Studi Lanjut">
                      <label class="custom-control-label" for="c5q5">Studi Lanjut (S2/S3) </label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input type="checkbox" class="custom-control-input" id="c6q5" value="Lain-lain">
                      <label class="custom-control-label" for="c6q5">Lain-lain</label>
                      <input type="text" name="q5[]" id="c6q5_input" class="form-control form-control-sm">
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
        <h6 class="m-0">Dari pilihan berikut ini mana yang menjelaskan status pekerjaan Ibu/Bapak : </h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">


              <div class="form-row">
                <div class="form-group col-md-12 text-sm-left">
                  <fieldset>
                   <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio1q6" name="q6" class="custom-control-input" value="PNS">
                    <label class="custom-control-label" for="radio1q6">PNS</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input required="" type="radio" id="radio2q6" name="q6" class="custom-control-input" value="Non PNS">
                    <label class="custom-control-label" for="radio2q6"> Non PNS</label>
                  </div>
                  <div class="custom-control custom-radio mb-1">
                    <input type="radio" name="q6" id="radio3q6"class="custom-control-input">
                    <label class="custom-control-label" for="radio3q6"> Lain-lain</label>
                    <input type="text" id="radio3q6_input" class="form-control form-control-sm">
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
        <h6 class="m-0">Semasa kuliah, berikan penilaian anda terhadap indikator berikut ini yang menujukan </h6>
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
                        <td width="80%">Kualitas informasi dan profil Program Studi</td>
                        <td width="20%"><select name="q7a1" class="form-control">
                          <option value="4">Sangat Puas</option>
                          <option value="3">Puas</option>
                          <option value="2">Cukup Puas</option>
                          <option value="1">Tidak Puas</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="80%">Kurikulum Program Studi</td>
                        <td width="20%"><select name="q7a2" class="form-control">
                         <option value="4">Sangat Puas</option>
                         <option value="3">Puas</option>
                         <option value="2">Cukup Puas</option>
                         <option value="1">Tidak Puas</option>
                       </select></td>
                     </tr>
                     <tr>
                      <td width="80%">Kualitas dosen Program Studi</td>
                      <td width="20%"><select name="q7a3" class="form-control">
                       <option value="4">Sangat Puas</option>
                       <option value="3">Puas</option>
                       <option value="2">Cukup Puas</option>
                       <option value="1">Tidak Puas</option>
                     </select></td>
                   </tr>
                   <tr>
                    <td width="80%">Kualitas pembimbing tugas akhir/skripsi/tesis/disertasi</td>
                    <td width="20%"><select name="q7a4" class="form-control">
                     <option value="4">Sangat Puas</option>
                     <option value="3">Puas</option>
                     <option value="2">Cukup Puas</option>
                     <option value="1">Tidak Puas</option>
                   </select></td>
                 </tr>
                 <tr>
                  <td width="80%">Kualitas Prodi dalam menyiapkan karir professional</td>
                  <td width="20%"><select name="q7a5" class="form-control">
                   <option value="4">Sangat Puas</option>
                   <option value="3">Puas</option>
                   <option value="2">Cukup Puas</option>
                   <option value="1">Tidak Puas</option>
                 </select></td>
               </tr>
               <tr>
                <td width="80%">Relevansi Kurikulum Prodi dalam pengembangan personal</td>
                <td width="20%"><select name="q7a6" class="form-control">
                 <option value="4">Sangat Puas</option>
                 <option value="3">Puas</option>
                 <option value="2">Cukup Puas</option>
                 <option value="1">Tidak Puas</option>
               </select></td>
             </tr>
             <tr>
              <td width="80%">Relevansi Kurikulum Prodi dalam pengembangan akademik</td>
              <td width="20%"><select name="q7a7" class="form-control">
               <option value="4">Sangat Puas</option>
               <option value="3">Puas</option>
               <option value="2">Cukup Puas</option>
               <option value="1">Tidak Puas</option>
             </select></td>
           </tr>
           <tr>
            <td width="80%">Relevansi Kurikulum Prodi dalam pengembangan professional</td>
            <td width="20%"><select name="q7a8" class="form-control">
             <option value="4">Sangat Puas</option>
             <option value="3">Puas</option>
             <option value="2">Cukup Puas</option>
             <option value="1">Tidak Puas</option>
           </select></td>
         </tr>
         <tr>
          <td width="80%">Relevansi Kurikulum Prodi dengan bidang pekerjaan</td>
          <td width="20%"><select name="q7a9" class="form-control">
           <option value="4">Sangat Puas</option>
           <option value="3">Puas</option>
           <option value="2">Cukup Puas</option>
           <option value="1">Tidak Puas</option>
         </select></td>
       </tr>
       <tr>
        <td width="80%">Kualitas jejaring yang dibangun Program Studi</td>
        <td width="20%"><select name="q7a10" class="form-control">
         <option value="4">Sangat Puas</option>
         <option value="3">Puas</option>
         <option value="2">Cukup Puas</option>
         <option value="1">Tidak Puas</option>
       </select></td>
     </tr>
     <tr>
      <td width="80%">Kontribusi Alumni dalam kegiatan akademik Program Studi</td>
      <td width="20%"><select name="q7a11" class="form-control">
       <option value="4">Sangat Puas</option>
       <option value="3">Puas</option>
       <option value="2">Cukup Puas</option>
       <option value="1">Tidak Puas</option>
     </select></td>
   </tr>
   <tr>
    <td width="80%">Kontribusi Alumni dalam kegiatan non-akademik Program Studi</td>
    <td width="20%"><select name="q7a12" class="form-control">
     <option value="4">Sangat Puas</option>
     <option value="3">Puas</option>
     <option value="2">Cukup Puas</option>
     <option value="1">Tidak Puas</option>
   </select></td>
 </tr>
 <tr>
  <td width="80%">Pekerjaan anda saat ini</td>
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
  <td width="80%">Kejelasan kelengkapan informasi persyaratan untuk memperoleh layanan akademik dan non-akademik</td>
  <td width="20%"><select name="q7b1" class="form-control">
   <option value="4">Sangat Puas</option>
   <option value="3">Puas</option>
   <option value="2">Cukup Puas</option>
   <option value="1">Tidak Puas</option>
 </select></td>
</tr>
<tr>
  <td width="80%">Prosedur pemberian layanan akademik dan non-akademik</td>
  <td width="20%"><select name="q7b2" class="form-control">
   <option value="4">Sangat Puas</option>
   <option value="3">Puas</option>
   <option value="2">Cukup Puas</option>
   <option value="1">Tidak Puas</option>
 </select></td>
</tr>
<tr>
  <td width="80%">Waktu pemberian layanan akademik dan non-akademik</td>
  <td width="20%"><select name="q7b3" class="form-control">
   <option value="4">Sangat Puas</option>
   <option value="3">Puas</option>
   <option value="2">Cukup Puas</option>
   <option value="1">Tidak Puas</option>
 </select></td>
</tr>
<tr>
  <td width="80%">Biaya pemberian layanan akademik dan non-akademik</td>
  <td width="20%"><select name="q7b4" class="form-control">
   <option value="4">Sangat Puas</option>
   <option value="3">Puas</option>
   <option value="2">Cukup Puas</option>
   <option value="1">Tidak Puas</option>
 </select></td>
</tr>
<tr>
  <td width="80%">Produk layanan akademik dan non-akademik</td>
  <td width="20%"><select name="q7b5" class="form-control">
   <option value="4">Sangat Puas</option>
   <option value="3">Puas</option>
   <option value="2">Cukup Puas</option>
   <option value="1">Tidak Puas</option>
 </select></td>
</tr>
<tr>
  <td width="80%">Kompetensi pelaksana layanan akademik dan non-akademik</td>
  <td width="20%"><select name="q7b6" class="form-control">
   <option value="4">Sangat Puas</option>
   <option value="3">Puas</option>
   <option value="2">Cukup Puas</option>
   <option value="1">Tidak Puas</option>
 </select></td>
</tr>
<tr>
  <td width="80%">Perilaku pelaksana layanan akademik dan non-akademik</td>
  <td width="20%"><select name="q7b7" class="form-control">
   <option value="4">Sangat Puas</option>
   <option value="3">Puas</option>
   <option value="2">Cukup Puas</option>
   <option value="1">Tidak Puas</option>
 </select></td>
</tr>
<tr>
  <td width="80%">Penanganan pengaduan terkait pelaksanaan layanan akademik dan non-akademik</td>
  <td width="20%"><select name="q7b8" class="form-control">
   <option value="4">Sangat Puas</option>
   <option value="3">Puas</option>
   <option value="2">Cukup Puas</option>
   <option value="1">Tidak Puas</option>
 </select></td>
</tr>
<tr>
  <td width="80%">Kualitas layanan akademik dan non-akademik</td>
  <td width="20%"><select name="q7b9" class="form-control">
   <option value="4">Sangat Puas</option>
   <option value="3">Puas</option>
   <option value="2">Cukup Puas</option>
   <option value="1">Tidak Puas</option>
 </select></td>
</tr>
<tr>
  <td width="80%">Kualitas layanan tenaga kependidikan</td>
  <td width="20%"><select name="q7b10" class="form-control">
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
        <h6 class="m-0">Tuliskan Pengalaman apa yang paling bermanfaat selama masa studi, untuk membantu dalam pekerjaan pasca Ibu/Bapak lulus? </h6>
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
        <h6 class="m-0">Tuliskan Pengalaman apa yang paling tidak bermanfaat selama masa studi,dalam pekerjaan pasca Ibu/Bapak lulus?</h6>
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

  $("input[name='q6']").on("change", function(e) {
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
      $(selector+" :input").not(':button, :submit, :reset, :hidden').val('').prop('checked', false).prop('selected', false).trigger('change');
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