<?php

require('connect.php');

// Variables
$name = "";
$email = "";
$pass = "";


// Assigning POST values to variables.
if (isset($_POST['submit'])) {
    if ($_POST['psw'] === $_POST['psw-repeat']) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['psw'];
        

        $sql = "INSERT INTO users (name, email, pass) VALUES ('$name', '$email', '$pass')";

        // Check
        if (mysqli_query($conn, $sql)) {
            echo "<br>" . "New record created successfully";
            // Redirect to another page
            header("Location: login.html");
            exit(); // Terminate script after redirection
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "<script type='text/javascript'>alert('Please enter the right password');</script>";
    }
}
?>
