<?php
$servername = "localhost";
$username = "root";
$password = "!Kussia228?";
$dbname = "kasha";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// Process registration form submission

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Insert user into database
    $sql = "INSERT INTO Acc (Username, UserPassword) 
VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
header("Location: registration.php");
    exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>


