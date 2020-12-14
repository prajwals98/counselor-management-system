<?php 
include('admin/lib/dbcon.php');
dbcon();

function NewUser() 
{ 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname']; 
$username = $_POST['username']; 
$password = $_POST['password']; 
$cpassword = $_POST['cpassword'];
if($password==$cpassword)
{
$query = "INSERT INTO login (firstname,lastname,username,password) VALUES ('$firstname','$lastname','$username','$password')"; 
$data = mysql_query ($query)or die(mysql_error()); 
if($data) 
{ 
echo "<script>
alert('Registered Successfull...');
window.location.href='index.php';
</script>"; 
} 
} 
else
{
echo "<script>
alert('Password Mismatch');
window.location.href='register.php';
</script>";
}
}

function SignUp() 
{ 
if(!empty($_POST['username'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
{ 
$query = mysql_query("SELECT * FROM login WHERE username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error()); 
if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
{ 
newuser(); 
} 
else 
{ 
echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
} 
} 
} 

if(isset($_POST['submit'])) 
{ 
SignUp(); 
} 
?>