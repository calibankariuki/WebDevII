<?php
$servername = "localhost"; 
$username = "username"; 
$password = "password"; 
$database = "menu_items"; 

$conn = new mysqli($localhost, $username, $password, $menu_items);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
