<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Impact</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f9f9f9; font-family: Arial, sans-serif; }
        .hero-section {
            background: linear-gradient(to right, #e74c3c, #f39c12);
            color: white;
            text-align: center;
            padding: 80px 20px;
        }
        .hero-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .hero-section .btn-hero {
            background-color: #fff;
            color: #e74c3c;
            padding: 10px 20px;
            font-size: 1.1rem;
            border-radius: 5px;
            text-decoration: none;
        }
        .hero-section .btn-hero:hover {
            background-color: #f2f2f2;
        }
        .box-section {
            padding: 50px 20px;
            text-align: center;
        }
        .box-section .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 30px;
            transition: transform 0.3s ease-in-out;
        }
        .box-section .card:hover {
            transform: scale(1.05);
        }
        .box-section .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 200px;
            object-fit: cover;
        }
        .box-section .card-title {
            color: #e74c3c;
            font-weight: bold;
            font-size: 1.5rem;
        }
        .box-section p {
            color: #555;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <?php include('navBar.php'); ?>

    <!-- Hero Section -->
    
    <!-- 4 Box Layout Section -->
    <div class="box-section container">
        <div class="row">
            <!-- Box 1 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="images/22.webp" alt="Donation 1">
                    <div class="card-body">
                        <h5 class="card-title">Emergency Support</h5>
                        <p>Your donation helps those in urgent need during crises and emergencies.</p>
                    </div>
                </div>
            </div>
            <!-- Box 2 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="images/33.webp" alt="Donation 2">
                    <div class="card-body">
                        <h5 class="card-title">Lifesaving Care</h5>
                        <p>Provide vital care to patients requiring immediate blood transfusions.</p>
                    </div>
                </div>
            </div>
            <!-- Box 3 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="images/44.webp" alt="Donation 3">
                    <div class="card-body">
                        <h5 class="card-title">Save a Child</h5>
                        <p>Help children suffering from blood-related illnesses live healthier lives.</p>
                    </div>
                </div>
            </div>
            <!-- Box 4 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="images/55.webp" alt="Donation 4">
                    <div class="card-body">
                        <h5 class="card-title">Community Impact</h5>
                        <p>Your contributions foster a stronger and healthier community for all.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>
