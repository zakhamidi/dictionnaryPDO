<?php
$server="localhost";
$login="root";
$pass="";
$db='dictionary';
$conn = new mysqli($server, $login, $pass,$db,'3308');
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>