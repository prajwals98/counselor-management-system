<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['cid']; ?>	
<head>

<link href="bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">


</head>
    <body>
		<?php include('navbar_staff.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('staff_sidebar.php'); ?>
			
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
	             $count_student=mysql_query("select * from year1");
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

											
				
				<?php
								$query = mysql_query("select * from year1 where usn = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
				
				
				
				<div class="pull-center">
		   <a href="students.php" class="btn btn-info" id="print" data-placement="right" title="Back">Back</a> 		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	   
         </div>
													
			<div class="panel panel-default">
			<div class="panel-heading">Personal Information</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label>Full Name<span id="" style="font-size:11px;color:red"> </span>	</label>
			
			</div>
			<div class="col-lg-4">
			<?php echo $row['fullname']; ?>
			</div>
			 <div class="col-lg-2">
			<label>USN</label>
			
			</div>
			<div class="col-lg-4">
			<?php echo $row['usn']; ?>
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>DOB</label>
			</div>
			<div class="col-lg-4">
			<?php echo $row['DOB']; ?>
			</div>
			 <div class="col-lg-2">
			<label>Blood Group</label>
			</div>
			&nbsp;&nbsp; <?php echo $row['bloodgroup']; ?>
			</div>	
			<br>		
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Mobile No	</label>
			
			</div>
			<div class="col-lg-4">
			<?php echo $row['Mobileno']; ?>
			</div>
			 <div class="col-lg-2">
			<label>E-mail</label>
			
			</div>
			<div class="col-lg-4">
			<?php echo $row['email']; ?>
			</div>
			
			 
			</div>	
			<br><br>
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>counselor</label>
			
			</div>
			<div class="col-lg-4">
			<?php echo $row['counselor']; ?>
			</div> <br><br><br>
			 <div class="col-lg-2">
			<label>Father Name</label>
			
			</div>
			<div class="col-lg-4" >
			<?php echo $row['fathername']; ?>
			</div>
			 <div class="col-lg-2">
			<label>Father's Occupation</label>
			
			</div>
			<div class="col-lg-4">
			<?php echo $row['foccupation']; ?>
			</div>
			</div>	
			<br><br>
			
			
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Father's Contact</label>
			
			</div>
			<div class="col-lg-4">
			<?php echo $row['fcontact']; ?>
			</div>
			 <div class="col-lg-2">
			<label>Father's Occupational Address</label>
			
			</div>
			<div class="col-lg-4">
			<?php echo $row['faddress']; ?>
			</div>
			
			</div>	
			<br><br>
			</div>	
			<br><br>
		</div>
      	</div>
		</div>
		
		
		
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Personal Information</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label>Mother's Name</label>
			
			</div>
			<div class="col-lg-4">
			<?php echo $row['mothername']; ?>
			</div>
			 <div class="col-lg-2">
			<label>Mother's Occupation</label>
			
			</div>
			<div class="col-lg-4">
			<?php echo $row['moccupation']; ?>
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>Mother's Contact</label>
			</div>
			<div class="col-lg-4">
			<?php echo $row['mcontact']; ?>
			</div>
			 <div class="col-lg-2">
			<label>Mother's Occupational Address</label>
			
			</div>
			<div class="col-lg-4">
			<?php echo $row['maddress']; ?>
			</div>
			
			</div>	
			
	<br><br><br><br>		
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Local Guardian's Name</label>
			
			</div>
			<div class="col-lg-4">
          <?php echo $row['localname']; ?>
			</div>
			 <div class="col-lg-2">
			<label>Local Guardian's Contact</label>
			
			</div>
			<div class="col-lg-4">
			<?php echo $row['lcontact']; ?>
			</div>
			<br><br><br><br>
			<div class="col-lg-2">
			<label>Accommodation</label>
			
			</div>
			<div class="col-lg-4">
			<?php echo $row['accommodation']; ?>
			</div>
			
			</div>	
			
			
			
					
		    
			<br><br>
			
			
			</div>	
			<br><br>
		</div>
      	</div>
		</div>					
       
		
		
		
		
		 <div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Academic Informations</div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
										 <div class="col-lg-6">
			 <th>&nbsp;&nbsp;&nbsp;&nbsp;Qualifying Examination</th>
			</div>
                                         <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Board</label></th>
			</div>   
            <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;% of marks obtained</th>
			</div>   
              <div class="col-lg-6">
			 <th>&nbsp;&nbsp;&nbsp;&nbsp;Year Of Passing</th>
			</div>                                 
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td><div class="col-lg-6">
				  Class X
				  </div></td>
                  <td><div class="col-lg-6">
			<?php echo $row['boardx']; ?>
			</div></td>
            <td><div class="col-lg-6">
			<?php echo $row['xmarks']; ?>
			</div></td>
			<td><div class="col-lg-6">
			<?php echo $row['yopx']; ?>
			</div></td>
                  </tr>

          <tr> 
                  <td><div class="col-lg-6">
				  Class XII
				  </div></td>
                  <td><div class="col-lg-6">
			<?php echo $row['boardxii']; ?>
			</div></td>
            <td><div class="col-lg-6">
			<?php echo $row['xiimarks']; ?>
			</div></td>
			<td><div class="col-lg-6">
			<?php echo $row['yopxii']; ?>
			</div></td>
                  </tr>

 
				  
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
			</div>	
			<br><br>					
		  </div>	
			<br><br>			
			<br><br>
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                         <div class="col-lg-6">
			<div class="pull-right">
		   <a href="students.php" class="btn btn-info" id="print" data-placement="center" title="Back"> Back</a> 		      
		          	   
         </div>
                                       
                                        </tr>
                                    </thead>
                                   
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
			</div>	
							
		  </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
		
		
		
		
		
		
		
		
		
									
<!-----------------------------------Content------------------------------------>

									
		
											
	   



	
		</div>
	</div>		  		
</div>
</div>
</div>
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