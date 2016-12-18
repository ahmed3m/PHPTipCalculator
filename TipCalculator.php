<!DOCTYPE html>
<html>
	<head>
		<title>Tip Calculator</title>
		<link type="text/css" rel="stylesheet" href="TipCalculator.css">
	</head>
	<body>
		<div>
		<h2 class="centered">Tip Calculator</h2>
		<form action="" method="POST">
			<p>Bill Subtotal: $<input type="text" name="bill" value="<?php echo $_POST['bill']; ?>"></p>
			<p>Tip Percentage</p>
			<p class="centered">
			<?php
				for($i = 10; $i <= 20; $i += 5) {
			?>
					<input type="radio" name="percent" value ="<?php echo $i; ?>" <?php if($_POST['percent'] == $i) echo 'checked="checked"'; ?>>
			<?php
					echo "$i%";
				}
			?>
			</p>
			<p class="centered"><input type="submit" value="Submit"></p>
		</form>
		</div>
	</body>
</html>

<html>
<div id="result">
<?php 
	if($_POST['bill'] > 0 && isset($_POST['percent'])) {
		$billSubtotal = $_POST['bill'];
		$percent = $_POST['percent'];
		$tip = round($billSubtotal * ($percent / 100), 2);
		$total = $billSubtotal + $tip;
		echo "Tip: $" . $tip . '<br />';
		echo "Total: $" . $total;
	} elseif (!($_POST['bill'] > 0) && !(isset($_POST['percent']))) {
		echo "Need to input proper bill subtotal value, and pick a tip percentage";
	} elseif (!($_POST['bill'] > 0)) {
		echo "Need to input proper bill subtotal value";
	} else {
		echo "Need to pick a tip percentage";
	}
?>
</div>
</html>



