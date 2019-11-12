<?php

	$conn=mysqli_connect('localhost','root','','project');

	$getEmployeeData="SELECT * FROM employees ";
	$result=mysqli_query($conn,$getEmployeeData);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee Management</title>
</head>
<body>

<section class="mainBody" style="height: 500px; width: 500px; margin: 0 auto;">
	<a href="insert.php"><input type="button" value="Add New Employee"></a>
	<a href="report.php"><input type="button" value="Click here to get report"></a>
	<a href="entryexit.php"><input type="button" value="Record entry-exit"></a>
	<h2>Employee List</h2>
	<hr>
		<table style="width:40%" border="1px solid black";">
			<thead>
				<th>Employee ID</th>
				<th>Employee Name</th>
				<th>Phone Number</th>
				<th>Designation</th>
				<th>Department ID</th>
				<th>Actions</th>
			
			</thead>

			<tbody>

				<?php while($row=mysqli_fetch_assoc($result)) { ?>)

				<tr>
					<td><?php echo $row['eid']?></td>
					<td><?php echo $row['ename']?></td>
					<td><?php echo $row['ephone']?></td>
					<td><?php echo $row['designation']?></td>
					<td><?php echo $row['did']?></td>
					<td>
						<a href="show.php?id=<?php echo $row['eid'];?>"><button>View</button></a>
						<a href="edit.php?id=<?php echo $row['eid'];?>"><button>Edit</button></a>
						<a href="delete.php?id=<?php echo $row['eid'];?>" onclick="return confirm('Are you sure?')"><button>Delete</button></a>
					</td>
				</tr>

				<?php } ?>

			</tbody>
		</table>
</section>

</body>
</html>