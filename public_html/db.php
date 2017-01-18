<?php
$servername = "10.129.9.7";
$username = "vadmin";
$password = "Vadmin3398";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>