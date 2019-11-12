<?php 
	$conn=mysqli_connect('localhost','root','','project');

	
	$eid=$_POST['eid'];
	$fdate=$_POST['sdate'];
	$cdate=$_POST['cdate'];



	//echo $eid. " ". $fdate." ".$cdate; die;




	$sqlQuerReport = "SELECT e.*, ex.* FROM employees e join entry_exit ex on(e.eid = ex.eid) where e.eid = $eid and ex.date >= '$fdate' and ex.date <= '$cdate'";
		
		$result=mysqli_query($conn,$sqlQuerReport); 


	if (mysqli_num_rows($result) > 0) {
	    ?>

	     <table style="width:40%" border="1px solid black">
	     	<h2>Report!!</h2>
			  <tr>
			    <th>Name</th>
			   	<th>Date</th>
			    <th>EntryTime</th>
			    <th>ExitTime</th>
			    <th>Time Difference</th>
			    <th>Working hour status</th>
			  </tr>

			  <?php
    		while($row = mysqli_fetch_assoc($result)) {
	        	$ent_time = new datetime($row['entry']);
	        	$ex_time = new datetime($row['exit']);

	        	$diff = $ent_time->diff( $ex_time );
	        	
			?>
	    	

			  <tr>
			    <td><?php echo $row['ename']?></td>
			    <td><?php echo $row['date']?></td>
			    <td><?php echo $row['entry']?></td>
			    <td><?php echo $row['exit']?></td>
			    <td><?php echo $diff->format( '%H:%I:%S' );?></td>
			    <td>
			    	<?php 



			    	 $working_hour =  $diff->format( '%H'); 
			    		
			    		if($working_hour < 8){
			    			echo "Deduction !!!";
			    		}else{
			    			echo "Alright";
			    		}


			    		
			    	?>
			    	
			   	</td>
			  </tr>
			  <?php } ?>
			</table> 


<?php



	    
	} else {
	    echo "0 results";
	}




 ?>