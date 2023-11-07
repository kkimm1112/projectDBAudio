<?php
// เชื่อมต่อกับฐานข้อมูลที่ 1
$servername1 = "localhost";
$username1 = "root";
$password1 = "";

try {
    $conn1 = new PDO("mysql:host=$servername1;dbname=register_db", $username1, $password1);
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e1) {
    echo "Connection failed: " .$e1->getMessage();
}


//เชื่อฐานที่ 2
$servername2 = "localhost";
$username2 = "root";
$password2 = "";

try {
    $conn2 = new PDO("mysql:host=$servername2;dbname=membership_system", $username2, $password2);
    $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e2) {
    echo "Connection failed: " .$e2->getMessage();
}



?>
