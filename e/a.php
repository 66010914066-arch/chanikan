<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มลงทะเบียน | Gemini</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    .input-group > .form-control, .input-group > .form-select {
        height: calc(3.5rem + 2px);
    }
</style>

</head>

<body class="bg-dark">
<div class="container my-5" style="max-width: 700px;">

    <h1 class="mb-5 text-center text-white">
        ✨ แบบฟอร์มลงทะเบียน
    </h1>

    <div class="card shadow-lg border-0 rounded-5">
       
        <div class="card-header bg-primary text-white rounded-top-5 p-3">
            <h4 class="mb-0 text-center">ชนิกานต์ ขำสระน้อย (ปุ้ม)  </h4>
        </div>
       
        <div class="card-body p-5">
            <form method="post" action="">

                <div class="form-floating mb-4">
                    <input type="text" class="form-control rounded-3" id="fullname" name="fullname" placeholder="ชื่อ-สกุล" required autofocus>
                    <label for="fullname">👤 ชื่อ-สกุล <span class="text-danger">*</span></label>
                </div>

                <div class="row g-3 mb-4">
                   
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="tel" class="form-control rounded-3" id="phone" name="phone" placeholder="เบอร์โทร" required>
                            <label for="phone">📱 เบอร์โทร <span class="text-danger">*</span></label>
                        </div>
                    </div>

                    <div class="col-md-6">
                         <div class="input-group h-100">
                            <span class="input-group-text rounded-start-3">📏</span>
                            <input type="number" class="form-control" id="height" name="height" min="100" max="220" required placeholder="ความสูง (ซม.) *">
                            <span class="input-group-text rounded-end-3">ซม.</span>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md-8">
                        <label for="major" class="form-label fw-bold">🎓 สาขาวิชา</label>
                        <select class="form-select rounded-3" id="major" name="major">
                            <option value="การบัญชี">การบัญชี</option>
                            <option value="การจัดการ">การจัดการ</option>
                            <option value="การตลาด">การตลาด</option>
                            <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="color" class="form-label fw-bold">🎨 สีที่ชอบ</label>
                        <input type="color" class="form-control form-control-color w-100 rounded-3" id="color" name="color" value="#0d6efd" title="เลือกสีที่ชอบ" style="height: 45px;">
                    </div>
                </div>
               

                <div class="pt-4 d-flex justify-content-between flex-wrap gap-3 border-top">
                    <div class="d-flex gap-2">
                        <button type="submit" name="Submit" class="btn btn-primary btn-lg rounded-pill px-4">✔ Submit (สมัครสมาชิก)</button>
                        <button type="reset" class="btn btn-outline-danger rounded-pill">↩ Reset</button>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-outline-secondary rounded-pill" onClick="window.location='https://www.msu.ac.th';">Go to MSU</button>
                        <button type="button" class="btn btn-outline-secondary rounded-pill" onClick="window.print();">🖨 พิมพ์</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php
if(isset($_POST['Submit'])){
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $height = $_POST['height'];
    $color = $_POST['color'];
    $major = $_POST['major'];

include_once("connectdb.php");

  $sql = "INSERT INTO register (r_id, r_name, r_phone,r_height,r_color,r_major)
            VALUES (NULL, '$fullname', '$phone','$height','$color','$major')";
    mysqli_query($conn,$sql) or die ("insert ไม่ได้");

    echo "<script>";
    echo "alert('เพิ่มข้อมูลสำเร็จ');";
    echo "</script>";
}
?>
   
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>