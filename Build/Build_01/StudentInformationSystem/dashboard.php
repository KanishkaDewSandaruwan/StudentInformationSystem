<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="jq/jq.js" type="text/javascript"></script>

    <!-- load icon -->
    <link rel="icon" type="image/png" href="img/icon/unnamed.png" sizes="300x300" />
<!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/form_css/form.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">

    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">

    <!-- Font awesome link -->
    <link href="fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet"> 
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->

    <script src="js/a.js"></script>
    <script src="js/b.js"></script>
    <script src="js/c.js"></script> 

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/js/npm.js"></script>

    <title>SEUSL Health Center</title>  
  
  </head>
  <body class="a bg-light">
    <!-- ********************** Start Nav Bar ************************ -->

<!-- **********************End Nav Bar & Start Setting Pannel ************************ -->

<!-- **********************Start Body Content Pannel ************************ -->

    <div id="container" class="container-fluid">
      <div class="row">
        <div id="section_bar" class="col-md-2" style="background-color: #0f3460; padding-bottom: 50%;">
    

              <!-- User name display code -->
              <?php $a = $_SESSION['username'];
              echo '<h2 style="font-size:20PX;  color:white; margin-top: 10%;"><b>Welcome!<br>  Hello '.$a.'</b></h2>'; ?>
              <ul class="navbar-nav">
                <div class="dropdown-divider"></div>


<?php 
if($a=='admin'){

?>
<!-- **********************Start Section Pannel ************************ -->
<!--       <li class="nav-item">
          <a class="nav-link mb-1 mt-3" style="font-size: 35px; color: black" href="dashboard.php"><i class="fas fa-house-user"></i> <b>Home</b></a>
      </li> -->

      <!-- ................. Student .................... -->
      <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" style="color: white; font-size: 15px; font-family: \"Times New Roman\", Times, serif;" data-target="#submenu-1-1" aria-controls="submenu-1-1"><i class="fas fa-user-graduate mr-3" style="color:white;  font-size:35px;"></i><b> Student</b></a>

          <div id="submenu-1-1" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-family: \"Times New Roman\", Times, serif;" href="register_student.php">Student Register</a>
                </li>
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-family: \"Times New Roman\", Times, serif;" href="view.php">Student List</a>
                </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Treatment .................... -->
      <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" style="color: white; font-size: 15px; font-family: \"Times New Roman\", Times, serif;" data-target="#submenu-1-17" aria-controls="submenu-1-17"><i class="fas fa-file-medical mr-3" style="color:white; font-size:35px;"></i><b>   Student Treatment</b></a>
          <div id="submenu-1-17" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=16">Add Treatments</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=2">Treatments Details</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Drugs .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-family: \"Times New Roman\", Times, serif;" aria-expanded="false" style="font-size: 15px;"  data-target="#submenu-1-10" aria-controls="submenu-1-10"><i class="fas fa-prescription-bottle-alt mr-3" style="color:white; font-size:35px;"></i><b> Drugs</b></a>
          <div id="submenu-1-10" class="collapse submenu"  style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=17">Add Drugs</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=18">View Drugs List</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

       <!-- ................. Medical Report .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-family: \"Times New Roman\", Times, serif;" aria-expanded="false" style="font-size: 15px;"  data-target="#submenu-1-32" aria-controls="submenu-1-32"><i class="far fa-calendar-check mr-3" style="color:white; font-size:35px;"></i><b>Medical Reports</b></a>
          <div id="submenu-1-32" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=32">Add Medical Report</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=33">View Medical Report</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
       <!-- ................. Doctor .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="dashboard.php" style="font-family: \"Times New Roman\", Times, serif;" data-toggle="collapse" aria-expanded="false" style="font-size: 15px;" data-target="#submenu-1-5s" aria-controls="submenu-1-5s"><i class="fas fa-user-md mr-3" style="color:white; font-size:35px;"></i><b> Doctor</b></a>
          <div id="submenu-1-5s" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=8">Register Doctor</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=1">View Doctor</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Book Store .................... -->

      <!-- ................. Staff .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-family: \"Times New Roman\", Times, serif;" style="font-size: 15px;" aria-expanded="false" data-target="#submenu-1-8" aria-controls="submenu-1-8"><i class="fas fa-users-cog mr-3" style="color:white; font-size:35px;"></i><b>Medical Officers</b></a>
          <div id="submenu-1-8" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=14">View Workers List</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=15">Add Workers</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Settings .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse"style="font-family: \"Times New Roman\", Times, serif;" style="font-size: 15px;" aria-expanded="false" data-target="#submenu-1-31" aria-controls="submenu-1-31"><i class="fas fa-cogs mr-3" style="color:white; font-size:35px;"></i><b>Settings</b></a>
          <div id="submenu-1-31" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-family: \"Times New Roman\", Times, serif;" href="admin_pass.php">Change Password</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-family: \"Times New Roman\", Times, serif;" href="logout.php">Logout</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

<!-- **********************End Admin Section Pannel ************************ -->

<?php } else{?>

<!-- **********************Start Editor Section Pannel ************************ -->

      <li class="nav-item">
          <a class="nav-link mb-1 mt-3" style="font-size: 35px; color: silver" href="dashboard.php"><i class="fas fa-home"></i> <b>Home</b></a>
      </li>
      <!-- ................. Customers .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 15px;" data-target="#submenu-1-1" aria-controls="submenu-1-1"><i class="fas fa-user mr-3" style="color:white; font-size:35px;"></i><b> Customers</b></a>
          <div id="submenu-1-1" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="view.php">Customers List</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Books .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 15px;" data-target="#submenu-1-17" aria-controls="submenu-1-17"><i class="fas fa-file-signature mr-3" style="color:white; font-size:35px;"></i><b>Books</b></a>
          <div id="submenu-1-17" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light"href="dashboard.php?id=16">Add Books</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light"href="dashboard.php?id=2">Books Details</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Books Categories .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 15px;"  data-target="#submenu-1-10" aria-controls="submenu-1-10"><i class="fas fa-clock mr-3" style="color:white; font-size:35px;"></i><b> Books Categories</b></a>
          <div id="submenu-1-10" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=17">Add Categories</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=18">View Categories</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

       <!-- ................. Autor .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 15px;"  data-target="#submenu-1-32" aria-controls="submenu-1-32"><i class="fas fa-user-edit mr-3" style="color:white; font-size:35px;"></i><b>Authors</b></a>
          <div id="submenu-1-32" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=32">Add Authors</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=33">View Authors</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
       <!-- ................. Oders .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="dashboard.php" data-toggle="collapse" aria-expanded="false" style="font-size: 15px;" data-target="#submenu-1-5s" aria-controls="submenu-1-5s"><i class="far fa-calendar-check mr-3" style="color:white; font-size:35px;"></i><b> Oders</b></a>
          <div id="submenu-1-5s" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=8">View Oders</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Book Store .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 15px;" data-target="#submenu-1-6" aria-controls="submenu-1-6"><i class="fas fa-book mr-3" style="color:white; font-size:35px;"></i><b> Book Store</b></a>
          <div id="submenu-1-6" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=10">Add Books for Store</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=10">View Book Store</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Payments.................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 15px;" aria-expanded="false" data-target="#submenu-1-7" aria-controls="submenu-1-7"><i class="fas fa-credit-card mr-3" style="color:white; font-size:35px;"></i><b>Payments</b></a>
          <div id="submenu-1-7" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=12">View Payments</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Settings .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 15px;" aria-expanded="false" data-target="#submenu-1-31" aria-controls="submenu-1-31"><i class="fas fa-cogs mr-3" style="color:white; font-size:35px;"></i><b>Settings</b></a>
          <div id="submenu-1-31" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="editor_pass.php">Change Password</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="editor_username_change.php">Username Change</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="logout.php">Logout</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>


<!-- **********************End Editor Section Pannel ************************ -->

<?php } ?>
            </ul>
        </div>
        <div class="col-md-10 bg-light" style="padding-bottom:2%; padding-top:1%; height: 100%;">
        <div class="col-md-12 bg-light" style="padding-bottom:2%; padding-top:1%;">


          <div class="row justify-content-left pl-4" style="background-color: #0f3460; padding: 2%;  margin-top: -2%; margin-left: -2%; margin-bottom: 5%; border-left: 2px solid white">
            <a style="text-decoration: none; text-transform: uppercase; font-family: \"Times New Roman\",Times, serif;" href="dashboard.php"><h3  class="text-light">Health Center South Eastern University - Dashboard </h3></a>
          </div>
          <div class="row">
            
          
