<?php
ob_start();
session_start();
$ue=$_GET['user'];
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  if($_SESSION['use']=="admin"){?>
<?php include_once 'connection.php' ?>

<?php
        $q11="DELETE FROM booking_tour
        WHERE username = '$ue';";

        if(mysqli_query($con,$q11))
        {    
            header("location:tables-data.php");
        }
?>
<?php
  }
}
else{
  header("location:pages-error-404.php");
}
?>