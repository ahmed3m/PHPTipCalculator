<!DOCTYPE html>
<html>
	<head>
		<title>Tip Calculator</title>
	</head>
	<body>
		<h2>Tip Calculator</h2>
		<form action="" method="POST">
			<p>Bill Subtotal: $<input type="text" name="text"></p>
			<p>Tip Percentage</p>
			<p>
			<?php
				for($i = 10; $i <= 20; $i += 5) {
			?>
					<input type="radio" name="percent" value ="<?php echo $i; ?>" >
			<?php
					echo "$i%";
				}
			?>
			</p>
			<p><input type="submit" value="Submit"></p>
		</form>
	</body>
</html>
<?php 
	if(isset($_POST['percent'])) {
		echo "The percentage is: " . $_POST['percent'];
	}
?>