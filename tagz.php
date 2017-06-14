<!DOCTYPE html>
<html>
	<head>
		<?php require('retrieve.php') ?>
		<link rel="stylesheet" type="text/css" href="custom.css">
	</head>
	<body>
		<h1>Tagz</h1>
		<h2>The tagly tagger for tagging</h2>
		<div>
			<img src="images/<?php echo $randomPath; ?>" />
			<p> Image ID: <?php echo $randomObject; ?> <br>
				Current tags:
			</p>
		</div>
		<form action="addtags.php" method="post">
			<h3>Add some tagz:</h3>
			<label for="tags">Tags:</label>
			<input type="text" placeholder="tags" name="tags">
			<input type="hidden" value="<?php echo $randomObject; ?>" name="id">
			<button type="submit">Submit</button>
		</form>
	</body>
</html>