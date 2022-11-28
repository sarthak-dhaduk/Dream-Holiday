<?php include_once 'connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Tour - Dream Holiday</title>

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
<?php include 'header.php'?>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner3.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Packages</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Packages</a></li>
                      <li class="breadcrumb-item active" aria-current="page">All Packages</li>
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
    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">All Tours
          </label>
          <!-- <label for="commercial">
            <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Cruise
          </label>
          <label for="education">
            <input type="radio" name="shuffle-filter" id="education" value="education">Sea Side
          </label>
          <label for="government">
            <input type="radio" name="shuffle-filter" id="government" value="government">international
          </label>
          <label for="infrastructure">
            <input type="radio" name="shuffle-filter" id="infrastructure" value="infrastructure">national
          </label>
          <label for="residential">
            <input type="radio" name="shuffle-filter" id="residential" value="residential">Trekking
          </label>
          <label for="healthcare">
            <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">New Tours
          </label> -->
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

<?php
$q_main_data_tour="SELECT * FROM main_tour_data";
$q_main_data_tour_r=mysqli_query($con, $q_main_data_tour);
if(mysqli_num_rows($q_main_data_tour_r)>0){
  while($row = mysqli_fetch_assoc($q_main_data_tour_r)){
    ?>
          <div class="col-lg-4 col-md-6 shuffle-item" style="padding-left:10px; padding-right:10px; padding-top:10px; padding-bottom:10px;">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/<?php echo $row['tour_photo'];?>">
                <img class="img-fluid" src="images/projects/<?php echo $row['tour_photo'];?>" alt="project-image">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.php?tour=<?php echo $row['tour_name'];?>"><?php echo $row['tour_name'];?></a>
                  </h3>
                  <p class="project-cat"><?php echo $row['category'];?></p>
                </div>
              </div>
            </div>
          </div>
<?php
  }
}
?>
  </div><!-- shuffle end -->
</div>
      <!-- <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="projects.php">View All Projects</a>
        </div>
      </div> -->

    </div><!-- Content row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->

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