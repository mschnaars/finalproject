<?php

$server = "localhost";
$username = "tagz";
$password = "tagz";
$dbName = "tagz";
$conn = new mysqli($server, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
