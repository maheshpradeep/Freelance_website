<?php
$host = 'skillsurgedbserver.mysql.database.azure.com';
$dbname = 'freelance_db';
$user = 'freelance_user';  // Make sure the server name matches here
$pass = 'skillsurge123!';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
