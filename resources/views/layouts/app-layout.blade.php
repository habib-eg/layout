@php($isRtl = (substr(config('app.locale'),0,2)) ==="ar")
<!DOCTYPE html>
<html lang="ar" dir="{{$isRtl ? 'rtl' : 'ltr'}}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ isset($title) ? "$title &mdash; ":''  }}  {{ config('app.name') }}</title>

    <!-- General CSS Files -->
    @if ($isRtl)
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- CSS Libraries -->
    @stack('lib_css')
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}"/>
    @if (config('app.locale') == "ar")
        <style>
            .main-sidebar .sidebar-menu li a.has-dropdown::after {
                content: '';
                right: auto;
                left: 20%;
            }
            .beep::after {
                right: auto;
                left: 8px;
            }
        </style>
    @endif
    @stack('css')
</head>

<body>
<div id="app">

    {{ $slot }}

</div>

<!-- General JS Scripts -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/stisla.js') }}"></script>

<!-- JS Libraies -->

@stack('lib_js')

<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- Page Specific JS File -->
@stack('js')

</body>
</html>
