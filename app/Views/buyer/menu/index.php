<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Daftar Menu</title>
</head>

<body>
    <div class="container">
        <h1>Daftar Menu</h1>

        <?php foreach ($menus as $menu) : ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title"><?= $menu['name']; ?></h2>
                    <p class="card-text">Harga: <?= $menu['price']; ?></p>

                    <a class="btn btn-success" href="/buyer/menu/order/<?= $menu['id']; ?>">Pesan</a>
                    <!-- <a class="btn btn-secondary" href="/menu/show/<?= $menu['id']; ?>">Lihat Detail</a> -->
                </div>
            </div>
        <?php endforeach; ?>

        <a class="btn btn-danger" href="/buyer/dashboard">Kembali ke Dashboard</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
