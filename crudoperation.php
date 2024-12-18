<?php
session_start();
include 'db.php'; // Connect to the database


// Handle update for donor
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_donor_id'])) {
    $donor_id = $_POST['update_donor_id'];
    $donor_name = $_POST['update_donor_name'];
    $blood_group = $_POST['update_blood_group'];
    $contact = $_POST['update_contact'];
    $nearest_hospital = $_POST['update_nearest_hospital'];

    $update_query = "UPDATE donors SET name = ?, blood_group = ?, contact = ?, nearest_hospital = ? WHERE id = ?";
    $stmt_update = $connection->prepare($update_query);
    $stmt_update->bind_param("ssssi", $donor_name, $blood_group, $contact, $nearest_hospital, $donor_id);

    if ($stmt_update->execute()) {
        $message = "Donor details updated successfully!";
    } else {
        $message = "Error updating donor details: " . $connection->error;
    }
    $stmt_update->close();
}

// Handle update for user
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_user_id'])) {
    $user_id = $_POST['update_user_id'];
    $username = $_POST['update_username'];
    $email = $_POST['update_email'];
    $role = $_POST['update_role'];

    $update_query = "UPDATE users SET username = ?, email = ?, role = ? WHERE id = ?";
    $stmt_update = $connection->prepare($update_query);
    $stmt_update->bind_param("sssi", $username, $email, $role, $user_id);

    if ($stmt_update->execute()) {
        $message = "User details updated successfully!";
    } else {
        $message = "Error updating user details: " . $connection->error;
    }
    $stmt_update->close();
}

// Handle delete for donor
if (isset($_GET['delete_donor_id'])) {
    $donor_id = $_GET['delete_donor_id'];
    $delete_query = "DELETE FROM donors WHERE id = ?";
    $stmt_delete = $connection->prepare($delete_query);
    $stmt_delete->bind_param("i", $donor_id);

    if ($stmt_delete->execute()) {
        $message = "Donor details deleted successfully!";
    } else {
        $message = "Error deleting donor details: " . $connection->error;
    }
    $stmt_delete->close();
}

// Handle delete for user
if (isset($_GET['delete_user_id'])) {
    $user_id = $_GET['delete_user_id'];
    $delete_query = "DELETE FROM users WHERE id = ?";
    $stmt_delete = $connection->prepare($delete_query);
    $stmt_delete->bind_param("i", $user_id);

    if ($stmt_delete->execute()) {
        $message = "User details deleted successfully!";
    } else {
        $message = "Error deleting user details: " . $connection->error;
    }
    $stmt_delete->close();
}

// Check if the admin is logged in
if (!isset($_SESSION['username']) || $_SESSION['username'] != 'admin') {
    header("Location: login.php"); // Redirect to login if not logged in as admin
    exit();
}

// Initialize message
$message = "";

// Handle form submission for inserting or updating blood details
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['blood_type']) && isset($_POST['blood_amount'])) {
    $blood_type = $_POST['blood_type'];
    $blood_amount = $_POST['blood_amount']; // Input in liters

    // Check if the blood type already exists in the database
    $check_query = "SELECT blood_amount FROM blood_details WHERE blood_type = ?";
    $stmt_check = $connection->prepare($check_query);
    $stmt_check->bind_param("s", $blood_type);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        // Blood type exists, update the amount
        $row = $result_check->fetch_assoc();
        $new_amount = $row['blood_amount'] + $blood_amount;

        $update_query = "UPDATE blood_details SET blood_amount = ? WHERE blood_type = ?";
        $stmt_update = $connection->prepare($update_query);
        $stmt_update->bind_param("ds", $new_amount, $blood_type);

        if ($stmt_update->execute()) {
            $message = "Blood amount updated successfully!";
        } else {
            $message = "Error updating blood details: " . $stmt_update->error;
        }
        $stmt_update->close();
    } else {
        // Blood type does not exist, insert new record
        $insert_query = "INSERT INTO blood_details (blood_type, blood_amount) VALUES (?, ?)";
        $stmt_insert = $connection->prepare($insert_query);
        $stmt_insert->bind_param("sd", $blood_type, $blood_amount);

        if ($stmt_insert->execute()) {
            $message = "Blood details inserted successfully!";
        } else {
            $message = "Error inserting blood details: " . $stmt_insert->error;
        }
        $stmt_insert->close();
    }

    $stmt_check->close();
}

// Handle form submission for updating blood details manually
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_blood_id'])) {
    $blood_id = $_POST['update_blood_id'];
    $blood_type = $_POST['update_blood_type'];
    $blood_amount = $_POST['update_blood_amount'];

    // Update blood details in the database
    $update_query = "UPDATE blood_details SET blood_type = ?, blood_amount = ? WHERE id = ?";
    $stmt_update = $connection->prepare($update_query);
    $stmt_update->bind_param("sdi", $blood_type, $blood_amount, $blood_id);

    if ($stmt_update->execute()) {
        $message = "Blood details updated successfully!";
    } else {
        $message = "Error updating blood details: " . $connection->error;
    }
    $stmt_update->close();
}

