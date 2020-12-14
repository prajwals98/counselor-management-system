<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('studentsadd_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="add_student.php" class="btn btn-info"  id="add" data-placement="right" title="Click to Add Student" ><i class="icon-plus-sign icon-large"></i> Add Student</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script> 
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				<?php	
	             $count_student=mysql_query("select * from student");
	             $count = mysql_num_rows($count_student);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Registered Students List</div>
                          <div class="muted pull-right">
								Number of Registered Students: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
                 <h4 id="sc">Students List 
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>

													
<div class="container-fluid">
  <div class="row-fluid"> 
     <div class="empty">
	     <div class="pull-right">
		   <a href="print_students.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	   
         </div>
      </div>
    </div> 
</div>
	
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
<!-----------------------------------Content------------------------------------>
<?php
		$student_query = mysql_query("select * from student")or die(mysql_error());
		while($row = mysql_fetch_array($student_query)){
		$RegNo = $row['RegNo'];
	
		?>
									
		<tr>
		    <td><?php echo $row['RegNo']; ?></td>
			<td><?php echo $row['FirstName']; ?></td>
			<td><?php echo $row['SecondName']; ?></td>
			<td><?php echo $row['Othername']; ?></td>
			<td><?php echo $row['YearOfBirth']; ?></td>
			<td><?php echo $row['PlaceOfBirth']; ?></td>	
            <td><?php echo $row['Mobile']; ?></td>
            <td><?php echo $row['PAddress']; ?></td>
            <td><?php echo $row['PostalCode']; ?></td>		
            <td><?php echo $row['YearAdmitted']; ?></td>
            <td><?php echo $row['YearOut']; ?></td>            
            <td><?php echo $row['KCPEMarks']; ?>
            </td>
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
	

<?php include('script.php'); ?>
 </body>
</html>