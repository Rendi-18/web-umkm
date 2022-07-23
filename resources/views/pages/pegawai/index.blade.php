@extends('layouts.app')
@section('content')
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Pegawai</li>
                </ol>
                <h2>Data Pegawai Dinas Koperasi UMKM Lampung</h2>

                <section id="employee" class="employee  py-0">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            @foreach ($pegawais as $pegawai)
                                <div class="col-lg-6 my-lg-2 my-1 px-2">
                                    <div class="member align-items-start p-2 p-lg-4 d-flex" data-aos="zoom-in"
                                        data-aos-delay="100">
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
                    <div class="d-flex justify-content-center pt-3">
                        {{ $pegawais->links('components.paginator') }}
                    </div>
                </section>
        </section>
    </main>
@endsection
