<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<link href="admin/bootstrap/css/index_background.css" rel="stylesheet" media="screen"/>
<link rel="shortcut icon" href="images/logo.png" />

</style>
</head>
<?php include('header_dashboard.php'); ?>
    <body id="home">
		<?php include('navbar_about.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="index.php"><i class="icon-arrow-left"></i> Back</a></div>
									<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script> 
								</div>
                            <div class="block-content collapse in" ">
							<h3 align="">&nbsp;Forgot Password????</h3>
							<hr>
							<div class="span3"></div>
                                <p align="center">
							
                                <div class="span3" >
								<form method="POST" action="phpmail.php">
										
								        <div>
							<div>
								
								</div>
								<center>
							
								<div>
								<input type="text"  class="input-block-level"   id="email" name="email" placeholder="Email-id" required>
								<button data-placement="center" align="center" title="Click Here to Sign up" id="button" name="submit" class="btn btn-info" type="submit">Submit</button>
								</div>
                            </div>
								       
								</div>
								</p>
	
								

                               
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
			</form>
		
        </div>
		<?php include('script.php'); ?>
    </body>
</html>