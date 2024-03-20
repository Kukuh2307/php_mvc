<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Example</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data['blog']['judul']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['blog']['penulis']; ?></h6>
                <p class="card-text"><?php echo $data['blog']['tulisan']; ?></p>
                <a href="<?php echo BASE_URL; ?>/blog" class="card-link">Kembali</a>
            </div>
        </div>
    </div>
</body>

</html>