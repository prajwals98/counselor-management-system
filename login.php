<?php
        include('admin/lib/dbcon.php');
		dbcon(); 
		session_start();	
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$result = mysql_query($query)or die(mysql_error());
		$row = mysql_fetch_array($result);
		$num_row = mysql_num_rows($result);

		$query_staff = mysql_query("SELECT * FROM staff WHERE username='$username' AND password='$password'")or die(mysql_error());
		$num_row_staff = mysql_num_rows($query_staff);
		$row_staff = mysql_fetch_array($query_staff);
		
		$query_login = mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'")or die(mysql_error());
		$num_row_login = mysql_num_rows($query_login);
		$row_login = mysql_fetch_array($query_login);
		
		if( $num_row > 0 ) 
		{ 
		$_SESSION['id']=$row['admin_id'];
		echo 'admin';
		}
		else if ($num_row_staff > 0)
		{
		$_SESSION['staff']=$row_staff['staff_id'];
		echo 'counselor';
		}
		else if ($num_row_login > 0)
		{
		$_SESSION['student']=$row_login['login_id'];
		$_SESSION['usn1']=$row_login['usn'];
		$_SESSION['firstname1']=$row_login['firstname'];
		$_SESSION['lastname1']=$row_login['lastname'];
		echo 'student';
		}
		else
		{ 
			echo 'false';
		}	
				
		?>