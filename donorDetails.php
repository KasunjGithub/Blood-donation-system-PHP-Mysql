<?php
session_start(); // Start the session
include 'db.php';

$message = ""; // Initialize message variable to avoid warnings

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form data
    $address = $_POST['address'];
    $blood_group = $_POST['blood_group']; // Blood group will be selected from dropdown
    $contact = $_POST['contact'];
    $nearest_hospital = $_POST['nearest_hospital'];

    // Prepare and bind the SQL statement
    $sql = "INSERT INTO donors (address, blood_group, contact, nearest_hospital) VALUES (?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssss", $address, $blood_group, $contact, $nearest_hospital);

    // Execute the query and check for success
    if ($stmt->execute()) {
        // Success message
        $message = "Your details have been collected successfully! Thank you for your donation. We will contact you soon.";
    } else {
        $message = "Error: Could not record your details. Please try again later.";
    }

    $stmt->close();
    $connection->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation System</title>
    <link rel="stylesheet" href="index.css">
    <style>
        /* Form Container */
        .container {
            background: rgba(255, 255, 255, 0.7);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
            text-align: left;
            font-size: 20px;
            margin: 10% auto;
        }

        .container h2 {
            text-align: center;
            color: #f44336;
            margin-bottom:30px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            
            color: black;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        input[type="text"]:focus,
        select:focus {
            outline: none;
            border-color: #f44336;
            box-shadow: 0 0 5px rgba(244, 67, 54, 0.4);
        }

        button {
            margin-top:30px;
            background: #f44336 ;
            color: #fff;
            padding: 10px 5px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #d32f2f;
        }

        .message-box {
            background-color: #e0f7fa;
            color: #00796b;
            border: 1px solid #00796b;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            font-size: 14px;
        }

        .message-box.error {
            background-color: #ffebee;
            color: #d32f2f;
            border: 1px solid #d32f2f;
        }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    <?php include('navBar.php'); ?>

    <div class="container">
        <h2>Donate Blood</h2>

        <?php if ($message): ?>
            <div class="message-box <?php echo strpos($message, 'Error') !== false ? 'error' : ''; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form action="donate.php" method="POST">
            <label for="address">Donor Address:</label>
            <textarea name="address" id="address" rows="4" required></textarea>


            <label for="blood_group">Blood Group:</label>
            <select name="blood_group" id="blood_group" required>
                <option value="">Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>

            <label for="contact">Contact Number:</label>
<input type="text" name="contact" id="contact" required pattern="^0\d{9}$" title="Phone number must start with 0 and contain exactly 10 digits" maxlength="10">


            <label for="nearest_hospital">Nearest General Hospital:</label>
            <select name="nearest_hospital" id="nearest_hospital" required>
    <option value="">Select Nearest Hospital</option>
    <option value="Colombo National Hospital">Colombo National Hospital</option>
    <option value="Kandy General Hospital">Kandy General Hospital</option>
    <option value="Jaffna Teaching Hospital">Jaffna Teaching Hospital</option>
    <option value="Galle General Hospital">Galle General Hospital</option>
    <option value="Anuradhapura General Hospital">Anuradhapura General Hospital</option>
    <option value="Ratnapura General Hospital">Ratnapura General Hospital</option>
    <option value="Kurunegala General Hospital">Kurunegala General Hospital</option>
    <option value="Badulla General Hospital">Badulla General Hospital</option>
    <option value="Monaragala General Hospital">Monaragala General Hospital</option>
    <option value="Matara General Hospital">Matara General Hospital</option>
    <option value="Ampara General Hospital">Ampara General Hospital</option>
    <option value="Batticaloa Teaching Hospital">Batticaloa Teaching Hospital</option>
    <option value="Polonnaruwa General Hospital">Polonnaruwa General Hospital</option>
    <option value="Kalutara General Hospital">Kalutara General Hospital</option>
    <option value="Vavuniya General Hospital">Vavuniya General Hospital</option>
    <option value="Trincomalee General Hospital">Trincomalee General Hospital</option>
    <option value="Mannar General Hospital">Mannar General Hospital</option>
    <option value="Hambantota General Hospital">Hambantota General Hospital</option>
    <option value="Nuwara Eliya General Hospital">Nuwara Eliya General Hospital</option>
</select>


            <button type="submit">Donate</button>
        </form>
    </div>

    <!-- Include Footer -->
    <?php include('footer.php'); ?>
</body>
</html>
