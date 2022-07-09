{{-- untuk bagian pesan dari guest pengunjung website --}}
@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div id="pesan">
                @include('dashboard.pages.pesan.pesan')
            </div>
        </div>

        <!-- / Content -->
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
