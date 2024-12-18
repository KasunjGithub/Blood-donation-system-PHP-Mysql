<?php
// Start the PHP session if needed
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation System</title>
    <link rel="stylesheet" href="index.css"> <!-- Link to external CSS file -->
    <style>
        
        /* Styling for the image section */
        .image-section {
            text-align: center;
            margin: 50px 0;
            font-family: Arial, sans-serif;
        }

        .image-section h2 {
            margin-bottom: 20px;
            font-size: 28px;
            color: white;
        }

        .image-grid {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top:30px;
            gap: 30px;
        }

        .image-row {
            display: flex;
            justify-content: center;
            gap: 80px;
        }

        .image-card {
    width: 500px;
    text-align: center;
    background: rgba(244, 67, 54, 0.2); /* Transparent white background */
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 25px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}


        .image-card img {
            width: 100%;
            border-radius: 8px;
     /* Make the image transparent */
            transition: opacity 0.03s ease;
        }

        .image-card img:hover {
            opacity: 1; /* Full opacity on hover */
        }

        .image-card p {
            margin-top: 10px;
            font-size: 16px;
            color: white;
        }

        .image-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    <?php include('navBar.php'); ?>

    <!-- Hero Section with transparent background -->
    <div class="hero-section">
        <div class="hero-content">
            <h1>Welcome to the Blood Donation System</h1>
            <p>Donate blood, save lives.</p>
            <div class="buttons">
                <a href="login.php" class="btn">Login</a>
                <a href="register.php" class="btn">Register</a>
            </div>
        </div>
    </div>

    <!-- Image Section -->
    <div class="image-section">
        <h2>Why Donate Blood?</h2>
        <div class="image-grid">
    <!-- First Row -->
    <div class="image-row">
        <div class="image-card">
            <a href="donation_impact.php">
                <img src="images/camp3.jpg" alt="Save Lives">
            </a>
            <p>Every donation can save up to three lives.</p>
        </div>
        <div class="image-card">
            <a href="donor_community.php">
                <img src="images/camp2.jpg" alt="Community Support">
            </a>
            <p>Join a community of compassionate donors.</p>
        </div>
    </div>
    <!-- Second Row -->
    <div class="image-row">
        <div class="image-card">
            <a href="donate_now.php">
                <img src="images/camp4.jpg" alt="Health Benefits">
            </a>
            <p>Blood donation has proven health benefits.</p>
        </div>
        <div class="image-card">
            <a href="world_donor_day.php">
                <img src="images/camp6.jpg" alt="Emergency Needs">
            </a>
            <p>Help meet urgent blood supply needs.</p>
        </div>
    </div>
</div>

    </div>

    <!-- Include Footer -->
    <?php include('footer.php'); ?>
</body>
</html>
