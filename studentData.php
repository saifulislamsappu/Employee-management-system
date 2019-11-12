<?php

$conn=mysqli_connect('localhost','root','','project');

$ename=$_POST['name'];
$ephone=$_POST['phone'];
$email=$_POST['email'];
$designation=$_POST['designation'];
$did=$_POST['did'];
$salary=$_POST['salary'];
$jdate=$_POST['jdate'];

$insertEmployeeData="INSERT INTO `employees`(`eid`, `ename`, `ephone`, `email`, `designation`, `did`, `salary`, `joining_date`) VALUES (NULL,'$ename','$ephone','$email','$designation','$did','$salary','$jdate')";

if (mysqli_query($conn,$insertEmployeeData)) {
	header("Location: crud.php");
}
?>