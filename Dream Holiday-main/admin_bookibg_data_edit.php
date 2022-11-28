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
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <!-- <div class="col-lg-6"> -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Booking Details Of Tour</h5>

              <!-- General Form Elements -->
              <form method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Old Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="old_uname" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">NEW Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="uname" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="booking_email" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Contact Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="booking_cnumber" min="1000000000" max="9999999999" required>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tour Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="booking_tour_name" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Members</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="booking_members" min="1" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="btn_booking_details_edit">Submit Form</button>
                  </div>
                </div>
<?php
if(isset($_POST['btn_booking_details_edit'])){

    $old_booking_uname=@$_POST['old_uname'];
    $new_booking_uname=@$_POST['uname'];
    $booking_email=@$_POST['booking_email'];
    $booking_cnumber=@$_POST['booking_cnumber'];
    $booking_tour_name=@$_POST['booking_tour_name'];
    $booking_members=@$_POST['booking_members'];
	
  if($old_booking_uname=="" || $new_booking_uname=="" || strlen($booking_cnumber)<10 || $booking_tour_name==""){
  
  }
  else{
    $q10="UPDATE booking_tour SET username = '$new_booking_uname', email = '$booking_email', contact_number = '$booking_cnumber', tour_name	 = '$booking_tour_name', members = '$booking_members' WHERE username ='$old_booking_uname'";
    
    $result=mysqli_query($con,$q10);

      if($result)
        {
            header("location:tables-data.php");
        }
    
  }
}
?>
              </form><!-- End General Form Elements -->
            </div>
          </div>
        <!-- </div> -->
      </div>
    </section>
  </main>
<?php include_once 'admin_footer.php' ?>
<?php
}
}
else{
  header("location:pages-error-404.php");
}
?>