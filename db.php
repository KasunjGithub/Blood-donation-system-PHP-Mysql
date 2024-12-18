<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'blood_donation2';

// Create connection
$connection = new mysqli($server, $user, $password,$database);

// Check connection
if ($connection->connect_error) {
    die("Connection error! " . $connection->connect_error);
} else {
    /*echo "Connected successfully!!!";
    // Create the database
    $sql = 'CREATE DATABASE IF NOT EXISTS blood_donation';
    if ($connection->query($sql) === true) {
        echo "Database created successfully!!<br>";
    } else {
        die("Error in creating database");
    }*/
}

//$connection->close();
?>
