<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Community</title>
    <link rel="stylesheet" href="index.css">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #e74c3c;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
            color: white;
        }
        img {
            max-width: 20%;
            border-radius: 10px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .social-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }
        .social-buttons a {
            text-decoration: none;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            padding: 12px 25px;
            display: inline-flex;
            align-items: center;
            transition: transform 0.2s ease-in-out;
        }
        .social-buttons a:hover {
            transform: translateY(-5px);
        }
        .facebook {
            background-color: #3b5998;
        }
        .whatsapp {
            background-color: #25D366;
        }
        .telegram {
            background-color: #0088cc;
        }
        .social-buttons a i {
            margin-right: 10px;
        }
    </style>
    <!-- FontAwesome Icons for Social Media -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('navBar.php'); ?>
    <div class="container">
        <h1>Join Our Community of Compassionate Donors</h1>
        <p></p>
        <img src="images/66.webp" alt="Community of Donors">
        <p>Join our social media groups to stay updated and connected with our donor community:</p>
        <div class="social-buttons">
            <a href="https://www.facebook.com/YourCommunityPage" class="facebook" target="_blank">
                <i class="fab fa-facebook-f"></i> Join on Facebook
            </a>
            <a href="https://chat.whatsapp.com/YourWhatsAppGroup" class="whatsapp" target="_blank">
                <i class="fab fa-whatsapp"></i> Join on WhatsApp
            </a>
            <a href="https://t.me/YourTelegramChannel" class="telegram" target="_blank">
                <i class="fab fa-telegram-plane"></i> Join on Telegram
            </a>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
