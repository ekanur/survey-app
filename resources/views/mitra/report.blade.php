@extends('layouts.app_admin')

@section('content') 

<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">SI Survei Kepuasan</span>
    <h3 class="page-title">Rekapitulasi Angket Mitra</h3>
  </div>
</div>
<!-- End Page Header -->

<div class="row">
	{{-- PERTANYAAN 1 --}}
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
				<h6 class="m-0">Rumusan VMTS Universitas</h6>
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
				<h6 class="m-0">Kinerja Universitas</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Bagaimana menurut Ibu/Bapak, kinerja Universitas dalam mencapai visi dan sasarannya?</span>
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
							{{-- @slot("judul") Kinerja Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kinerja @endslot
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

	{{-- PERTANYAAN 4A --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Profil Universitas</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-5">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penilaian untuk kualitas informasi dan profil Universitas</span>
						</div>
						<table class="table mb-0" id="datatable4a">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4a['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4a['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
					</div>
					<div class="col-md-7">
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_profil @endslot
							@slot("id_tabel") datatable4a @endslot
							@slot("judul_chart") Persentase Kualitas Profil Universitas @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4a['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 4B, C, D, E --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Kerjasama Universitas</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penilaian untuk jejaring yang dibangun Universitas</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4b">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4b['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4b['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_jejaring @endslot
							@slot("id_tabel") datatable4b @endslot
							@slot("judul_chart") Persentase Kualitas Jejaring Universitas @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4b['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penilaian untuk kontribusi Universitas</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4c">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4c['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4c['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kontribusi @endslot
							@slot("id_tabel") datatable4c @endslot
							@slot("judul_chart") Persentase Kualitas Kontribusi Universitas @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4c['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penilaian untuk kontribusi mitra di akademik</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4d">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4d['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4d['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kontribusi_mitra_akademik @endslot
							@slot("id_tabel") datatable4d @endslot
							@slot("judul_chart") Persentase Kualitas Kontribusi Mitra di Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4d['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>

					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penilaian untuk kontribusi mitra di non-akademik</span>
						</div>
						<table class="table mb-0 d-none" id="datatable4e">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4e['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4e['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kontribusi_mitra_non_akademik @endslot
							@slot("id_tabel") datatable4e @endslot
							@slot("judul_chart") Persentase Kualitas Kontribusi Mitra di Non-Akademik @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4e['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>					
				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 4F --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Keterlibatan Dalam Pendidikan</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-5">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penilaian untuk keterlibatan dalam pembelajaran</span>
						</div>
						<table class="table mb-0" id="datatable4f">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4f['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4f['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
					</div>
					<div class="col-md-7">
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_pembelajaran @endslot
							@slot("id_tabel") datatable4f @endslot
							@slot("judul_chart") Persentase Kualitas Keterlibatan dalam Pembelajaran @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4f['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 4G --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Keterlibatan Dalam Penelitian</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-5">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penilaian untuk keterlibatan dalam penelitian</span>
						</div>
						<table class="table mb-0" id="datatable4g">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4g['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4g['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
					</div>
					<div class="col-md-7">
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_penelitian @endslot
							@slot("id_tabel") datatable4g @endslot
							@slot("judul_chart") Persentase Kualitas Keterlibatan dalam Penelitian @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4g['total_responden'] }} orang @endslot
							@slot("judul_y") Persentase @endslot
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- PERTANYAAN 4H --}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Keterlibatan Dalam Pengabdian Kepada Masyarakat</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-5">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Penilaian untuk keterlibatan dalam pengabdian</span>
						</div>
						<table class="table mb-0" id="datatable4h">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Kategori</th>
									{{-- <th scope="col" class="border-0">Jumlah Skor</th> --}}
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q4h['kuesioner'] as $pertanyaan => $jumlah)
									<tr>
										<td>{{ $jumlah['alias'] }}</td>
										{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
										<td class="text-right">
											{{ number_format((($jumlah['responden'] / max($list_q4h['total_responden'], 1)) * 100), 1) }}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>	
					</div>
					<div class="col-md-7">
						@component("chart.pie_legend")
							{{-- @slot("judul") Profil Universitas @endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_pengabdian @endslot
							@slot("id_tabel") datatable4h @endslot
							@slot("judul_chart") Persentase Kualitas Keterlibatan dalam Pengabdian @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q4h['total_responden'] }} orang @endslot
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