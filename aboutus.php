<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - GetTicket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header, .footer {
            background-color: #34495e;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .header h1, .footer p {
            margin: 0;
        }
        .content {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            position: relative;
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQclxm9OQ2DesGM1jrXBCw18YKwBQJvsNhjYQ&s');
            background-size: cover;
            background-position: center;
        }
        h2 {
            color: #34495e;
        }
        .section {
            margin-top: 20px;
        }
        .quick-links, .contact-info, .follow-us {
            margin-top: 20px;
        }
        .quick-links ul, .follow-us ul {
            list-style: none;
            padding: 0;
        }
        .quick-links li, .follow-us li {
            margin: 5px 0;
        }
        .quick-links a, .follow-us a {
            color: #0066cc;
            text-decoration: none;
        }
        .quick-links a:hover, .follow-us a:hover {
            text-decoration: underline;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .social-icons a {
            display: inline-block;
            margin-right: 10px;
            text-decoration: none;
        }
        .social-icons img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            transition: transform 0.3s;
        }
        .social-icons img:hover {
            transform: scale(1.1);
        }
        .team-members {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .team-member {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
            text-align: center;
        }
        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .team-member-info {
            max-width: 200px;
        }
        .team-member-info h3 {
            margin: 0;
            color: #333;
        }
        .team-member-info p {
            margin: 5px 0;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>About Us</h1>
    </div>
    <div class="container">
        <div class="content">
        <div class="explore-link"><a href="index.php"><h2>Welcome to GetTicket</h2></a></div>
            <p>We offer a convenient ticket booking system for various events and transportation, including trains, concerts, buses, flights, and movies. Book your tickets with ease and enjoy exclusive deals.</p>
            
            <div class="section">
                <h2>Our Goals</h2>
                <p>At GetTicket, our primary goal is to transform the ticket booking experience into something truly exceptional. We strive to provide a seamless, user-friendly platform that allows you to book tickets effortlessly for any event or journey. Our commitment to competitive pricing and exclusive deals ensures that you get the best value, every time. We aim to continuously innovate and improve, making ticket booking as convenient and enjoyable as possible.</p>
            </div>

            <div class="section">
                <h2>Our Vision</h2>
                <p>Our vision is to become the global leader in ticket booking services, recognized for our innovation, reliability, and unparalleled customer satisfaction. We aspire to bridge the gap between people and their favorite events and destinations, making every journey and experience a cherished memory. We envision a future where booking tickets is no longer a hassle, but an exciting part of the event-going experience.</p>
            </div>

            <div class="section">
                <h2>Management Team</h2>
                <div class="team-members">
                    <div class="team-member">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSybLT_Mg6bvhSK1Dtm8Id8qiW-EuQb03XJ-eCA4AWpQvmd1OnL7KyQ8FAT9g1X3HQS2fQ&usqp=CAU" alt="Pranay Bhajbhuje">
                        <div class="team-member-info">
                            <h3>Pranay Bhajbhuje</h3>
                            <p>MCA Professional and Web Developer</p>
                        </div>
                    </div>
                    <div class="team-member">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-N3xFsoUCiFTJR-mxFdt4OYpSVV0AmRSMsSZQCfvJnyfWMhzIOZGEwHjheKfa1_1cR2U&usqp=CAU" alt="Pratik Tijare">
                        <div class="team-member-info">
                            <h3>Pratik Tijare</h3>
                            <p>MCA Professional and Web Developer</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="quick-links">
                <h2>Important Links</h2>
                <ul>
                <li><a href="product.php">Movie Tickets</a></li>
                    <li><a href="product.php">Concert Tickets</a></li>
                    <li><a href="product.php">Bus Tickets</a></li>
                    <li><a href="#train">Train Tickets</a></li>
                </ul>
            </div>

            <div class="contact-info">
                <h2>Contact Us</h2>
                <p>Email: <a href="mailto:support@GetTicket.com">support@GetTicket.com</a></p>
                <p>Phone: +123-456-7890</p>
                <p>Address: 123 Ticket St., Booking City, Mumbai-001</p>
            </div>

            <div class="follow-us">
                <h2>Follow Us</h2>
                <div class="social-icons">
                    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgWkT6j2da0FY0md7Q0KcD7au2ncW5g8GIedSR4_YUDIUXQv8n1O9DKpt7bQ&s" alt="Facebook"></a>
                    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIMQsZyLjen8TaDAENBsk-wDJJlxzKAVxlyA&s" alt="Twitter"></a>
                    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0EKDzwb9oCzAcvMZcgQ6MSOiDB19A04ECoQ&s" alt="Instagram"></a>
                    <a href="#"><img src="https://png.pngtree.com/png-clipart/20190613/original/pngtree-linked-in-icon-png-image_3584840.jpg" alt="LinkedIn"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2025 GetTicket. All rights reserved.</p>
    </div>
</body>
</html>
