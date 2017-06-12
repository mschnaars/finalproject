<?php

require_once('connect.php');

//Read directory and create array of filenames
$dir = 'images';
$files = array_slice(scandir($dir), 3, 20);

//echo "<pre>";
//print_r($files);
//echo "</pre>";

foreach($files as $file) {
	$path = $file;
	$stmt = $conn->prepare("INSERT INTO `objects` (`path`) VALUES (?)");
	$stmt->bind_param("s", $path);
	$stmt->execute();
}

echo "New records created successfully";

$stmt->close();
$conn->close();

?>