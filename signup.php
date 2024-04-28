<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firasflavors";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare a select statement to check if the email is already in use
$stmt = $conn->prepare("SELECT * FROM user WHERE Email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Email is already in use";
} else {
    // Prepare an insert statement
    $stmt = $conn->prepare("INSERT INTO user (FirstName, LastName, Email, Password) VALUES (?, ?, ?, ?)");

    // Bind the variables to the prepared statement
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Close the statement and the connection
$stmt->close();
$conn->close();
?>