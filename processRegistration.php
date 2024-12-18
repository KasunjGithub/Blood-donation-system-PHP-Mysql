<?php
// Start a session to use session variables
session_start();

// Include the database connection file
include('db.php'); // Ensure this file contains the connection logic for your database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form inputs
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Check if passwords match
    if ($password !== $confirm_password) {
        // Redirect back to the registration page with an error message
        $_SESSION['error'] = "Passwords do not match!";
        header("Location: register.php");
        exit();
    }

    // Check if the username already exists in the database
    $stmt = $connection->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Username exists, redirect back with an error message
        $_SESSION['error'] = "Username already exists. Please sign in.";
        header("Location: register.php");
        exit();
    }

    // Store the password without encryption (NOT RECOMMENDED)
    $plain_password = $password;

    // Insert the new user into the database
    $stmt = $connection->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $plain_password);

    if ($stmt->execute()) {
        // Registration successful, redirect to login page with success message
        $_SESSION['success'] = "Registration successful. Please log in.";
        header("Location: login.php");
        exit();
    } else {
        // Handle database error
        $_SESSION['error'] = "Something went wrong. Please try again.";
        header("Location: register.php");
        exit();
    }
}
?>
