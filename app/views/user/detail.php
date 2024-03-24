<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $data['user']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['user']['email']; ?></h6>
            <p class="card-text"><?php echo $data['user']['position']; ?></p>
            <a href="<?php echo BASE_URL; ?>/user" class="card-link">Kembali</a>
        </div>
    </div>
</div>