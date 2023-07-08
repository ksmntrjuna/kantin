<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Struk Pembayaran</title>
</head>

<body>
    <div class="container">
        <h1>Struk Pembayaran</h1>

        <h2>Detail Pesanan</h2>
        <table class="table table">
            <thead class="table-secondary">
                <tr>
                    <th>nomor</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($orderList as $orderData) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $orderData['name']; ?></td>
                        <td><?= $orderData['price']; ?></td>
                        <td><?= $orderData['quantity']; ?></td>
                        <td><?= $orderData['status']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div>
            <label for="address">No.Meja :</label>
            <input class="form-control" type="text" name="address" required>
        </div>

        <p>Total Pembayaran: <?= $totalPayment; ?></p>
        <p>Metode Pembayaran: <!-- Tambahkan informasi metode pembayaran --></p>

        <a class="btn btn-primary" href="/buyer/menu">Kembali ke Menu</a>
    </div>
</body>

</html>