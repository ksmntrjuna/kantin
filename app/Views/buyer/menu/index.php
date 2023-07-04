<h1>Daftar Menu</h1>

<?php foreach ($menus as $menu) : ?>
    <div>
        <h2><?= $menu['name']; ?></h2>
        <p>Harga: <?= $menu['price']; ?></p>
<<<<<<< HEAD

        <a href="/buyer/menu/order/<?= $menu['id']; ?>">Pesan</a>
        <a href="/menu/show/<?= $menu['id']; ?>">Lihat Detail</a>
    </div>
<?php endforeach; ?>
=======
        
        <a href="/buyer/menu/order/<?= $menu['id']; ?>">Pesan</a>
        <a href="/menu/show/<?= $menu['id']; ?>">Lihat Detail</a>
    </div>
<?php endforeach; ?>
>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b
