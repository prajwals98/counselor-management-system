
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
                                     <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                   </p>
                                 </div>
                                  </div>
										
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="Secondname" id="focusedInput" type="text" placeholder = "Second name" required>
                                            </p>
                                    </div>
                                    </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="othername" id="focusedInput" type="text" placeholder = "other name" optional>
                                            </p>
</div>
                                        </div>
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="RegNo" id="focusedInput" type="text" placeholder = "Registration  number" required>
                                            </p>
                                    </div>
                                    </div>
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="PlaceOfBirth" id="focusedInput" type="text" placeholder = "place of birth" required>
                                            </p>
                                    </div>
                                    </div>
										
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="YearOfBirth" id="focusedInput" type="text" placeholder = "year of birth" required>
                                            </p>
                                    </div>
                                    </div>
										
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="Contacts" id="focusedInput" type="text" placeholder = "mobile number" required>
                                            </p>
                                    </div>
                                    </div>
										
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="PostAddress" id="focusedInput" type="text" placeholder = "Postal address" required>
                                            </p>
                                    </div>
                                    </div>
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="postalCode" id="focusedInput" type="text" placeholder = "Post Code" required>
                                            </p>
                                    </div>
                                    </div>
										
										<div class="control-group">
                                          <div class="controls">
                           <input class="input focused" name="YearIn" id="focusedInput" type="text" placeholder = "Year  Admitted" required>
                                          </div>
                                        </div>
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="YearOut" id="focusedInput" type="text" placeholder = "Year Out" required>
                                            </p>
                                    </div>
                                    </div>
								  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="YearOut" id="focusedInput" type="text" placeholder = "Year Out" required>
                                            </p>
                                    </div>
                                    </div>
										
                                  <div class="control-group">
                                          <div class="controls">
                                            <p>
                                              <input class="input focused" name="YearOut" id="focusedInput" type="text" placeholder = "Year Out" required>
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
$lastname = $_POST['lastname'];
$othername = $_POST['othername'];
$password = $_POST['password'];


$query = mysql_query("select * from client where username = '$username' and password = '$password' and firstname = '$firstname' and password = '$password' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysql_query("insert into client (username,password,firstname,lastname,thumbnails) values('$username','$password','$firstname','$lastname','images/NO-IMAGE-AVAILABLE.jpg')")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Add Client User $firstname')")or die(mysql_error());
?>
<script>
window.location = "student_user.php";
$.jGrowl("Client User Successfully added", { header: 'Client User add' });
</script>
<?php
}
}
?>