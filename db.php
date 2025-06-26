<?php
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = "Vision@321"; // Change this to your database password
$dbname = "ticket_booking";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
