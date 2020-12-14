<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../composer/vendor/autoload.php';

//require 'class/class.phpmailer.php';
	if (isset($_POST['submit']))
{
//$subject  = 	$_POST['subject'];
//$description=     $_POST['description'];




	
			
		
			$mail = new PHPMailer();
			$mail->SMTPDebug = 2;
			$mail->IsSMTP();
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "tls";
			$mail->Host = "smtp.gmail.com";
			$mail->port = 587;
			$mail->Username = 'prajjuprajwal98@gmail.com';
			$mail->Password = 'prajwal@1998';
			//$mail->SMTPDebug = 2;
/*
			$programming_languages = '';
			foreach($_POST["programming_languages"] as $row)
			{
			 $programming_languages .= $row . ', ';
			}
			$programming_languages = substr($programming_languages, 0, -2);
			$path = 'upload/' . $_FILES["documents"]["name"];
			//move_uploaded_file($_FILES["resume"]["tmp_name"], $path);

*/

$documents='';
			$path=$_POST['documents'];
		    echo $path;
			$uploaddir = 'uploads/';
            $uploadfile = $uploaddir . basename($_FILES[$path]['name']);
			$path = 'uploads/' . $_FILES["documents"]["tmp_name"];
			//move_uploaded_file($_FILES["documents"]["tmp_name"], $path);
			if (move_uploaded_file($_FILES["documents"]["tmp_name"], $path)) {
				echo "File is valid, and was successfully uploaded.\n";
			} else {
				echo "Possible file upload attack!\n";
			}
			$mail->From = "prajjuprajwal98@gmail.com";
			$mail->FromName = "Prajwal S";
			$mail->Subject = $_POST['subject'];
            $mail->Body = $_POST['Description'];
            $mail->AddAttachment($path);
			$mail->MsgHTML = (" ");
			$mail->AddAddress("prajwals.devang.98@gmail.com");
			$mail->IsHTML(true);
			
		
			if($mail->Send())        //Send an Email. Return true on success or false on error
			{
			 $message = '<div class="alert alert-success">Application Successfully Submitted</div>';
			 unlink($path);
			
		/*	echo "<script>
alert('file has been mailed.');
window.location.href='../index.php';
</script>";  */
			}
		/*else
		{
			 
			echo "<script>
			alert('file couldnot be mailed, make sure you have active internet connection');
			window.location.href='../index.php';
			</script>"; 
        }*/
    }
?>







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
							<h3>&nbsp; Upload Form</h3>
							<hr>
							
                                <div class="span3" >
                                <p align="center">
                                <div class="col-md-8" style="margin:0 auto; float:none;">
								<form method="POST" enctype="multipart/form-data">
                             
								        <div>
                                        <center>
							
							
								
                                <div class="form-group">
                                <label><h4>Enter Subject</h4></label>
								<input type="text"  class="input-block-level"   id="subject" name="subject" placeholder="enter subject" required>
                                </div>
									<label><h4>Enter Description</h4></label>
                                    <div class="form-group">	<textarea name="Description" id="description"  placeholder="Enter Description" class="form-control" required rows="8"></textarea></div>
                                    <div class="form-group">
									<label><h4>Select Your file</h4></label>
									<input type="file" name='documents' class="form-control" required />
								</div>
								<button data-placement="center" align="center" title="Click Here to send" id="button" name="submit" class="btn btn-info" type="submit">Submit</button>
								</div>
                            </div>
                            </center>
                            </p> 
								</div>
								
	
								

                               
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