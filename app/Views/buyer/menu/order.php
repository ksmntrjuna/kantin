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
        <h5><?= $menu['name']; ?> | Rp. <?= $menu['price']; ?> </h5>

        <form action="/buyer/menu/storeOrder/<?= $menu['id']; ?>" method="POST">
            <div class="form-group">
                <label for="quantity">Jumlah</label>
                <input type="number" class="form-control" name="quantity" id="quantity" min="1" required>
            </div>
            <button type="submit" class="btn btn-success">Pesan</button>
        </form>
        <a class="btn btn-danger mt-2" href="/buyer/menu">Kembali ke Daftar Menu</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
