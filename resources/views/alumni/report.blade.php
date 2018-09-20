@extends('layouts.app')

@section('content')  

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
	
	{{-- PERTANYAAN 3 kinerja prodi--}}
	<div class="col-md-12 col-sm-12 mb-4">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Kinerja Prodi</h6>
			</div>
			<div class="card-body p-0 pb-3">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Bagaimana menurut Ibu/Bapak, kinerja Prodi dalam mencapai visi dan sasarannya?</span>
						</div>
						<table class="table mb-0" id="datatable3">
							<thead class="bg-light">
								<tr>
									<th scope="col" class="border-0">Pilihan</th>
									<th scope="col" class="border-0">Persentase (%)</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_q3['data'] as $key => $value)
								<tr>
									<td>{{ $key }}</td>
									<td class="text-right">
										{{ number_format((($value / max($list_q3['responden'], 1)) * 100), 1) }}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						@component("chart.pie_legend")
							{{-- @slot("judul") Kinerja Prodi 
							@endslot --}}
							@slot("use_panel") no @endslot
							@slot("id_chart") persentase_kinerja @endslot
							@slot("id_tabel") datatable3 @endslot
							@slot("judul_chart") Persentase Kinerja Prodi @endslot
							@slot("subjudul_chart") Total Responden: {{ $list_q3['responden'] }} orang @endslot
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
				<h6 class="m-0">Relevansi Prodi dan Pekerjaan</h6>
			</div>
			<div class="card-body p-0 pb-3 text-center">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center p-3">
							<span class="text-info font-italic font-weight-bold" >Apakah pekerjaan Ibu/Bapak relevan dengan program studi yang ditempuh di Universitas Negeri Malang ?</span>
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
						@slot("judul_chart") Persentase Relevansi Prodi dan Pekerjaan @endslot
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




</div> <!-- body -->
@endsection

@push("reportjs")
<script type="text/javascript" src="{{ asset("/js/highchart/highcharts.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/highchart/modules/data.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/highchart/modules/exporting.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/highchart/modules/export-data.js") }}"></script>
@endpush