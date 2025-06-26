<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login and Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            background-image: url('https://img.freepik.com/free-vector/background-realistic-abstract-technology-particle_23-2148431735.jpg?size=626&ext=jpg&ga=GA1.1.1785212370.1709493934&semt=ais_user');
            background-size: cover;
            background-position: center;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #daeaeb;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <form id="registrationForm" action="register.php" method="post">
            <input type="text" id="regUsername" name="regUsername" placeholder="Username">
            <input type="password" id="regPassword" name="regPassword" placeholder="Password">
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
            <input type="submit" value="Register">
            <p class="error" id="registrationError"></p>
        </form>
        <h2>User Login</h2>
        <form id="loginForm" action="aboutus.php" method="post">
            <input type="text" id="loginUsername" name="loginUsername" placeholder="Username">
            <input type="password" id="loginPassword" name="loginPassword" placeholder="Password">
            <input type="submit" value="Login">
            <p class="error" id="loginError"></p>
        </form>
    </div>
</body>
</html>
3