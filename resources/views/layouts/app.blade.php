<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Survei Kepuasan - Satuan Penjamin Mutu - Universitas Negeri Malang</title>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.0.0" href="{!! asset('css/shards-dashboards.1.0.0.min.css')!!}">
    <link rel="stylesheet" href="{!! asset('css/extras.1.0.0.min.css')!!}">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">
    <style type="text/css">
    .center{
        margin: auto;
    }        

    </style>
    @stack("style")
</head>
<body>
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
          <div class="col-12 text-center text-sm-center mb-0">
            <a href="{{url('/')}}">
                <img src="{{asset('images/um_logo_blue_text.png')}}" width="240">
            </a>
            <br><br>
            <span class="text-uppercase page-subtitle">Satuan Penjaminan Mutu - Universitas Negeri Malang</span>
            <h3 class="page-title">Sistem Survei Kepuasan</h3>

        </div>

    </div>
    <div class="row" style="margin-bottom:60px">
        <div class="col-4 offset-md-4">
            <select class="form-control" name="tahun">
                @for($tahun=date("Y"); $tahun>=2015; $tahun--)
                <option value="{{ $tahun }}" @if(null != session("tahun")) @if(session("tahun") == $tahun) selected="" @endif @endif>{{ $tahun }}</option>
                @endfor
            </select>
        </div>
    </div>
    @if(null != session("msg"))
    <div class="row" style="margin-bottom:60px;">
        <div class="col-12">
        <div class="alert alert-accent alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            {{ session("msg") }}
        </div>
        </div>
    </div>
    @endif

@yield('content')
<div class="page-header row no-gutters py-4">
    <div class="col-12 text-center text-sm-center mb-0">
        <h3 class="page-title">#dukungmutuUM</h3>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script> --}}
<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
{{-- <script src="{!! asset('js/extras.1.0.0.min.js')!!}"></script> --}}
{{-- <script src="{!! asset('js/shards-dashboards.1.0.0.min.js')!!}"></script> --}}
{{-- <script src="{!! asset('js/app/app-blog-overview.1.0.0.js')!!}"></script> --}}
{{-- <script src="{!! asset('js/app/app-blog-new-post.1.0.0.js')!!}"></script> --}}
{{-- <script src="{!! asset('js/app/app-components-overview.1.0.0.js')!!}"></script> --}}

<script type="text/javascript">
    $(document).ready(function(){
        $("select[name='tahun']").change(function(){
            var tahun = $(this).val();
            window.location.href = "{{ url("/ubah-tahun") }}/"+tahun;
        });
    });
</script>

@yield('pagespecificjs')


@stack("reportjs")
@stack("highchart")
</body>
</html>