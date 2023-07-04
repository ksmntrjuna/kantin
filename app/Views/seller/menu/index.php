<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Daftar Menu</title>
</head>

<body>
    <div class="container">
        <h1>Daftar Menu</h1>

        <a class="btn btn-primary mb-3" href="/menu/create">Tambah Menu</a>

        <table class="table">
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
                            <a class="btn btn-sm btn-primary" href="/menu/edit/<?= $menu['id']; ?>">Edit</a>
                            <a class="btn btn-sm btn-danger" href="/menu/delete/<?= $menu['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a class="btn btn-secondary" href="/dashboard">Kembali ke Dashboard</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>