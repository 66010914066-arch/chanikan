<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>รายงานข้อมูลสินค้า - ชนิกานต์</title>
    <style>
        body { font-family: Tahoma, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        img { border-radius: 4px; object-fit: cover; background-color: #eee; }
    </style>
</head>
<body>

    <h2>ชื่อนักศึกษา: ชนิกานต์ ขำสระน้อย (ปุ้ม)</h2>

    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>สินค้า</th>
                <th>ประเภท</th>
                <th>วันที่</th>
                <th>ประเทศ</th>
                <th>จำนวนเงิน</th>
                <th>รูปสินค้า</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (mysqli_num_rows($query) > 0) {
                while($row = mysqli_fetch_array($query)) { 
            ?>
            <tr>
                <td><?php echo $row['p_order_id']; ?></td>
                <td><?php echo $row['p_product_name']; ?></td>
                <td><?php echo $row['p_category']; ?></td>
                <td><?php echo $row['p_date']; ?></td>
                <td><?php echo $row['p_country']; ?></td>
                <td><?php echo number_format($row['p_amount']); ?></td>
                <td>
                    <img src="img/<?php echo $row['p_order_id']; ?>.jpg" 
                         width="50" height="50" 
                         alt="ไม่มีรูป" 
                         onerror="this.src='https://via.placeholder.com/50?text=No+Img'">
                </td>
            </tr>
            <?php 
                } 
            } else {
                echo "<tr><td colspan='7'>ไม่พบข้อมูลในตาราง popsupermarket</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
