<?php

	$conn=mysqli_connect('localhost','root','','project');

	$getEmployeeData="SELECT * FROM employees ";
	$result=mysqli_query($conn,$getEmployeeData);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee Registration</title>
</head>
<body>

<section class="mainBody" style="height: 500px; width: 500px; margin: 0 auto;">
	<a href="crud.php"><input type="button" value="Show Employee List"></a>
	<h2>Add New Employee</h2>
	<hr>
	<form action="studentData.php" method="POST">
		<table cellspacing="15px;">
			<tr>
				<td>Employee Name:</td>
				<td><input type="text" name="name" placeholder="Employee Name..." required="1"></td>
			</tr>
			<tr>
				<td>Employee Phone:</td>
				<td><input type="number" name="phone" placeholder="Employee Phone Number..." required="1"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="Email address" required="1"></td>
			</tr>
			<tr>
				<td>Designation:</td>
				<td><input type="text" name="designation" placeholder="Employee designation" required="1"></td>
			</tr>
			<tr>
				<td>Department ID:</td>
				<td><input type="number" name="did" placeholder="Department ID" required="1"></td>
			</tr>
			<tr>
				<td>Salary:</td>
				<td><input type="number" name="salary" placeholder="Salary" required="1"></td>
			</tr>
			<tr>
				<td>Joining Date:</td>
				<td><input type="date" name="jdate" placeholder="Joining Date" required="1"></td>
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