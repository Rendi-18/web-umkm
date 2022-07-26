{{-- @extends('layouts.app')

@section('content')
    <main id="main">
        <section id="identity" class="identity">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 position-relative">
                        <div class="top-50 mb-2 mb-lg-0 d-flex">
                            <div class="image-identity m-auto">
                                @if ($koperasi->image)
                                    <img src="{{ asset('storage/' . $koperasi->image) }}" alt="user-avatar" class="img-fluid"
                                        id="uploadedAvatar">
                                @else
                                    <img src="/img/temp/store-temp.png" alt="user-avatar" class="img-fluid"
                                        id="uploadedAvatar">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="describ col-lg-8 col-12 ">
                        <h2>{{ $koperasi->name }}</h2>
                        <p>{!! $koperasi->description !!}</p>
                        <div class="row">
                            <span class="col-lg-4 col-12 my-2 p-0">
                                <i class="bi bi-upc-scan"></i> NIK : <span class="val">{{ $koperasi->nik }}</span>
                            </span>
                            <span class="col-lg-8 col-12 my-2 p-0">
                                <i class="bx ri-service-line"></i> Koperasi <span
                                    class="val">{{ $koperasi->categoryKoperasi->category }}</span>
                            </span>
                            <span class="col-lg-4 col-12 my-2 p-0"><i class="bi bi-person"></i> Pemilik : <span
                                    class="val">{{ $koperasi->user->name }}</span>
                            </span>
                            <span class="col-lg-8 col-12 my-2 p-0"><i class="bi bi-telephone"></i> No HP :
                                <span class="val">{{ $koperasi->user->phonenumber }}</span></span>

                            <span class="col-lg-4 col-12 my-2 p-0"><i class="bx bx-group"></i> Member :
                                <span class="val">
                                    @if ($koperasi->member)
                                        {{ $koperasi->member }}
                                    @else
                                        -
                                    @endif

                                </span>
                            </span>
                            <span class="col-lg-8 col-12 my-2 p-0"><i class="bx bxs-group"></i> Karyawan :
                                <span class="val">
                                    @if ($koperasi->employee)
                                        {{ $koperasi->employee }}
                                    @else
                                        -
                                    @endif

                                </span>
                            </span>
                            <span class="col-12 my-2 p-0"><i class="bi bi-geo-alt"></i> Alamat: <span
                                    class="val">{{ $koperasi->address }}</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="product" class="product">

            <div class="container d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="row prod-container col-12 m-auto">
                    <div class="row jdl p-0">
                        <div class="col-lg-6 col-12 justify-conten-right">
                            <h5>Layanan Koperasi</h5>
                        </div>
                    </div>
                    @if ($koperasi->jasa->count())
                        @foreach ($koperasi->jasa as $service)
                            <div class="col-lg-3 col-6 d-flex align-items-stretch my-4  rounded" data-aos="zoom-in"
                                data-aos-delay="100">

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
                                        <a href="/koperasi/jasa/{{ $service->slug }}" class="btn mt-3 col-12">Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1 class="text-center">Not Found :(</h1>
                    @endif
                </div>
            </div>

            @if ($koperasi->product->where('isUnggulan')->count())
                <div class="container d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="row prod-container col-12 m-auto">
                        <div class="row">
                            <div class="col-6 justify-conten-start">
                                <h5>Product Unggulan</h5>
                            </div>

                        </div>

                        @foreach ($koperasi->product->where('isUnggulan') as $product)
                            <div class="col-lg-3 col-6 d-flex align-items-stretch my-4 mt-xl-0 rounded" data-aos="zoom-in"
                                data-aos-delay="100">

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

                    </div>
                </div>
            @endif

            <div class="container d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="row prod-container col-12 m-auto">
                    <div class="row jdl p-0">
                        <div class="col-6 justify-conten-right">
                            <h5>Product Terbaru</h5>
                        </div>
                    </div>
                    @if ($koperasi->product->count())
                        @foreach ($koperasi->product as $product)
                            <div class="col-lg-3 col-6 d-flex align-items-stretch my-4 mt-xl-0 rounded" data-aos="zoom-in"
                                data-aos-delay="100">

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
                                            <span class="d-none d-lg-block">&nbsp;Harga &nbsp;</span>
                                            <span class="my-auto">: @currency($product->price)</span>
                                        </span>
                                        <span class="col-12 d-flex">
                                            <i class='bx bx-cuboid bx-burst my-auto'></i>
                                            <span class="d-none d-lg-block">&nbsp;Berat &nbsp;</span>
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
@endsection --}}
