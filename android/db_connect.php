<?php
$host = "localhost";
$user = "root"; // your database username
$pass = ""; // your database password
$db = "gudang2"; // your database name

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>