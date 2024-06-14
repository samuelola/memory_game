<?php
$servername = "localhost";
$username = "daggrega_mcvities";
$password = "x0N?+CFJx(wM";
$db = "daggrega_mcvities";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "mcvities";



// $servername = "db-mysql-fra1-15091-do-user-4247704-0.b.db.ondigitalocean.com";
// $username = "doadmin";
// $password = "hlm6bpsrglqkf2wr";
// $db = "defaultdb";
// $port = '25060';
// $SSL_MODE='required';

// Create connection
// $conn = mysqli_connect($servername,$username,$password,$db,$port,$SSL_MODE);

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>