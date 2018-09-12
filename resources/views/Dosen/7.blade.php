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
                                <h6 for="pd7">Berikan penilaian Ibu/Bapak terhadap indikator berikut ini <br>(1 = Tidak Puas; 2 = Cukup Puas; 3 = Puas; 4 = Sangat Puas)</h6><br>
                                <table width="100%">
                                  <tbody>
                                    <tr>
                                      <td width="85%">Kualitas dan Transparansi proses penerimaan Dosen</td>
                                      <td width="15%"><select name="pd7a" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Rumusan Visi, Misi, Tujuan, dan Sasaran Prodi</td>
                                      <td width="15%"><select name="pd7b" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Rumusan Visi, Misi, Tujuan, dan Sasaran Fakultas</td>
                                      <td width="15%"><select name="pd7c" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Rumusan Visi, Misi, Tujuan, dan Sasaran Universitas</td>
                                      <td width="15%"><select name="pd7d" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Relevansi rumusan capaian pembelajaran dengan kebutuhan dunia kerja</td>
                                      <td width="15%"><select name="pd7e" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Beban Mengajar</td>
                                      <td width="15%"><select name="pd7f" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Ketersediaan sumber belajar untuk kegiatan pembelajaran</td>
                                      <td width="15%"><select name="pd7g" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Penjadwalan Kegiatan pembelajaran</td>
                                      <td width="15%"><select name="pd7h" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Kualitas sarana dan prasarana mengajar</td>
                                      <td width="15%"><select name="pd7i" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Dukungan akademik dan pendanaan</td>
                                      <td width="15%"><select name="pd7j" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Dukungan akademik pendanaan untuk diseminasi dan publikasi</td>
                                      <td width="15%"><select name="pd7k" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Ketersediaan fasilitas untuk melakukan penelitian</td>
                                      <td width="15%"><select name="pd7l" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Dukungan akademik dan pendanaan untuk pengabdian kepada masyarakat</td>
                                      <td width="15%"><select name="pd7m" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Ketersediaan fasilitas untuk melakukan pengabdian kepada masyarakat</td>
                                      <td width="15%"><select name="pd7n" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Kejelasan kelengkapan informasi persyaratan untuk memperoleh layanan akademik dan non-akademik</td>
                                      <td width="15%"><select name="pd7o" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Prosedur pemberian layanan akademik dan non-akademik</td>
                                      <td width="15%"><select name="pd7p" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Waktu pemberian layanan akademik dan non-akademik</td>
                                      <td width="15%"><select name="pd7q" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Biaya pemberian layanan akademik dan non-akademik</td>
                                      <td width="15%"><select name="pd7r" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Produk layanan akademik dan non-akademik</td>
                                      <td width="15%"><select name="pd7s" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Kompetensi pelaksana layanan akademik dan non-akademik</td>
                                      <td width="15%"><select name="pd7t" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Perilaku pelaksana layanan akademik dan non-akademik</td>
                                      <td width="15%"><select name="pd7u" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Penanganan pengaduan terkait pelaksanaan layanan akademik dan non-akademik</td>
                                      <td width="15%"><select name="pd7v" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Kualitas layanan akademik dan non-akademik</td>
                                      <td width="15%"><select name="pd7w" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Dukungan untuk pengembangan profesi</td>
                                      <td width="15%"><select name="pd7x" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Dukungan untuk kegiatan promosi dan dan retensi</td>
                                      <td width="15%"><select name="pd7y" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Kualitas, keamanan, dan kenyamanan lingkungan kerja</td>
                                      <td width="15%"><select name="pd7z" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Keselamatan lingkungan dan keamanan kerja</td>
                                      <td width="15%"><select name="pd7aa" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td width="85%">Gaji dan Tunjangan</td>
                                      <td width="15%"><select name="pd7bb" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                      </select></td>
                                    </tr>
                                  </tbody>
                                </table>
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