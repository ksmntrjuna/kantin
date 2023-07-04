<h1>Pesan Menu</h1>

<h2><?= $menu['name']; ?></h2>
<p>Harga: <?= $menu['price']; ?></p>

<form action="/buyer/menu/storeOrder/<?= $menu['id']; ?>" method="POST">
    <label for="quantity">Jumlah:</label>
    <input type="number" name="quantity" id="quantity" min="1" required>

    <label for="address">Alamat Pengiriman:</label>
    <input type="text" name="address" id="address" required>

    <button type="submit">Pesan</button>
</form>

<a href="/buyer/menu">Kembali ke Daftar Menu</a>