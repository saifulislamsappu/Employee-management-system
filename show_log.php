<?php

	$conn=mysqli_connect('localhost','root','','project');

	$getEmployeeData="SELECT * FROM entry_exit ";
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
				<th>Date</th>
				<th>Entry</th>
				<th>Exit</th>
				<th>Action</th>
			
			</thead>

			<tbody>

				<?php while($row=mysqli_fetch_assoc($result)) { ?>)

				<tr>
					<td><?php echo $row['eid']?></td>
					<td><?php echo $row['date']?></td>
					<td><?php echo $row['entry']?></td>
					<td><?php echo $row['exit']?></td>
					<td>
						<a href="edit_log.php?id=<?php echo $row['eid'];?>"><button>Edit</button></a>
					</td>
				</tr>

				<?php } ?>

			</tbody>
		</table>
</section>

</body>
</html>