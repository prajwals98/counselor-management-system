
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="St.Lukes Boys School Management System">
    <meta name="author" content="Kithinji Godfrey">
	<link href="admin/bootstrap/css/index_background.css" rel="stylesheet" media="screen"/>
<link rel="shortcut icon" href="images/logo.png" />
</head>
<?php include('header_dashboard.php'); ?>
     <body id="home">
		<?php include('navbar_about.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="index.php"><i class="icon-arrow-left"></i> Back</a></div>
									<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>
								</div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="container-fluid">                                    
										<?php
											$history_query = mysql_query("select * from content where title  = 'History' ")or die(mysql_error());
											$history_row = mysql_fetch_array($history_query);
											echo $history_row['content'];
										?>										                             
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
</html>