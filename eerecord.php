<?php

$conn=mysqli_connect('localhost','root','','project');

$eid=$_POST['eid'];
$date=$_POST['date'];
$entry=$_POST['entry'];
$exit=$_POST['exit'];


$insertRecordData="INSERT INTO `entry_exit`(`eid`, `date`, `entry`, `exit`) VALUES ('$eid','$date','$entry','$exit')";

if (mysqli_query($conn,$insertRecordData)) {
	header("Location: show_log.php");
}
?>