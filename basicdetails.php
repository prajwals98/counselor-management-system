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
	
	
	
	
        <div class="container-fluid">
            <div class="row-fluid">
		
                   <div class="span9" id="content">
                      <div class="row-fluid">
					     <?php $query= mysql_query("select * from login where login_id = '$session_id'")or die(mysql_error());
						   $row = mysql_fetch_array($query);
						 ?>
				         
					   				
					  <!-- block -->
                       
                            <div class="navbar navbar-inner block-header" >
							<h1 align="center">DETAILS</h1>
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard </div>
								<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
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
				<form method="post" id="insert_form">		
						
				
				<?php
				$usn10=$_SESSION['usn1'];
								$query = mysql_query("select * from year1 where usn='$usn10'")or die(mysql_error());
								$num_row = mysql_num_rows($query);
								$row = mysql_fetch_array($query);
								if($num_row > 0)
								{
								?>
				
				
						
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
			<input class="form-control" name="fname" required="required" value="<?php echo $row['fullname']; ?>" pattern="[A-Za-z]+$" disabled>
			</div>
			 <div class="col-lg-2">
			<label>USN (1RVXXISXXX) <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input  class="form-control" name="USN" required="required" value="<?php echo $row['usn']; ?>" pattern="1RV[0-9][0-9]IS[0-9][0-9][0-9]" disabled>
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>DOB (YY-MM-DD) <span id="" style="font-size:11px;color:red">  </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="dob" required="required" value="<?php echo $row['DOB']; ?>" pattern="[1-2][0-9][0-9][0-9]-[0-1][0-9]-[0-3][0-9]">
			</div>
			 <div class="col-lg-2">
			<label>Blood Group</label>
			</div>
			<div class="col-lg-4">
			<input class="form-control" value="<?php echo $row['bloodgroup']; ?>" name="bg">
			</div>	
			<br /><br />		
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Mobile No <span id="" style="font-size:11px;color:red"> </span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="mobileno" required="required" value="<?php echo $row['Mobileno']; ?>" pattern="\+?\d[\d -]{8}\d">
			</div>
			 <div class="col-lg-2">
			<label>E-mail <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="email" required="required"  value="<?php echo $row['email']; ?>" pattern="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*">
			</div>
			
			 
			</div>	
			<br><br>
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>counselor</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="counselor" required="required"  value="<?php echo $row['counselor']; ?>" disabled>
			</div> 
			  <br>
			
			
			
			
			
			
			
			 <div class="col-lg-2">
			<label>Father Name <span id="" style="font-size:11px;color:red" > </span></label>
			
			</div>
			<div class="col-lg-4" style="color:red">
			<input class="form-control" name="fathername" required="required" value="<?php echo $row['fathername']; ?>" pattern="[A-Za-z]+$">
			</div>
			 <div class="col-lg-2">
			<label>Father's Occupation <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fatherocc" required="required" value="<?php echo $row['foccupation']; ?>" pattern="[A-Za-z]+$">
			</div>
			</div>	
			<br><br>
			
			
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Father's Contact <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fmobileno" required="required" value="<?php echo $row['fcontact']; ?>" pattern="\+?\d[\d -]{8}\d">
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
			<input class="form-control" name="mothername" required="required" value="<?php echo $row['mothername']; ?>" pattern="[A-Za-z]+$">
			</div>
			 <div class="col-lg-2">
			<label>Mother's Occupation</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="motherocc" value="<?php echo $row['moccupation']; ?>" pattern="[A-Za-z]+$">
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>Mother's Contact</label>
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="mmobileno" value="<?php echo $row['mcontact']; ?>" pattern="\+?\d[\d -]{8}\d">
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
         <input class="form-control" name="guarname" value="<?php echo $row['localname']; ?>" pattern="[A-Za-z]+$">
			</div>
			 <div class="col-lg-2">
			<label>Local Guardian's Contact</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="guarmobileno" value="<?php echo $row['lcontact']; ?>" pattern="\+?\d[\d -]{8}\d">
			</div>
			<br><br><br><br>
			<div class="col-lg-2">
			<label>Accommodation</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="accommadation" value="<?php echo $row['accommodation']; ?>" disabled>
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
			<input class="form-control" name="Xboard" required="required" value="<?php echo $row['boardx']; ?>" pattern="[A-Za-z]+$">
			</div></td>
            <td><div class="col-lg-6">
			<input class="form-control" name="Xmarks" required="required" value="<?php echo $row['xmarks']; ?>" pattern="[0-9][0-9]">
			</div></td>
			<td><div class="col-lg-6">
			<input class="form-control" name="Xyear" required="required" value="<?php echo $row['yopx']; ?>" pattern="[1-2][0-9][0-9][0-9]">
			</div></td>
                  </tr>

          <tr> 
                  <td><div class="col-lg-6">
				  Class XII
				  </div></td>
                  <td><div class="col-lg-6">
			<input class="form-control" name="XIIboard" required="required" value="<?php echo $row['boardxii']; ?>" pattern="[A-Za-z]+$">
			</div></td>
            <td><div class="col-lg-6">
			<input class="form-control" name="XIImarks" required="required" value="<?php echo $row['xiimarks']; ?>" pattern="[0-9][0-9]">
			</div></td>
			<td><div class="col-lg-6">
			<input class="form-control" name="XIIyear" required="required" value="<?php echo $row['yopxii']; ?>" pattern="[1-2][0-9][0-9][0-9]">
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

	
<div class="control-group">
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
<?php 
								}
