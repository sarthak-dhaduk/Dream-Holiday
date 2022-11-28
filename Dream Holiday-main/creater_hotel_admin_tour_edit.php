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
              <label for="inputText" class="col-sm-2 col-form-label">Record's ID Which You Have To Edit</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="id" min="1" required>
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

$id=@$_POST['id'];
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
              <label for="inputText" class="col-sm-2 col-form-label">Record's ID Which You Have To Edit</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="id" min="1" required>
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

$id=@$_POST['id'];
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
else{
  header("location:pages-error-404.php");}
?>