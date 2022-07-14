<!-- ======= Search Section ======= -->
<section id="search" class="why-us section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title {{ Request::is('search') ? 'd-none' : '' }}">
            <h2>Search</h2>
        </div>
        <div class="row-content">
            <div class="row justify-content-center">
                <div class="col-lg-8 row">
                    <p>Temukan UMKM & Unit Koperasi Di sekitar anda</p>
                    <div id="input-g"class="input-group">
                        @if (Request::is('search/umkm*'))
                            <form action="/search/umkm" method="get" id="formSearch" class="row p-0 input-group">
                                <select class="form-select input-no-border col-3 shad-none"
                                    placeholder="Masukkan Nama UMKM/Unit Koperasi" name="search"
                                    value="{{ request('search') }}" id="search">
                                    <option>Default select</option>
                                    @if (Request::is('search/umkm*'))
                                        <option class="list-group-item active dropdown-item d-flex align-items-center"
                                            id="umkmSearch">UMKM</option>
                                        <option class="list-group-item dropdown-item d-flex align-items-center"
                                            id="koperasiSearch">
                                            Koperasi</option>
                                    @elseif (Request::is('search/koperasi*'))
                                        <option class="list-group-item dropdown-item d-flex align-items-center"
                                            id="umkmSearch">
                                            UMKM</option>
                                        <option class="list-group-item active dropdown-item d-flex align-items-center"
                                            id="koperasiSearch">Koperasi</option>
                                    @else
                                        <option class="list-group-item active dropdown-item d-flex align-items-center"
                                            id="umkmSearch">UMKM</option>
                                        <option class="list-group-item dropdown-item d-flex align-items-center"
                                            id="koperasiSearch">
                                            Koperasi</option>
                                    @endif
                                </select>
                                <input type="text" class="col-6 form-control shad-none">
                                <button class="col-3 form-control shad-none" type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        @elseif (Request::is('search/koperasi*'))
                            <form action="/search/koperasi" method="get" id="formSearch" class="row p-0 input-group">
                                <select class="form-select input-no-border col-3 shad-none"
                                    placeholder="Masukkan Nama UMKM/Unit Koperasi" name="search"
                                    value="{{ request('search') }}" id="search">
                                    <option>Default select</option>
                                    @if (Request::is('search/umkm*'))
                                        <option class="list-group-item active dropdown-item d-flex align-items-center"
                                            id="umkmSearch">UMKM</option>
                                        <option class="list-group-item dropdown-item d-flex align-items-center"
                                            id="koperasiSearch">
                                            Koperasi</option>
                                    @elseif (Request::is('search/koperasi*'))
                                        <option class="list-group-item dropdown-item d-flex align-items-center"
                                            id="umkmSearch">
                                            UMKM</option>
                                        <option class="list-group-item active dropdown-item d-flex align-items-center"
                                            id="koperasiSearch">Koperasi</option>
                                    @else
                                        <option class="list-group-item active dropdown-item d-flex align-items-center"
                                            id="umkmSearch">UMKM</option>
                                        <option class="list-group-item dropdown-item d-flex align-items-center"
                                            id="koperasiSearch">
                                            Koperasi</option>
                                    @endif
                                </select>
                                <input type="text" class="col-6 form-control shad-none">
                                <button class="col-3 form-control shad-none" type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        @else
                            <form action="/search/umkm" method="get" id="formSearch" class="row p-0 input-group">
                                <select class="form-select input-no-border col-3 shad-none"
                                    placeholder="Masukkan Nama UMKM/Unit Koperasi" name="search"
                                    value="{{ request('search') }}" id="search">
                                    <option>Default select</option>
                                    @if (Request::is('search/umkm*'))
                                        <option class="list-group-item active dropdown-item d-flex align-items-center"
                                            id="umkmSearch">UMKM</option>
                                        <option class="list-group-item dropdown-item d-flex align-items-center"
                                            id="koperasiSearch">
                                            Koperasi</option>
                                    @elseif (Request::is('search/koperasi*'))
                                        <option class="list-group-item dropdown-item d-flex align-items-center"
                                            id="umkmSearch">
                                            UMKM</option>
                                        <option class="list-group-item active dropdown-item d-flex align-items-center"
                                            id="koperasiSearch">Koperasi</option>
                                    @else
                                        <option class="list-group-item active dropdown-item d-flex align-items-center"
                                            id="umkmSearch">UMKM</option>
                                        <option class="list-group-item dropdown-item d-flex align-items-center"
                                            id="koperasiSearch">
                                            Koperasi</option>
                                    @endif
                                </select>
                                <input type="text" class="col-6 form-control shad-none">
                                <button class="col-3 form-control shad-none" type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        @endif
                    </div>

                    {{-- <div class="col-lg-9 input-group justify-content-between">
                        <select id="defaultSelect" class="form-select input-no-border">
                            <option>Default select</option>
                            @if (Request::is('search/umkm*'))
                                <option class="list-group-item active dropdown-item d-flex align-items-center"
                                    id="umkmSearch">UMKM</option>
                                <option class="list-group-item dropdown-item d-flex align-items-center"
                                    id="koperasiSearch">
                                    Koperasi</option>
                            @elseif (Request::is('search/koperasi*'))
                                <option class="list-group-item dropdown-item d-flex align-items-center" id="umkmSearch">
                                    UMKM</option>
                                <option class="list-group-item active dropdown-item d-flex align-items-center"
                                    id="koperasiSearch">Koperasi</option>
                            @else
                                <option class="list-group-item active dropdown-item d-flex align-items-center"
                                    id="umkmSearch">UMKM</option>
                                <option class="list-group-item dropdown-item d-flex align-items-center"
                                    id="koperasiSearch">
                                    Koperasi</option>
                            @endif
                        </select>
                        @if (Request::is('search/umkm*'))
                            <form action="/search/umkm" method="get" id="formSearch" class="p-0">
                                <div class="input-group justify-content-between">
                                    <input class="input-no-border m-2" type="text"
                                        placeholder="Masukkan Nama UMKM/Unit Koperasi" name="search"
                                        value="{{ request('search') }}" id="search">
                                    <button class="btn btn-primary rounded-pill shadow-sm" type="submit"
                                        id="button-addon2"><i class="bx bx-search"></i></button>
                                </div>
                            </form>
                        @elseif (Request::is('search/koperasi*'))
                            <form action="/search/koperasi" method="get" id="formSearch" class="p-0">
                                <div class="input-group justify-content-between">
                                    <input class="input-no-border m-2" type="text"
                                        placeholder="Masukkan Nama UMKM/Unit Koperasi" name="search"
                                        value="{{ request('search') }}" id="search">
                                    <button class="btn btn-primary rounded-pill shadow-sm" type="submit"
                                        id="button-addon2"><i class="bx bx-search"></i></button>
                                </div>
                            </form>
                        @else
                            <form action="/search/umkm" method="get" id="formSearch" class="p-0">
                                <div class="input-group justify-content-between">
                                    <input class="input-no-border m-2" type="text"
                                        placeholder="Masukkan Nama UMKM/Unit Koperasi" name="search"
                                        value="{{ request('search') }}" id="search">
                                    <button class="btn btn-primary rounded-pill shadow-sm" type="submit"
                                        id="button-addon2"><i class="bx bx-search"></i></button>
                                </div>
                            </form>
                        @endif
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
