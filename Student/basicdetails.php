<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>

    <body id="home">
	
	
	
	
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet" />
<link href="bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet" />
<link href="dist/css/sb-admin-2.css" rel="stylesheet" />
<link href="bower_components/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	
	
	
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_slidebar.php'); ?>	
                   <div class="span9" id="content">
                     
					     <?php $query= mysql_query("select * from login where login_id = '$session_id'")or die(mysql_error());
						   $row = mysql_fetch_array($query);
						 ?>
				       	
					  <!-- block -->
                       
                            <div class="navbar navbar-inner block-header" >
							<h1 align="center">DETAILS</h1>
                                
                            </div>
							
                           
         
				
				
				
									
				
				
				
				
				<div class="pull-center">
		   <a href="dashboard_staff.php" class="btn btn-info" id="print" data-placement="right" title="Back">Back</a> 		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	   
         </div>
				<form method="post"  id="insert_form">		
						
				
				<?php
								$query = mysql_query("select * from year1 where usn='$staff_fullname'")or die(mysql_error());
								$num_row = mysql_num_rows($query);
								$row = mysql_fetch_array($query);
								
								?>
				
				
						
			<div class="panel panel-default">
			<div class="panel-heading">Personal Information-I</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label>Full Name<span id="" style="font-size:11px;color:red"> </span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fullname" required="required" value="<?php echo $fullname; ?>"  disabled>
			</div>
			 <div class="col-lg-2">
			<label>USN <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input  class="form-control" name="USN" required="required" value="<?php echo $staff_fullname; ?>" disabled>
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>DOB (YY-MM-DD)* <span id="" style="font-size:11px;color:red">  </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="dob" required="required" value="<?php echo $row['DOB']; ?>" pattern="[1-2][0-9][0-9][0-9]-[0-1][0-9]-[0-3][0-9]" title="DOB should be as (YYYY-MM-DD). e.g. 1992-05-28">
			</div>
			 <div class="col-lg-2">
			<label>Blood Group</label>
			</div>
			<div class="col-lg-4">
			<input class="form-control" value="<?php echo $row['bloodgroup']; ?>" name="bg">
			</div>	
			<br /><br /><br />		
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Mobile No* <span id="" style="font-size:11px;color:red"> </span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="mobileno" required="required" value="<?php echo $row['Mobileno']; ?>" pattern="\+?\d[\d -]{8}\d" title="Enter Valid Number.">
			</div>
			 <div class="col-lg-2">
			<label>E-mail* <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="email" required="required"  value="<?php echo $email; ?>" disabled>
			</div>
			
			 
			</div>	
			<br><br>
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>counselor*</label>		
			
			</div>
			<div class="col-lg-4">
			<select id="pro" name="counselor" >                      
			<option value="<?php echo $row['counselor'];?>">
			<?php echo $row['counselor'];?></option>
			

			<?php
