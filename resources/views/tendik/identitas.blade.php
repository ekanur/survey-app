@extends('layouts.app')

@section('content') 
<div align="center">
  <div class="col-lg-8 text-sm-left">
    <div class="card card-small mb-4" >
      <div class="card-header border-bottom">
        <h6 class="m-0">Identitas Tenaga Kependidikan</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-3">
          <div class="row">
            <div class="col">
              <form method="POST" action="{{ url("biodata-tendik") }}">
               {{ csrf_field() }}
               <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}" required=""> </div>
                  <div class="form-group col-md-6">
                    <label for="prodijurusan">Inisial</label>
                    <input type="text" class="form-control" id="inisial" name="inisial" placeholder="Inisial Anda" required=""></div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="unitkerja">Unit Kerja</label>
                        <input type="text" class="form-control" name="unitkerja" id="unitkerja" value="{{old('unitkerja')}}" required="">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="tmt">TMT</label>
                        <input type="date" class="form-control" name="tmt" id="tmt" value="{{old('tmt')}}" required=""> </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="jeniskelamin">Jenis Kelamin</label>
                          <select id="jeniskelamin" name="jeniskelamin" class="form-control" required="">
                            <option selected></option>
                            <option value="laki_laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="usia">Usia</label>
                          <select id="usia" name="usia" class="form-control" required="">
                            <option selected></option>
                            <option value="<30">Kurang dari 30</option>
                            <option value="31-40">31 - 40</option>
                            <option value="41-50">41 - 50</option>
                            <option value="51-60">51 - 60</option>
                            <option value=">60">Lebih dari 60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="pendidikan">Pendidikan Tertinggi</label>
                          <select id="pendidikan" name="pendidikan" class="form-control" required="">
                            <option selected></option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="Diploma">Diploma</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="lamakerja">Lama Bekerja</label>
                          <input type="number" min="1" class="form-control" id="lamakerja "name="lamakerja" required=""> </div>
                        </div>
                          <button type="submit" class="btn btn-accent">Mulai Isi Angket</button>
                        </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

            @endsection