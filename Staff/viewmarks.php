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
	             $count_student=mysql_query("select * from marks");
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

</div></div>
				
				<?php
								$query = mysql_query("select * from marks where usn = '$get_id' ")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
				
				
				
				<div class="pull-center">
		   <a href="students1.php" class="btn btn-info" id="print" data-placement="right" title="Back">Back</a> 		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	   
         </div>
													
			<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Academic Informations for 1st sem</div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" border=1>
                                    <thead>
                                        <tr>
										 <div class="col-lg-6">
			 <th>Subject Code</th>
			</div>
                                         <div class="col-lg-6">
			<th><?php echo $row['sc1']; ?>	
			</div>   
            <div class="col-lg-6">
			<th><?php echo $row['sc2']; ?>	
			</div>   
              <div class="col-lg-6">
			<th> <?php echo $row['sc3']; ?>
			</div>
<div class="col-lg-6">
			  <th><?php echo $row['sc4']; ?>
			</div> 
<div class="col-lg-6">
			  <th><?php echo $row['sc5']; ?>
			</div> 
<div class="col-lg-6">
			 <th> <?php echo $row['sc6']; ?>
			</div> 
<div class="col-lg-6">
			 <th> <?php echo $row['sc7']; ?>
			</div> 
<div class="col-lg-6">
			  <th><?php echo $row['sc8']; ?>	</th>
			</div> 