<?php

// <!-- **********************Start Students Treatments View Section Pannel ************************ -->

if(isset($_REQUEST['id']))
{

              $id = $_REQUEST['id'];
               if($id==2)
               {
                $count=1;
                $viewquery = " SELECT * FROM treat";
                $viewresult = mysqli_query($con,$viewquery);

                echo '
                <div class="view_div">
                <h1 class="student_h1"> Student Treatment Details </h1></br>


                <table style="width : 100%;" class="student_table_new"> 
                  <tr>
                    <th style="width : 10%"> Student Registration Number </th>
                    <th style="width : 15%"> Doctor </th>
                    <th style="width : 20%"> Description </th>
                    <th style="width : 20%"> Drug List </th>
                    <th style="width : 10%"> Treated Date </th>
                    <th style="width : 10%"> Medical Report Issue </th>  
                    <th style="width : 8%"> Edit </th>
                    <th style="width : 10%"> Delete </th>  
                  </tr>';

                while($row = mysqli_fetch_assoc($viewresult))
                {
                  $viewquery1 = " SELECT * FROM doctor where did='".$row['doc_id']."'";
                  $viewresult1 = mysqli_query($con,$viewquery1);
                  $row1 = mysqli_fetch_assoc($viewresult1);
                  if (isset($row1['full_name'])) {
                    $name = $row1['full_name'];
                    echo '
                    <tr>
                    <td>'.$row['reg_num'].'</td>
                    <td>'.$name.'</td>
                    <td>'.$row['description'].'</td>
                    <td>'.$row['nb'].'</td>
                    <td>'.$row['trn_date'].'</td>

                    <td><a href="dashboard.php?id=32&tid='.$row['treat_id'].'&sr='.$row['reg_num'].'&doc='.$row1['full_name'].'">Issues</a></td>
                    <td><a href="edit.php?treat_id='.$row['treat_id'].'">Edit</a></td>
                    <td><a href="delete.php?treat_id='.$row['treat_id'].'">Delete</a></td>
                    </tr>';
                  }else{
                    echo '
                    <tr>
                    <td>'.$row['reg_num'].'</td>
                    <td>'.$row['doc_id'].'</td>
                    <td>'.$row['description'].'</td>
                    <td>'.$row['nb'].'</td>
                    <td>'.$row['trn_date'].'</td>

                    <td><a href="dashboard.php?id=32&tid='.$row['treat_id'].'&sr='.$row['reg_num'].'&doc='.$name.'">Issues</a></td>
                    <td><a href="edit.php?treat_id='.$row['treat_id'].'">Edit</a></td>
                    <td><a href="delete.php?treat_id='.$row['treat_id'].'">Delete</a></td>
                    </tr>';
                  }


                  $count++;
                }
                echo '</table> </div>';
              }


// <!-- **********************End Students Treatments View Section Pannel ************************ -->
// <!-- **********************Start Drug View Section Pannel ************************ -->

            $id = $_REQUEST['id'];
              if($id==18)
              {
                $count=1;
                $viewquery = " SELECT * FROM drugs";
                $viewresult = mysqli_query($con,$viewquery);

                echo '
                <div class="view_div">
                <h1 class="student_h1"> Drugs Details </h1></br>


                <table style="width : 100%;" class="student_table_new"> 
                  <tr>
                    <th style="width : 10%"> Drugs Code </th>
                    <th style="width : 10%"> Drugs Name </th>
                    <th style="width : 30%"> Description </th>
                    <th style="width : 10%"> Availability </th>
                    <th style="width : 10%"> Edit </th>
                    <th style="width : 5%"> Delete </th>  
                  </tr>';

                while($row = mysqli_fetch_assoc($viewresult))
                {
                  echo '
                  <tr>
                  <td>'.$row['drug_code'].'</td>
                  <td>'.$row['drugname'].'</td>
                  <td>'.$row['description'].'</td>
                  <td>'.$row['availability'].'</td>

                  <td><a href="edit.php?drug_id='.$row['drug_id'].'">Edit</a></td>
                  <td><a href="delete.php?drug_id='.$row['drug_id'].'">Delete</a></td>
                  </tr>
  
                  ';
                  $count++;
                }
                echo '</table></div>';
              }

// <!-- **********************End Drug View Section Pannel ************************ -->

            
// <!-- **********************Start View Medical officer Section Pannel ************************ -->

            $id = $_REQUEST['id'];
              if($id==14)
              {
                $count=1;
                $viewquery = " SELECT * FROM medical_officer";
                $viewresult = mysqli_query($con,$viewquery);
      

                echo '
                <div class="view_div">
                <h1 class="student_h1"> Medical Offices </h1></br>


                <table class="student_table_new"> 
                  <tr>
                    <th style="width : 15%"> Name </th>
                    <th style="width : 15%"> Address </th>
                    <th style="width : 11%"> Phone Number </th>
                    <th style="width : 10%"> Email </th>
                    <th style="width : 8%"> Gender </th>
                    <th style="width : 10%"> Regi Date </th>
                    <th style="width : 5%"> Edit </th>  
                    <th style="width : 5%"> Delete </th>  
                  </tr>';

                while($row = mysqli_fetch_assoc($viewresult))
                {
                  if(!empty($row['full_name']) && $row['username'] != 'admin'){

                  echo '
                  <tr>
                  <td>'.$row['full_name'].'</td>
                  <td>'.$row['address'].'</td>
                  <td>'.$row['phone_number'].'</td>
                  <td>'.$row['email'].'</td>
                  <td>'.$row['gender'].'</td>
                  <td>'.$row['trndate'].'</td>
                  <td><a href="edit.php?off_id='.$row['office_id'].'">Edit</a></td>
                  <td><a href="delete.php?office_id='.$row['office_id'].'">Delete</a></td>
                  </tr>
                  ';
                  $count++;
                  }
                }
                echo '</table></div>';
              }
// <!-- **********************End View Medical officer Section Pannel ************************ -->
// <!-- **********************Start View Doctor Section Pannel ************************ -->

            $id = $_REQUEST['id'];
              if($id==1)
              {
                $count=1;
                $viewquery = " SELECT * FROM doctor";
                $viewresult = mysqli_query($con,$viewquery);
      

                echo '
                <div class="view_div">
                <h1 class="student_h1"> Doctor Details </h1></br>


                <table class="student_table_new"> 
                  <tr>
                    <th style="width : 15%"> Name </th>
                    <th style="width : 15%"> Address </th>
                    <th style="width : 11%"> Phone Number </th>
                    <th style="width : 10%"> Email </th>
                    <th style="width : 8%"> Gender </th>
                    <th style="width : 10%"> Register Date </th>
                    <th style="width : 5%"> Edit </th>  
                    <th style="width : 5%"> Delete </th>  
                  </tr>';

                while($row = mysqli_fetch_assoc($viewresult))
                {
                  if(!empty($row['full_name']) && $row['username'] != 'admin'){

                  echo '
                  <tr>
                  <td>'.$row['full_name'].'</td>
                  <td>'.$row['address'].'</td>
                  <td>'.$row['phone_number'].'</td>
                  <td>'.$row['email'].'</td>
                  <td>'.$row['gender'].'</td>
                  <td>'.$row['trndate'].'</td>
                  <td><a href="edit.php?doc_id='.$row['did'].'">Edit</a></td>
                  <td><a href="delete.php?doc_id='.$row['did'].'">Delete</a></td>
                  </tr>
                  ';
                  $count++;
                  }
                }
                echo '</table></div>';
              }
// <!-- **********************End View Doctor Section Pannel ************************ -->
// <!-- **********************Start Add Medical Officer Section Pannel ************************ -->

            $id = $_REQUEST['id'];
               if($id==15)
               {


                echo '<form class="reg_form1" action="dashboard.php?id=15" method="POST">
                    <h2 class="form_hed">Register Medical Officer </h2> </br>
                    <div class="form-row">
                      <div class="form-group col-md-6">

                        <label for="name" class="a ml-3"><b>Full Name</b></label>
                        <input type="text" class="form-control ml-3" name="name" placeholder="Full Name">
                      </div>
                      <div class="form-group col-md-5">
                        <label><b>Email</b></label>
                        <input type="text" class="form-control ml-3" name="email" placeholder="Email Address">
                      </div>
                    </div>
                    <div class="form-group col-md-10">
                      <label for="address"><b>Address</b></label>
                      <input type="text" class="form-control"  name="address" placeholder="Address">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone"><b>Phone Number</b></label>
                      <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                    </div>

                      <div class="form-group col-md-4">
                        <label for="inputState"><b>Gender</b></label>
                        <select id="inputState" name="gender" class="form-control">
                          <option selected></option>
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>

                       <div class="form-group col-md-4">
                      <label for="phone"><b>Usename</b></label>
                      <input type="text" style="text-transform: uppercase;" class="form-control" name="uname" placeholder="Password">
                    </div>

                      <div class="form-group col-md-4">
                      <label for="phone"><b>Password</b></label>
                      <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>

                    <div class="form-group col-md-4">
                      <label for="phone"><b>Confirm Password</b></label>
                      <input type="password" class="form-control" name="conf_pass" placeholder="Confirm Password">
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-dark" style="border-radius:20px;">Register</button>
                  ';
                  if(isset($_POST['submit'])){
                    $fname = $_REQUEST['name'];
                    $emails = $_REQUEST['email'];
                    $address = $_REQUEST['address'];
                    $phone = $_REQUEST['phone'];
                    $gender = $_REQUEST['gender'];
                    $uname = $_REQUEST['uname'];
                    $pass = $_REQUEST['pass'];
                    $conf_pass = $_REQUEST['conf_pass'];
                    $cdate = date("Y/m/d");


                    if(!empty($fname)){
                      if(!empty($emails)){
                        if(filter_var($emails, FILTER_VALIDATE_EMAIL)){
                          if(!empty($address)){
                            if(!empty($phone)){
                            if(!empty($gender)){
                              if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                if(!empty($gender)){
                                  if(!empty($uname)){
                                        if(!empty($pass)){
                                          if(!empty($conf_pass)){
                                            if($pass==$conf_pass){
                                                $query2="SELECT * FROM medical_officer WHERE email='$emails'";
                                                    $sql2=mysqli_query($con,$query2);

                                                    if(mysqli_num_rows($sql2)>0){
                                                        echo "<script>alert(\"Email already Exsisted\");</script>";
                                                    }else{
                                                        $query3="SELECT * FROM medical_officer WHERE username='$uname'";
                                                        $sql3=mysqli_query($con,$query3);

                                                        if(mysqli_num_rows($sql3)>0){
                                                            echo "<script>alert(\"Username already Exsisted\");</script>";
                                                        }else{
                                                              $query3="SELECT * FROM doctor WHERE username='$uname'";
                                                              $sql3=mysqli_query($con,$query3);

                                                              if(mysqli_num_rows($sql3)>0){
                                                                  echo "<script>alert(\"Username already Exsisted\");</script>";
                                                              }else{
                                                                    $q1="INSERT INTO medical_officer(full_name,address,phone_number,email,gender,password,username,trndate) values('$fname','$address','$phone','$emails','$gender','".md5($pass)."','$uname','$cdate')";
                                                                          $res1=mysqli_query($con,$q1);
                                                                          if ( $res1) {

                                                                               echo '<script>alert("Medical Officer Registration is Scussessfully.");
                                                                               window.location.href="dashboard.php";
                                                                                            </script>';
                                                                              
                                                                          }else{
                                                                            echo "<script>alert(\"Medical Officer Registration is Not Scussess\");</script>";
                                                                          }
                                                                    }
                                                              }
                                                          }
                                            }else{echo "<script>alert(\"Password is Not Match\");</script>";}
                                          }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";}
                                        }else{ echo "<script>alert(\"Enter Password\");</script>";}
                                  }else{ echo "<script>alert(\"Enter Username\");</script>";}
                                }else{ echo "<script>alert(\"Select Gender\");</script>";}
                              }else {echo "<script>alert(\"Enter Valid Phone Number\");</script>";}
                              }else {echo "<script>alert(\"Select Your Gender\");</script>";}
                            }else{ echo "<script>alert(\"Enter Phone Number\");</script>";}
                          }else{ echo "<script>alert(\"Enter Address\");</script>";}
                        }else {echo "<script>alert(\"Enter Valid Email Address\");</script>";}
                      }else{ echo "<script>alert(\"Enter Email\");</script>";}
                    }else{ echo "<script>alert(\"Enter Full Name\");</script>";} 
                }echo '</form></div>'; //Register Form Validation

            }

