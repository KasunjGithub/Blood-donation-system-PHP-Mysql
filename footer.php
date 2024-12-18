<?php
// Start the PHP code
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> <!-- Bootstrap Icons -->
    <style>
        /* Footer Styles */
        footer {
            background-color: black;
            color: white;
            text-align: center;
            padding-top: 20px; /* Reduced padding to decrease footer height */
            position: fixed; /* Fix to the bottom of the page */
            padding-bottom: 10px;
            width: 100%;
            font-size:15px;
            font-family: Arial;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        footer a {

            color: white; /* Blood red color */
            text-decoration: none;
            font-weight: bold;
            display: inline-flex;
            align-items: center; /* Align text and icons vertically */
        }

        footer a:hover {
            color: #ff5722; /* Darker red when hovered */
        }

        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            margin: 0 10px;
            font-size: 16px; /* Adjust font size */
        }

        .social-icons i {
            margin-right: 5px; /* Add space between icon and text */
            font-size: 18px; /* Icon size */
        }

        .bi-facebook {
            color: #3b5998; /* Facebook blue */
        }

        .bi-twitter {
            color: #1da1f2; /* Twitter blue */
        }

        .bi-instagram {
            color: #e1306c; /* Instagram pink */
        }

        .footer-left {
            flex: 1;
            text-align: left;
        }

        .footer-right {
            flex: 1;
        }

        .footer-center {
            flex: 2;
        }
    </style>
</head>
<body>
    <!-- Footer Section -->
    <footer>
        <div class="footer-left">
            <p>Contact Us: <a href="mailto:info@blooddonation.org">info@blooddonation.org</a></p>
            <p>Phone: +94 714367551</p>
        </div>
        <div class="footer-center">
            <p>&copy; 2024 Blood Donation Organization. All Rights Reserved.</p>
            <p>Help save lives, donate blood!</p>
        </div>
        <div class="footer-right">
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i>Facebook</a> |
                <a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i>Twitter</a> |
                <a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i>Instagram</a>
            </div>
        </div>
    </footer>
</body>
</html>
