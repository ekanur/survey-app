@extends('layouts.app')

@section('content') 
<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Identitas Mahasiswa</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <form method="POST" action="{{ url("biodata-mahasiswa") }}">
               {{ csrf_field() }}
               <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}" required=""> </div>
                  <div class="form-group col-md-6">
                          <label for="jeniskelamin">Jenis Kelamin</label>
                          <select id="jeniskelamin" name="jeniskelamin" class="form-control" required="">
                            <option selected></option>
                            <option value="laki_laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                          </select>
                        </div>
                  </div>
                  <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="jalurmasuk">Jalur Masuk</label>
                          <input type="jalurmasuk" class="form-control" id="jalurmasuk" placeholder="SNMPTN/SBMPTN/Mandiri/lain-lain" name="jalurmasuk" value="{{old('jalurmasuk')}}" required="">
                        </div>
                         <div class="form-group col-md-6">
                          <label for="tahunmasuk">Tahun Masuk</label>
                          <input type="number" min="2010" class="form-control" id="tahunmasuk" name="tahunmasuk" value="{{old('tahunmasuk')}}" required=""> 
                        </div>
                        </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
                          <select id="jenjang_pendidikan" name="jenjang_pendidikan" class="form-control" required="">
                            <option selected></option>
                            <option value="diploma">Diploma</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="pendornon">Program Studi</label>
                            <select id="pendornon" name="pendornon" class="form-control" required="">
                              <option selected></option>
                              <option value="pendidikan">Pendidikan</option>
                              <option value="nonpendidikan">Non-Kependidikan</option>
                            </select>
                      </div>
                      </div>
                        
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="prodi">Nama Prodi</label>
                            <input type="text" name="prodi" class="form-control" id="prodi" value="{{old('prodi')}}"  required="">
                         </div>
                          <div class="form-group col-md-6">
                            <label for="jenispend">Jenis Pendidikan</label>
                           <select id="jenispend" name="jenispend" class="form-control" required="">
                              <option selected></option>
                              <option value="akademik">Akademik</option>
                              <option value="pendidikan">Profesi</option>
                              <option value="nonpendidikan">Vokasi</option>
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