<?php
session_unset();
session_destroy();
?>

<h2>Anda telah logout</h2>
<p>Silakan login kembali di bawah ini:</p>

<form method="POST" action="index.php?page=login">
    <label>Username</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="submit">Login</button>
</form>
