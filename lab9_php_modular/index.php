<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

$path = "";

if ($page == "dashboard") {
    $path = "views/dashboard.php";

} elseif ($page == "login") {
    $path = "modules/auth/login.php";

} elseif ($page == "logout") {
    $path = "modules/auth/logout.php";

} elseif ($page == "user/list") {
    $path = "modules/user/list.php";

} elseif ($page == "user/add") {
    $path = "modules/user/add.php";

} else {
    $path = "views/dashboard.php";
}

require "views/header.php";

require $path;

require "views/footer.php";
?>
