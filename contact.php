
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Blood Donation System</title>
    
    
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Internal CSS for reducing the height of footer and navigation bar -->
    <style>
        /* General Body Styles */
body {
    font-family: 'Arial', sans-serif;
    background: url('assets/1.jpg') no-repeat center center fixed;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 100vh;
}

/* Container for the Contact Us Section */
.contact-container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 40px;
    margin-top: 50px;
    margin-bottom: 50px;
    max-width: 960px;
    margin-left: auto;
    margin-right: auto;
}

/* Title & Subtitle Styles */
h2 {
    font-size: 2.5em;
    color: #d32f2f;
    margin-bottom: 20px;
    text-align: center;
}

p {
    font-size: 1.1em;
    color: #555;
    text-align: center;
    margin-bottom: 40px;
}

/* Row Styles for Each Contact Method */
.row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

/* Individual Contact Item Styles */
.contact-item {
    text-align: center;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    padding: 20px;
    flex: 1 1 30%;
    max-width: 300px;
    margin: 10px;
    border: 2px solid #d32f2f; /* Added border */
}

/* Adding border on hover */
.contact-item:hover {
    border: 2px solid #1976d2; /* Change border color when hovered */
}

.contact-item h5 {
    font-size: 1.5em;
    color: #333;
    margin-top: 10px;
}

.contact-item p {
    font-size: 1.1em;
    color: #555;
}

/* Icon Styles */
.fab, .fas {
    font-size: 3.5em;
    margin-bottom: 10px;
}

/* Icon Color Styles */
.fab.fa-whatsapp {
    color: #25D366;
}

.fas.fa-envelope {
    color: #d32f2f;
}

.fab.fa-facebook-f {
    color: #3b5998;
}

.fas.fa-map-marker-alt {
    color: #d32f2f;
}

.fas.fa-phone {
    color: #1976d2;
}

.fab.fa-instagram {
    color: #E4405F;
}

/* Anchor Tag Styles */
a {
    color: #d32f2f;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

/* Footer Styles 
.site-footer {
    text-align: center;
    padding: 20px;
    background-color: #ff6659;
    color: white;
    border-top: 2px solid #c62828;
    position: fixed;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: auto;
    max-width: 100%;
}/* General Body Styles */
body {
    font-family: 'Arial', sans-serif;
    background: url('assets/1.jpg') no-repeat center center fixed;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 100vh;
}

/* Header (Navigation Bar) Styles */


/* Container for the Contact Us Section */
.contact-container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 40px;
    margin-top: 50px;
    margin-bottom: 50px;
    max-width: 960px;
    margin-left: auto;
    margin-right: auto;
}

/* Title & Subtitle Styles */
h2 {
    font-size: 2.5em;
    color: #d32f2f;
    margin-bottom: 20px;
    text-align: center;
}

p {
    font-size: 1.1em;
    color: #555;
    text-align: center;
    margin-bottom: 40px;
}

/* Row Styles for Each Contact Method */
.row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

/* Individual Contact Item Styles */
.contact-item {
    text-align: center;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    padding: 20px;
    flex: 1 1 30%;
    max-width: 300px;
    margin: 10px;
    border: 2px solid #d32f2f; /* Added border */
}

/* Adding border on hover */
.contact-item:hover {
    border: 2px solid #1976d2; /* Change border color when hovered */
}

.contact-item h5 {
    font-size: 1.5em;
    color: #333;
    margin-top: 10px;
}

.contact-item p {
    font-size: 1.1em;
    color: #555;
}

/* Icon Styles */
.fab, .fas {
    font-size: 3.5em;
    margin-bottom: 10px;
}

/* Icon Color Styles */
.fab.fa-whatsapp {
    color: #25D366;
}

.fas.fa-envelope {
    color: #d32f2f;
}

.fab.fa-facebook-f {
    color: #3b5998;
}

.fas.fa-map-marker-alt {
    color: #d32f2f;
}

.fas.fa-phone {
    color: #1976d2;
}

.fab.fa-instagram {
    color: #E4405F;
}

