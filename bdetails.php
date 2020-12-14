<?php include('admin/lib/dbcon.php');
dbcon(); 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Counselor Management System">
    <meta name="author" content="bhargav & deepesh">
	<link href="bootstrap/css/index_background.css" rel="stylesheet" media="screen"/>
<link rel="shortcut icon" href="images/logo.png" />
<link href="bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet" />
<link href="bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet" />
<link href="dist/css/sb-admin-2.css" rel="stylesheet" />
<link href="bower_components/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />
<title> Counselor Management System</title>
</style>
</head>
    <body id="home">
		
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-left"><a id="return" data-placement="left" title="Click to Return" href="index.php"><i class="icon-arrow-left"></i> Back</a></div>
									<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script> 
								</div>
								
								
								 <div class="navbar navbar-inner block-header" >
							<h1 align="center">DETAILS</h1>
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i> </div>
								<div class="muted pull-left"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
								
                            <div class="muted pull-left" ">
							<h3>&nbsp;Registration Form</h3>
							<hr>
							<div class="span3"></div>
                                <p align="center">
							
                                <div class="span3" >
								<form method="POST">
										<center>
								        <div>
										
										
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
			<input class="form-control" name="fname" required="required"  pattern="[A-Za-z]+$">
			</div>
			 <div class="col-lg-2">
			<label>USN (1RVXXISXXX) <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="USN" required="required" pattern="1RV[0-9][0-9]IS[0-9][0-9][0-9]">
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>DOB (YY-MM-DD) <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="dob" required="required"  pattern="[1-2][0-9][0-9][0-9]-[0-1][0-9]-[0-3][0-9]">
			</div>
			 <div class="col-lg-2">
			<label>Blood Group</label>
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="bg">
			</div>	
			<br /><br />		
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Mobile No <span id="" style="font-size:11px;color:red"> </span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="mobileno" required="required" pattern="\+?\d[\d -]{8}\d">
			</div>
			 <div class="col-lg-2">
			<label>E-mail <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="email" required="required" pattern="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*">
			</div>
			
			 
			</div>	
			<br><br>
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>counselor</label>
			
			</div>
			<div class="col-lg-4">
			<select id="counselor" name="counselor">                      
<option value="0">--Select counselor--</option>
<option value="Dr K Vijayakumar">Dr K Vijayakumar</option>
<option value="Girish K">Girish K</option>
<option value="Lakshminarayana P">Lakshminarayana P</option>
<option value="Padmapriya V">Padmapriya V</option>
<option value="Pushpa T S">Pushpa T S</option>
<option value="Raghavendra Rao R V">Raghavendra Rao R V</option>
<option value="Rammohan Reddy C H">Rammohan Reddy C H</option>
<option value="S Shilpa">S Shilpa</option>
<option value="Shailaja K P">Shailaja K P</option>
<option value="Sivaramakrishna M">Sivaramakrishna M</option>
<option value="Uma S">Uma S</option>
</select>
			</div> 
			 <div class="col-lg-2">
			<label>Year</label>
			
			</div>
			<div class="col-lg-4">
			<select id="yr" name="yr">                      
<option value="0">--Select Year--</option>
<option value="1st Year">1st Year</option>
<option value="2nd Year">2nd Year</option>
<option value="3rd Year">3rd Year</option>

</select>
			</div> <br><br><br>
			
			
			
			
			
			
			
			 <div class="col-lg-2">
			<label>Father Name <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4" style="color:red">
			<input class="form-control" name="fathername" required="required" pattern="[A-Za-z]+$">
			</div>
			 <div class="col-lg-2">
			<label>Father's Occupation <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fatherocc" required="required" pattern="[A-Za-z]+$">
			</div>
			</div>	
			<br><br>
			
			
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Father's Contact <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fmobileno" required="required" pattern="\+?\d[\d -]{8}\d">
			</div>
			 <div class="col-lg-2">
			<label>Father's Occupational Address</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fatheroccadd">
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
			<label>Mother's Name <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="mothername" required="required" pattern="[A-Za-z]+$">
			</div>
			 <div class="col-lg-2">
			<label>Mother's Occupation</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="motherocc" pattern="[A-Za-z]+$">
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>Mother's Contact</label>
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="mmobileno" pattern="\+?\d[\d -]{8}\d">
			</div>
			 <div class="col-lg-2">
			<label>Mother's Occupational Address</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="motheroccadd">
			</div>
			
			</div>	
			
	<br><br><br><br>		
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Local Guardian's Name</label>
			
			</div>
			<div class="col-lg-4">
         <input class="form-control" name="guarname" pattern="[A-Za-z]+$">
			</div>
			 <div class="col-lg-2">
			<label>Local Guardian's Contact</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="guarmobileno" pattern="\+?\d[\d -]{8}\d">
			</div>
			<br><br><br><br>
			<div class="col-lg-2">
			<label>Accommodation</label>
			
			</div>
			<div class="col-lg-4">
			<select id="accommadation" name="accommadation">                      
