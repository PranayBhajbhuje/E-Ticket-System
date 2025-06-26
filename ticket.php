<?php
include 'db.php';
session_start();
if (!isset($_SESSION['ticket'])) {
    echo "No ticket found!";
    exit();
}
$ticket = $_SESSION['ticket'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Ticket</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>
<body>
    <h2>Your Ticket</h2>
    <div id="ticket-content" style="border:1px solid #000; padding:20px; width:300px;">
        <p><strong>Ticket ID:</strong> <?php echo $ticket['ticket_id']; ?></p>
        <p><strong>Type:</strong> <?php echo $ticket['type']; ?></p>
        <p><strong>Name:</strong> <?php echo $ticket['name']; ?></p>
        <p><strong>User:</strong> <?php echo $ticket['user']; ?></p>
        <p><strong>Date:</strong> <?php echo $ticket['date']; ?></p>
        <p><strong>Seat:</strong> <?php echo $ticket['seat']; ?></p>
        <p><strong>Price:</strong> ₹<?php echo $ticket['price']; ?></p>
    </div>
    <button onclick="downloadPDF()">Download as PDF</button>
    <script>
        function downloadPDF() {
            const { jsPDF } = window.jspdf;
            var doc = new jsPDF();
            var content = document.getElementById('ticket-content').innerText;
            doc.text(content, 10, 10);
            doc.save('ticket.pdf');
        }
    </script>
</body>
</html> 