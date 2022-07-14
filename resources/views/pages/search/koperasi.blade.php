@extends('layouts.app')

@section('content')
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Inner Page</li>
                </ol>
                <h2>Search</h2>
                @include('components.search')
                <section id="card-um" class="card-um">
                    <ul id="card-um-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter=".filter-koperasi" class="filter-active">KOPERASI</li>
                    </ul>
                    @if ($koperasis->count())
                        <div class="row card-um-container" data-aos="fade-up" data-aos-delay="200">
                            @foreach ($koperasis as $koperasi)
                                <div class="col-xl-3 col-6 c0 card-um-item filter-app">
                                    <div class="card-um-img"><img src="/img/portfolio/portfolio-2.jpg" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="card-um-info">
                                        <h4>{{ $koperasi->name }}</h4>
                                        <a href="/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                            class="card-um-lightbox preview-link" title="{{ $koperasi->description }}"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="/koperasi/{{ $koperasi->slug }}" class="details-link"
                                            title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <h1 class="text-center">Not Found :(</h1>
                    @endif
                </section>
                <div class="d-flex justify-content-center pt-3">
                    {{ $koperasis->links('components.paginator') }}
                </div>
        </section>


    </main><!-- End #main -->


    </main>
@endsection
