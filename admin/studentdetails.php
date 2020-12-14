<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<link href="bootstrap/css/index_background.css" rel="stylesheet" media="screen"/>

</head>
<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
			 <?php include('dashboard_slidebar.php'); ?>		
                <div class="span9" id="content">
                    <div class="row-fluid">
         	         <?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
			         $row = mysql_fetch_array($query);			
			         ?>
                 
     
                      <!-- block -->
                        
<div class="block-content collapse in">
<div id="page-wrapper">
        <?php 
	     $student = mysql_query("select * from year1 where yr='1st Year' ")or die(mysql_error());
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
                                        <div class="huge">1st YEAR</div><br/>
                                        
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="year1.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Students</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
		<?php 
	     $new = mysql_query("select * from year1 where yr='2nd Year' ")or die(mysql_error());
		 $new = mysql_num_rows($new);
		 ?>			
                     <div class="span6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-desktop fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge">2nd YEAR</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="year2.php">							  
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
<div id="page-wrapper">
           <div class="row-fluid">
		 <?php 
	     $staff = mysql_query("select * from year1 where yr='3rd Year' ")or die(mysql_error());
		 $staff = mysql_num_rows($staff);
		 ?>	
			 <div class="span6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-desktop fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge">3rd YEAR</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="year3.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Students</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
                    <?php 
	     $new = mysql_query("select * from year1 where yr='4th Year' ")or die(mysql_error());
		 $new = mysql_num_rows($new);
		 ?>			
                     <div class="span6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-desktop fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge">4th YEAR</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="year2.php">							  
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
    
        
        </div>
	<?php include('script.php'); ?>
    </body>
<embed src="../sound/access_granted.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />	