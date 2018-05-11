<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "food";
$name = $_SESSION['name']; //session intitialised based on name 
$role = $_SESSION['role']; //session also initialised based on role 
$con = new mysqli($servername, $server_user, $server_pass, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql =INSERT INTO `food` (`ID`, `item`, `Price`, `quantity`) VALUES
(1, 'Biryani', 20, 2);


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>