// <!-- **********************End Add Medical Officer Section Pannel ************************ -->
// <!-- **********************Start Treatment Add Section Pannel ************************ -->
?>
<style type="text/css">
 .reg_form1_treat{
  width: 50%;
  background-color: #0f3460;
  padding: 5%;
  color: yellow;
  border-radius: 2em;
  font-family: \"Times New Roman\", Times, serif;
  font-size: 18px;
  margin-top: -4%;
 } 

.drug_table{
  width: 49%;
  margin-left: 1%;
  margin-top: -1%;
}

</style>
<?php
             $id = $_REQUEST['id'];
                 $cdate = date("Y/m/d");
               if($id==16)
               {
                


                 echo '<form class="reg_form1_treat"   action="dashboard.php?id=16" method="POST">
                    <h2 class="form_hed">Add Treatment </h2> </br>
                    <div class="form-row">
                      <div class="form-group col-md-10">

                        <label for="title" class="a ml-10"><b>Student Registration Number</b></label>
                        <input type="text" class="form-control ml-3 style="text-transform: uppercase;" value ="SEU/IS/" name="regnum" placeholder="Student Registration Number">
                      </div>
                    </div>

                    <div class="form-group col-md-10">
                        <label for="inputState"><b>Doctor</b></label>
                        <select id="inputState" name="doctor" class="form-control">
                        <option selected></option>
                        ';
                          $q3 = "SELECT * FROM doctor";
                            $res3 = mysqli_query($con,$q3);
                            $c=1;
                            while($row=mysqli_fetch_assoc($res3)){
                              echo "<option>".$row['full_name']."</option>";
                              $c++;
                            }
                        echo '</select>
                      </div>

                    <div class="form-group col-md-10">
                      <label for="desc"><b>Description </b></label>
                      <input type="text" class="form-control" name="desc" placeholder="Description ">
                    </div>

                      <div class="form-group col-md-10">
                      <label for="nb"><b>Drugs List</b></label>
                      <input type="text" class="form-control" name="dlist" placeholder="Drugs List ">
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-primary" style="border-radius:20px; font-size :20px;">Save</button>
                  ';

                 
                  if(isset($_POST['submit'])){
                    $regnum = $_REQUEST['regnum'];
                    $doctor = $_REQUEST['doctor'];
                    $desc = $_REQUEST['desc'];
                    $dlist = $_REQUEST['dlist'];
                    $cdate = date("Y/m/d m:H:s");

                    

                    // echo str_word_count($dlist);

                    function checkDruglist($dlist, $con){

                      $hi = str_word_count($dlist, 1, 'àáãç3');
                      foreach ($hi as $value) {

                          $query2="SELECT * FROM drugs WHERE drug_code='$value'";
                          $sql2=mysqli_query($con,$query2);

                          if(mysqli_num_rows($sql2)>0){
                            return true;
                          }else{
                              echo "<script>alert(\"Drug $value is Not Available. \");</script>";
                            break;
                          }
                      }
                    }
                    
                          if(!empty($regnum)){
                              if(!empty($desc)){
                                if (!empty($dlist)) {

                                    $q4 = "SELECT * FROM doctor WHERE full_name='$doctor'";
                                    $res4 = mysqli_query($con,$q4);
                                    $row2 = mysqli_fetch_assoc($res4);
                                    $doc_id = $row2['did'];

                                            // $query3="SELECT * FROM students WHERE  regnumber='$regnum'";
                                            // $sql3=mysqli_query($con,$query3);

                                            // if(mysqli_num_rows($sql3)>0)
                                            // {

                                              $query3="SELECT * FROM treat WHERE  trn_date='$cdate'";
                                                    $sql3=mysqli_query($con,$query3);

                                                    if(mysqli_num_rows($sql3)>0)
                                                    {
                                                      echo '<script>alert("TThis Treatment Alrady in System");</script>';
                                                    }else{
                                                        if (checkDruglist($dlist,$con) == true) {
  
                                                            $q1="INSERT INTO treat(reg_num,description,nb,trn_date,doc_id) values('$regnum','$desc','$dlist','$cdate','$doc_id')";
                                                            $res1=mysqli_query($con,$q1);

                                                            if ( $res1)
                                                            {
                                                                 echo '<script>alert("Treatment is Saved. Enter Drug List");
                                                                  window.location.href="dashboard.php?id=16";
                                                                  </script>';
                                                                
                                                            }else{
                                                              echo "<script>alert(\"Treatment Save is Not Scussess\");</script>";
                                                            }
                                                        }

                                                    }


                                            // }else{

                                            //   echo '<script>alert("This Student  in System");</script>';
                                                    
                                            // }

                                  }else{ echo "<script>alert(\"Please Enter Drug List\");</script>";}
                                }else{ echo "<script>alert(\"Please Enter Description\");</script>";}
                              }else{ echo "<script>alert(\"Enter Student Registration Number\");</script>";}
                        
                } echo '</form>'; //Register Form Validation
                echo '<div class="drug_table">';


                  $viewquery = " SELECT * FROM drugs";
                  $viewresult = mysqli_query($con,$viewquery);

                  echo '
                  <div class="view_div">
                  <h1 class="student_h1"> Drugs Details </h1></br>


                  <table style="width : 100%;" class="student_table_new"> 
                    <tr>
                      <th style="width : 10%"> Drugs Code </th>
                      <th style="width : 10%"> Drugs Name </th>
                      <th style="width : 30%"> Description </th>
                      <th style="width : 10%"> Availability </th>
                    </tr>';

                  while($row = mysqli_fetch_assoc($viewresult))
                  {
                    echo '
                    <tr>
                    <td>'.$row['drug_code'].'</td>
                    <td>'.$row['drugname'].'</td>
                    <td>'.$row['description'].'</td>
                    <td>'.$row['availability'].'</td>
                    </tr>
    
                    ';
                  }
                  echo '</table></div></div>';

            }
