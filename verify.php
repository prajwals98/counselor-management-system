
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
							<h3>&nbsp;Student Registration Form</h3>
							<hr>
							<div class="span3"></div>
                                <p align="center">
							
                                <div class="span3" >
								<form method="POST">
										<center>
								        <div>
							<div>
								<input type="text"  class="input-block-level"   id="firstname" name="firstname" placeholder="First Name" required>
								</div>
								<div>
								<input type="text"  class="input-block-level"   id="lastname" name="lastname" placeholder="Last Name" required>
								</div>
								 <div>
								<input type="text"      class="input-block-level"   id="usn" name="usn" placeholder="USN" pattern="1RV[0-9][0-9]IS[0-9][0-9][0-9]" required>
								</div>
                                <div>
								<input type="text"      class="input-block-level"   id="username" name="username" placeholder="Username" required>
								</div>
								<div>
								<input type="password"  class="input-block-level"   id="password" name="password" placeholder="Password" required>
								</div>
								<div>
								<input type="password"  class="input-block-level"   id="cpassword" name="cpassword" placeholder="Confirm Password" required>
								</div>
								<div>
								<input type="text"  class="input-block-level"   id="email" name="email" placeholder="email" required>
								</div>
								<div>
								<button data-placement="right" title="Click Here to Sign up" id="button" name="submit" class="btn btn-info" type="submit">Sign Up</button>
								</div>
                            </div>
								        </center>
								</div>
								</p>
								<script>
								$(document).ready(function () {
   $("#password, #cpassword").keyup(checkPasswordMatch);
});
								
								function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#cpassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}
								</script>
								
	<?php
if (isset($_POST['submit']))
{
$firstname  = 	$_POST['firstname'];
$lastname = 	$_POST['lastname'];
$usn = 	$_POST['usn'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword=$_POST['cpassword'];
$email = $_POST['email'];
$image="uploads/nobody_m.original.jpg";
$code=substr(md5(mt_rand()),0,15);

if($password!=$cpassword)
{
	?>
	<script>
	alert('Password Missmatch');
	</script>
	<?php
}
else
{
$query = @mysql_query("select * from login where  usn = '$usn'  ")or die(mysql_error());
$count = mysql_num_rows($query);
if ($count > 0)
{ 
?>
<script>
alert('USN Number Already Allocated ');
</script>
<?php
}
else
{
	
		mysql_query("insert into verify (username,password,firstname,lastname,usn,thumbnails,email,code) values ('$username','$password','$firstname','$lastname','$usn','$image','$email','$code')")or die(mysql_error());
    
	require './PHPMailer-master/PHPMailerAutoload.php';
			
		$to=$email;
		$subject="Email verification";
		$base_url = "http://localhost/x/verify.php";
		$body='Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. <br/> <br/> <a href="'.$base_url.'activation/'.$code.'">'.$base_url.'activation/'.$code.'</a>';
		
		Send_Mail($to,$subject,$body);









		
?>
<script>
//window.location = "index.php";
$.jGrowl("Registered Successfully ", { header: 'Staff add' });
</script>
<?php
}
}
}
?>	







<?php

function Send_Mail($to,$subject,$body)
{
	require 'class.phpmailer.php';
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "tls";
			$mail->Host = "smtp.gmail.com";
			$mail->port = 587;
			$mail->Username = "computer.hardware.online@gmail.com";
			$mail->Password = "deepeshcha";
			//$mail->SMTPDebug = 2;

		
			$mail->From = "smartmentoringsystem@bmscemca.in";
			$mail->FromName = "Counselor Management SYSTEM";
			$mail->Subject = "$subject";
			$mail->Body = " $body";
			$mail->MsgHTML = (" ");
			$mail->AddAddress($to);
			$mail->IsHTML(true);

}
?>











	 
                               
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