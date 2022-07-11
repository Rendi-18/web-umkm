<div class="row py-3 mb-2">
    <div class="col-6">
        <h4 class="fw-bold">Daftar UMKM & Koperasi</h4>
    </div>

</div>

<div class="row g-4 mb-5">
    @foreach (Auth::user()->umkm as $umkm)
        <div class="col-3">
            <div class="card h-100">
                <img class="card-img-top" src="/img/elements/2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $umkm->name }}</h5>
                    <h6>Bandar Lampung</h6>
                    <p class="card-text">{{ $umkm->product->count() }} Produk</p>
                </div>
            </div>
        </div>
    @endforeach


</div>
