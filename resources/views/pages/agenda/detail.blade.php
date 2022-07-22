@extends('layouts.app')
@section('content')
    <main id="main" class="h-100">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container h-100">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/agenda">Agenda</a></li>
                    <li>Agenda Dinas</li>
                </ol>
                <h2>{{ $agenda->name }}</h2>
            </div>
        </section>
        <section id="d-agendas">
            <div class="container">
                <div class="row">
                    <div class=" container-lg title-container d-flex flex-column align-items-center">
                        <h2><strong>{{ $agenda->name }}</strong></h2>
                        <div class="img-container d-flex flex-column align-items-center">
                            @if ($agenda->image)
                                <img src="{{ asset('storage/' . $agenda->image) }}" class="img-fluid">
                            @else
                                <img src="/img/temp/agenda-temp.png" class="img-fluid">
                                {{-- <img src="/img/portfolio/portfolio-9.jpg" class="img-fluid"> --}}
                            @endif
                        </div>
                        <div class="row  my-2 w-100">
                            <hr class="w-100 border-2 opacity-50 mb-2">
                            <div class="img-title d-flex w-100">
                                <h6 class="me-auto">{{ $agenda->location }}</h6>
                                <h6 class="ms-auto">{{ date('d F Y', strtotime($agenda->date)) }}</h6>
                            </div>
                            <hr class="w-100 border-2 opacity-50">
                        </div>
                    </div>
                    <div class="container">
                        <p>{!! $agenda->content !!} </p>
                    </div>
                </div>
            </div>
        </section>
        @include('components.agenda')
    </main>
@endsection
