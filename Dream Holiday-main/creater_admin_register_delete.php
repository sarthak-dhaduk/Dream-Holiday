<?php
ob_start();
session_start();
$username=$_GET['user'];
if(isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use']) && ($_SESSION['use']=="creater" || $_SESSION['use']=="admin"))
{
  $user=$_SESSION['u'];
?>
<?php include_once 'connection.php' ?>


<?php
$q1="DELETE FROM register WHERE username = '$username';";

	if(mysqli_query($con,$q1))
    	{    
            unset($_SESSION['u']);
            unset($_SESSION['p']);
            unset($_SESSION['use']);
            unset($_SESSION['ue']);
            unset($_SESSION['pe']);
            unset($_SESSION['user']);
            header("location:index.php");
    	}
    else
    	{
        				
    	}
?>
<?php
}
elseif(isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user']) && ($_SESSION['user']=="creater" || $_SESSION['user']=="admin"))
{
  $user=$_SESSION['ue'];
?>
<?php include_once 'connection.php' ?>

<?php
$q1="DELETE FROM register WHERE username = '$username';";

	if(mysqli_query($con,$q1))
    	{    
            unset($_SESSION['u']);
            unset($_SESSION['p']);
            unset($_SESSION['use']);
            unset($_SESSION['ue']);
            unset($_SESSION['pe']);
            unset($_SESSION['user']);
            header("location:index.php");
    	}
    else
    	{
        				
    	}
?>

<?php
}
else{
  header("location:pages-error-404.php");}
?>