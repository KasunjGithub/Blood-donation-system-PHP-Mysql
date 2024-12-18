<?php
// Start the PHP session
session_start();

// Initialize the error message variable
$error = '';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Hardcoded admin credentials
    $adminUsername = "admin";
    $adminPassword = "admin123";

    // Validate the credentials
    if ($username === $adminUsername && $password === $adminPassword) {
        // Set session variable and redirect to CRUD operation page
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        header("Location: crudoperation.php");
        exit;
    } else {
        $error = "Invalid username or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="index.css"> <!-- Link to external CSS file -->
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom right, #e74c3c, #f39c12);
        }

        /* Form Container */
        .login-form {
            background: #ffffff;
            padding: 30px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-form h2 {
            text-align: center;
            color: #e74c3c;
            margin-bottom: 20px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .login-form input[type="text"]:focus,
        .login-form input[type="password"]:focus {
            border-color: #e74c3c;
            outline: none;
            box-shadow: 0 0 5px rgba(231, 76, 60, 0.4);
        }

        .login-form button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        .login-form button:hover {
            background-color: #c0392b;
        }

        .login-form .error {
            color: #c0392b;
            text-align: center;
            margin-bottom: 15px;
        }

        /* Add a small footer-like element inside the form */
        .login-form p {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }

        .login-form p a {
            color: #e74c3c;
            text-decoration: none;
        }

        .login-form p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    <?php include('navBar.php'); ?>

    <div class="login-form">
        <h2>Admin Login</h2>
        <?php if (!empty($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Admin Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Verify Admin</button>
        </form>
        <p><a href="dashboard.php">Back</a></p>
    </div>

    <!-- Include Footer -->
    <?php include('footer.php'); ?>
</body>
</html>
