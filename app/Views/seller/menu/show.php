<h1>Detail Menu</h1>

<h2><?= $menu['name']; ?></h2>
<p>Harga: <?= $menu['price']; ?></p>

<a href="/menu">Kembali ke Daftar Menu</a>
<a href="/menu/order/<?= $menu['id']; ?>">Pesan</a>
