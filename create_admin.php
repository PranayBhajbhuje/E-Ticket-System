<?php
require 'db.php';

$username = 'admin21';
$password = 'pranay@321';
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Check if the admin already exists
$stmt = $conn->prepare('SELECT * FROM admins WHERE username = :username');
$stmt->bindParam(':username', $username);
$stmt->execute();
$admin = $stmt->fetch(PDO::FETCH_ASSOC);

if ($admin) {
    // Update password if user exists
    $update = $conn->prepare('UPDATE admins SET password = :password WHERE username = :username');
    $update->bindParam(':password', $hashedPassword);
    $update->bindParam(':username', $username);
    $update->execute();
    echo "Admin password updated successfully.";
} else {
    // Insert new admin
    $insert = $conn->prepare('INSERT INTO admins (username, password) VALUES (:username, :password)');
    $insert->bindParam(':username', $username);
    $insert->bindParam(':password', $hashedPassword);
    $insert->execute();
    echo "Admin user created successfully.";
}
?> 