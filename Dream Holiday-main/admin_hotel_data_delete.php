<?php
ob_start();
session_start();
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  if($_SESSION['use']=="admin"){?>
<?php include_once 'connection.php' ?>
<?php include_once 'admin_header.php' ?>
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index2.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.php" class="active">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.php">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <!-- <li>
            <a href="tables-general.php">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li> -->
          <li>
            <a href="tables-data.php">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

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
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Delete Hotel All Details Tour </h5>

              <!-- General Form Elements -->
              <form method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tour name</label>
                  <div class="col-sm-10">
                    <input type="text" name="tour_name" class="form-control" required>
                  </div>
                </div>
               
                <!-- <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">New User Status</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="delete_hotel_status" id="gd1" value="delete" checked>
                      <label class="form-check-label" for="gd1">
                        Delete Permanently
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="delete_hotel_status" id="gd2" value="hide">
                      <label class="form-check-label" for="gd2">
                        Hide Temporary
                      </label>
                    </div>
                  </div>
                </fieldset> -->
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" name="delete_hotel_tour" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
            </div>
          </div>
      </div>
    </section>

    <section class="section">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Delete Single Data Of Hotel Details</h5>

              <!-- General Form Elements -->
              <form method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Id</label>
                  <div class="col-sm-10">
                    <input type="text" name="id" class="form-control" required>
                  </div>
                </div>
               
                <!-- <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">New User Status</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="delete_single_hotel_status" id="gd1" value="delete" checked>
                      <label class="form-check-label" for="gd1">
                        Delete Permanently
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="delete_single_hotel_status" id="gd2" value="hide">
                      <label class="form-check-label" for="gd2">
                        Hide Temporary
                      </label>
                    </div>
                  </div>
                </fieldset> -->
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" name="delete_single_hotel_tour" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

                <?php
				if(isset($_POST['delete_hotel_tour'])){
					$tour_name_e=$_POST['tour_name'];
					// $delete_hotel_status_e=$_POST['delete_hotel_status'];
					
					if($tour_name_e!=""){
                    $q1="DELETE FROM hotel_details
                    WHERE tourname = '$tour_name_e';";

						if(mysqli_query($con,$q1))
    					{    
                            header("location:tables-data.php");
    					}
    					else
    					{

    					}
					}
				}
        elseif(isset($_POST['delete_single_hotel_tour'])){
					$id_e=$_POST['id'];
					// $delete_single_hotel_status=$_POST['delete_single_hotel_status'];
					
					if($id_e!=""){
                    $q2="DELETE FROM hotel_details
                    WHERE no = '$id_e';";

						if(mysqli_query($con,$q2))
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