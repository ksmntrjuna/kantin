<h1>Daftar Menu</h1>

<a href="/menu/create">Tambah Menu</a>

<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<?php foreach ($menus as $menu) : ?>
    <div>
        <h2><?= $menu['name']; ?></h2>
        <p>Harga: <?= $menu['price']; ?></p>
        
        <a href="/seller/menu/edit/<?= $menu['id']; ?>">Edit</a>
        <a href="/seller/menu/delete/<?= $menu['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</a>
        
        <a href="/menu/show/<?= $menu['id']; ?>">Lihat Detail</a>
    </div>
<?php endforeach; ?>
