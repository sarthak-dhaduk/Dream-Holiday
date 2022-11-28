<?php
ob_start();
session_start();
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  ?>  
      <li class="header-get-a-quote">
          <form method="post" >
          <button class="btn btn-primary" name="profile">profile</button>
          <?php
            if(isset($_POST['profile'])){

              if($_SESSION['use']=="admin"){
                header("location:index2.php");
              }
              elseif($_SESSION['use']=="creater"){
                header("location:admin_creater.php");
              }
              elseif($_SESSION['user']=="creater"){
                header("location:admin_creater.php");
              }
              else{
                header("location:admin_user.php");
              }
                
            }
          ?>
          <button class="btn btn-primary" name="btn" >Logout</button>
           </form>
      </li>
<?php
    if(isset($_POST['btn'])){
      unset($_SESSION['u']);
      unset($_SESSION['p']);
      unset($_SESSION['use']);
      unset($_SESSION['ue']);
      unset($_SESSION['pe']);
      unset($_SESSION['user']);
      header("location:index.php");
        ?>
          <li class="header-get-a-quote">
              <a class="btn btn-primary" href="login.php">Login</a>
          </li>
        <?php
        //session_distroy();  -> to distroy all the sessions.
        }
        ?>
  <?php
}
else
{
  ?>
    <li class="header-get-a-quote">
        <a class="btn btn-primary" href="login.php">Login</a>
    </li>
<?php
}
?>