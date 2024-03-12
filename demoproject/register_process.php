<?php
// Database connection code (adjust with your credentials)
$servername = "localhost";
$username = "root";
$password = ""; // Password is often empty for localhost setups
$dbname = "demoproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO users (fullname, username, email, password) VALUES ('$fullname' , '$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else { 
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
