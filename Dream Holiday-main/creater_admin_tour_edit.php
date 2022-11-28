<?php
ob_start();
session_start();
$check_date=date("Y-m-d");
if(isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use']) && ($_SESSION['use']=="creater" || $_SESSION['use']=="admin"))
{
  $user=$_SESSION['u'];
?>
<?php include_once 'connection.php' ?>
<?php include_once 'admin_creater_header.php' ?>
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
    <!-- <div class="col-lg-6"> -->

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Details Of Your Tour</h5>

          <!-- General Form Elements -->
          <form method="post">
          
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Tour Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tour_n" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputDate" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputTime" class="col-sm-2 col-form-label">Contact Number</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="c_number" min="1000000000" max="9999999999" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Departure Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="d_date" min="<?php echo $check_date;?>" required>
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
              <label for="inputText" class="col-sm-2 col-form-label">Return Place</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="r_place" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Total Members</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="t_members" min="1" required>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Submit Button</label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="creater_edit_btn">Submit Form</button>
              </div>
            </div>
<?php
if(isset($_POST['creater_edit_btn'])){

$tour_n=@$_POST['tour_n'];
$email=@$_POST['email'];
$c_number=@$_POST['c_number'];
$d_date=@$_POST['d_date'];
$d_place=@$_POST['d_place'];
$r_date=@$_POST['r_date'];
$r_place=@$_POST['r_place'];
$t_members=@$_POST['t_members'];

if($tour_n!=""){
            $q1="UPDATE tour_creater SET tour_name = '$tour_n', email = '$email', contact_number = '$c_number', departure = '$d_date', departure_which_place = '$d_place', date_return = '$r_date', return_which_place = '$r_place', total_members = '$t_members' WHERE organizer_name='$user'";

            $q2="UPDATE hotel_details_create_tour SET tour_name = '$tour_n' WHERE organizer='$user'";

            $result1=mysqli_query($con,$q1);

            $result2=mysqli_query($con,$q2);

                if($result1 && $result2)
                {    
                    header("location:admin_creater.php");
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
elseif(isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user']) && ($_SESSION['user']=="creater" || $_SESSION['user']=="admin"))
{
  $user=$_SESSION['ue'];
?>    
<?php include_once 'connection.php' ?>
<?php include_once 'admin_creater_header.php' ?>
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
    <!-- <div class="col-lg-6"> -->

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Details Of Your Tour</h5>

          <!-- General Form Elements -->
          <form method="post">
          
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Tour Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tour_n" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputDate" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputTime" class="col-sm-2 col-form-label">Contact Number</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="c_number" min="1000000000" max="9999999999" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Departure Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="d_date" min="<?php echo $check_date;?>" required>
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
              <label for="inputText" class="col-sm-2 col-form-label">Return Place</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="r_place" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Total Members</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="t_members" min="1" required>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Submit Button</label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="creater_edit_btn">Submit Form</button>
              </div>
            </div>
<?php
if(isset($_POST['creater_edit_btn'])){

$tour_n=@$_POST['tour_n'];
$email=@$_POST['email'];
$c_number=@$_POST['c_number'];
$d_date=@$_POST['d_date'];
$d_place=@$_POST['d_place'];
$r_date=@$_POST['r_date'];
$r_place=@$_POST['r_place'];
$t_members=@$_POST['t_members'];

if($tour_n!=""){
            $q1="UPDATE tour_creater SET tour_name = '$tour_n', email = '$email', contact_number = '$c_number', departure = '$d_date', departure_which_place = '$d_place', date_return = '$r_date', return_which_place = '$r_place', total_members = '$t_members' WHERE organizer_name='$user'";

            $q2="UPDATE hotel_details_create_tour SET tour_name = '$tour_n' WHERE organizer='$user'";

            $result1=mysqli_query($con,$q1);

            $result2=mysqli_query($con,$q2);

                if($result1 && $result2)
                {    
                    header("location:admin_creater.php");
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
else{header("location:pages-error-404.php");
}
?>