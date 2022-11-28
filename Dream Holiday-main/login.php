<?php
ob_start();
session_start();
if(isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use']))
{
	header("location:index.php");
}
?>
<?php include_once 'connection.php' ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login - Dream Holiday</title>
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
				<form method="post" action="login.php">
					<h3>Login & Join With Us</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Username:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control" name="uname" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" class="form-control" name="pwd" required>
							</div>
						</div>
					</div>
					<div class="form-end">
					<div class="form-wrapper">
							<label for="">User:</label>
							<div class="form-holder select">
								<select name="user" id="usear" class="form-control">
									<option value="user">User</option>
									<option value="creater">Creater</option>
									<option value="admin">Administrator</option>
								</select>
								<i class="zmdi zmdi-account-o"></i>
							</div>
						</div>
					</div>
					<div class="form-end">
						
                        <label>
								Forgot Password? <a href="recover_email.php">Click Here</a>
						</label>
						<div class="button-holder">
							<button type="submit" name="btn" onclick="registration()" >Register Now</button>
						</div>
					</div>
					<div class="form-end">
						
                        <label>
								Create new account? <a href="register.php">Registration for account</a>
						</label>
					</div>
				</form>
			</div>
		</div>
		
	</body>
</html>

<?php
if(isset($_POST['btn']))
{
    $u=mysqli_real_escape_string($con, $_POST['uname']); 
    $p=mysqli_real_escape_string($con, $_POST['pwd']);
	$use=mysqli_real_escape_string($con, $_POST['user']);

	$query = "SELECT * FROM register WHERE username='$u' AND password='$p' AND user='$use'";
    $results = mysqli_query($con, $query);

	$query_of_status="SELECT user FROM register WHERE username='$u' AND password='$p'";
    $results_of_status=mysqli_fetch_assoc(mysqli_query($con, $query_of_status));
	$o_status=$results_of_status['user'];
	echo $use;
    if(mysqli_num_rows($results) == 1)
    {
		
		if($use==$o_status){
			$_SESSION['u']=$u;
        	$_SESSION['p']=$p;
			$_SESSION['use']=$use;
			if($use=="admin"){
				header("location:index2.php");
			}
			else{
				header("location:index.php");
			}
		}
    }
    else{
        ?>
			<script>
				function registration(){
					alert("Error");
					}
			</script>
		<?php
    }
}
?>