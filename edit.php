<?php

$conn=mysqli_connect('localhost','root','','project');

$eid=$_GET['id']; 

$getEmployeeData="SELECT * FROM employees WHERE eid='$eid'";
$result=mysqli_query($conn,$getEmployeeData);
$emp=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
</head>
<body>

<section class="mainBody" style="height: 500px; width: 500px; margin: 0 auto;">
	<a href="crud.php"><input type="button" value="Show Employee List"></a>
	<h2>Update Employee Information</h2>
	<hr>
	<form action="update.php?id=<?php echo $eid?>" method="POST">
		<table cellspacing="15px;">
			<tr>
				<td>Name:</td>
				<td><input type="text" name="ename" placeholder="Employee's Name..." required="1" value="<?php echo $emp['ename'] ?>"></td>
			</tr>
			<tr>
				<td>Phone Number:</td>
				<td><input type="number" name="ephone" placeholder="Phone Number..." required="1" value="<?php echo $emp['ephone'] ?>"></td>
			</tr>
			<tr>
				<td>Email Address:</td>
				<td><input type="email" name="email" placeholder="Email address" required="1" value="<?php echo $emp['email'] ?>"></td>
			</tr>
			<tr>
				<td>Designation:</td>
				<td><input type="text" name="designation" placeholder="Designaion..." required="1" value="<?php echo $emp['designation'] ?>"></td>
			</tr>
			<tr>
				<td>Department id:</td>
				<td><input type="number" name="did" placeholder="Department id..." required="1" value="<?php echo $emp['did'] ?>"></td>
			</tr>
			<tr>
				<td>Salary:</td>
				<td><input type="number" name="salary" placeholder="Salary..." required="1" value="<?php echo $emp['salary'] ?>"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="save" value="Update"></td>
			</tr>
		</table>
	</form>	
</section>

</body>
</html>