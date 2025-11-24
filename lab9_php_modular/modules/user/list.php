<?php 
require "config/database.php";
?>

<h2>Daftar User</h2>

<a href="index.php?page=user/add">Tambah User</a>

<?php 
$query = mysqli_query($conn, "SELECT * FROM users");
?>

<table border="1" cellpadding="7">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($query)) : ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['email'] ?></td>
    </tr>
    <?php endwhile; ?>
</table>
