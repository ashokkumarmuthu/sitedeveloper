<?php 
echo "kckguc";
$result="";
if (isset($_POST['submit'])) {

	require 'phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;

	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
	$mail->Username='ashokmuthu39@gmail.com';
	$mail->Password='sleeper@2001';

	// $name = $_POST['name'];
	// $rollno = $_POST['rollno'];
	// $year = $_POST['Year'];
	// $mailid = $_POST['mailid'];
	// $department = $_POST['department'];
	// $message = $_POST['message'];
	// $header = "From: ".$mailid;
	// $txt = "you have received an email from ".$name.".\n\n".$message;

	$mail->setFrom($_POST['mailid'],$_POST['name']);
	$mail->addAddress('ashokmuthu393939@gmail.com');
	$mail->addReplyTo($_POST['mailid'],$_POST['name']);
	$mail->isHTML(true);
	$mail->Subject='From Submission'.$_POST['message'];
	$mail->Body=$_POST['message'];

	echo "fydtyrd";
	if(!$mail->send()){
		$result = "something wrong";
	}
	else{
		$result="thanks for contacting"; 
	}



	


	echo $result;
	// mail($mailTo, $rollno, $txt, $header);

	// header('Location: contact.html?mailSent');
	// echo "Inserted Successfully";

}
