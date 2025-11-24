<?php

require "config/database.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh login sederhana (tanpa hash)
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $user = mysqli_fetch_assoc($query);

    if ($user) {
        $_SESSION['user'] = $user['username'];
        header("Location: index.php?page=dashboard");
        exit;
    } else {
        echo "<p style='color:red'>Username atau Password salah!</p>";
    }
}
?>

<h2>Login</h2>

<form method="POST">
    <label>Username</label><br>
    <input type="text" name="username"><br><br>

    <label>Password</label><br>
    <input type="password" name="password"><br><br>

    <button type="submit" name="submit">Login</button>
</form>
