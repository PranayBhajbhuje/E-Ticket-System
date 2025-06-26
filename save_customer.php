<?php
session_start();
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "Vision@321";
$dbname = "ticket_booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die(json_encode(['success' => false, 'message' => 'Database connection failed']));
}

// Get the posted data
$data = json_decode(file_get_contents("php://input"), true);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO customers (name, mobile, email, gender, age) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $data['name'], $data['mobile'], $data['email'], $data['gender'], $data['age']);

if ($stmt->execute()) {
  $last_id = $stmt->insert_id;
  $stmt->close();
  
  // Fetch the customer details
  $result = $conn->query("SELECT * FROM customers WHERE id = $last_id");
  $customer = $result->fetch_assoc();

  // Set session for ticket.php
  $_SESSION['ticket'] = [
    'ticket_id' => uniqid('TKT'),
    'type' => 'General',
    'name' => $customer['name'],
    'user' => $customer['name'],
    'date' => date('Y-m-d'),
    'seat' => 'N/A',
    'price' => 'N/A'
  ];
  echo json_encode(['success' => true, 'customer' => $customer, 'redirect' => 'ticket.php']);
} else {
  echo json_encode(['success' => false, 'message' => 'Error booking ticket.']);
}

$conn->close();
?>
