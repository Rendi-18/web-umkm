@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper ">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            @include('dashboard.pages.laporan.laporanTahunan')
        </div>
        {{-- footer --}}
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>
@endsection
