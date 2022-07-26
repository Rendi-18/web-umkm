<!-- ======= card-um Section ======= -->
<section id="card-um" class="card-um">
    <div class="container" data-aos="fade-up">
        <div class="section-title p-0">
            <h2>UMKM</h2>
        </div>
        <div id="search" class="row-content py-3">
            <div class="row justify-content-center">
                <div class="col-lg-8 row">
                    <p class="text-center">Temukan Unit UMKM Di sekitar anda</p>
                    <div id="input-g">
                        <form action="/search/umkm" method="get" id="formSearch" class="row p-0 input-group">
                            <input type="text" class="col-10 form-control shad-none" name="search"
                                value="{{ request('search') }}">
                            <button class="col-2 form-control shad-none" type="submit">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                        <h4>{{ Str::limit($umkm->name, 15) }}</h4>
                        @if ($umkm->image)
                            <a href="{{ asset('storage/' . $umkm->image) }}" data-gallery="portfolioGallery"
                                class="card-um-lightbox preview-link" title="{{ $umkm->description }}"><i
                                    class="bx bx-detail"></i></a>
                        @else
                            <a href="/img/temp/store-temp.png" data-gallery="portfolioGallery"
                                class="card-um-lightbox preview-link" title="{{ $umkm->description }}"><i
                                    class="bx bx-detail"></i></a>
                        @endif
                        <a href="/umkm/{{ $umkm->slug }}" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Portfolio Section -->