$sql = mysql_query("SELECT username,firstname From staff order by firstname");
$row1 = mysqli_num_rows($sql);
while ($row1 = mysql_fetch_array($sql)){
echo "<option value='". $row1['username'] ."'>" .$row1['firstname'] ."</option>" ;
}
?>



		<!--	<option value="PT"> Padmashree T</option>
			<option value="CRM">Chethana Murthy</option>
			<option value="RMS">Rajashekhara Murthy</option>
			<option value="PD">Priya D</option>-->
			
			</select>
			</div> 
			
			
			
			
			 <div class="form-group">
			 <div class="col-lg-2">
			<label>Year*</label>		
			
			</div>
			<div class="col-lg-4">
			<select id="yr" name="yr" >                      
			<option value="<?php echo $row['yr'];?>"><?php echo $row['yr'];?></option>
			
			<option value="1st Year">1st Year</option>
			<option value="2nd Year">2nd Year</option>
			<option value="3rd Year">3rd Year</option>
			<option value="3rd Year">4th Year</option>
			</select>
			</div> 
			
			
			
			
			
			 
			<br /><br /><br />
			
			 
			
			 <div class="col-lg-2">
			<label>Father Name* <span id="" style="font-size:11px;color:red" > </span></label>
			
			</div>
			<div class="col-lg-4" style="color:red">
			<input class="form-control" name="fathername" required="required" value="<?php echo $row['fathername']; ?>" pattern="[A-Za-z]+$" title="Name should be in letters. e.g. deepesh">
			</div>
			 <div class="col-lg-2">
			<label>Father's Occupation* <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fatherocc" required="required" value="<?php echo $row['foccupation']; ?>" pattern="[A-Za-z]+$" title="Should be in letters. e.g. deepesh">
			</div>
			</div>	
			<br /><br />
			
			
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Father's Contact* <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fmobileno" required="required" value="<?php echo $row['fcontact']; ?>" pattern="\+?\d[\d -]{8}\d" title="Enter Valid Number.">
			</div>
			 <div class="col-lg-2">
			<label>Father's Occupational Address</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fatheroccadd" value="<?php echo $row['faddress']; ?>">
			</div>
			
			</div>	
			<br><br>
			</div>	
			<br><br>
		</div>
      	</div>
		</div> </div> </div>
		
		
		
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Personal Information-II</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label>Mother's Name <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="mothername"  value="<?php echo $row['mothername']; ?>" pattern="[A-Za-z]+$" title="Should be in letters. e.g. deepesh">
			</div>
			 <div class="col-lg-2">
			<label>Mother's Occupation</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="motherocc" value="<?php echo $row['moccupation']; ?>" pattern="[A-Za-z]+$" title="Should be in letters. e.g. deepesh">
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>Mother's Contact</label>
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="mmobileno" value="<?php echo $row['mcontact']; ?>" pattern="\+?\d[\d -]{8}\d" title="Enter Valid Number.">
			</div>
			 <div class="col-lg-2">
			<label>Mother's Occupational Address</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="motheroccadd" value="<?php echo $row['maddress']; ?>">
			</div>
			
			</div>	
			
	<br><br><br><br>		
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Local Guardian's Name</label>
			
			</div>
			<div class="col-lg-4">
         <input class="form-control" name="guarname" value="<?php echo $row['localname']; ?>" pattern="[A-Za-z]+$" title="Should be in letters. e.g. deepesh">
			</div>
			 <div class="col-lg-2">
			<label>Local Guardian's Contact</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="guarmobileno" value="<?php echo $row['lcontact']; ?>" pattern="\+?\d[\d -]{8}\d" title="Enter Valid Number.">
			</div>
			<br><br><br><br>
			<div class="col-lg-2">
			<label>Accommodation*</label>
			
			</div>
			<div class="col-lg-4">
			<select id="accommadation"  name="accommadation" >                     
		<option value=""><?php echo $row['accommodation']; ?></option>
		<option value="Day Scholar">Day Scholar</option>
		<option value="Hostelite">Hostelite</option>
		<option value="Paying Guest">Paying Guest</option>
		</select>
			</div>
			<br><br><br>
			</div> </div> </div> </div> </div>	
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
				  Class X*
				  </div></td>
                  <td><div class="col-lg-7">
			<input class="form-control" name="Xboard" required="required" value="<?php echo $row['boardx']; ?>" pattern="[A-Za-z]+$" title="Should be in letters. e.g. deepesh">
			</div></td>
            <td><div class="col-lg-6">
			<input class="form-control" name="Xmarks" required="required" value="<?php echo $row['xmarks']; ?>" pattern="[0-9][0-9]" title="Should be 2 digits. e.g. 50">
			</div></td>
			<td><div class="col-lg-6">
			<input class="form-control" name="Xyear" required="required" value="<?php echo $row['yopx']; ?>" pattern="[1-2][0-9][0-9][0-9]" title="Should be 4 digits. e.g. 2008">
			</div></td>
                  </tr>

          <tr> 
                  <td><div class="col-lg-6">
				  Class XII*
				  </div></td>
                  <td><div class="col-lg-7">
			<input class="form-control" name="XIIboard" required="required" value="<?php echo $row['boardxii']; ?>" pattern="[A-Za-z]+$" title="Should be in letters. e.g. deepesh">
			</div></td>
            <td><div class="col-lg-6">
			<input class="form-control" name="XIImarks" required="required" value="<?php echo $row['xiimarks']; ?>" pattern="[0-9][0-9]" title="Should be 2 digits. e.g. 50">
			</div></td>
			<td><div class="col-lg-6">
			<input class="form-control" name="XIIyear" required="required" value="<?php echo $row['yopxii']; ?>" pattern="[1-2][0-9][0-9][0-9]" title="Should be 4 digits. e.g. 2008">
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
			<br><br>

	
		<div class="control-group"><center>
                                         <div class="control-group">
                                          <div class="controls">
												<button name="save1" class="btn btn-info" id="save" data-placement="center" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                        
	
		  </div>
	
		    
			<br><br>
			
			
			</div>	
			<br><br>
		</div>
      	</div>
		</div>					
       
          </div>	
					     
						
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
 
								


               
				
				
		
			
           
			</form>
			
			
			
													
			
		<?php


if(isset($_POST['save1']))
{	

$name=$_POST['fullname'];
$usn = $staff_row['usn'];
$dob = 	$_POST['dob'];
$bloodgroup = 	$_POST['bg'];
$mobile = $_POST['mobileno'];
$email =	 	$staff_row['email'];
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

$yr=  $_POST['yr'];


$result = mysql_query("select counselor from year1 where usn = '$staff_fullname'");
if(mysql_num_rows($result)==0)
{
$query="INSERT INTO year1 VALUES('$fullname','$staff_fullname','$dob','$email','$mobile','$fatheroccadd','$counselor','$bloodgroup','$fathername','$fatherocc','$fatheroccadd','$fmobileno','$mothername','$motherocc','$motheroccadd','$mmobileno','$guarname','$guarmobileno','$accommadation','$xboard','$xmarks','$xyear','$xiiboard','$xiimarks','$xiiyear','$yr')";
mysql_query($query);
}
else
{
	
	$query1 = "UPDATE year1 SET fullname='$fullname',usn='$staff_fullname',DOB='$dob',email='$email',Mobileno='$mobile',address='$fatheroccadd',counselor='$counselor',bloodgroup='$bloodgroup',fathername='$fathername',foccupation='$fatherocc',faddress='$fatheroccadd',fcontact='$fmobileno',mothername='$mothername',moccupation='$motherocc',maddress='$motheroccadd',mcontact='$mmobileno',localname='$guarname',lcontact='$guarmobileno',accommodation='$accommadation',boardx='$xboard',xmarks='$xmarks',yopx='$xyear',boardxii='$xiiboard',xiimarks='$xiimarks',yopxii='$xiiyear',yr='$yr' WHERE usn = '$staff_fullname' ";
	mysql_query($query1);
}




	
		echo "
		<script>
		window.location = 'basicdetails.php'; 
		alert('Details Updated');
		</script>";
}
?>








			

	
			
			
			
			
			
			
			
			
			
			
			
			
			

        </div>
		<?php include('script.php'); ?>
    </body>
	
</html>