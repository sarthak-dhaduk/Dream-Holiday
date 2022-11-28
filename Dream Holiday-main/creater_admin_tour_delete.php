<?php
ob_start();
session_start();
if(isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use']) && ($_SESSION['use']=="creater" || $_SESSION['use']=="admin"))
{
  $oz=$_GET['oz'];
  $user=$_SESSION['u'];
?>
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
        header("location:admin_creater.php");
      }
      else
      {

      }
  }
?>
<?php
}
elseif(isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user']) && ($_SESSION['user']=="creater" || $_SESSION['user']=="admin"))
{
  $oz=$_GET['oz'];
  $user=$_SESSION['ue'];
?>
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
        header("location:admin_creater.php");
      }
      else
      {

      }
  }
?>
<?php
}
else{
  header("location:pages-error-404.php");}
?>