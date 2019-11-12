<?php

	$conn=mysqli_connect('localhost','root','','project');

	$eid=$_GET['id'];
	//$getEmployeeData="SELECT * FROM employees WHERE eid='$eid'";
	$sqlQry = "SELECT e.eid, e.ename, e.ephone, e.email, e.designation, d.dname, d.hod_name, d.location, e.joining_date, e.salary FROM employees e, department d
		WHERE e.did=d.did AND eid ='$eid'";
	$result=mysqli_query($conn,$sqlQry);
	$emp=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee MGT</title>
</head>
<body>

<section class="mainBody" style="height: 500px; width: 500px; margin: 0 auto;">
	<a href="insert.php"><input type="button" value="Add New Employee"></a>
	<a href="crud.php"><input type="button" value="Home"></a>
	<h2>Employee Information</h2>
	<hr>
		<table style="width:40%" border="1px solid black";>
			<thead>
				<th>EID</th>
				<th>Employee Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Designation</th>
				<th>Department Name</th>
				<th>Head of Dept.</th>
				<th>Dept. Location</th>
				<th>Joining Date</th>
				<th>Salary</th>
			</thead>

			<tbody>


				<tr>
					<td><?php echo $emp['eid']?></td>
					<td><?php echo $emp['ename']?></td>
					<td><?php echo $emp['ephone']?></td>
					<td><?php echo $emp['email']?></td>
					<td><?php echo $emp['designation']?></td>
					<td><?php echo $emp['dname']?></td>
					<td><?php echo $emp['hod_name']?></td>
					<td><?php echo $emp['location']?></td>
					<td><?php echo $emp['joining_date']?></td>
					<td><?php echo $emp['salary']?></td>
				</tr>


			</tbody>
		</table>
</section>

</body>
</html>