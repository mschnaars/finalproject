<?php

require_once('connect.php');

//Take all inputted tags and turn into an array
$tags = str_replace(', ', ',', $_POST['tags']);
$tagArray = explode(',', $tags);

//Retrieve all tags from SQL database and push into an array
$sql = "SELECT tagName FROM tags";
$result = mysqli_query($conn, $sql);
$sqlTagArray = array();
while($row = mysqli_fetch_assoc($result)) {
	$sqlTagArray[] = $row['tagName'];
}

//Create an array of new unique tags not already in the database
$newTags = array_diff($tagArray, $sqlTagArray);

//Add any new tags into the database
foreach($newTags as $tag) {
	$newTag = $tag;
	$stmt = $conn->prepare("INSERT INTO `tags` (`tagName`) VALUES (?)");
	$stmt->bind_param("s", $newTag);
	$stmt->execute();
}

//Add assoc tags with the submitted image




$stmt->close();
$conn->close();

	//new sql statements to attach tags to images in the objecttags table;

?>