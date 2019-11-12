<?php

$conn=mysqli_connect('localhost','root','','project');

$eid=$_GET['id'];

$ename=$_POST['ename'];
$ephone=$_POST['ephone'];
$email=$_POST['email'];
$designation=$_POST['designation'];
$did=$_POST['did'];
$salary=$_POST['salary'];
$jdate=$_POST['jdate'];

$updateEmployeeData="UPDATE employees SET ename='$ename',ephone='$ephone',email='$email',designation='$designation',did='$did', salary='$salary', joining_date='$jdate' WHERE eid='$eid'";

if (mysqli_query($conn,$updateEmployeeData)) {
	header("Location: edit.php?id=".$eid);
}
?>