<?php
$host = 'db';  // Must match service name in docker-compose.yml
$dbname = 'freelance_db';
$user = 'freelance_user';
$pass = 'freelance_pass';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
