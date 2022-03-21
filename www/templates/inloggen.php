<?php
include 'Header.php';
?>
<div class="container">
    <form action="#">
        <h1>Login</h1>
        <p>Name: <input type="text" name="user"></p>
        <p>Password: <input type="password" name="ww"></p>
        <button type="submit" name="login">Login</button>
    </form>

    <form action="#">
        <h1>Registreer</h1>
        <p>Name: <input type="text" name="user"></p>
        <p>Password: <input type="password" name="ww"></p>
        <p>Repeat password: <input type="password" name="ww"></p>
        <button type="submit" name="register">registreer</button>
    </form>
</div>
<?php
include 'Footer.php';
?>