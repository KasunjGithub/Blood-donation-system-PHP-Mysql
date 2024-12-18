<?php
// Start the PHP code
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> <!-- Bootstrap Icons -->
    <style>
        /* Basic styles for the navbar */
        body {
            background: url('images/1.jpg') no-repeat center center fixed;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
    
            background-size: cover;
            color: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 17px 17px;
            background-color: rgba(139, 0, 0, 0.8);
            position: fixed; /* Makes the navbar fixed */
            top: 0; /* Positions the navbar at the top of the page */
            left: 0;
            width: 100%; /* Ensures the navbar spans the entire width */
            z-index: 1000; /* Ensures it stays on top of other elements */
        }

        .navbar .logo-container {
            display: flex;
            align-items: center;
        }

        .navbar .logo-container img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .navbar .logo-container span {
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .navbar .nav-buttons {
            display: flex;
            gap: 5px;
            align-items: center;
        }

        .navbar .nav-buttons a {
            color: white;
            text-decoration: none;
            padding: 11px 20px;
            background-color: rgba(53, 45, 45, 0.6);
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .navbar .nav-buttons a:hover {
            background-color: #888;
        }

        .user-menu {
            position: relative;
        }

        .user-menu-icon {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding: 11px 20px;
            background-color: rgba(53, 45, 45, 0.6);
            border-radius: 5px;
        }

        .user-menu-icon i {
            margin-right: 5px;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 8px;
            padding: 0;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow: hidden;
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-menu a {
            display: block;
            color: #333;
            text-decoration: none;
            padding: 12px;
            border-radius: 0;
            transition: background-color 0.3s, color 0.3s;
        }

        .dropdown-menu a:hover {
            background-color: #f0f0f0;
            color: #000;
        }

        .user-menu:hover .dropdown-menu {
            display: block;
        }

        /* Add margin to body content to prevent it from overlapping with the fixed navbar */
        body > *:not(.navbar) {
            margin-top: 70px; /* Adjust this value based on the height of the navbar */
        }
    </style>
</head>
<body>

    <div class="navbar">
        <!-- Left side with logo and text -->
        <div class="logo-container">
            <img src="images/logo4.png" alt="Logo"> <!-- Replace 'logo.png' with your logo image path -->
            <span>Lifeblood_Connect</span>
        </div>

        <!-- Right side with navigation buttons -->
        <div class="nav-buttons">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
            <div class="user-menu">
                <div class="user-menu-icon">
                    <i class="bi bi-person-circle"></i>
                    <span>User</span>
                </div>
                <div class="dropdown-menu">
                    <a href="profile.php">User Profile</a>
                    <a href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
