<h1>Edit Menu</h1>

<form action="/seller/menu/update/<?= $menu['id']; ?>" method="POST">
    <label for="name">Nama:</label>
    <input type="text" name="name" id="name" value="<?= $menu['name']; ?>" required>

    <label for="price">Harga:</label>
    <input type="text" name="price" id="price" value="<?= $menu['price']; ?>" required>

    <button type="submit">Update</button>
</form>
