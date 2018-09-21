@extends('layouts.app')

@section('content') 
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">SI Survei Kepuasan</span>
    <h3 class="page-title">Rekapitulasi Angket Tenaga Kependidikan</h3>
  </div>
</div>
<!-- End Page Header -->

<div class="row">
	{{-- PERTANYAAN 1 & 4 --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Visi, Misi, Tujuan & Sasaran Universitas</h6>
			</div>
			<div class="card-body p-0 pb-3 text-center">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Universitas Negeri Malang?</span>
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
								@php
							$key = array_keys($list_pemahaman_vmts);
							$i=0;
						@endphp
						@foreach($list_pemahaman_vmts as $pemahaman_vmts)
						<tr>
							<th>{{ ucfirst($key[$i++]) }}</th>
							<td>
								{{ number_format((($pemahaman_vmts['Ya']/max($pemahaman_vmts["Responden"], 1))*100), 1) }}
							</td>
							<td>
								{{ number_format((($pemahaman_vmts['Tidak']/max($pemahaman_vmts["Responden"], 1))*100), 1) }}
							</td>
						</tr>
						@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						@component("chart.column")
							{{-- @slot("judul") Visi, Misi, Tujuan & Sasaran Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_vmts @endslot
							@slot("id_tabel") datatable1 @endslot
							@slot("judul_chart") Persentase Pemahaman VMTS@endslot
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
				<h6 class="m-0">Rumusan VMTS Unit Kerja</h6>
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
							{{-- @slot("judul") Rumusan VMTS Unit Kerja @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_rumusan @endslot
							@slot("id_tabel") datatable2 @endslot
							@slot("judul_chart") Persentase Rumusan VMTS Unit Kerja @endslot
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
				<h6 class="m-0">Kinerja Unit Kerja</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Bagaimana menurut Ibu/Bapak, kinerja unit kerja dalam mencapai visi dan sasarannya?</span>
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
							{{-- @slot("judul") Kinerja Unit Kerja @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kinerja_unit @endslot
							@slot("id_tabel") datatable3 @endslot
							@slot("judul_chart") Persentase Kinerja Universitas @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q3['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
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
				<h6 class="m-0">Rumusan VMTS Universitas</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-5">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Dari mana Ibu/Bapak mengetahui rumusan tersebut?</span>
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
							{{-- @slot("judul") Rumusan VMTS Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_rumusan @endslot
							@slot("id_tabel") datatable5 @endslot
							@slot("judul_chart") Persentase Rumusan VMTS Universitas @endslot
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
				<h6 class="m-0">Kinerja Universitas</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Bagaimana menurut Ibu/Bapak, kinerja Universitas dalam mencapai visi dan sasarannya?</span>
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
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						@component("chart.pie_legend")
							{{-- @slot("judul") Kinerja Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kinerja_universitas @endslot
							@slot("id_tabel") datatable6 @endslot
							@slot("judul_chart") Persentase Kinerja Universitas @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q6['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>


	{{-- PERTANYAAN 7H, I, J, K, L, M, N, O, P --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Kepuasan Layanan</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Persyaratan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7h">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7h['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7h['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kejelasan dan Kelengkapan Informasi Persyaratan untuk Memperoleh Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kejelasan_kelengkapan_info @endslot
							@slot("id_tabel") datatable7h @endslot
							@slot("judul_chart") Persentase Kepuasan Kejelasan dan Kelengkapan Informasi Persyaratan untuk Memperoleh Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7h['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Prosedur</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7i">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7i['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7i['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Prosedur Pemberian Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_prosedur_pemberian_layanan @endslot
							@slot("id_tabel") datatable7i @endslot
							@slot("judul_chart") Persentase Kepuasan Prosedur Pemberian Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7i['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Waktu</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7j">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7j['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7j['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Waktu Pemberian Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_waktu_pemberian_layanan @endslot
							@slot("id_tabel") datatable7j @endslot
							@slot("judul_chart") Persentase Kepuasan Waktu Pemberian Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7j['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Biaya</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7k">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7k['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7k['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Biaya Pemberian Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_biaya_pemberian_layanan @endslot
							@slot("id_tabel") datatable7k @endslot
							@slot("judul_chart") Persentase Kepuasan Biaya Pemberian Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7k['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>				

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Produk</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7l">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7l['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7l['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Produk Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_produk_layanan @endslot
							@slot("id_tabel") datatable7l @endslot
							@slot("judul_chart") Persentase Kepuasan Produk Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7l['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Kompetensi Pelaksana</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7m">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7m['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7m['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kompetensi Pelaksana Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kompetensi_pelaksana_layanan @endslot
							@slot("id_tabel") datatable7m @endslot
							@slot("judul_chart") Persentase Kepuasan Kompetensi Pelaksana Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7m['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Perilaku Pelaksana</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7n">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7n['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7n['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Perilaku Pelaksana Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_perilaku_pelaksana_layanan @endslot
							@slot("id_tabel") datatable7n @endslot
							@slot("judul_chart") Persentase Kepuasan Perilaku Pelaksana Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7n['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penanganan Pengaduan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7o">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7o['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7o['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Penanganan Pengaduan Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_penanganan_pengaduan @endslot
							@slot("id_tabel") datatable7o @endslot
							@slot("judul_chart") Persentase Kepuasan Penanganan Pengaduan Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7o['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Kualitas Layanan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7p">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7p['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7p['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas Layanan Akademik dan non Akademik @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kualitas_layanan @endslot
							@slot("id_tabel") datatable7p @endslot
							@slot("judul_chart") Persentase Kepuasan Kualitas Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7p['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>	
				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 5B, C --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Visi, Misi, Tujuan & Sasaran </h6>
			</div>
			<div class="card-body p-0 pb-3 text-center">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Rumusan VMTS Unit Kerja</span>
						</div>
						<table class="table mb-0" id="datatable7b">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7b['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7b['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						@component("chart.pie_legend")
							{{-- @slot("judul") Rumusan VMTS Unit Kerja @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_vmts_unit @endslot
							@slot("id_tabel") datatable7b @endslot
							@slot("judul_chart") Persentase Kepuasan Rumusan VMTS Unit Kerja @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7b['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Rumusan VMTS Universitas</span>
						</div>
						<table class="table mb-0" id="datatable7b">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7c['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7c['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						@component("chart.pie_legend")
							{{-- @slot("judul") Rumusan VMTS Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_vmts_universitas @endslot
							@slot("id_tabel") datatable7c @endslot
							@slot("judul_chart") Persentase Kepuasan Rumusan VMTS Universitas @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7c['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>

{{-- PERTANYAAN 7A, D, E, F, R, S --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Sumber Daya Manusia</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penerimaan Tendik</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7a">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7a['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7a['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas dan Transparansi Proses Penerimaan Tenaga Kependidikan @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kualitas_penerimaan @endslot
							@slot("id_tabel") datatable7a @endslot
							@slot("judul_chart") Persentase Kepuasan Kualitas dan Transparansi Proses Penerimaan Tenaga Kependidikan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7a['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Relevansi Keahlian</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7d">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7d['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7d['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Relevansi Keahlian dengan Unit Kerja @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_relevansi_keahlian @endslot
							@slot("id_tabel") datatable7d @endslot
							@slot("judul_chart") Persentase Kepuasan Relevansi Keahlian dengan Unit Kerja @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7d['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Deskripsi Tugas dan Fungsi</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7e">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7e['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7e['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Deskripsi Tugas dan Fungsi di Unit Kerja @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_deskripsi_tusi @endslot
							@slot("id_tabel") datatable7e @endslot
							@slot("judul_chart") Persentase Kepuasan Deskripsi Tugas dan Fungsi di Unit Kerja @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7e['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Beban Pekerjaan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7f">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7f['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7f['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Beban Pekerjaan @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kepuasan_beban_kerja @endslot
							@slot("id_tabel") datatable7f @endslot
							@slot("judul_chart") Persentase Kepuasan Biaya Pemberian Layanan Akademik dan non Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7f['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>				

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Koordinasi dalam Unit Kerja</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7r">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7r['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7r['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Koordinasi di Dalam Unit Kerja @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_koordinasi_kerja @endslot
							@slot("id_tabel") datatable7r @endslot
							@slot("judul_chart") Persentase Kepuasan Koordinasi di Dalam Unit Kerja @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7r['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Koordinasi antar Unit Kerja di Universitas</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7s">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7s['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7s['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Koordinasi Antar Unit Kerja di Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_koordinasi_antar_unit @endslot
							@slot("id_tabel") datatable7s @endslot
							@slot("judul_chart") Persentase Kepuasan Koordinasi Antar Unit Kerja di Universitas @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7s['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>	
				</div>
			</div>
		</div>
	</div>

{{-- PERTANYAAN 7G, Q, T, U, V--}}
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
						<table class="table mb-0 d-none" id="datatable7g">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7g['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7g['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas Sarana dan Prasarana @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kualitas_sarpras @endslot
							@slot("id_tabel") datatable7g @endslot
							@slot("judul_chart") Persentase Kepuasan Kualitas Sarana dan Prasarana @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7g['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Pengembangan Profesi</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7q">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7q['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7q['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas Dukungan untuk Pengembangan Profesi @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_pengembangan_profesi @endslot
							@slot("id_tabel") datatable7q @endslot
							@slot("judul_chart") Persentase Kepuasan Kualitas Dukungan untuk Pengembangan Profesi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7q['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Lingkungan Kerja</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7t">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7t['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7t['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Kualitas, Keamanan, Kenyamanan Lingkungan Kerja @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_lingkungan_kerja @endslot
							@slot("id_tabel") datatable7t @endslot
							@slot("judul_chart") Persentase Kepuasan Kualitas, Keamanan, Kenyamanan Lingkungan Kerja @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7t['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Keselamatan dan Keamanan Kerja</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7u">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7u['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7u['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Keselamatan Lingkungan dan Keamanan Kerja @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_keselamatan_keamanan @endslot
							@slot("id_tabel") datatable7u @endslot
							@slot("judul_chart") Persentase Kepuasan Keselamatan Lingkungan dan Keamanan Kerja @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7u['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>				

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Gaji dan Tunjangan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable7v">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q7v['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q7v['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Gaji dan Tunjangan @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_gaji_tunjangan @endslot
							@slot("id_tabel") datatable7v @endslot
							@slot("judul_chart") Persentase Kepuasan Gaji dan Tunjangan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q7v['total_responden'] }} orang @endslot
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
