<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ticket Booking System</title>
</head>
<body>
<header>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Poppins', sans-serif;
		text-decoration: none;
	}
	
	body{
		background-color: ivory;
    
	}

	.navbar{
		width:100%;
		height:100%;
		align-items: center;
		justify-content: space-between;
		background-color:#0d0c08;
		color:palegoldenrod;
		display: flex;
		padding: 0px 200px;
        
	}

	.logo{
		cursor: pointer;
        
	}

	.nav{
		list-style: none;
		display: flex;
		padding: 30px;
        
	}

	.nav-items{
		padding: 10px;
	}

	.nav-items a{
		display: flex;
		align-items: center;
		position: relative;
		color: white;
		font-weight: 700;
		padding: 10px;
		z-index: 1;
		text-decoration: none;
		justify-content: center;
	}

	.nav-items a .link-text{
		margin-left: 8px;
		transition: opacity 0.4s;
		opacity: 1; 
	}

	.btn{
		color: white;
		padding: 10px 30px;
		background-color: #7d00ff;
		border-radius: 15px;
		font-weight: 700;
		transition: all 0.4s;
	}

	.btn .ok{
		transition: all 0.4s;
	}

	.btn:hover{
		padding: 10px 40px;
	}


</style>
<body>
	<meta charset="utf-8">
	<div class="navbar">
		<div class="logo">
            <img src="https://images.seeklogo.com/logo-png/4/1/e-ticket-logo-png_seeklogo-44881.png" alt="Round Image" style="width: 150px; height: 150px; border-radius: 50%;">
		</div>
        
		<ul class="nav">
		<li class="nav-items">
			<a href="index.php">
				<span class="line-text">Home</span>
				<i class="fa-solid fs-house"></i>
			</a>
		</li>
		<li class="nav-items">
			<a href="product.php">
				<span class="line-text">Ticket</span>
				<i class="fa-solid fs-about"></i>
			</a>
		</li>
		<li class="nav-items">
			<a href="aboutus.php">
				<span class="line-text">About Us
                </span>
				<i class="fa-solid fs-product"></i>
			</a>
		</li>
		<li class="nav-items">
			<a href="user.php">
				<span class="line-text">My Account</span>
				<i class="fa-solid fs-gallery"></i>
			</a>
		</li>
		
		</ul>
		<a href="adminlogin.php" class="btn">Admin Dashboard
			<i class="fa-solid fa-chevron-right ok"></i>
		</a>
	</div>
</body>
</html>
<!--==================== Banners ====================-->


<style>
  

  .mySlides {
    width: 100%;
    height: 50%;

  }
  

  .mySlides img {
    width: 100%;
    height: 50%;
	
  }
</style>
</head>
<body>

<div class="slideshow-container">
  <div class="mySlides">
    <img src="https://cdn.grabon.in/gograbon/images/web-images/uploads/1617878584233/bus-coupons.jpg" alt="Image 1">
  </div>

  <div class="mySlides">
    <img src="https://cardinsider.com/wp-content/uploads/2023/10/Movie-Discount-Vouchers-Worth-Rs.-500-on-Linking-Your-SBI-RuPay-Credit-Card-to-Paytm-Post.jpg" alt="Image 2">
  </div>

  <div class="mySlides">
    <img src="https://cdn.grabon.in/gograbon/images/web-images/uploads/1617878584233/bus-coupons.jpg" alt="Image 3">
  </div>
  <div class="mySlides">
    <img src="https://media.insider.in/image/upload/c_crop,g_custom/v1574154549/ynqiiq5tlzjyliawbsds.png" alt="Image 4">
  </div>
</div>

<script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
</script>

</body>
</html>
<br>
<br>
<br>
<br>
<br>