// <!-- **********************End Treatment Add Section Pannel ************************ -->
// <!-- **********************Start Drugs Section Pannel ************************ -->

              $id = $_REQUEST['id'];
              $nowdate = date("Y/m/d");
               if($id==17)
               {
                echo '<form class="reg_form1" action="dashboard.php?id=17" method="POST">
                      <h2 class="form_hed">Add Drugs  </h2> </br>
                      <div class="form-group col-md-6">

                          <div class="form-group col-md-8">
                      <label for="drug_code"><b>Drug Code</label>
                      <input type="text" class="form-control" name="drug_code" placeholder="Drug Code">
                      <label for="drug_code"><b>Use only letters. dont use number or Symbols</label>
                    </div>

                     <div class="form-group col-md-8">
                      <label for="drug_name"><b>Drug Name</label>
                      <input type="text" class="form-control" name="drug_name" placeholder="Drug Name">
                    </div>

                    <div class="form-group col-md-4">
                      <label class="" for="inputState"><b>Availability</b></label>
                      <select id="inputState" name="availble" class="form-control">
                        <option selected>Yes</option>
                        <option>No</option>
                      </select>
                    </div>

                     <div class="form-group col-md-8">
                      <label for="desc"><b>Description</label>
                      <input type="text" class="form-control" name="desc" placeholder="Description">
                    </div>
                    </div>

                    


                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-3 btn-light mt-3" style="border-radius:20px;">Add Recode</button></br>
                  ';
                  if(isset($_POST['submit'])){
                    $drug_code = $_REQUEST['drug_code'];
                    $drug_name = $_REQUEST['drug_name'];
                    $desc = $_REQUEST['desc'];
                    $availble = $_REQUEST['availble'];

                            if(!empty($drug_code)){
                              if(!empty($drug_name)){
                                if(!empty($desc)){
                                  if(preg_match("/([a-zA-Z])/", $drug_code)){
                                    $q4 = "SELECT * FROM drugs WHERE drug_code='$drug_code'";
                                    $res4 = mysqli_query($con,$q4);

                                    if(mysqli_num_rows($res4)>0)
                                    {
                                      echo '<script>alert("This Drug Alrady Saved.");
                                      </script>';
                                    }
                                    else{
                                      $q1="INSERT INTO drugs(drug_code,drugname,description,availability) values('$drug_code','$drug_name','$desc','$availble')";
                                            $res1=mysqli_query($con,$q1);
                                            if ( $res1)
                                            {

                                                 echo '<script>alert("Drugs Saved is Scussessfully.");
                                                  </script>';
                                            }else{
                                              echo "<script>alert(\"Drug Save is Not Scussess\");</script>";
                                            }
                                    }
                                  }else{ echo "<script>alert(\"Enter Drug Code as a Characters. You Cant use Numbers or any Symbols\");</script>";}
                                }else{ echo "<script>alert(\"Enter Description\");</script>";}
                              }else{ echo "<script>alert(\"Enter Drug Name\");</script>";}
                            }else{ echo "<script>alert(\"Enter Drug Code\");</script>";}
                }echo '</form>'; //Register Form Validation

            }

