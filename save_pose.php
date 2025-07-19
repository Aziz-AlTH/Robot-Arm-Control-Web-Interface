<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);
$motors = $data["motors"];

$sql = "INSERT INTO poses (motor1, motor2, motor3, motor4, motor5, motor6) 
        VALUES ($motors[0], $motors[1], $motors[2], $motors[3], $motors[4], $motors[5])";
$conn->query($sql);
$conn->close();
?>
