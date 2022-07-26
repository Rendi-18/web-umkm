<!-- ======= Search Section ======= -->
<section id="search" class="why-us section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title {{ Request::is('search*') ? 'd-none' : '' }}">
            <h2>Search</h2>
        </div>
        <div class="row-content">
            <div class="row justify-content-center">
                <div class="col-lg-8 row">
                    <p>Temukan Unit UMKM Di sekitar anda</p>
                    <div id="input-g"class="input-group justify-content-center">

                        <form action="/search/umkm" method="get" id="formSearch" class="row p-0 input-group">

                            <input type="text" class="col-10 form-control shad-none" value="{{ request('search') }}"
                                name="search">
                            <button class="col-2 form-control shad-none" type="submit">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
