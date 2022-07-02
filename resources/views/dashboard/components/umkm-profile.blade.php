<section id="profile">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UMKM/</span> Edit profile</h4>
    <div class="row g-4 mb-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="row">
                    <div class="col-4 py-5 px-5 pl-5">
                        @if ($umkm->image)
                            <img src="{{ asset('storage/' . $umkm->image) }}"
                                class="img-pr h-auto rounded-circle img-fluid">
                        @else
                            <img src="/img/elements/2.jpg" class="img-pr h-auto rounded-circle img-fluid">
                        @endif
                    </div>
                    <div class="col-8 py-5 px-5 pl-5">
                        <h3>{{ $umkm->name }}</h3>
                        <h6>{!! $umkm->description !!}</h6>
                        <div class="row">
                            <div class="col-4">
                                <h6><i class="bx bx-barcode"></i> : 8008808056</h6>
                            </div>
                            <div class="col-8">
                                <h6><i class="bx bx-phone"></i> : {{ $umkm->phonenumber }}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h6><i class="bx bx-buildings"></i> : Bandar Lampung</h6>
                            </div>
                            <div class="col-8">
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
                    <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Produk Unggulan
                </a>
            </div>
        </div>
        @if ($umkm->product->where('isUnggulan')->count())
            @foreach ($umkm->product->where('isUnggulan') as $product)
                <div class="col-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="/img/elements/2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">nama Product</h5>
                            <p class="card-text">Total jumlah</p>
                            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck2"><i class='bx bxl-product-hunt'></i>
                                Unggulan</label>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h4 class="text-center">Belum ada product unggulan :)</h4>
        @endif
    </div>
</section>
