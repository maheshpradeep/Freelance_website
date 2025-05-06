<?php
$host = 'skillsurgedbserver.mysql.database.azure.com';  // Must match service name in docker-compose.yml
$dbname = 'freelance_db';
$user = 'freelance_user@skillsurgedbserver';
$pass = 'skillsurge123!';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
