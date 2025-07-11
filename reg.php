<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['loginUsername']);
    $password = trim($_POST['loginPassword']);

    if ($username == "" || $password == "") {
        echo "Username and password are required";
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        echo "Login successful";
        // Redirect to the index.php or any other page
        header("Location: user.php");
    } else {
        echo "Invalid username or password";
    }
}
?>
