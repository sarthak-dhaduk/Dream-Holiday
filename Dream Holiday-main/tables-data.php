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
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Registration Table...</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">User</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Category</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $q2="SELECT * FROM register";
                  $qr2=mysqli_query($con, $q2);
                  if(mysqli_num_rows($qr2)>0){
                    while($row = mysqli_fetch_assoc($qr2)){
                      
                      ?>
                  <tr>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['user'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td>
                      <div class="pt-2">
                        <a href="edit_registered_user.php?username=<?php echo $row['username'];?>&category=<?php echo $row['user'];?>" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                        <a href="delete_register.php?username=<?php echo $row['username'];?>&category=<?php echo $row['user'];?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                      </div>
                    </td>
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
              <!-- End Table with stripped rows -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Main Tour Details</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Totel Members</th>
                    <th scope="col">Tour Photo</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_main_tour_data="SELECT * FROM main_tour_data";
                  $q_main_tour_data_r=mysqli_query($con, $q_main_tour_data);
                  if(mysqli_num_rows($q_main_tour_data_r)>0){
                    while($row = mysqli_fetch_assoc($q_main_tour_data_r)){
                ?>
                  <tr>
                    <td><?php echo $row['tour_name'];?></td>
                    <td><?php echo $row['category'];?></td>
                    <td><?php echo $row['totel_members'];?></td>
                    <td><?php echo $row['tour_photo'];?></td>
                    <td>
                    <div class="pt-2">
                      <a href="admin_delete_main_tour.php?tourname=<?php echo $row['tour_name'];?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                    </td>
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


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Normal Details Of Tour</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Departure Place</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Return Time</th>
                    <th scope="col">Return Place</th>
                    <th scope="col">Pricing</th>
                    <th scope="col">Pricing Status</th>
                    <th scope="col">Days</th>
                    <th scope="col">Select Tage</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_normal_data_tour="SELECT * FROM normal_data_tour";
                  $q_normal_data_tour_r=mysqli_query($con, $q_normal_data_tour);
                  if(mysqli_num_rows($q_normal_data_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_normal_data_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['tour_name'];?></td>
                    <td><?php echo $row['departure_date'];?></td>
                    <td><?php echo $row['departure_time'];?></td>
                    <td><?php echo $row['departure_place'];?></td>
                    <td><?php echo $row['return_date'];?></td>
                    <td><?php echo $row['return_time'];?></td>
                    <td><?php echo $row['return_place'];?></td>
                    <td><?php echo $row['pricing'];?></td>
                    <td><?php echo $row['pricing_status'];?></td>
                    <td><?php echo $row['days'];?></td>
                    <td><?php echo $row['select_tage'];?></td>
                    <td>
                    <div class="pt-2">
                    <a href="admin_tour_create_edit.php" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                    </div>
                    </td>
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

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hotel Details Of Tour</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tour Name</th>
                    <th scope="col">City Name</th>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Night</th>
                    <th scope="col">Reach Date</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_hotel_data_tour="SELECT * FROM hotel_details";
                  $q_hotel_data_tour_r=mysqli_query($con, $q_hotel_data_tour);
                  if(mysqli_num_rows($q_hotel_data_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_hotel_data_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['no'];?></td>
                    <td><?php echo $row['tourname'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td><?php echo $row['hotel'];?></td>
                    <td><?php echo $row['night'];?></td>
                    <td><?php echo $row['reach_date'];?></td>
                    <td>
                    <div class="pt-2">
                    <a href="admin_hotel_data_edit.php" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                    <a href="admin_hotel_data_delete.php" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                    </td>
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


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Booking Details Of Tour</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Members</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_booking_data_tour="SELECT * FROM booking_tour";
                  $q_booking_data_tour_r=mysqli_query($con, $q_booking_data_tour);
                  if(mysqli_num_rows($q_booking_data_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_booking_data_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['contact_number'];?></td>
                    <td><?php echo $row['tour_name'];?></td>
                    <td><?php echo $row['members'];?></td>
                    <td>
                    <div class="pt-2">
                    <a href="admin_bookibg_data_edit.php" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                    <a href="admin_booking_data_delete.php?user=<?php echo $row['username'];?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                    </td>
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


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tour Related User's Questions</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Messages</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_messages="SELECT * FROM questions";
                  $q_messages_r=mysqli_query($con, $q_messages);
                  if(mysqli_num_rows($q_messages_r)>0){
                    while($row = mysqli_fetch_assoc($q_messages_r)){
                ?>
                  <tr>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['tourname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['question'];?></td>
                    <td>
                    <div class="pt-2">
                      <a href="delete_question.php?user=<?php echo $row['username'];?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                    </td>
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



          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Created Tour By Creaters</h5>
              <table class="table table-hover">
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
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_create_tour="SELECT * FROM `tour_creater`";
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
                    <td>
                    <div class="pt-2">
                    <a href="admin_edit_creater_tour.php?oz=<?php echo $row['organizer_name'];?>" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                    <a href="admin_delete_creater_tour.php?oz=<?php echo $row['organizer_name'];?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                    </td>
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




          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hotel Details Of Creaters Tour</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Place Name</th>
                    <th scope="col">Members Of One Room</th>
                    <th scope="col">Hotel Details</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_hotel_create_tour="SELECT * FROM `hotel_details_create_tour`";
                  $q_hotel_create_tour_r=mysqli_query($con, $q_hotel_create_tour);
                  if(mysqli_num_rows($q_hotel_create_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_hotel_create_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['tour_name'];?></td>
                    <td><?php echo $row['date_sdu'];?></td>
                    <td><?php echo $row['place_name'];?></td>
                    <td><?php echo $row['one_room'];?></td>
                    <td><?php echo $row['hotel_link'];?></td>
                    <td>
                    <div class="pt-2">
                    <a href="admin_edit_hotel_creater_tour.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                    <a href="admin_delete_hotel_creater_tour.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                    </td>
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




          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Reviews & Rating</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Reviews</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_hotel_create_tour="SELECT * FROM `review_rating`";
                  $q_hotel_create_tour_r=mysqli_query($con, $q_hotel_create_tour);
                  if(mysqli_num_rows($q_hotel_create_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_hotel_create_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['tour'];?></td>
                    <td><?php echo $row['post_date'];?></td>
                    <td><?php echo $row['rating'];?></td>
                    <td><?php echo $row['review'];?></td>
                    <td>
                    <div class="pt-2">
                    <a href="review_rsting_admin_delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                    </td>
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



          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Contact Details</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Messages</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $q_admin_contact_tour="SELECT * FROM `contact`";
                  $q_admin_contact_tour_r=mysqli_query($con, $q_admin_contact_tour);
                  if(mysqli_num_rows($q_admin_contact_tour_r)>0){
                    while($row = mysqli_fetch_assoc($q_admin_contact_tour_r)){
                ?>
                  <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['subject'];?></td>
                    <td><?php echo $row['message'];?></td>
                    <td>
                    <div class="pt-2">
                    <a href="contact_data_admin_delete.php?name=<?php echo $row['name'];?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                    </td>
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