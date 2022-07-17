@extends('layouts.app')
@section('content')
    <main id="main" class="h-100">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container h-100">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/">UMKM</a></li>
                    <li>Produk</li>
                </ol>
                <h2>{{ $agenda->name }}</h2>
            </div>
        </section>
        <section id="dagendas">
            <div class="container">
                <div class="row">
                    <div>
                        <img src="img\portfolio\portfolio-3.jpg" class="img-fluid">
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
