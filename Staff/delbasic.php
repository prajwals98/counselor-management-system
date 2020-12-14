<?php
include('header.php');
include('session.php');
$id=$_GET['del'];
$result = mysql_query("DELETE FROM year1 where usn='$id'");
header("location: students.php");
?>