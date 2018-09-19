@extends('layouts.app')

@section('content') 

<div class="row">
	{{-- PERTANYAAN 1 --}}
	<div class="col-md-6 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Visi, Misi, Tujuan & Sasaran Universitas</h6>
			</div>
			<div class="card-body p-0 pb-3 text-center">
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
		</div>
	</div>
	<div class="col-md-6 col-sm-12 mb-4">
		@component("chart.column")
			@slot("judul") Visi, Misi, Tujuan & Sasaran Universitas @endslot
			@slot("id_chart") persentase_vmts @endslot
			@slot("id_tabel") datatable1 @endslot
			@slot("judul_chart") Persentase Pemahaman VMTS Universitas @endslot
			@slot("subjudul_chart") Total Responden: {{ $list_q1['total_responden'] }} orang @endslot
			@slot("judul_y") Persentase @endslot
			@slot("tipe_value") percent @endslot
		@endcomponent
	</div>

	{{-- PERTANYAAN 2 --}}
	<div class="col-md-6 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Rumusan VMTS Universitas</h6>
			</div>
			<div class="card-body p-0 pb-3">
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
									{{ number_format((($jumlah / max($list_q2['total_pilihan'], 1)) * 100), 1) }}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-sm-12 mb-4">
		@component("chart.pie_legend")
			@slot("judul") Rumusan VMTS Universitas @endslot
			@slot("id_chart") persentase_rumusan @endslot
			@slot("id_tabel") datatable2 @endslot
			@slot("judul_chart") Persentase Rumusan VMTS Universitas @endslot
			@slot("subjudul_chart") Total Responden: {{ $list_q2['total_responden'] }} orang @endslot
			@slot("judul_y") Persentase @endslot
		@endcomponent
	</div>
	
	{{-- PERTANYAAN 3 --}}
	<div class="col-md-6 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Kinerja Universitas</h6>
			</div>
			<div class="card-body p-0 pb-3">
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
		</div>
	</div>
	<div class="col-md-6 col-sm-12 mb-4">
		@component("chart.pie_legend")
			@slot("judul") Kinerja Universitas @endslot
			@slot("id_chart") persentase_kinerja @endslot
			@slot("id_tabel") datatable3 @endslot
			@slot("judul_chart") Persentase Kinerja Universitas @endslot
			@slot("subjudul_chart") Total Responden: {{ $list_q3['total_responden'] }} orang @endslot
			@slot("judul_y") Persentase @endslot
		@endcomponent
	</div>

	{{-- PERTANYAAN 5A --}}
	<div class="col-md-6 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Profil Universitas</h6>
			</div>
			<div class="card-body p-0 pb-3">
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
						@foreach ($list_q5a['kuesioner'] as $pertanyaan => $jumlah)
							<tr>
								<td>{{ $jumlah['alias'] }}</td>
								{{-- <td class="text-right">{{ $jumlah['skor'] }}</td> --}}
								<td class="text-right">
									{{ number_format((($jumlah['responden'] / max($list_q5a['total_responden'], 1)) * 100), 1) }}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-sm-12 mb-4">
		@component("chart.pie_legend")
			@slot("judul") Profil Universitas @endslot
			@slot("id_chart") persentase_profil @endslot
			@slot("id_tabel") datatable4a @endslot
			@slot("judul_chart") Persentase Profil Universitas @endslot
			@slot("subjudul_chart") Total Responden: {{ $list_q3['total_responden'] }} orang @endslot
			@slot("judul_y") Persentase @endslot
		@endcomponent
	</div>

</div>
@endsection

@push("reportjs")
	<script type="text/javascript" src="{{ asset("/js/highchart/highcharts.js") }}"></script>
	<script type="text/javascript" src="{{ asset("/js/highchart/modules/data.js") }}"></script>
	<script type="text/javascript" src="{{ asset("/js/highchart/modules/exporting.js") }}"></script>
	<script type="text/javascript" src="{{ asset("/js/highchart/modules/export-data.js") }}"></script>
@endpush