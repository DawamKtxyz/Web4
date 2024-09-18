<?php
include 'db.php'; // File koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    // Insert data user ke database
    $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    
    if (mysqli_query($conn, $query)) {
        header("Location: login.php"); // Redirect ke halaman login setelah register
        exit;
    } else {
        echo "Gagal register, coba lagi!";
    }
}
?>
