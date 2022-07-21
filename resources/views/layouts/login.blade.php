<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style  customizer-hide">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
        $website = DB::table('websites')->get();
    @endphp

    <title>{{ $website[0]->title }} Login</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="/vendor/css/pages/page-auth.css" />

    @include('configs.css-dashboard')

</head>

<body>

    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            @yield('content')
        </div>

    </div>

    <!-- / Content -->

    {{-- Script global --}}
    @include('configs.js-dashboard')
</body>

</html>
