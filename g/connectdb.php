<?php
$host = "localhost";
$user = "root";
$pwd  = ""; 
$db   = "4066db";

// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($host, $user, $pwd, $db);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("เชื่อมต่อฐานข้อมูลไม่ได้ : " . mysqli_connect_error());
}

// ตั้งค่าภาษา
mysqli_set_charset($conn, "utf8mb4");
?>
