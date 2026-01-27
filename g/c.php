<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ชนิกานต์ ขำสระน้อย (ปุ้ม)</title>

<style>
    body{
        font-family: 'Segoe UI', Tahoma, sans-serif;
        background:#f4f6f8;
        padding:40px;
    }

    h1{
        text-align:center;
        color:#333;
    }

    form{
        text-align:center;
        margin-bottom:20px;
    }

    input[type=text]{
        padding:10px;
        width:280px;
        border-radius:6px;
        border:1px solid #ccc;
        font-size:16px;
    }

    button{
        padding:10px 18px;
        border:none;
        border-radius:6px;
        background:#4CAF50;
        color:#fff;
        font-size:16px;
        cursor:pointer;
    }

    button:hover{
        background:#45a049;
    }

    table{
        width:100%;
        border-collapse:collapse;
        background:#fff;
        box-shadow:0 4px 12px rgba(0,0,0,0.08);
        border-radius:10px;
        overflow:hidden;
    }

    th{
        background:#2c7be5;
        color:#fff;
        padding:12px;
        text-align:center;
    }

    td{
        padding:10px;
        border-bottom:1px solid #eee;
        text-align:center;
    }

    tr:hover{
        background:#f1f7ff;
    }

    td.amount{
        text-align:right;
        font-weight:500;
    }

    tr.total{
        background:#f8f9fa;
        font-weight:bold;
    }

    img{
        border-radius:6px;
    }
</style>
</head>

<body>

<h1>ชนิกานต์ ขำสระน้อย (ปุ้ม)</h1>

<form method="get">
    <input type="text" name="keyword" placeholder="🔍 หาเอาโลดดด"
           value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
    <button type="submit">ค้นหา</button>
</form>

<table>
<tr>
    <th>Order</th>
    <th>สินค้า</th>
    <th>ประเภทสินค้า</th>
    <th>วันที่</th>
    <th>ประเทศ</th>
    <th>จำนวนเงิน</th>
    <th>รูป</th>
</tr>

<?php
include_once("connectDB.php"); 

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";

if ($keyword != "") {
    $sql = "SELECT * FROM popsupermarket 
            WHERE p_product_name LIKE '%$keyword%'
               OR p_country LIKE '%$keyword%'
               OR p_category LIKE '%$keyword%'";
} else {
    $sql = "SELECT * FROM popsupermarket";
}

$rs = mysqli_query($conn, $sql);
$total = 0;

while ($data = mysqli_fetch_assoc($rs)) {
    $total += $data['p_amount'];
?>
<tr>
    <td><?php echo $data['p_order_id']; ?></td>
    <td><?php echo $data['p_product_name']; ?></td>
    <td><?php echo $data['p_category']; ?></td>
    <td><?php echo $data['p_date']; ?></td>
    <td><?php echo $data['p_country']; ?></td>
    <td class="amount"><?php echo number_format($data['p_amount'],0); ?></td>
    <td>
        <img src="<?php echo $data['p_product_name']; ?>.jpg" width="55">
    </td>
</tr>
<?php } ?>

<tr class="total">
    <td colspan="5" align="right">รวมทั้งหมด</td>
    <td class="amount"><?php echo number_format($total,0); ?></td>
    <td></td>
</tr>

</table>

</body>
</html>