<!-- ======= card-um Section ======= -->
<section id="card-um" class="card-um">
    <div class="container" data-aos="fade-up">

        <div class="section-title p-0">
            <h2>UMKM & KOPERASI</h2>
        </div>
        <div id="search" class="row-content py-3">
            <div class="row justify-content-center">
                <div class="col-lg-8 row">
                    <p class="text-center">Temukan UMKM & Unit Koperasi Di sekitar anda</p>
                    <div id="input-g">
                        @if (Request::is('search/umkm*'))
                            <form action="/search/umkm" method="get" id="formSearch" class="row p-0 input-group">
                                <div role="group" aria-label="Basic radio toggle button group"
                                    class="col-3 row p-0 m-initial">
                                    @if (Request::is('search/umkm*'))
                                        <label
                                            class="x btn-outline-primary shad-none col-6 itm-s d-flex active"id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-6 d-flex" for="koperasiSearch"
                                            id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @elseif (Request::is('search/koperasi*'))
                                        <label
                                            class="x btn-outline-primary shad-none col-6 itm-s d-flex "id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-6 d-flex active"
                                            for="koperasiSearch" id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @else
                                        <label
                                            class="x btn-outline-primary shad-none col-6 itm-s d-flex "id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-6 d-flex" for="koperasiSearch"
                                            id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @endif
                                </div>
                                <input type="text" class="col-7 form-control shad-none">
                                <button class="col-2 form-control shad-none" type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        @elseif (Request::is('search/koperasi*'))
                            <form action="/search/koperasi" method="get" id="formSearch" class="row p-0 input-group">
                                <div role="group" aria-label="Basic radio toggle button group"
                                    class="col-3 row p-0 m-initial">
                                    @if (Request::is('search/umkm*'))
                                        <label
                                            class="x btn-outline-primary shad-none col-6 itm-s d-flex active"id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-6 d-flex" for="koperasiSearch"
                                            id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @elseif (Request::is('search/koperasi*'))
                                        <label
                                            class="x btn-outline-primary shad-none col-6 itm-s d-flex "id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-6 d-flex active"
                                            for="koperasiSearch" id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @else
                                        <label
                                            class="x btn-outline-primary shad-none col-6 itm-s d-flex "id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-6 d-flex" for="koperasiSearch"
                                            id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @endif
                                </div>
                                <input type="text" class="col-7 form-control shad-none">
                                <button class="col-2 form-control shad-none" type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        @else
                            <form action="/search/umkm" method="get" id="formSearch" class="row p-0 input-group">
                                <div role="group" aria-label="Basic radio toggle button group"
                                    class="col-3 row p-0 m-initial">
                                    @if (Request::is('search/umkm*'))
                                        <label
                                            class="x btn-outline-primary shad-none col-6 itm-s d-flex active"id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-6 d-flex" for="koperasiSearch"
                                            id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @elseif (Request::is('search/koperasi*'))
                                        <label
                                            class="x btn-outline-primary shad-none col-6 itm-s d-flex "id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-6 d-flex active"
                                            for="koperasiSearch" id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @else
                                        <label
                                            class="x btn-outline-primary shad-none col-6 itm-s d-flex "id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-6 d-flex"
                                            for="koperasiSearch" id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @endif
                                </div>
                                <input type="text" class="col-7 form-control shad-none">
                                <button class="col-2 form-control shad-none" type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <ul id="card-um-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-umkm">UMKM</li>
            <li data-filter=".filter-koperasi">KOPERASI</li>
        </ul>

        <div class="row card-um-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($umkms as $umkm)
                <div class="col-lg-3 col-6 card-um-item filter-umkm">
                    <div class="card-um-img shadow-sm">
                        @if ($umkm->image)
                            <img src="{{ asset('storage/' . $umkm->image) }}" alt="user-avatar" class="img-fluid">
                        @else
                            <img src="/img/temp/store-temp.png" alt="user-avatar" class="img-fluid">
                        @endif
                    </div>

                    <div class="card-um-info">
                        <h5>{{ Str::limit($umkm->name, 20) }}</h5>

                        <a href="/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                            class="card-um-lightbox preview-link" title="{{ $umkm->description }}"><i
                                class="bx bx-plus"></i></a>

                        <a href="/umkm/{{ $umkm->id }}" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
            @endforeach
            @foreach ($koperasis as $koperasi)
                <div class="col-lg-3 col-6 card-um-item filter-koperasi">
                    <div class="card-um-img shadow-sm">
                        @if ($koperasi->image)
                            <img src="{{ asset('storage/' . $koperasi->image) }}" alt="user-avatar"
                                class="img-fluid">
                        @else
                            <img src="/img/temp/store-temp.png" alt="user-avatar" class="img-fluid">
                        @endif
                    </div>
                    <div class="card-um-info">
                        <h5>{{ Str::limit($koperasi->name, 20) }}</h5>
                        <a href="/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                            class="card-um-lightbox preview-link" title="{{ $koperasi->description }}"><i
                                class="bx bx-plus"></i></a>
                        <a href="/koperasi/{{ $koperasi->id }}" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section><!-- End Portfolio Section -->
