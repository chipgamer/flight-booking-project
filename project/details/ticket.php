<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>
</head>
<body>
	<h1>Ticket</h1>
	<p>Flight: <?php echo $_POST['flight']; ?></p>
	<p>Passengers:</p>
	<ul>
		<?php
			for ($i = 1; $i <= $_POST['passengers']; $i++) {
				echo "<li>";
				echo "Name: " . $_POST["name$i"] . "<br>";
				echo "Age: " . $_POST["age$i"] . "<br>";
				echo "Gender: " . $_POST["gender$i"];
				echo "</li>";
			}
		?>
	</ul>
	<p>Thank you for choosing our airline. Your booking is confirmed.</p>
</body>
</html>