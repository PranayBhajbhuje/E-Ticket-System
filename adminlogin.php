<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://img.freepik.com/free-vector/gradient-technological-background_23-2148884155.jpg?size=626&ext=jpg&ga=GA1.1.2082370165.1716422400&semt=ais_user');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #6c8187;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .error-msg {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Admin Login</h2>
    <?php
    $error = '';
    if (isset($_GET['error'])) {
        if ($_GET['error'] === 'invalid') {
            $error = 'Incorrect username or password.';
        } elseif ($_GET['error'] === 'empty') {
            $error = 'Please fill in both fields.';
        }
    }
    if ($error) {
        echo '<div class="error-msg">' . htmlspecialchars($error) . '</div>';
    }
    ?>
    <form id="loginForm" action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</div>

</html>
</body>
</html>
