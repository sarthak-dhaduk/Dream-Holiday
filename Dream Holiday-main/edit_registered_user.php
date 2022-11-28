<?php
ob_start();
session_start();
$check_username=$_GET['username'];
$check_category=$_GET['category'];
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{

  if($_SESSION['use']=="admin"){
    if($check_category=="admin"){?>
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
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Old Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="ouname" value="<?php echo $check_username; ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">New Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="uname" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">New Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">New Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="pwd" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Conform New Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="cpwd" class="form-control" required>
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="g1" value="male" checked>
                      <label class="form-check-label" for="g1">
                        Male
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="g2" value="female">
                      <label class="form-check-label" for="g2">
                      Female
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" name="btn2" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

                <?php
				if(isset($_POST['btn2'])){
          $oue=$check_username;
					$ue=$_POST['uname'];
					$ee=$_POST['email'];
					$pe=$_POST['pwd'];
					$cpe=$_POST['cpwd'];
					$ge=$_POST['gender'];
          $token=uniqid();
                    
					if($oue!="" || $ue!="" || $ee!="" || $pe!="" || $cpe!=""){
          if($pe==$cpe){
            $q1="UPDATE register
                    SET username = '$ue', email = '$ee', password = '$pe', gender = '$ge', token= '$token'
                    WHERE username='$oue'";
						if(mysqli_query($con,$q1))
    					{    
              header("location:tables-data.php");
    					}
    					else
    					{
        				
    					}
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
else{
  ?>
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
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form method="post">
              <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Old Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="ouname" value="<?php echo $check_username; ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">New Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="uname" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">New Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">New Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="pwd" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Conform New Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="cpwd" class="form-control" required>
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">New User Status</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="user" id="g1" value="user" checked>
                      <label class="form-check-label" for="g1">
                      User
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="user" id="g2" value="creater">
                      <label class="form-check-label" for="g2">
                      Creater
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="user" id="g3" value="admin" disabled>
                      <label class="form-check-label" for="g3">
                      Administrator
                      </label>
                    </div>
                  </div>
                </fieldset>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="g1" value="male" checked>
                      <label class="form-check-label" for="g1">
                        Male
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="g2" value="female">
                      <label class="form-check-label" for="g2">
                      Female
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" name="btn2" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

                <?php
				if(isset($_POST['btn2'])){
          $oue=$check_username;
					$ue=$_POST['uname'];
					$ee=$_POST['email'];
					$pe=$_POST['pwd'];
					$cpe=$_POST['cpwd'];
					$use=$_POST['user'];
					$ge=$_POST['gender'];
          $token=uniqid();
                    
					if($oue!="" || $ue!="" || $ee!="" || $pe!="" || $cpe!=""){
          if($pe==$cpe){
            $q1="UPDATE register
                    SET username = '$ue', email = '$ee', password = '$pe', user = '$use', gender = '$ge', token='$token'
                    WHERE username='$oue'";
						if(mysqli_query($con,$q1))
    					{    
              header("location:tables-data.php");
    					}
    					else
    					{
        				
    					}
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
}
else{
  header("location:pages-error-404.php");}
?>