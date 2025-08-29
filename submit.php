<?php
include 'config.php'; // koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $fullname   = $_POST['fullname'];
    $single     = $_POST['single'];
    $know_more  = $_POST['know_more'];
    $redflag    = $_POST['redflag'];
    $interest   = $_POST['interest'];
    $phone      = $_POST['phone'];
    $impression = $_POST['impression'];

    // Prepare statement agar aman dari SQL Injection
    $stmt = $conn->prepare("INSERT INTO responses (fullname, single, know_more, redflag, interest, phone, impression) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $fullname, $single, $know_more, $redflag, $interest, $phone, $impression);

    if ($stmt->execute()) {
        echo "terimakasih sudah mau mengisiii <333";
    } else {
        echo "errorrr isi yang benerrr: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
