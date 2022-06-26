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
        <section id="product" class="product">
            @if ($umkm->product->count())
                <div class="container" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">
                        <div class="row prod-container col-12">
                            <div class="row">
                                <div class="col-6 justify-conten-start">
                                    <h5>Product Terlaris</h5>
                                </div>

                            </div>
                            @foreach ($umkm->product as $product)
                                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                                    data-aos-delay="100">
                                    <div class="product-card">
                                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                        <h4><a href="">{{ $product->name }}</a></h4>
                                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                    </div>
                                </div>
                                {{-- <div class="mb-2">
                            {{ $product->name }}
                            {{ $product->weight }}

                        </div> --}}
                            @endforeach
                        </div>
                        <div class="row prod-container col-12">
                            <div class="row jdl">
                                <div class="col-6 justify-conten-right">
                                    <h5>Product Terbaru</h5>
                                </div>
                                <div class="col-6 link-all">
                                    <a href="">Tampilkan Semua Product -></a>
                                </div>
                            </div>
                            @foreach ($umkm->product as $product)
                                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                                    data-aos-delay="100">
                                    <div class="product-card">
                                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                        <h4><a href="">{{ $product->name }}</a></h4>
                                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                    </div>
                                </div>
                                {{-- <div class="mb-2">
                            {{ $product->name }}
                            {{ $product->weight }}
                        </div> --}}
                            @endforeach
                        </div>





                    </div>

                </div>
            @else
                <h1 class="text-center">Not Found :(</h1>
            @endif
        </section>
    </main>
@endsection
