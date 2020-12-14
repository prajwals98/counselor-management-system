<?php include('header_dashboard.php'); ?>




<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../composer/vendor/autoload.php';
	if (isset($_POST['submit']))
{
//$subject  = 	$_POST['subject'];
//$description=     $_POST['description'];




	
			
		
			$mail = new PHPMailer();
			$mail->SMTPDebug = 2;
			$mail->IsSMTP();
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "tls";
			$mail->Host = "smtp.gmail.com";
			$mail->port = 587;
			$mail->Username = 'prajjuprajwal98@gmail.com';
			$mail->Password = 'prajwal@1998';
			//$mail->SMTPDebug = 2;
			$path=$_POST["documents"];
			echo $path;
			$uploaddir = 'uploads/';
            $uploadfile = $uploaddir . basename($_FILES[$path]['name']);
			//$path = 'uploads/' . $_FILES["document"]["tmp_name"];
			//move_uploaded_file($_FILES["doc"]["tmp_name"], $path);
			if (move_uploaded_file($_FILES[$path]['tmp_name'], $uploadfile)) {
				echo "File is valid, and was successfully uploaded.\n";
			} else {
				echo "Possible file upload attack!\n";
			}
			$mail->From = "prajjuprajwal98@gmail.com";
			$mail->FromName = "Prajwal S";
			$mail->Subject = $_POST['subject'];
            $mail->Body = $_POST['Description'];
            $mail->AddAttachment($uploadfile);
			$mail->MsgHTML = (" ");
			$mail->AddAddress("prajwals.devang.98@gmail.com");
			$mail->IsHTML(true);
			
			if($mail->Send())
		{
			echo "<script>
alert('file has been mailed.');
window.location.href='../index.php';
</script>";  
		}
		else
		{
			 
			echo "<script>
			alert('file couldnot be mailed, make sure you have active internet connection');
			window.location.href='../index.php';
			</script>"; 
        }
    }
?>

