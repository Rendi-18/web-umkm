@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <section id="detail-pesan">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title">Pesan Pengunjung Website</h4>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h6 class="mb-1">Nama Pengirim</h6>
                                <p class="card-text">{{ $pesan->name }}</p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="mb-1">Email Pengirim</h6>
                                <p class="card-text">{{ $pesan->email }}</p>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="mb-1">Subject</h6>
                            <p class="card-text">{{ $pesan->subject }}</p>
                        </div>

                        <div class="mb-4">
                            <h6 class="mb-1">Isi Pesan</h6>
                            <p class="card-text">{{ $pesan->message }}</p>
                        </div>
                        <div class="mb-4">
                            <a class="btn btn-primary"
                                href="https://mail.google.com/mail/u/axtomy9@gmail.com/?view=cm&to={{ $pesan->email }}&su=SUBJECT&body=BODY"
                                target="_blank"><span>
                                    <i class="bx bx-mail-send "></i>&nbsp; Balas pesan
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
