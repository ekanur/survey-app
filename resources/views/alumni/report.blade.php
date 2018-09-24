@extends('layouts.app_admin')

@section('content')  
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
	<div class="col-12 text-center text-sm-left mb-0">
		<span class="text-uppercase page-subtitle">SI Survei Kepuasan</span>
		<h3 class="page-title">Rekapitulasi Angket Alumni</h3>
	</div>
</div>
<!-- End Page Header -->

<div class="row">
	{{-- PERTANYAAN 1 --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Visi, Misi, Tujuan & Sasaran Prodi</h6>
			</div>
			<div class="card-body p-0 pb-3 text-center">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Program Studi ketika Ibu/Bapak masih kuliah?</span>
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
						{{-- @slot("judul") Visi, Misi, Tujuan & Sasaran Universitas @endslot --}}
						@slot("use_panel") no @endslot
						@slot("id_chart") persentase_vmts @endslot
						@slot("id_tabel") datatable1 @endslot
						@slot("judul_chart") Persentase Pemahaman VMTS Universitas @endslot
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
				<h6 class="m-0">Rumusan VMTS Prodi</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-5">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Dari mana Ibu/Bapak mengetahui rumusan tersebut?</span>
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
									{{-- 	{{ number_format((($jumlah / max($list_q2['total_responden'], 1)) * 100), 1) }} --}}
										{{ number_format((($jumlah / max($list_q2['total_pilihan'], 1)) * 100), 1) }}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-7">
						@component("chart.pie_legend")
						{{-- @slot("judul") Rumusan VMTS Universitas @endslot --}}
						@slot("use_panel") no @endslot
						@slot("id_chart") persentase_rumusan @endslot
						@slot("id_tabel") datatable2 @endslot
						@slot("judul_chart") Persentase Rumusan VMTS Universitas @endslot
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
				<h6 class="m-0">Kinerja Program Studi/Jurusan</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Bagaimana menurut Ibu/Bapak, kinerja Program Studi/Jurusan dalam mencapai visi, misi, tujuan dan sasaranya </span>
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
							{{-- @slot("judul") Kinerja Program Studi/Jurusan @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kinerja_prodi @endslot
							@slot("id_tabel") datatable3 @endslot
							@slot("judul_chart") Persentase Kinerja Program Studi/Jurusan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q3['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>
		{{-- PERTANYAAN 4 --}}
		<div class="col-md-12 col-sm-12 mb-4">
			<div class="card card-small mb-4">
				<div class="card-header border-bottom">
					<h6 class="m-0">Relevansi Program Studi dengan Pekerjaan</h6>
				</div>
				<div class="card-body p-0 pb-3 text-center">
					<div class="row">
						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Apakah pekerjaan Ibu/Bapak relevan dengan Program Studi/Jurusan yang ditempuh di Universitas Negeri Malang ?</span>
							</div>
							<table class="table mb-0" id="datatable4">
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
											{{ number_format((($list_q4['jumlah_ya'] / max($list_q4['total_responden'], 1)) * 100), 1) }}
										</td>
										<td>
											{{ number_format((($list_q4['jumlah_tidak'] / max($list_q4['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-6">
							@component("chart.column")
							{{-- @slot("judul") Relevansi Prodi dan Pekerjaan @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_vmts_2 @endslot
							@slot("id_tabel") datatable4 @endslot
							@slot("judul_chart") Persentase Relevansi Program Studi/Jurusan dengan Pekerjaan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@slot("tipe_value") percent @endslot
							@endcomponent
						</div>
					</div>
				</div>
			</div>
		</div>


		{{-- PERTANYAAN 5 --}}
		<div class="col-md-12 col-sm-12 mb-4">
			<div class="card card-small mb-4">
				<div class="card-header border-bottom">
					<h6 class="m-0">Status Karir</h6>
				</div>
				<div class="card-body p-0 pb-3">
					<div class="row">
						<div class="col-md-5">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Dari pilihan berikut ini mana yang menjelaskan status karir Ibu/Bapak ?</span>
							</div>
							<table class="table mb-0" id="datatable5">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Pilihan</th>
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q5['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $pertanyaan }}</td>
										<td class="text-right">
											{{ number_format((($jumlah / max($list_q5['total_responden'], 1)) * 100), 1) }}
											{{-- {{ number_format((($jumlah / max($list_q5['total_pilihan'], 1)) * 100), 1) }} --}}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="col-md-7">
							@component("chart.pie_legend")
							{{-- @slot("judul") Status Karir @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_q5 @endslot
							@slot("id_tabel") datatable5 @endslot
							@slot("judul_chart") Persentase Status Karir  @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q5['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>
					</div>
				</div>
			</div>
		</div>


		{{-- PERTANYAAN 6 --}}
		<div class="col-md-12 col-sm-12 mb-4">
			<div class="card card-small mb-4">
				<div class="card-header border-bottom">
					<h6 class="m-0">Status Pekerjaan</h6>
				</div>
				<!-- {{print_r($list_q6)}} -->
				<div class="card-body p-0 pb-3">
					<div class="row">
						<div class="col-md-5">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Dari pilihan berikut ini mana yang menjelaskan status pekerjaan Ibu/Bapak ?</span>
							</div>
							<table class="table mb-0" id="datatable6">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Pilihan</th>
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q6['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $pertanyaan }}</td>
										<td class="text-right">
											{{ number_format((($jumlah / max($list_q6['total_responden'], 1)) * 100), 1) }}
											{{-- {{ number_format((($jumlah / max($list_q6['total_pilihan'], 1)) * 100), 1) }} --}}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="col-md-7">
							@component("chart.pie_legend")
							{{-- @slot("judul") Status Pekerjaan @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_q6 @endslot
							@slot("id_tabel") datatable6 @endslot
							@slot("judul_chart") Persentase Status Pekerjaan  @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q6['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>
					</div>
				</div>
			</div>
		</div>


		{{-- PERTANYAAN 7b 1- 10 --}}
		<div class="col-md-12 col-sm-12 mb-4">
			<div class="card card-small mb-4">
				<div class="card-header border-bottom">
					<h6 class="m-0">Kepuasan Layanan</h6>
				</div>
					<div class="card-body p-0 pb-3">
					<div class="row">
						<div class="col-md-5">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek kejelasan kelengkapan informasi persyaratan untuk memperoleh layanan kelembagaan</span>
							</div>
							<table class="table mb-0" id="datatableq7b1">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7b1['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7b1['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
						</div>
						<div class="col-md-7">
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_q7b1 @endslot
							@slot("id_tabel") datatableq7b1 @endslot
							@slot("judul_chart") Persentase Kejelasan Kelengkapan Informasi Persyaratan untuk Memperoleh Layanan Kelembagaan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7b1['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>

						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek prosedur pemberian layanan</span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7b2">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7b2['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7b2['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_prosedur @endslot
							@slot("id_tabel") datatableq7b2 @endslot
							@slot("judul_chart") Persentase Prosedur Pemberian Layanan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7b2['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>



						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek waktu pemberian layanan</span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7b3">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7b3['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7b3['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_waktu @endslot
							@slot("id_tabel") datatableq7b3 @endslot
							@slot("judul_chart") Persentase Kepuasan Terhadap Waktu pemberian layanan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7b3['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>



						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Biaya</span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7b4">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7b4['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7b4['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_biaya @endslot
							@slot("id_tabel") datatableq7b4 @endslot
							@slot("judul_chart") Persentase Aspek Biaya @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7b4['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>	



						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Produk</span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7b5">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7b5['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7b5['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_produk @endslot
							@slot("id_tabel") datatableq7b5 @endslot
							@slot("judul_chart") Persentase Aspek Produk @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7b5['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>			

						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Kompetensi</span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7b6">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7b6['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7b6['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_Kompetensi @endslot
							@slot("id_tabel") datatableq7b6 @endslot
							@slot("judul_chart") Persentase Aspek kompetensi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7b6['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>			

						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Perilaku</span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7b7">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7b7['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7b7['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_perilaku @endslot
							@slot("id_tabel") datatableq7b7 @endslot
							@slot("judul_chart") Persentase Aspek Perilaku @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7b7['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>			

						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Pengaduan</span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7b8">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7b8['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7b8['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_pengaduan @endslot
							@slot("id_tabel") datatableq7b8 @endslot
							@slot("judul_chart") Persentase Aspek Pengaduan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7b8['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>			

						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Kualitas Layanan</span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7b9">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7b9['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7b9['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kualitas_layanan @endslot
							@slot("id_tabel") datatableq7b9 @endslot
							@slot("judul_chart") Persentase Aspek Kualitas Layanan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7b9['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>		
					</div>
				</div>
			</div>
		</div>
		<!-- akhir q7b1-10 -->



		{{-- PERTANYAAN 7a 1 --}}
		<div class="col-md-12 col-sm-12 mb-4">
			<div class="card card-small mb-4">
				<div class="card-header border-bottom">
					<h6 class="m-0">Visi, Misi, Tujuan, Sasaran</h6>
				</div>
				<div class="card-body p-0 pb-3">
					<div class="row">
						<div class="col-md-5">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk kualitas informasi dan profil Prodi</span>
							</div>
							<table class="table mb-0" id="datatableq7a1">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7a1['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a1['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
						</div>
						<div class="col-md-7">
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_q7a1 @endslot
							@slot("id_tabel") datatableq7a1 @endslot
							@slot("judul_chart") Persentase Kualitas Profil Prodi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a1['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>
					</div>
				</div>
			</div>
		</div>



		{{-- PERTANYAAN 7a 10 --}}
		<div class="col-md-12 col-sm-12 mb-4">
			<div class="card card-small mb-4">
				<div class="card-header border-bottom">
					<h6 class="m-0">Kerjasama</h6>
				</div>
				<div class="card-body p-0 pb-3">
					<div class="row">
						<div class="col-md-5">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk kualitas jejaring yang dibangun Prodi</span>
							</div>
							<table class="table mb-0" id="datatableq7a10">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7a10['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a10['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
						</div>
						<div class="col-md-7">
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_q7a10 @endslot
							@slot("id_tabel") datatableq7a10 @endslot
							@slot("judul_chart") Persentase kualitan Jejaring yang Dibangun Prodi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a10['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>

						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Kontribusi alumni dalam kegiatan Akademik Prodi</span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7a11">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7a11['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a11['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_akademik @endslot
							@slot("id_tabel") datatableq7a11 @endslot
							@slot("judul_chart") Persentase Aspek Kontribusi Alumni Dalam Kegiatan Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a11['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>			

						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Kontribusi alumni dalam kegiatan Non Akademik Prodi</span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7a12">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7a12['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a12['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_non_akademik @endslot
							@slot("id_tabel") datatableq7a12 @endslot
							@slot("judul_chart") Persentase Aspek Kontribusi Alumni Dalam Kegiatan Non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a12['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>			
					</div>
				</div>
			</div>
		</div>


					{{-- PERTANYAAN q7a2-9  --}}
		<div class="col-md-12 col-sm-12 mb-4">
			<div class="card card-small mb-4">
				<div class="card-header border-bottom">
					<h6 class="m-0">Pendidikan</h6>
				</div>

				<div class="card-body p-0 pb-3">
					<div class="row">
						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Kurikulum Prodi</span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7a2">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7a2['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a2['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_q7a2 @endslot
							@slot("id_tabel") datatableq7a2 @endslot
							@slot("judul_chart") Persentase Aspek Kurikulum Prodi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a2['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>


						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Kualitas Dosen Prodi </span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7a3">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7a3['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a3['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentaseq7a3 @endslot
							@slot("id_tabel") datatableq7a3 @endslot
							@slot("judul_chart") Persentase Aspek Kualitan Dosen Prodi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a3['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>

						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Kualitas pembimbingan tugas akhir/skripsi/tesis/disertasi </span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7a4">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7a4['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a4['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentaseq7a4 @endslot
							@slot("id_tabel") datatableq7a4 @endslot
							@slot("judul_chart") Persentase untuk Aspek Kualitas Pembimbing @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a4['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>

						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Kualitas Prodi Dalam Menyiapkan Karir Professional </span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7a5">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7a5['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a5['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentaseq7a5 @endslot
							@slot("id_tabel") datatableq7a5 @endslot
							@slot("judul_chart") Persentase Aspek Kualitas Prodi Dalam Menyiapkan Karir Professional  @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a5['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>	



						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Relevansi Kurikulum Prodi Dalam Pengembangan </span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7a6">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7a6['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a6['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentaseq7a6 @endslot
							@slot("id_tabel") datatableq7a6 @endslot
							@slot("judul_chart") Persentase Aspek Relevansi kurikulum Prodi Dalam Pengembangan  @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a6['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>			

						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Relevansi Kurikulum Prodi Dalam Pengembangan Akademik </span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7a7">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7a7['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a7['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentaseq7a7 @endslot
							@slot("id_tabel") datatableq7a7 @endslot
							@slot("judul_chart") Persentase Aspek Relevansi Kurikulum Prodi Dalam Pengembangan Akademik  @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a7['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>			

						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Relevansi kurikulum Prodi dalam pengembangan profesional </span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7a8">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7a8['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a8['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentaseq7a8 @endslot
							@slot("id_tabel") datatableq7a8 @endslot
							@slot("judul_chart") Persentase Aspek Relevansi kurikulum Prodi dalam pengembangan professional  @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a8['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>			

						<div class="col-md-6">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk aspek Relevansi kurikulum Prodi dengan bidang pekerjaan </span>
							</div>
							<table class="table mb-0 d-none" id="datatableq7a9">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7a9['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a9['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentaseq7a9 @endslot
							@slot("id_tabel") datatableq7a9 @endslot
							@slot("judul_chart") Persentase Aspek Relevansi kurikulum Prodi dengan bidang pekerjaan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a9['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>			
					</div>
				</div>
			</div>
		</div>
		<!-- akhir q7a2-9 - -->

				{{-- PERTANYAAN 7a 1 --}}
		<div class="col-md-12 col-sm-12 mb-4">
			<div class="card card-small mb-4">
				<div class="card-header border-bottom">
					<h6 class="m-0">Luaran</h6>
				</div>
				<div class="card-body p-0 pb-3">
					<div class="row">
						<div class="col-md-5">
							<div class="text-center p-3">
								<span class="text-info font-italic font-weight-bold" >Penilaian untuk Kepuasan Pekerjaan Saat ini</span>
							</div>
							<table class="table mb-0" id="datatableq7a13">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">Kategori</th>
										{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
										<th scope="col" class="border-0">Persentase (%)</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_q7a13['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a13['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>	
						</div>
						<div class="col-md-7">
							@component("chart.pie_legend")
							@slot("use_panel") no @endslot
							@slot("id_chart") persentaseq7a13 @endslot
							@slot("id_tabel") datatableq7a13 @endslot
							@slot("judul_chart") Persentase Kepuasan Pekerjaan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a13['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
							@endcomponent
						</div>
					</div>
				</div>
			</div>
		</div>



	</div> <!-- body -->
	@endsection

	@push("reportjs")
	<script type="text/javascript" src="{{ asset("/js/highchart/highcharts.js") }}"></script>
	<script type="text/javascript" src="{{ asset("/js/highchart/modules/data.js") }}"></script>
	<script type="text/javascript" src="{{ asset("/js/highchart/modules/exporting.js") }}"></script>
	<script type="text/javascript" src="{{ asset("/js/highchart/modules/export-data.js") }}"></script>
	@endpush