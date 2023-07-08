<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>QR</title>
</head>

<body>
    <div class="container mt-3">
        <h2>upload QR</h2>
        <form action="/create-qr" method="post">
            <div>
                <label for="rekening">rekening</label>
                <input class="form-control" type="text" name="rekening" required>
            </div>
            <div>
                <label for="user">user</label>
                <select class="form-control" name="user">
                    <?php foreach ($user as $u) : ?>
                        <option value="<?= $u['id'] ?>"><?= $u['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button class="btn btn-primary mt-2" type="submit">Upload</button>
        </form>
    </div>
</body>

</html>