// <!-- **********************End Drugs Section Pannel ************************ -->

// <!-- **********************Start Medical Report Isse Section Pannel ************************ -->

              $id = $_REQUEST['id'];
              
               if($id==32)
               {
                if (isset($_REQUEST['tid'])) {
                  $tid = $_REQUEST['tid'];
                  $sr = $_REQUEST['sr'];
                  $doc = $_REQUEST['doc'];

                  echo '<form class="reg_form1" action="dashboard.php?id=32" method="POST">
                    <h2 class="form_hed">Medical Report Isse </h2> </br>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="regnum" class="a ml-3 mr-3"><b>Registration Number</b></label>
                        <input type="text" class="form-control ml-3" name="regnum" style="text-t" style="text-transform: uppercase;" value ="'.$sr.'" placeholder="Registration Number">
                      </div>

                      <div class="form-group col-md-8">
                        <label><b>Doctor</b></label>
                        <input type="text" class="form-control ml-3" name="doctor" value="'.$doc.'" placeholder="Doctor">
                      </div>

                      <div class="form-group col-md-8">
                        <label><b>Treated ID</b></label>
                        <input type="text" class="form-control ml-3" name="tratid" value="'.$tid.'" placeholder="Treated ID">
                      </div>
                    </div>

                    <div class="form-group col-md-5">
                      <label for="desc"><b>Description</b></label>
                      <input type="text" class="form-control" name="desc" placeholder="Description">
                    </div>


                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-3 btn-light mt-3" style="border-radius:20px;">Add</button>
                  ';
                  if(isset($_POST['submit'])){
                    $regnum = $_REQUEST['regnum'];
                    $doctor = $_REQUEST['doctor'];
                    $tratid = $_REQUEST['tratid'];
                    $desc = $_REQUEST['desc'];
                    $nowdate = date("Y/m/d");

                    $q4 = "SELECT * FROM doctor WHERE full_name='$doctor'";
                    $res4 = mysqli_query($con,$q4);
                    $row2 = mysqli_fetch_assoc($res4);
                    $doctID = $row2['did'];

                    if(!empty($regnum)){
                      if(!empty($tratid)){
                            if(!empty($desc)){
                              if(!empty($doctor)){
     
                                        $query3="SELECT * FROM medical_issue WHERE treat_id='$tratid'";
                                        $sql3=mysqli_query($con,$query3);

                                        if(mysqli_num_rows($sql3)>0){
                                            echo "<script>alert(\"Your already Issuesed\");</script>";
                                        }else{


                                          $query3="SELECT * FROM students WHERE regnumber='$regnum'";
                                            $sql3=mysqli_query($con,$query3);

                                            if(mysqli_num_rows($sql3)>0)
                                            {

                                                  $q1="INSERT INTO medical_issue(reg_num,doctor,treat_id,description,trn_date) values('$regnum','$doctID','$tratid','$desc','$nowdate')";
                                                        $res1=mysqli_query($con,$q1);
                                                        if ( $res1) {

                                                             echo '<script>alert("Medical Report Issuesed Scussessfully.");
                                                             window.location.href="dashboard.php?id=32";
                                                                          </script>';
                                                            
                                                        }else{
                                                          echo "<script>alert(\"Medical Report Issues is Not Scussess\");</script>";
                                                        }

                                              }else{

                                                echo '<script>alert("This Student Not in System");</script>';
                                                      
                                             }
                                            }
                                   
                          }else {echo "<script>alert(\"Select the doctor\");</script>";}
                        }else {echo "<script>alert(\"Enter Description\");</script>";}
                      }else{ echo "<script>alert(\"Enter Treat ID\");</script>";}
                    }else{ echo "<script>alert(\"Enter Registration Number\");</script>";} 
                }echo '</form></div>'; //Register Form Validation



                }else{



                echo '<form class="reg_form1" action="dashboard.php?id=32" method="POST">
                    <h2 class="form_hed">Medical Report Isse </h2> </br>

                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="regnum" class="a ml-3 mr-3"><b>Registration Number</b></label>
                        <input type="text" class="form-control ml-3" name="regnum" placeholder="Registration Number">
                      </div>

                      <div class="form-group col-md-4 ml-4">
                        <label for="inputState"><b>Doctor</b></label>
                        <select id="inputState" name="doctor" class="form-control">
                        <option selected></option>
                        ';
                          $q3 = "SELECT * FROM doctor";
                            $res3 = mysqli_query($con,$q3);
                            $c=1;
                            while($row=mysqli_fetch_assoc($res3)){
                              echo "<option>".$row['full_name']."</option>";
                              $c++;
                            }
                        echo '</select>
                      </div>

                      <div class="form-group col-md-8">
                        <label><b>Treated ID</b></label>
                        <input type="text" class="form-control ml-3" name="tratid" placeholder="Description">
                      </div>
                    </div>

                    <div class="form-group col-md-5">
                      <label for="desc"><b>Description</b></label>
                      <input type="text" class="form-control" name="desc" placeholder="Description">
                    </div>


                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-3 btn-light mt-3" style="border-radius:20px;">Add</button>
                  ';
                  if(isset($_POST['submit'])){
                    $regnum = $_REQUEST['regnum'];
                    $doctor = $_REQUEST['doctor'];
                    $tratid = $_REQUEST['tratid'];
                    $desc = $_REQUEST['desc'];
                    $nowdate = date("Y/m/d");

                    $q4 = "SELECT * FROM doctor WHERE full_name='$doctor'";
                    $res4 = mysqli_query($con,$q4);
                    $row2 = mysqli_fetch_assoc($res4);
                    $doctID = $row2['did'];

                    if(!empty($regnum)){
                      if(!empty($tratid)){
                            if(!empty($desc)){
                              if(!empty($doctor)){
     
                                        $query3="SELECT * FROM medical_issue WHERE treat_id='$tratid'";
                                        $sql3=mysqli_query($con,$query3);

                                        if(mysqli_num_rows($sql3)>0){
                                            echo "<script>alert(\"Your already Issuesed\");</script>";
                                        }else{


                                          $query3="SELECT * FROM students WHERE regnumber='$regnum'";
                                            $sql3=mysqli_query($con,$query3);

                                            if(mysqli_num_rows($sql3)>0)
                                            {

                                                  $q1="INSERT INTO medical_issue(reg_num,doctor,treat_id,description,trn_date) values('$regnum','$doctID','$tratid','$desc','$nowdate')";
                                                        $res1=mysqli_query($con,$q1);
                                                        if ( $res1) {

                                                             echo '<script>alert("Medical Report Issuesed Scussessfully.");
                                                             window.location.href="dashboard.php?id=32";
                                                                          </script>';
                                                            
                                                        }else{
                                                          echo "<script>alert(\"Medical Report Issues is Not Scussess\");</script>";
                                                        }

                                              }else{

                                                echo '<script>alert("This Student Not in System");</script>';
                                                      
                                             }
                                            }
                                   
                          }else {echo "<script>alert(\"Select the doctor\");</script>";}
                        }else {echo "<script>alert(\"Enter Description\");</script>";}
                      }else{ echo "<script>alert(\"Enter Treat ID\");</script>";}
                    }else{ echo "<script>alert(\"Enter Registration Number\");</script>";} 
                }echo '</form></div>'; //Register Form Validation

                }
            }

