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
        <h1>Daftar Rekening</h1>

        <a class="btn btn-primary mb-3" href="qr/create">Tambah Rekening</a>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Rekening</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($qr as $index => $d) : ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $d['rekening'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-danger" href="qr/delete/<?= $d['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</a>
                            <!-- <form action="qr/delete/<?= $d['id'] ?>" method="post">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form> -->
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