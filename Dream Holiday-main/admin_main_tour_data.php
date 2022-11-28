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
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tour Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="main_tour_name"  required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Totel Members</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="totel_member_main" min="1" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="main_tour_file" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Departure Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="d_date" required>
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
                    <input type="date" class="form-control" name="r_date" required>
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
                        Finial
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
                  <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="main_category" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="btn_main_tours">Submit Form</button>
                  </div>
                </div>
<?php
if(isset($_POST['btn_main_tours'])){


    $main_tour_name=@$_POST['main_tour_name'];
    $main_category=@$_POST['main_category'];
    $totel_member_main=@$_POST['totel_member_main'];
    $main_tour_file=uniqid().$_FILES['main_tour_file']['name'];


   

    if($main_tour_name!="" || $main_category!=""){

            move_uploaded_file($_FILES['main_tour_file']['tmp_name'],"images/projects/".$main_tour_file);
            
            $q12="INSERT INTO main_tour_data (tour_name, category, totel_members, tour_photo)VALUES('$main_tour_name', '$main_category', '$totel_member_main', '$main_tour_file')";
                    
            $result1=mysqli_query($con,$q12);
    }



    $tne=@$_POST['main_tour_name'];
    $dde=@$_POST['d_date'];
    $dte=@$_POST['d_time'];
    $dpe=@$_POST['d_place'];
    $rde=@$_POST['r_date'];
    $rte=@$_POST['r_time'];
    $rpe=@$_POST['r_place'];
    $pe=@$_POST['pricing'];
    $spe=@$_POST['s_pricing'];
    $de=@$_POST['days'];
    $te=@$_POST['main_category'];

    if($tne!=""){
      $q6="INSERT INTO normal_data_tour (tour_name, departure_date, departure_time, departure_place, return_date, return_time, return_place, pricing, pricing_status, days, select_tage)VALUES('$tne', '$dde', '$dte', '$dpe', '$rde', '$rte', '$rpe', '$pe', '$spe', '$de', '$te')";
      
      $result2=mysqli_query($con,$q6);
          if($result1 && $result2)
            {
                header("location:tables-data.php");
            }
        }
}
?>

              </form><!-- End General Form Elements -->

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