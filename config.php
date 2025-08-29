<?php
$host = "localhost";    // biasanya localhost
$user = "root";         // ganti sesuai user MySQL-mu
$pass = "";             // ganti sesuai password MySQL-mu
$db   = "dbatoel";   // nama database

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
