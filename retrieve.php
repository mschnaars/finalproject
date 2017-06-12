<?php

require_once('connect.php');

$sql = "SELECT * FROM objects ORDER BY RAND() LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$randomPath = $row['path'];
$randomObject = $row['objectID'];

$conn->close();
?>