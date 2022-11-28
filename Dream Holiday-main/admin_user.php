<?php
ob_start();
session_start();
if(isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use']) && ($_SESSION['use']=="user" || $_SESSION['use']=="admin"))
{
  $user=$_SESSION['u'];
?>
<?php include_once 'connection.php' ?>
<?php include_once 'admin_user_header.php' ?>
<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="admin_creater.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin_creater.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Your Created Tour</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">User Status</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_user_register="SELECT * FROM `register` WHERE username='$user'";
                  $q_user_register_r=mysqli_query($con, $q_user_register);
                  if(mysqli_num_rows($q_user_register_r)>0){
                    while($row = mysqli_fetch_assoc($q_user_register_r)){
                ?>
                  <tr>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['user'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td>
                    <div class="pt-2">
                    <a href="user_admin_tour_edit.php?user=<?php echo $row['username'];?>" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                    <a href="user_admin_tour_delete.php?user=<?php echo $row['username'];?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                    </td>
                  </tr>
                  <?php 
                    }
                  }
                  else{
                    echo "No Record Found...";
                  }
                  ?>              
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
  
  </main>
<?php include_once 'admin_footer.php' ?>

<?php
}
elseif(isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user']) && ($_SESSION['user']=="user" || $_SESSION['user']=="admin"))
{
  $user=$_SESSION['ue'];
?>  
<?php include_once 'connection.php' ?>
<?php include_once 'admin_user_header.php' ?>
<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="admin_creater.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin_creater.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Your Created Tour</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">User Status</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_user_register="SELECT * FROM `register` WHERE username='$user'";
                  $q_user_register_r=mysqli_query($con, $q_user_register);
                  if(mysqli_num_rows($q_user_register_r)>0){
                    while($row = mysqli_fetch_assoc($q_user_register_r)){
                ?>
                  <tr>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['user'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td>
                    <div class="pt-2">
                    <a href="user_admin_tour_edit.php?user=<?php echo $row['username'];?>" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                    <a href="user_admin_tour_delete.php?user=<?php echo $row['username'];?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                    </td>
                  </tr>
                  <?php 
                    }
                  }
                  else{
                    echo "No Record Found...";
                  }
                  ?>              
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
  
  </main>
<?php include_once 'admin_footer.php' ?>
<?php
}
else{
  header("location:pages-error-404.php");}
?>