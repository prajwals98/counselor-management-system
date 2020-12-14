<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_slidebar.php'); ?>	
                   <div class="span9" id="content">
                      <div class="row-fluid">
					     <?php $query= mysql_query("select * from login where login_id = '$session_id'")or die(mysql_error());
						   $row = mysql_fetch_array($query);
						 ?>
				        
                        </div>
					   			
					  <!-- block -->
                        <div id="block_bg" class="block">
                            
							
                           <div class="block-content collapse in">
				           <div class="span12">
									
				               <div class="block-content collapse in">
							   
								  
							   
							   
         
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
                                        <div class="huge">Information</div>
                                        <div>Basic Info</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
							
							
							  <?php
									$student_query = mysql_query("select usn from login where login_id='$session_id' ")or die(mysql_error());
									while($row = mysql_fetch_array($student_query))
									{
									$del = $row['usn'];
	
										?>
							   
							
									<a href="basicdetails.php"> <?php } ?>
							
                                <div class="modal-footer">
                                    <span class="pull-left">Enter Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>						  
                            </a>	
                        </div>
                    </div>
					
													
			
                     <div class="span6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-share-square fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge">Academics</div>
                                        <div>Academic Info</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="allmarks.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Enter Details</span>
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