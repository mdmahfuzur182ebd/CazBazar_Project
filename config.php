<?php
$servername = "127.0.0.1:3308";
$username = "sajib";
$password = "1234";
$dbname = "carbazar";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo ' <script> alert("db connected")
  </script>';
 
}
