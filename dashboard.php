<?php
// Start the PHP session if needed
session_start();

// Include the database connection
include('db.php');

$connection = new mysqli($server, $user, $password, 'blood_donation2');

// Check connection
if ($connection->connect_error) {
    die("Connection error! " . $connection->connect_error);
}

// Fetch blood details from the database
$bloodQuery = "SELECT * FROM blood_details"; 
$bloodResult = $connection->query($bloodQuery);

// Fetch donor details from the database
$donorQuery = "SELECT * FROM donors"; 
$donorResult = $connection->query($donorQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .table-container {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%; /* Reduce the width of tables */
            max-width: 700px; /* Restrict maximum width */
            margin-bottom: 30px;
        }

        .table-container2 {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%; /* Reduce the width of tables */
            /* Restrict maximum width */
            margin-bottom: 30px;
        }

        h2 {
            color: #e74c3c;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-primary1 {
            background-color: #e74c3c;
            border: none;
            padding: 15px 35px;
            font-size:24px;
        }

        .btn-primary2 {
            background-color: #e74c3c;
            border: none;
            padding: 15px 15px;
            font-size:24px;
        }

        .btn-primary1:hover {
            background-color: rgba(169, 169, 169, 0.5);

        }
        .btn-primary2:hover {
            background-color: rgba(169, 169, 169, 0.5);

        }

        .text-center {
    margin-top: 15px; /* Adjust this value based on the height of your navbar */
    margin-bottom: 30px;
}


        table {
            text-align: center;
        }

        table thead {
            background-color: #e74c3c;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    <?php include('navBar.php'); ?>

   

    <div class="container">
        <!-- Blood Details Table -->
        <div class="table-container">
            <h2>Blood Details</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Blood Type</th>
                        <th>Amount (in litres)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($bloodResult->num_rows > 0): ?>
                        <?php while ($row = $bloodResult->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['blood_type']; ?></td>
                                <td><?php echo $row['blood_amount']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="2" class="text-center">No blood details available.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        
        <div class="text-center">
            <button class="btn btn-primary1 me-3" onclick="location.href='donorDetails.php'">Donate</button>
            <button class="btn btn-primary2" onclick="location.href='adminVerify.php'">Admin Panel</button>
        </div>
        <!-- Donor Details Table -->
        <div class="table-container2">
            <h2>Donor Details</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Address</th>
                        <th>Blood Group</th>
                        <th>Contact</th>
                        <th>Nearest Hospital</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($donorResult->num_rows > 0): ?>
                        <?php while ($row = $donorResult->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['blood_group']; ?></td>
                                <td><?php echo $row['contact']; ?></td>
                                <td><?php echo $row['nearest_hospital']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center">No donor details available.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Buttons -->
        
    </div>

    <!-- Include Footer -->
    
</body>
</html>
