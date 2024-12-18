<?php
// Start the PHP session if needed
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Blood Donation System</title>
    <link rel="stylesheet" href="index.css"> <!-- Link to external CSS file -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(178, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/hero-blood-donation.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 150px 20px;
        }

        .hero-section h1 {
            font-size: 50px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 20px;
            margin-bottom: 30px;
            color:black;
        }

        .btn-cta {
            background-color: #b20000;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .btn-cta:hover {
            background-color: #d50000;
        }

        /* Features Section */
        .features-section {
            padding: 60px 20px;
           margin-bottom:-100px;
            text-align: center;
            color:black;
        }

        .features-section h2 {
            color: white;
            font-size: 36px;
            margin-bottom: 40px;
        }

        .feature-card {
            border: none;
            transition: transform 0.3s ease-in-out;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            font-size: 50px;
            color: #b20000;
            margin-bottom: 20px;
        }

        /* Why Donate Section */
        .why-donate {
            background-color: #fff;
            padding: 60px 20px;
        }

        .why-donate h2 {
            text-align: center;
            color: #b20000;
            margin-bottom: 40px;
        }

        .why-donate p {
            font-size: 18px;
            text-align: justify;
            line-height: 1.8;
        }

        /* Testimonials Section */
        .testimonials-section {
            background-color: #f8f9fa;
            padding: 60px 20px;
            text-align: center;
        }

        .testimonials-section h2 {
            color: #b20000;
            margin-bottom: 40px;
        }

        .testimonial {
            max-width: 700px;
            margin: 0 auto;
            font-style: italic;
            color: #555;
        }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    <?php include('navBar.php'); ?>

    <!-- Hero Section -->
    <div class="features-section">
    <div class="container">
        <h2 class="text-center mb-5">Why Choose Our Platform?</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card feature-card shadow-sm p-4">
                    <div class="feature-icon">
                        <i class="bi bi-person-plus"></i>
                    </div>
                    <h5 class="fw-bold text-primary">Quick & Simple Registration</h5>
                    <p class="text-muted">Sign up in just a few minutes and join our growing donor community to make an immediate impact.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card shadow-sm p-4">
                    <div class="feature-icon">
                        <i class="bi bi-map"></i>
                    </div>
                    <h5 class="fw-bold text-success">Locate Nearby Drives</h5>
                    <p class="text-muted">Discover donation drives and hospitals nearby using our interactive location tools.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card shadow-sm p-4">
                    <div class="feature-icon">
                        <i class="bi bi-bell"></i>
                    </div>
                    <h5 class="fw-bold text-danger">Real-Time Alerts</h5>
                    <p class="text-muted">Receive notifications for urgent blood needs and upcoming events to stay informed.</p>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Features Section -->
    <div class="features-section">
    <div class="container">
        <h2 class="text-center mb-5">Why Choose Our Platform?</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card feature-card shadow-sm p-4">
                    <div class="feature-icon">
                        <i class="bi bi-heart"></i>
                    </div>
                    <h5 class="fw-bold text-primary">Life-Saving Contributions</h5>
                    <p class="text-muted">Every drop counts. Your donation can save lives and bring hope to families in need.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card shadow-sm p-4">
                    <div class="feature-icon">
                        <i class="bi bi-clipboard-check"></i>
                    </div>
                    <h5 class="fw-bold text-success">Safe and Secure Process</h5>
                    <p class="text-muted">We ensure a safe, seamless, and secure donation process for all donors and recipients.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card shadow-sm p-4">
                    <div class="feature-icon">
                        <i class="bi bi-calendar-event"></i>
                    </div>
                    <h5 class="fw-bold text-danger">Organized Donation Drives</h5>
                    <p class="text-muted">Participate in well-organized donation drives across various locations near you.</p>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Why Donate Section -->
    <div class="features-section">
    <div class="container">
        <h2 class="text-center mb-5">Why Choose Our Platform?</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card feature-card shadow-sm p-4">
                    <div class="feature-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h5 class="fw-bold text-primary">Trusted and Reliable</h5>
                    <p class="text-muted">Our platform is trusted by thousands for its reliability, security, and efficiency in saving lives.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card shadow-sm p-4">
                    <div class="feature-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h5 class="fw-bold text-success">Impactful Results</h5>
                    <p class="text-muted">Track real-time blood donations and witness the tangible impact you make in communities.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card shadow-sm p-4">
                    <div class="feature-icon">
                        <i class="bi bi-hand-heart"></i>
                    </div>
                    <h5 class="fw-bold text-danger">Community Support</h5>
                    <p class="text-muted">We build a strong community of donors, recipients, and healthcare partners to serve humanity better.</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Include Footer -->
    <?php include('footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
