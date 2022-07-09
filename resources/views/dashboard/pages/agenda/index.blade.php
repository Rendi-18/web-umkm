@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper ">
        <!-- Content -->

        {{-- Flash Message --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="py">
            @include('dashboard.pages.agenda.agenda')
        </div>

        {{-- footer --}}
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>
@endsection
