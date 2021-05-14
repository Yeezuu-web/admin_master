<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('plugins/css/coreui.min.css') }}">
</head>

<body class="c-app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('plugins/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/@coreui/icons/js/svgxuse.min.js') }}"></script>
</body>

</html>
