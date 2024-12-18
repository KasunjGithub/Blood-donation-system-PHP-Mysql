<?php
// Start the PHP session if needed
session_start();

// Example: Set a success message (this message would typically come from a form submission process)
$message = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : ''; // Get the message from session
unset($_SESSION['success_message']); // Clear the message after displaying
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation System</title>
    <link rel="stylesheet" href="index.css"> <!-- Link to external CSS file -->
    <style>
        /* Styling for the message box */
/* Styling for the container */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 40vh;
    width:40%; /* Full viewport height */
    padding: 20px; /* Optional padding to avoid edges touching */
}

/* Styling for the message box */
.message-box {
    background: rgba(76, 175, 80, 0.2); /* Transparent green background */
    border: 2px solid #4CAF50; /* Green border */
    color: #388E3C; /* Dark green text */
    padding: 30px;
    margin: auto;
    width: 80%; /* Slightly larger width */
    text-align: center;
    font-family: Arial, sans-serif;
    font-size: 20px; /* Increased font size */
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2); /* Stronger shadow for emphasis */
}

/* Center the container and apply a white background just to the container content */
/* Styling for the parent container that centers the .container */
body, html {
    height: 100%;  /* Ensure the body and html take the full height */
    margin: 0;     /* Remove default margin */
}

.container-wrapper {
    display: flex; /* Use flexbox to center the content */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    height: 100vh; /* Full viewport height */
}

/* Styling for the .container */
.container {
    background-color: white;  /* Apply white background to the container */
    border-radius: 15px;      /* Rounded corners for the container */
    padding: 80px 20px;       /* Inner padding for spacing */
    color: black;             /* Text color */
    text-align: center;       /* Center the text */
    max-width: 1200px;        /* Set a reasonable maximum width */
    width: 100%;              /* Ensure it is responsive */
    margin: 0 auto;           /* Center the container horizontally */
}


/* Message styling */
.message-box h3 {
    margin: 0;
    font-size: 26px; /* Larger heading font */
    font-weight: bold;
    color: #388E3C; /* Dark green heading */
}

.message-box p {
    margin-top: 15px;
    font-size: 18px; /* Increased font size for the content */
}

.message-box .thank-you {
    color: #2C6B2F; /* Darker shade of green for emphasis */
    font-weight: bold;
}



    </style>
</head>
<body>
    <!-- Include Navbar -->
    <?php include('navBar.php'); ?>

    <!-- Centered container with success message -->
    <div class="container">
        <?php if ($message): ?>
            <div class="message-box">
                <h3>Submission Successful!</h3>
                <p><?php echo htmlspecialchars($message); ?></p>
                <p class="thank-you">Your generosity is greatly appreciated! Thank you for helping save lives.</p>
                <h3>We will contact you soon!<h3>
            </div>
        <?php endif; ?>
    </div>

    <!-- Include Footer -->
    <?php include('footer.php'); ?>
</body>
</html>
