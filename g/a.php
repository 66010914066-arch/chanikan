<?php
include 'connectdb.php'; 

$sql = "SELECT * FROM popsupermarket";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>รายงานข้อมูลสินค้า - ชนิกานต์</title>
    <style>
        body { font-family: Tahoma, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
    </style>
</head>
<body>

    <h2>ชื่อนักศึกษา: ชนิกานต์ ขำสระน้อย (ปุ้ม)</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>สินค้า</th>
                <th>ประเภท</th>
                <th>วันที่</th>
                <th>ประเทศ</th>
                <th>จำนวนเงิน</th>
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
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>