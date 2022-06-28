<div class="row g-4 mb-5">
    @foreach (Auth::user()->umkm as $umkm)
        <div class="col-3">
            <div class="card h-100">
                <img class="card-img-top" src="/img/elements/2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $umkm->name }}</h5>
                    <p class="card-text">{{ $umkm->product->count() }}</p>
                </div>
            </div>
        </div>
    @endforeach


</div>