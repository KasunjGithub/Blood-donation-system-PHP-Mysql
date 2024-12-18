<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Blood Donor Day</title>
    <link rel="stylesheet" href="index.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }
        .hero {
    background: white;
    color: black;
    text-align: center;
    padding: 80px 20px;
    max-width: 1200px;  /* Set a maximum width */
    margin: 0 auto; /* Center the section horizontally */
}

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
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
        .btn-cta:hover {
            background-color: #f2f2f2;
            transform: translateY(-3px);
        }
        .container {
            text-align: center;
            padding: 50px;
        }
        .container img {
            max-width: 100%;
            border-radius: 10px;
            margin-top: 20px;
            width: 80%;
        }
        .container p {
            font-size: 18px;
            line-height: 1.6;
            color: black;
            margin-top: 20px;
        }
        .feature-box {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin-top: 20px;
        }
        .feature-box h3 {
            color: #e74c3c;
            font-size: 1.5rem;
        }
        .feature-box p {
            color: #555;
        }
        .btn-lg-custom {
            background-color: #e74c3c;
            color: white;
            border-radius: 30px;
            padding: 15px 30px;
            font-size: 1.1rem;
            margin-top: 20px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-lg-custom:hover {
            background-color: #f39c12;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <?php include('navBar.php'); ?>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Celebrate World Blood Donor Day</h1>
        <p>World Blood Donor Day celebrates the generosity of blood donors worldwide. Be part of the mission and spread awareness.</p>
        <a href="login.php" class="btn-lg-custom">Become a Donor</a>
    </div>

    <!-- Main Content Section -->
    <div class="container">
        <h2>Why Blood Donation Matters</h2>
        
        
        

        <div class="row">
            <div class="col-md-4">
                <div class="feature-box">
                    <h3>Save Lives</h3>
                    <p>Each blood donation can save up to three lives. Your generosity can change the world.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <h3>Make a Difference</h3>
                    <p>By donating blood regularly, you ensure that hospitals and clinics have a constant supply.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <h3>Join the Global Movement</h3>
                    <p>Blood donation is an act of solidarity. Join millions of people across the world in this life-saving effort.</p>
                </div>
            </div>
        </div>
        
        
        <a href="donate.php" class="btn-lg-custom">Find a Donation Center</a>
    </div>

    <?php include('footer.php'); ?>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
