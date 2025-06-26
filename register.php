<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['regUsername']);
    $password = trim($_POST['regPassword']);
    $confirmPassword = trim($_POST['confirmPassword']);

    if ($username == "" || $password == "" || $confirmPassword == "") {
        echo "All fields are required";
        exit;
    }

    if ($password !== $confirmPassword) {
        echo "Passwords do not match";
        exit;
    }

    // Hash the password before storing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashedPassword);

    try {
        $stmt->execute();
        echo "Registration successful";
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) { // Duplicate entry
            echo "Username already taken";
        } else {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
