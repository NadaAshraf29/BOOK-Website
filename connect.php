<?php

// Create connection
//$conn = new mysqli($servername, $username, $password);

$conn = mysqli_connect('localhost', 'root','', 'formhandle');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  //The die() function is an alias of the exit() function.
  // mysqli_connect_error() function returns the error description from the last connection error, if any
}
echo "Connected successfully";


?>