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
                    <form action="/search" method="get" class="p-0">
                        <div class="input-group justify-content-between">
                            <input class="input-no-border m-2" type="text"
                                placeholder="Masukkan Nama UMKM/Unit Koperasi" name="search"
                                value="{{ request('search') }}" id="search">
                            <button class="btn btn-primary rounded-pill shadow-sm" type="submit" id="button-addon2"><i
                                    class="bx bx-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
