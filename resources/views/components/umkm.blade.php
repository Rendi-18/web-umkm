<!-- ======= card-um Section ======= -->
<section id="card-um" class="card-um">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>UMKM & KOPERASI</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur, rerum voluptatibus odit iste ut
                voluptate earum, modi nemo perferendis soluta mollitia, error quasi debitis veritatis voluptatem sit cum
                fuga tempore?</p>
        </div>

        <ul id="card-um-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-umkm">UMKM</li>
            <li data-filter=".filter-koperasi">KOPERASI</li>
        </ul>

        <div class="row card-um-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($umkms as $umkm)
                <div class="col-lg-3 col-6 card-um-item filter-umkm">
                    <div class="card-um-img"><img src="/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="card-um-info">
                        <h4>{{ $umkm->name }}</h4>
                        {{-- <p>{{ $umkm->category->category }}</p> --}}
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
                    <div class="card-um-img"><img src="/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="card-um-info">
                        <h4>{{ $koperasi->name }}</h4>
                        {{-- <p>{{ $koperasi->category->category }}</p> --}}
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
