<h1>Register</h1>

<form action="/register" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <label for="role">Role:</label>
    <select name="role" id="role" required>
        <option value="seller">Seller</option>
        <option value="buyer">Buyer</option>
    </select>

    <button type="submit">Register</button>
</form>
