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
              <h5 class="card-title">Normal Details Of Tour</h5>

              <!-- General Form Elements -->
              <form method="post">
              <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Which Tour Edit</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tour_e" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tour Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tour_n" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Departure Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="d_date" min="<?php echo $check_date;?>" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Departure Time</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control" name="d_time" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Departure Place</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="d_place" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Return Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="r_date" min="<?php echo $check_date;?>" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Return Time</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control" name="r_time" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Return Place</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="r_place" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Pricing</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pricing" required>
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Pricing Status</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="s_pricing" id="s_pricing" value="Approx" checked>
                      <label class="form-check-label" for="s_pricing">
                      Approx
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="s_pricing" id="s_pricing" value="Finial">
                      <label class="form-check-label" for="s_pricing">
                      Finel
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Days</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="days" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select Tage</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="tage">
                      <option value="New Tours">New Tours</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="btn_6">Submit Form</button>
                  </div>
                </div>
<?php
if(isset($_POST['btn_6'])){
  
    $tee=@$_POST['tour_e'];
    $tne=@$_POST['tour_n'];
    $dde=@$_POST['d_date'];
    $dte=@$_POST['d_time'];
    $dpe=@$_POST['d_place'];
    $rde=@$_POST['r_date'];
    $rte=@$_POST['r_time'];
    $rpe=@$_POST['r_place'];
    $pe=@$_POST['pricing'];
    $spe=@$_POST['s_pricing'];
    $de=@$_POST['days'];
    $te=@$_POST['tage'];
    
	if($tee!=""){
        $q1="UPDATE normal_data_tour
                SET tour_name = '$tne', departure_date = '$dde', departure_time = '$dte', departure_place = '$dpe', return_date = '$rde', return_time = '$rte', return_place = '$rpe', pricing = '$pe', pricing_status = '$spe', days = '$de', select_tage = '$te'
                WHERE tour_name='$tee'";
                    if(mysqli_query($con,$q1))
                    {    
                        header("location:tables-data.php");
                    }
                    else
                    {
                    
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