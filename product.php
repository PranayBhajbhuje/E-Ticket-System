<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            background-image: url('https://i.pinimg.com/originals/5d/e0/8d/5de08de24459fedac3d28b10a039e2a6.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            max-width:700px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .section {
            margin-bottom: 40px;
            margin-left: 10px;
           
        }
        .section-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .product {
            width: 30%;
            background-color:#f1edf5;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .product img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .product h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }
        .product p {
            font-size: 14px;
            color: #666;
        }
        .explore-link {
            text-align: center;
            margin-top: 20px;
        }
        
    </style>
</head>
<body>

<div class="container">

    <!-- Movies Section -->
    <div class="section">
        <h2 class="section-title">Trending Movies</h2>
        <div class="product-list">
            <!-- Sample Movie Product -->
            <div class="product">
                <img src="https://static.toiimg.com/thumb/msid-109147636,width-400,resizemode-4/109147636.jpg" alt="Movie 1">
                <div class="explore-link"><a href="movieticketbooking.php"><h3>Bade Miyan Chote Miyan</h3></a></div>
                <p>Elite soldiers team up to recover a stolen weapon from a masked madman who wants to destroy India.</p>
            </div>
            <!-- Sample Movie Product -->
            <div class="product">
                <img src="https://troubledproductions.com/wp-content/uploads/2024/04/adam-sandler-spaceman-2024-400x700-1-1.jpg" alt="Movie 2">
                <div class="explore-link"><a href="spaceman_tick_book.php"><h3>Spaceman</h3></a></div> 
                <p>Six months into a solo mission, a lonely astronaut confronts the cracks in his marriage with help from a mysterious creature he discovers on his ship.</p>
            </div>
            
            <!-- Add more movie products here -->
            </div>
       
    </div>

    <!-- Concerts Section -->
    <div class="section">
        <h2 class="section-title">Upcoming Concerts</h2>
        <div class="product-list">
            <!-- Sample Concert Product -->
            <div class="product">
                <img src="https://assets-in.bmscdn.com/nmcms/events/banner/desktop/media-desktop-baap-ko-mat-sikha-hindi-stand-up-show-0-2023-11-23-t-8-22-27.jpg" alt="Concert 1">
                <div class="explore-link"><a href="event_one.php"><h3>Baap Ko Mat Sikha - by Pranit More </h3></a></div> 
                <p>Join me for an unforgettable evening of side-splitting humor, witty observations, and hilarious anecdotes. I`ll be tackling all the topics that make us laugh, cringe, and everything in between.

Ahmedabad</p>
            </div>
            <!-- Sample Concert Product -->
            <div class="product">
                <img src="https://creativeyatra.com/wp-content/uploads/2023/07/Kal-Ki-Chinta-Nahi-Karta-ft.-Ravi-Gupta.jpg">
                <div class="explore-link"><a href="event_two.php"><h3>Kal Ki Chinta Nahi Karta ft. Ravi Gupta</h3></a></div>
                <p>Forget your Kal ki Chinta and Join us in this super funny Show by Ravi Gupta. Kal Ki Chinta Nahi Karta is new stand up special by Ravi Gupta.</p>
            </div>
            <!-- Add more concert products here -->
        </div>
        
    </div>

   <!-- BUS Section -->
   <div class="section">
        <h2 class="section-title">Festival Journey By Bus</h2>
        <div class="product-list">
            <!-- Sample Bus Product -->
            <div class="product">
                <img src="https://en.higer.com/uploadfiles/2021/01/20210120151022187.png?S0xRNjEyNUtBLnBuZw==" alt="BUS 1">
                <div class="explore-link"><a href="bus_1.php"><h3>"Sacred Journey: Nagpur to Shegaon for Gajanan Maharaj Jayanti"</h3></a></div>     
                <p>"Nagpur to Shegaon: A spiritual odyssey for Gajanan Maharaj Jayanti, where anticipation meets collective faith amidst scenic Maharashtra.
</p>
            </div>
            <!-- Sample Bus Product -->
            <div class="product">
                <img src="https://www.mumbailive.com/images/media/images/images_1538734598608_st_bus.jpg?bg=b1b2b7&crop=1368%2C768%2C0%2C0&fit=fill&fm=webp&h=768&height=768&w=1368&width=1368" alt="BUS 2">
                <div class="explore-link"><a href="bus_2.php"><h3>"Embarking on a Spiritual Journey: Mumbai to Pandharpur with Maharashtra ST Bus"</h3></a></div>
                <p>Embark on a spiritual journey from Mumbai to Pandharpur with Maharashtra's ST Bus. Experience devotion en route to the divine Vithoba Temple during Ashadi Ekadashi.</p>
            </div>
            <!-- Add more buses products here -->
        </div>
    </div>

   <!-- Train Section -->
   <div class="section">
        <h2 class="section-title">Time Saving Journey By Train</h2>
        <div class="product-list">
            <!-- Sample Train Product -->
            <div class="product">
                <img src="https://images.livemint.com/img/2023/02/02/1600x900/Vande_Metro_1675296807624_1675296807838_1675296807838.jpg" alt="Train 1">
                <h3>"Nagpur Metro: Streamlining Travel, Saving Time and Money"</h3>
                <p>"Nagpur Metro: Swift escape from traffic, saving time and money. Commuters opt for metro, saving time and reducing expenses."</p>
            </div>
            <!-- Sample Train Product -->
            <div class="product">
                <img src="https://www.nagpurtrends.com/uploads/C5XsPE-image.png" alt="Train 2">
                <h3> "Maharashtra Express: A Comfortable and Swift Journey from Kolhapur to Gondia"</h3>
                <p>The Maharashtra Express offers top-notch comfort and speed on the Kolhapur to Gondia route, making it the preferred choice for travelers seeking a smooth journey with minimal stops. 
</p>
            </div>
            <!-- Add more Train products here -->
        </div>
    </div>

   