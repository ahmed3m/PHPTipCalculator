<!DOCTYPE html>

<?php 
	echo $_POST['text'];
?>


<html>
	<head>
		<title>Tip Calculator</title>
	</head>
	<body>
		<h2>Tip Calculator</h1>
		<form method="POST" action="">
			<p>Bill Subtotal: $<input type="text" name="text"></p>
			<p>Tip Percentage</p>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>