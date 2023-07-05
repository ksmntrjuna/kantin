<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit Menu</title>
</head>

<body>
    <div class="container">
        <h1>Edit Menu</h1>
        <form action="/menu/update/<?= $id ?>" method="POST">
            <div class="form-group">
                <label for="name">Nama Menu:</label>
                <input type="text" class="form-control" name="name" id="name" value="<?= $menu['name'] ?>" required>
            <div class="form-group">
                <label for="price">Harga:</label>
                <input type="number" class="form-control" name="price" id="price" min="0" value="<?= $menu['price'] ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
