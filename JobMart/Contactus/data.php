<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Message";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Store the form data in the database
$sql = "INSERT INTO Messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo 'Message sent successfully!';
} else {
    echo 'Failed to send message. Please try again.';
}

// Close the database connection
$conn->close();
?>