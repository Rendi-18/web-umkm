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
                <section id="search" class="why-us section-bg">
                    <div class="container" data-aos="fade-up">

                        <div class="row-content">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <p>Temukan UMKM & Unit Koperasi Di sekitar anda</p>
                                    <form action="" method="post">
                                        <input type="text" name="email" placeholder="Masukkan Nama UMKM/Unit Koperasi">
                                        <input type="submit" value="Search">
                                    </form>
                                </div>
                            </div>

                        </div>

                </section>
                <section id="card-um" class="card-um">
                    <div class="row card-um-container" data-aos="fade-up" data-aos-delay="200">

                        @foreach ($umkms as $umkm)
                            <div class="col-lg-4 col-6 c0 card-um-item filter-app">
                                <div class="card-um-img"><img src="/img/portfolio/portfolio-2.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="card-um-info">
                                    <h4>{{ $umkm->name }}</h4>
                                    <p>{{ $umkm->category->category }}</p>
                                    <a href="/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="card-um-lightbox preview-link" title="{{ $umkm->description }}"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>
        </section><!-- End Portfolio Section -->
        <div class="d-flex justify-content-center pt-3">
            {{ $umkms->links('Components.paginator') }}
        </div>
        </section><!-- End Breadcrumbs -->


    </main><!-- End #main -->


    </main>
@endsection
