<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Orderan</title>
</head>

<body>
    <div class="container">
        <h1>Orderan</h1>

        <h2>List Orderan</h2>
        <table class="table table">
            <thead class="table-secondary">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Meja</th>
                    <th>Pembayaran</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($orders as $data) : ?>
            <tbody>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $data['user']; ?></td>
                    <td><?= $data['name']; ?></td>
                    <td><?= $data['price']; ?></td>
                    <td><?= $data['quantity']; ?></td>
                    <td><?= $data['total']; ?></td>
                    <td><?= $data['address']; ?></td>
                    <td><?= $data['status']; ?></td>

                </tr>
            </tbody>
        <?php endforeach; ?>


        </tbody>
        </table>

        <a class="btn btn-secondary" href="/dashboard">Kembali ke Dashboard</a>
    </div>
</body>

</html>