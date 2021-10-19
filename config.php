<?php
$servername = "localhost";
$username = "root";
$password = "RKHANDOOR1";
$dbname = "cmlold";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  //  die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}
?>
