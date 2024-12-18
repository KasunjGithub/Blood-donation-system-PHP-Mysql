<?php
// Start the PHP session if needed
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Blood Donation System</title>
    <link rel="stylesheet" href="index.css"> <!-- Link to external CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: rgba(255, 255, 255, 0.7);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
            font-size: 16px;
        }

        .container h2 {
            text-align: center;
            color: #990000;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 15px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: black;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            box-sizing: border-box;
            padding: 10px;
        }

        .eye-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: #666;
        }

        label {
            text-align: left;
            margin-bottom: 5px;
            color: #333;
            font-size: 1.1rem;
        }

        .btn {
            margin-top: 20px;
            margin-bottom: 20px;
            width: 100%;
            padding: 10px;
            background-color: #990000;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #660000;
        }

        .footer-link {
            text-align: center;
            margin-top: 10px;
            color: black;
        }

        .footer-link a {
            color: #990000;
            text-decoration: none;
        }

        .footer-link a:hover {
            text-decoration: underline;
        }

        .info-text {
            text-align: center;
            color: #990000;
            margin-bottom: 10px;
        }

        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
            margin-top: -10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    <?php include('navBar.php'); ?>

    <!-- Registration Form Section -->
    <div class="container">
        <h2>Register Here</h2>
        
        <form id="registrationForm" action="processRegistration.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                
            </div>

            <div id="errorMessage" class="error-message" style="display: none;">Passwords do not match.</div>

            <button type="submit" class="btn">Register</button>
        </form>
        <div class="footer-link">
            Already have an account? <u><a href="login.php">Login here</a></u>
        </div>
    </div>

    <!-- Include Footer -->
    <?php include('footer.php'); ?>

    <script>
        // JavaScript for password matching validation
        const form = document.getElementById('registrationForm');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirm_password');
        const errorMessage = document.getElementById('errorMessage');

        form.addEventListener('submit', function (event) {
            if (password.value !== confirmPassword.value) {
                // Show the error message and prevent form submission
                errorMessage.style.display = 'block';
                event.preventDefault();
            } else {
                // Hide the error message
                errorMessage.style.display = 'none';
            }
        });

        // Function to toggle password visibility
        function togglePasswordVisibility(inputId, iconElement) {
            const inputField = document.getElementById(inputId);
            if (inputField.type === 'password') {
                inputField.type = 'text';
                iconElement.textContent = '🙈'; // Change icon
            } else {
                inputField.type = 'password';
                iconElement.textContent = '👁️'; // Change icon back
            }
        }
    </script>
</body>
</html>
