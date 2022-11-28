<?php
ob_start();
session_start();
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
				<form name="form1" action="register.php" method="post">
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Username:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control" name="uname" id="t3" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Email:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="email" class="form-control" name="email" id="t2" required>
							</div>
						</div>
					</div>
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
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">User:</label>
							<div class="form-holder select">
								<select name="user" id="" class="form-control">
									<option value="user">User</option>
									<option value="creater">Creater</option>
								</select>
								<i class="zmdi zmdi-account-o"></i>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Gender:</label>
							<div class="form-holder select">
								<select name="gender" id="" class="form-control">
									<option value="male">Male</option>
									<option value="femal">Female</option>
								</select>
								<i class="zmdi zmdi-face"></i>
							</div>
						</div>
					</div>
					<div class="form-end">
					<label>
							Already Have account? <a href="login.php">Login Now</a>
					</label>
						<div class="button-holder">
							<button type="submit" name="btn" >Register Now</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		<?php
				if(isset($_POST['btn'])){
					$ue=$_POST['uname'];
					$ee=$_POST['email'];
					$pe=$_POST['pwd'];
					$cpe=$_POST['cpwd'];
					$user=$_POST['user'];
					$ge=$_POST['gender'];
					$token=uniqid();
					
					if($pe==$cpe){
						$q1="INSERT INTO register (username, email, password, user, gender, token)  
					VALUES ('$ue', '$ee', '$pe', '$user', '$ge', '$token')";

					
						if(mysqli_query($con,$q1))
    					{    
					
							$_SESSION['ue']=$ue;
							$_SESSION['pe']=$pe;
							$_SESSION['user']=$user;
							if(isset($_SESSION['ue'])&&isset($_SESSION['pe'])&&isset($_SESSION['user'])){
							header("location:index.php");}
    					}
					}
					else
    				{
						echo " Password Is Not Match";	
					}
				}
			?>
	</body>
</html>