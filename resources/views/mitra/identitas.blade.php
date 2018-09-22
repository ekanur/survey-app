@extends('layouts.app')

@section('content') 
<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Identitas Mitra</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <form method="POST" action="{{ url("biodata-mitra") }}">
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
                  <label for="no_telp">Nomor Telepon</label>
                  <input type="text" class="form-control" id="no_telp" placeholder="Nomor Telepon" name="no_telp" value="{{old('no_telp')}}" oninput="this.value = this.value.replace(/[^0-9. \/]/g, '').replace(/(\..*)\./g, '$1');" required=""> 
                </div>
                <div class="form-group col-md-6">
                  <label for="tahun_berdiri">Tahun Berdiri</label>
                  <select id="tahun_berdiri" name="tahun_berdiri" class="form-control" required="">
                    <option selected="" disabled="">Pilih Tahun</option>
                    @for ($i = date('Y'); $i > (date('Y') - 7); $i--)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                  </select>
                </div>
              </div>
              <div class="form-row">
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
                <div class="form-group col-md-6">
                  <label for="tahun_kerjasama">Tahun Kerjasama</label>
                  <select id="tahun_kerjasama" name="tahun_kerjasama" class="form-control" required="">
                    <option selected="" disabled="">Pilih Tahun</option>
                    @for ($i = date('Y'); $i > (date('Y') - 7); $i--)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                  </select>
                </div>
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