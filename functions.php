<?php

include('connect.php');

function getTagID($tagName) {
	global $conn;
	$sql = "SELECT tagID FROM tags WHERE tagName = '$tagName'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$tagID = $row['tagID'];
	return $tagID;
}

$tagID = getTagID('cat');
if($tagID){
	echo "ID of tag 'cat' is " . $tagID . ". Your function is successful.";
}


?>