@extends('layouts.app_admin')

@section('content') 
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">SI Survei Kepuasan</span>
    <h3 class="page-title">Rekapitulasi Angket Dosen</h3>
  </div>
</div>
<!-- End Page Header -->

<div class="row">
	{{-- PERTANYAAN 1, 5, 7 --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Visi, Misi, Tujuan & Sasaran Prodi, Fakultas, dan Universitas</h6>
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
										{{ number_format((($pemahaman_vmts['ya']/max($pemahaman_vmts["total_responden"], 1))*100), 1) }}
									</td>
									<td>
										{{ number_format((($pemahaman_vmts['tidak']/max($pemahaman_vmts["total_responden"], 1))*100), 1) }}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						@component("chart.column")
							{{-- @slot("judul") Visi, Misi, Tujuan & Sasaran @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_vmts @endslot
							@slot("id_tabel") datatable1 @endslot
							@slot("judul_chart") Pemahaman VMTS @endslot
							@slot("subjudul_chart") Responden : Prodi {{ $list_pemahaman_vmts["prodi"]["total_responden"] }} | Fakultas {{ $list_pemahaman_vmts["fakultas"]["total_responden"] }} | Universitas {{ $list_pemahaman_vmts["universitas"]["total_responden"] }} @endslot
							@slot("judul_y") Persen @endslot
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
				<h6 class="m-0">Rumusan VMTS Prodi, Fakultas, dan Universitas</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Prodi/Jurusan tempat Ibu/Bapak bekerja?</span>
						</div>
						<table class="table mb-0 d-none" id="datatable2">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($media_vmts_prodi['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $pertanyaan }}</td>
										<td class="text-right">
											{{ number_format((($jumlah / max($media_vmts_prodi['total_responden'], 1)) * 100), 1) }}
											{{-- {{ number_format((($jumlah / max($media_vmts_prodi['total_pilihan'], 1)) * 100), 1) }} --}}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						@component("chart.pie_legend")
							{{-- @slot("judul") Rumusan VMTS UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_rumusan_prodi @endslot
							@slot("id_tabel") datatable2 @endslot
							@slot("judul_chart") Persentase Rumusan VMTS Prodi @endslot
							@slot("subjudul_chart") Total Responden: {{ $media_vmts_prodi['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Fakultas tempat Ibu/Bapak bekerja?</span>
						</div>
						<table class="table mb-0 d-none" id="datatable5">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($media_vmts_fakultas['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $pertanyaan }}</td>
										<td class="text-right">
											{{ number_format((($jumlah / max($media_vmts_fakultas['total_responden'], 1)) * 100), 1) }}
											{{-- {{ number_format((($jumlah / max($media_vmts_fakultas['total_pilihan'], 1)) * 100), 1) }} --}}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						@component("chart.pie_legend")
							{{-- @slot("judul") Rumusan VMTS UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_rumusan_fakultas @endslot
							@slot("id_tabel") datatable5 @endslot
							@slot("judul_chart") Persentase Rumusan VMTS Fakultas @endslot
							@slot("subjudul_chart") Total Responden: {{ $media_vmts_fakultas['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Universitas?</span>
						</div>
						<table class="table mb-0 d-none" id="datatable8">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($media_vmts_universitas['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $pertanyaan }}</td>
										<td class="text-right">
											{{ number_format((($jumlah / max($media_vmts_universitas['total_responden'], 1)) * 100), 1) }}
											{{-- {{ number_format((($jumlah / max($media_vmts_universitas['total_pilihan'], 1)) * 100), 1) }} --}}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						@component("chart.pie_legend")
							{{-- @slot("judul") Rumusan VMTS UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_rumusan_universitas @endslot
							@slot("id_tabel") datatable8 @endslot
							@slot("judul_chart") Persentase Rumusan VMTS Universitas  @endslot
							@slot("subjudul_chart") Total Responden: {{ $media_vmts_universitas['total_responden'] }} orang @endslot
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
							<span class="text-info font-italic font-weight-bold" >Bagaimana menurut Ibu/Bapak, kinerja Program Studi dalam mencapai visi dan sasarannya?</span>
						</div>
						<table class="table mb-0" id="datatable3_prodi">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($kinerja_prodi['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $pertanyaan }}</td>
										<td class="text-right">
											{{ number_format((($jumlah / max($kinerja_prodi['total_responden'], 1)) * 100), 1) }}
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
							@slot("id_chart") persentase_kinerja @endslot
							@slot("id_tabel") datatable3_prodi @endslot
							@slot("judul_chart") Persentase Kinerja Program Studi @endslot
							@slot("subjudul_chart") Total Responden: {{ $kinerja_prodi['total_responden'] }} orang @endslot
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
				<h6 class="m-0">Kinerja Fakultas</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Bagaimana menurut Ibu/Bapak, kinerja Fakultas dalam mencapai visi dan sasarannya?</span>
						</div>
						<table class="table mb-0" id="datatable6">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($kinerja_fakultas['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $pertanyaan }}</td>
										<td class="text-right">
											{{ number_format((($jumlah / max($kinerja_fakultas['total_responden'], 1)) * 100), 1) }}
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
							@slot("id_chart") persentase_kinerja_fak @endslot
							@slot("id_tabel") datatable6 @endslot
							@slot("judul_chart") Persentase Kinerja Fakultas @endslot
							@slot("subjudul_chart") Total Responden: {{ $kinerja_fakultas['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 9 --}}
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
						<table class="table mb-0" id="datatable9">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($kinerja_universitas['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $pertanyaan }}</td>
										<td class="text-right">
											{{ number_format((($jumlah / max($kinerja_universitas['total_responden'], 1)) * 100), 1) }}
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
							@slot("id_chart") persentase_kinerja_univ @endslot
							@slot("id_tabel") datatable9 @endslot
							@slot("judul_chart") Persentase Kinerja Universitas @endslot
							@slot("subjudul_chart") Total Responden: {{ $kinerja_universitas['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 10A, F --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Sumber Daya Manusia (SDM)</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penerimaan Dosen</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10a">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10a['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10a['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_penerimaan @endslot
							@slot("id_tabel") datatable10a @endslot
							@slot("judul_chart") Persentase Penerimaan Dosen @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10a['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Beban Mengajar</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10f">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10f['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10f['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_beban_mengajar @endslot
							@slot("id_tabel") datatable10f @endslot
							@slot("judul_chart") Persentase Beban Mengajar @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10f['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 10O, P, Q, R, S, T, U, V, W --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Kepuasan Layanan</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Persyaratan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10o">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10o['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10o['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_persyaratan @endslot
							@slot("id_tabel") datatable10o @endslot
							@slot("judul_chart") Persentase Persyaratan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10o['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Prosedur</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10p">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10p['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10p['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_prosedur @endslot
							@slot("id_tabel") datatable10p @endslot
							@slot("judul_chart") Persentase Prosedur @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10p['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Waktu</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10q">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10q['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10q['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_waktu @endslot
							@slot("id_tabel") datatable10q @endslot
							@slot("judul_chart") Persentase Waktu @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10q['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Biaya</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10r">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10r['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10r['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_biaya @endslot
							@slot("id_tabel") datatable10r @endslot
							@slot("judul_chart") Persentase Biaya @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10r['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Produk</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10s">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10s['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10s['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_produk @endslot
							@slot("id_tabel") datatable10s @endslot
							@slot("judul_chart") Persentase Produk @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10s['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Kompetensi</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10t">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10t['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10t['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kompetensi @endslot
							@slot("id_tabel") datatable10t @endslot
							@slot("judul_chart") Persentase Kompetensi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10t['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Perilaku</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10u">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10u['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10u['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_perilaku @endslot
							@slot("id_tabel") datatable10u @endslot
							@slot("judul_chart") Persentase Perilaku @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10u['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Pengaduan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10v">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10v['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10v['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_pengaduan @endslot
							@slot("id_tabel") datatable10v @endslot
							@slot("judul_chart") Persentase Pengaduan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10v['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Kualitas Layanan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10w">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10w['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10w['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kualitas_layanan @endslot
							@slot("id_tabel") datatable10w @endslot
							@slot("judul_chart") Persentase Kualitas Layanan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10w['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 10B, C, D --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Visi, Misi, Tujuan, dan Sasaran (VMTS)</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >VMTS Prodi</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10b">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10b['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10b['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_vmts_prodi @endslot
							@slot("id_tabel") datatable10b @endslot
							@slot("judul_chart") Persentase VMTS Prodi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10b['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >VMTS Fakultas</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10c">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10c['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10c['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_vmts_fak @endslot
							@slot("id_tabel") datatable10c @endslot
							@slot("judul_chart") Persentase VMTS Fakultas @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10c['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >VMTS Universitas</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10d">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10d['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10d['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_vmts_univ @endslot
							@slot("id_tabel") datatable10d @endslot
							@slot("judul_chart") Persentase VMTS Universitas @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10d['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 10X, Y, Z --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Keuangan, Sarana, dan Prasarana</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Pengembangan Profesi</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10x">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10x['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10x['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_pengembangan_profesi @endslot
							@slot("id_tabel") datatable10x @endslot
							@slot("judul_chart") Persentase Pengembangan Profesi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10x['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Promosi dan Retensi</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10y">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10y['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10y['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_promosi @endslot
							@slot("id_tabel") datatable10y @endslot
							@slot("judul_chart") Persentase Promosi dan Retensi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10y['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Lingkungan, Keselamatan, dan Keamanan Kerja</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10z">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10z['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10z['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_lingkungan @endslot
							@slot("id_tabel") datatable10z @endslot
							@slot("judul_chart") Persentase Lingkungan, Keselamatan, dan Keamanan Kerja @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10z['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Gaji dan Tunjangan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10bb">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10bb['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10bb['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_gaji @endslot
							@slot("id_tabel") datatable10bb @endslot
							@slot("judul_chart") Persentase Gaji dan Tunjangan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10bb['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 10E, G, H, I --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Pendidikan</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Capaian Pembelajaran</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10e">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10e['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10e['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_pencapaian_pemb @endslot
							@slot("id_tabel") datatable10e @endslot
							@slot("judul_chart") Persentase Capaian Pembelajaran @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10e['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Sumber Belajar</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10g">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10g['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10g['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_sumbel @endslot
							@slot("id_tabel") datatable10g @endslot
							@slot("judul_chart") Persentase Sumber Belajar @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10g['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penjadwalan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10h">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10h['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10h['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_penjadwalan @endslot
							@slot("id_tabel") datatable10h @endslot
							@slot("judul_chart") Persentase Penjadwalan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10h['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Sarana dan Prasarana Mengajar</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10i">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10i['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10i['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_sarpras @endslot
							@slot("id_tabel") datatable10i @endslot
							@slot("judul_chart") Persentase Sarana dan Prasarana Mengajar @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10i['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 10J, K, L --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Penelitian</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Dukungan untuk Penelitian</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10j">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10j['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10j['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_dukungan @endslot
							@slot("id_tabel") datatable10j @endslot
							@slot("judul_chart") Persentase Dukungan untuk Penelitian @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10j['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Dukungan untuk Diseminasi dan Publikasi</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10k">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10k['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10k['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_diseminasi @endslot
							@slot("id_tabel") datatable10k @endslot
							@slot("judul_chart") Persentase Dukungan untuk Diseminasi dan Publikasi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10k['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-4">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Fasilitas</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10l">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10l['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10l['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_fasilitas @endslot
							@slot("id_tabel") datatable10l @endslot
							@slot("judul_chart") Persentase Fasilitas @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10l['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 10M, N --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Pengabdian Masyarakat</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Dukungan Akademik dan Pendanaan</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10m">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10m['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10m['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_dukungan_akad @endslot
							@slot("id_tabel") datatable10m @endslot
							@slot("judul_chart") Persentase Dukungan Akademik dan Pendanaan @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10m['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Fasilitas</span>
						</div>
						<table class="table mb-0 d-none" id="datatable10n">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q10n['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q10n['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil UM @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_fasilitas_abmas @endslot
							@slot("id_tabel") datatable10n @endslot
							@slot("judul_chart") Persentase Fasilitas @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q10n['total_responden'] }} orang @endslot
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