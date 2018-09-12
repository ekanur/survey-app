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
                                <label for="pd4">Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Fakultas/Universitas tempat Ibu/Bapak bekerja?</label>
                                 <fieldset>
                            <div class="custom-control custom-radio mb-1">
                              <input type="radio" id="formsRadioDefault" name="formsRadioDefault" class="custom-control-input">
                              <label class="custom-control-label" for="formsRadioDefault">Ya</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                              <input type="radio" id="formsRadioDefault" name="formsRadioDefault" class="custom-control-input">
                              <label class="custom-control-label" for="formsRadioDefault">Tidak</label>
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