// <!-- **********************End Medical Report Isse Section Pannel ************************ -->
// <!-- **********************Start Doctor Section Pannel ************************ -->
            $id = $_REQUEST['id'];
               if($id==8)
               {


                echo '<form class="reg_form1" action="dashboard.php?id=8" method="POST">
                    <h2 class="form_hed">Doctor Registration </h2> 
                    <div class="form-row">
                      <div class="form-group col-md-6">



                        <label for="name" class="a ml-3"><b>Full Name</b></label>
                        <input type="text" class="form-control ml-3" name="name" placeholder="Full Name">
                      </div>
                      <div class="form-group col-md-5">
                        <label><b>Email</b></label>
                        <input type="text" class="form-control ml-3" name="email" placeholder="Email Address">
                      </div>
                    </div>
                    <div class="form-group col-md-10">
                      <label for="address"><b>Address</b></label>
                      <input type="text" class="form-control"  name="address" placeholder="Address">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone"><b>Phone Number</b></label>
                      <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                    </div>

                      <div class="form-group col-md-4">
                        <label for="inputState"><b>Gender</b></label>
                        <select id="inputState" name="gender" class="form-control">
                          <option selected placeholder="...Select ...."></option>
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>

                       <div class="form-group col-md-4">
                      <label for="phone"><b>Usename</b></label>
                      <input type="text" style="text-transform: uppercase;" class="form-control" name="uname" placeholder="Password">
                    </div>

                      <div class="form-group col-md-4">
                      <label for="phone"><b>Password</b></label>
                      <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>

                    <div class="form-group col-md-4">
                      <label for="phone"><b>Confirm Password</b></label>
                      <input type="password" class="form-control" name="conf_pass" placeholder="Confirm Password">
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-4 btn-light" style="border-radius:20px;">Register</button>
                  ';
                  if(isset($_POST['submit'])){
                    $fname = $_REQUEST['name'];
                    $emails = $_REQUEST['email'];
                    $address = $_REQUEST['address'];
                    $phone = $_REQUEST['phone'];
                    $gender = $_REQUEST['gender'];
                    $uname = $_REQUEST['uname'];
                    $pass = $_REQUEST['pass'];
                    $conf_pass = $_REQUEST['conf_pass'];
                    $nowdate = date("Y/m/d");


                    if(!empty($fname)){
                      if(!empty($emails)){
                        if(filter_var($emails, FILTER_VALIDATE_EMAIL)){
                          if(!empty($address)){
                            if(!empty($phone)){
                            if(!empty($gender)){
                              if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                if(!empty($gender)){
                                  if(!empty($uname)){
                                        if(!empty($pass)){
                                          if(!empty($conf_pass)){
                                            if($pass==$conf_pass){
                                                $query2="SELECT * FROM doctor WHERE email='$emails'";
                                                    $sql2=mysqli_query($con,$query2);

                                                    if(mysqli_num_rows($sql2)>0){
                                                        echo "<script>alert(\"Email already Exsisted\");</script>";
                                                    }else{
                                                        $query3="SELECT * FROM medical_officer WHERE username='$uname'";
                                                        $sql3=mysqli_query($con,$query3);

                                                        if(mysqli_num_rows($sql3)>0){
                                                            echo "<script>alert(\"Username already Exsisted\");</script>";
                                                        }else{
                                                              $query3="SELECT * FROM medical_officer WHERE username='$phone'";
                                                              $sql3=mysqli_query($con,$query3);

                                                              if(mysqli_num_rows($sql3)>0){
                                                                  echo "<script>alert(\"Username already Exsisted\");</script>";
                                                              }else{
                                                                    $q1="INSERT INTO doctor(full_name,address,phone_number,email,gender,password,username,  trndate) values('$fname','$address','$phone','$emails','$gender','".md5($pass)."','$uname','$nowdate')";
                                                                          $res1=mysqli_query($con,$q1);
                                                                          if ( $res1) {

                                                                               echo '<script>alert("Doctor Registration is Scussessfully.");
                                                                               window.location.href="dashboard.ph?id=8";
                                                                                            </script>';
                                                                              
                                                                          }else{
                                                                            echo "<script>alert(\"Doctor Registration is Not Scussess\");</script>";
                                                                          }
                                                                    }
                                                              }
                                                          }
                                            }else{echo "<script>alert(\"Password is Not Match\");</script>";}
                                          }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";}
                                        }else{ echo "<script>alert(\"Enter Password\");</script>";}
                                  }else{ echo "<script>alert(\"Enter Username\");</script>";}
                                }else{ echo "<script>alert(\"Select Gender\");</script>";}
                              }else {echo "<script>alert(\"Enter Valid Phone Number\");</script>";}
                              }else {echo "<script>alert(\"Select Your Gender\");</script>";}
                            }else{ echo "<script>alert(\"Enter Phone Number\");</script>";}
                          }else{ echo "<script>alert(\"Enter Address\");</script>";}
                        }else {echo "<script>alert(\"Enter Valid Email Address\");</script>";}
                      }else{ echo "<script>alert(\"Enter Email\");</script>";}
                    }else{ echo "<script>alert(\"Enter Full Name\");</script>";} 
                }echo '</form>'; //Register Form Validation

            }


