<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
            <!-- Modal Buat Artikel -->
            <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="buatUserModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="UserModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="userForm" action="<?= BASE_URL; ?>/user/tambah" method="post">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="nama">Nama User</label>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>

                                <!-- email -->
                                <div class="form-group">
                                    <label for="email">Email User</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>

                                <!-- position -->
                                <div class="form-group">
                                    <label for="position">Position User</label>
                                    <input type="text" class="form-control" id="position" name="position">
                                </div>

                                <!-- alamat -->
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" rows="5" name="alamat"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button id="submitBtn" type="submit" class="btn btn-primary"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="mb-4">User</h3>
            <button type="button" class="btn btn-primary mb-4 tambahUserModalLabel" data-toggle="modal" data-target="#formModal" onclick="clearForm()">
                Tambah User
            </button>
            <ul class="list-group">
                <?php foreach ($data["user"] as $user) : ?>
                    <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                        <?= $user["nama"]; ?>
                        <div class="btn">
                            <a href="<?= BASE_URL; ?>/user/detail/<?= $user['id']; ?>" class="badge badge-primary">Detail</a>
                            <a href="<?= BASE_URL; ?>/user/ubah/<?= $user['id']; ?>" class="badge badge-warning editUserModalLabel" data-toggle="modal" data-target="#formModal" data-id="<?= $user['id']; ?>">Edit</a>
                            <a href="<?= BASE_URL; ?>/user/delete/<?= $user['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data??')">Hapus</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>