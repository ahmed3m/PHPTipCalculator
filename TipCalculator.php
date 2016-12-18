<!DOCTYPE html>
<html>
	<head>
		<title>Tip Calculator</title>
	</head>
	<body>
		<h2>Tip Calculator</h2>
		<form action="" method="POST">
			<p>Bill Subtotal: $<input type="text" name="bill" value="<?php echo $_POST['bill']; ?>"></p>
			<p>Tip Percentage</p>
			<p>
			<?php
				for($i = 10; $i <= 20; $i += 5) {
			?>
					<input type="radio" name="percent" value ="<?php echo $i; ?>" <?php if($_POST['percent'] == $i) echo 'checked="checked"'; ?>>
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
	if($_POST['bill'] > 0 && isset($_POST['percent'])) {
		$billSubtotal = $_POST['bill'];
		$percent = $_POST['percent'];
		$tip = round($billSubtotal * ($percent / 100), 2);
		$total = $billSubtotal + $tip;
		echo "Tip: $" . $tip . '<br />';
		echo "Total: $" . $total;
	}
?>