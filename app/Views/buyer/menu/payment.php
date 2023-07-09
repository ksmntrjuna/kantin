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
        <h4>Detail Pesanan</h4>
        <table class="table table-bordered">
            <thead class="table-secondary">
                <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($orderList as $orderData) : ?>
                <tbody>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $orderData['name']; ?></td>
                        <td><?= $orderData['price']; ?></td>
                        <td><?= $orderData['quantity']; ?></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
        <div class="qrcode" data-scan="<?= $orderData['id'] ?>"></div>

        <a class="btn btn-primary mt-2" href="/buyer/menu">Pesan Lagi Satt</a>
        <!-- <a class="btn btn-success" href="/buyer/struk">Bayar</a> -->
        <form action="<?= route_to('buyerMenuGenerateReceipt') ?>" method="post">
            <button class="btn btn-success mt-2" type="submit">Submit</button>
        </form>
        <!-- <a class="btn btn-success" href="<?= route_to('buyerMenuGenerateReceipt') ?>">Bayar</a> -->
    </div>
</body>

</html>