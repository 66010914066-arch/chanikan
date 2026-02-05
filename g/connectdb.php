<?php
$host = "localhost";
$user = "4066db";
$pwd = "4066db";
$db = "4066db";

$conn = mysqli_connect($host, $user, $pwd, $db);

if (!$conn) {
    die("เชื่อมต่อไม่ได้ : " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>
