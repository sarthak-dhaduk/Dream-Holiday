<?php
ob_start();
session_start();
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
    $id=$_GET['id'];
  if($_SESSION['use']=="admin"){?>
<?php include_once 'connection.php' ?>
<?php
  if($id!=""){

            $q3="DELETE FROM hotel_details_create_tour
            WHERE id = '$id';";

            $result2=mysqli_query($con,$q3);

    if($result2)
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
}
?>