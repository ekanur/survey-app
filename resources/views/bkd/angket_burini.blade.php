@extends('layouts.app')

@section('content') 
<div class="text-center text-info p-2 mb-4">
  Instrumen ini ditujukan untuk menilai tingkat kepuasan Ibu/Bapak terhadap Sistem Informasi Beban Kinerja Dosen (BKD) Universitas Negeri Malang (UM). Untuk itu, kami mohon Ibu/Bapak memberikan cermatan dan amatan terhadap penggunaan Sistem Informasi Beban Kinerja Dosen (BKD) UM dengan menjawab pertanyaan yang tertera di angket. Kami ucapkan banyak terima kasih atas kerjasama dan partisipasi Ibu/Bapak.
</div>
<form method="POST" action="{{ url("/angket-bkd") }}">
  {{ csrf_field() }}

  <div align="center">
    <div class="col-lg-8 text-sm-left">
      <div class="card card-small mb-4" >
        <div class="card-header border-bottom">
          <h6 class="m-0">Saya dapat menggunakan sistem dan merubah data yang tersedia sesuai dengan kebutuhan pekerjaan</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q1" name="q1" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q1">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q1"  name="q1" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q1">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q1"  name="q1" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q1">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q1"  name="q1" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q1">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q1"  name="q1" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q1">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Saya dapat berinteraksi dengan sistem yang lain menggunakan sistem yang ada</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q2" name="q2" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q2">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q2"  name="q2" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q2">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q2"  name="q2" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q2">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q2"  name="q2" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q2">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q2"  name="q2" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q2">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Saya tidak perlu waktu lama mendapatkan informasi setelah mengakses sistem</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q3" name="q3" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q3">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q3"  name="q3" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q3">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q3"  name="q3" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q3">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q3"  name="q3" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q3">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q3"  name="q3" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q3">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Proses transaksi sistem tidak memerlukan waktu yang lama</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q4" name="q4" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q4">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q4"  name="q4" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q4">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q4"  name="q4" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q4">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q4"  name="q4" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q4">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q4"  name="q4" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q4">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem memberikan fasilitas perbaikan jika terjadi kegagalan sistem</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q5" name="q5" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q5">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q5"  name="q5" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q5">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q5"  name="q5" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q5">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q5"  name="q5" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q5">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q5"  name="q5" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q5">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Saya merasa nyaman dan mudah dalam menggunakan sistem</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q6" name="q6" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q6">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q6"  name="q6" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q6">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q6"  name="q6" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q6">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q6"  name="q6" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q6">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q6"  name="q6" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q6">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Saya dapat dengan mudah mengerti bahasa yang dimaksud oleh sistem</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q7" name="q7" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q7">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q7"  name="q7" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q7">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q7"  name="q7" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q7">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q7"  name="q7" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q7">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q7"  name="q7" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q7">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem mudah dipelajari dan digunakan karena memudahkan pekerjaan</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q8" name="q8" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q8">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q8"  name="q8" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q8">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q8"  name="q8" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q8">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q8"  name="q8" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q8">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q8"  name="q8" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q8">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem dapat melayani kebutuhan pengguna tanpa adanya masalah yang dapat mengganggu kenyamanan</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q9" name="q9" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q9">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q9"  name="q9" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q9">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q9"  name="q9" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q9">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q9"  name="q9" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q9">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q9"  name="q9" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q9">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem memberikan informasi dan formulir yang diperlukan untuk diunduh</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q10" name="q10" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q10">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q10"  name="q10" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q10">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q10"  name="q10" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q10">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q10"  name="q10" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q10">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q10"  name="q10" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q10">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem memberikan instruksi yang bermanfaat untuk melakukan tugas saya</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q11" name="q11" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q11">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q11"  name="q11" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q11">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q11"  name="q11" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q11">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q11"  name="q11" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q11">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q11"  name="q11" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q11">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem memberikan perlindungan data dari penyalahgunaan atau perubahan data</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q12" name="q12" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q12">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q12"  name="q12" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q12">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q12"  name="q12" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q12">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q12"  name="q12" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q12">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q12"  name="q12" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q12">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem terkoordinasi dengan baik</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q13" name="q13" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q13">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q13"  name="q13" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q13">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q13"  name="q13" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q13">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q13"  name="q13" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q13">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q13"  name="q13" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q13">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem memiliki konsistensi navigasi</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q14" name="q14" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q14">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q14"  name="q14" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q14">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q14"  name="q14" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q14">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q14"  name="q14" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q14">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q14"  name="q14" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q14">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Saya mendapat data yang lengkap sesuai kebutuhan pekerjaan</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q15" name="q15" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q15">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q15"  name="q15" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q15">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q15"  name="q15" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q15">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q15"  name="q15" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q15">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q15"  name="q15" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q15">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Informasi yang saya dapatkan sesuai dengan data yang sebenarnya </h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q16" name="q16" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q16">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q16"  name="q16" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q16">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q16"  name="q16" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q16">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q16"  name="q16" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q16">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q16"  name="q16" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q16">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Saya dapat mengandalkan data yang didapatkan dalam memenuhi kebutuhan informasi untuk bekerja</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q17" name="q17" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q17">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q17"  name="q17" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q17">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q17"  name="q17" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q17">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q17"  name="q17" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q17">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q17"  name="q17" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q17">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Data yang saya dapatkan adalah informasi yang terkini dan selalu diperbarui</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q18" name="q18" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q18">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q18"  name="q18" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q18">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q18"  name="q18" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q18">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q18"  name="q18" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q18">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q18"  name="q18" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q18">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Data yang saya dapatkan dapat saya gunakan di alat atau media lain</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q19" name="q19" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q19">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q19"  name="q19" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q19">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q19"  name="q19" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q19">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q19"  name="q19" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q19">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q19"  name="q19" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q19">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Informasi yang saya dapatkan dari sistem sangat bermanfaat</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q20" name="q20" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q20">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q20"  name="q20" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q20">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q20"  name="q20" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q20">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q20"  name="q20" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q20">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q20"  name="q20" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q20">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Informasi yang saya dapatkan dari sistem bebas dari kesalahan-kesalahan</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q21" name="q21" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q21">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q21"  name="q21" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q21">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q21"  name="q21" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q21">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q21"  name="q21" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q21">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q21"  name="q21" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q21">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Informasi yang dihasilkan tepat waktu sesuai dengan kebutuhan saya</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q22" name="q22" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q22">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q22"  name="q22" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q22">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q22"  name="q22" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q22">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q22"  name="q22" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q22">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q22"  name="q22" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q22">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Data yang saya dapatkan adalah informasi yang rinci dan ringkas</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q23" name="q23" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q23">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q23"  name="q23" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q23">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q23"  name="q23" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q23">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q23"  name="q23" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q23">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q23"  name="q23" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q23">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Informasi yang diberikan tersusun sesuai format yang telah ditentukan</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q24" name="q24" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q24">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q24"  name="q24" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q24">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q24"  name="q24" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q24">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q24"  name="q24" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q24">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q24"  name="q24" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q24">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Saya merasa aman dalam mengkses atau mengirim data melalui sistem</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q25" name="q25" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q25">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q25"  name="q25" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q25">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q25"  name="q25" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q25">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q25"  name="q25" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q25">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q25"  name="q25" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q25">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem memberikan beberapa masukan yang mungkin berguna bagi pekerjaan saya</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q26" name="q26" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q26">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q26"  name="q26" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q26">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q26"  name="q26" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q26">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q26"  name="q26" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q26">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q26"  name="q26" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q26">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem selalu dapat diakses dengan baik</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q27" name="q27" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q27">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q27"  name="q27" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q27">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q27"  name="q27" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q27">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q27"  name="q27" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q27">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q27"  name="q27" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q27">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem memberikan tanggapan sesuai dengan apa yang saya lakukan</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q28" name="q28" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q28">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q28"  name="q28" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q28">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q28"  name="q28" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q28">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q28"  name="q28" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q28">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q28"  name="q28" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q28">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem menyediakan layanan untuk merespon keluhan pengguna</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q29" name="q29" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q29">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q29"  name="q29" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q29">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q29"  name="q29" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q29">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q29"  name="q29" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q29">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q29"  name="q29" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q29">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Email atau pertanyaan selalu ditanggapi dengan baik</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q30" name="q30" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q30">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q30"  name="q30" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q30">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q30"  name="q30" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q30">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q30"  name="q30" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q30">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q30"  name="q30" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q30">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem menyediakan informasi petunjuk penggunaan  aplikasi </h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q31" name="q31" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q31">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q31"  name="q31" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q31">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q31"  name="q31" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q31">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q31"  name="q31" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q31">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q31"  name="q31" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q31">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Dalam sehari saya mengakses sistem</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q32" name="q32" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q32">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q32"  name="q32" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q32">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q32"  name="q32" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q32">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q32"  name="q32" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q32">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q32"  name="q32" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q32">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Frekuensi saya mengakses sistem sering</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q33" name="q33" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q33">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q33"  name="q33" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q33">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q33"  name="q33" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q33">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q33"  name="q33" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q33">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q33"  name="q33" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q33">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Saya puas dengan data dan informasi yang saya dapat</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q34" name="q34" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q34">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q34"  name="q34" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q34">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q34"  name="q34" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q34">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q34"  name="q34" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q34">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q34"  name="q34" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q34">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Saya puas dengan sistem yang ada</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q35" name="q35" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q35">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q35"  name="q35" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q35">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q35"  name="q35" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q35">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q35"  name="q35" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q35">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q35"  name="q35" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q35">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem membantu pekerjaan saya secara efisien</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q36" name="q36" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q36">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q36"  name="q36" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q36">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q36"  name="q36" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q36">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q36"  name="q36" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q36">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q36"  name="q36" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q36">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Kebutuhan atau tujuan saya dapat tercapai sesuai harapan atau target yang diinginkan</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q37" name="q37" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q37">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q37"  name="q37" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q37">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q37"  name="q37" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q37">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q37"  name="q37" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q37">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q37"  name="q37" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q37">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem dapat memenuhi aspirasi atau kebutuhan saya</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q38" name="q38" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q38">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q38"  name="q38" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q38">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q38"  name="q38" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q38">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q38"  name="q38" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q38">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q38"  name="q38" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q38">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Saya dapat menyelesaikan pekerjaan lebih cepat dengan menggunakan sistem</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q39" name="q39" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q39">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q39"  name="q39" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q39">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q39"  name="q39" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q39">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q39"  name="q39" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q39">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q39"  name="q39" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q39">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Kinerja saya lebih baik dengan menggunakan sistem</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q40" name="q40" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q40">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q40"  name="q40" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q40">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q40"  name="q40" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q40">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q40"  name="q40" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q40">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q40"  name="q40" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q40">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem dapat meningkatkan produktiftas kinerja saya</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q41" name="q41" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q41">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q41"  name="q41" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q41">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q41"  name="q41" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q41">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q41"  name="q41" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q41">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q41"  name="q41" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q41">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Saya dapat menyelesaikan pekerjaannya dalam waktu yang lebih cepat dan menghasilkan hasil yang tepat saat menggunakan sistem</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q42" name="q42" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q42">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q42"  name="q42" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q42">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q42"  name="q42" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q42">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q42"  name="q42" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q42">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q42"  name="q42" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q42">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Saya merasa lebih mudah dalam bekerja dengan menggunakan sistem</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q43" name="q43" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q43">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q43"  name="q43" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q43">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q43"  name="q43" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q43">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q43"  name="q43" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q43">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q43"  name="q43" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q43">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem sangat berguna dalam menyelesaikan pekerjaan dan kegiatan organisasi</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q44" name="q44" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q44">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q44"  name="q44" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q44">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q44"  name="q44" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q44">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q44"  name="q44" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q44">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q44"  name="q44" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q44">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem dapat mengurangi biaya terutama operasional organisasi</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q45" name="q45" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q45">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q45"  name="q45" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q45">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q45"  name="q45" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q45">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q45"  name="q45" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q45">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q45"  name="q45" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q45">Sangat Tidak Setuju</label>
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
          <h6 class="m-0">Sistem dapat memberikan manfaat kepada organsasi dalam pengambilan keputusan</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0 px-3 pt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-controls-stacked">
                  <div class="custom-control custom-radio mb-1">
                   <input required="" type="radio" id="radio1q46" name="q46" class="custom-control-input" value="SS">
                   <label class="custom-control-label" for="radio1q46">Sangat Setuju</label>
                 </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio2q46"  name="q46" class="custom-control-input" value="S">
                  <label class="custom-control-label" for="radio2q46">Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio3q46"  name="q46" class="custom-control-input" value="KS">
                  <label class="custom-control-label" for="radio3q46">Kurang Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio4q46"  name="q46" class="custom-control-input" value="TS">
                  <label class="custom-control-label" for="radio4q46">Tidak Setuju</label>
                </div>
                 <div class="custom-control custom-radio mb-1">
                  <input required="" type="radio" id="radio5q46"  name="q46" class="custom-control-input" value="STS">
                  <label class="custom-control-label" for="radio5q46">Sangat Tidak Setuju</label>
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
        <h6 class="m-0">Pastikan semua item sudah terisi semua dan klik simpan</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
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