// Handle deletion of blood details
if (isset($_GET['delete_blood_id'])) {
    $blood_id = $_GET['delete_blood_id'];
    $delete_query = "DELETE FROM blood_details WHERE id = ?";
    $stmt_delete = $connection->prepare($delete_query);
    $stmt_delete->bind_param("i", $blood_id);

    if ($stmt_delete->execute()) {
        $message = "Blood details deleted successfully!";
    } else {
        $message = "Error deleting blood details: " . $connection->error;
    }
    $stmt_delete->close();
}

// Fetch blood details
$query_blood = "SELECT * FROM blood_details";
$result_blood = $connection->query($query_blood);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update & Delete Details - Blood Donation System</title>
    <link rel="stylesheet" href="index.css">
</head>
<style>
    /* General body styling */
    <style>
    /* General body styling */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        font-family: Arial, sans-serif;
    
    }

    /* Page container */
    .container {
        flex: 1; /* Allow this section to grow and fill the available space */
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    /* Footer styles */
  

    /* Table and form styles remain unchanged from your original code */



/* Page heading */
h1, h2 {
    text-align: center;
    color: #d9534f;
    margin-bottom: 10px;
    font-size: 28px;
}

/* Success or error message */
p {
    color: green;
    font-size: 16px;
    text-align: center;
}

/* Form styles */
form {
    margin-bottom: 30px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

form label {
    font-size: 16px;
    margin: 10px 0;
    color: #333;
}

form input[type="text"],
form input[type="number"],
form select {
    padding: 10px;
    width: 80%;
    max-width: 400px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

form button {
    background-color: #d9534f;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

form button:hover {
    background-color: #c9302c;
}

/* Table styling */
table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
    
}

th, td {
    padding: 12px 15px;
    text-align: center;
}

th {
    background-color: #d9534f;
    color: white;
}

tr:nth-child(even) {
    background-color: #c4c7c4;
}

tr:nth-child(odd) {
    background-color: #fff;
}

td a {
    text-decoration: none;
    color: #d9534f;
    font-weight: bold;
    

}

td a:hover {
    color: #c9302c;
    
}

/* Button inside the table for updating */
button {
    background-color: #6d68b7;
    color: white;
    padding: 12px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    margin-left: 30px;
}

button:hover {
    background-color: #209dc2;
}

/* Update form inside the table */
#updateForm {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 10px;
}

#updateForm input[type="text"], 
#updateForm input[type="number"] {
    width: 80%;
    margin-bottom: 10px;
}

/* Responsive design */
@media screen and (max-width: 768px) {
    h1, h2 {
        font-size: 22px;
    }

    form input[type="text"], form input[type="number"], form select {
        width: 100%;
    }

    table, th, td {
        font-size: 14px;
    }
}
/* Delete button styling */
/* Updated delete button styling */
.delete-button {
    background-color: #f44336; /* Use a red color for the delete button */
    color: white;
    padding: 6px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s;
}

/* Change to darker red when hovering */
.delete-button:hover {
    background-color: #d32f2f; /* Darker red when hovered */
}

</style>
<body>
<?php include 'navBar.php'; ?>
    <h1>Update & Delete Blood, Donor, and User Details</h1>

    <!-- Display success or error message -->
    <?php if (!empty($message)): ?>
        <p style="color: green;"><?php echo $message; ?></p>
    <?php endif; ?>

    <!-- Form to insert blood details -->
    <form action="crudoperation.php" method="POST">
        <label for="blood_type">Blood Type:</label>
        <select name="blood_type" id="blood_type" required>
            <option value="">Select Blood Type</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>

        <label for="blood_amount">Blood Amount (in liters):</label>
        <input type="number" step="0.01" name="blood_amount" id="blood_amount" required>

        <button type="submit">submit</button>
    </form>

    <!-- Blood Details Table -->
    <h2>Blood Details table</h2>
    <?php if ($result_blood->num_rows > 0): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Blood Type</th>
                <th>Amount (Liters)</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result_blood->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['blood_type']; ?></td>
                    <td><?php echo $row['blood_amount']; ?></td>
                    <td>
                        <a href="crudoperation.php?delete_blood_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this blood detail?');">Delete</a>
                        <button onclick="document.getElementById('updateForm<?php echo $row['id']; ?>').style.display='block'">Update</button>
                        <div id="updateForm<?php echo $row['id']; ?>" style="display: none;">
                            <form action="crudoperation.php" method="POST">
                                <input type="hidden" name="update_blood_id" value="<?php echo $row['id']; ?>">
                                <label for="update_blood_type">Blood Type:</label>
                                <input type="text" name="update_blood_type" value="<?php echo $row['blood_type']; ?>" required>

                                <label for="update_blood_amount">Blood Amount (Liters):</label>
                                <input type="number" step="0.01" name="update_blood_amount" value="<?php echo $row['blood_amount']; ?>" required>

                                <button type="submit">Submit Update</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No blood details available.</p>
    <?php endif; ?>




    

    <!-- Include Footer -->
    
</body>
</html>
    <!-- Donor Details Table -->
    <h2>Donor Details table</h2>
    <?php 
    // Fetch donor details
    $query_donors = "SELECT * FROM donors";
    $result_donors = $connection->query($query_donors);

    if ($result_donors->num_rows > 0): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                
                <th>Blood Group</th>
                <th>Contact</th>
                <th>Nearest Hospital</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result_donors->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    
                    <td><?php echo $row['blood_group']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['nearest_hospital']; ?></td>
                    <td>
                        <a href="crudoperation.php?delete_donor_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this donor?');">Delete</a>
                        <button onclick="document.getElementById('updateDonorForm<?php echo $row['id']; ?>').style.display='block'">Update</button>
                        <div id="updateDonorForm<?php echo $row['id']; ?>" style="display: none;">
                            <form action="crudoperation.php" method="POST">
                                <input type="hidden" name="update_donor_id" value="<?php echo $row['id']; ?>">
                                <label for="update_donor_name">Name:</label>
                                <input type="text" name="update_donor_name" value="<?php echo $row['name']; ?>" required>

                                <label for="update_blood_group">Blood Group:</label>
                                <input type="text" name="update_blood_group" value="<?php echo $row['blood_group']; ?>" required>

                                <label for="update_contact">Contact:</label>
                                <input type="text" name="update_contact" value="<?php echo $row['contact']; ?>" required>

                                <label for="update_nearest_hospital">Nearest Hospital:</label>
                                <input type="text" name="update_nearest_hospital" value="<?php echo $row['nearest_hospital']; ?>" required>

                                <button type="submit">Submit Update</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No donor details available.</p>
    <?php endif; ?>

    <!-- User Details Table -->
    <h2>User Details table</h2>
    <?php 
    // Fetch user details
    $query_users = "SELECT * FROM users";
    $result_users = $connection->query($query_users);

    if ($result_users->num_rows > 0): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Username</th>
                
                <th>Actions</th>
            </tr>
            <?php while ($row = $result_users->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    
                    <td>
                        <a href="crudoperation.php?delete_user_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                        <button onclick="document.getElementById('updateUserForm<?php echo $row['id']; ?>').style.display='block'">Update</button>
                        <div id="updateUserForm<?php echo $row['id']; ?>" style="display: none;">
                            <form action="crudoperation.php" method="POST">
                                <input type="hidden" name="update_user_id" value="<?php echo $row['id']; ?>">
                                <label for="update_username">Username:</label>
                                <input type="text" name="update_username" value="<?php echo $row['username']; ?>" required>


                                <button type="submit">Submit Update</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No user details available.</p>
    <?php endif; ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update & Delete Details - Blood Donation System</title>
    <link rel="stylesheet" href="index.css">
</head>
<style>
    /* General body styling */
    body {
        
        background-image: url('images/1.jpg'); /* Transparent background image */
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    color: white;
    }

    /* Page container */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    /* Page heading */
    h1{
        text-align: center;
        color: whiteb;
        margin-top:-40px;
        margin-bottom: -19px;
        font-size: 28px;
    }
    h2 {
        text-align: center;
        color: white;
        margin-top:-40px;
        margin-bottom: -19px;
        font-size: 28px;
    }

    /* Success or error message */
    p {
        color: yellow;
        font-size: 24px;
        text-align: center;
       
    }

    /* Form styles */
    form {
        margin-bottom: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.8); /* Transparent white background */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 20px auto;
    }

    form label {
        font-size: 16px;
        margin: 10px 0;
        color: #333;
    }

    
    form input[type="text"],
    form input[type="number"],
    form select {
        padding: 10px;
        width: 90%;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    form button {
        background-color: #d9534f;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    form button:hover {
        background-color: #c9302c;
    }

    /* Table styling */
    table {
        width: 90%; /* Reduce table width */
        margin: 20px auto;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #ddd;
        
    }

    th, td {
        padding: 12px 15px;
        text-align: center;
        color:black;
    }

    th {
        background-color: #d9534f;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #c4c7c4;
    }

    tr:nth-child(odd) {
        background-color: #fff;
    }

    td a {
        text-decoration: none;
        color: #d9534f;
        font-weight: bold;
    }

    td a:hover {
        color: white;
    }

    /* Button inside the table for updating */
    button {
        background-color: #6d68b7;
        color: white;
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    button:hover {
        background-color: #209dc2;
    }

    /* Update form inside the table */
    #updateForm {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 10px;
    }

    #updateForm input[type="text"], 
    #updateForm input[type="number"] {
        width: 90%;
        margin-bottom: 10px;
    }

    /* Responsive design */
    @media screen and (max-width: 768px) {
        h1, h2 {
            font-size: 22px;
        }

        form input[type="text"], form input[type="number"], form select {
            width: 100%;
        }

        table, th, td {
            font-size: 14px;
        }
    }

    /* Delete button styling */
    .delete-button {
        background-color: #f44336; /* Use a red color for the delete button */
        color: white;
        padding: 6px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
    }

    .delete-button:hover {
        background-color: #d32f2f; /* Darker red when hovered */
    }
</style>
<body>

</html>
</body>
    

    