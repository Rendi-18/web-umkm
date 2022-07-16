@extends('layouts.app')
@section('content')
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Search</li>
                    <li>Agenda</li>
                </ol>
                <h2>Search</h2>
                <div id="search-p">
                    <!-- ======= Search Section ======= -->
                    <section id="search" class="why-us section-bg">
                        <div class="container" data-aos="fade-up">
                            <div
                                class="section-title {{ Request::is('search*') ? 'd-none' : '' }}{{ Request::is('agenda*') ? 'd-none' : '' }}">
                                <h2>Search</h2>
                            </div>
                            <div class="row-content">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 row">
                                        <p>Cari Agenda Dinas</p>
                                        <div id="input-g"class="input-group">
                                            <form action="/search/umkm" method="get" id="formSearch"
                                                class="row p-0 input-group">
                                                <input type="text" class="col-6 form-control shad-none" value="#"
                                                    name="search">
                                                <button
                                                    class="col-3
                                    form-control shad-none"
                                                    type="submit">
                                                    <i class="bx bx-search"></i>
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

                <div id="card-um" class="card-um">
                </div>
            </div>
        </section>
    </main>
@endsection
