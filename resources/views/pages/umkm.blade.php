@extends('layouts.app')

@section('content')
    <main id="main">
        <section id="identity" class="identity">
            <div class="container">
                <div class="row">
                    <div class="image-container col-6">
                        <img class="img-fluid" src="/img/portfolio/portfolio-2.jpg" alt="">
                    </div>
                    <div class="describ col-6">
                        <h2>{{ $umkm->name }}</h2>
                        <h4>{{ $umkm->category->category }}</h4>
                        <p>{{ $umkm->description }}</p>
                        <span></span>


                    </div>
                </div>



            </div>
        </section>
        <section id="product">

        </section>


    </main>
@endsection
