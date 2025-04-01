<?php
// Kết nối Database
$hostname = 'localhost:3307';
$username = 'root';
$password = '';
$database = 'unitop.vn';

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Kết nối thất bại".mysqli_connect_errno());
}




?>