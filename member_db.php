<?php
include('server.php');
/*// เชื่อมต่อฐานข้อมูล
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'membership_system';
$conn2 = new mysqli($host, $username, $password, $database);*/
if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $membership = $_POST["membership"];
    
     // เพิ่มการตรวจสอบว่าข้อมูลซ้ำอยู่หรือไม่
     $check_stmt = $conn->prepare("SELECT COUNT(*) FROM members WHERE username = ?");
     $check_stmt->bind_param("s", $username);
     $check_stmt->execute();
     $check_stmt->bind_result($count);
     $check_stmt->fetch();
     $check_stmt->close();
     
     if ($count > 0) {
         echo "ข้อมูลนี้มีอยู่แล้วในระบบ";
     } else {
         $expiration_date = null;
         if ($membership == 2) {
             $expiration_date = date("Y-m-d", strtotime("+30 days"));
         } elseif ($membership == 3) {
             $expiration_date = date("Y-m-d", strtotime("+180 days"));
         }
    
        $stmt = $conn->prepare("INSERT INTO members (username, email, membership, expiration_date) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $username, $email, $membership, $expiration_date);
    
        if ($stmt->execute()) {
            echo "ลงทะเบียนสำเร็จ";
            header('location: home.php');
        } else {
            echo "เกิดข้อผิดพลาดในการลงทะเบียน: " . $stmt->error;
        }
        $stmt->close();
    }
}
$conn->close();
?>