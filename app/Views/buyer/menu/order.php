<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Pesan Menu</title>
</head>

<body>
    <div class="container">
        <h1>Pesan Menu</h1>

        <h2><?= $menu['name']; ?></h2>
        <p>Harga: <?= $menu['price']; ?></p>

        <form action="/buyer/menu/storeOrder/<?= $menu['id']; ?>" method="POST">
            <div class="form-group">
                <label for="quantity">Jumlah:</label>
                <input type="number" class="form-control" name="quantity" id="quantity" min="1" required>
            </div>

            <div class="form-group">
                <label for="address">No Meja:</label>
                <input type="text" class="form-control" name="address" id="address" required>
            </div>

            <!-- Informasi tambahan terkait pemesanan, seperti alamat pengiriman, metode pembayaran, dll -->
            <!-- Tambahkan input form sesuai kebutuhan -->

            <button type="submit" class="btn btn-success">Pesan</button>
            <a class="btn btn-danger" href="/buyer/menu">Kembali ke Daftar Menu</a>
        </form>

        <!-- <a class="btn btn-danger" href="/buyer/menu">Kembali ke Daftar Menu</a> -->
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
