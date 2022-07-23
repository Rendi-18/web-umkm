<!-- ======= Search Section ======= -->
<section id="search" class="why-us section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title {{ Request::is('search*') ? 'd-none' : '' }}">
            <h2>Search</h2>
        </div>
        <div class="row-content">
            <div class="row justify-content-center">
                <div class="col-lg-8 row">
                    <p>Temukan UMKM & Unit Koperasi Di sekitar anda</p>
                    <div id="input-g"class="input-group justify-content-center">
                        @if (Request::is('search/umkm*'))
                            <form action="/search/umkm" method="get" id="formSearch" class="row p-0 input-group">
                                <div role="group" aria-label="Basic radio toggle button group"
                                    class="col-3 row p-0 m-initial">
                                    @if (Request::is('search/umkm*'))
                                        <label
                                            class="x btn-outline-primary shad-none col-lg-6 col-12 itm-s d-flex active"id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-lg-6 col-12 itm-e d-flex"
                                            for="koperasiSearch" id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @elseif (Request::is('search/koperasi*'))
                                        <label
                                            class="x btn-outline-primary shad-none col-lg-6 col-12 itm-s d-flex "id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label
                                            class="x btn-outline-primary shad-none col-lg-6 col-12 itm-e d-flex active"
                                            for="koperasiSearch" id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @else
                                        <label
                                            class="x btn-outline-primary shad-none col-lg-6 col-12 itm-s d-flex "id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-lg-6 col-12 itm-e d-flex"
                                            for="koperasiSearch" id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @endif
                                </div>
                                <input type="text" class="col-6 form-control shad-none"
                                    value="{{ request('search') }}" name="search">
                                <button class="col-3
                                    form-control shad-none"
                                    type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        @elseif (Request::is('search/koperasi*'))
                            <form action="/search/koperasi" method="get" id="formSearch" class="row p-0 input-group">
                                <div role="group" aria-label="Basic radio toggle button group"
                                    class="col-3 row p-0 m-initial">
                                    @if (Request::is('search/umkm*'))
                                        <label
                                            class="x btn-outline-primary shad-none col-lg-6 col-12 itm-s d-flex active"id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-lg-6 col-12 itm-e d-flex"
                                            for="koperasiSearch" id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @elseif (Request::is('search/koperasi*'))
                                        <label
                                            class="x btn-outline-primary shad-none col-lg-6 col-12 itm-s d-flex "id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label
                                            class="x btn-outline-primary shad-none col-lg-6 col-12 itm-e d-flex active"
                                            for="koperasiSearch" id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @else
                                        <label
                                            class="x btn-outline-primary shad-none col-lg-6 col-12 itm-s d-flex "id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-lg-6 col-12 itm-e d-flex"
                                            for="koperasiSearch" id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @endif
                                </div>
                                <input type="text" class="col-6 form-control shad-none"
                                    value="{{ request('search') }}" name="search">
                                <button class="col-3 form-control shad-none" type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        @else
                            <form action="/search/umkm" method="get" id="formSearch" class="row p-0 input-group">
                                <div role="group" aria-label="Basic radio toggle button group"
                                    class="col-3 row p-0 m-initial">
                                    @if (Request::is('search/umkm*'))
                                        <label
                                            class="x btn-outline-primary shad-none col-lg-6 col-12 itm-s d-flex active"id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-lg-6 col-12 itm-e d-flex"
                                            for="koperasiSearch" id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @elseif (Request::is('search/koperasi*'))
                                        <label
                                            class="x btn-outline-primary shad-none col-lg-6 col-12  itm-s d-flex "id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label
                                            class="x btn-outline-primary shad-none col-lg-6 col-12 itm-e d-flex active"
                                            for="koperasiSearch" id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @else
                                        <label
                                            class="x btn-outline-primary shad-none col-lg-6 col-12 itm-s d-flex active"id="umkmSearch"
                                            for="umkmSearch">
                                            <span class="m-auto">UMKM</span>
                                        </label>
                                        <label class="x btn-outline-primary shad-none col-lg-6 col-12 itm-e d-flex"
                                            for="koperasiSearch" id="koperasiSearch">
                                            <span class="m-auto">Koperasi</span>
                                        </label>
                                    @endif
                                </div>
                                <input type="text" class="col-6 form-control shad-none"
                                    value="{{ request('search') }}" name="search">
                                <button class="col-3 form-control shad-none" type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
