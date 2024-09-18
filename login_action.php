<?php
session_start();
include 'db.php'; // File koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mendapatkan user berdasarkan email
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['email'];
        header("Location: dashboard.php"); // Redirect ke halaman dashboard
        exit;
    } else {
        echo "Email atau password salah!";
    }
}
?>
