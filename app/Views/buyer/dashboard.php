<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Buyer Dashboard</title>
</head>

<body>
    <div class="container">
        <h1>Buyer Dashboard</h1>

        <p>Welcome, <?= session()->get('name'); ?></p>

        <a class="btn btn-primary" href="/buyer/menu">Daftar Menu</a>
        <a class="btn btn-danger" href="/logout">Logout</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
=======
<h1>Buyer Dashboard</h1>

<p>Welcome, <?= session()->get('name'); ?></p>

<a href="/menu">Daftar Menu</a>
<a href="/logout">Logout</a>
>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b
