<?php
// Start the PHP session
session_start();

// Simulated database update logic (replace with real database queries)
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

$message = "";

// Check if username form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_username'])) {
    $_SESSION['username'] = htmlspecialchars($_POST['username']); // Update session with new username
    $message = "Username updated successfully!";
}

// Check if password form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_password'])) {
    $password = htmlspecialchars($_POST['password']);
    // Here you would hash the password and save it to the database
    $message = "Password updated successfully!";
}

// User data fetched from session
$userData = [
    'username' => $_SESSION['username'], // Current username
    'blood_group' => 'O+',
    'profile_picture' => 'images/my.png' // Path to your local image
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Blood Donation System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .profile-card {
            max-width: 600px;
            margin: 50px auto;
            background: orange;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            background-color: white;
            color: orange;
            padding: 30px;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .profile-header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 5px solid #fff;
            margin-bottom: 15px;
        }

        .profile-header h2 {
            margin: 0;
        }

        .profile-body {
            padding: 30px;
        }

        .btn-action {
            background-color: #d9534f;
            color: white;
            border: none;
            margin: 10px;
            padding: 10px 20px;
        }

        .btn-action:hover {
            background-color: #c9302c;
        }

        .form-section {
            display: none;
            margin-top: 20px;
        }
    </style>
</head>
<?php include('navBar.php'); ?>
<body class="bg-light">
    <div class="container">
        <div class="profile-card">
            <!-- Profile Header -->
            <div class="profile-header">
                <img src="<?php echo $userData['profile_picture']; ?>" alt="User Profile Picture">
                <h2><?php echo htmlspecialchars($userData['username']); ?></h2>
                <p>Blood Group: <strong><?php echo $userData['blood_group']; ?></strong></p>
            </div>

            <!-- Success/Error Message -->
            <?php if ($message): ?>
                <div class="alert alert-success text-center"><?php echo $message; ?></div>
            <?php endif; ?>

            <!-- Profile Body -->
            <div class="profile-body text-center">
                <button class="btn btn-action" onclick="toggleSection('usernameForm')">Edit Username</button>
                <button class="btn btn-action" onclick="toggleSection('passwordForm')">Change Password</button>

                <!-- Update Username Form -->
                <div id="usernameForm" class="form-section">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="username" class="form-label">New Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter new username" required>
                        </div>
                        <button type="submit" name="update_username" class="btn btn-action">Update Username</button>
                    </form>
                </div>

                <!-- Update Password Form -->
                <div id="passwordForm" class="form-section">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter new password" required>
                        </div>
                        <button type="submit" name="update_password" class="btn btn-action">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleSection(sectionId) {
            document.getElementById('usernameForm').style.display = 'none';
            document.getElementById('passwordForm').style.display = 'none';

            document.getElementById(sectionId).style.display = 'block';
        }
    </script>
</body>
</html>
