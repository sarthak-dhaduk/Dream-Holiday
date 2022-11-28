<?php
ob_start();
session_start();
$check_date=date("Y-m-d");
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
    $id=$_GET['id'];
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
          <h5 class="card-title">Edit Hotel Details Of Creaters Tour</h5>

          <!-- General Form Elements -->
          <form method="post">

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Record's ID Which You Have To Edit</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="id" value="<?php echo $id;?>" disabled>
              </div>
            </div>
          
            <div class="row mb-3">
              <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="date" min="<?php echo $check_date;?>" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputTime" class="col-sm-2 col-form-label">Place Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="p_name" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Members Of One Room</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="m_one_room" min="1" max="4" required>
              </div>
            </div>
            <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Hotel Details</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="h_details" style="height: 100px"></textarea>
                  </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Submit Button</label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="creater_hotel_edit_btn">Submit Form</button>
              </div>
            </div>
<?php
if(isset($_POST['creater_hotel_edit_btn'])){

$date=@$_POST['date'];
$p_name=@$_POST['p_name'];
$m_one_room=@$_POST['m_one_room'];
$h_details=@$_POST['h_details'];

if($id!=""){
            $q1="UPDATE hotel_details_create_tour
            SET date_sdu = '$date', place_name = '$p_name', one_room = '$m_one_room', hotel_link = '$h_details'
            WHERE id='$id'";

            $result1=mysqli_query($con,$q1);


                if($result1)
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