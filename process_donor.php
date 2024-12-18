<?php
include('db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate user inputs
    
    
    $address = $connection->real_escape_string($_POST['address']);
   
    $blood_group = $connection->real_escape_string($_POST['blood_group']);
    $contact = $connection->real_escape_string($_POST['contact']);
    $nearest_hospital = $connection->real_escape_string($_POST['nearest_hospital']);

    // SQL query to insert data into donors table
    $sql = "INSERT INTO donors (  address,blood_group, contact, nearest_hospital) 
            VALUES ( '$address', '$blood_group', '$contact', '$nearest_hospital')";

    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('Donor registered successfully!'); window.location.href='donateDetailsSuccess.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    // Close the connection
    $connection->close();
}
?>
