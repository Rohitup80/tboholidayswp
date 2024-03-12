<?php

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "demoproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Country = $_POST['Country'];
    $Travel_Agent = $_POST['Travel_Agent'];
    $message = $_POST['message'];
    
    // Sanitize data (prevent SQL injection)
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $phone = mysqli_real_escape_string($conn, $phone);
    $Country = mysqli_real_escape_string ($conn, $Country);
    $Travel_Agent = mysqli_real_escape_string ($conn, $Travel_Agent);
    $message = mysqli_real_escape_string($conn, $message);
    
    // Insert into database
    $sql = "INSERT INTO leads (name, email, phone, country, Travel_Agent, message, date_created) VALUES ('$name', '$email', '$phone', '$country', '$Travel_Agent', '$message', NOW())";
    mysqli_query($conn, $sql);
    
    // Redirect to a thank you page
    header("Location: thankyou.php");
    exit();
}
