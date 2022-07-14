<!-- ======= Search Section ======= -->
<section id="search" class="why-us section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title {{ Request::is('search') ? 'd-none' : '' }}">
            <h2>Search</h2>
        </div>
        <div class="row-content">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p>Temukan UMKM & Unit Koperasi Di sekitar anda</p>

                    <ul class="list-group">
                        @if (Request::is('search/umkm*'))
                            <li class="list-group-item active" id="umkmSearch">UMKM</li>
                            <li class="list-group-item" id="koperasiSearch">Koperasi</li>
                        @elseif (Request::is('search/koperasi*'))
                            <li class="list-group-item" id="umkmSearch">UMKM</li>
                            <li class="list-group-item active" id="koperasiSearch">Koperasi</li>
                        @else
                            <li class="list-group-item active" id="umkmSearch">UMKM</li>
                            <li class="list-group-item" id="koperasiSearch">Koperasi</li>
                        @endif

                    </ul>


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
                </div>
            </div>
        </div>
    </div>
</section>
