     <link href="bootstrap/css/admin_background.css" rel="stylesheet" media="screen"/>
<link rel="shortcut icon" href="images/logo.png" />
	 <div class="span3" id="sidebar">
	              <img id="admin_avatar" class="img-circle" src="<?php echo $row['adminthumbnails']; ?>">
	                 
                  <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                           <li class="active"> 
						   <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> 
						   </li>
						 
						 <!------/.* manage Students sidebar*------->						
						 <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Manage Student
						    <div class="muted pull-right"><i class="caret"></i></div></a>					
						    <ul id="bs" class="collapse">						
                            <li class="">
                            <a href="studentDetails.php"><i class="icon-chevron-right"></i><i class="icon-user"></i> Students Details</a>
                            </li>
						   				
						   
												   							
						    </ul>
						</li>
                         
                          <!------/.* finance sidebar*------->
					   
						
					  <!------/.* manage System user sidebar*------->	
						
						
						<!------/.* System Log sidebar*------->	
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs3"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;System log
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs3" class="collapse">						
                            <li class="">
                            <a href="activity_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Activity Log</a>
                            </li>
						    <li class="">
                            <a href="user_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> User Log</a>
                            </li>
						    </ul>
						</li>
						
					  <!------/.* notification sidebar*------->
					   
                  </ul>					
													
    </div>