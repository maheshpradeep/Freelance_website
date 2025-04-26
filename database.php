<?php
$host = 'localhost';
$user = 'root'; // default for XAMPP
$pass = '';     // leave empty for XAMPP
$dbname = 'freelance_db';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
