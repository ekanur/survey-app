@extends('layouts.app')

@section('content') 

<div class="row">
	{{-- PERTANYAAN 1 --}}
	<div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-none">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Visi, Misi, Tujuan & Sasaran Universitas</h6>
			</div>
			<div class="card-body p-0 pb-3 text-center">
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
							<td>{{ number_format((($list_q1['jumlah_ya'] / $list_q1['total_responden']) * 100), 1) }}</td>
							<td>{{ number_format((($list_q1['jumlah_tidak'] / $list_q1['total_responden']) * 100), 1) }}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 mb-4">
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
	
	{{-- PERTANYAAN 3 --}}
	<div class="col-lg-6 col-md-6 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Kinerja Universitas</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<table class="table mb-0" id="datatable3">
					<thead class="bg-light">
						<tr>
							<th scope="col" class="border-0">Kategori</th>
							<th scope="col" class="border-0">Persentase (%)</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($list_q3['kuesioner'] as $pertanyaan => $jumlah)
							<tr>
								<td>{{ $pertanyaan }}</td>
								<td class="text-right">{{ number_format((($jumlah / $list_q3['total_responden']) * 100), 1) }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-12 mb-4">
		@component("chart.pie_legend")

		@slot("judul") Kinerja Universitas @endslot
		@slot("id_chart") persentase_kinerja @endslot
		@slot("id_tabel") datatable3 @endslot
		@slot("judul_chart") Persentase Kinerja Universitas @endslot
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