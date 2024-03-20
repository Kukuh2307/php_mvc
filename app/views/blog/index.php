<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <!-- Modal -->
            <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="judulModal">Buat Artikel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= BASE_URL; ?>/blog/tambah" method="post">
                                <div class="form-group">
                                    <label for="judul">Judul Artikel</label>
                                    <input type="text" class="form-control" id="judul" name="judul">
                                </div>
                                <div class="form-group">
                                    <label for="tulisan">Isi Artikel</label>
                                    <textarea class="form-control" id="tulisan" rows="5" name="tulisan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="penulis">Nama Penulis</label>
                                    <input type="text" class="form-control" id="penulis" name="penulis">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Artikel</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <h3 class="mb-4">Blog</h3>
            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#formModal">
                Buat Artikel
            </button>
            <ul class="list-group">
                <?php foreach ($data["Blog"] as $blog) : ?>
                    <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                        <?= $blog["judul"]; ?>
                        <a href="<?= BASE_URL; ?>/blog/detail/<?= $blog['id']; ?>" class="badge badge-primary">baca</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>