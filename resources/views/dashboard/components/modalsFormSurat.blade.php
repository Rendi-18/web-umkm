<div class="col-lg-4 col-md-3">

    <div class="mt-3">
        <!-- Modal -->
        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1" style="display: none;"
            aria-modal="false" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <form class="modal-content" enctype="multipart/form-data" method="POST"
                    action="/dashboard/pengajuan/{{ $izin->id }}/izin">
                    @method('put')
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="backDropModalTitle">Masukkan Surat Perizinan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="file" class="form-label">Surat Perizinan</label>
                            <input class="form-control @error('file') is-invalid @enderror" type="file"
                                id="file" name="file">
                            <input class="form-control" type="hidden" id="oldDoc" multiple="" name="oldDoc"
                                value="{{ $izin->file }}">
                            <input class="form-control" type="hidden" id="status" multiple="" name="status"
                                value="1">
                            @error('file')
                                <div class="invalid-feedback text-light">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancle</button>
                        <button type="submit" class="btn btn-primary"> <i class="bx bx-mail-send me-1"></i>
                            Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="mt-3">
    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel"
        style="visibility: true;" aria-hidden="true">
        <div class="offcanvas-header">
            <h5 id="offcanvasTopLabel" class="offcanvas-title">Konfirmasi Penghapusan Data</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="alert alert-warning mw-100px" role="alert">
                Apakah Anda yakin?
                Mengapus data pengajuan <span class="fw-bold">00223</span>
            </div>
            <button type="button" class="btn btn-danger me-2"> <i class="bx bx-trash me-1"></i> Delete</button>
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </div>
    </div>
</div>