// <!-- **********************End Doctor Section Pannel ************************ -->
// <!-- **********************Start Medical ReportSection Pannel ************************ -->



            $id = $_REQUEST['id'];
              if($id==33)

              {
                $count=1;
                $viewquery = " SELECT * FROM medical_issue";
                $viewresult = mysqli_query($con,$viewquery);

                echo '
                <div class="view_div">
                <h1 class="student_h1"> Medical Report Details </h1></br>


                <table class="student_table_new" style="width : 100%;"> 
                  <tr>
                    <th style="width : 15%"> Registration Number </th>
                    <th style="width : 20%"> Doctor </th>
                    <th style="width : 8%"> Treated ID </th>  
                    <th style="width : 25%"> Description </th>  
                    <th style="width : 10%"> Issue Date </th>  
                    <th style="width : 8%"> Edit </th>  
                    <th style="width : 10%"> Delete </th>  
                  </tr>';

                while($row = mysqli_fetch_assoc($viewresult))
                {
                    $q4 = "SELECT * FROM doctor WHERE did='".$row['doctor']."'";
                    $res4 = mysqli_query($con,$q4);
                    $row2 = mysqli_fetch_assoc($res4);

                    if (isset($row2['full_name'])) {
                    $doctname = $row2['full_name'];
                      echo '
                      <tr>
                      <td>'.$row['reg_num'].'</td>
                      <td>'.$doctname.'</td>
                      <td>'.$row['treat_id'].'</td>
                      <td>'.$row['description'].'</td>
                      <td>'.$row['trn_date'].'</td>
                      <td><a href="edit.php?medical_issu='.$row['medicai_issue_id'].'">Edit</a></td>
                      <td><a href="delete.php?medical_issu='.$row['medicai_issue_id'].'">Delete</a></td>
                      </tr>
                      ';
                    }else{
                      echo '
                      <tr>
                      <td>'.$row['reg_num'].'</td>
                      <td>'.$row['doctor'].'</td>
                      <td>'.$row['treat_id'].'</td>
                      <td>'.$row['description'].'</td>
                      <td>'.$row['trn_date'].'</td>
                      <td><a href="edit.php?medical_issu='.$row['medicai_issue_id'].'">Edit</a></td>
                      <td><a href="delete.php?medical_issu='.$row['medicai_issue_id'].'">Delete</a></td>
                      </tr>
                      ';
                    }
                  $count++;
                }
                echo '</table></div>';
              }

