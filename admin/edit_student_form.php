<div class="row-fluid">				  
   <a href="add_student.php" class="btn btn-info" id="add" data-placement="right" title="Click to Add New" ><i class="icon-plus-sign icon-large"></i> Add New  Staff</a>
   <script type="text/javascript">
	$(document).ready(function(){
	$('#add').tooltip('show');
	$('#add').tooltip('hide');
	});
	</script> 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit Student Info.</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from student where RegNo = '$get_RegNo'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								
								 <!-- --------------------form ---------------------->						
								<form method="post">
					<div class="control-group">
                                <p> <div class="controls">
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
                                    </div> </p>
										
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
if (isset($_POST['update'])){
$firstname = $_POST['firstname'];
$Secondname = $_POST['Secondname'];
$othername = $_POST['othername'];
$Contacts = $_POST['Contacts'];
$postalCode= $_POST['postalCode'];
$PostAddress= $_POST['PostAddress'];

mysql_query("update student set FirstName = '$firstname',SecondName ='$Secondname',OtherName='$othername',Mobile='$Contacts',PostalCode='$postalCode',PAddress='$PostAddress' where RegNo='$get_RegNo',") 
or die(mysql_error());

mysql_query ("insert into activity_log (date,username,action)
 values(NOW(),'$admin_username','Edited Student $firstname')")or die(mysql_error());
?>
<script>
  window.location = "add_student.php";
 $.jGrowl(" Student Successfully Update", { header: 'Student Update' });  
</script>
<?php
}
?>?>