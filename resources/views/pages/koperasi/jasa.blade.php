{{-- @extends('layouts.app')

@section('content')
    <main id="main" class="h-100">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container h-100">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/koperasi/{{ $jasaKoperasi->koperasi->slug }}">Koperasi</a></li>
                    <li>Layanan</li>
                </ol>
                <h2>{{ $jasaKoperasi->koperasi->name }}</h2>
                <section id="identity" class="identity mt-0">
                    <div class="container">
                        <div class="row detail-prd">
                            <div class="col-lg-4 col-12 position-relative">
                                <div class="top-50 mb-2 mb-lg-0 d-flex">
                                    <div class="image-identity m-auto">
                                        @if ($jasaKoperasi->image)
                                            <img src="{{ asset('storage/' . $jasaKoperasi->image) }}" alt="user-avatar"
                                                class="img-fluid" id="uploadedAvatar">
                                        @else
                                            <img src="/img/temp/product-temp.png" alt="user-avatar" class="img-fluid"
                                                id="uploadedAvatar">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="describ col-lg-8 col-12">
                                <h2>{{ $jasaKoperasi->name }}</h2>

                                <div class="row">
                                    <span class="col-lg-4 col-12"><i class="bx bx-chart"></i> Layanan <span
                                            class="val">{{ $jasaKoperasi->service }}</span>
                                    </span>
                                    <span class="col-lg-8 col-12"><i class="bx bx-donate-heart"></i> Kebutuhan :
                                        <span class="val">{{ $jasaKoperasi->needs }}</span>
                                    </span>
                                </div>
                                <div class="row">
                                    @if ($jasaKoperasi->where('isUnggulan'))
                                        <span class="col-lg-4 col-12">
                                            <span class="val-g">
                                                <i class="bx bxs-star bx-tada"></i> <strong>Layanan Unggulan</strong>
                                            </span>
                                        </span>
                                    @endif
                                    <span class="col-lg-8 col-12">
                                        <i class="bi bi-telephone"></i>
                                        Hubungi Koperasi :
                                        <a href="tel:{{ $jasaKoperasi->koperasi->user->phonenumber }}"
                                            class="val">{{ $jasaKoperasi->koperasi->user->phonenumber }}</a>

                                    </span>
                                </div>
                                <h6>Deskripsi Layanan</h6>
                                <p>{!! $jasaKoperasi->description !!} </p>
                            </div>
                        </div>
                    </div>
                    <section id="product" class="product">
                        <div class="row prod-container col-12">
                            <div class="row jdl p-0">
                                <div class="col-lg-6 col-12 justify-conten-right">
                                    <h5>Layanan Lainnya</h5>
                                </div>
                            </div>
                            @foreach ($jasaKoperasi->koperasi->jasa as $service)
                                <div class="col-lg-3 col-6 d-flex align-items-stretch my-4 mt-xl-0 rounded"
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
                    </section>
                </section>
            </div>
        </section>
    </main>
@endsection --}}
