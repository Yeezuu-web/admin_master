<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('plugins/css/coreui.min.css') }}">
    @stack('css')
</head>

<body class="c-app">

    @include('partials.sidebar')

    <div class="c-wrapper c-fixed-components">
        
        @include('partials.header')

        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        @yield('content')
                    </div>
                </div>
            </main>

            <footer class="c-footer">
                <div><a href="https://coreui.io">{{config('app.name')}}</a> © {{now()->year}} creativeLabs.</div>
                <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">{{config('app.name')}}</a></div>
            </footer>
        </div>
    </div>

    {{-- Require jQuery --}}
    <script src="{{ asset('plugins/js/jquery-3.6.0.min.js') }}"></script>
    {{-- Reqire Javascript --}}
    <script src="{{ asset('plugins/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('plugins/js/main.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2@10.js') }}"></script>
    <script src="{{ asset('vendors/@coreui/icons/js/svgxuse.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
