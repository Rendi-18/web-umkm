@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div id="dashboard" class="">
                @include('dashboard.components.product', ['products' => $products, 'umkm' => $umkm])
            </div>
            {{-- <div id="users" class="d-none">
                @include('dashboard.components.user', ['users' => $users])
            </div>
            <div id="umkm">
                @include('dashboard.components.umkm', ['umkms' => $umkms])
            </div>
            <div id="koperasi">
                @include('dashboard.components.koperasi')
            </div> --}}
        </div>
        <!-- / Content -->
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
