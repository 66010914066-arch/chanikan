<?php
$host = "localhost";
$user = "chanikan";
$pwd  = "123456";     
$db   = "4066db";

$conn = mysqli_connect($host, $user, $pwd, $db);

if (!$conn) {
    die("เชื่อมต่อฐานข้อมูลไม่ได้ : " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>
