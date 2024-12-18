<?php
include 'db.php';

$connection = new mysqli($server, $user, $password, 'blood_donation2');

// Insert admin credentials
$sql = "INSERT INTO admin (username, password) VALUES ('admin', 'admin123')";
if ($connection->query($sql) === true) {
    echo "Admin credentials inserted successfully!";
} else {
    echo "Error inserting admin credentials!";
}

$connection->close();
?>
