@extends('layouts.app')

@section('content')
    <main id="main">
        <section id="identity" class="identity">
            <div class="container">
                <div class="row">
                    <div class="col-4 position-relative">
                        <div class="position-absolute top-50 translate-middle-img">
                            <div class="image-identity">
                                @if ($umkm->image)
                                    <img src="{{ asset('storage/' . $umkm->image) }}" alt="user-avatar" class="img-fluid"
                                        id="uploadedAvatar">
                                @else
                                    <img src="/img/temp/store-temp.png" alt="user-avatar" class="img-fluid"
                                        id="uploadedAvatar">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="describ col-8">
                        <h2>{{ $umkm->name }}</h2>
                        <p>{{ $umkm->description }}</p>
                        <div class="row">
                            <span class="col-4"><i class="bi bi-person"></i> Pemilik : <span
                                    class="val">{{ $umkm->user->name }}</span>
                            </span>
                            <span class="col-4"><i class="bi bi-telephone"></i> No HP :
                                <span class="val">{{ $umkm->user->phonenumber }}</span></span>
                        </div>
                        <div class="row">
                            <span class="col-4"><i class="bi bi-bag"></i> Product : <span
                                    class="val">{{ $umkm->product->count() }}</span>
                            </span>
                            <span class="col-4"><i class="bi bi-person-check"></i> Bergabung :
                                <span class="val">{{ $umkm->created_at->diffForHumans() }}</span>
                            </span>
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
                                    <h5>Product Unggulan</h5>
                                </div>

                            </div>
                            @if ($umkm->product->where('isUnggulan')->count())
                                @foreach ($umkm->product->where('isUnggulan') as $product)
                                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0"
                                        data-aos="zoom-in" data-aos-delay="100">
                                        <div class="product-card">
                                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                            <h4><a href="">{{ $product->name }}</a></h4>
                                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12 m-4 d-flex">
                                    <h3 class="m-auto">UMKM ini Belum Memiliki Produk Unggulan :)</h3>
                                </div>
                            @endif

                        </div>
                        <div class="row prod-container col-12">
                            <div class="row jdl p-0">
                                <div class="col-6 justify-conten-right">
                                    <h5>Product Terbaru</h5>
                                </div>
                                {{-- <div class="col-6 link-all">
                                    <a href="" class="align-middle">Tampilkan Semua Product <i
                                            class='bx bx-chevrons-right bx-fade-left bx-sm'></i></a>
                                </div> --}}
                            </div>
                            @foreach ($umkm->product as $product)
                                <div class="col-xl-3 col-md-6 d-flex align-items-stretch my-4 mt-xl-0 rounded"
                                    data-aos="zoom-in" data-aos-delay="100">

                                    <div class="product-card p-4">
                                        @if ($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="user-avatar"
                                                class="img-fluid" id="uploadedAvatar">
                                        @else
                                            <img src="/img/temp/product-temp.png" alt="user-avatar" class="img-fluid"
                                                id="uploadedAvatar">
                                        @endif
                                        <h4>{{ $product->name }}</h4>
                                        <div class="row">
                                            <span class="col-12 d-flex">
                                                <i class="bx bx-money bx-burst my-auto"></i>
                                                &nbsp;Harga &nbsp;
                                                <span class="my-auto">: @currency($product->price)</span>
                                            </span>
                                            <span class="col-12 d-flex">
                                                <i class='bx bx-cuboid bx-burst my-auto'></i>
                                                &nbsp;Berat &nbsp;
                                                <span class="my-auto">: {{ $product->weight }} Kg</span>
                                            </span>
                                            <span class="btn mt-3 col-12" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $product->id }}">Detail</span>
                                        </div>
                                    </div>
                                </div>
                                @include('components/modalProduct')
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
