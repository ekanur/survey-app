@extends('layouts.app')

@section('content') 


<div align="center">
            <div class="col-lg-8 text-sm-left">
                <div class="card card-small mb-4" >
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Angket Dosen</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <Label>Tuliskan saran dan rekomendasi Ibu/Bapak kepada pihak terkait</Label>
                          
                            <form class="add-new-post">
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
                          <button type="submit" class="btn btn-accent">Simpan</button>
                            </form>
                          </div>
                      </div>
                    </li>
                  </ul>
                  </div>
                </div>
              </div>


@endsection