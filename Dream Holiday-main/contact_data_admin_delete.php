<?php
ob_start();
session_start();
$name=$_GET['name'];
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  if($_SESSION['use']=="admin"){?>
<?php include_once 'connection.php' ?>

<?php
$q1="DELETE FROM contact WHERE name = '$name';";

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
else{
  header("location:pages-error-404.php");}
?>