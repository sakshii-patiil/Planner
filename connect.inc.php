<?php
// For LocalHost
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'abhiraj';
$dbname = 'planner';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname)  or die('Couldn\'t connect to database');

/*
// For Hosting 

$servername = 'localhost';
  $username = 'id14225069_abhiraj';
  $password = 'tmug9C-ULebK++3U';
  $dbname = 'id14225069_planner';

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection went wrong: " . $conn->connect_error); 
  } 
  
  $conn->close(); 
*/

?>
