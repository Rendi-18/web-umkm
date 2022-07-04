<section id="profile">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Koperasi/</span> Profile</h4>
    <div class="row g-4 mb-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="row">
                    <div class="col-4 py-5 px-5 pl-5">
                        <div class="img-container img-container-kp rounded-circle">
                            @if ($koperasi->image)
                                <img src="{{ asset('storage/' . $koperasi->image) }}" class="img-pr img-fluid img-fit">
                            @else
                                <img src="/img/portfolio/portfolio-7.jpg" class="img-pr img-fluid img-fit">
                            @endif
                        </div>

                    </div>
                    <div class="col-8 py-5 px-5 pl-5">
                        <h3>{{ $koperasi->name }}</h3>
                        <div class="row">
                            <div class="col-12 text-truncate">
                                <h6 class="text-truncate mw-100">{!! $koperasi->description !!}</h6>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-4">
                                <h6><i class="bx bx-barcode"></i> : {{ $koperasi->nik }}</h6>
                            </div>
                            <div class="col-8">
                                <a href="tel:{{ $koperasi->phonenumber }}">
                                    <h6><i class="bx bx-phone"></i> : {{ $koperasi->phonenumber }}</h6>
                                </a>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <h6><i class="bx bx-buildings"></i> : Bandar Lampung !!sampel</h6>
                            </div>
                            <div class="col-8">
                                <h6><i class="bx bx-map-alt"></i> : {{ $koperasi->address }}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h6 class="mb-1">Anggota</h6>
                                <h6><i class="bx bx-group"></i> : 50 Anggota !!sampel</h6>
                            </div>
                            <div class="col-8">
                                <h6 class="mb-1">Karyawan</h6>
                                <h6><i class="bx
                                    bxs-group"></i> : 12 Karyawan
                                    !!sampel</h6>
                            </div>
                        </div>
                        <hr>
                        <a class="btn rounded-pill btn-primary"
                            href="/dashboard/koperasi/{{ $koperasi->id }}/koperasi-profile/edit">
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
                <h5 class="fw-bold">Layanan Unggulan</h5>
            </div>
            <div class="col-6 d-flex">
                <a href="/dashboard/koperasi/{{ $koperasi->id }}/koperasi-jasa" class="btn btn-primary ms-auto">
                    <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Layanan Unggulan
                </a>
            </div>
        </div>
        @if ($koperasi->jasa->where('isUnggulan')->count())
            @foreach ($koperasi->jasa->where('isUnggulan') as $jasa)
                <div class="col-3">
                    <div class="card h-100">
                        <div class="img-container img-container-prd card-img-top">
                            @if ($jasa->image)
                                <img class="" src="{{ asset('storage/' . $jasa->image) }}" alt="Card image cap">
                            @else
                                <img class="card-img-top" src="/img/portfolio/portfolio-7.jpg" alt="Card image cap">
                            @endif
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $jasa->name }}</h5>
                            <p class="card-text"><span class="text-success"><i class="bx bx-money"></i>
                                </span>{{ $jasa->price }}</p>
                            <form action="/dashboard/koperasi-jasa/{{ $jasa->id }}/unggulan" method="post">
                                @method('put')
                                @csrf
                                <input type="hidden" class="btn-check" id="btncheck2" value="0" name="isUnggulan"
                                    autocomplete="off">
                                <button class="btn btn-outline-primary" for="btncheck2"
                                    onclick="return confirm('Apa anda yakin?')"><i class='bx bxl-product-hunt'></i>
                                    Hilangkan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h4 class="text-center">Belum ada Layanan unggulan :)</h4>
        @endif
    </div>
</section>
