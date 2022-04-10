<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// server info
$server = 'your server ip';
$user = 'db username';
$pass = 'db password';
$db = 'accountant_database';

// connect to the database
$con = new mysqli($server, $user, $pass, $db);
// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

?>