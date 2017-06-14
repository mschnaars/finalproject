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

$stmt->close();
$conn->close();



		//Get objectID and tag input via POST method from input box, assign to variables
	//SQL query to retrieve all tags from database
		//if (tags != existing tags)
			//new sql statement to insert new tags to tags table;

	//new sql statements to attach tags to images in the objecttags table;

?>