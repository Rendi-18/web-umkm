@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper ">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div id="dashboard" class="">
                @include('dashboard.components.koperasi-jasa')
            </div>
        </div>
        {{-- CREATE --}}
        @include('dashboard.pages.koperasi-jasa.create', ['koperasi' => $koperasi])

        {{-- EDIT --}}
        @include('dashboard.pages.koperasi-jasa.edit', ['koperasi' => $koperasi])
        <!-- footer -->
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>



    <!-- Content wrapper -->
@endsection
