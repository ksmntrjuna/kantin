<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Seller Dashboard</title>
</head>

<body>
    <div class="container">
        <h1>Seller Dashboard</h1>

        <p>Welcome, <?= session()->get('name'); ?></p>

        <a class="btn btn-primary" href="/menu">Daftar Menu</a>
        <a class="btn btn-secondary" href="/qr">Rekening</a>
        <a class="btn btn-success" href="/orderan">Orderan</a>
        <a class="btn btn-danger" href="/logout">Logout</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>