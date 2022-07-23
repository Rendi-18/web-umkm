@extends('layouts.app')
@section('content')
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Agenda</li>
                </ol>
                <h2>Agenda Dinas</h2>
                <div id="search-p">
                    <!-- ======= Search Section ======= -->
                    <section id="search" class="why-us section-bg">
                        <div class="container" data-aos="fade-up">
                            <div
                                class="section-title {{ Request::is('search*') ? 'd-none' : '' }}{{ Request::is('agenda*') ? 'd-none' : '' }}">
                                <h2>Search</h2>
                            </div>
                            <div class="row-content">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 row">
                                        <p>Cari Agenda Dinas</p>
                                        <div id="input-g"class="input-group justify-content-center">
                                            <form action="/agenda" method="get" id="formSearch"
                                                class="row p-0 input-group">
                                                <input type="text" class="col-10 form-control shad-none" name="search"
                                                    value="{{ request('search') }}">
                                                <button class="col-2 form-control shad-none" type="submit">
                                                    <i class="bx bx-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <section id="employee" class="employee  py-0">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            @foreach ($agendas as $agenda)
                                <div class="col-lg-6 my-2 p-2">
                                    <a href="agenda/{{ $agenda->id }}" class="agenda-card">
                                        <div class="member d-flex align-items-start p-4" data-aos="zoom-in"
                                            data-aos-delay="100">
                                            <div class="pic rounded">
                                                @if ($agenda->image)
                                                    <img src="{{ asset('storage/' . $agenda->image) }}" class="img-fluid"
                                                        alt="">
                                                @else
                                                    <img src="img\temp\agenda-temp.png" class="img-fluid" alt="">
                                                @endif
                                            </div>
                                            <div class="member-info col-lg ps-2">
                                                <h4>{{ $agenda->name }}</h4>
                                                <small>{{ date('d F Y', strtotime($agenda->date)) }}</small>
                                                <span>{{ $agenda->location }}</span>
                                                {!! Str::limit($agenda->content, 110) !!}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
        </section>
    </main>
@endsection
