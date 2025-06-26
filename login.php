<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === '' || $password === '') {
        header('Location: adminlogin.php?error=empty');
        exit;
    }

    $stmt = $conn->prepare('SELECT * FROM admins WHERE username = :username');
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $admin['username'];
        // Redirect to admin dashboard (replace with your dashboard page)
        header('Location: admin_dashboard.php');
        exit;
    } else {
        header('Location: adminlogin.php?error=invalid');
        exit;
    }
} else {
    header('Location: adminlogin.php');
    exit;
}
?> 