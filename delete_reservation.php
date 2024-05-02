<?php
session_start();

// Username is root
$user = 'root';
$password = '';

// Database name is firasflavors
$database = 'firasflavors';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user, $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// SQL query to delete a reservation
$sql = "DELETE FROM reservation WHERE id = " . $_POST['id'];
$mysqli->query($sql);

$mysqli->close();

// Redirect back to the reservations page
header('Location: admin_dashboard.php');
?>