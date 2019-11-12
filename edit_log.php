<?php

$conn=mysqli_connect('localhost','root','','project');

$eid=$_GET['id']; 

$getEmployeeData="SELECT * FROM entry_exit WHERE eid='$eid'";
$result=mysqli_query($conn,$getEmployeeData);
$emp=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Report Manipulation</title>
</head>
<body>

<section class="mainBody" style="height: 500px; width: 500px; margin: 0 auto;">
	<a href="crud.php"><input type="button" value="Show Employee List"></a>
	<h2>Update Log Information</h2>
	<hr>
	<form action="update_log.php?id=<?php echo $eid?>" method="POST">
		<table cellspacing="15px;">
			<tr>
				<td>Date:</td>
				<td><input type="date" name="date" placeholder="DATE:" required="1" value="<?php echo $emp['date'] ?>"></td>
			</tr>
			<tr>
				<td>Entry Time:</td>
				<td><input type="time" name="entry" placeholder="Entry Time..." required="1" value="<?php echo $emp['entry'] ?>"></td>
			</tr>
			<tr>
				<td>Exit Time:</td>
				<td><input type="time" name="exit" placeholder="Emxit Time" required="1" value="<?php echo $emp['exit'] ?>"></td>
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