<!--====================  famous tourist attraction====================-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Famous Tourist Attractions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:#a8a1e3;
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #7a6585;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #260d26;
            width: 100%;
        }
        .attraction {
            width: calc(25% - 20px);
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        .attraction:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .attraction img {
            max-width: 100%;
            height: auto;
            border-radius: 10px 10px 0 0;
        }
        .attraction-text {
            padding: 20px;
            flex: 1;
        }
        .attraction-text h2 {
            margin: 0;
            color: #333;
        }
        .attraction-text p {
            margin: 10px 0;
            color: #666;
        }
    </style>
</head>
<body>
    <h1><strong>$ Famous Tourist Attractions $</strong></h1>
    <div class="container">
        <div class="attraction">
            <img src="https://media.istockphoto.com/id/1224360439/photo/waiting-to-sail.jpg?s=612x612&w=0&k=20&c=XMtw1nX67rhb75bYZ4D_39WNkuHTaddHDjtsxz-2IJY=" alt="Lakshadweep">
            <div class="attraction-text">
                <h2>Lakshadweep</h2>
                <p>Explore the pristine beaches and coral reefs of this tropical paradise.</p>
            </div>
        </div>
        <div class="attraction">
            <img src="https://www.shutterstock.com/image-photo/beautiful-ross-island-beach-bay-600nw-1064304320.jpg" alt="Andaman">
            <div class="attraction-text">
                <h2>Andaman</h2>
                <p>Discover the rich marine life and history of the Andaman Islands.</p>
            </div>
        </div>
        <div class="attraction">
            <img src="https://static.toiimg.com/thumb/msid-96567007,width-748,height-499,resizemode=4,imgsize-184030/.jpg" alt="Kashmir">
            <div class="attraction-text">
                <h2>Kashmir</h2>
                <p>Experience the breathtaking landscapes and warm hospitality of Kashmir.</p>
            </div>
        </div>
        <div class="attraction">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt8c527zmlxmL94NSGyFbd01mBGaIAMYITFZ0gp2y4XgbGuMCq3yi5mQE7eA&s" alt="Jaipur">
            <div class="attraction-text">
                <h2>Jaipur</h2>
                <p>Immerse yourself in the vibrant culture and majestic architecture of Jaipur.</p>
            </div>
        </div>
        <div class="attraction">
            <img src="https://media.istockphoto.com/id/1382384512/photo/bangalore-or-bengaluru.jpg?s=612x612&w=0&k=20&c=CNVSJcfVQY4ueya6E5-aTgCosGyOdGkw2E8P37vEJWA=" alt="Bengaluru">
            <div class="attraction-text">
                <h2>Bengaluru</h2>
                <p>Discover the Silicon Valley of India and its blend of technology and tradition.</p>
            </div>
        </div>
        <div class="attraction">
            <img src="https://thumbs.dreamstime.com/b/paris-eiffel-tower-river-seine-sunset-france-one-most-iconic-landmarks-107376702.jpg" alt="Paris">
            <div class="attraction-text">
                <h2>Paris</h2>
                <p>Experience the romance and charm of the City of Light, Paris.</p>
            </div>
        </div>
        
        <div class="attraction">
            <img src="https://media.istockphoto.com/id/1331100622/photo/view-of-buildings-streets-beautiful-in-various-angles-in-dubai.jpg?s=612x612&w=0&k=20&c=M5GXmSOPo8VljM06CIJqKRgAlEPZkqwmNP-_rtzScec=" alt="Dubai">
            <div class="attraction-text">
                <h2>Dubai</h2>
                <p>Experience luxury, adventure, and futuristic architecture in the vibrant city of Dubai.</p>
            </div>
        </div>
        <div class="attraction">
            <img src="https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8a2VyYWxhfGVufDB8fDB8fHww" alt="Kerala">
            <div class="attraction-text">
                <h2>Kerala</h2>
                <p>Discover the tranquil backwaters, lush hill stations, and rich cultural heritage of Kerala.</p>
            </div>
        </div>
    </div>
</body>
</html>
<br>
<br>
<br>
<br>
<!--==================== Why Book With Us ====================-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Book with Us?</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:#f5ebfa;
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #65586b;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            width: 100%;
        }
        .benefit {
            width: calc(25% - 20px);
            margin-bottom: 20px;
            background-color: #f2f4f5;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        .benefit:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .icon {
            flex: 0 0 auto;
            width: 80px;
            height: 80px;
            background-color: #f5ebf0;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            font-size: 24px;
            color: #333;
        }
        .description {
            padding: 20px;
            text-align: center;
        }
        .description h2 {
            margin: 0;
            color: #333;
        }
        .description p {
            margin: 10px 0;
            color: #666;
        }
    </style>
