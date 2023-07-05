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

        <?php if (isset($orderData)) : ?>
            <h2>Detail Pesanan</h2>
            <p>Menu: <?= $orderData['food_id']; ?></p>
            <p>Jumlah: <?= $orderData['quantity']; ?></p>
            <p>Status: <?= $orderData['status']; ?></p>
            <div class="qrcode" data-scan="<?= $orderData['id'] ?>"></div>
        <?php endif; ?>

        <a class="btn btn-secondary" href="/buyer/menu">Kembali ke Daftar Menu</a>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
        $(document).ready(function () {
            const targetEl = document.querySelector(".qrcode");
            new QRCode(targetEl, {
                text: targetEl.dataset.scan,
                width: 500,
                height: 500,
                colorDark: "#000000",
                colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H
            });
        }); -->
    <!-- </script> -->
</body>

</html>
