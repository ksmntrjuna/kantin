<h1>Pesan Menu</h1>

<h2><?= $menu['name']; ?></h2>
<p>Harga: <?= $menu['price']; ?></p>

<<<<<<< HEAD
<form action="/buyer/menu/storeOrder/<?= $menu['id']; ?>" method="POST">
    <label for="quantity">Jumlah:</label>
    <input type="number" name="quantity" id="quantity" min="1" required>

    <label for="address">Alamat Pengiriman:</label>
    <input type="text" name="address" id="address" required>
=======
<form action="buyer/menu/storeOrder/<?= $menu['id']; ?>" method="POST">
    <label for="quantity">Jumlah:</label>
    <input type="number" name="quantity" id="quantity" min="1" required>

    <!-- Informasi tambahan terkait pemesanan, seperti alamat pengiriman, metode pembayaran, dll -->
    <!-- Tambahkan input form sesuai kebutuhan -->
    <!-- <label for="address">Alamat Pengiriman:</label>
    <input type="text" name="address" id="address" required> -->
>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b

    <button type="submit">Pesan</button>
</form>

<<<<<<< HEAD
<a href="/buyer/menu">Kembali ke Daftar Menu</a>
=======
<a href="/menu">Kembali ke Daftar Menu</a>
>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b
