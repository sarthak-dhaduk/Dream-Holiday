<?php include_once 'connection.php'?>
<?php $check_date=date("Y-m-d"); ?>
<?php $tour=$_GET['tour'];?>
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
                <h1 class="banner-title">Package</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Package</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Single Tour Package</li>
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
      <div class="col-lg-8">
        <div id="page-slider" class="page-slider small-bg">
          <div class="item">
            <img loading="lazy" class="img-fluid" src="images/projects/Tour1.jpg" alt="Tour-image" />
          </div>

          <div class="item">
            <img loading="lazy" class="img-fluid" src="images/projects/Tour2.jpg" alt="Tour-image" />
          </div>
          
          <div class="item">
            <img loading="lazy" class="img-fluid" src="images/projects/Tour3.jpg" alt="Tour-image" />
          </div>
          
          <div class="item">
            <img loading="lazy" class="img-fluid" src="images/projects/Tour4.jpg" alt="Tour-image" />
          </div>
          
          <div class="item">
            <img loading="lazy" class="img-fluid" src="images/projects/Tour5.jpg" alt="Tour-image" />
          </div>
          
          <div class="item">
            <img loading="lazy" class="img-fluid" src="images/projects/Tour6.jpg" alt="Tour-image" />
          </div>
        </div><!-- Page slider end -->
      </div><!-- Slider col end -->

      <div class="col-lg-4 mt-5 mt-lg-0">

        <h3 class="column-title mrt-0">Tour Name</h3>
        <?php
          
          $q_normal_data_tourname="SELECT `tour_name` FROM `normal_data_tour` WHERE tour_name='$tour'";
          $q_normal_data_tourname_r=mysqli_fetch_assoc(mysqli_query($con, $q_normal_data_tourname));
          
          $q_normal_data_departure_date="SELECT `departure_date` FROM `normal_data_tour` WHERE tour_name='$tour'";
          $q_normal_data_departure_date_r=mysqli_fetch_assoc(mysqli_query($con, $q_normal_data_departure_date));

          $q_normal_data_departure_time="SELECT `departure_time` FROM `normal_data_tour` WHERE tour_name='$tour'";
          $q_normal_data_departure_time_r=mysqli_fetch_assoc(mysqli_query($con, $q_normal_data_departure_time));

          $q_normal_data_departure_place="SELECT `departure_place` FROM `normal_data_tour` WHERE tour_name='$tour'";
          $q_normal_data_departure_place_r=mysqli_fetch_assoc(mysqli_query($con, $q_normal_data_departure_place));

          $q_normal_data_return_date="SELECT `return_date` FROM `normal_data_tour` WHERE tour_name='$tour'";
          $q_normal_data_return_date_r=mysqli_fetch_assoc(mysqli_query($con, $q_normal_data_return_date));

          $q_normal_data_return_time="SELECT `return_time` FROM `normal_data_tour` WHERE tour_name='$tour'";
          $q_normal_data_return_time_r=mysqli_fetch_assoc(mysqli_query($con, $q_normal_data_return_time));

          $q_normal_data_return_place="SELECT `return_place` FROM `normal_data_tour` WHERE tour_name='$tour'";
          $q_normal_data_return_place_r=mysqli_fetch_assoc(mysqli_query($con, $q_normal_data_return_place));

          $q_normal_data_pricing="SELECT `pricing` FROM `normal_data_tour` WHERE tour_name='$tour'";
          $q_normal_data_pricing_r=mysqli_fetch_assoc(mysqli_query($con, $q_normal_data_pricing));

          $q_normal_data_pricing_status="SELECT `pricing_status` FROM `normal_data_tour` WHERE tour_name='$tour'";
          $q_normal_data_pricing_status_r=mysqli_fetch_assoc(mysqli_query($con, $q_normal_data_pricing_status));

          $q_normal_data_days="SELECT `days` FROM `normal_data_tour` WHERE tour_name='$tour'";
          $q_normal_data_days_r=mysqli_fetch_assoc(mysqli_query($con, $q_normal_data_days));

          $q_normal_data_category="SELECT `select_tage` FROM `normal_data_tour` WHERE tour_name='$tour'";
          $q_normal_data_category_r=mysqli_fetch_assoc(mysqli_query($con, $q_normal_data_category));


        ?>
        <p><?php echo $q_normal_data_tourname_r['tour_name'];?></p>
        <ul class="project-info list-unstyled">
          <li>
            <p class="project-info-label">Departure</p>
            <p class="project-info-content">Date:<?php echo $q_normal_data_departure_date_r['departure_date'];?> Time: <?php echo $q_normal_data_departure_time_r['departure_time'];?> AM (<?php echo $q_normal_data_departure_place_r['departure_place'];?> Airport)</p>
          </li>
          <li>
            <p class="project-info-label">Return</p>
            <p class="project-info-content">Date:<?php echo $q_normal_data_return_date_r['return_date'];?> Time: <?php echo $q_normal_data_return_time_r['return_time'];?> AM (<?php echo $q_normal_data_return_place_r['return_place'];?> Airport)</p>
          </li>
          <li>
            <p class="project-info-label">Pricing</p>
            <p class="project-info-content"><?php echo $q_normal_data_pricing_r['pricing'];?> (<?php echo $q_normal_data_pricing_status_r['pricing_status'];?>)</p>
          </li>
          <li>
            <p class="project-info-label">Days</p>
            <p class="project-info-content"><?php echo $q_normal_data_days_r['days'];?> (days)</p>
          </li>
          <li>
            <p class="project-info-label">Category</p>
            <p class="project-info-content"><?php echo $q_normal_data_category_r['select_tage'];?></p>
          </li>
        </ul>

      </div><!-- Content col end -->

    </div><!-- Row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<section id="main-container" class="main-container" style="padding-left: 9%; padding-right: 9%;">

