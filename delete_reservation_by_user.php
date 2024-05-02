<?php
session_start();

// Username root
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

if(isset($_POST['id'])) {
    $id = $mysqli->real_escape_string($_POST['id']);

    // SQL query to delete data from database
    $sql = "DELETE FROM reservation WHERE id = '$id'";
    $result = $mysqli->query($sql);

    if ($result === TRUE) {
        
        header("Location: reservation_by_user.php?email=" . $_POST['email']);
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }
}

$mysqli->close();
?>