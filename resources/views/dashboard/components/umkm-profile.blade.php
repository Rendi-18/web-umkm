<section id="profile">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UMKM/</span> Profile</h4>
    <div class="row g-4 mb-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="row">
                    <div class="col-lg-4 p-lg-5 pl-lg-5 p-xs-2 d-flex">
                        <div class="img-container img-container-kp rounded-circle m-auto">
                            @if ($umkm->image)
                                <img src="{{ asset('storage/' . $umkm->image) }}" class="img-pr img-fluid img-fit">
                            @else
                                <img src="/img/temp/store-temp.png" class="img-pr img-fluid img-fit">
                            @endif
                        </div>

                    </div>
                    <div class="col-lg-8 py-5 px-5 pl-5">
                        <h3>{{ $umkm->name }}</h3>
                        <div class="row">
                            <div class="col-12">
                                <h6>{!! Str::limit($umkm->description, 200) !!}</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-6">
                                <h6><i class="bx bx-barcode"></i> : {{ $umkm->nib }}</h6>
                            </div>
                            <div class="col-lg-8 col-6">
                                <h6><i class="bx bx-phone"></i> : {{ $umkm->phonenumber }}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-6">
                                <h6><i class="bx bx-buildings"></i> : {{ $umkm->city }}</h6>
                            </div>
                            <div class="col-lg-8 col-6">
                                <h6><i class="bx bx-map-alt"></i> : {{ $umkm->address }}</h6>
                            </div>
                        </div>
                        <hr>
                        <a class="btn rounded-pill btn-primary"
                            href="/dashboard/umkm/{{ $umkm->id }}/umkm-profile/edit">
                            <span class="tf-icons bx bx-edit"></span>&nbsp; Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 mb-5">
        <div class="row">
            <div class="col-6">
                <h5 class="fw-bold">Produk Unggulan</h5>
            </div>
            <div class="col-6 d-flex">
                <a href="/dashboard/umkm/{{ $umkm->id }}/umkm-product" class="btn btn-primary ms-auto">
                    <i class="tf-icons bx bx-plus d-lg-none ">
                    </i>
                    <span class="d-none d-sm-block">
                        <i class="tf-icons bx bx-plus">
                        </i>&nbsp; Tambah Product Unggulan
                    </span>
                </a>
            </div>
        </div>
        @if ($umkm->product->where('isUnggulan')->count())
            @foreach ($umkm->product->where('isUnggulan') as $product)
                <div class="col-lg-3 col-6 mb-3">
                    <div class="card h-100">
                        <div class="img-container img-container-prd card-img-top">
                            @if ($product->image)
                                <img class="" src="{{ asset('storage/' . $product->image) }}"
                                    alt="Card image cap">
                            @else
                                <img class="card-img-top" src="/img/temp/product-temp.png" alt="Card image cap">
                            @endif
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text"><span class="text-success"><i class="bx bx-money"></i>
                                </span>@currency($product->price)</p>
                            <form action="/dashboard/umkm-product/{{ $product->id }}/unggulan" method="post">
                                @method('put')
                                @csrf
                                <input type="hidden" class="btn-check" id="btncheck2" value="0" name="isUnggulan"
                                    autocomplete="off">
                                <button class="btn btn-outline-primary" for="btncheck2"
                                    onclick="return confirm('Apa anda yakin?')"><i class='bx bx-star'></i>
                                    Hilangkan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h4 class="text-center">Belum ada product unggulan :)</h4>
        @endif
    </div>
</section>
