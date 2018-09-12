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
                        <div class="col-sm-12">
                          <form method="POST">
                          	{{ csrf_field() }}
                            <div class="form-row">
                              <div class="form-group col-md-12 text-sm-left">
                                <label for="checkboxd2">Darimana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan tempat Ibu/Bapak bekerja?</label>
                                <fieldset>
                                <div class="custom-control custom-checkbox mb-1">
                              <input type="checkbox" class="custom-control-input" id="checkboxd2" value="a">
                              <label class="custom-control-label" for="checkboxd2">Rapat Jurusan</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                              <input type="checkbox" class="custom-control-input" id="checkboxd2" value="b">
                              <label class="custom-control-label" for="checkboxd2">Katalog dan/atau dokumen Jurusan lainnya</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                              <input type="checkbox" class="custom-control-input" id="checkboxd2" value="c">
                              <label class="custom-control-label" for="checkboxd2">Membaca banner</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                              <input type="checkbox" class="custom-control-input" id="checkboxd2" value="d">
                              <label class="custom-control-label" for="checkboxd2">Kegiatan kemahasiswaan</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                              <input type="checkbox" class="custom-control-input" id="checkboxd2" value="e">
                              <label class="custom-control-label" for="checkboxd2">Laman UM</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                              <input type="checkbox" class="custom-control-input" id="checkboxd2" value="f">
                              <label class="custom-control-label" for="checkboxd2">Lain-lain</label>
                            </div>
                               </fieldset>
										<button type="submit" class="btn btn-accent">Selanjutnya</button>
                  </div>
                </div>
							</form>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>

@endsection