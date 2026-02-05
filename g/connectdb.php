<?php
$host = "localhost";
$user = "root";     
$pwd  = "123456";    
$db   = "4066db";    


$conn = mysqli_connect($host, $user, $pwd, $db);


if (!$conn) {
    echo "<h3>สาเหตุที่เชื่อมต่อไม่ได้:</h3>";
    echo "<b>Error Number:</b> " . mysqli_connect_errno() . "<br>";
    echo "<b>Error Message:</b> " . mysqli_connect_error() . "<br>";
    exit();
}

mysqli_set_charset($conn, "utf8mb4");
?>
