<?php
ob_start();
session_start();
$token=$_GET['token'];
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
					<h3>New Password</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" class="form-control" placeholder="********" name="pwd" id="t4" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Repeat Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" class="form-control" placeholder="********" name="cpwd" id="t5" required>
							</div>
						</div>
					</div>
                    
				
					<div class="form-end">
						<div class="button-holder">
							<button type="submit" name="new_password_btn">UPDATE NOW</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php
				if(isset($_POST['new_password_btn'])){
					$pe=$_POST['pwd'];
					$cpe=$_POST['cpwd'];
					
					if($pe==$cpe){
                        $q1="UPDATE register
                                SET password = '$pe'
                                WHERE token='$token'";
					
						if(mysqli_query($con,$q1))
    					{    
							header("location:login.php");
    					}
                    }
    			    else
    				{
                          echo "Enter Match Passeord";  
    				}
				}
			?>
	</body>
</html>