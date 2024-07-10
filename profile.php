<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['userID'])) {
    header("Location: login.php");
    exit();
}

// Retrieve user information from session
$userID = $_SESSION['userID'];
$userName = $_SESSION['userName'];
$userEmail = $_SESSION['userEmail'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: white;
            background-color: white;
            background-image: url("IMG/9cb017d6436ad46c82302f7d4afca078.jpg");
            background-repeat: no-repeat;
            background-size: auto;
        }
        .container {
            max-width: 600px;
            margin: 100px 0 0 800px; /* Adjusted margin: 100px top, 150px left */
            background-color: rgb(195, 112, 251);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px white;
        }
        .profile-img {
            max-width: 150px;
            border-radius: 50%;
        }
        .profile-info {
            margin-top: 20px;
        }
        .profile-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>My Profile</h1>
        <div class="profile-info">
            <p><strong>ID:</strong> <?php echo htmlspecialchars($userID); ?></p>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($userName); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($userEmail); ?></p>
        </div>
    </div>
</body>
</html>
