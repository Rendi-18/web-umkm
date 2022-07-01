@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <div id="umkm">
                @include('dashboard.components.umkm', ['umkms' => $umkms])
            </div>
            {{-- <div id="koperasi">
                @include('dashboard.components.koperasi', ['umkms' => $umkms])
            </div> --}}
            {{-- <div id="pengajuan">
                @include('dashboard.components.pengajuan', ['umkms' => $umkms])
            </div> --}}
        </div>
        <!-- / Content -->
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
