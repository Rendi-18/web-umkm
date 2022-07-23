<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Hubungi Kami</h2>

        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <a href="{{ $website[0]->map }}" target="_blank">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>{{ $website[0]->address }}</p>
                        </a>
                    </div>
                    <div class="email">
                        <a href="https://mail.google.com/mail/u/axtomy9@gmail.com/?view=cm&to={{ $website[0]->email }}&su=SUBJECT&body=BODY"
                            target="_blank">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{ $website[0]->email }}</p>
                        </a>

                    </div>

                    <div class="phone">
                        <a href="tel:{{ $website[0]->phonenumber }}">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>{{ $website[0]->phonenumber }}</p>
                        </a>

                    </div>

                    <iframe src="{{ $website[0]->iframe }}" frameborder="0"
                        style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>


                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

                <form action="/" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name"
                                class="form-control @error('name') is-invalid @enderror" id="name" required>
                            @error('name')
                                <div class="invalid-feedback text-light">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror""
                                name="email" id="email" required>
                            @error('email')
                                <div class="invalid-feedback text-light">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror""
                            name="subject" id="subject" required>
                        @error('subject')
                            <div class="invalid-feedback text-light">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control @error('message') is-invalid @enderror"" name="message" rows="10" required></textarea>
                        @error('message')
                            <div class="invalid-feedback text-light">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>

    </div>
</section><!-- End Contact Section -->
