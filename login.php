<?php
session_start();
include 'db.php'; // Connect to the database

// Initialize error message
$error_message = "";

// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username exists in the database
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Username exists, now check the password
        $row = $result->fetch_assoc();
        if ($row['password'] == $password) {
            // Correct password, redirect to dashboard
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            // Incorrect password
            $error_message = "Password is incorrect.";
        }
    } else {
        // Username doesn't exist
        $error_message = "Username does not exist. Please register first.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation System</title>
    <link rel="stylesheet" href="index.css"> <!-- Link to external CSS file -->
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: url('assets/1.jpg') no-repeat center center fixed;
    background-size: cover;
    background-position: center;
}

/* Main container for the form */
form {
    background: rgba(255, 255, 255, 0.7);
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
    text-align: center;
    margin-right:-600px;
    margin-bottom:-100px;
}

/* Page header styling */
h1 {
    color: #d7a49f;
    text-align: center;
    font-size: 3rem;
    margin-right:600px;
    margin-bottom:-350px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
}

/* Label styling */
label {
    display: block;
    text-align: left;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
    font-size: 1.4rem;
}

/* Input fields styling */
input[type="text"], input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
    box-sizing: border-box;
}

/* Button styling */
button {
    background-color: #e74c3c;
    color: white;
    border: none;
    padding: 12px;
    width: 100%;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #c0392b;
}

/* Error message styling */
p {
    font-size: 1.3rem;
    color: rgb(14, 14, 12);
   

}



/* Link styling */
a {
    color: #e74c3c;
    text-decoration: none;
    font-weight: bold;
    display: block;
    margin-top: 10px;
}

a:hover {
    text-decoration: underline;
}

/* Adjust the layout on smaller screens */
@media (max-width: 600px) {
    form {
        padding: 20px;
    }

    h1 {
        font-size: 2rem;
    }
}

.logo {
    width: 80px;  /* Adjust the size of the logo as needed */
    height: auto;
    vertical-align: middle;
    margin-right: 10px; /* Adds space between logo and text */
    /*background-color: rgb(8, 8, 8);*/
}

.error_message{
    font-size: 1rem;
    color: #4928c0;
}
.warningImage{
    width: 20px;  /* Adjust the size of the logo as needed */
    height: auto;
    vertical-align: middle;
    margin-top: 10px;

}
        /* Add CSS to position the Home button */
        .home-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #f44336;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        .home-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>

    <!-- Home button in the top right corner -->
    

    <h1>Join the Life-Saving Mission <br><br> <span class="highlight-text">Login Here  ></span> </h1>

    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit">Login</button>

        <!-- Display error message if exists -->
        <?php if (!empty($error_message)): ?>
            <img src="images/warning.png" alt="warn" class="warningImage"> 
            <p class="error_message"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <p>Don't have an account? <u><a href="register.php">Register here</a></u></p>
    </form>
</head>
<body>
    <!-- Include Navbar -->
    <?php include('navBar.php'); ?>

    <!-- Hero Section with transparent background -->


    
</body>
</html>