// <!-- **********************End Medical Report Section Pannel ************************ -->
}else{ 
// <!-- **********************Start Pie Chart Section Pannel ************************ -->

  ?>
<?php
  $viewquery1 = "SELECT * FROM book_cat";
  $viewresult1 = mysqli_query($con,$viewquery1);

 

  ?>
  <h2>Books Summery</h2>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['Task', 'Hours per Day'],

<?php while($row = mysqli_fetch_assoc($viewresult1)){
       $viewquery = " SELECT * FROM books where cat_id = '".$row['cat_id']."'";
      $viewresult = mysqli_query($con,$viewquery);
      $stddata = mysqli_num_rows($viewresult);

        echo "
          ['".$row['cat_name']."',  ".$stddata."],
"; } ?>
        ]);

        var options = {
          title: 'Books Summery Details'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
<div class="col-md-10" id="piechart" style=" height: 30vw; float: left;"></div>

// <!-- **********************End Pie Chart Section Pannel ************************ -->

<?php } ?>

<style type="text/css">
  form.reg_form{
    width: 100%;
    margin-top: 2%;
    background-color: gray;
    border-radius: 35px;
    padding: 35px;
  }
  form.reg_form label{
    font-size: 20px;

  }
  form.reg_form input{
    font-size: 20px;
  }


</style>
</div>
        </div>
      </div>
    </div>
 </div>
<!-- **********************End Body Content Pannel ************************ -->
  </body>
</html>