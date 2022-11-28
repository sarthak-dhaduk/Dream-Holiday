<?php
ob_start();
session_start();
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
    $oz=$_GET['oz'];
  if($_SESSION['use']=="admin"){?>
<?php include_once 'connection.php' ?>
<?php
  if($oz!=""){
            $q2="DELETE FROM tour_creater
            WHERE organizer_name = '$oz';";

            $result=mysqli_query($con,$q2);

            $q3="DELETE FROM hotel_details_create_tour
            WHERE organizer = '$oz';";

            $result2=mysqli_query($con,$q3);

    if($result && $result2)
      {    
        header("location:tables-data.php");
      }
      else
      {

      }
  }
?>
<?php
    }
}
else{
  header("location:pages-error-404.php");
?>