@extends('layouts.app')

@section('content') 
<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Identitas Pengguna</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <form method="POST" action="{{ url("biodata-pengguna") }}">
               {{ csrf_field() }}
               <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="jabatan_pengisi">Jabatan Pengisi</label>
                  <input type="text" class="form-control" id="jabatan_pengisi" placeholder="Jabatan Pengisi" name="jabatan_pengisi" value="{{old('jabatan_pengisi')}}" required=""> 
                </div>
                <div class="form-group col-md-6">
                  <label for="nama_instansi">Nama Instansi</label>
                  <input type="text" class="form-control" id="nama_instansi" name="nama_instansi"placeholder="Nama Instansi" required="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="tahun_berdiri">Tahun Berdiri</label>
                  <select id="tahun_berdiri" name="tahun_berdiri" class="form-control" required="">
                    <option selected="" disabled="">Pilih Tahun</option>
                    @for ($i = date('Y'); $i > (date('Y') - 7); $i--)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                  </select>
                </div>
                 <div class="form-group col-md-6">
                  <label for="skala_operasional">Skala Operasional</label>
                  <select id="skala_operasional" name="skala_operasional" class="form-control" required="">
                    <option selected="" disabled="">Pilih Skala</option>
                    <option value="Internasional">Internasional</option>
                    <option value="Nasional">Nasional</option>
                    <option value="Swasta">Swasta</option>
                    <option value="BUMN">BUMN</option>
                    <option value="Negeri">Negeri</option>
                    <option value="Milik Sendiri">Milik Sendiri</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="jumlah_pegawai">Jumlah pegawai</label>
                  <input type="number" min="1" class="form-control" id="jumlah_pegawai" placeholder="Jumlah Pegawai" name="jumlah_pegawai" value="{{old('jumlah_pegawai')}}" required=""> 
                </div>
                <div class="form-group col-md-6">
                  <label for="jumlah_um">Jumlah lulusan UM</label>
                  <input type="number" min="1" class="form-control" id="jumlah_um" placeholder="Jumlah Lulusan UM" name="jumlah_um" value="{{old('jumlah_um')}}" required=""> 
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}" required=""> </div>
                              </div>
              <button type="submit" class="btn btn-accent">Mulai Isi Angket</button>
            </form>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
</div>
@endsection