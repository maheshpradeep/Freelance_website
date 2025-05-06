<?php
$host = 'skillsurgedbserver.mysql.database.azure.com';  // Must match service name in docker-compose.yml
$dbname = 'freelance_db';
$user = 'freelance_user@freelancedbserver';
$pass = 'skillsurge123!';

$conn = mysqli_connect($host, $dbname, $user, $pass);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
