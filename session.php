<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not

$staff_query = mysql_query("select * from login where usn = '$session_id'")or die(mysql_error());
$staff_row = mysql_fetch_array($staff_query);
$staff_fullname =$staff_row['firstname']." ".$staff_row['lastname'];
?>