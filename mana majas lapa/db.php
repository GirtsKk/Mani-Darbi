<?php
$servername = "fdb30.awardspace.net";
$username = "3634230_girts";
$password = "Kaleja3891";
$dbname = "3634230_girts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>