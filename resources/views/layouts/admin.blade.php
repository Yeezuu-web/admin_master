<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>
    <link href="{{ asset('plugins/bootstrap-4.1.3-dist/css/bootstrap.min.css' )}}" rel="stylesheet" />
    <link href="{{ asset('plugins/css/font-awesome-4.7.0/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/css/font-awesome-4.7.0/v5.2.0.all.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/css/datatable-1.10.19/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/css/datatable-1.10.19/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/css/datatable-1.10.19/buttons-1.2.4/buttons.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/css/datatable-1.10.19/select-1.3.0/select.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/css/datatable-1.10.19/select2-4.0.5/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/css/datepicker-4.17.47/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/css/coreui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/css/dropzone-5.5.1/dropzone.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/css/perfect-scrollbar-1.5.0/perfect-scrollbar.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/flag.min.css')}}">
    <link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    {{-- Require CSS --}}
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    @yield('styles')
</head>

<body class="c-app">
    @include('partials.menu')
    <div class="c-wrapper">
        <header class="c-header c-header-fixed px-3">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
                <i class="fas fa-fw fa-bars"></i>
            </button>

            <a class="c-header-brand d-lg-none" href="#">{{ trans('panel.site_title') }}</a>

            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
                <i class="fas fa-fw fa-bars"></i>
            </button>

            <ul class="c-header-nav ml-auto">
                @if(count(config('panel.available_languages', [])) > 1)
                    <li class="c-header-nav-item dropdown d-md-down-none">
                        <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="c-icon cif-{{ app()->getLocale() != 'kh' ? 'gb' : 'kh'}} c-icon-2xl"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            @foreach(config('panel.available_languages') as $langLocale => $langName)
                                <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                            @endforeach
                        </div>
                    </li>
                @endif


            </ul>
        </header>

        <div class="c-body">
            <main class="c-main">


                <div class="container-fluid">
                    @include('partials.message')
                    @if($errors->count() > 0)
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @yield('content')

                </div>


            </main>
            <footer class="c-footer">
                <div><a href="https://mytvplus.com.kh/ads/">Copyright</a> © 2020 CBS Digital Team.</div>
                <div class="ml-auto">Powered by&nbsp;<a href="https://cbscambodia.com.kh/">Cambodian Broadcasting Service</a></div>
                </footer>
            <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <script src="{{ asset('plugins/js/3.6.0/jquery.min.js') }}"></script>
    {{-- v4.1.1 --}}
    <script src="{{ asset('plugins/js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-4.1.3-dist/js/bootstrap.min.js' )}}"></script> 
    
    <script src="{{ asset('plugins/js/perfect-scrollbar-1.5.1/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('plugins/js/@coreui/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/js/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/js/datatable/dataTables.bootstrap4.min.js') }}"></script>

    {{-- v1.2.4 --}}
    <script src="{{ asset('plugins/js/datatable/buttons-1.2.4/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/js/datatable/buttons-1.2.4/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('plugins/js/datatable/buttons-1.2.4/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/js/datatable/buttons-1.2.4/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/js/datatable/buttons-1.2.4/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('plugins/js/datatable/pdfmaker-0.1.18/pdfmake.min.js') }}"></script>


    <script src="{{ asset('plugins/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/js/JSZip-2.5.0/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/js/datatable/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('plugins/js/ckeditor/ckeditor.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="{{ asset('plugins/js/datepicker-4.17.47/bootstrap-datetimepicker.min.js') }}"></script>

    {{-- v4.0.5 --}}
    <script src="{{ asset('plugins/js/select2-4.0.5/select2.full.min.js') }}"></script>
    <script src="{{ asset('plugins/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2@10.js') }}"></script>
    @yield('scripts')
</body>

</html>