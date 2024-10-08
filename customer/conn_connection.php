<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // If you have a password, replace it here
$dbname = "the_hub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
