<!DOCTYPE html>
<html>
	<head>
		<?php require('retrieve.php') ?>
	</head>
	<body>
		<h1>Tagz</h1>
		<h2>The tagly tagger for tagging</h2>
		<div>
			<img src="images/<?php echo $randompath; ?>" />
		</div>
		<form action="script for something" method="post">
			<h3>Add some tagz:</h3>
			<label for="tags">Tags:</label>
			<input type="text" value="tags">
			<button type="submit">Submit</button>
		</form>
	</body>
</html>