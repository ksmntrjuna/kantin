<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Pembayaran</title>
</head>

<body>
    <div class="container">
        <h1>Pembayaran</h1>

            <h2>Detail Pesanan</h2>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                </tr>
                <?php foreach ($orderList as $orderData) : ?>
                    <tr>
                        <td><?= $orderData['food_id']; ?></td>
                        <td><?= $orderData['name']; ?></td>
                        <td><?= $orderData['price']; ?></td>
                        <td><?= $orderData['quantity']; ?></td>
                        <td><?= $orderData['status']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <div class="qrcode" data-scan="<?= $orderData['id'] ?>"></div>

        <a class="btn btn-primary" href="/buyer/menu">Pesan Lagi Satt</a>
        <a class="btn btn-success" href="/buyer/menu">Bayar</a>
    </div>
</body>

</html>
