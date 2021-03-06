@extends('layouts.app')

@section('content')
    <main id="main">
        <section id="identity" class="identity">
            <div class="container">
                <div class="row">
                    <div class="col-4 position-relative">
                        <div class="position-absolute top-50 translate-middle-img">
                            <div class="image-identity">
                                @if ($koperasi->image)
                                    <img src="{{ asset('storage/' . $koperasi->image) }}" alt="user-avatar"
                                        class="img-fluid" id="uploadedAvatar">
                                @else
                                    <img src="/img/temp/store-temp.png" alt="user-avatar" class="img-fluid"
                                        id="uploadedAvatar">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="describ col-8">
                        <h2>{{ $koperasi->name }}</h2>
                        <p>{!! $koperasi->description !!}</p>
                        <div class="row">
                            <span class="col-6">
                                <i class="bi bi-upc-scan"></i> NIK : <span class="val">{{ $koperasi->nik }}</span>
                            </span>
                            <span class="col-6">
                                <i class="bx ri-service-line"></i> Koperasi <span
                                    class="val">{{ $koperasi->categoryKoperasi->category }}</span>
                            </span>
                        </div>
                        <div class="row">
                            <span class="col-6"><i class="bi bi-person"></i> Pemilik : <span
                                    class="val">{{ $koperasi->user->name }}</span>
                            </span>
                            <span class="col-6"><i class="bi bi-telephone"></i> No HP :
                                <span class="val">{{ $koperasi->user->phonenumber }}</span></span>
                        </div>
                        <div class="row">
                            <span class="col-6"><i class="bx bx-group"></i> Member :
                                <span class="val">
                                    @if ($koperasi->member)
                                        {{ $koperasi->member }}
                                    @else
                                        -
                                    @endif

                                </span>
                            </span>
                            <span class="col-6"><i class="bx bxs-group"></i> Karyawan :
                                <span class="val">
                                    @if ($koperasi->employee)
                                        {{ $koperasi->employee }}
                                    @else
                                        -
                                    @endif

                                </span>
                            </span>
                        </div>
                        <div class="row">
                            <span><i class="bi bi-geo-alt"></i> Alamat: <span
                                    class="val">{{ $koperasi->address }}</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="product" class="product">
            @if ($koperasi->jasa->count())
                <div class="container" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">

                        <div class="row prod-container col-12">
                            <div class="row jdl p-0">
                                <div class="col-6 justify-conten-right">
                                    <h5>Layanan Koperasi</h5>
                                </div>
                            </div>
                            @foreach ($koperasi->jasa as $service)
                                <div class="col-xl-3 col-md-6 d-flex align-items-stretch my-4 mt-xl-0 rounded"
                                    data-aos="zoom-in" data-aos-delay="100">

                                    <div class="product-card p-4">
                                        @if ($service->image)
                                            <img src="{{ asset('storage/' . $service->image) }}" alt="user-avatar"
                                                class="img-fluid" id="uploadedAvatar">
                                        @else
                                            <img src="/img/temp/service-temp.png" alt="user-avatar" class="img-fluid"
                                                id="uploadedAvatar">
                                        @endif
                                        <h4>{{ Str::limit($service->name, 15, '...') }}</h4>
                                        <div class="row">
                                            <span class="col-12 d-flex">
                                                <i class="bx bx-chart bx-burst my-auto"></i>
                                                &nbsp;
                                                <span class="my-auto">{{ $service->service }}</span>
                                            </span>
                                            <span class="col-12 d-flex">
                                                <i class="bx bx-donate-heart bx-burst my-auto"></i>
                                                &nbsp;
                                                <span class="my-auto">{{ $service->needs }}</span>
                                            </span>
                                            <a href="/koperasi/jasa/{{ $service->slug }}"
                                                class="btn mt-3 col-12">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            @else
                <h1 class="text-center">Not Found :(</h1>
            @endif

            <div class="container" data-aos="fade-up" data-aos-delay="200">
                <div class="row">
                    @if ($koperasi->product->where('isUnggulan')->count())
                        <div class="row prod-container col-12">
                            <div class="row">
                                <div class="col-6 justify-conten-start">
                                    <h5>Product Unggulan</h5>
                                </div>

                            </div>

                            @foreach ($koperasi->product->where('isUnggulan') as $product)
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
                                        <h4>{{ Str::limit($product->name, 15, '...') }}</h4>
                                        <div class="row">
                                            <div class="col-8 row">
                                                <span class="col-12 d-flex">
                                                    <i class="bx bx-money bx-burst my-auto"></i>
                                                    <p>&nbsp;Harga</p>
                                                </span>
                                                <span class="my-auto">@currency($product->price)</span>
                                                <div class="my-2"></div>
                                                <span class="d-flex">
                                                    <i class='bx bx-cuboid bx-burst my-auto'></i>
                                                    <p>&nbsp;Berat</p>
                                                </span>
                                                <span class="my-auto">{{ $product->weight }} Kg</span>
                                            </div>
                                            <div class="col-4 row justify-content-center d-flex">
                                                <span class="col-12 d-flex justify-content-center">
                                                    <i class="bx bxs-star bx-tada bx-lg my-auto"></i>
                                                </span>
                                                <span class="col-12 d-flex justify-content-center">
                                                    <h6>Unggulan</h6>
                                                </span>
                                            </div>
                                            <a href="/koperasi/product/{{ $product->slug }}"
                                                class="btn mt-3 col-12">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- @else
                            <div class="col-12 m-4 d-flex">
                                <h3 class="m-auto">UMKM ini Belum Memiliki Produk Unggulan :)</h3>
                            </div> --}}
                    @endif

                </div>

                <div class="row prod-container col-12">
                    <div class="row jdl p-0">
                        <div class="col-6 justify-conten-right">
                            <h5>Product Terbaru</h5>
                        </div>
                    </div>
                    @if ($koperasi->product->count())
                        @foreach ($koperasi->product as $product)
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
                                    <h4>{{ Str::limit($product->name, 15, '...') }}</h4>
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
                                        <a href="/koperasi/product/{{ $product->slug }}"
                                            class="btn mt-3 col-12">Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1 class="text-center">Koperasi ini Belum Memiliki Produk :(</h1>
                    @endif
                </div>

            </div>

            </div>

        </section>
    </main>
@endsection
