<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email=$_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'jobmart964@gmail.com'; 
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email. Please try again.';
    }
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactus";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$sql = "INSERT INTO message (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo 'Message sent successfully and stored in the database!';
} else {
    echo 'Failed to send message and store in the database. Please try again.';
}


$conn->close();
?>

