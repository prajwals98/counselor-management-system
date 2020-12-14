<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['student']) ||(trim ($_SESSION['student']) == '')) {
	header("location:".host()."../index.php");
    exit();
}
$session_id=$_SESSION['student'];

$staff_query = mysql_query("select * from login where login_id = '$session_id'")or die(mysql_error());
$staff_row = mysql_fetch_array($staff_query);
$fullname = $staff_row['firstname']." ".$staff_row['lastname'];
$staff_fullname =$staff_row['usn'];
$email =$staff_row['email'];
?>