</head>
<body>
    <h1><strong>Why Book With Us?</strong></h1>
    <div class="container">
        <div class="benefit">
            <div class="icon">🛫</div>
            <div class="description">
                <h2>Easy Booking</h2>
                <p>We offer easy and convenient flight bookings with attractive offers.</p>
            </div>
        </div>
        <div class="benefit">
            <div class="icon">💰</div>
            <div class="description">
                <h2>Lowest Price</h2>
                <p>We ensure low rates on hotel reservation, holiday packages and on flight tickets.</p>
            </div>
        </div>
        <div class="benefit">
            <div class="icon">🎉</div>
            <div class="description">
                <h2>Exciting Deals</h2>
                <p>Enjoy exciting deals on flights, hotels, buses, car rental and tour packages.</p>
            </div>
        </div>
        <div class="benefit">
            <div class="icon">🕒</div>
            <div class="description">
                <h2>24/7 Support</h2>
                <p>Get assistance 24/7 on any kind of travel related query. We are happy to assist you.</p>
            </div>
        </div>
    </div>
</body>
</html>
<br>
<br>
<br>

<!--==================== OUR GALLERY ====================-->
<style>

    .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 20px auto;
    }

    .row {
        display: flex;
        justify-content: space-around;
        width: 100%;
    }

    .column {
        flex: 25%;
        padding: 5px;
    }

    .column img {
        width: 100%;
        max-height: 200px; /* Adjust this value as needed */
        object-fit: cover;
    }
    h2 {
    text-align: center;
    margin-top: 20px;
    color: black;
  }
  


</style>

<b><h2>$ Our Gallery $</h2></b><br>

<div class="gallery">
  <div class="row">
    <div class="column">
      <img src="https://images.unsplash.com/photo-1602369944529-c237ca143d09?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 1">
    </div>
    <div class="column">
      <img src="https://img.freepik.com/premium-photo/happy-travelers-taking-selfie-photo-bus_473712-3841.jpg" alt="Image 2">
    </div>
    <div class="column">
      <img src="https://news.miami.edu/_assets/images-stories/2022/03/cosford22-hero-940x529.jpg" alt="Image 3">
    </div>
    <div class="column">
      <img src="https://media.istockphoto.com/id/1187215609/photo/female-enjoying-modern-technology-while-friends-have-fun-in-the-back-of-bus.jpg?s=612x612&w=0&k=20&c=e-8aenKb5ItVXe2w-oFtOEwVdzmuUP3oRFU9AynNzlM=" alt="Image 4">
    </div>
  </div>
  <div class="row">
    <div class="column">
      <img src="https://www.boxofficepro.com/wp-content/uploads/2021/06/AdobeStock_298516782-scaled.jpeg" alt="Image 5">
    </div>
    <div class="column">
      <img src="https://img.freepik.com/premium-photo/people-taking-pictures-concert-with-their-cell-phones-generative-ai_958165-34966.jpg" alt="Image 6">
    </div>
    <div class="column">
      <img src="https://c8.alamy.com/comp/K3K9HW/japan-hoshu-tokyo-train-passengers-K3K9HW.jpg" alt="Image 7">
    </div>
    <div class="column">
      <img src="https://media.istockphoto.com/id/824729692/photo/people-travelling-on-local-indian-train-into-mumbai.jpg?s=612x612&w=0&k=20&c=z2w_2U4GzznSZxlXNYspCqvgrHyDMXqCR972DPvU9co=" alt="Image 8">
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>

