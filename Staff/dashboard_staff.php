<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_staff.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('staff_sidebar.php'); ?>	
                   <div class="span9" id="content">
                      <div class="row-fluid">
					     <?php $query= mysql_query("select * from staff where staff_id = '$session_id'")or die(mysql_error());
						   $row = mysql_fetch_array($query);
						 ?>
				         
					   				
					  <!-- block -->
                       
                            <div class="block-content collapse in">
							        <div class="span12">
									
<div class="block-content collapse in">
<div id="page-wrapper">
        <?php 
	     $student = mysql_query("select usn,fullname from year1 where counselor='$staff_fullname' ")or die(mysql_error());
		 $student = mysql_num_rows($student);
		 ?>
                <div class="row-fluid">				
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                        <i class="fa fa-desktop fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $student; ?></div>
                                        <div>Basic Details</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="students.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Students</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div> 
				 <?php 
	     $student = mysql_query("select usn,fullname from year1 where counselor='$staff_fullname'  ")or die(mysql_error());
		 $student = mysql_num_rows($student);
		 ?>
								
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                        <i class="fa fa-desktop fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $student; ?></div>
                                        <div>Academic Details</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="students1.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Students</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>

                     
				 </div>
 </div> 				 							
	

				
			                 </div>
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
                            </div>
                        </div>
                        <!-- /block --> 	
                    </div>


                </div>
			
            </div>
		
        </div>
		<?php include('script.php'); ?>
    </body>
<embed src="../sound/access_granted.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />		
</html>