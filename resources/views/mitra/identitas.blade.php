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
                  <label for="jabatanpengisi">Jabatan Pengisi</label>
                  <input type="text" class="form-control" id="jabatanpengisi" placeholder="Jabatan Pengisi" name="jabatanpengisi" value="{{old('jabatanpengisi')}}" required=""> 
                </div>
                <div class="form-group col-md-6">
                  <label for="namainstansi">Nama Instansi</label>
                  <input type="text" class="form-control" id="namainstansi" name="namainstansi"placeholder="Nama Instansi" required="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="jabatanpengisi">Nomor Telepon</label>
                  <input type="text" class="form-control" id="notelp" placeholder="Nomor Telepon" name="notelp" value="{{old('notelp')}}" required=""> 
                </div>
                <div class="form-group col-md-6">
                  <label for="tahunberdiri">Tahun Berdiri</label>
                  <select id="tahunberdiri" name="tahunberdiri" class="form-control" required="">
                    <option selected="" disabled="">Pilih Tahun</option>
                    @for ($i = date('Y'); $i > (date('Y') - 7); $i--)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="skalaoperasional">Skala Operasional</label>
                  <select id="skalaoperasional" name="skalaoperasional" class="form-control" required="">
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
                  <label for="tahunkerjasama">Tahun Kerjasama</label>
                  <select id="tahunkerjasama" name="tahunkerjasama" class="form-control" required="">
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