<?php
ob_start();
session_start();
$check_username=$_GET['username'];
$check_category=$_GET['category'];
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{

  if($_SESSION['use']=="admin"){
    if($check_category=="admin"){
      header("location:pages-error-404.php");
}
else{
  ?>
<?php include_once 'connection.php' ?>
<?php
					
					$q1="DELETE FROM register
          WHERE username = '$check_username';";

						if(mysqli_query($con,$q1))
    					{    
              header("location:tables-data.php");
    					}
    					else
    					{
        				
    					}
?>
<?php
    }
  }
}
else{
  header("location:pages-error-404.php");}
?>
?>