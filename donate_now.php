<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Blood Now</title>
    <link rel="stylesheet" href="index.css">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        /* Hero Section */
        .hero {
            background: linear-gradient(to right, #e74c3c, #f39c12);
            color: white;
            text-align: center;
            padding: 80px 20px;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
            
        }
        .btn-cta {
            background-color: #fff;
            color: #e74c3c;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 5px;
            font-size: 1.1rem;
            transition: background-color 0.3s, transform 0.2s;
        }
        img {
        max-width: 60%;
        width: 30%;  /* Adjust width to 50% */
        height: auto; /* Maintain aspect ratio */
        border-radius: 10px;
        margin-top: -50px;
    }

        .btn-cta:hover {
            background-color: #f2f2f2;
            transform: translateY(-3px);
        }
        /* Features Section */
        .features {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 50px 20px;
            text-align: center;
        }
        .feature-box {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex: 1;
            transition: transform 0.3s ease;
        }
        .feature-box:hover {
            transform: scale(1.05);
        }
        .feature-box h3 {
            color: #e74c3c;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        .feature-box p {
            color: #555;
        }
        img {
            max-width: 100%;
            border-radius: 10px;
            margin-top: 20px;
        }
        .container {
            text-align: center;
            padding: 50px 20px;
        }
        .container p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            width:20%;
        }
    </style>
</head>
<body>
    <?php include('navBar.php'); ?>

    <!-- Hero Section -->
   
    <!-- Features Section -->
    <div id="features" class="features">
        <div class="feature-box">
            <h3>Quick and Easy</h3>
            <p>Donating blood takes less than 15 minutes and has a huge impact on lives.</p>
        </div>
        <div class="feature-box">
            <h3>Save Lives</h3>
            <p>Every donation can save up to three lives. Your effort matters!</p>
        </div>
        <div class="feature-box">
            <h3>Health Benefits</h3>
            <p>Regular blood donation improves heart health and reduces iron levels.</p>
        </div>
    </div>
    <div class="container">
    <a href="contact.php" class="btn-cta">Find a Donation Center</a>
    </div>
    <!-- Main Section -->
    <div class="container">
        <img src="images/77.webp" alt="Donate Blood">
        <p>Join the nearest blood drive and be someone’s hero today!</p>
        
    </div>

    <?php include('footer.php'); ?>
</body>
</html>
