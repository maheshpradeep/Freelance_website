<?php
$host = '';
$dbname = '';
$user = '';  // Make sure the server name matches here
$pass = '';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
