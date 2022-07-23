<section id="agenda" class="employee section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Agenda Dinas</h2>
        </div>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Slides -->
                @foreach ($agendas as $agenda)
                    <a class="swiper-slide p-2 my-2" href="/agenda/{{ $agenda->id }}">
                        <div class=" my-4">
                            <div class="member d-flex align-items-start p-4" data-aos="zoom-in" data-aos-delay="100">
                                <div class="pic rounded">
                                    @if ($agenda->image)
                                        <img src="{{ asset('storage/' . $agenda->image) }}" class="img-fluid"
                                            alt="">
                                    @else
                                        <img src="/img/temp/agenda-temp.png" class="img-fluid" alt="">
                                    @endif
                                </div>
                                <div class="member-info col-lg px-2 d-block d-sm-none ">
                                    <h4>{{ $agenda->name }}</h4>
                                    <small>{{ date('d F Y', strtotime($agenda->date)) }}</small>
                                    <span>{{ $agenda->location }}</span>
                                </div>
                                <div class="member-info col-lg px-2 d-none d-lg-block">
                                    <h4>{{ $agenda->name }}</h4>
                                    <small>{{ date('d F Y', strtotime($agenda->date)) }}</small>
                                    <span>{{ $agenda->location }}</span>
                                    {!! Str::limit($agenda->content, 110) !!}
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>
    </div>
    </div>

</section>
