<?php

function getTagID($tagName) {
	global $conn;
	$sql = "SELECT tagID FROM tags WHERE tagName = '$tagName'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$tagID = $row['tagID'];
	return $tagID;
}

?>