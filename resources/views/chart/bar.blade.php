<div class="card card-small">
	<div class="card-header border-bottom">
		<h6 class="m-0">{{ $judul or null }}</h6>
	</div>
	<div class="card-body pt-0">

		<div style="max-width: 100% !important; display: block; width: 709px; height: 100%;" class="blog-overview-users chartjs-render-monitor" width="709" id="{{ $id_chart or null }}"></div>
	</div>
	<div class="card-footer border-top">
		<div class="row">

			<div class="col text-right view-report">
				<a href="#">Full report →</a>
			</div>
		</div>
	</div>
</div>

@push("highchart")

<script type="text/javascript">


Highcharts.chart('{{ $id_chart or null }}', {
    chart: {
        type: 'column'
    },
    title: {
        text: '{{ $judul_chart or null }}'
    },
    xAxis: {
        categories: ['Prodi', 'Fakultas']
    },
    yAxis: {
        min: 0,
        title: {
            text: '% Pemahaman Dosen'
        }
    },
    tooltip: {
        pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
        shared: true
    },
    plotOptions: {
        column: {
            stacking: 'percent'
        }
    },
    series: [{
        name: 'Ya',
        data: [5, 3]
    }, {
        name: 'Tidak',
        data: [2, 2]
    }]
});
</script>

@endpush