<!DOCTYPE html>
<html>
<head>
	<title>Passenger Details</title>
</head>
<body>
	<h1>Passenger Details</h1>
	<?php
		$flight = $_POST['flight'];
		$passengers = $_POST['passengers'];
	?>
	<p>You have selected <?php echo $flight; ?> for <?php echo $passengers; ?> passengers.</p>
	<form action="D:\project\details\ticket.php" method="post">
		<?Continuing from the previous answer:


		<input type="hidden" name="flight" value="<?php echo $flight; ?>">
		<input type="hidden" name="passengers" value="<?php echo $passengers; ?>">
		<?php
			for ($i = 1; $i <= $passengers; $i++) {
				echo "<h2>Passenger $i</h2>";
				echo "<label for='name$i'>Name:</label>";
				echo "<input type='text' id='name$i' name='name$i'><br>";
				echo "<label for='age$i'>Age:</label>";
				echo "<input type='number' id='age$i' name='age$i' min='1' max='120'><br>";
				echo "<label for='gender$i'>Gender:</label>";
				echo "<select id='gender$i' name='gender$i'>";
				echo "<option value='male'>Male</option>";
				echo "<option value='female'>Female</option>";
				echo "</select><br>";
			}
		?>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
