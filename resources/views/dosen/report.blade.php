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
							<th scope="col" class="border-0">Ya (%)</th>
							<th scope="col" class="border-0">Tidak (%)</th>
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
								{{ number_format((($pemahaman_vmts['Ya']/$pemahaman_vmts["Responden"])*100), 1) }}
							</td>
							<td>
								{{ number_format((($pemahaman_vmts['Tidak']/$pemahaman_vmts["Responden"])*100), 1) }}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-sm-12 mb-4">
		@component("chart.column")
			@slot("judul") Visi, Misi, Tujuan & Sasaran @endslot
			@slot("id_chart") persentase_vmts @endslot
			@slot("id_tabel") datatable1 @endslot
			@slot("judul_chart") Pemahaman VMTS @endslot
			@slot("subjudul_chart") Responden : Prodi {{ $list_pemahaman_vmts["prodi"]["Responden"] }} | Fakultas {{ $list_pemahaman_vmts["fakultas"]["Responden"] }} @endslot
			@slot("judul_y") Persen @endslot
			@slot("tipe_value") percent @endslot
		@endcomponent
	</div>
	
	{{-- PERTANYAAN 3 --}}
	<div class="col-md-6 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Kinerja Program Studi</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="text-center p-3">
					<span class="text-info font-italic font-weight-bold" >Bagaimana menurut Ibu/Bapak, kinerja Program Studi dalam mencapai visi dan sasarannya?</span>
				</div>
				<table class="table mb-0" id="datatable3">
					<thead class="bg-light">
						<tr>
							<th scope="col" class="border-0">Pilihan</th>
							<th scope="col" class="border-0">Persentase (%)</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($kinerja_prodi['data'] as $key => $value)
							<tr>
								<td>{{ $key }}</td>
								<td class="text-right">
									{{ number_format((($value / max($kinerja_prodi['responden'], 1)) * 100), 1) }}
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
			@slot("subjudul_chart") Total Responden: {{ $kinerja_prodi['responden'] }} orang @endslot
			@slot("judul_y") Persentase @endslot
		@endcomponent
	</div>

	{{-- PERTANYAAN 4A --}}
	

</div>
@endsection

@push("reportjs")
	<script type="text/javascript" src="{{ asset("/js/highchart/highcharts.js") }}"></script>
	<script type="text/javascript" src="{{ asset("/js/highchart/modules/data.js") }}"></script>
	<script type="text/javascript" src="{{ asset("/js/highchart/modules/exporting.js") }}"></script>
	<script type="text/javascript" src="{{ asset("/js/highchart/modules/export-data.js") }}"></script>
@endpush