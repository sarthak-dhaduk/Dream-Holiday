<?php
ob_start();
session_start();

  require 'phpmailer/PHPMailerAutoload.php';

if(isset($_SESSION['ue']) && isset($_SESSION['pe']))
{
	header("location:index.php");
}
?>
<?php include_once 'connection.php' ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration - Dream Holiday</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon
		================================================== -->
		<link rel="icon" type="image/png" href="images/favicon.png">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/login/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-3.jpg');">
			<div class="inner">
				<form name="form1" method="post">
					<h3>Recover Form</h3>
					<!-- <div class="form-group"> -->
						<div class="form-wrapper">
							<label for="">Email:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="email" class="form-control" name="email" id="t2" required>
							</div>
						</div>
					<!-- </div> -->
                    <div class="form-wrapper">
					<div class="form-end">
						<div class="button-holder">
							<button type="submit" name="btn_recover">Sand Mail</button>
						</div>
					</div>
                    </div>
				</form>
			</div>
		</div>
		<?php
				if(isset($_POST['btn_recover'])){
					$email= mysqli_real_escape_string($con, $_POST['email']);
					
					$q1="SELECT * FROM register WHERE email='$email'";
                    
                    $q_result=mysqli_query($con,$q1);
                    $result=mysqli_num_rows($q_result);

                    

						if($result==1)
    					{     $userdata= mysqli_fetch_array($q_result);

                             $username=$userdata['username'];
                             $token=$userdata['token'];

                            $link="http://localhost/main/new_password.php?token=$token";
                            $mail = new PHPMailer(true);

                            $mail->isSMTP();
                            $mail->Host = 'smtp.gmail.com';
                            $mail->SMTPAuth = true;
                            // Gmail ID which you want to use as SMTP server
                            $mail->Username = 'sdhaduk666@rku.ac.in';
                            // Gmail Password
                            $mail->Password = 'Rku@123456';
                            $mail->Port = 587;

                            // Email ID from which you want to send the email
                            $mail->setFrom('sdhaduk666@rku.ac.in');
                            // Recipient Email ID where you want to receive emails
                            $mail->addAddress($email);

                            $mail->isHTML(true);
                            $mail->Subject = 'Password Recover';
                            $mail->Body = "<h4>Hello, $username </h4><br> Click Here For Recover Your Password <br>URL : $link";

                            if($mail->send()){
                                header("location:login.php");
                            }
                            else{
                                echo "error";
                            }
			            }
                    }
			?>
	</body>
</html>
