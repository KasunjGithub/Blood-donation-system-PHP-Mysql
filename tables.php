<?php
include 'db.php';

$connection = new mysqli($server, $user, $password, 'blood_donation2');

// Check connection
if ($connection->connect_error) {
    die("Connection error! " . $connection->connect_error);
}

// Create admin table
$sql = 'CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(25) NOT NULL,
    password VARCHAR(25) NOT NULL
)';
$connection->query($sql);

// Create users table
$sql = 'CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(25) NOT NULL,
    password VARCHAR(25) NOT NULL
)';
$connection->query($sql);

// Create donors table
$sql = 'CREATE TABLE IF NOT EXISTS donors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    
    
    address VARCHAR(255),
    
    blood_group VARCHAR(10),
    contact VARCHAR(15),
    nearest_hospital VARCHAR(255)
)';

$connection->query($sql);

// Create blood details table
$sql = 'CREATE TABLE IF NOT EXISTS blood_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    blood_type VARCHAR(10),
    blood_amount INT
)';
$connection->query($sql);

echo "Tables created successfully!";
$connection->close();
?>
