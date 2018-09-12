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
                          <form method="POST">
                            {{ csrf_field() }}
                            <div class="form-row">
                              <div class="form-group col-md-12 text-sm-left">
                                <label for="pd6">Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Fakultas / Universitas tempat Ibu/Bapak bekerja?</label><br>
                                  <fieldset>
                                 <div class="custom-control custom-radio mb-1">
                              <input type="radio" id="formsRadioDefault" name="formsRadioDefault" class="custom-control-input">
                              <label class="custom-control-label" for="formsRadioDefault"> Sudah selaras dengan visi dan kinerja sudah maksimal</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                              <input type="radio" id="formsRadioDefault" name="formsRadioDefault" class="custom-control-input">
                              <label class="custom-control-label" for="formsRadioDefault"> Sudah selaras dengan visi, namun kinerja kurang maksimal</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                              <input type="radio" id="formsRadioDefault" name="formsRadioDefault" class="custom-control-input">
                              <label class="custom-control-label" for="formsRadioDefault"> Kurang selaras dengan visi, namun kinerja maksimal</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                              <input type="radio" id="formsRadioDefault" name="formsRadioDefault" class="custom-control-input">
                              <label class="custom-control-label" for="formsRadioDefault"> Kurang selaras dengan visi dan kinerja kurang maksimal</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                              <input type="radio" id="formsRadioDefault" name="formsRadioDefault" class="custom-control-input">
                              <label class="custom-control-label" for="formsRadioDefault"> Tidak tahu karena tidak mengetahui rumusan visi/misi jurusan</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                              <input type="radio" id="formsRadioDefault" name="formsRadioDefault" class="custom-control-input">
                              <label class="custom-control-label" for="formsRadioDefault"> Tidak tahu karena tidak pernah memperhatikan</label>
                            </div>
                                
                                 </fieldset>
                                </div>
                </div>
                <button type="submit" class="btn btn-accent">Selanjutnya</button>
              </form>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

@endsection