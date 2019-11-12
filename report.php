<!DOCTYPE html>
<html>
<head>
	<title>Attendance Report</title>
</head>
<body>
	<section class="mainBody" style="height: 500px; width: 500px; margin: 0 auto;">
	<a href="crud.php"><input type="button" value="Show Employee List"></a>
	<h2>Generate Employee Attendance Report</h2>
	<hr>
	<form action="generate_report.php" method="POST">
		<table cellspacing="15px;">
			<tr>
				<td>EID:</td>
				<td><input type="text" name="eid" placeholder="Employee ID..." required="1"></td>
			</tr>
			<tr>
				<td>SELECT DATE RANGE (Starting DATE):</td>
				<td><input type="date" name="sdate" placeholder="Starting date..." required="1"></td>
			</tr>
			<tr>
				<td>SELECT DATE RANGE (Closing DATE):</td>
				<td><input type="date" name="cdate" placeholder="Closing date..." required="1"></td>
			</tr>
			
			<td></td>
				<td><input type="submit" name="Report" value="Generate!"></td>
			</tr>
		</table>
	</form>	
</section>
</body>
</html>