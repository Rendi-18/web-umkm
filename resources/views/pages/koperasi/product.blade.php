{{-- @extends('layouts.app')

@section('content')
    <main id="main" class="h-100">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container h-100">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/koperasi/{{ $productKoperasi->koperasi->id }}">Koperasi</a></li>
                    <li>Produk</li>
                </ol>
                <h2>{{ $productKoperasi->koperasi->name }}</h2>
                <section id="identity" class="identity mt-0">
                    <div class="container">
                        <div class="row detail-prd">
                            <div class="col-lg-4 col-12 position-relative">
                                <div class="top-50 mb-2 mb-lg-0 d-flex">
                                    <div class="image-identity m-auto">
                                        @if ($productKoperasi->image)
                                            <img src="{{ asset('storage/' . $productKoperasi->image) }}" alt="user-avatar"
                                                class="img-fluid" id="uploadedAvatar">
                                        @else
                                            <img src="/img/temp/product-temp.png" alt="user-avatar" class="img-fluid"
                                                id="uploadedAvatar">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="describ col-lg-8 col-12">
                                <h2>{{ $productKoperasi->name }}</h2>

                                <div class="row">
                                    <span class="col-lg-4 col-12"><i class="bx bx-money"></i> Harga : <span
                                            class="val">Rp {{ $productKoperasi->price }}</span>
                                    </span>
                                    <span class="col-lg-8 col-12"><i class="bx bx-cuboid"></i> Berat :
                                        <span class="val">{{ $productKoperasi->weight }} Kg</span>
                                    </span>
                                </div>
                                <div class="row">
                                    @if ($productKoperasi->where('isUnggulan'))
                                        <span class="col-lg-4 col-12">
                                            <span class="val-g">
                                                <i class="bx bxs-star bx-tada"></i> <strong>Produk Unggulan</strong>
                                            </span>
                                        </span>
                                    @endif
                                    <span class="col-lg-8 col-12">
                                        <i class="bi bi-telephone"></i>
                                        Hubungi Penjual :
                                        <a href="tel:{{ $productKoperasi->koperasi->user->phonenumber }}"
                                            class="val">{{ $productKoperasi->koperasi->user->phonenumber }}</a>

                                    </span>
                                </div>
                                <h6 class="mt-2">Deskripsi Produk</h6>
                                <p>{!! $productKoperasi->description !!} </p>
                            </div>
                        </div>
                    </div>
                    <section id="product" class="product d-flex">
                        <div class="row prod-container col-12 m-auto">
                            <div class="row jdl p-0">
                                <div class="col-lg-6 col-12 justify-conten-right">
                                    <h5>Produk Lainnya</h5>
                                </div>
                            </div>
                            @foreach ($productKoperasi->koperasi->product as $product)
                                <div class="col-lg-3 col-6 d-flex align-items-stretch my-4 mt-xl-0 rounded"
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
                                                <span class="d-none d-lg-block">&nbsp;Harga :</span>&nbsp
                                                <span class="my-auto">@currency($product->price)</span>
                                            </span>
                                            <div class="col-12 my-2"></div>
                                            <span class="d-flex">
                                                <i class='bx bx-cuboid bx-burst my-auto'></i>
                                                <span class="d-none d-lg-block">&nbsp;Berat :</span> &nbsp
                                                <span class="my-auto">{{ $product->weight }} Kg</span>
                                            </span>
                                            <a href="/koperasi/product/{{ $product->slug }}"
                                                class="btn mt-3 col-12">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </section>
            </div>
        </section>
    </main>
@endsection --}}
