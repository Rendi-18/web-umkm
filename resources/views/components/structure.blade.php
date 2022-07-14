<!-- ======= Team Section ======= -->
<section id="employee" class="employee section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Pegawai</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            @foreach ($pegawais as $pegawai)
                <div class="col-lg-6 my-4">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pic">
                            @if ($pegawai->image)
                                <img src="{{ asset('storage/' . $pegawai->image) }}" class="img-fluid" alt="">
                            @else
                                <img src="img\portfolio\portfolio-9.jpg" class="img-fluid" alt="">
                            @endif
                        </div>
                        <div class="member-info">
                            <h4>{{ $pegawai->name }}</h4>
                            <span>{{ $pegawai->position }}</span>
                            <p>{{ $pegawai->classification }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section><!-- End Team Section -->
