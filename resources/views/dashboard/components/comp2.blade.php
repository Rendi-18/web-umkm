<div class="row py-3 mb-2">
    <div class="col-6">
        <h4 class="fw-bold">Daftar UMKM & Koperasi</h4>
    </div>

</div>

<div class="row g-4 mb-5">
    @foreach (Auth::user()->umkm as $umkm)
        <div class="col-lg-3 col-6">
            <div class="card h-100">
                <img class="card-img-top" src="/img/elements/2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $umkm->name }}</h5>
                    <h6>{{ $umkm->city }}</h6>
                    <p class="card-text">{{ $umkm->product->count() }} Produk</p>
                </div>
            </div>
        </div>
    @endforeach
    @foreach (Auth::user()->koperasi as $koperasi)
        <div class="col-lg-3 col-6">
            <div class="card h-100">
                <img class="card-img-top" src="/img/elements/2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $koperasi->name }}</h5>
                    <h6>{{ $koperasi->city }}</h6>
                    <p class="card-text">{{ $koperasi->product->count() }} Produk</p>
                </div>
            </div>
        </div>
    @endforeach


</div>
