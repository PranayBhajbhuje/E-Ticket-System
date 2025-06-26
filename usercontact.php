<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Details Form</title>
  <style>
    .customer-details-form {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      background-image: url('https://miro.medium.com/v2/resize:fit:1400/0*HknVQR_lvyXqKUaM.jpg');
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .form-container {
      background: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .form-header {
      font-size: 20px;
      margin-bottom: 15px;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    label {
      margin-top: 10px;
    }
    input, select, button {
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background: rgb(28, 185, 120);
      color: white;
      cursor: pointer;
      margin-top: 15px;
    }
    .ticket-details {
      background-image: url('https://i.pinimg.com/736x/98/8c/7a/988c7acad51472cd2c7b3f98c71eee04.jpg');
      background-size: cover;
      background-position: center;  
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
      color: black;  
      font-family: Arial, sans-serif;  
      max-width: 600px;  
      margin: 20px auto;  
      text-align: center;
     

}

    
  </style>
</head>
<body>

  <!-- Customer Details Form -->
  <div class="customer-details-form" style="display: none;">
    <div class="form-container">
      <div class="form-header">Enter Your Details</div>
      <form id="customerForm">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required />

        <label for="mobile">Mobile</label>
        <input type="text" id="mobile" name="mobile" required />

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />

        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>

        <label for="age">Age</label>
        <input type="number" id="age" name="age" required />

        <button type="submit">Submit</button>
      </form>
    </div>
  </div>

  <!-- Ticket Details -->
  <div id="ticketDetails" class="ticket-details" style="display: none;"></div>

  <button id="openFormBtn">Open Form</button>

  <script>
    document.getElementById("openFormBtn").addEventListener("click", () => {
      document.querySelector(".customer-details-form").style.display = "flex";
    });

    document.getElementById("customerForm").addEventListener("submit", function(event) {
      event.preventDefault();

      // Gather the data
      const formData = new FormData(this);
      const data = Object.fromEntries(formData.entries());

      // Send data to PHP for database insertion
      fetch('save_customer.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert('Booking successful!');
          // Hide the form and reset it
          document.querySelector(".customer-details-form").style.display = "none";
          document.getElementById("customerForm").reset();
          
          // Display ticket details
          const ticketDetails = document.getElementById("ticketDetails");
          ticketDetails.innerHTML = `
            <h2>Ticket Details</h2>
            <p><strong>Name:</strong> ${data.customer.name}</p>
            <p><strong>Mobile:</strong> ${data.customer.mobile}</p>
            <p><strong>Email:</strong> ${data.customer.email}</p>
            <p><strong>Gender:</strong> ${data.customer.gender}</p>
            <p><strong>Age:</strong> ${data.customer.age}</p>
          `;
          ticketDetails.style.display = "block";
        } else {
          alert('Error booking ticket. Please try again.');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('Error booking ticket. Please try again.');
      });
    });
  </script>

</body>
</html>
