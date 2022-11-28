<?php
ob_start();
session_start();
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  if($_SESSION['use']=="admin"){?>
<?php include_once 'connection.php' ?>
<?php include_once 'admin_header.php' ?>
<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index2.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin_main_tour_data.php">
              <i class="bi bi-circle"></i><span>Add New Tour Form</span>
            </a>
          </li>
          <li>
            <a href="admin_tour_create.php">
              <i class="bi bi-circle"></i><span>Externally Add Normal Data Of Tour Form</span>
            </a>
          </li>
          <li>
            <a href="admin_add_hotel_tours.php">
              <i class="bi bi-circle"></i><span>Add Hotel Details Of Tour Form</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin-register-table.php">
              <i class="bi bi-circle"></i><span>Register Table</span>
            </a>
          </li>

          <li>
            <a href="admin-tour-table.php">
              <i class="bi bi-circle"></i><span>Tour Data Table</span>
            </a>
          </li>
        
          <li>
            <a href="admin-question-table.php">
              <i class="bi bi-circle"></i><span>Tour Reviews & Questions Table</span>
            </a>
          </li>

          <li>
            <a href="tables-data.php">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Creater Tour Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin-creater-tour-table.php">
              <i class="bi bi-circle"></i><span>Tour Created By Creater Table</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

<div class="pagetitle">
  <h1>Data Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Registration Table...</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">User</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Category</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $q2="SELECT * FROM register";
                  $qr2=mysqli_query($con, $q2);
                  if(mysqli_num_rows($qr2)>0){
                    while($row = mysqli_fetch_assoc($qr2)){
                      
                      ?>
                  <tr>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['user'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td>
                      <div class="pt-2">
                        <a href="edit_registered_user.php?username=<?php echo $row['username'];?>&category=<?php echo $row['user'];?>" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                        <a href="delete_register.php?username=<?php echo $row['username'];?>&category=<?php echo $row['user'];?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
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
              <!-- End Table with stripped rows -->

            </div>
          </div>


        </div>
    </div>
</section>

  </main>
<?php include_once 'admin_footer.php' ?>
<?php
    }
}
else{
  header("location:pages-error-404.php");}
?>