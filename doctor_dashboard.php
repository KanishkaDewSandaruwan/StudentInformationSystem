<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="jq/jq.js" type="text/javascript"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/doctor/doc1.css">
<script type="text/javascript" src="js/doc.js"></script>

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
	<title>SEUSL Health Center- Doctor</title>
</head>
<body style="font-family: \"Times New Roman\",Times, serif;">
	<div class="container-fluid">
		
<!-- 		<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div> -->
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation" style="background-color: #0f3460; margin-top: 0.5%; border-radius: 1em;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header col-md-12">
        <div class="row justify-content-left mt-4 pl-4">
            <a style="text-decoration: none; text-transform: uppercase; font-family: \"Times New Roman\",Times, serif;" href="doctor_dashboard.php"><h1  class="text-light">Health Center South Eastern University - Dashboard </h1></a>
          </div>s
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <i style="color: white; font-size: 40px;" class="fas fa-bars"></i>
            </button>
        </div>

        
        

        
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">

              <!-- User name display code -->
              <?php 
                if (isset($_SESSION['doctor'])) {
                  $a = $_SESSION['doctor'];
                  echo '<h2 style="font-size:20PX; margin-left:3%; color:white; margin-top: 10%;"><b>Welcome!<br>  Hello '.$a.'</b></h2>'; 

                } ?>
              <div class="dropdown-divider"></div>
              
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_dashboard.php">Doctor Dashboard</a>
                </li>
                  <div class="dropdown-divider"></div>
      <li class="nav-item ml-4">
          <a class="" href="doctor_search.php"style="color: white; font-size: 18px; margin-left: -5%; font-family: \"Times New Roman\", Times, serif;" ><i class="fab fa-searchengin mr-3" style="color:white;  font-size:35px;"></i><b> Student Search</b></a>
      </li>

      <li class="nav-item ml-4">
          <a class="" href="#" data-toggle="collapse" aria-expanded="false" style="color: white; font-size: 18px; margin-left: -5%; font-family: \"Times New Roman\", Times, serif;" data-target="#submenu-1-1" aria-controls="submenu-1-1"><i class="fas fa-user-graduate mr-3" style="color:white;  font-size:35px;"></i><b> Student</b></a>

          <div id="submenu-1-1" class="collapse submenu" style="">
              <ul class="nav flex-column">
                
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_view.php">Student List</a>
                </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Treatment .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" style="color: white; font-size: 18px; font-family: \"Times New Roman\", Times, serif;" data-target="#submenu-1-17" aria-controls="submenu-1-17"><i class="fas fa-file-medical mr-3" style="color:white; font-size:35px;"></i><b>   Student Treatment</b></a>
          <div id="submenu-1-17" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_dashboard.php?id=16">Add Treatments</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_dashboard.php?id=2">Treatments Details</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Drugs .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif; " aria-expanded="false"  data-target="#submenu-1-10" aria-controls="submenu-1-10"><i class="fas fa-prescription-bottle-alt mr-3" style="color:white; font-size:35px;"></i><b> Drugs</b></a>
          <div id="submenu-1-10" class="collapse submenu"  style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_dashboard.php?id=18">View Drugs List</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

       <!-- ................. Medical Report .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" aria-expanded="false" style="font-size: 15px;"  data-target="#submenu-1-32" aria-controls="submenu-1-32"><i class="far fa-calendar-check mr-3" style="color:white; font-size:35px;"></i><b>Medical Reports</b></a>
          <div id="submenu-1-32" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_dashboard.php?id=32">Add Medical Report</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_dashboard.php?id=33">View Medical Report</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
       <!-- ................. Doctor .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="dashboard.php" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" data-toggle="collapse" aria-expanded="false" style="font-size: 15px;" data-target="#submenu-1-5s" aria-controls="submenu-1-5s"><i class="fas fa-user-md mr-3" style="color:white; font-size:35px;"></i><b> Doctor</b></a>
          <div id="submenu-1-5s" class="collapse submenu" style="">
              <ul class="nav flex-column">
                

                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_dashboard.php?id=1">View Doctor</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>



      <!-- ................. Settings .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="#" data-toggle="collapse"style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" style="font-size: 15px;" aria-expanded="false" data-target="#submenu-1-31" aria-controls="submenu-1-31"><i class="fas fa-cogs mr-3" style="color:white; font-size:35px;"></i><b>Settings</b></a>
          <div id="submenu-1-31" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_pass.php">Change Password</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_username_change.php">Change Username</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="logout.php">Logout</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content" style="background-color: white; border: none; width: 100%;">
                    <!-- <div class="row" style="background-color: white;"> -->
            
          
                  <?php

                  // <!-- **********************Start Students Treatments View Section Pannel ************************ -->

                  if(isset($_REQUEST['id']))
                  {

                                $id = $_REQUEST['id'];
                                 if($id==2)
                                 {

                                  if (isset($_POST['submit'])) {

                                    $search = $_REQUEST['search_box'];
                                    
                                      $count=1;
                                      $viewquery = " SELECT * FROM treat where reg_num = '".$search."'";
                                      $viewresult = mysqli_query($con,$viewquery);

                                      echo '
                                      <div class="view_div">
                                      <a style="text-decoration: none; color :white;" href="doctor_dashboard.php?id=2"><h1 class="student_h1"> Student Treatment Details </h1></br></a>



                                      <table style="width : 100%;" class="student_table_new"> 
                                        <tr>
                                          <th style="width : 15%"> Student Registration Number </th>
                                          <th style="width : 20%"> Doctor </th>
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

                                          <td><a href="doctor_dashboard.php?id=32&tid='.$row['treat_id'].'&sr='.$row['reg_num'].'&doc='.$row1['full_name'].'">Issues</a></td>
                                          <td><a href="doctor_edit.php?treat_id='.$row['treat_id'].'">Edit</a></td>
                                          <td><a href="doctor_delete.php?treat_id='.$row['treat_id'].'">Delete</a></td>
                                          </tr>';
                                        }else{
                                          echo '
                                          <tr>
                                          <td>'.$row['reg_num'].'</td>
                                          <td>'.$row['doc_id'].'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['nb'].'</td>
                                          <td>'.$row['trn_date'].'</td>

                                          <td><a href="doctor_dashboard.php?id=32&tid='.$row['treat_id'].'&sr='.$row['reg_num'].'&doc='.$name.'">Issues</a></td>
                                          <td><a href="doctor_edit.php?treat_id='.$row['treat_id'].'">Edit</a></td>
                                          <td><a href="doctor_delete.php?treat_id='.$row['treat_id'].'">Delete</a></td>
                                          </tr>';
                                        }


                                        $count++;
                                      }
                                      echo '</table> </div>';



                                  }else{


                                      $count=1;
                                      $viewquery = " SELECT * FROM treat";
                                      $viewresult = mysqli_query($con,$viewquery);

                                      echo '
                                      <div class="view_div">
                                      <a style="text-decoration: none; color :white;" href="doctor_dashboard.php?id=2"><h1 class="student_h1"> Student Treatment Details </h1></br></a>


                                      <table style="width : 100%;" class="student_table_new"> 
                                        <tr>
                                          <th style="width : 15%"> Student Registration Number </th>
                                          <th style="width : 20%"> Doctor </th>
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

                                          <td><a href="doctor_dashboard.php?id=32&tid='.$row['treat_id'].'&sr='.$row['reg_num'].'&doc='.$row1['full_name'].'">Issues</a></td>
                                          <td><a href="doctor_edit.php?treat_id='.$row['treat_id'].'">Edit</a></td>
                                          <td><a href="doctor_delete.php?treat_id='.$row['treat_id'].'">Delete</a></td>
                                          </tr>';
                                        }else{
                                          echo '
                                          <tr>
                                          <td>'.$row['reg_num'].'</td>
                                          <td>'.$row['doc_id'].'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['nb'].'</td>
                                          <td>'.$row['trn_date'].'</td>

                                          <td><a href="doctor_dashboard.php?id=32&tid='.$row['treat_id'].'&sr='.$row['reg_num'].'&doc='.$name.'">Issues</a></td>
                                          <td><a href="doctor_edit.php?treat_id='.$row['treat_id'].'">Edit</a></td>
                                          <td><a href="doctor_delete.php?treat_id='.$row['treat_id'].'">Delete</a></td>
                                          </tr>';
                                        }


                                        $count++;
                                      }
                                      echo '</table>';

                                  }

                                  echo '<form class="form-inline col-6 mt-5" action="doctor_dashboard.php?id=2" method="POST">
                                          <input class="form-control form-control-sm ml-3 w-50" name="search_box" type="text" placeholder="Search"
                                            aria-label="Search">
                                          <button type="submit" name="submit" class="btn col-2 btn-rounded btn-dark ml-5">Search</button>
                                        </form> </div>';

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
                                    $count++;
                                  }
                                  echo '</table></div>';
                                }

                  // <!-- **********************End Drug View Section Pannel ************************ -->

                              
                 
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
                                    </tr>
                                    ';
                                    $count++;
                                    }
                                  }
                                  echo '</table></div>';
                                }
                  // <!-- **********************End View Doctor Section Pannel ************************ -->
                  
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
                    float: left;
                   } 
                  .drug_table{
                    width: 49%;
                    margin-left: 1%;
                    margin-top: -1%;
                    float: right;
                  }

                  </style>
                  <?php
                               $id = $_REQUEST['id'];
                                   $cdate = date("Y/m/d");
                                 if($id==16)
                                 {
                                  


                                   echo '<form class="reg_form1_treat"   action="doctor_dashboard.php?id=16" method="POST">
                                      <h2 class="form_hed">Add Treatment </h2> </br>

                                      <div class="form-row">
                                        <div class="form-group col-md-10">
                                          <label for="title" class="a ml-10"><b>Student Registration Number</b></label>
                                          <input type="text" class="form-control" style="text-transform: uppercase;" value ="SEU/IS/" name="regnum" placeholder="Student Registration Number">
                                        </div>
                                      </div>

                                      <div class="form-row">
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
                                        </div>

                                      <div class="form-row">
                                      <div class="form-group col-md-10">
                                        <label for="desc"><b>Description </b></label>
                                        <input type="text" class="form-control" name="desc" placeholder="Description ">
                                      </div>
                                      </div>


                                      <div class="form-row">
                                        <div class="form-group col-md-10">
                                        <label for="nb"><b>Drugs List</b></label>
                                        <input type="text" class="form-control" name="dlist" placeholder="Drugs List ">
                                      </div>
                                     </div>

                                    <div class="dropdown-divider"></div>
                                    <div class="form-row">
                                      <button type="submit" name="submit" class="btn col-md-8 btn-light" style="border-radius:20px; font-size :20px;">Add Treatment</button>
                                     </div>
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
                                                                                    window.location.href="doctor_dashboard.php?id=16";
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

                  // <!-- **********************Start Medical Report Isse Section Pannel ************************ -->

                                $id = $_REQUEST['id'];
                                
                                 if($id==32)
                                 {
                                  if (isset($_REQUEST['tid'])) {
                                    $tid = $_REQUEST['tid'];
                                    $sr = $_REQUEST['sr'];
                                    $doc = $_REQUEST['doc'];

                                    echo '<form class="reg_form1" style="padding-bottom:100px;" action="doctor_dashboard.php?id=32" method="POST">
                                      <h2 class="form_hed">Medical Report Isse </h2> </br>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="regnum" class="a ml-3 mr-3"><b>Registration Number</b></label>
                                            <input type="text" class="form-control ml-3" name="regnum" style="text-t" style="text-transform: uppercase;" value ="'.$sr.'" placeholder="Registration Number">
                                          </div>
                                        </div>

                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label><b>Doctor</b></label>
                                            <input type="text" class="form-control ml-3" name="doctor" value="'.$doc.'" placeholder="Doctor">
                                          </div>
                                        </div>

                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label><b>Treated ID</b></label>
                                            <input type="text" class="form-control ml-3" name="tratid" value="'.$tid.'" placeholder="Treated ID">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="desc"><b>Description</b></label>
                                          <input type="text" class="form-control" name="desc" placeholder="Description">
                                      </div>
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
                                                                               window.location.href="doctor_dashboard.php?id=32";
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



                                  echo '<form class="reg_form1" style="padding-bottom : 100px;" action="doctor_dashboard.php?id=32" method="POST">
                                      <h2 class="form_hed">Medical Report Isse </h2> </br>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="regnum" class="a ml-3 mr-3"><b>Registration Number</b></label>
                                          <input type="text" class="form-control" name="regnum" placeholder="Registration Number">
                                        </div>
                                        </div>

                                        <div class="form-row">
                                        <div class="form-group col-md-6">
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
                                        </div>


                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label><b>Treated ID</b></label>
                                          <input type="text" class="form-control" name="tratid" placeholder="Description">
                                        </div>
                                      </div>


                                      <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="desc"><b>Description</b></label>
                                        <input type="text" class="form-control" name="desc" placeholder="Description">
                                      </div>
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
                                      

                                      if(!empty($regnum)){
                                        if(!empty($tratid)){
                                              if(!empty($desc)){
                                                if(!empty($doctor)){
                                                        $doctID = $row2['did'];
                                                          $query3="SELECT * FROM medical_issue WHERE treat_id='$tratid'";
                                                          $sql3=mysqli_query($con,$query3);

                                                          if(mysqli_num_rows($sql3)>0){
                                                              echo "<script>alert(\"Your already Issuesed\");</script>";
                                                          }else{


                                                            $query3="SELECT * FROM students WHERE regnumber='$regnum'";
                                                              $sql3=mysqli_query($con,$query3);

                                                              if(mysqli_num_rows($sql3)>0)
                                                              {     
                                                                $row0 = mysqli_fetch_assoc($sql3);

                                                                    // $q1="INSERT INTO medical_issue(reg_num,doctor,treat_id,description,trn_date) values('$regnum','$doctID','$tratid','$desc','$nowdate')";
                                                                          // $res1=mysqli_query($con,$q1);
                                                                          // if ( $res1) {

                                                                               echo '<script>alert("Medical Report Issuesed Scussessfully.");
                                                                               window.location.href="medical_report.php?medical_issu='.$row0['regnumber'].'";
                                                                                            </script>';
                                                                              
                                                                          // }else{
                                                                            // echo "<script>alert(\"Medical Report Issues is Not Scussess\");</script>";
                                                                          // }

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
                  
                  // <!-- **********************Start Medical ReportSection Pannel ************************ -->



                              $id = $_REQUEST['id'];
                                if($id==33)

                                {
                                if (isset($_POST['submit'])) {

                                  $search = $_REQUEST['search_box'];
                                
                                  $count=1;
                                  $viewquery = " SELECT * FROM medical_issue where reg_num = '".$search."' ";
                                  $viewresult = mysqli_query($con,$viewquery);

                                  echo '
                                  <div class="view_div">
                                  <a style="text-decoration: none; color :white;" href="doctor_dashboard.php?id=33"><h1 class="student_h1"> Medical Report Details </h1></br></a>


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
                                        <td><a href="doctor_delete.php?medical_issu='.$row['medicai_issue_id'].'">Delete</a></td>
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
                                        <td><a href="doctor_delete.php?medical_issu='.$row['medicai_issue_id'].'">Delete</a></td>
                                        </tr>
                                        ';
                                      }
                                    $count++;
                                  }
                                  echo '</table>';


                                }else{


                                  $count=1;
                                  $viewquery = " SELECT * FROM medical_issue";
                                  $viewresult = mysqli_query($con,$viewquery);

                                  echo '
                                  <div class="view_div">
                                  <a style="text-decoration: none; color :white;" href="doctor_dashboard.php?id=33"><h1 class="student_h1"> Medical Report Details </h1></br></a>


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

                                        <td><a href="doctor_edit.php?medical_issu='.$row['medicai_issue_id'].'">Edit</a></td>
                                        <td><a href="doctor_delete.php?medical_issu='.$row['medicai_issue_id'].'">Delete</a></td>
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

                                        <td><a href="doctor_edit.php?medical_issu='.$row['medicai_issue_id'].'">Edit</a></td>
                                        <td><a href="doctor_delete.php?medical_issu='.$row['medicai_issue_id'].'">Delete</a></td>
                                        </tr>
                                        ';
                                      }
                                    $count++;
                                  }
                                  echo '</table>';
                                }
                                  echo '<form class="form-inline col-6 mt-5" action="doctor_dashboard.php?id=33" method="POST">
                                          <input class="form-control form-control-sm ml-3 w-50" name="search_box" type="text" placeholder="Search"
                                            aria-label="Search">
                                          <button type="submit" name="submit" class="btn col-2 btn-rounded btn-dark ml-5">Search</button>
                                        </form>';

                                  echo '</div>';
                                }

                  // <!-- **********************End Medical Report Section Pannel ************************ -->
                  }else{ 
                  // <!-- **********************Start Pie Chart Section Pannel ************************ -->

                    ?>
                  <?php

                  $facArray = array("Management & Commerce","Technology", "Applied Sciences", "Engineering","Arts & Culture","Islamic Studies & Arabic Language");
                   $count = 0;
                   $arrlength = count($facArray);

                    ?>
                    
                   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                          var data = google.visualization.arrayToDataTable([
                             ['Task', 'Hours per Day'],

                  <?php while($count <  $arrlength){
                         $viewquery = " SELECT * FROM treat join students on students.regnumber =  treat.reg_num where students.faculty = '".$facArray[$count]."'";
                        $viewresult = mysqli_query($con,$viewquery);
                        $stddata = mysqli_num_rows($viewresult);

                          echo "
                            ['".$facArray[$count]."',  ".$stddata."],";

                          $count++;
                      } ?>
                          ]);

                          var options = {
                            title: 'Treatment Details'
                          };

                          var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                          chart.draw(data, options);
                        }
                      </script>
                  <div class="col-md-12"></div><h1 style="margin-top: 5%; text-align: center; color: #0f3460;">Medical Teatment Details</h1></div>
                  <div class="col-md-10" id="piechart" style=" height: 25vw; margin-left: 8%;"></div>

                   <!-- **********************End Pie Chart Section Pannel ************************ -->

                  <!-- **********************Start Pie Chart Section Pannel ************************ -->


                  <?php

                  $facArray = array("Management & Commerce","Technology", "Applied Sciences", "Engineering","Arts & Culture","Islamic Studies & Arabic Language");
                   $count = 0;
                   $arrlength = count($facArray);

                    ?>
                    
                   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                          var data = google.visualization.arrayToDataTable([
                             ['Task', 'Hours per Day'],

                  <?php while($count <  $arrlength){
                         $viewquery = " SELECT * FROM treat join students on students.regnumber =  treat.reg_num where students.faculty = '".$facArray[$count]."'";
                        $viewresult = mysqli_query($con,$viewquery);
                        $stddata = mysqli_num_rows($viewresult);

                          echo "
                            ['".$facArray[$count]."',  ".$stddata."],";

                          $count++;
                      } ?>
                          ]);

                          var options = {
                            title: 'Medical Issue Details'
                          };

                          var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

                          chart.draw(data, options);
                        }
                      </script>
                  <div class="col-md-12"><h1 style="margin-top: 5%; margin-left: 10%; text-align: center; color: #0f3460">Student Medical Report Issue Details</h1></div>
                  <div class="col-md-10" id="piechart1" style=" height: 30vw; margin-left: 8%; margin-top: 10%;"></div>

                   <!-- **********************End Pie Chart Section Pannel ************************ -->
                   <!-- ********************** Chart Section Pannel ************************ -->

                  <!-- <h2 style="margin-top: 5%; margin-left: 10%; text-align: center; color: #0f3460;">Student Treatment Analyis</h2> -->
                  <?php 
                  $facArray = array("Management & Commerce","Technology", "Applied Sciences", "Engineering","Arts & Culture","Islamic Studies & Arabic Language");
                   $count = 0;
                   $arrlength = count($facArray);
                    ?>
                    <script language = "JavaScript">
                           function drawChart() {

                              var data = google.visualization.arrayToDataTable([
                                 ['Faculty', 'Treatments'],
                  <?php while($count <  $arrlength){
                         $viewquery = " SELECT * FROM treat join students on students.regnumber =  treat.reg_num where students.faculty = '".$facArray[$count]."'";
                        $viewresult4 = mysqli_query($con,$viewquery);
                        $shddata = mysqli_num_rows($viewresult4); 
                        $a = $shddata;?>




                                 ['<?php echo $facArray[$count] ?>',  <?php echo $a; ?>],

                  <?php $count++; } ?>
                              ]);

                              var options = {title: 'Number of Treatments'}; 

                              // Instantiate and draw the chart.
                              var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
                              chart.draw(data, options);
                           }
                           google.charts.setOnLoadCallback(drawChart);
                        </script>
                  <div class="col-md-12"><h1 style="margin-top: 5%; margin-left: 10%; text-align: center; color: #0f3460">Student Medical Report Issue Details</h1></div>
                  <div class="col-md-12" id="chart_div" style=" margin-top: 10%; height: 30vw;"></div>


                  <!-- where cat_id = '".$row['cat_id']."' -->
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

                  <style type="text/css">
                    .footer{
                      width: 100%;
                      height: 70px;
                      background-color: #0f3460;
                      text-align: left;
                      padding: 1%;
                    }


                    .view_title{
                      text-decoration: none;

                    }
                  </style>
                </div>
            <!-- </div> -->
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div><!-- /#wrapper -->
		
	</div>
</body>
</html>