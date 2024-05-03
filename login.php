<?php
session_start();
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

    


            $stmt = $conn->prepare("SELECT * FROM Acc WHERE Username = '$username' AND UserPassword = '$password' ");
            $stmt->execute();
            $result = $stmt->get_result();
if ($result->num_rows >0) {
echo 'you succesfully logged in';
header("Location: webka.php");
    exit();



}
else
{
echo 'unsuccesfull';
}


$conn->close();
?>