<div class="card" >
            <div class="card-body">
              <h2 class="section-title" style="padding-bottom: 1%;">Table with hoverable rows</h2>

              <!-- Table with hoverable rows -->
              <table class="table table-hover" >
                <thead>
                  <tr>
                    <th scope="col">Tour Name</th>
                    <th scope="col">City Name</th>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Night</th>
                    <th scope="col">Reach Date</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_hotel_data_tour="SELECT * FROM hotel_details WHERE tourname='$tour'";
                  $q_hotel_data_tour_r=mysqli_query($con, $q_hotel_data_tour);
                  if(mysqli_num_rows($q_hotel_data_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_hotel_data_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['tourname'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td><?php echo $row['hotel'];?></td>
                    <td><?php echo $row['night'];?></td>
                    <td><?php echo $row['reach_date'];?></td>
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
</section>

<section id="main-container" class="main-container" style="padding-left: 9%; padding-right: 9%;">
<?php
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{?>
<div class="card" >
            <div class="card-body">
              <h2 class="section-title" style="padding-bottom: 1%;">Your Tour Details</h2>

              <!-- Table with hoverable rows -->
              <table class="table table-hover" >
                <thead>
                  <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Members</th>
                  </tr>
                </thead>
                <tbody>
                <?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                  $ue=$_SESSION['u'];
                }
                elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                  $ue=$_SESSION['ue'];
                }?>
                <?php
                  $q_booking_table_data_tour="SELECT * FROM booking_tour WHERE username='$ue' AND tour_name='$tour'";
                  $q_booking_table_data_tour_r=mysqli_query($con, $q_booking_table_data_tour);
                  if(mysqli_num_rows($q_booking_table_data_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_booking_table_data_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['contact_number'];?></td>
                    <td><?php echo $row['tour_name'];?></td>
                    <td><?php echo $row['members'];?></td>
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
}?>
</section>




<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
    <div class="col-lg-12 mb-5 mb-lg-0">

      <div id="comments" class="comments-area">
          <h3 class="comments-heading">#<?php echo $tour ?> Reviews</h3>
          <ul class="comments-list">
            <li>
<?php
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  $q_reviews_data_tour="SELECT * FROM review_rating WHERE username='$ue' AND tour='$tour'";
  $q_reviews_data_tour_r=mysqli_query($con, $q_reviews_data_tour);
    if(mysqli_num_rows($q_reviews_data_tour_r)>0){
      while($row = mysqli_fetch_assoc($q_reviews_data_tour_r)){
?>
              <div class="comment d-flex">
                
                <div class="comment-body">
                  <div class="meta-data">
                    <span class="comment-author mr-3"><?php echo $row['username'];?></span>
                    <span class="comment-date float-right"><?php echo $row['post_date'];?></span>
                  </div>
                  <div class="comment-content">
                    <p><?php echo $row['review'];?></p>
                  </div>
                  <div class="text-left">
                  <span class="comment-reply font-weight-bold" >Rating <?php echo $row['rating'];?></span>
                  </div>
                </div>
              </div><!-- Comments end -->
<?php
      }
    }
  }
?>
              
            </li><!-- Comments-list li end -->
          </ul><!-- Comments-list ul end -->
        </div><!-- Post comment end -->  
        
        
  </div>
    </div>
  </div>
</section>








<section id="main-container" class="main-container">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">Grab the Packages</h2>
        <h3 class="section-sub-title">Pricing</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="ts-pricing-box">
          <div class="ts-pricing-header">
            <h2 class="ts-pricing-name">Tour Expenses</h2>
            <h2 class="ts-pricing-price">
              <span class="currency">$</span><strong>89.9</strong><small>/Departure To Retorn</small>
            </h2>
          </div><!-- Pricing header -->
          <div class="ts-pricing-features">
            <ul class="list-unstyled">
              <li>The passenger's cost will be paid by us</li>
              <li>Three time's food provide by us</li>
              <li>Local guide Provide by us</li>
              <li>You will have to pay the car rent</li>
              <li>Life insurance is not provide by us</li>
              <li>No any return provide by us</li>
            </ul>
          </div><!-- Features end -->
        </div><!-- Plan 1 end -->
      </div><!-- Col end -->

      <div class="col-lg-4 col-md-6">
        <div class="ts-pricing-box ts-pricing-featured">
          <div class="ts-pricing-header">
            <h2 class="ts-pricing-name">Tour Expenses</h2>
            <h2 class="ts-pricing-price">
              <span class="currency">$</span><strong>179.9</strong><small>/Departure To Retorn</small>
            </h2>
          </div><!-- Pricing header -->
          <div class="ts-pricing-features">
            <ul class="list-unstyled">
              <li>The passenger's cost will be paid by us</li>
              <li>Three time's food provide by us</li>
              <li>Local guide Provide by us</li>
              <li>SUV cars for travel in local places</li>
              <li>Life insurance provide by us</li>
              <li>50% Of life insurance will return</li>
            </ul>
          </div><!-- Features end -->
        </div><!-- Plan 2 end -->
      </div><!-- Col end -->

      <div class="col-lg-4 col-md-6">
        <div class="ts-pricing-box">
          <div class="ts-pricing-header">
            <h2 class="ts-pricing-name">Tour Expenses</h2>
            <h2 class="ts-pricing-price">
              <span class="currency">$</span><strong>279.9</strong><small>/Departure To Retorn</small>
            </h2>
          </div><!-- Pricing header -->
          <div class="ts-pricing-features">
            <ul class="list-unstyled">
              <li>The passenger's cost will be paid by us</li>
              <li>Three time's food provide by us</li>
              <li>Local guide Provide by us</li>
              <li>Luxury cars for travel in local places</li>
              <li>Life insurance provide by us</li>
              <li>65% Of life insurance will return</li>
            </ul>
          </div><!-- Features end -->
        </div><!-- Plan 3 end -->
      </div><!-- Col end -->

    </div>
    <!--/ Content row end -->

  </div><!-- Conatiner end -->
</section>


<?php
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  $q_reviews_data_tour="SELECT * FROM review_rating WHERE username='$ue' AND tour='$tour'";
  $q_reviews_data_tour_r=mysqli_query($con, $q_reviews_data_tour);
    if(mysqli_num_rows($q_reviews_data_tour_r)<1){
?>
<div class="comments-form border-box" style="padding-left: 9%; padding-right: 9%;"  >
  <h3 class="title-normal">Reviews & Rating</h3>

  <form method="post">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="message" class="w-100" ><textarea class="form-control required-field" name="r_message"  id="message" placeholder="Your Message" rows="10" required></textarea></label>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="name" class="w-100"><input class="form-control" name="uname" id="uname" value="<?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                echo $_SESSION['u'];
              }
              elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                echo $_SESSION['ue'];
              }?>" type="text" disabled></label>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="email" class="w-100"><input class="form-control" name="rating_date" id="date" type="date" min="<?php echo $check_date; ?>"  max="<?php echo $check_date;?>" required></label>
        </div>
      </div>
      <div class="col-md-4">
            <div class="form-group">
              <select class="form-control form-control-one_room" name="rating" id="rating">
                <option value="9">9</option>  
                <option value="8">8</option>  
                <option value="7">7</option>  
                <option value="6">6</option>  
                <option value="5">5</option>  
                <option value="4">4</option>  
                <option value="3">3</option>  
                <option value="2">2</option>  
                <option value="1">1</option>
                </select>  
            </div>
          </div>
        </div>
    <div class="clearfix" style="padding-bottom: 4%;">
      <button class="btn btn-primary" type="submit" aria-label="post-comment" name="rating_btn">Post Message</button>
    </div>
<?php
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{

if(isset($_POST['rating_btn'])){
  
  $r_message=@$_POST['r_message'];?>
  <?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
    $ue_rating=$_SESSION['u'];
  }
  elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
    $ue_rating=$_SESSION['ue'];
  }?><?php
 
	$rating_date=@$_POST['rating_date'];
	$rating=@$_POST['rating'];

  if($r_message!=""){
    $q_rating="INSERT INTO review_rating (username, tour, post_date, rating, review)VALUES('$ue_rating', '$tour', '$rating_date', '$rating', '$r_message')";
  
    $result_rating=mysqli_query($con,$q_rating);
      if($result_rating)
        {
          
        }
    }
  }
}
else{
  if(isset($_POST['rating_btn'])){
    header("location:login.php");
  }
}
?>
  </form>
