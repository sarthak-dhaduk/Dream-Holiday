<?php
ob_start();
session_start();
$check_date=date("Y-m-d");
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) && ($_SESSION['use']=="creater" || $_SESSION['use']=="admin"))
{
?>
<?php include_once 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Create Tour - Dream Holiday</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="body-inner">
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.php">
                  <img loading="lazy" src="images/logo.png" alt="Travel">
                </a>
            </div><!-- logo end -->
  
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Call Us</p>
                          <p class="info-box-subtitle"><a href="#">(+91) 7622972543</a></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Us</p>
                          <p class="info-box-subtitle"><a href="#">sdhaduk666@rku.ac.in</a></p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">(GTP) Certificate</p>
                          <p class="info-box-subtitle">17/Oct/2002</p>
                      </div>
                    </div>
                  </li>
                  <?php
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  ?>  
      <li class="header-get-a-quote">
          <form method="post" >
          <button class="btn btn-primary" name="profile">profile</button>
          <?php
            if(isset($_POST['profile'])){

              if($_SESSION['use']=="admin"){
                header("location:index2.php");
              }
              elseif($_SESSION['use']=="creater"){
                header("location:admin_creater.php");
              }
              else{
                header("location:admin_user.php");
              }
                
            }
          ?>
          <button class="btn btn-primary" name="btn" >Logout</button>
           </form>
      </li>
<?php
    if(isset($_POST['btn'])){
      unset($_SESSION['u']);
      unset($_SESSION['p']);
      unset($_SESSION['use']);
      unset($_SESSION['ue']);
      unset($_SESSION['pe']);
      unset($_SESSION['user']);
      header("location:index.php");
        ?>
          <li class="header-get-a-quote">
              <a class="btn btn-primary" href="login.php">Login</a>
          </li>
        <?php
        //session_distroy();  -> to distroy all the sessions.
        }
        ?>
  <?php
}
else
{
  ?>
    <li class="header-get-a-quote">
        <a class="btn btn-primary" href="login.php">Login</a>
    </li>
<?php
}
?>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>
<?php 
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])))
{
  if(($_SESSION['use']=="creater") || ($_SESSION['use']=="admin")){?>
  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="faq.php">Faq</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Packages <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.php">All Packages</a></li>
                            <li><a href="create_tour.php">Create Own Tour Package</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <?php
  }
  else{?>
    <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="faq.php">Faq</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Packages <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.php">All Packages</a></li>
                          </ul>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <?php
  }
}
elseif(isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user']))
{
  if(($_SESSION['user']=="creater") || ($_SESSION['user']=="admin")){?>
    <div class="site-navigation">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  
                  <div id="navbar-collapse" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
  
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="about.php">About Us</a></li>
                              <li><a href="faq.php">Faq</a></li>
                            </ul>
                        </li>
                
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Packages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="projects.php">All Packages</a></li>
                              <li><a href="create_tour.php">Create Own Tour Package</a></li>
                            </ul>
                        </li>
                
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                      </ul>
                  </div>
                </nav>
            </div>
            <!--/ Col end -->
          </div>
          <!--/ Row end -->
      </div>
      <!--/ Container end -->
  
    </div>
  <?php
  }
  else{?>
    <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="faq.php">Faq</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Packages <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.php">All Packages</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <?php
  }
}
else{?>
    <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="faq.php">Faq</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Packages <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.php">All Packages</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <?php
  }
  ?>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner3.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Package</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Create Tour Package</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Create Single Tour Package</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
<?php
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  
  if(isset($_SESSION['u']) && isset($_SESSION['p'])){
    $ue=$_SESSION['u'];?>
  <div class="card" >
            <div class="card-body">
              <h2 class="section-title" style="padding-bottom: 1%;">Your Tour Details</h2>

              <!-- Table with hoverable rows -->
              <table class="table table-hover" >
                <thead>
                  <tr>
                    <th scope="col">Organizer Name</th>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Departure Place</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Return Place</th>
                    <th scope="col">Total Members</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_create_tour="SELECT * FROM `tour_creater` WHERE organizer_name='$ue'";
                  $q_create_tour_r=mysqli_query($con, $q_create_tour);
                  if(mysqli_num_rows($q_create_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_create_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['organizer_name'];?></td>
                    <td><?php echo $row['tour_name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['contact_number'];?></td>
                    <td><?php echo $row['departure'];?></td>
                    <td><?php echo $row['departure_which_place'];?></td>
                    <td><?php echo $row['date_return'];?></td>
                    <td><?php echo $row['return_which_place'];?></td>
                    <td><?php echo $row['total_members'];?></td>
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
              <!-- End Table with hoverable rows -->

            </div>
</div>
<?php
}
elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
  $ue=$_SESSION['ue'];?>
  <div class="card" >
            <div class="card-body">
              <h2 class="section-title" style="padding-bottom: 1%;">Your Created Tour</h2>

              <!-- Table with hoverable rows -->
              <table class="table table-hover" >
                <thead>
                  <tr>
                    <th scope="col">Organizer Name</th>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Departure Place</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Return Place</th>
                    <th scope="col">Total Members</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_create_tour="SELECT * FROM `tour_creater` WHERE organizer_name='$ue'";
                  $q_create_tour_r=mysqli_query($con, $q_create_tour);
                  if(mysqli_num_rows($q_create_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_create_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['organizer_name'];?></td>
                    <td><?php echo $row['tour_name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['contact_number'];?></td>
                    <td><?php echo $row['departure'];?></td>
                    <td><?php echo $row['departure_which_place'];?></td>
                    <td><?php echo $row['date_return'];?></td>
                    <td><?php echo $row['return_which_place'];?></td>
                    <td><?php echo $row['total_members'];?></td>
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
              <!-- End Table with hoverable rows -->

            </div>
</div>
<?php
  }
}
?>
  </div><!-- Conatiner end -->
</section><!-- Main container end -->


<section id="main-container" class="main-container">
  <div class="container">
<?php
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  
  if(isset($_SESSION['u']) && isset($_SESSION['p'])){
    $ues=$_SESSION['u'];?>
  <div class="card" >
            <div class="card-body">
              <h2 class="section-title" style="padding-bottom: 1%;">Your Tour Hotel Details</h2>

              <!-- Table with hoverable rows -->
              <table class="table table-hover" >
                <thead>
                  <tr>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Place Name</th>
                    <th scope="col">Members Of One Room</th>
                    <th scope="col">Hotel Details</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_hotel_create_tour="SELECT * FROM `hotel_details_create_tour` WHERE organizer='$ues'";
                  $q_hotel_create_tour_r=mysqli_query($con, $q_hotel_create_tour);
                  if(mysqli_num_rows($q_hotel_create_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_hotel_create_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['tour_name'];?></td>
                    <td><?php echo $row['date_sdu'];?></td>
                    <td><?php echo $row['place_name'];?></td>
                    <td><?php echo $row['one_room'];?></td>
                    <td><?php echo $row['hotel_link'];?></td>
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
              <!-- End Table with hoverable rows -->

            </div>
</div>
<?php
}
elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
  $ues=$_SESSION['ue'];?>
 <div class="card" >
            <div class="card-body">
              <h2 class="section-title" style="padding-bottom: 1%;">Your Tour Hotel Details</h2>

              <!-- Table with hoverable rows -->
              <table class="table table-hover" >
                <thead>
                  <tr>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Place Name</th>
                    <th scope="col">Members Of One Room</th>
                    <th scope="col">Hotel Details</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_hotel_create_tour="SELECT * FROM `hotel_details_create_tour` WHERE organizer='$ues'";
                  $q_hotel_create_tour_r=mysqli_query($con, $q_hotel_create_tour);
                  if(mysqli_num_rows($q_hotel_create_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_hotel_create_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['tour_name'];?></td>
                    <td><?php echo $row['date_sdu'];?></td>
                    <td><?php echo $row['place_name'];?></td>
                    <td><?php echo $row['one_room'];?></td>
                    <td><?php echo $row['hotel_link'];?></td>
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
              <!-- End Table with hoverable rows -->

            </div>
</div>
<?php
  }
}
?>
  </div><!-- Conatiner end -->
</section><!-- Main container end -->


<div class="row" style="padding-left: 9%; padding-right: 9%;" >
    <div class="col-md-12">
      <h3 class="column-title">Create Tour</h3>
      <form id="contact-form" method="post" role="form">
        <div class="error-container"></div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Organizer Name</label>
              <input class="form-control form-control-name" name="oz_name" value="<?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                echo $_SESSION['u'];
              }
              elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                echo $_SESSION['ue'];
              }?>" type="text" disabled>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Tour Name</label>
              <input class="form-control form-control-name" name="tour_name" id="name" placeholder="" type="text" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Email</label>
              <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Contact Number</label>
              <input class="form-control form-control-c_number" name="c_number" id="c_number" placeholder="" type="number" min="1000000000" max="9999999999" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Departure</label>
              <input class="form-control form-control-date"  name="d_date" id="date" placeholder="" type="date" min="<?php echo $check_date;?>" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>From Which Place</label>
              <input class="form-control form-control-d_place" name="d_place" id="d_place" placeholder="" type="text" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Return</label>
              <input class="form-control form-control-date" name="r_date" id="date" placeholder="" type="date" min="<?php echo $check_date;?>" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>From Which Place</label>
              <input class="form-control form-control-r_place" name="r_place" id="r_place" placeholder="" type="text" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Total Members</label>
              <input class="form-control form-control-t_members" name="t_members" id="t_members" placeholder="" type="number" min="1" required>
            </div>
          </div>
        </div>
        <div class="text-right" style="padding-bottom: 4%;"><br>
          <button class="btn btn-primary solid blank" name="create_tour_btn" type="submit">Create</button>
        </div>
      
      <?php
          if(isset($_POST['create_tour_btn'])){
            ?>
              <?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                $oz_name=$_SESSION['u'];
              }
              elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                $oz_name=$_SESSION['ue'];
              }?><?php

            $tour_name=@$_POST['tour_name'];
            $email=@$_POST['email'];
            $c_number=@$_POST['c_number'];
            $d_date=@$_POST['d_date'];
            $d_place=@$_POST['d_place'];
            $r_date=@$_POST['r_date'];
            $r_place=@$_POST['r_place'];
            $t_members=@$_POST['t_members'];
            
            if($tour_name!=""){
              
              $q14="INSERT INTO tour_creater(`organizer_name`,`tour_name`,`email`,`contact_number`,`departure`,`departure_which_place`,`date_return`,`return_which_place`,`total_members`)VALUES('$oz_name', '$tour_name', '$email', '$c_number', '$d_date', '$d_place', '$r_date', '$r_place', '$t_members')";
              $result=mysqli_query($con,$q14);
                  if($result)
                    {
                        // header("location:tables-data.php");
                    }
                }
          }
      ?>
      
      </form>
    </div>

  </div><!-- Content row -->

  <div class="row" style="padding-left: 9%; padding-right: 9%;" >
    <div class="col-md-12">
      <h3 class="column-title">Add Hotel Details Of Tour</h3>
      <form id="contact-form" action="#" method="post" role="form">
        <div class="error-container"></div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Tour Name</label>
              <input class="form-control form-control-name" name="hotel_tour_name" id="name" value="<?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                $oz=$_SESSION['u'];

                $hotel_tour_name="SELECT `tour_name` FROM `tour_creater` WHERE organizer_name='$oz'";
                $result_hotel=mysqli_query($con, $hotel_tour_name);
                if(mysqli_num_rows($result_hotel)>0){
                $hotel_tour_name_r=mysqli_fetch_assoc($result_hotel);
                echo $hotel_tour_name_r['tour_name'];
                }
              }
              elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                $oz=$_SESSION['ue'];

                $hotel_tour_name="SELECT `tour_name` FROM `tour_creater` WHERE organizer_name='$oz'";
                $result_hotel=mysqli_query($con, $hotel_tour_name);
                if(mysqli_num_rows($result_hotel)>0){
                $hotel_tour_name_r=mysqli_fetch_assoc($result_hotel);
                echo $hotel_tour_name_r['tour_name'];
                }
              }
              ?>" type="text" disabled>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Date</label>
              <input class="form-control form-control-date" name="hotel_date" id="date" placeholder="" type="date" min="<?php echo $check_date;?>" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Place Name</label>
              <input class="form-control form-control-f_place" name="hotel_f_place" id="f_place" placeholder="" type="text" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Members For One Room</label>
              <select class="form-control form-control-one_room" name="hotel_one_room" id="one_room"> 
                <option value="1"> 1 </option>  
                <option value="2"> 2 </option>  
                <option value="3"> 3 </option>  
                <option value="4"> 4 </option>  
                </select>  
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>Hotel Location Link Or Hotel Addrass</label>
          <textarea class="form-control form-control-hotel" name="hotel_link_address" id="hotel" placeholder="" rows="10" required></textarea>
        </div>
        <div class="text-right"><br>
          <button class="btn btn-primary solid blank" name="add_hotel_create_btn" type="submit"> + ADD One More </button>
        </div>
        <div class="text-right" style="padding-bottom: 4%;"><br>
            <button class="btn btn-primary solid blank" name="finish_hotel_create_btn" type="submit">Finish</button>
          </div>
      
      <?php
        if(isset($_POST['add_hotel_create_btn'])){
          ?>
              <?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                $oz=$_SESSION['u'];

                $hotel_tour_name="SELECT `tour_name` FROM `tour_creater` WHERE organizer_name='$oz'";
                $result_hotel=mysqli_query($con, $hotel_tour_name);
                if(mysqli_num_rows($result_hotel)>0){
                $hotel_tour_name_r=mysqli_fetch_assoc($result_hotel);
                $hotel_tour_name_sql=$hotel_tour_name_r['tour_name'];
                }
              }
              elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                $oz=$_SESSION['ue'];

                $hotel_tour_name="SELECT `tour_name` FROM `tour_creater` WHERE organizer_name='$oz'";
                $result_hotel=mysqli_query($con, $hotel_tour_name);
                if(mysqli_num_rows($result_hotel)>0){
                $hotel_tour_name_r=mysqli_fetch_assoc($result_hotel);
                $hotel_tour_name_sql=$hotel_tour_name_r['tour_name'];
                }
                else{
                  $hotel_tour_name_sql=""; 
                }
              }
              ?><?php

              
          $hotel_date=@$_POST['hotel_date'];
          $hotel_f_place=@$_POST['hotel_f_place'];
          $hotel_one_room=@$_POST['hotel_one_room'];
          $hotel_link_address=@$_POST['hotel_link_address'];
          
          
          if($hotel_tour_name_sql!=""){
            $q15="INSERT INTO hotel_details_create_tour(`organizer`,`tour_name`,`date_sdu`,`place_name`,`one_room`,`hotel_link`)VALUES('$oz','$hotel_tour_name_sql', '$hotel_date', '$hotel_f_place', '$hotel_one_room', '$hotel_link_address')";
            $result=mysqli_query($con,$q15);
                if($result)
                  {
                      // header("location:tables-data.php");
                  }
              }
        }
        elseif(isset($_POST['finish_hotel_create_btn'])){
          ?>
          <?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                $oz=$_SESSION['u'];

                $hotel_tour_name="SELECT `tour_name` FROM `tour_creater` WHERE organizer_name='$oz'";
                $result_hotel=mysqli_query($con, $hotel_tour_name);
                if(mysqli_num_rows($result_hotel)>0){
                $hotel_tour_name_r=mysqli_fetch_assoc($result_hotel);
                $hotel_tour_name_sql=$hotel_tour_name_r['tour_name'];
                }
              }
              elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                $oz=$_SESSION['ue'];

                $hotel_tour_name="SELECT `tour_name` FROM `tour_creater` WHERE organizer_name='$oz'";
                $result_hotel=mysqli_query($con, $hotel_tour_name);
                if(mysqli_num_rows($result_hotel)>0){
                $hotel_tour_name_r=mysqli_fetch_assoc($result_hotel);
                $hotel_tour_name_sql=$hotel_tour_name_r['tour_name'];
                }
                else{
                  $hotel_tour_name_sql=""; 
                }
              }
              ?><?php

          $hotel_date=@$_POST['hotel_date'];
          $hotel_f_place=@$_POST['hotel_f_place'];
          $hotel_one_room=@$_POST['hotel_one_room'];
          $hotel_link_address=@$_POST['hotel_link_address'];
          
          
          if($hotel_tour_name_sql!=""){
            $q15="INSERT INTO hotel_details_create_tour(`organizer`,`tour_name`,`date_sdu`,`place_name`,`one_room`,`hotel_link`)VALUES('$oz','$hotel_tour_name_sql', '$hotel_date', '$hotel_f_place', '$hotel_one_room', '$hotel_link_address')";
            $result=mysqli_query($con,$q15);
                if($result)
                  {
                      header("location:admin_creater.php");
                  }
              }
        }
      ?>
       
      </form>
    </div>

  </div><!-- Content row -->

