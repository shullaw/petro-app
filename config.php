<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "cppc";
$conn = new mysqli($servername, $username, $password, $dbname) or
    die("Connect failed: %s\n". $conn -> connect_error);
?>