else
{
	$query1 = mysql_query("select * from login where usn='$usn10'")or die(mysql_error());
								$row1 = mysql_fetch_array($query1);
								$fullname1=$row1['firstname']." ".$row1['lastname'];
	?>
	
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
			<input class="form-control" name="fname" required="required" value="<?php echo $fullname1; ?>" pattern="[A-Za-z]+$" disabled>
			</div>
			 <div class="col-lg-2">
			<label>USN (1BMXXMCAXX) <span id="" style="font-size:11px;color:red"> </span></label>
			
			</div>
			<div class="col-lg-4">
			<input  class="form-control" name="USN" required="required" value="<?php echo $usn10; ?>" pattern="1RV[0-9][0-9]IS[0-9][0-9][0-9]" disabled>
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>DOB (YY-MM-DD) <span id="" style="font-size:11px;color:red">  </span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="dob" required="required" pattern="[1-2][0-9][0-9][0-9]-[0-1][0-9]-[0-3][0-9]">
			</div>
			 <div class="col-lg-2">
			<label>Blood Group</label>
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="bg">
			</div>	
			<br /><br /><br />		
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
			<input class="form-control" name="email" required="required"  pattern="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*">
			</div>
			
			 
			</div>	
			<br><br>
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>counselor</label>
			
			




</div>
			<div class="col-lg-4">
			<select id="pro" name="counselor" >                      
			<option value="<?php echo $row['counselor'];?>"><?php echo $row['counselor'];?></option>
			
			<option value="PT"> Padmashree T</option>
			<option value="CRM">Chethana Murthy</option>
			<option value="RMS">Rajashekhara Murthy</option>
			<option value="PD">Priya D</option>
			
	
			


</select>
			</div> 
			 <div class="col-lg-2">
			<label>Select Year</label>
			
			</div>
				<div class="col-lg-4">
			<select id="yr" name="yr">                      
	<option value="0">--Select Year--</option>
	<option value="1st Year">1st Year</option>
	<option value="2nd Year">2nd Year</option>
	<option value="3rd Year">3rd Year</option>
	<option value="3rd Year">4th Year</option>
</select>
			</div>
			
			
			  <br /><br /><br />
			
			
			
			
			
			
			
			 <div class="col-lg-2">
			<label>Father Name <span id="" style="font-size:11px;color:red" > </span></label>
			
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
<option value="Day Scholar">Day Scholar</option>
<option value="Hostelite">Hostelite</option>
<option value="Paying Guest">Paying Guest</option>
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
			<br><br>

	
<div class="control-group">
                                         <div class="control-group">
                                          <div class="controls">
												<button name="save1" class="btn btn-info" id="save1" data-placement="center" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save1').tooltip('show');
	                                            $('#save1').tooltip('hide');
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
					<?php
}
?>

                </div>
			
            </div>
			</form>
			
			
			
													
			
			

<?php


if (isset($_POST['save1']))
{	

$name=$_POST['fname'];
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

$yr			= $_POST['yr'];



$result = mysql_query("SELECT * FROM year1 WHERE usn ='$staff_fullname' ");	

if( mysql_num_rows($result) > 0)
	{
		mysql_query("UPDATE year1 SET fullname='$firstname',DOB='$dob',email='$email',Mobileno='$mobile',address='$fatheroccadd',counselor='$counselor',bloodgroup='$bloodgroup',fathername='$fathername',foccupation='$fatherocc',faddress='$fatheroccadd',fcontact='$fmobileno',mothername='$mothername',moccupation='$motherocc',maddress='$motheroccadd',mcontact='$mmobileno',localname='$guarname',lcontact='$guarmobileno',accommodation='$accommadation',boardx='$xboard',xmarks='$xmarks',yopx='$xyear',boardxii='$xiiboard',xiimarks='$xiimarks',yopxii='$xiiyear',yr='$yr' WHERE usn = '$get_id'") or die(mysql_error());

	}
	else
	{
	
mysql_query ("INSERT INTO year1 (fullname,usn,DOB,bloodgroup,Mobileno,email,counselor,fathername,foccupation,fcontact,faddress,mothername,moccupation,mcontact,maddress,localname,lcontact,accommodation,boardx,xmarks,yopx,boardxii,xiimarks,yopxii,yr) VALUES ('$name','','$dob','$bloodgroup','$mobile','$email','$counselor','$fathername','$fatherocc','$fmobileno','$fatheroccadd','$mothername','$motherocc','$mmobileno','$motheroccadd','$guarname','$guarmobileno','$accommadation','$xboard','$xmarks','$xyear','$xiiboard','$xiimarks','$xiiyear','$yr')")  or die(mysql_error());
	}
?>
<script>
window.location = "dashboard_staff.php";
alert("Details Added");
</script>
<?php

}
?>
			
						<script>  
 $(document).ready(function(){  
      $('#insert_form').on("save1", function(event){  
           event.preventDefault();  
          
                $.ajax({  
                     url:"basicdetails.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
             
      });  
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script> 
	
			
			
			
			
			
			
			
			
			
			
			
			
			

        </div>
		<?php include('script.php'); ?>
    </body>
	
</html>