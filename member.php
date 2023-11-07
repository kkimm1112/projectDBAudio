<?php
include('server.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากแบบฟอร์ม
    $username = $_POST['username'];
    $email = $_POST['email'];
    $membership = $_POST['membership'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>ลงทะเบียนสมาชิก</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h2>ลงทะเบียนสมาชิก</h2>
    <form method="post">
        <label for="username">ชื่อผู้ใช้:</label>
        <input type="text" name="username" required><br>

        <label for="email">อีเมล:</label>
        <input type="email" name="email" required><br>

        <label for="membership">เลือกระดับสมาชิก:</label>
        <select name="membership">
            <option value="1">ปกติ</option>
            <option value="2">โปร</option>
            <option value="3">พรีเมี่ยม</option>
        </select><br>
        <p>ปกติ (ฟรี มีโฆษณา)</p>
        <p>โปร (เวลา 1 เดือน) - ราคา 59 บาท</p>
        <p>พรีเมี่ยม (เวลา 6 เดือน) - ราคาพิเศษ 199 บาท</p>

        <a href="home.php">
            <input type="submit" value="ลงทะเบียน">
        </a>
    </form>
</body>

</html>