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

$email = $mysqli->real_escape_string($_POST['email']);

// Check if the email is already signed up
$sql = "SELECT * FROM newsletter WHERE Email = '$email'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "This email is already signed up for the newsletter.";
} else {
    // Insert the email into the database
    $sql = "INSERT INTO newsletter (Email) VALUES ('$email')";
    if ($mysqli->query($sql) === TRUE) {
        echo "You have successfully signed up for the newsletter.";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

$mysqli->close();
?>