</div>
<?php
    }
  }
?>


<?php
if((isset($_SESSION['u']) && isset($_SESSION['p']) && isset($_SESSION['use'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe']) && isset($_SESSION['user'])))
{
  $q_reviews_data_tour="SELECT * FROM questions WHERE username='$ue'";
  $q_reviews_data_tour_r=mysqli_query($con, $q_reviews_data_tour);
    if(mysqli_num_rows($q_reviews_data_tour_r)<1){
?>
<div class="comments-form border-box" style="padding-left: 9%; padding-right: 9%;"  >
  <h3 class="title-normal">Ask Questions</h3>

  <form action="projects-single.php" method="post">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="message" class="w-100" ><textarea class="form-control required-field" name="message"  id="message" placeholder="Your Message" rows="10" required></textarea></label>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="name" class="w-100"><input class="form-control" name="uname" id="uname" value="<?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                echo $_SESSION['u'];
              }
              elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                echo $_SESSION['ue'];
              }?>" type="text" disabled></label>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="email" class="w-100"><input class="form-control" name="email" id="email" placeholder="Your Email" type="email" required></label>
        </div>
      </div>
      <div class="col-md-4">
            <div class="form-group">
              <select class="form-control form-control-one_room" name="tour_n" id="one_room"> 
                <option value="Galapagos Luxury Cruise">Galapagos Luxury Cruise</option>  
                <option value="Dubai Tour">Dubai Tour</option>  
                <option value="Gujrat Tour">Gujrat Tour</option>  
                <option value="Goa Tour">Goa Tour</option>
                <option value="Trekking In Manali">Trekking In Manali</option>
                <option value="Trekking In Jammu & Kasmir">Trekking In Jammu & Kasmir</option>
                </select>  
            </div>
          </div>
        </div>
    <div class="clearfix" style="padding-bottom: 4%;">
      <button class="btn btn-primary" type="submit" aria-label="post-comment" name="btn_1">Post Message</button>
    </div>
<?php
if((isset($_SESSION['u']) && isset($_SESSION['p'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe'])))
{

if(isset($_POST['btn_1'])){
  
  ?>
  <?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
    $ue=$_SESSION['u'];
  }
  elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
    $ue=$_SESSION['ue'];
  }?><?php
   $ee=@$_POST['email'];
   $tour_q=@$_POST['tour_n'];
   $me=@$_POST['message'];

  $q6="INSERT INTO questions(username,email,tourname,question)VALUES('$ue','$ee','$tour_q','$me')";
  
    $result6=mysqli_query($con,$q6);
      if($result6)
        {
          header("location:index.php");
        }
  }
}
else{
  if(isset($_POST['btn_1'])){
    header("location:login.php");
  }
}
?>
  </form>
</div>
<?php
    }
  }
?>
<!-- </div> -->

<div class="row" style="padding-left: 9%; padding-right: 9%; padding-top: 4%;" >
    <div class="col-md-12">
      <h3 class="column-title">Booking For Tour</h3>
      <form id="contact-form" method="post" role="form">
        <div class="error-container"></div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>User Name</label>
              <input class="form-control form-control" name="book_uname" id="name" value="<?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
                echo $_SESSION['u'];
              }
              elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
                echo $_SESSION['ue'];
              }?>" type="text" disabled>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Email</label>
              <input class="form-control form-control" name="book_email" id="email" placeholder="" type="email" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Contact Number</label>
              <input class="form-control form-control" name="book_cnumber" id="c_number" placeholder="" type="number" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Tour Name</label>
              <input class="form-control form-control" name="book_tour_name" value="<?php echo $tour; ?>" type="text" disabled>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Totel Members</label>
              <input class="form-control form-control" name="book_tmembers" id="t_members" placeholder="" type="number" min="1" required>
            </div>
          </div>
          <!-- <div class="col-md-4">
            <div class="form-group">
              <label>Upload Identity Proof &nbsp &nbsp *pdf</label>
              <input class="btn btn-primary" type="file">
            </div>
          </div> -->
        </div>
        <div class="clearfix" style="padding-bottom: 4%;"><br>
          <button class="btn btn-primary" type="submit" name="book_btn">Check Availability</button>
        </div>
<?php
if((isset($_SESSION['u']) && isset($_SESSION['p'])) || (isset($_SESSION['ue']) && isset($_SESSION['pe'])))
{
if(isset($_POST['book_btn'])){
  ?>
  <?php if(isset($_SESSION['u']) && isset($_SESSION['p'])){
    $book_uname=$_SESSION['u'];
  }
  elseif(isset($_SESSION['ue']) && isset($_SESSION['pe'])){
    $book_uname=$_SESSION['ue'];
  }?><?php
  $book_email=@$_POST['book_email'];
  $book_cnumber=@$_POST['book_cnumber'];
  $book_tour_name=$tour;
  $book_tmembers=@$_POST['book_tmembers'];
  $counter=0;
  $suc=0;

  ?><?php
      $q_booking_data_tour="SELECT * FROM booking_tour WHERE tour_name='$tour'";
      $q_booking_data_tour_r=mysqli_query($con, $q_booking_data_tour);
        if(mysqli_num_rows($q_booking_data_tour_r)>0){ 
          while($row = mysqli_fetch_assoc($q_booking_data_tour_r)){
            $counter += $row['members'];
          }
        }
    ?><?php
    
    $counter += $book_tmembers;
    $q_main_data_totel_member="SELECT `totel_members` FROM `main_tour_data` WHERE tour_name='$tour'";
    $q_main_data_totel_member_r=mysqli_fetch_assoc(mysqli_query($con, $q_main_data_totel_member));
    if((strlen($book_cnumber) == 10) && ($counter<=$q_main_data_totel_member_r['totel_members'])){
      
      $q6="INSERT INTO booking_tour (username, email, contact_number, tour_name, members)VALUES('$book_uname', '$book_email', '$book_cnumber', '$book_tour_name', $book_tmembers)";
    
      $result=mysqli_query($con,$q6);
        if($result)
          {
            $suc=$suc+1;
          }
    }
    else{

    }
    
  
  }
}
else{
  if(isset($_POST['book_btn'])){
    header("location:login.php");
  }
}
?>
      </form>
    </div>

  </div>

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