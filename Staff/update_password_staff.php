 <?php
 include('../admin/lib/dbcon.php'); 
 dbcon(); 
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysql_query("update staff set password = '$new_password' where staff_id = '$session_id'")or die(mysql_error());
 ?>