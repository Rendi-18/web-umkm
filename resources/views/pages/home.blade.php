@extends('layouts.app')

@section('content')
    @include('components.hero')
    <main id="main">
        @include('components.agenda')
        @include('components.about')
        @include('components.service')
        @include('components.regist')
        @include('components.umkm')
        @include('components.structure')
        @include('components.contact')
    </main>
@endsection
