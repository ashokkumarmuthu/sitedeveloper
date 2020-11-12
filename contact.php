<?php 
error_reporting(0);
$result="";
if (isset($_POST['submit'])) {

	require 'phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;

	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
// 	$mail->Username='';
// 	$mail->Password='';

	$name = $_POST['name'];
	$rollno = $_POST['rollno'];
	$year = $_POST['Year'];
	$mailid = $_POST['mailid'];
	$department = $_POST['department'];
	$message = $_POST['message'];
// 	$message = $department." ".$rollno
// 	$header = "From: ".$mailid;
	$txt = "you have received an email from ".$name.".<br>"."Department : ".$department.".<br>"."Roll no : ".$rollno.".<br>"."Year : ".$year.".<br>"."Message : ".$message;

	$mail->setFrom($_POST['mailid'],$_POST['name']);
	$mail->addAddress('ashokmuthu393939@gmail.com');
	$mail->addReplyTo($_POST['mailid'],$_POST['name']);
	$mail->isHTML(true);
	$mail->Subject='From Submission';
// 	$mail->Body=$_POST['name'];
// 	$mail->Body=$_POST['rollno'];
// 	$mail->Body=$_POST['Year'];
	$mail->Body=$txt;
// echo $msg;
// 	$mail->Body=$message;

// 	echo "fydtyrd";
	if(!$mail->send()){
		$result = "something wrong";
	}
	else{
		$result="thanks for contacting"; 
	    header('Location: load.php');

	}




}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="contact/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/css/util.css">
	<link rel="stylesheet" type="text/css" href="contact/css/main.css">
<!--===============================================================================================-->

</head>
<body>

<form action="contact.php" method="post">

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="contact1.php" method="post">
				<span class="contact100-form-title">
					CONTACT FORM
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Roll no required">
					<span class="label-input100">Roll No</span>
					<input class="input100" type="text" name="rollno" placeholder="Enter your Roll No">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Year</span>
					<div>
						<select class="selection-2" name="Year">
							<option>Select Year</option>
							<option>I</option>
							<option>II</option>
							<option>III</option>
							<option>IV</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Mail id required">
					<span class="label-input100">Mail Id</span>
					<input class="input100" type="text" name="mailid" placeholder="Enter your Mail id">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Department is required">
					<span class="label-input100">Department</span>
					<input class="input100" type="text" name="department" placeholder="Enter your Department">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Why do you want to join in this Lab</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="submit">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</form>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="contact/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="contact/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="contact/vendor/bootstrap/js/popper.js"></script>
	<script src="contact/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="contact/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="contact/vendor/daterangepicker/moment.min.js"></script>
	<script src="contact/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="contact/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="contact/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>