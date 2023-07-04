<h1>Pembayaran</h1>

<?php if (isset($order)) : ?>
    <h2>Detail Pesanan</h2>
    <p>Menu: <?= $order['food_id']; ?></p>
    <p>Jumlah: <?= $order['quantity']; ?></p>
    <p>Status: <?= $order['status']; ?></p>
<?php endif; ?>

<?php if (isset($qrCode)) : ?>
    <h2>Kode QR Pembayaran</h2>
    <img src="<?= $qrCode; ?>" alt="QR Code">
<?php endif; ?>

<a href="/buyer/menu">Kembali ke Daftar Menu</a>