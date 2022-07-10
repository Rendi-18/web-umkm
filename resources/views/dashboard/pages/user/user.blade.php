@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div id="users">
                <h4 class="col-6 fw-bold py-3 mb-2"> Data User</h4>
                @include('dashboard.components.user', ['users' => $users])
            </div>
        </div>
        <!-- / Content -->
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
