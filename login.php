<?php
session_start();
require('connect.php'); // Ensure this file contains the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['psw'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT ID, name, email FROM users WHERE email = ? AND pass = ?");
    $stmt->bind_param("ss", $email, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Store user information in session
        $_SESSION['userID'] = $user['ID'];
        $_SESSION['userName'] = $user['name'];
        $_SESSION['userEmail'] = $user['email'];
        
        // Redirect to home page
        header("Location: home.html");
        exit();
    } else {
        echo "Invalid email or password.";
    }

    $stmt->close();
}
?>


