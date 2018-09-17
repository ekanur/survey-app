@extends('layouts.app')

@section('content') 

<div class="row">
	<!-- Users Stats -->
	<div class="col-lg-4 col-md-4 col-sm-12 mb-4">

		@component("chart.bar")
			@slot("judul")
				Pemahaman Visi, Misi, Tujuan & Sasaran
			@endslot

			@slot("id_chart")
				pemahaman_vmts
			@endslot
			@slot("judul_chart")
				Prodi & Fakultas
			@endslot
		@endcomponent
		
	</div>
<!-- End Users Stats -->
<!-- Users By Device Stats -->
	<div class="col-lg-4 col-md-4 col-sm-12 mb-4">
		@component("chart.pie")
			@slot("judul")
				{{ $data["title"] }}
			@endslot

			@slot("id_chart")
				media_vmts_prodi
			@endslot

			@slot("judul_chart")
				Prodi
			@endslot
		@endcomponent
		
	</div>

	<div class="col-lg-4 col-md-4 col-sm-12 mb-4">
		@component("chart.pie")
			@slot("judul")
				Media Penyampaian Visi, Misi, Tujuan & Sasaran
			@endslot

			@slot("id_chart")
				media_vmts_fakultas
			@endslot
			@slot("judul_chart")
				Fakultas
			@endslot
		@endcomponent
	</div>
</div>

@endsection

@push("reportjs")
<script type="text/javascript" src="{{ asset("/js/highchart/highcharts.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/highchart/modules/exporting.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/highchart/modules/export-data.js") }}"></script>
@endpush