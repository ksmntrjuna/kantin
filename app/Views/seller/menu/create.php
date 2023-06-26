<h1>Tambah Menu</h1>

<form action="/seller/menu/store" method="POST">
    <label for="name">Nama Menu:</label>
    <input type="text" name="name" id="name" required>

    <label for="price">Harga:</label>
    <input type="number" name="price" id="price" min="0" required>

    <button type="submit">Simpan</button>
</form>
