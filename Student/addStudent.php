<?php include('../admin/lib/dbcon.php');
dbcon(); 
 ?>
  <div class="row-fluid">
                        <!-- block -->
 <div class="block">
 <div class="navbar navbar-inner block-header">
<div class="muted pull-left"><i class="icon-plus-sign icon-large"> Register New Student</i></div>
</div>
<div class="block-content collapse in">
                                <div class="span12">
								
								 <!--------------------form------------------->
								<form method="post">
					<div class="control-group">
                                 <div class="controls">
                                   <p>
                                     <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "FirstName E.g. John" required>
                                   </p>
                                 </div>
                                  </div>
										
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="Secondname" id="focusedInput" type="text" placeholder = "Second Name E.g. Kamau" required>
                                            </p>
                                    </div>
                                    </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="othername" id="focusedInput" type="text" placeholder = "OtherName E.g. Muthare" optional>
                                            </p>
</div>
                                        </div>
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="RegNo" id="focusedInput" type="text" placeholder = " RegNO E.g. St43232" required>
                                            </p>
                                    </div>
                                    </div>
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="PlaceOfBirth" id="focusedInput" type="text" placeholder = " PlaceOfBirth E.g. Kirinyaga" required>
                                            </p>
                                    </div>
                                    </div>
										
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="YearOfBirth" id="focusedInput" type="text" placeholder = " yearOfBirth E.g. 1999" required>
                                            </p>
                                    </div>
                                    </div>
										
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="Contacts" id="focusedInput" type="text" placeholder = "contact e.g. 07100 000 000" required>
                                            </p>
                                    </div>
                                    </div>
										
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="PostAddress" id="focusedInput" type="text" placeholder = "PostAddress E.g. 59 Kiambuu" required>
                                            </p>
                                    </div>
                                    </div>
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="postalCode" id="focusedInput" type="text" placeholder = "PostalCode e.g. 60606" required>
                                            </p>
                                    </div>
                                    </div>
										
										<div class="control-group">
                                          <div class="controls">
                           <input class="input focused" name="YearIn" id="focusedInput" type="text" placeholder = " YearIn E.g. 1999" required>
                                          </div>
                                        </div>
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="YearOut" id="focusedInput" type="text" placeholder = "YearOut  E.g. 1999" required>
                                            </p>
                                    </div>
                                    </div>
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="KCPEMEAN" id="focusedInput" type="text" placeholder = " KCPE MArks E.g. 350" required>
                                            </p>
                                    </div>
                                    </div>
										
                                
                                        
										<div class="control-group">
                                          <div class="controls">
 <button name="save" class="btn btn-info" id="save" data-placement="right" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
												<script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
								
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>				 
<?php
if (isset($_POST['save'])){
$firstname = $_POST['firstname'];
$Secondname = $_POST['Secondname'];
$othername = $_POST['othername'];
$YearOfBirth = $_POST['YearOfBirth'];
$PlaceOfBirth = $_POST['PlaceOfBirth'];
$Contacts = $_POST['Contacts'];
$postalCode= $_POST['postalCode'];
$YearIn= $_POST['YearIn'];
$YearOut = $_POST['YearOut'];
$KCPEMEAN = $_POST['KCPEMEAN'];
$RegNo = $_POST['RegNo'];
$PostAddress= $_POST['PostAddress'];


$query = @mysql_query("select * from student where  RegNO = '$RegNO'  ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Registration Number Already Allocated');
</script>
<?php
}else{
mysql_query("insert into student (FirstName,SecondName,OtherName,YearOfBirth,PlaceOfBirth,Mobile,PostalCode,YearAdmitted,YearOut,KCPEMarks,RegNo,PAddress) 
values('$firstname','$Secondname','$othername','$YearOfBirth','$PlaceOfBirth','$Contacts','$postalCode','$YearIn','$YearOut','$KCPEMEAN','$RegNo','$PostAddress')")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Added Staff User $firstname')")or die(mysql_error());
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Added Student $RegNo')")or die(mysql_error());
?>
<script>
window.location = "../admin/dashboard.php";
$.jGrowl("Student Successfully added", { header: 'Staff add' });
</script>
<?php
}
}
?>