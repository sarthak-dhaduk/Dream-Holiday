<?php
ob_start();
session_start();
$check_date=date("Y-m-d");
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
              <h5 class="card-title">Hotel Details Of Tour</h5>

              <!-- General Form Elements -->
              <form method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">OLD ID</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="old_id" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">NEW ID</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="id" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tour Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tour_name" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">City Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="city_name" required>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Hotel Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hotel_name" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Night</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="night" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Reach Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="reach_date" min="<?php echo $check_date;?>" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="btn_hotel_details_edit">Submit Form</button>
                  </div>
                </div>
<?php
if(isset($_POST['btn_hotel_details_edit'])){

    $old_id=@$_POST['old_id'];
    $id=@$_POST['id'];
    $tour_n_e=@$_POST['tour_name'];
    $city_n_e=@$_POST['city_name'];
    $hotel_n_e=@$_POST['hotel_name'];
    $night_e=@$_POST['night'];
    $reach_d_e=@$_POST['reach_date'];
	
  if($old_id!="" || $id!="" || $tour_n_e!="" || $city_n_e!="" || $hotel_n_e!=""){
  $q6="UPDATE hotel_details
  SET no = '$id', tourname = '$tour_n_e', city = '$city_n_e', hotel	 = '$hotel_n_e', night = '$night_e', reach_date = '$reach_d_e'
  WHERE no ='$old_id'";
  
  $result=mysqli_query($con,$q6);

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
  header("location:pages-error-404.php");}
?>