<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1"
    aria-labelledby="exampleModalLabel{{ $product->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel{{ $product->id }}">{{ $product->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="user-avatar" class="img-fluid"
                                id="uploadedAvatar">
                        @else
                            <img src="/img/temp/product-temp.png" alt="user-avatar" class="img-fluid"
                                id="uploadedAvatar">
                        @endif
                        <span class="col-12 d-flex">
                            <i class="bx bx-money bx-burst my-auto"></i>
                            &nbsp;Harga &nbsp;
                            <span class="my-auto">: @currency($product->price)</span>
                        </span>
                        <span class="col-12 d-flex">
                            <i class='bx bx-cuboid bx-burst my-auto'></i>
                            &nbsp;Berat &nbsp;
                            <span class="my-auto">: {{ $product->weight }} Kg</span>
                        </span>
                    </div>
                    <div class="col-8">
                        <span>
                            <p>Deskripsi Produk</p>
                            {{ $product->description }}
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis itaque, velit saepe
                            consectetur rem tempora quia, dicta maiores numquam sed deleniti aliquid porro et? Ducimus
                            nisi
                            assumenda vero. Corporis, quo.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non saepe animi itaque nulla
                            accusamus,
                            nisi odio voluptas aspernatur, excepturi commodi, perspiciatis culpa repudiandae praesentium
                            rem
                            quis modi. Mollitia, aut repellendus!
                        </span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{-- <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalXlLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalXlLabel">Extra large modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
        </div>
    </div>
</div> --}}