/* Anchor Tag Styles */
a {
    color: #d32f2f;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

/* Footer Styles */
.site-footer {
    text-align: center;
    padding: 10px 0; /* Reduced padding for a shorter height */
    background-color: #ff6659;
    color: white;
    border-top: 2px solid #c62828;
    position: fixed;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: auto;
    max-width: 100%;
}

.site-footer p {
    margin: 0;
    font-size: 1.1em; /* Slightly smaller text size */
}

/* Responsive Styles */
@media screen and (max-width: 768px) {
    .contact-item {
        flex: 1 1 45%; /* Reduce the width on smaller screens */
    }
}

@media screen and (max-width: 480px) {
    .contact-item {
        flex: 1 1 100%; /* Stack the contact items on mobile screens */
    }
}

<!-- Emergency Contact Section -->
<div style="
    background-color: #ffe6e6;
    color: #d32f2f;
    text-align: center;
    padding: 15px;
    border: 2px solid #d32f2f;
    border-radius: 10px;
    margin: 20px auto;
    font-size: 1.2rem;
    font-weight: bold;
    max-width: 600px;
">
    <i class="fas fa-phone-alt" style="margin-right: 10px; color: #d32f2f;"></i>
    For Blood Emergencies, Contact Us Immediately at:
    <a href="tel:+1234567890" style="color: #d32f2f; text-decoration: underline;">+1 234 567 890</a>
</div>



.site-footer p {
    margin: 0;
    font-size: 1.2em;
}

/* Responsive Styles */
@media screen and (max-width: 768px) {
    .contact-item {
        flex: 1 1 45%; /* Reduce the width on smaller screens */
    }
}

@media screen and (max-width: 480px) {
    .contact-item {
        flex: 1 1 100%; /* Stack the contact items on mobile screens */
    }
}

        /* Reduce the height of the Navigation Bar */
       

      
    </style>
</head>
<body>
<?php include 'navBar.php'; ?>

    <!-- Contact Us Section -->
    <div class="container contact-container">
        <h2 class="text-center">Contact Us</h2>
        <p class="text-center">We are here to help you! Feel free to reach out to us using any of the following methods:</p>
        

<!-- Emergency Contact Section -->
<div style="
    background-color: #ffe6e6;
    color: #d32f2f;
    text-align: center;
    padding: 15px;
    border: 2px solid #d32f2f;
    border-radius: 10px;
    margin: 20px auto;
    font-size: 1.2rem;
    font-weight: bold;
    max-width: 600px;
">
    <i class="fas fa-phone-alt" style="margin-right: 10px; color: #d32f2f;"></i>
    For Blood Emergencies, Contact Us Immediately at:<br>
    <a href="tel:+1234567890" style="color: #d32f2f; text-decoration: underline;">0572224155</a>
</div>



        <!-- Row for Contact Methods (WhatsApp, Email, Facebook, Address, Phone, Instagram) -->
        <div class="row">
            <!-- WhatsApp -->
            <div class="contact-item">
                <i class="fab fa-whatsapp fa-3x" style="color: #25D366;"></i>
                <h5>WhatsApp</h5>
                <p>+94 7643456</p>
            </div>
            <!-- Email -->
            <div class="contact-item">
                <i class="fas fa-envelope fa-3x" style="color: #d32f2f;"></i>
                <h5>Email</h5>
                <p>info@blooddonation.com</p>
            </div>
            <!-- Facebook -->
            <div class="contact-item">
                <i class="fab fa-facebook-f fa-3x" style="color: #3b5998;"></i>
                <h5>Facebook</h5>
                <p><a href="https://facebook.com/blooddonation" target="_blank">facebook.com/blooddonation</a></p>
            </div>
        </div>

        <!-- Row for Address, Phone, and Instagram -->
        <div class="row">
            <!-- Address -->
            <div class="contact-item">
                <i class="fas fa-map-marker-alt fa-3x" style="color: #d32f2f;"></i>
                <h5>Address</h5>
                <p>123 Blood Donation Street, Life City, 98765</p>
            </div>
            <!-- Phone -->
            <div class="contact-item">
                <i class="fas fa-phone fa-3x" style="color: #1976d2;"></i>
                <h5>Phone</h5>
                <p>+94 712345431</p>
            </div>
            <!-- Instagram -->
            <div class="contact-item">
                <i class="fab fa-instagram fa-3x" style="color: #E4405F;"></i>
                <h5>Instagram</h5>
                <p><a href="https://instagram.com/blooddonation" target="_blank">instagram.com/blooddonation</a></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    

</body>
</html>