</div><!-- Content Col end -->

<?php include 'footer.php' ?><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

</html>
<?php
}
else if((isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])) && ($_SESSION['user']=="creater" || $_SESSION['user']=="admin"))
{
?>
<?php include_once 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Create Tour - Dream Holiday</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="body-inner">
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.php">
                  <img loading="lazy" src="images/logo.png" alt="Travel">
                </a>
            </div><!-- logo end -->
  
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Call Us</p>
                          <p class="info-box-subtitle"><a href="#">(+91) 7622972543</a></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Us</p>
                          <p class="info-box-subtitle"><a href="#">sdhaduk666@rku.ac.in</a></p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">(GTP) Certificate</p>
                          <p class="info-box-subtitle">17/Oct/2002</p>
                      </div>
                    </div>
                  </li>
                  <?php
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  ?>  
      <li class="header-get-a-quote">
          <form method="post" >
          <button class="btn btn-primary" name="profile">profile</button>
          <?php
            if(isset($_POST['profile'])){

              if($_SESSION['use']=="admin"){
                header("location:index2.php");
              }
              elseif($_SESSION['use']=="creater"){
                header("location:admin_creater.php");
              }
              else{
                header("location:admin_user.php");
              }
                
            }
          ?>
          <button class="btn btn-primary" name="btn" >Logout</button>
           </form>
      </li>
<?php
    if(isset($_POST['btn'])){
      unset($_SESSION['u']);
      unset($_SESSION['p']);
      unset($_SESSION['use']);
      unset($_SESSION['ue']);
      unset($_SESSION['pe']);
      unset($_SESSION['user']);
      header("location:index.php");
        ?>
          <li class="header-get-a-quote">
              <a class="btn btn-primary" href="login.php">Login</a>
          </li>
        <?php
        //session_distroy();  -> to distroy all the sessions.
        }
        ?>
  <?php
}
else
{
  ?>
    <li class="header-get-a-quote">
        <a class="btn btn-primary" href="login.php">Login</a>
    </li>
<?php
}
?>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>
<?php 
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])))
{
  if(($_SESSION['use']=="creater") || ($_SESSION['use']=="admin")){?>
  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="faq.php">Faq</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Packages <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.php">All Packages</a></li>
                            <li><a href="create_tour.php">Create Own Tour Package</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <?php
  }
  else{?>
    <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="faq.php">Faq</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Packages <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.php">All Packages</a></li>
                          </ul>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <?php
  }
}
elseif(isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user']))
{
  if(($_SESSION['user']=="creater") || ($_SESSION['user']=="admin")){?>
    <div class="site-navigation">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  
                  <div id="navbar-collapse" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
  
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="about.php">About Us</a></li>
                              <li><a href="faq.php">Faq</a></li>
                            </ul>
                        </li>
                
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Packages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="projects.php">All Packages</a></li>
                              <li><a href="create_tour.php">Create Own Tour Package</a></li>
                            </ul>
                        </li>
                
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                      </ul>
                  </div>
                </nav>
            </div>
            <!--/ Col end -->
          </div>
          <!--/ Row end -->
      </div>
      <!--/ Container end -->
  
    </div>
  <?php
  }
  else{?>
    <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="faq.php">Faq</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Packages <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.php">All Packages</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <?php
  }
}
else{?>
    <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="faq.php">Faq</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Packages <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.php">All Packages</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <?php
  }
  ?>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner3.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Package</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Create Tour Package</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Create Single Tour Package</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
<?php
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  
  if(isset($_SESSION['u']) && isset($_SESSION['p'])){
    $ue=$_SESSION['u'];?>
  <div class="card" >
            <div class="card-body">
              <h2 class="section-title" style="padding-bottom: 1%;">Your Tour Details</h2>

              <!-- Table with hoverable rows -->
              <table class="table table-hover" >
                <thead>
                  <tr>
                    <th scope="col">Organizer Name</th>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Departure Place</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Return Place</th>
                    <th scope="col">Total Members</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_create_tour="SELECT * FROM `tour_creater` WHERE organizer_name='$ue'";
                  $q_create_tour_r=mysqli_query($con, $q_create_tour);
                  if(mysqli_num_rows($q_create_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_create_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['organizer_name'];?></td>
                    <td><?php echo $row['tour_name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['contact_number'];?></td>
                    <td><?php echo $row['departure'];?></td>
                    <td><?php echo $row['departure_which_place'];?></td>
                    <td><?php echo $row['date_return'];?></td>
                    <td><?php echo $row['return_which_place'];?></td>
                    <td><?php echo $row['total_members'];?></td>
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
              <!-- End Table with hoverable rows -->

            </div>
</div>
<?php
}
elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
  $ue=$_SESSION['ue'];?>
  <div class="card" >
            <div class="card-body">
              <h2 class="section-title" style="padding-bottom: 1%;">Your Created Tour</h2>

              <!-- Table with hoverable rows -->
              <table class="table table-hover" >
                <thead>
                  <tr>
                    <th scope="col">Organizer Name</th>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Departure Place</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Return Place</th>
                    <th scope="col">Total Members</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_create_tour="SELECT * FROM `tour_creater` WHERE organizer_name='$ue'";
                  $q_create_tour_r=mysqli_query($con, $q_create_tour);
                  if(mysqli_num_rows($q_create_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_create_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['organizer_name'];?></td>
                    <td><?php echo $row['tour_name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['contact_number'];?></td>
                    <td><?php echo $row['departure'];?></td>
                    <td><?php echo $row['departure_which_place'];?></td>
                    <td><?php echo $row['date_return'];?></td>
                    <td><?php echo $row['return_which_place'];?></td>
                    <td><?php echo $row['total_members'];?></td>
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
              <!-- End Table with hoverable rows -->

            </div>
</div>
<?php
  }
}
?>
  </div><!-- Conatiner end -->
</section><!-- Main container end -->


<section id="main-container" class="main-container">
  <div class="container">
<?php
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  
  if(isset($_SESSION['u']) && isset($_SESSION['p'])){
    $ues=$_SESSION['u'];?>
  <div class="card" >
            <div class="card-body">
              <h2 class="section-title" style="padding-bottom: 1%;">Your Tour Hotel Details</h2>

              <!-- Table with hoverable rows -->
              <table class="table table-hover" >
                <thead>
                  <tr>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Place Name</th>
                    <th scope="col">Members Of One Room</th>
                    <th scope="col">Hotel Details</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_hotel_create_tour="SELECT * FROM `hotel_details_create_tour` WHERE organizer='$ues'";
                  $q_hotel_create_tour_r=mysqli_query($con, $q_hotel_create_tour);
                  if(mysqli_num_rows($q_hotel_create_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_hotel_create_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['tour_name'];?></td>
                    <td><?php echo $row['date_sdu'];?></td>
                    <td><?php echo $row['place_name'];?></td>
                    <td><?php echo $row['one_room'];?></td>
                    <td><?php echo $row['hotel_link'];?></td>
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
              <!-- End Table with hoverable rows -->

            </div>
</div>
<?php
}
elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
  $ues=$_SESSION['ue'];?>
 <div class="card" >
            <div class="card-body">
              <h2 class="section-title" style="padding-bottom: 1%;">Your Tour Hotel Details</h2>

              <!-- Table with hoverable rows -->
              <table class="table table-hover" >
                <thead>
                  <tr>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Place Name</th>
                    <th scope="col">Members Of One Room</th>
                    <th scope="col">Hotel Details</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_hotel_create_tour="SELECT * FROM `hotel_details_create_tour` WHERE organizer='$ues'";
                  $q_hotel_create_tour_r=mysqli_query($con, $q_hotel_create_tour);
                  if(mysqli_num_rows($q_hotel_create_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_hotel_create_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['tour_name'];?></td>
                    <td><?php echo $row['date_sdu'];?></td>
                    <td><?php echo $row['place_name'];?></td>
                    <td><?php echo $row['one_room'];?></td>
                    <td><?php echo $row['hotel_link'];?></td>
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
              <!-- End Table with hoverable rows -->

            </div>
</div>
<?php
  }
}
?>
  </div><!-- Conatiner end -->
</section><!-- Main container end -->


<div class="row" style="padding-left: 9%; padding-right: 9%;" >
    <div class="col-md-12">
      <h3 class="column-title">Create Tour</h3>
      <form id="contact-form" method="post" role="form">
        <div class="error-container"></div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Organizer Name</label>
              <input class="form-control form-control-name" name="oz_name" value="<?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                echo $_SESSION['u'];
              }
              elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                echo $_SESSION['ue'];
              }?>" type="text" disabled>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Tour Name</label>
              <input class="form-control form-control-name" name="tour_name" id="name" placeholder="" type="text" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Email</label>
              <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Contact Number</label>
              <input class="form-control form-control-c_number" name="c_number" id="c_number" placeholder="" type="number" min="1000000000" max="9999999999" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Departure</label>
              <input class="form-control form-control-date"  name="d_date" id="date" placeholder="" type="date" min="<?php echo $check_date;?>" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>From Which Place</label>
              <input class="form-control form-control-d_place" name="d_place" id="d_place" placeholder="" type="text" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Return</label>
              <input class="form-control form-control-date" name="r_date" id="date" placeholder="" type="date" min="<?php echo $check_date;?>" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>From Which Place</label>
              <input class="form-control form-control-r_place" name="r_place" id="r_place" placeholder="" type="text" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Total Members</label>
              <input class="form-control form-control-t_members" name="t_members" id="t_members" placeholder="" type="number" min="1" required>
            </div>
          </div>
        </div>
        <div class="text-right" style="padding-bottom: 4%;"><br>
          <button class="btn btn-primary solid blank" name="create_tour_btn" type="submit">Create</button>
        </div>
      
      <?php
          if(isset($_POST['create_tour_btn'])){
            ?>
              <?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                $oz_name=$_SESSION['u'];
              }
              elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                $oz_name=$_SESSION['ue'];
              }?><?php

            $tour_name=@$_POST['tour_name'];
            $email=@$_POST['email'];
            $c_number=@$_POST['c_number'];
            $d_date=@$_POST['d_date'];
            $d_place=@$_POST['d_place'];
            $r_date=@$_POST['r_date'];
            $r_place=@$_POST['r_place'];
            $t_members=@$_POST['t_members'];
            
            if($tour_name!=""){
              
              $q14="INSERT INTO tour_creater(`organizer_name`,`tour_name`,`email`,`contact_number`,`departure`,`departure_which_place`,`date_return`,`return_which_place`,`total_members`)VALUES('$oz_name', '$tour_name', '$email', '$c_number', '$d_date', '$d_place', '$r_date', '$r_place', '$t_members')";
              $result=mysqli_query($con,$q14);
                  if($result)
                    {
                        // header("location:tables-data.php");
                    }
                }
          }
      ?>
      
      </form>
    </div>

  </div><!-- Content row -->

  <div class="row" style="padding-left: 9%; padding-right: 9%;" >
    <div class="col-md-12">
      <h3 class="column-title">Add Hotel Details Of Tour</h3>
      <form id="contact-form" action="#" method="post" role="form">
        <div class="error-container"></div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Tour Name</label>
              <input class="form-control form-control-name" name="hotel_tour_name" id="name" value="<?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                $oz=$_SESSION['u'];

                $hotel_tour_name="SELECT `tour_name` FROM `tour_creater` WHERE organizer_name='$oz'";
                $result_hotel=mysqli_query($con, $hotel_tour_name);
                if(mysqli_num_rows($result_hotel)>0){
                $hotel_tour_name_r=mysqli_fetch_assoc($result_hotel);
                echo $hotel_tour_name_r['tour_name'];
                }
              }
              elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                $oz=$_SESSION['ue'];

                $hotel_tour_name="SELECT `tour_name` FROM `tour_creater` WHERE organizer_name='$oz'";
                $result_hotel=mysqli_query($con, $hotel_tour_name);
                if(mysqli_num_rows($result_hotel)>0){
                $hotel_tour_name_r=mysqli_fetch_assoc($result_hotel);
                echo $hotel_tour_name_r['tour_name'];
                }
              }
              ?>" type="text" disabled>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Date</label>
              <input class="form-control form-control-date" name="hotel_date" id="date" placeholder="" type="date" min="<?php echo $check_date;?>" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Place Name</label>
              <input class="form-control form-control-f_place" name="hotel_f_place" id="f_place" placeholder="" type="text" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Members For One Room</label>
              <select class="form-control form-control-one_room" name="hotel_one_room" id="one_room"> 
                <option value="1"> 1 </option>  
                <option value="2"> 2 </option>  
                <option value="3"> 3 </option>  
                <option value="4"> 4 </option>  
                </select>  
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>Hotel Location Link Or Hotel Addrass</label>
          <textarea class="form-control form-control-hotel" name="hotel_link_address" id="hotel" placeholder="" rows="10" required></textarea>
        </div>
        <div class="text-right"><br>
          <button class="btn btn-primary solid blank" name="add_hotel_create_btn" type="submit"> + ADD One More </button>
        </div>
        <div class="text-right" style="padding-bottom: 4%;"><br>
            <button class="btn btn-primary solid blank" name="finish_hotel_create_btn" type="submit">Finish</button>
          </div>
      
      <?php
        if(isset($_POST['add_hotel_create_btn'])){
          ?>
              <?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                $oz=$_SESSION['u'];

                $hotel_tour_name="SELECT `tour_name` FROM `tour_creater` WHERE organizer_name='$oz'";
                $result_hotel=mysqli_query($con, $hotel_tour_name);
                if(mysqli_num_rows($result_hotel)>0){
                $hotel_tour_name_r=mysqli_fetch_assoc($result_hotel);
                $hotel_tour_name_sql=$hotel_tour_name_r['tour_name'];
                }
              }
              elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                $oz=$_SESSION['ue'];

                $hotel_tour_name="SELECT `tour_name` FROM `tour_creater` WHERE organizer_name='$oz'";
                $result_hotel=mysqli_query($con, $hotel_tour_name);
                if(mysqli_num_rows($result_hotel)>0){
                $hotel_tour_name_r=mysqli_fetch_assoc($result_hotel);
                $hotel_tour_name_sql=$hotel_tour_name_r['tour_name'];
                }
                else{
                  $hotel_tour_name_sql=""; 
                }
              }
              ?><?php

              
          $hotel_date=@$_POST['hotel_date'];
          $hotel_f_place=@$_POST['hotel_f_place'];
          $hotel_one_room=@$_POST['hotel_one_room'];
          $hotel_link_address=@$_POST['hotel_link_address'];
          
          
          if($hotel_tour_name_sql!=""){
            $q15="INSERT INTO hotel_details_create_tour(`organizer`,`tour_name`,`date_sdu`,`place_name`,`one_room`,`hotel_link`)VALUES('$oz','$hotel_tour_name_sql', '$hotel_date', '$hotel_f_place', '$hotel_one_room', '$hotel_link_address')";
            $result=mysqli_query($con,$q15);
                if($result)
                  {
                      // header("location:tables-data.php");
                  }
              }
        }
        elseif(isset($_POST['finish_hotel_create_btn'])){
          ?>
          <?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                $oz=$_SESSION['u'];

                $hotel_tour_name="SELECT `tour_name` FROM `tour_creater` WHERE organizer_name='$oz'";
                $result_hotel=mysqli_query($con, $hotel_tour_name);
                if(mysqli_num_rows($result_hotel)>0){
                $hotel_tour_name_r=mysqli_fetch_assoc($result_hotel);
                $hotel_tour_name_sql=$hotel_tour_name_r['tour_name'];
                }
              }
              elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                $oz=$_SESSION['ue'];

                $hotel_tour_name="SELECT `tour_name` FROM `tour_creater` WHERE organizer_name='$oz'";
                $result_hotel=mysqli_query($con, $hotel_tour_name);
                if(mysqli_num_rows($result_hotel)>0){
                $hotel_tour_name_r=mysqli_fetch_assoc($result_hotel);
                $hotel_tour_name_sql=$hotel_tour_name_r['tour_name'];
                }
                else{
                  $hotel_tour_name_sql=""; 
                }
              }
              ?><?php

          $hotel_date=@$_POST['hotel_date'];
          $hotel_f_place=@$_POST['hotel_f_place'];
          $hotel_one_room=@$_POST['hotel_one_room'];
          $hotel_link_address=@$_POST['hotel_link_address'];
          
          
          if($hotel_tour_name_sql!=""){
            $q15="INSERT INTO hotel_details_create_tour(`organizer`,`tour_name`,`date_sdu`,`place_name`,`one_room`,`hotel_link`)VALUES('$oz','$hotel_tour_name_sql', '$hotel_date', '$hotel_f_place', '$hotel_one_room', '$hotel_link_address')";
            $result=mysqli_query($con,$q15);
                if($result)
                  {
                      header("location:admin_creater.php");
                  }
              }
        }
      ?>
       
      </form>
    </div>

  </div><!-- Content row -->

</div><!-- Content Col end -->

<?php include 'footer.php' ?><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

</html>
<?php
}
else{
  header("location:pages-error-404.php");}
?>