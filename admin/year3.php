<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('studentsadd_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script> 
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				<?php	
	             $count_student=mysql_query("select * from year1 where yr='3rd Year'");
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

													

	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0" border="0" class="table" id="example" id="dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th>USN</th>
                                            <th>FULL name</th>
                                            <th>Mobile</th>
                                            <th>Email id</th>
											<th>DOB</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
									$student_query = mysql_query("select * from year1 where yr='3rd Year' ")or die(mysql_error());
									while($row = mysql_fetch_array($student_query)){
									$RegNo = $row['usn'];
	
										?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['usn']; ?></td>
											<td><?php echo $row['fullname']; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['Mobileno']; ?></td>
											<td><?php echo $row['DOB']; ?></td>	
                                           
                                             <td>&nbsp;&nbsp;<a href="viewyear1.php?cid=<?php echo $row['usn']; ?>"><p class="fa fa-edit"></p></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <a href="viewmarks.php?cid=<?php echo $row['usn']; ?>"> <p class="fa fa-times-circle"></p></td>
                                             
                                            
                                        </tr>
                                        
                                    	<?php } ?>            
                                    </tbody>
                                </table>
<!-----------------------------------Content------------------------------------>

									
		
											
	   



</form>		
		
			  		
</div>
</div>
</div>
</div>
</div>
	

<?php include('script.php'); ?>
 </body>
</html>