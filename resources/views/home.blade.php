<form method="post" action="/login">
    @csrf
    <div>
       <label for="username">Username</label>
        <input name="username" id="username" type="text">
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password" required>
    </div>
    <button type="submit">Login</button>
</form>

    <a href="<?= route('products.index') ?>">Products</a>