<option value="0">--Select Accommodation--</option>
<option value="1">Day Scholar</option>
<option value="2">Hostelite</option>
<option value="3">Paying Guest</option>
</select>
			</div>
			<br><br><br>
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
			<input class="form-control" name="Xboard" required="required" pattern="[A-Za-z]+$">
			</div></td>
            <td><div class="col-lg-6">
			<input class="form-control" name="Xmarks" required="required" pattern="[0-9][0-9]">
			</div></td>
			<td><div class="col-lg-6">
			<input class="form-control" name="Xyear" required="required" pattern="[1-2][0-9][0-9][0-9]">
			</div></td>
                  </tr>

          <tr> 
                  <td><div class="col-lg-6">
				  Class XII
				  </div></td>
                  <td><div class="col-lg-6">
			<input class="form-control" name="XIIboard" required="required" pattern="[A-Za-z]+$">
			</div></td>
            <td><div class="col-lg-6">
			<input class="form-control" name="XIImarks" required="required" pattern="[0-9][0-9]">
			</div></td>
			<td><div class="col-lg-6">
			<input class="form-control" name="XIIyear" required="required" pattern="[1-2][0-9][0-9][0-9]">
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
										
					 <div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info" id="save" data-placement="center" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
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
if (isset($_POST['save']))
{
$firstname 	= 	$_POST['fname'];
$usn = 	$_POST['USN'];
$dob = 	$_POST['dob'];
$bloodgroup = 	$_POST['bg'];
$mobile = $_POST['mobileno'];
$email =	 	$_POST['email'];
$counselor= 	$_POST['counselor'];
$fathername=	 	$_POST['fathername'];
$fatherocc = 		$_POST['fatherocc'];
$fmobileno = 	$_POST['fmobileno'];
$fatheroccadd = 		$_POST['fatheroccadd'];
$mothername= 	$_POST['mothername'];
$motherocc= 	$_POST['motherocc'];
$mmobileno= 	$_POST['mmobileno'];
$motheroccadd= 	$_POST['motheroccadd'];
$guarname= 	$_POST['guarname'];
$guarmobileno= 	$_POST['guarmobileno'];
$accommadation= 	$_POST['accommadation'];
$xboard= 	$_POST['Xboard'];
$xmarks= 	$_POST['Xmarks'];
$xyear= 	$_POST['Xyear'];
$xiiboard= 	$_POST['XIIboard'];
$xiimarks= 	$_POST['XIImarks'];
$xiiyear= 	$_POST['XIIyear'];
$degreeboard= 	$_POST['degreeboard'];
$degreemarks= 	$_POST['degreemarks'];
$degreeyear= 	$_POST['degreeyear'];
$yr			= $_POST['yr'];




$query = @mysql_query("select * from year1 where  usn = '$usn'  ")or die(mysql_error());
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
	mysql_query("insert into year1 (fullname,usn,DOB,email,Mobileno,address,counselor,bloodgroup,fathername,foccupation,faddress,fcontact,mothername,moccupation,maddress,mcontact,localname,lcontact,accommodation,boardx,xmarks,yopx,boardxii,xiimarks,yopxii,degree,degreemarks,yopdegree,yr) 
values('$firstname','$usn','$dob','$email','$mobile','$fatheroccadd','$counselor','$bloodgroup','$fathername','$fatherocc','$fatheroccadd','$fmobileno','$mothername','$motherocc','$motheroccadd','$mmobileno','$guarname','$guarmobileno','$accommadation','$xboard','$xmarks','$xyear','$xiiboard','$xiimarks','$xiiyear','$degreeboard','$degreemarks','$degreeyear','$yr')")or die(mysql_error());

//mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Added Student $RegNo')")or die(mysql_error());
?>
<script>
window.location = "index.php";
$.jGrowl("Student Successfully added", { header: 'Staff add' });
</script>
<?php
}
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