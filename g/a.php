<?php
$host = "localhost";
$user = "chanikandb"; // ตรวจสอบชื่อ User บน Server อีกครั้ง
$pwd = "123456";      // ตรวจสอบรหัสผ่านบน Server อีกครั้ง
$db = "4066db";

$conn = mysqli_connect($host, $user, $pwd, $db);

if (!$conn) {
    die("เชื่อมต่อฐานข้อมูลไม่ได้: " . mysqli_connect_error());
}

mysqli_query($conn, "SET NAMES utf8");
$sql = "SELECT * FROM popsupermarket";
$query = mysqli_query($conn, $sql);
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>รายงานข้อมูลสินค้า</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        img { border-radius: 5px; object-fit: cover; }
    </style>
</head>
<body>
    <h2>ชนิกานต์ ขำสระน้อย (ปุ้ม)</h2>
    <table>
        <thead>
            <tr>
                <th>Oder ID</th>
                <th>สินค้า</th>
                <th>ประเภทสินค้า</th>
                <th>วันที่</th>
                <th>ประเทศ</th>
                <th>จำนวนเงิน</th>
                <th>รูป</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $row['p_order_id']; ?></td>
                <td><?php echo $row['p_product_name']; ?></td>
                <td><?php echo $row['p_category']; ?></td>
                <td><?php echo $row['p_date']; ?></td>
                <td><?php echo $row['p_country']; ?></td>
                <td><?php echo number_format($row['p_amount']); ?></td>
                <td>
                    <img src="img/<?php echo $row['p_order_id']; ?>.jpg" width="50" height="50" alt="no image">
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