<div class="col-lg-6">
			 <th> Total	</th>
			</div> 			
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <div class="col-lg-6">
				  <td>Test 1</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['t1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['t1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1total']; ?></td>
			</div>
                  </tr>

          <tr> 
                  <div class="col-lg-6">
				  <td>Test 2</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['t2s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['t2s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2total']; ?></td>
			</div>
                  </tr>

 <tr> 
                  <div class="col-lg-6">
				  <td>Test 3</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['t3s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['t3s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Average</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['a1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['a1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Assignment</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['as1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['as1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s8']; ?>
			</div>
			<div class="col-lg-6">
		 <td><?php echo $row['as1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Final Internal Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['f1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['f1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s8']; ?>
			</div>
			<div class="col-lg-6">
		 <td><?php echo $row['f1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>External Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['e1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['e1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Total Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['totals1'];?>
			</div>                                           
            <div class="col-lg-6">                           
			<td><?php echo $row['totals2'];?>
			</div>                                          
			<div class="col-lg-6">                         
			<td><?php echo $row['totals3'];?>
			</div>                                          
			<div class="col-lg-6">                          
			<td><?php echo $row['totals4'];?>
			</div>                                         
			<div class="col-lg-6">
			<td><?php echo $row['totals5'];?>
			</div>                                          
			<div class="col-lg-6">                       
			<td><?php echo $row['totals6'];?>
			</div>                                      
			<div class="col-lg-6">                      
			<td><?php echo $row['totals7'];?>
			</div>                                        
			<div class="col-lg-6">                      
			<td><?php echo $row['totals8'];?>
			</div>                                       
			<div class="col-lg-6">
			  <td><?php echo $row['total']; ?></td>
			</div>
                  </tr>
				  
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
					
					
					<!-- <div class="control-group">
                                          <div class="controls">
												<button name="save1" class="btn btn-info" align="right" id="save1" data-placement="center" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save1').tooltip('show');
	                                            $('#save1').tooltip('hide');
	                                            });
												$(document).ready(function() {
												$(document).unload(function() {
												$('#save1').attr('disabled', 'disabled');
												});
											});
	                                            </script>
                                          </div> -->
                                        </div>
                    <!-- /.panel -->
                </div>
			</div>	
			<br><br>					
		  </div> </div> </div> 
			
			
                                 


								 
								 
								 
								 
								 
								 
				<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Academic Informations for 2nd sem</div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" border=1>
                                    <thead>
                                        <tr>
										  <div class="col-lg-6">
			 <th>Subject Code</th>
			</div>
                                         <div class="col-lg-6">
			<th><?php echo $row['sc11']; ?>
			</div>   
            <div class="col-lg-6">
			<th><?php echo $row['sc21']; ?>
			</div>   
              <div class="col-lg-6">
			 <th><?php echo $row['sc31']; ?>
			</div>
<div class="col-lg-6">
			 <th><?php echo $row['sc41']; ?>
			</div> 
<div class="col-lg-6">
			 <th><?php echo $row['sc51']; ?>
			</div> 
<div class="col-lg-6">
			 <th><?php echo $row['sc61']; ?>
			</div> 
<div class="col-lg-6">
			 <th><?php echo $row['sc71']; ?>
			</div> 
<div class="col-lg-6">
			 <th><?php echo $row['sc81']; ?></th>
			</div> 
<div class="col-lg-6">
			 <th> Total	</th>
			</div> 			
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <div class="col-lg-6">
				  <td>Test 1</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['t1s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['t1s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1total1']; ?></td>
			</div>
                  </tr>

          <tr> 
                  <div class="col-lg-6">
				  <td>Test 2</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['t2s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['t2s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2total1']; ?></td>
			</div>
                  </tr>

 <tr> 
                  <div class="col-lg-6">
				  <td>Test 3</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['t3s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['t3s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3total1']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Average</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['a1s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['a1s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1total1']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Assignment</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['as1s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['as1s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1total1']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Final Internal Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['f1s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['f1s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1total1']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>External Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['e1s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['e1s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1total1']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Total Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['total11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['total21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['total31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['total41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['total51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['total61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['total71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['total81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['total1']; ?></td>
			</div>
                  </tr>
				  
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>  
					 </div>
					  </div>
					   </div>
					    </div></div></div>
					
					<?php
								$query = mysql_query("select * from marks1 where usn = '$get_id'")or die(mysql_error());
								$row1 = mysql_fetch_array($query);
								?>
								
				<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Academic Informations for 3rd sem</div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" border=1>
                                    <thead>
                                        <tr>
										 <div class="col-lg-6">
			 <th>Subject Code</th>
			</div>
                                         <div class="col-lg-6">
			<th><?php echo $row1['sc1']; ?>	
			</div>   
            <div class="col-lg-6">
			<th><?php echo $row1['sc2']; ?>	
			</div>   
              <div class="col-lg-6">
			<th> <?php echo $row1['sc3']; ?>
			</div>
<div class="col-lg-6">
			  <th><?php echo $row1['sc4']; ?>
			</div> 
<div class="col-lg-6">
			  <th><?php echo $row1['sc5']; ?>
			</div> 
<div class="col-lg-6">
			 <th> <?php echo $row1['sc6']; ?>
			</div> 
<div class="col-lg-6">
			 <th> <?php echo $row1['sc7']; ?>
			</div> 
<div class="col-lg-6">
			  <th><?php echo $row1['sc8']; ?>	</th>
			</div> 
<div class="col-lg-6">
			 <th> Total	</th>
			</div> 			
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <div class="col-lg-6">
				  <td>Test 1</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['t1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['t1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1total']; ?></td>
			</div>
                  </tr>

          <tr> 
                  <div class="col-lg-6">
				  <td>Test 2</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['t2s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['t2s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2total']; ?></td>
			</div>
                  </tr>

 <tr> 
                  <div class="col-lg-6">
				  <td>Test 3</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['t3s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['t3s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t3s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t3s4']; ?>
			</div>
			<div class="col-lg-6">
			<td<?php echo $row1['t3s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t3s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t3s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t3s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t3total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Average</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['a1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['a1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Assignment</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['as1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['as1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['as1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['as1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['as1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['as1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['as1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['as1s8']; ?>
			</div>
			<div class="col-lg-6">
		 <td><?php echo $row1['as1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Final Internal Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['f1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['f1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['f1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['f1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['f1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['f1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['f1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['f1s8']; ?>
			</div>
			<div class="col-lg-6">
		 <td><?php echo $row1['f1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>External Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['e1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['e1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Total Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['totals1'];?>
			</div>                                           
            <div class="col-lg-6">                           
			<td><?php echo $row1['totals2'];?>
			</div>                                          
			<div class="col-lg-6">                         
			<td><?php echo $row1['totals3'];?>
			</div>                                          
			<div class="col-lg-6">                          
			<td><?php echo $row1['totals4'];?>
			</div>                                         
			<div class="col-lg-6">
			<td><?php echo $row1['totals5'];?>
			</div>                                          
			<div class="col-lg-6">                       
			<td><?php echo $row1['totals6'];?>
			</div>                                      
			<div class="col-lg-6">                      
			<td><?php echo $row1['totals7'];?>
			</div>                                        
			<div class="col-lg-6">                      
			<td><?php echo $row1['totals8'];?>
			</div>                                       
			<div class="col-lg-6">
			  <td><?php echo $row1['total']; ?></td>
			</div>
                  </tr>
				  
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
					
					
					<!-- <div class="control-group">
                                          <div class="controls">
												<button name="save1" class="btn btn-info" align="right" id="save1" data-placement="center" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save1').tooltip('show');
	                                            $('#save1').tooltip('hide');
	                                            });
												$(document).ready(function() {
												$(document).unload(function() {
												$('#save1').attr('disabled', 'disabled');
												});
											});
	                                            </script>
                                          </div> -->
                                        </div>
                    <!-- /.panel -->
                </div>
			</div>	
			<br><br>					
		  </div> </div> </div> 
			
			
                                 


								 
								 
								 
								 
								 
								 
				<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Academic Informations for 4th sem</div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" border=1>
                                    <thead>
                                        <tr>
										  <div class="col-lg-6">
			 <th>Subject Code</th>
			</div>
                                         <div class="col-lg-6">
			<th><?php echo $row1['sc11']; ?>
			</div>   
            <div class="col-lg-6">
			<th><?php echo $row1['sc21']; ?>
			</div>   
              <div class="col-lg-6">
			 <th><?php echo $row1['sc31']; ?>
			</div>
<div class="col-lg-6">
			 <th><?php echo $row1['sc41']; ?>
			</div> 
<div class="col-lg-6">
			 <th><?php echo $row1['sc51']; ?>
			</div> 
<div class="col-lg-6">
			 <th><?php echo $row1['sc61']; ?>
			</div> 
<div class="col-lg-6">
			 <th><?php echo $row1['sc71']; ?>
			</div> 
<div class="col-lg-6">
			 <th><?php echo $row1['sc81']; ?></th>
			</div> 
<div class="col-lg-6">
			 <th> Total	</th>
			</div> 			
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <div class="col-lg-6">
				  <td>Test 1</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['t1s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['t1s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t1total1']; ?></td>
			</div>
                  </tr>

          <tr> 
                  <div class="col-lg-6">
				  <td>Test 2</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['t2s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['t2s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t2total1']; ?></td>
			</div>
                  </tr>

 <tr> 
                  <div class="col-lg-6">
				  <td>Test 3</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['t3s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['t3s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t3s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t3s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t3s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t3s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t3s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t3s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['t3total1']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Average</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['a1s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['a1s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['a1total1']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Assignment</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['as1s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['as1s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['as1s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['as1s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['as1s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['as1s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['as1s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['as1s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['as1total1']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Final Internal Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['f1s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['f1s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['f1s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['f1s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['f1s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['f1s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['f1s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['f1s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['f1total1']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>External Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['e1s11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['e1s21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1s31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1s41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1s51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1s61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1s71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1s81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['e1total1']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Total Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row1['total11']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row1['total21']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['total31']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['total41']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['total51']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['total61']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['total71']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['total81']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row1['total1']; ?></td>
			</div>
                  </tr>
				  
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>  
					 </div>
					  </div>
					   </div>
					    </div></div></div></div>			 
								 
								 
								 
											
					<?php
								$query = mysql_query("select * from marks2 where usn = '$get_id'")or die(mysql_error());
								$row2 = mysql_fetch_array($query);
								?>			 
								 
								 
								 
				
					 
				<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Academic Informations for 5th sem</div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" border=1>
                                    <thead>
                                        <tr>
										   <div class="col-lg-6">
			 <th>Subject Code</th>
			</div>
                                         <div class="col-lg-6">
			<th><?php echo $row2['sc1']; ?>	
			</div>   
            <div class="col-lg-6">
			<th><?php echo $row2['sc2']; ?>	
			</div>   
              <div class="col-lg-6">
			<th> <?php echo $row2['sc3']; ?>
			</div>
<div class="col-lg-6">
			  <th><?php echo $row2['sc4']; ?>
			</div> 
<div class="col-lg-6">
			  <th><?php echo $row2['sc5']; ?>
			</div> 
<div class="col-lg-6">
			 <th> <?php echo $row2['sc6']; ?>
			</div> 
<div class="col-lg-6">
			 <th> <?php echo $row2['sc7']; ?>
			</div> 
<div class="col-lg-6">
			  <th><?php echo $row2['sc8']; ?>	</th>
			</div> 
<div class="col-lg-6">
			 <th> Total	</th>
			</div> 			
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <div class="col-lg-6">
				  <td>Test 1</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row2['t1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row2['t1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t1total']; ?></td>
			</div>
                  </tr>

          <tr> 
                  <div class="col-lg-6">
				  <td>Test 2</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row2['t2s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row2['t2s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t2s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t2s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t2s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t2s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t2s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t2s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t2total']; ?></td>
			</div>
                  </tr>

 <tr> 
                  <div class="col-lg-6">
				  <td>Test 3</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row2['t3s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row2['t3s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t3s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t3s4']; ?>
			</div>
			<div class="col-lg-6">
			<td<?php echo $row2['t3s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t3s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t3s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t3s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['t3total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Average</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row2['a1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row2['a1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['a1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['a1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['a1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['a1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['a1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['a1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['a1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Assignment</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row2['as1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row2['as1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['as1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['as1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['as1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['as1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['as1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['as1s8']; ?>
			</div>
			<div class="col-lg-6">
		 <td><?php echo $row2['as1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Final Internal Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row2['f1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row2['f1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['f1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['f1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['f1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['f1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['f1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['f1s8']; ?>
			</div>
			<div class="col-lg-6">
		 <td><?php echo $row2['f1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>External Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row2['e1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row2['e1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['e1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['e1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['e1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['e1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['e1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['e1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row2['e1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Total Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row2['totals1'];?>
			</div>                                           
            <div class="col-lg-6">                           
			<td><?php echo $row2['totals2'];?>
			</div>                                          
			<div class="col-lg-6">                         
			<td><?php echo $row2['totals3'];?>
			</div>                                          
			<div class="col-lg-6">                          
			<td><?php echo $row2['totals4'];?>
			</div>                                         
			<div class="col-lg-6">
			<td><?php echo $row2['totals5'];?>
			</div>                                          
			<div class="col-lg-6">                       
			<td><?php echo $row2['totals6'];?>
			</div>                                      
			<div class="col-lg-6">                      
			<td><?php echo $row2['totals7'];?>
			</div>                                        
			<div class="col-lg-6">                      
			<td><?php echo $row2['totals8'];?>
			</div>                                       
			<div class="col-lg-6">
			  <td><?php echo $row2['total']; ?></td>
			</div>
                  </tr>
				  
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div></div></div>	
                        <!-- /.panel-body -->
                    </div>  
					 </div>
					  </div>
					   </div>
					    </div>









						<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Academic Informations for 6th sem</div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" border=1>
                                    <thead>
                                        <tr>
										 <div class="col-lg-6">
			 <th>Subject Code</th>
			</div>
                                         <div class="col-lg-6">
			<th><?php echo $row['sc1']; ?>	
			</div>   
            <div class="col-lg-6">
			<th><?php echo $row['sc2']; ?>	
			</div>   
              <div class="col-lg-6">
			<th> <?php echo $row['sc3']; ?>
			</div>
<div class="col-lg-6">
			  <th><?php echo $row['sc4']; ?>
			</div> 
<div class="col-lg-6">
			  <th><?php echo $row['sc5']; ?>
			</div> 
<div class="col-lg-6">
			 <th> <?php echo $row['sc6']; ?>
			</div> 
<div class="col-lg-6">
			 <th> <?php echo $row['sc7']; ?>
			</div> 
<div class="col-lg-6">
			  <th><?php echo $row['sc8']; ?>	</th>
			</div> 
<div class="col-lg-6">
			 <th> Total	</th>
			</div> 			
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <div class="col-lg-6">
				  <td>Test 1</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['t1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['t1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1total']; ?></td>
			</div>
                  </tr>

          <tr> 
                  <div class="col-lg-6">
				  <td>Test 2</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['t2s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['t2s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2total']; ?></td>
			</div>
                  </tr>

 <tr> 
                  <div class="col-lg-6">
				  <td>Test 3</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['t3s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['t3s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Average</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['a1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['a1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Assignment</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['as1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['as1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s8']; ?>
			</div>
			<div class="col-lg-6">
		 <td><?php echo $row['as1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Final Internal Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['f1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['f1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s8']; ?>
			</div>
			<div class="col-lg-6">
		 <td><?php echo $row['f1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>External Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['e1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['e1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Total Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['totals1'];?>
			</div>                                           
            <div class="col-lg-6">                           
			<td><?php echo $row['totals2'];?>
			</div>                                          
			<div class="col-lg-6">                         
			<td><?php echo $row['totals3'];?>
			</div>                                          
			<div class="col-lg-6">                          
			<td><?php echo $row['totals4'];?>
			</div>                                         
			<div class="col-lg-6">
			<td><?php echo $row['totals5'];?>
			</div>                                          
			<div class="col-lg-6">                       
			<td><?php echo $row['totals6'];?>
			</div>                                      
			<div class="col-lg-6">                      
			<td><?php echo $row['totals7'];?>
			</div>                                        
			<div class="col-lg-6">                      
			<td><?php echo $row['totals8'];?>
			</div>                                       
			<div class="col-lg-6">
			  <td><?php echo $row['total']; ?></td>
			</div>
                  </tr>
				  
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
					
					
					<!-- <div class="control-group">
                                          <div class="controls">
												<button name="save1" class="btn btn-info" align="right" id="save1" data-placement="center" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save1').tooltip('show');
	                                            $('#save1').tooltip('hide');
	                                            });
												$(document).ready(function() {
												$(document).unload(function() {
												$('#save1').attr('disabled', 'disabled');
												});
											});
	                                            </script>
                                          </div> -->
                                        </div>
                    <!-- /.panel -->
                </div>
			</div>	
			<br><br>					
		  </div> </div> </div> 
			
			
                                 



		  <div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Academic Informations for 7th sem</div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" border=1>
                                    <thead>
                                        <tr>
										 <div class="col-lg-6">
			 <th>Subject Code</th>
			</div>
                                         <div class="col-lg-6">
			<th><?php echo $row['sc1']; ?>	
			</div>   
            <div class="col-lg-6">
			<th><?php echo $row['sc2']; ?>	
			</div>   
              <div class="col-lg-6">
			<th> <?php echo $row['sc3']; ?>
			</div>
<div class="col-lg-6">
			  <th><?php echo $row['sc4']; ?>
			</div> 
<div class="col-lg-6">
			  <th><?php echo $row['sc5']; ?>
			</div> 
<div class="col-lg-6">
			 <th> <?php echo $row['sc6']; ?>
			</div> 
<div class="col-lg-6">
			 <th> <?php echo $row['sc7']; ?>
			</div> 
<div class="col-lg-6">
			  <th><?php echo $row['sc8']; ?>	</th>
			</div> 
<div class="col-lg-6">
			 <th> Total	</th>
			</div> 			
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <div class="col-lg-6">
				  <td>Test 1</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['t1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['t1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t1total']; ?></td>
			</div>
                  </tr>

          <tr> 
                  <div class="col-lg-6">
				  <td>Test 2</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['t2s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['t2s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t2total']; ?></td>
			</div>
                  </tr>

 <tr> 
                  <div class="col-lg-6">
				  <td>Test 3</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['t3s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['t3s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['t3total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Average</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['a1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['a1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['a1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Assignment</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['as1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['as1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['as1s8']; ?>
			</div>
			<div class="col-lg-6">
		 <td><?php echo $row['as1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Final Internal Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['f1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['f1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['f1s8']; ?>
			</div>
			<div class="col-lg-6">
		 <td><?php echo $row['f1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>External Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['e1s1']; ?>
			</div>
            <div class="col-lg-6">
			<td><?php echo $row['e1s2']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s3']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s4']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s5']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s6']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s7']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1s8']; ?>
			</div>
			<div class="col-lg-6">
			<td><?php echo $row['e1total']; ?></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Total Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row['totals1'];?>
			</div>                                           
            <div class="col-lg-6">                           
			<td><?php echo $row['totals2'];?>
			</div>                                          
			<div class="col-lg-6">                         
			<td><?php echo $row['totals3'];?>
			</div>                                          
			<div class="col-lg-6">                          
			<td><?php echo $row['totals4'];?>
			</div>                                         
			<div class="col-lg-6">
			<td><?php echo $row['totals5'];?>
			</div>                                          
			<div class="col-lg-6">                       
			<td><?php echo $row['totals6'];?>
			</div>                                      
			<div class="col-lg-6">                      
			<td><?php echo $row['totals7'];?>
			</div>                                        
			<div class="col-lg-6">                      
			<td><?php echo $row['totals8'];?>
			</div>                                       
			<div class="col-lg-6">
			  <td><?php echo $row['total']; ?></td>
			</div>
                  </tr>
				  
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
					
					
					<!-- <div class="control-group">
                                          <div class="controls">
												<button name="save1" class="btn btn-info" align="right" id="save1" data-placement="center" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save1').tooltip('show');
	                                            $('#save1').tooltip('hide');
	                                            });
												$(document).ready(function() {
												$(document).unload(function() {
												$('#save1').attr('disabled', 'disabled');
												});
											});
	                                            </script>
                                          </div> -->
                                        </div>
                    <!-- /.panel -->
                </div>
			</div>	
			<br><br>					
		  </div> </div> </div> 
			
			
                                 









				<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Academic Informations for 8th sem</div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
		    
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" border=1>
                                    <thead>
                                        <tr>
										 <div class="col-lg-6">
			 <td>Project Title</td>
			</div>
                                         <div class="col-lg-6">
			<td><?php echo $row2['pt']; ?>	</td>
			</div>   
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <div class="col-lg-6">
				  <td>Company Name & Place</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row2['cnp']; ?></td>
			</div>
            
                  </tr>

          <tr> 
                  <div class="col-lg-6">
				  <td>Internal Guide</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row2['ig']; ?></td>
			</div>
            
                  </tr>

 <tr> 
                  <div class="col-lg-6">
				  <td>External Guide</td>
				  </div>
                  <div class="col-lg-6">
			<td><?php echo $row2['eg']; ?></td>
			</div>
            
                  </tr>
				  
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>	 </div> </div> </div> </div> </div> </div> </div> </div> </div>
								
					
						 
								
<center>
										<div class="pull-right">
		   <a href="students1.php" class="btn btn-info" id="print" data-placement="center" title="Back"> Back</a> 		      
		          	   
         </div>		</center>
								
                         	
			<br><br>			
			<br><br>
			
			
		
		
		
		
	

				
								 
								 
								 
								 
								 
								 
		
		
		
		
						
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
									
<!-----------------------------------Content------------------------------------>

									
		
											
	   



	
	



<?php include('script.php'); ?>
 </body>
</html>