@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper ">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            @include('dashboard.pages.pengajuan.pengajuanSurat', ['izins' => $izins])
            @include('dashboard.pages.pengajuan.pengajuanUmkm', ['umkms' => $umkms])
            @include('dashboard.pages.pengajuan.pengajuanbantuan')
        </div>
        {{-- footer --}}
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>
@endsection
