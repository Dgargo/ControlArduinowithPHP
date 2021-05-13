<!DOCTYPE html>
<html>
<head>
	<title>Billards V1</title>
</head>
<body>

	<?php
		$port = fopen("COM4","w+");
		sleep(2);
	?>
	<br>
	<p>#1</p>
	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="on1"/>
		<input type="Submit" value="on">
	</form>

	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="off1"/>
		<input type="Submit" value="off">
	</form>

	<p>#2</p>
	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="on2"/>
		<input type="Submit" value="on">
	</form>

	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="off2"/>
		<input type="Submit" value="off">
	</form>

	<p>#3</p>
	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="on3"/>
		<input type="Submit" value="on">
	</form>

	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="off3"/>
		<input type="Submit" value="off">
	</form>

	<p>#4</p>
	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="on4"/>
		<input type="Submit" value="on">
	</form>

	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="off4"/>
		<input type="Submit" value="off">
	</form>

	<p>#5</p>
	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="on5"/>
		<input type="Submit" value="on">
	</form>

	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="off5"/>
		<input type="Submit" value="off">
	</form>

	<p>#6</p>
	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="on6"/>
		<input type="Submit" value="on">
	</form>

	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="off6"/>
		<input type="Submit" value="off">
	</form>
	<?php
	
		if ($_POST['turn'] == "on1") {
			echo "Turned on";
			fwrite($port,"n");
		}
		if ($_POST['turn'] == "off1") {
			echo "Turned off";
			fwrite($port, "f");
		}
		if ($_POST['turn'] == "on2") {
			echo "Turned on";
			fwrite($port,"r");
		}
		if ($_POST['turn'] == "off2") {
			echo "Turned off";
			fwrite($port, "e");
		}

		if ($_POST['turn'] == "on3") {
			echo "Turned on";
			fwrite($port,"i");
		}
		if ($_POST['turn'] == "off3") {
			echo "Turned off";
			fwrite($port, "m");
		}

		if ($_POST['turn'] == "on4") {
			echo "Turned on";
			fwrite($port,"t");
		}
		if ($_POST['turn'] == "off4") {
			echo "Turned off";
			fwrite($port, "b");
		}

		if ($_POST['turn'] == "on5") {
			echo "Turned on";
			fwrite($port,"o");
		}
		if ($_POST['turn'] == "off5") {
			echo "Turned off";
			fwrite($port, "c");
		}

		if ($_POST['turn'] == "on6") {
			echo "Turned on";
			fwrite($port,"w");
		}
		if ($_POST['turn'] == "off6") {
			echo "Turned off";
			fwrite($port, "x");
		}

		fclose($port);
	

	?>

</body>
</html>