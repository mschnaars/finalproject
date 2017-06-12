<?php

require(connect.php);

$result = mysqli_query($connect, "SELECT path FROM images ORDER BY RAND() LIMIT 1");
if($result) {
	echo "Good job!";
}

?>