<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db";
    // Create Connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $membership = $_POST["membership"];
    
    // ตรวจสอบว่าข้อมูลซ้ำหรือไม่ในตาราง members
    $check_query = "SELECT COUNT(*) FROM members WHERE username = '$username'";
    $check_result = mysqli_query($conn, $check_query);
    $count = mysqli_fetch_array($check_result)[0];
    
    if ($count > 0) {
        echo "ข้อมูลนี้มีอยู่แล้วในระบบ";
    } else {
        $expiration_date = null;
        if ($membership == 2) {
            $expiration_date = date("Y-m-d", strtotime("+30 days"));
        } elseif ($membership == 3) {
            $expiration_date = date("Y-m-d", strtotime("+180 days"));
        }

        $insert_query = "INSERT INTO members (username, email, membership, expiration_date) VALUES ('$username', '$email', $membership, '$expiration_date')";
    
        if (mysqli_query($conn, $insert_query)) {
            echo "ลงทะเบียนสำเร็จ";
            header('location: home.php');
        } else {
            echo "เกิดข้อผิดพลาดในการลงทะเบียน: " . mysqli_error($conn);
        }
    }
}

$conn->close();