<!--==================== OUR SERVICES PROVIDE ====================-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH TRAIN, BUS, MOVIES, CONCERT, AND MUCH MORE</title>
    
</head>
<body>

    <h1>SEARCH  MOVIES, CONCERT, BUS, TRAIN AND MUCH MORE :- </h1><br>

    <p> Welcome to our one-stop destination for all your ticket booking needs! Whether you're embarking on a cross-country journey or seeking a night of entertainment, our comprehensive services ensure a seamless experience from start to finish.<br><br>

    From train rides through scenic landscapes, we facilitate hassle-free bookings for all modes of transportation. Need to hop on a bus for a quick commute or a long-distance trip? We've got you covered there too.<br><br>

    Looking for a night out at the movies or an electrifying concert experience? Our easy movie and concert ticket booking services ensure you never miss out on the latest releases or live performances by your favorite artists. With flexible payment options tailored to your convenience, securing your tickets is as easy as a few clicks.<br><br>

    But that's not all! Keep an eye out for our special offers and discounts, making your ticket bookings even more affordable, especially during festival seasons and for special events. Trust us to make your journey or entertainment experience not just convenient, but also memorable.
    </p>


</body>
</html>
<br>
<br>
<br>
<br>
<br>

<!--==================== footer====================-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        footer {
            background-color: #303f57;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        .footer-section {
            flex: 1;
            min-width: 200px;
            margin: 10px;
        }

        .footer-section h3 {
            color: #ff9900;
            margin-bottom: 15px;
        }

        .footer-section p,
        .footer-section a {
            color: #ccc;
            text-decoration: none;
        }

        .footer-section a:hover {
            color: #1d16e0;
        }

        .footer-section ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-section ul li {
            margin: 10px 0;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 10px;
        }

        .social-icons img {
            width: 24px;
            height: 24px;
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 20px;
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
        }

        .footer-bottom-section {
            flex: 1;
            min-width: 200px;
            margin: 10px;
        }

        .footer-bottom-section h3 {
            color: #ff9900;
            margin-bottom: 15px;
        }

        .footer-bottom-section .app-links a {
            display: inline-block;
            margin: 0 10px;
        }

        .footer-bottom-section .app-links img {
            width: 100px;
        }

        .footer-bottom-section img {
            width: 100px;
            height: 100px;
        }

        .footer-bottom p {
            color: #ccc;
            margin: 0;
        }

        .footer-section img.logo {
            width: 150px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <!-- Other content of your website -->

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>"We offer a convenient ticket booking system for various events and transportation, including trains, concerts, buses, flights, and movies. Book your tickets with ease and enjoy exclusive deals."</p>
            </div>
            <div class="footer-section">
                <h3>Important Links</h3>
                <ul>
                    <li><a href="product.php">Movie Tickets</a></li>
                    <li><a href="product.php">Concert Tickets</a></li>
                    <li><a href="product.php">Bus Tickets</a></li>
                    <li><a href="#train">Train Tickets</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: support@GetTicket.com</p><br>
                <p>Phone: +123-456-7890</p><br>
                <p>Address: 123 Ticket St., Booking City, Mumbai-001 </p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgWkT6j2da0FY0md7Q0KcD7au2ncW5g8GIedSR4_YUDIUXQv8n1O9DKpt7bQ&s" alt="Facebook"></a>
                    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIMQsZyLjen8TaDAENBsk-wDJJlxzKAVxlyA&s" alt="Twitter"></a>
                    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0EKDzwb9oCzAcvMZcgQ6MSOiDB19A04ECoQ&s" alt="Instagram"></a>
                    <a href="#"><img src="https://png.pngtree.com/png-clipart/20190613/original/pngtree-linked-in-icon-png-image_3584840.jpg" alt="LinkedIn"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
        
            <div class="footer-bottom-section">
                <p>&copy; 2025 GetTicket | All Rights Reserved </p>
            </div>
        </div>
    </footer>
</body>
</html>
