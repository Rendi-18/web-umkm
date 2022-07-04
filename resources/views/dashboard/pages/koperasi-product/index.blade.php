@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper ">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div id="dashboard" class="">
                @include('dashboard.components.koperasi-product')
            </div>
        </div>

        <!-- tatarok sini karna routenya gabisa-->
        @include('dashboard.pages.koperasi-product.create')
        @include('dashboard.pages.koperasi-product.edit')

        {{-- footer --}}
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>


    <!-- Content wrapper -->
@endsection
