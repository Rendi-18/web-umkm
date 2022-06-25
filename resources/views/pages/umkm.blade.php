@extends('layouts.app')

@section('content')
    <main id="main">
        <section id="identity" class="identity">
            <div class="container">
                <div class="row">
                    <div class="col-4 position-relative">
                        <div class="position-absolute top-50 translate-middle-img">
                            <div class="image-identity">
                                <img class="img-fluid" src="/img/portfolio/portfolio-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="describ col-8">
                        <h2>{{ $umkm->name }}</h2>
                        <h4>{{ $umkm->category->category }}</h4>
                        <p>{{ $umkm->description }}</p>
                        <div class="row">
                            <span class="col-4"><i class="bi bi-person"></i> Pemilik : <span
                                    class="val">{{ $umkm->user->name }}</span>
                            </span>
                            <span class="col-4"><i class="bi bi-telephone"></i> No HP :
                                <span class="val">{{ $umkm->user->phonenumber }}</span></span>
                        </div>
                        <div class="row">
                            <span class="col-4"><i class="bi bi-bag"></i> Product : <span class="val">20RB</span>
                            </span>
                            <span class="col-4"><i class="bi bi-person-check"></i> Bergabung : <span class="val">5
                                    Tahun</span> </span>
                        </div>
                        <div class="row">
                            <span><i class="bi bi-geo-alt"></i> Alamat: <span
                                    class="val">{{ $umkm->address }}</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="card-um" class="card-um">
            <ul id="card-um-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-umkm">UMKM</li>
                <li data-filter=".filter-koperasi">KOPERASI</li>
            </ul>
            @if ($umkms->count())
                <div class="row card-um-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($umkms as $umkm)
                        <div
                            class="col-xl-3 col-6 c0 card-um-item filter-app @if ($umkm->category->category == 'UMKM') , filter-umkm @else filter-koperasi @endif">
                            <div class="card-um-img"><img src="/img/portfolio/portfolio-2.jpg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="card-um-info">
                                <h4>{{ $umkm->name }}</h4>
                                <p>{{ $umkm->category->category }}</p>
                                <a href="/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                    class="card-um-lightbox preview-link" title="{{ $umkm->description }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="/umkm/{{ $umkm->slug }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <h1 class="text-center">Not Found :(</h1>
            @endif
        </section>
    </main>
@endsection
