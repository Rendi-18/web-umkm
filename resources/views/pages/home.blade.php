@extends('layouts.app')

@section('content')
    @include('components.hero')
    <main id="main">
        @include('components.search')
        @include('components.about')
        @include('components.service')
        @include('components.umkm')
        @include('components.structure')
        @include('components.contact')
    </main>
@endsection
