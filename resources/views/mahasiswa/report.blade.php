@extends('layouts.app_admin')

@section('content') 

<div class="page-header row no-gutters py-4">
  <div class="col-12 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">SI Survei Kepuasan</span>
    <h3 class="page-title">Rekapitulasi Angket Mahasiswa</h3>
  </div>
</div>

<div class="row">

	{{-- PERTANYAAN 1 --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Visi, Misi, Tujuan & Sasaran Program Studi</h6>
			</div>
			<div class="card-body p-0 pb-3 text-center">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Apakah Anda memahami rumusan visi, misi, tujuan, dan sasaran Program Studi?</span>
						</div>
						<table class="table mb-0" id="datatable1">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0"></th>
									<th scope="col" class="border-0">Ya</th>
									<th scope="col" class="border-0">Tidak</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Pilihan</th>
									<td>
										{{ number_format((($list_q1['jumlah_ya'] / max($list_q1['total_responden'], 1)) * 100), 1) }}
									</td>
									<td>
										{{ number_format((($list_q1['jumlah_tidak'] / max($list_q1['total_responden'], 1)) * 100), 1) }}
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						@component("chart.column")
							{{-- @slot("judul") Visi, Misi, Tujuan & Sasaran Program Studi @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_vmts @endslot
							@slot("id_tabel") datatable1 @endslot
							@slot("judul_chart") Persentase Pemahaman VMTS Program Studi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q1['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@slot("tipe_value") percent @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 2 --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Rumusan VMTS Program Studi</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-5">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Dari mana Anda mengetahui rumusan tersebut?</span>
						</div>
						<table class="table mb-0" id="datatable2">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q2['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $pertanyaan }}</td>
										<td class="text-right">
											{{ number_format((($jumlah / max($list_q2['total_responden'], 1)) * 100), 1) }}
											{{-- {{ number_format((($jumlah / max($list_q2['total_pilihan'], 1)) * 100), 1) }} --}}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-7">
						@component("chart.pie_legend")
							{{-- @slot("judul") Rumusan VMTS Prodi @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_rumusan @endslot
							@slot("id_tabel") datatable2 @endslot
							@slot("judul_chart") Persentase Rumusan VMTS Program Studi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q2['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>
	
	{{-- PERTANYAAN 3 --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Kinerja Program Studi</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Bagaimana menurut Ibu/Bapak, kinerja Jurusan / Program Studi dalam mencapai visi dan sasarannya?</span>
						</div>
						<table class="table mb-0" id="datatable3">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q3['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $pertanyaan }}</td>
										<td class="text-right">
											{{ number_format((($jumlah / max($list_q3['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						@component("chart.pie_legend")
							{{-- @slot("judul") Kinerja Jurusan / Prodi @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kinerja_prodi @endslot
							@slot("id_tabel") datatable3 @endslot
							@slot("judul_chart") Persentase Kinerja Jurusan / Prodi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q3['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Kepuasan Layanan</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Kejelasan Info Persyaratan Layanan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4b2">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4b2['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4b2['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
							@component("chart.pie_legend")
							{{-- @slot("judul") Kejelasan Info Persyaratan Layanan @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase__kejelasan_persyaratan @endslot
							@slot("id_tabel") datatable4b2 @endslot
							@slot("judul_chart") Persentase Kepuasan Kejelasan Info Persyaratan Layanan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4b2['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Prosedur</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4b3">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4b3['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4b3['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Prosedur Pemberian Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_prosedur_pemberian_layanan @endslot
							@slot("id_tabel") datatable4b3 @endslot
							@slot("judul_chart") Persentase Kepuasan Prosedur Pemberian Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4b3['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Waktu</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4b4">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4b4['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4b4['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Waktu Pemberian Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_waktu_pemberian_layanan @endslot
							@slot("id_tabel") datatable4b4 @endslot
							@slot("judul_chart") Persentase Kepuasan Waktu Pemberian Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4b4['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Biaya</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4b5">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4b5['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4b5['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Biaya Pemberian Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_biaya_pemberian_layanan @endslot
							@slot("id_tabel") datatable4b5 @endslot
							@slot("judul_chart") Persentase Kepuasan Biaya Pemberian Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4b5['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>				

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Produk</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4b6">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4b6['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4b6['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Produk Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_produk_layanan @endslot
							@slot("id_tabel") datatable4b6 @endslot
							@slot("judul_chart") Persentase Kepuasan Produk Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4b6['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Kompetensi Pelaksana</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4b7">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4b7['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4b7['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kompetensi Pelaksana Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kompetensi_pelaksana_layanan @endslot
							@slot("id_tabel") datatable4b7 @endslot
							@slot("judul_chart") Persentase Kepuasan Kompetensi Pelaksana Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4b7['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Perilaku Pelaksana</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4b8">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4b8['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4b8['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Perilaku Pelaksana Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_perilaku_pelaksana_layanan @endslot
							@slot("id_tabel") datatable4b8 @endslot
							@slot("judul_chart") Persentase Kepuasan Perilaku Pelaksana Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4b8['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penanganan Pengaduan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4b9">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4b9['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4b9['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Penanganan Pengaduan Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_penanganan_pengaduan @endslot
							@slot("id_tabel") datatable4b9 @endslot
							@slot("judul_chart") Persentase Kepuasan Penanganan Pengaduan Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4b9['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Kualitas Layanan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4b10">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4b10['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4b10['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kualitas_layanan @endslot
							@slot("id_tabel") datatable4b10 @endslot
							@slot("judul_chart") Persentase Kepuasan Kualitas Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4b10['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>

{{-- PERTANYAAN 4A1, A2 --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Kepuasan Profil Prodi</h6>
			</div>

			<div class="card-body p-0 pb-3 text-center">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Kualitas Informasi, Profil, dan Spesifikasi Prodi</span>
						</div>
						<table class="table mb-0" id="datatable4a1">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a1['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a1['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas Informasi, Profil, dan Spesifikasi Prodi @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_vmts_unit @endslot
							@slot("id_tabel") datatable4a1 @endslot
							@slot("judul_chart") Kualitas Informasi, Profil, dan Spesifikasi Prodi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a1['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Rumusan VMTS Prodi</span>
						</div>
						<table class="table mb-0" id="datatable4a2">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a2['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a2['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						@component("chart.pie_legend")
							{{-- @slot("judul") Rumusan VMTS Prodi @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_vmts_prodi @endslot
							@slot("id_tabel") datatable4a2 @endslot
							@slot("judul_chart") Persentase Kepuasan Rumusan VMTS Prodi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a2['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 4B1, A4, A5, A8, A9 --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Sumber Daya Manusia</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penerimaan Mahasiswa Baru</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4b1">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4b1['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4b1['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas Seleksi dan Informasi Penerimaan Mahasiswa Baru @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kualitas_penerimaan_maba @endslot
							@slot("id_tabel") datatable4b1 @endslot
							@slot("judul_chart") Persentase Kepuasan Kualitas Seleksi dan Informasi Penerimaan Mahasiswa Baru @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4b1['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Kualitas Dosen Prodi</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4a4">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a4['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a4['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas Dosen Prodi @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kualitas_dosen @endslot
							@slot("id_tabel") datatable4a4 @endslot
							@slot("judul_chart") Persentase Kepuasan Kualitas Dosen Prodi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a4['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Strategi Pengajaran dan Pembelajaran</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4a5">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a5['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a5['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Strategi Pengajaran dan Pembelajaran @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_pembelajaran @endslot
							@slot("id_tabel") datatable4a5 @endslot
							@slot("judul_chart") Persentase Kepuasan Deskripsi Tugas dan Fungsi di Unit Kerja @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a5['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Kualitas dan Transparansi Penilaian</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4a8">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a8['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a8['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas dan Transparansi Penilaian Hasil Belajar @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_penilaian_hasil_belajar @endslot
							@slot("id_tabel") datatable4a8 @endslot
							@slot("judul_chart") Persentase Kepuasan Kualitas dan Transparansi Penilaian Hasil Belajar @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a8['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>				

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Saran dan Masukan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4a9">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a9['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a9['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Saran dan Masukan @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_koordinasi_kerja @endslot
							@slot("id_tabel") datatable4a9 @endslot
							@slot("judul_chart") Persentase Kepuasan Saran dan Masukan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a9['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>	
				</div>
			</div>
		</div>
	</div>

{{-- PERTANYAAN 4A6, B11, B12 --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Keuangan, Sarana dan Prasarana</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Sarana dan Prasarana</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4a6">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a6['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a6['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas Sarana dan Prasarana @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kualitas_sarpras @endslot
							@slot("id_tabel") datatable4a6 @endslot
							@slot("judul_chart") Persentase Kepuasan Kualitas Sarana dan Prasarana @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a6['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Teknologi dan Informasi</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4b11">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4b11['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4b11['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas Dukungan untuk Teknologi dan Informasi @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_dukungan_tik @endslot
							@slot("id_tabel") datatable4b11 @endslot
							@slot("judul_chart") Persentase Kepuasan Kualitas Dukungan untuk Teknologi dan Informasi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4b11['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Aktivitas Ekstrakurikuler</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4a12">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a12['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a12['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas dan Dukungan Aktivitas Ekstrakurikuler @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_dukungan_ekskul @endslot
							@slot("id_tabel") datatable4a12 @endslot
							@slot("judul_chart") Persentase Kepuasan Kualitas dan Dukungan Aktivitas Ekstrakurikuler  @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a12['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 4A3, A7, A12, A13, A14, A15, A16 --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Pendidikan</h6>
			</div>

			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Kemutakhiran Kurikulum</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4a3">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a3['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a3['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kemutakhiran Kurikulum Program Studi @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kemutakhiran_prodi @endslot
							@slot("id_tabel") datatable4a3 @endslot
							@slot("judul_chart") Persentase Kemutakhiran Kurikulum Program Studi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a3['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Proses Belajar Mengajar</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4a7">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a7['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a7['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas Proses Belajar Mengajar di Prodi @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kualitas_pbm @endslot
							@slot("id_tabel") datatable4a7 @endslot
							@slot("judul_chart") Persentase Kualitas Proses Belajar Mengajar di Prodi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a7['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penyiapan Karir Profesional</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4a12">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a12['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a12['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas Prodi dalam Penyiapan Karir Profesional @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_penyiapan_karir @endslot
							@slot("id_tabel") datatable4a12 @endslot
							@slot("judul_chart") Persentase Kepuasan Kualitas Prodi dalam Penyiapan Karir Profesional @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a12['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Relevansi Kurikulum Prodi dalam Pengembangan Personal </span>
						</div>
						<table class="table mb-0 d-none" id="datatable4a13">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a13['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a13['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Relevansi Kurikulum Prodi dalam Pengembangan Personal @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_pengembangan_personal @endslot
							@slot("id_tabel") datatable4a13 @endslot
							@slot("judul_chart") Persentase Kepuasan Relevansi Kurikulum Prodi dalam Pengembangan Personal @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a13['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Relevansi Kurikulum Prodi dalam Pengembangan Akademik </span>
						</div>
						<table class="table mb-0 d-none" id="datatable4a14">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a14['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a14['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Relevansi Kurikulum Prodi dalam Pengembangan Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_pengembangan_akademik @endslot
							@slot("id_tabel") datatable4a14 @endslot
							@slot("judul_chart") Persentase Kepuasan Relevansi Kurikulum Prodi dalam Pengembangan Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a14['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Relevansi Kurikulum Prodi dalam Pengembangan Profesional </span>
						</div>
						<table class="table mb-0 d-none" id="datatable4a15">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a15['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a15['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Relevansi Kurikulum Prodi dalam Pengembangan Profesional @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_pengembangan_profesional @endslot
							@slot("id_tabel") datatable4a15 @endslot
							@slot("judul_chart") Persentase Kepuasan Relevansi Kurikulum Prodi dalam Pengembangan Profesional @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a15['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Relevansi Kurikulum Prodi dengan Perkembangan Dunia Kerja </span>
						</div>
						<table class="table mb-0 d-none" id="datatable4a16">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a16['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a16['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Relevansi Kurikulum Prodi dengan Perkembangan Dunia Kerja @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_perkembangan_dunia_kerja @endslot
							@slot("id_tabel") datatable4a16 @endslot
							@slot("judul_chart") Persentase Kepuasan Relevansi Kurikulum Prodi dengan Perkembangan Dunia Kerja @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a16['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 4A10 --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Penelitian</h6>
			</div>
			<div class="card-body p-0 pb-3 text-center">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Keterlibatan Mahasiswa dalam Penelitian Dosen</span>
						</div>
						<table class="table mb-0" id="datatable4a10">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a10['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a10['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						@component("chart.pie_legend")
							{{-- @slot("judul") Keterlibatan Mahasiswa dalam Penelitian Dosen @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_keterlibatan_penelitian @endslot
							@slot("id_tabel") datatable4a10 @endslot
							@slot("judul_chart") Persentase Keterlibatan Mahasiswa dalam Penelitian Dosen @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a10['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>
{{-- PERTANYAAN 4A11 --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Pengabdian kepada Masyarakat </h6>
			</div>
			<div class="card-body p-0 pb-3 text-center">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Keterlibatan Mahasiswa dalam Pengabdian kepada Masyarakat</span>
						</div>
						<table class="table mb-0" id="datatable4a11">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a11['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a11['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						@component("chart.pie_legend")
							{{-- @slot("judul") Keterlibatan Mahasiswa dalam Pengabdian kepada Masyarakat @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_pengabdian_masyarakat @endslot
							@slot("id_tabel") datatable4a11 @endslot
							@slot("judul_chart") Persentase Keterlibatan Mahasiswa dalam Pengabdian kepada Masyarakat @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a11['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@push("reportjs")
	<script type="text/javascript" src="{{ asset("/js/highchart/highcharts.js") }}"></script>
	<script type="text/javascript" src="{{ asset("/js/highchart/modules/data.js") }}"></script>
	<script type="text/javascript" src="{{ asset("/js/highchart/modules/exporting.js") }}"></script>
	<script type="text/javascript" src="{{ asset("/js/highchart/modules/export-data.js") }}"></script>
@endpush