<?php
$host = "localhost";
$user = "chanikandb"; 
$pwd = "123456"; 
$db = "4066db";
$conn = mysqli_connect($host, $user, $pwd, $db);
if (!$conn) { die("เชื่อมต่อไม่ได้: " . mysqli_connect_error()); }
mysqli_query($conn, "SET NAMES utf8");
$sql = "SELECT * FROM popsupermarket";
$query = mysqli_query($conn, $sql);
?>
<html>
<head><meta charset="UTF-8"></head>
<body>
<h2>ชนิกันต์ ขำสระน้อย (ปุ๋ม)</h2>
<table border="1">
<tr>
<th>Oder ID</th><th>สินค้า</th><th>ประเภทสินค้า</th><th>วันที่</th><th>ประเทศ</th><th>จำนวนเงิน</th>
</tr>
<?php while($row = mysqli_fetch_array($query)) { ?>
<tr>
<td><?php echo $row['p_order_id']; ?></td>
<td><?php echo $row['p_product_name']; ?></td>
<td><?php echo $row['p_category']; ?></td>
<td><?php echo $row['p_date']; ?></td>
<td><?php echo $row['p_country']; ?></td>
<td><?php echo number_format($row['p_amount']); ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>
