<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section class="mainBody" style="height: 500px; width: 500px; margin: 0 auto;">
	<a href="crud.php"><input type="button" value="Show Employee List"></a>
	<h2>Record Entry Exit</h2>
	<hr>
	<form action="eerecord.php" method="POST">
		<table style="width:40%" border="1px solid black";>
			<tr>
				<td>EID:</td>
				<td><input type="text" name="eid" placeholder="Employee ID..." required="1"></td>
			</tr>
			<tr>
				<td>DATE:</td>
				<td><input type="date" name="date" placeholder="Today's date..." required="1"></td>
			</tr>
			<tr>
				<td>Entry time:</td>
				<td><input type="time" name="entry" placeholder="Entry time..." required="1"></td>
			</tr>
			<tr>
				<td>Exit time:</td>
				<td><input type="time" name="exit" placeholder="Exit time..." required="1"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="save" value="Save"></td>
			</tr>
		</table>
	</form>	
</section>
</body>
</html>