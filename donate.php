<?php
session_start();
include 'db.php'; // Include database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form data
    $address = $_POST['address'];
    $blood_group = $_POST['blood_group'];
    $contact = $_POST['contact'];
    $nearest_hospital = $_POST['nearest_hospital'];

    // Check if all required fields are filled
    if (!empty($address) && !empty($blood_group) && !empty($contact) && !empty($nearest_hospital)) {
        // Prepare and execute the SQL statement
        $sql = "INSERT INTO donors (address, blood_group, contact, nearest_hospital) VALUES (?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ssss", $address, $blood_group, $contact, $nearest_hospital);

            if ($stmt->execute()) {
                // Set a success message in the session
                $_SESSION['success_message'] = "Your details have been submitted successfully!";
                header("Location: donorDetailsSucess.php"); // Redirect back to the form page
                exit();
            } else {
                die("Error executing query: " . $stmt->error);
            }
        } else {
            die("Error preparing query: " . $connection->error);
        }
    } else {
        die("Please fill all required fields.");
    }
}
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
        .message-box {
            background-color: rgba(76, 175, 80, 0.1); /* Light green with transparency */
            border: 2px solid #4CAF50; /* Green border */
            color: #4CAF50; /* Green text */
            padding: 20px;
            margin: 20px auto;
            width: 50%;
            text-align: center;
            font-size: 18px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .message-box h3 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
        }

        .message-box p {
            margin-top: 10px;
            font-size: 16px;
        }

        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    <?php include('navBar.php'); ?>

    <!-- Hero Section with transparent background -->
    <div class="container">
        <?php if ($message): ?>
            <div class="message-box">
                <h3>Submission Successful!</h3>
                <p><?php echo htmlspecialchars($message); ?></p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Include Footer -->
    <?php include('footer.php'); ?>
</body>
</html>
