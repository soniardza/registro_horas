<?php 

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "work_hours";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

?>
