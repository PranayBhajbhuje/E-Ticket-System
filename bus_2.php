<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bus Seat Booking</title>
<!-- Google Fonts and Icons -->
<link
    href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
    rel="stylesheet"
/>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet"
/>
<style>
    body {
        width: 100%;
        height: 100vh;
        margin: 0;
        padding: 0;
        background: linear-gradient(to right, rgb(162, 216, 162), rgb(102, 194, 102));
        font-family: 'Poppins', sans-serif;
    }
    .center {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .tickets {
        width: 550px;
        height: fit-content;
        border: 0.4mm solid rgba(0, 0, 0, 0.08);
        border-radius: 3mm;
        box-sizing: border-box;
        padding: 10px;
        max-height: 96vh;
        overflow: auto;
        background: white;
        box-shadow: 0px 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    .ticket-selector {
        background: rgb(243, 243, 243);
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: column;
        box-sizing: border-box;
        padding: 20px;
    }
    .head {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 30px;
    }
    .title {
        font-size: 16px;
        font-weight: 600;
    }
    .seats {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        min-height: 150px;
        position: relative;
    }
    .status {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }
    .seats::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translate(-50%, 0);
        width: 220px;
        height: 7px;
        background: rgb(141, 198, 255);
        border-radius: 0 0 3mm 3mm;
        border-top: 0.3mm solid rgb(180, 180, 180);
    }
    .item {
        font-size: 12px;
        position: relative;
    }
    .item::before {
        content: "";
        position: absolute;
        top: 50%;
        left: -12px;
        transform: translate(0, -50%);
        width: 10px;
        height: 10px;
        background: rgb(255, 255, 255);
        outline: 0.2mm solid rgb(120, 120, 120);
        border-radius: 0.3mm;
    }
    .item:nth-child(2)::before {
        background: rgb(180, 180, 180);
        outline: none;
    }
    .item:nth-child(3)::before {
        background: rgb(28, 185, 120);
        outline: none;
    }
    .all-seats {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 15px;
        margin: 60px 0;
        margin-top: 20px;
        position: relative;
    }
    .seat {
        width: 30px;
        height: 30px;
        background: white;
        border-radius: 0.5mm;
        outline: 0.3mm solid rgb(180, 180, 180);
        cursor: pointer;
        text-align: center;
        line-height: 30px;
        font-size: 12px;
    }
    .seat.selected {
        background: rgb(28, 185, 120);
        outline: none;
    }
    .seat.booked {
        background: rgb(180, 180, 180);
        outline: none;
    }
    input {
        display: none;
    }
    .price {
        width: 100%;
        box-sizing: border-box;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .total {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        font-size: 16px;
        font-weight: 500;
    }
    .total span {
        font-size: 11px;
        font-weight: 400;
    }
    .price button {
        background: rgb(60, 60, 60);
        color: white;
        font-family: poppins;
        font-size: 14px;
        padding: 7px 14px;
        border-radius: 2mm;
        outline: none;
        border: none;
        cursor: pointer;
    }
    .timings {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }
    .dates, .times {
        display: flex;
        justify-content: center;
        margin-bottom: 10px;
    }
    .dates-item, .time {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 10px;
        border: 1px solid rgb(180, 180, 180);
        border-radius: 2mm;
        margin: 0 5px;
        cursor: pointer;
    }
    .dates-item input, .time input {
        display: none;
    }
    .dates-item.selected, .time.selected {
        background: rgb(28, 185, 120);
        color: white;
    }
</style>
</head>
<body>
<div class="center">
    <div class="tickets">
        <div class="ticket-selector">
            <div class="head">
                <div class="title">Mumbai to Pandharpur</div>
            </div>
            <div class="seats">
                <div class="status">
                    <div class="item">Available</div>
                    <div class="item">Booked</div>
                    <div class="item">Selected</div>
                </div>
                <div class="all-seats" id="seat-map">
                    <!-- Seats will be populated here dynamically -->
                </div>
            </div>
            <div class="timings">
                <div class="dates" id="date-selection">
                    <input type="radio" name="date" id="d1" checked />
                    <label for="d1" class="dates-item selected">
                        <div class="day">Sun</div>
                        <div class="date">11</div>
                    </label>
                    <input type="radio" id="d2" name="date" />
                    <label class="dates-item" for="d2">
                        <div class="day">Mon</div>
                        <div class="date">12</div>
                    </label>
                    <input type="radio" id="d3" name="date" />
                    <label class="dates-item" for="d3">
                        <div class="day">Tue</div>
                        <div class="date">13</div>
                    </label>
                    <input type="radio" id="d4" name="date" />
                    <label class="dates-item" for="d4">
                        <div class="day">Wed</div>
                        <div class="date">14</div>
                    </label>
                    <input type="radio" id="d5" name="date" />
                    <label class="dates-item" for="d5">
                        <div class="day">Thu</div>
                        <div class="date">15</div>
                    </label>
                    <input type="radio" id="d6" name="date" />
                    <label class="dates-item" for="d6">
                        <div class="day">Fri</div>
                        <div class="date">16</div>
                    </label>
                    <input type="radio" id="d7" name="date" />
                    <label class="dates-item" for="d7">
                        <div class="day">Sat</div>
                        <div class="date">17</div>
                    </label>
                </div>
                <div class="times" id="time-selection">
                    <input type="radio" name="time" id="t1" checked />
                    <label for="t1" class="time selected">11:00</label>
                    <input type="radio" id="t2" name="time" />
                    <label for="t2" class="time">14:30</label>
                    <input type="radio" id="t3" name="time" />
                    <label for="t3" class="time">18:00</label>
                    <input type="radio" id="t4" name="time" />
                    <label for="t4" class="time">21:30</label>
                </div>
            </div>
        </div>
        <div class="price">
            <div class="total">
                <span><span class="count">0</span> Tickets</span>
                <div class="amount">0</div>
            </div>
            <a href="usercontact.php"><button type="button">Book</button></a>
        </div>
    </div>
</div>
<script>
    const rows = 10; // Number of rows
    const cols = 4; // Number of columns (excluding aisle)

    const seatMap = document.getElementById('seat-map');

    // Function to create seats
    function createSeats() {
        for (let row = 1; row <= rows; row++) {
            for (let col = 1; col <= cols; col++) {
                const seat = document.createElement('div');
                seat.classList.add('seat');
                seat.setAttribute('data-row', row);
                seat.setAttribute('data-col', col);
                seat.textContent = row + String.fromCharCode(64 + col);
                if (Math.random() > 0.5) {
                    seat.classList.add('booked');
                } else {
                    seat.addEventListener('click', toggleSeat);
                }
                seatMap.appendChild(seat);
            }
        }
    }

    // Function to toggle seat selection
    function toggleSeat() {
        if (!this.classList.contains('booked')) {
            this.classList.toggle('selected');
            updatePrice();
        }
    }

    // Function to update price
    function updatePrice() {
        const selectedSeats = document.querySelectorAll('.seat.selected').length;
        document.querySelector('.count').textContent = selectedSeats;
        document.querySelector('.amount').textContent = selectedSeats * 480; // Example price per seat
    }

    // Function to handle date selection
    function handleDateSelection(event) {
        document.querySelectorAll('.dates-item').forEach(item => {
            item.classList.remove('selected');
        });
        event.target.closest('.dates-item').classList.add('selected');
    }

    // Function to handle time selection
    function handleTimeSelection(event) {
        document.querySelectorAll('.time').forEach(item => {
            item.classList.remove('selected');
        });
        event.target.closest('.time').classList.add('selected');
    }

    // Initialize the seat map
    createSeats();

    // Add event listeners for date and time selection
    document.querySelectorAll('.dates-item').forEach(item => {
        item.addEventListener('click', handleDateSelection);
    });
    document.querySelectorAll('.time').forEach(item => {
        item.addEventListener('click', handleTimeSelection);
    });
</script>
</body>
</html>
