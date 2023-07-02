<h1>Daftar Menu</h1>

<a href="/menu/create">Tambah Menu</a>

<table>
    <thead>
        <tr>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($menus as $menu) : ?>
            <tr>
                <td><?= $menu['name']; ?></td>
                <td><?= $menu['price']; ?></td>
                <td>
                    <a href="/menu/edit/<?= $menu['id']; ?>">Edit</a>
                    <a href="/menu/delete/<?= $menu['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="/dashboard">Kembali ke Dashboard</a>
