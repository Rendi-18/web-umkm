<!-- ======= Team Section ======= -->
<section id="employee" class="employee section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Pegawai</h2>
            <p>Data Pegawai Dinas Koperasi UMKM Lampung</p>
        </div>

        <div class="row">
            @foreach ($pegawais as $pegawai)
                <div class="col-lg-6 my-lg-2 my-1 px-2">
                    <div class="member align-items-start p-2 p-lg-4 d-flex" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-4 d-flex">
                            <div class="m-auto pic">
                                @if ($pegawai->image)
                                    <img src="{{ asset('storage/' . $pegawai->image) }}" class="img-fluid"
                                        alt="">
                                @else
                                    <img src="img\temp\user-temp.png" class="img-fluid" alt="">
                                @endif
                            </div>

                        </div>
                        <div class="col-6 ps-lg-2 member-info">
                            <h5>{{ $pegawai->name }}</h5>
                            <p>{{ $pegawai->classification }}</p>
                            <span>{{ $pegawai->position }}</span>
                            <p>{{ $pegawai->description }}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Team Section -->
