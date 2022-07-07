<section>
    <div class="col-12 mb-5">
        <h4 class="col-6 fw-bold py-3 mb-2"><span class="text-muted fw-light">Pesan/</span> Pesan Pengunjung</h4>
        <div class="card">
            <h5 class="card-header">Tabel Pesan Pengunjung</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Pengunjung</th>
                            <th>Email Pengunjung</th>
                            <th>Subject</th>
                            <th>Pesan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>ID</td>
                            <td><strong>Nama Pengunjung</strong></td>
                            <td>Email</td>
                            <td><span class="d-inline-block text-truncate align-middle">Subject</span></td>
                            <td><span class="d-inline-block text-truncate align-middle">Lorem
                                    ipsum dolor
                                    sit amet consectetur
                                    adipisicing elit. Vero dolore minima
                                    repellendus nesciunt, omnis ducimus porro asperiores incidunt ipsa voluptatibus
                                    aliquid, doloribus quam temporibus ipsam veniam hic perspiciatis dolores cumque.
                                </span> </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <form id="mail" action="#}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="dropdown-item" onclick="return confirm('Apa anda yakin?')">
                                                <i class="bx bx-trash me-1"></i> Hapus Pesan
                                            </button>
                                            <button class="dropdown-item" onclick="return confirm('Apa anda yakin?')">
                                                <i class="bx bx-envelope me-1"></i> Detail
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
