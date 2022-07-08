<div class="text-divider">Social</div>
{{-- Social --}}
<div class="row mb-3">
    <label class="col-sm-2 col-form-label" for="facebook">Facebook</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook"
            placeholder="facebook" name="facebook" value="" required>
        {{-- @error('facebook')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-2 col-form-label" for="instagram">Instagram</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram"
            placeholder="@ " name="instagram" value="" required>
        {{-- @error('instagram')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-2 col-form-label" for="tweet">Tweet</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('tweet') is-invalid @enderror" id="tweet" placeholder="@ "
            name="tweet" value="" required>
        {{-- @error('tweet')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-2 col-form-label" for="whatsapp">whatsapp</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp"
            placeholder="+62" name="whatsapp" value="" required>
        {{-- @error('whatsapp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
    </div>
</div>
