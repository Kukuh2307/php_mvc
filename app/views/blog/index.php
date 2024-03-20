<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Blog</h3>
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