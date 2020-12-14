<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php
$RegNo = $_POST['RegNo'];
?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('search_sidebar.php'); ?>
				<div class="span9" id="content">
                     <div class="row-fluid">
					 
					 <div class="empty">
			 	         <div class="alert alert-success">
                            <strong> Advance Search Result List</strong>
                       </div>
			        </div>
				
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
					 <?php	
	             $count_student=mysql_query("select * from student			
		                     where RegNo LIKE '%$RegNo%' 
							 
	             $count = mysql_num_rows($count_student);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> student Search Result List</div>
                          <div class="muted pull-right">
								Number of Search Students : <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
<h4 id="sc">Students List 
    <div align="right" id="sc">Date:
		<?php
            $date = new DateTime();
             echo $date->format('l, F jS, Y');
        ?></div>
 </h4>						  
                  					  
<br/>
 	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
					<th>Reg No</th>
					<th>First Name </th>
					<th>Second Name</th>
			        <th> Other Name</th>
					<th>Year of Birth  </th>
					<th>Place of Birth  </th>
                    <th>Mobile </th>
                    <th>Postal Address  </th>
                    <th>Postal Code  </th>		
                    <th>Year Admitted  </th>
                    <th>Year Out  </th>	
                    <th>KCPE Marks  </th>	
                    					
		    </tr>
		</thead>
<tbody>
<?php
		$search_query = mysql_query("select * from student		
		
		where RegNo LIKE '%$RegNo%'")or die(mysql_error());
		while($row = mysql_fetch_array($search_query)){
		$RegNo = $row['RegNo'];
		?>
		<tr>
		<td><?php
			   $student_query2 = mysql_query("select * from student ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($student_query2);
		       
			  ?>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='New')
		       {
			   echo '<div class="alert alert-success"><i class="icon-check"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='Used')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-ok"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
			   else if($row['dev_status']=='Repaired')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
			<td><?php echo $row['stdev_location_name']; ?></td>
						
		</tr>
											
	<?php } ?>   

</tbody>
</table>
</form>		
		
			  		
</div>
</div>
</div>
</div>
</div>

</div>	

</div>
<?php include('script.php'); ?>
 </body>
</html>