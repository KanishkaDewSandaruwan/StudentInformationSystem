<!DOCTYPE html>
<html>
<head>
  <title>SEUSL Helth Center</title>

<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="jq/jq.js" type="text/javascript"></script>
    <link rel="icon" type="image/png" href="img/icon/unnamed.png" sizes="300x300" />

<!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/d.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <script src="js/a.js"></script>
  <script src="js/b.js"></script>
  <script src="js/c.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
     <script type="text/javascript" src="bootstrap/js/npm.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<style type="text/css">
  .reg_form{
    margin: 3%;
  }
</style>

</head>
<body>
<div>
  <form style="border : 2px solid black; padding: 3%; color: yellow; background-color: #0f3460; border-radius: 3em;" class="reg_form" action="register_student.php" method="POST">
    <div class="form-row">
      <div class="form-group col-md-6">

        <label class="" for="name" class="a ml-3"><b>Students Name</b></label>
        <input type="text" class="form-control ml-3" name="name" placeholder="Full Name">
      </div>
      

    </div>
    <div class="form-group col-md-4">
      <label class="" for="address"><b>Address</b></label>
      <input type="text" class="form-control"  name="address" placeholder="Address">
    </div>

      <div class="form-group col-md-4">
      <label class="" for="phone"><b>Email Address</b></label>
      <input type="text" class="form-control" name="email" placeholder="Email Address">
    </div>

    <div class="form-group col-md-4">
      <label class="" for="phone"><b>Phone Number</b></label>
      <input type="text" class="form-control" name="phone" placeholder="Phone Number">
    </div>

    <div class="form-group col-md-4">
      <label class="" for="bday"><b>Date of Birth</b></label>
      <input type="text" class="form-control" name="bday" placeholder="Date of Birth">
    </div>

      <div class="form-group col-md-4">
        <label class="" for="inputState"><b>Gender</b></label>
        <select id="inputState" name="gender" class="form-control">
          <option selected></option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>

      <div class="form-group col-md-4">
      <label class=""  for="regnum"><b>Registration Number</b></label>
      <input type="text" class="form-control" name="regnum" style="text-transform: uppercase;" value ="SEU/IS/" placeholder="Registration Number">
    </div>

    <div class="form-group col-md-4">
        <label class="" for="inputState"><b>Faculty</b></label>
        <select id="inputState" name="fac" class="form-control">
          <option selected></option>
          <option>Management & Commerce</option>
          <option>Technology</option>
          <option>Applied Sciences</option>
          <option>Engineering</option>
          <option>Arts & Culture</option>
          <option>Islamic Studies & Arabic Language</option>
        </select>
      </div>



<div class="dropdown-divider"></div>
 <button type="submit" name="submit" class="btn col-md-4 btn-light" style="border-radius:20px; padding-top: 1%; padding-bottom: 1%; ">Register</button><br>
 <button type="button" name="back" class="btn col-md-4 btn-light" onclick='window.location.href="dashboard.php"' style="border-radius:20px;  padding-top: 1%; padding-bottom: 1%; margin-top: 0.5%;">Back to Main</button>
 <br><br>
   <?php     

        if(isset($_POST['submit'])){
          $fname = $_REQUEST['name'];
          $emails = $_REQUEST['email'];
          $address = $_REQUEST['address'];
          $phone = $_REQUEST['phone'];
          $gender = $_REQUEST['gender'];
          $faculty = $_REQUEST['fac'];
          $regnum = $_REQUEST['regnum'];
          $bday = $_REQUEST['bday'];
          $cdate = date("Y/m/d");

          if(!empty($fname)){
            if(!empty($emails)){
              if(filter_var($emails, FILTER_VALIDATE_EMAIL)){
                if(!empty($address)){
                  if(!empty($phone)){
                    if(!empty($gender)){
                      if(!empty($faculty)){

                        if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                          if(!empty($bday)){
                            if(!empty($regnum)){

                            $query2="SELECT * FROM students WHERE email='$emails'";

                                $sql2=mysqli_query($con,$query2);

                                if(mysqli_num_rows($sql2)>0){
                                    echo "Email already Exsist";
                                }else{

                                      $query3="SELECT * FROM students WHERE  regnumber='$regnum'";
                                      $sql3=mysqli_query($con,$query3);

                                      if(mysqli_num_rows($sql3)>0)
                                      {
                                        echo "<script>alert(\"Registration Number Alrady Exists\");</script>";

                                      }else{


                                          $q1="INSERT INTO students(full_name,phone_number,email,gender,regnumber,faculty,dob,trndate,address) values('$fname','$phone','$emails','$gender','$regnum','$faculty','$bday','$cdate','$address')";

                                                $res1=mysqli_query($con,$q1);

                                                // if ( $res1) {
                                                //   $q2 = "SELECT * FROM students WHERE email='$emails'";
                                                //   $res2 = mysqli_query($con,$q2);

                                                //     if($row1 = mysqli_fetch_assoc($res2)){

                                                //      echo '<script>alert("Data Saved is Scussessfully. Enter Registration Details");
                                                //       window.location.href="student_history.php?id='.$row1['  sid'].'";
                                                //       </script>';
                                                //     }
                                                // }else{
                                                //   echo "<script>alert(\"Data Save is Not Scussess\");</script>";
                                                // }
                                      }
                                }
                            }else{ echo "<script>alert(\"Enter Registration Number\");</script>";}
                          }else{ echo "<script>alert(\"Enter Enter Date of Birth\");</script>";}
                        }else {echo "<script>alert(\"Enter Valid Phone Number\");</script>";}
                      }else{ echo "<script>alert(\"Select Your Faculty\");</script>";}
                    }else{ echo "<script>alert(\"Select Your Gender\");</script>";}
                  }else{ echo "<script>alert(\"Enter Phone Number\");</script>";}
                }else{ echo "<script>alert(\"Enter Address\");</script>";}
              }else {echo "<script>alert(\"Enter Valid Email Address\");</script>";}
            }else{ echo "<script>alert(\"Enter Email Address\");</script>";}
          }else{ echo "<script>alert(\"Enter Full Name\");</script>";} 
  }
  ?>
</div>
</body>
</html>