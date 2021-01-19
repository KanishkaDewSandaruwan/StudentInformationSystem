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
    <link rel="stylesheet" type="text/css" href="css/form_css/form.css">
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
  <form style="border : 2px solid black; padding: 3%; background-color: #0f3460; color: white; border-radius: 3em; width: 30%;" class="reg_form" action="drug_list.php" method="POST">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Drug 01</b></label>
        <input type="text" class="form-control ml-3" name="drug1" placeholder="Enter Drugs Code">
      </div>
      
      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Quntity</b></label>
        <input type="text" class="form-control ml-3" name="drug1q" placeholder="Enter Quntity">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Drug 02</b></label>
        <input type="text" class="form-control ml-3" name="drug2" placeholder="Enter Drugs Code">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Quntity</b></label>
        <input type="text" class="form-control ml-3" name="drug2q" placeholder="Enter Quntity">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Drug 03</b></label>
        <input type="text" class="form-control ml-3" name="drug3" placeholder="Enter Drugs Code">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Quntity</b></label>
        <input type="text" class="form-control ml-3" name="drug3q" placeholder="Enter Quntity">
      </div>
      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Drug 04</b></label>
        <input type="text" class="form-control ml-3" name="drug4" placeholder="Enter Drugs Code">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Quntity</b></label>
        <input type="text" class="form-control ml-3" name="drug4q" placeholder="Enter Quntity">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Drug 05</b></label>
        <input type="text" class="form-control ml-3" name="drug5" placeholder="Full Name">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Quntity</b></label>
        <input type="text" class="form-control ml-3" name="drug5q" placeholder="Enter Quntity">
      </div>
      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Drug 06</b></label>
        <input type="text" class="form-control ml-3" name="drug6" placeholder="Enter Drugs Code">
      </div>
      
      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Quntity</b></label>
        <input type="text" class="form-control ml-3" name="drug6q" placeholder="Enter Quntity">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Drug 07</b></label>
        <input type="text" class="form-control ml-3" name="drug7" placeholder="Enter Drugs Code">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Quntity</b></label>
        <input type="text" class="form-control ml-3" name="drug7q" placeholder="Enter Quntity">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Drug 08</b></label>
        <input type="text" class="form-control ml-3" name="drug8" placeholder="Enter Drugs Code">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Quntity</b></label>
        <input type="text" class="form-control ml-3" name="drug8q" placeholder="Enter Quntity">
      </div>
      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Drug 09</b></label>
        <input type="text" class="form-control ml-3" name="drug9" placeholder="Enter Drugs Code">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Quntity</b></label>
        <input type="text" class="form-control ml-3" name="drug9q" placeholder="Enter Quntity">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Drug 10</b></label>
        <input type="text" class="form-control ml-3" name="drug10" placeholder="Enter Drugs Code">
      </div>

      <div class="form-group col-md-6">
        <label class="text-light" for="name" class="a ml-3"><b>Quntity</b></label>
        <input type="text" class="form-control ml-3" name="drug10q" placeholder="Enter Quntity">
      </div>


<div class="dropdown-divider"></div>
 <button type="submit" name="submit" class="btn col-md-7 btn-info mt-5" style="border-radius:20px; padding-top: 1%; padding-bottom: 1%; ">Register</button><br>
 <button type="button" name="back" class="btn col-md-7 btn-info mt-3" onclick='window.location.href="dashboard.php"' style="border-radius:20px;  padding-top: 1%; padding-bottom: 1%; margin-top: 0.5%;">Back to Main</button>
 <br><br>
   <?php     
        if(isset($_POST['submit'])){

          $id = $_REQUEST['tid'];

          $drug1 = $_REQUEST['drug1'];
          $drug1q = $_REQUEST['drug1q'];

          $drug2 = $_REQUEST['drug2'];
          $drug2q = $_REQUEST['drug2q'];

          $drug3 = $_REQUEST['drug3'];
          $drug3q = $_REQUEST['drug3q'];

          $drug4 = $_REQUEST['drug4'];
          $drug4q = $_REQUEST['drug4q'];

          $drug5 = $_REQUEST['drug5'];
          $drug5q = $_REQUEST['drug5q'];

          $drug6 = $_REQUEST['drug6'];
          $drug6q = $_REQUEST['drug6q'];

          $drug7 = $_REQUEST['drug7'];
          $drug7q = $_REQUEST['drug7q'];

          $drug8 = $_REQUEST['drug8'];
          $drug8q = $_REQUEST['drug8q'];

          $drug9 = $_REQUEST['drug9'];
          $drug9q = $_REQUEST['drug9q'];

          $drug10 = $_REQUEST['drug10'];
          $drug10q = $_REQUEST['drug10q'];

          $cdate = date("Y/m/d");
          $value = 'no';


          if (!empty($drug1)) {
            if (!empty($drug2)) {
              if (!empty($drug3)) {
                if (!empty($drug4)) {
                  if (!empty($drug5)) {
                    if (!empty($drug6)) {
                      if (!empty($drug7)) {
                        if (!empty($drug8)) {
                          if (!empty($drug9)) {
                            if (!empty($drug10)) {
                              
                                $q1="INSERT INTO drug_list(drug1,drug2,drug3,drug4,drug5,drug6,drug7,drug8,drug9,drug10,treatment_id) values('$drug1.$drug1q','$drug2.$drug2q','$drug3.$drug3q','$drug4.$drug4q','$drug5.$drug5q','$drug6.$drug6q','$drug7.$drug7q','$drug8.$drug8q','$drug9.$drug9q','$drug10.$drug10q','$id')";
                                $res1=mysqli_query($con,$q1);

                                  echo '<script>alert("Drug List is Saved. Enter Drug List");
                                    window.location.href="dashboard.php?id=16";
                                    </script>';
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }else{
            if (!empty($drug2)) {
              if (!empty($drug3)) {
                if (!empty($drug4)) {
                  if (!empty($drug5)) {
                    if (!empty($drug6)) {
                      if (!empty($drug7)) {
                        if (!empty($drug8)) {
                          if (!empty($drug9)) {
                            if (!empty($drug10)) {
            
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }else{
              if (!empty($drug3)) {
                if (!empty($drug4)) {
                  if (!empty($drug5)) {
                    if (!empty($drug6)) {
                      if (!empty($drug7)) {
                        if (!empty($drug8)) {
                          if (!empty($drug9)) {
                            if (!empty($drug10)) {
            
                            }
                          }
                        } 
                      }
                    }
                  }
                }
              }else{
                if (!empty($drug4)) {
                  if (!empty($drug5)) {
                    if (!empty($drug6)) {
                      if (!empty($drug7)) {
                        if (!empty($drug8)) {
                          if (!empty($drug9)) {
                            if (!empty($drug10)) {
            
                            }
                          }
                        }
                      }
                    }
                  }
                }else{
                  if (!empty($drug5)) {
                    if (!empty($drug6)) {
                      if (!empty($drug7)) {
                        if (!empty($drug8)) {
                          if (!empty($drug9)) {
                            if (!empty($drug10)) {
            
                            }
                          }
                        }
                      }
                    }
                  }else{
                    if (!empty($drug6)) {
                      if (!empty($drug7)) {
                        if (!empty($drug8)) {
                          if (!empty($drug9)) {
                            if (!empty($drug10)) {
            
                            }
                          } 
                        }
                      }
                    }else{
                      if (!empty($drug7)) {
                        if (!empty($drug8)) {
                          if (!empty($drug9)) {
                            if (!empty($drug10)) {
            
                            }
                          }
                        }
                      }else{
                        if (!empty($drug8)) {
                          if (!empty($drug9)) {
                            if (!empty($drug10)) {
            
                            }
                          }else{
                            if (!empty($drug10)) {
            
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }





          if (!empty($drug1)) {
              $query2="SELECT * FROM drugs WHERE drug_code='$drug1'";
              $sql2=mysqli_query($con,$query2);

              if(mysqli_num_rows($sql2)>0){
                $row2 = mysqli_fetch_assoc($sql2);
                $getQ = $row2['quntity'];
                $balance = $getQ - $drug1q;

                $query3="UPDATE drugs SET quntity='$balance' WHERE drug_code='".$drug1."'";
                $sql3=mysqli_query($con,$query3);
              }else{
                  echo "<script>alert(\"Drug 01 is Not Available. Please Check drug code Or Fild is Empty  \");</script>";
              }
          }

          if (!empty($drug2)) {
            $query2="SELECT * FROM drugs WHERE drug_code='$drug2'";
            $sql2=mysqli_query($con,$query2);

            if(mysqli_num_rows($sql2)>0){
              $row2 = mysqli_fetch_assoc($sql2);
              $getQ = $row2['quntity'];
              $balance = $getQ - $drug2q;

              $query3="UPDATE drugs SET quntity='$balance' WHERE drug_code='".$drug2."'";
              $sql3=mysqli_query($con,$query3); 
            }else{
                echo "<script>alert(\"Drug 02 is Not Available. Please Check drug code Or Fild is Empty  \");</script>";
            }
        }




          if (!empty($drug3)) {
              $query2="SELECT * FROM drugs WHERE drug_code='$drug3'";
              $sql2=mysqli_query($con,$query2);

              if(mysqli_num_rows($sql2)>0){
                $row2 = mysqli_fetch_assoc($sql2);
                $getQ = $row2['quntity'];
                $balance = $getQ - $drug3q;

                $query3="UPDATE drugs SET quntity='$balance' WHERE drug_code='".$drug3."'";
                $sql3=mysqli_query($con,$query3); 
              }else{
                  echo "<script>alert(\"Drug 03 is Not Available. Please Check drug code Or Fild is Empty  \");</script>";
              }
          }

          if (!empty($drug4)) {
              $query2="SELECT * FROM drugs WHERE drug_code='$drug4'";
              $sql2=mysqli_query($con,$query2);

              if(mysqli_num_rows($sql2)>0){
                $row2 = mysqli_fetch_assoc($sql2);
                $getQ = $row2['quntity'];
                $balance = $getQ - $drug4q;

                $query3="UPDATE drugs SET quntity='$balance' WHERE drug_code='".$drug4."'";
                $sql3=mysqli_query($con,$query3); 
              }else{
                  echo "<script>alert(\"Drug 04 is Not Available. Please Check drug code Or Fild is Empty \");</script>";
              }
          }

          if (!empty($drug5)) {
              $query2="SELECT * FROM drugs WHERE drug_code='$drug5'";
              $sql2=mysqli_query($con,$query2);

              if(mysqli_num_rows($sql2)>0){
                $row2 = mysqli_fetch_assoc($sql2);
                $getQ = $row2['quntity'];
                $balance = $getQ - $drug5q;

                $query3="UPDATE drugs SET quntity='$balance' WHERE drug_code='".$drug5."'";
                $sql3=mysqli_query($con,$query3); 
              }else{
                  echo "<script>alert(\"Drug 05 is Not Available. Please Check drug code Or Fild is Empty  \");</script>";
              }
          }


          if (!empty($drug6)) {
              $query2="SELECT * FROM drugs WHERE drug_code='$drug6'";
              $sql2=mysqli_query($con,$query2);

              if(mysqli_num_rows($sql2)>0){
                $row2 = mysqli_fetch_assoc($sql2);
                $getQ = $row2['quntity'];
                $balance = $getQ - $drug6q;

                $query3="UPDATE drugs SET quntity='$balance' WHERE drug_code='".$drug6."'";
                $sql3=mysqli_query($con,$query3); 
              }else{
                  echo "<script>alert(\"Drug 06 is Not Available. Please Check drug code Or Fild is Empty  \");</script>";
              }
          }


          if (!empty($drug7)) {
              $query2="SELECT * FROM drugs WHERE drug_code='$drug7'";
              $sql2=mysqli_query($con,$query2);

              if(mysqli_num_rows($sql2)>0){
                $row2 = mysqli_fetch_assoc($sql2);
                $getQ = $row2['quntity'];
                $balance = $getQ - $drug7q;

                $query3="UPDATE drugs SET quntity='$balance' WHERE drug_code='".$drug7."'";
                $sql3=mysqli_query($con,$query3); 
              }else{
                  echo "<script>alert(\"Drug 07 is Not Available. Please Check drug code Or Fild is Empty  \");</script>";
              }
          }


          if (!empty($drug8)) {
            $query2="SELECT * FROM drugs WHERE drug_code='$drug8'";
            $sql2=mysqli_query($con,$query2);

            if(mysqli_num_rows($sql2)>0){
              $row2 = mysqli_fetch_assoc($sql2);
              $getQ = $row2['quntity'];
              $balance = $getQ - $drug8q;

              $query3="UPDATE drugs SET quntity='$balance' WHERE drug_code='".$drug8."'";
              $sql3=mysqli_query($con,$query3); 

            }else{
                echo "<script>alert(\"Drug 08 is Not Available. Please Check drug code Or Fild is Empty  \");</script>";
            }
                                                                                  }


          if (!empty($drug9)) {
            $query2="SELECT * FROM drugs WHERE drug_code='$drug9'";
            $sql2=mysqli_query($con,$query2);

            if(mysqli_num_rows($sql2)>0){
              $row2 = mysqli_fetch_assoc($sql2);
              $getQ = $row2['quntity'];
              $balance = $getQ - $drug9q;

              $query3="UPDATE drugs SET quntity='$balance' WHERE drug_code='".$drug9."'";
              $sql3=mysqli_query($con,$query3); 

            }else{
                echo "<script>alert(\"Drug 09 is Not Available. Please Check drug code Or Fild is Empty  \");</script>";
            }
        }
        if (!empty($drug10)) {
            $query2="SELECT * FROM drugs WHERE drug_code='$drug10'";
            $sql2=mysqli_query($con,$query2);

            if(mysqli_num_rows($sql2)>0){
              $row2 = mysqli_fetch_assoc($sql2);
              $getQ = $row2['quntity'];
              $balance = $getQ - $drug10q;

              $query3="UPDATE drugs SET quntity='$balance' WHERE drug_code='".$drug10."'";
              $sql3=mysqli_query($con,$query3); 
            }else{
                echo "<script>alert(\"Drug 02 is Not Available. Please Check drug code Or Fild is Empty  \");</script>";
            }
        }

          // if(!empty($fname)){
          //   if(!empty($emails)){
          //     if(filter_var($emails, FILTER_VALIDATE_EMAIL)){
          //       if(!empty($address)){
          //         if(!empty($phone)){

          //           if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
          //             if(!empty($bday)){
          //               if(!empty($regnum)){

          //               $query2="SELECT * FROM students WHERE email='$emails'";

          //                   $sql2=mysqli_query($con,$query2);

          //                   if(mysqli_num_rows($sql2)>0){
          //                       echo "Email already Exsist";
          //                   }else{

          //                     $q1="INSERT INTO students(full_name,address,phone_number,email,gender,regnumber,faculty,dob,trndate) values('$fname','$address','$phone','$emails','$gender','$reg','$faculty','$bday','$cdate')";

          //                           $res1=mysqli_query($con,$q1);

          //                           // if ( $res1) {
          //                           //   $q2 = "SELECT * FROM students WHERE email='$emails'";
          //                           //   $res2 = mysqli_query($con,$q2);

          //                           //     if($row1 = mysqli_fetch_assoc($res2)){

          //                           //      echo '<script>alert("Data Saved is Scussessfully. Enter Registration Details");
          //                           //       window.location.href="student_history.php?id='.$row1['  sid'].'";
          //                           //       </script>';
          //                           //     }
          //                           // }else{
          //                           //   echo "<script>alert(\"Data Save is Not Scussess\");</script>";
          //                           // }
          //                   }
          //               }else{ echo "<script>alert(\"Enter Registration Number\");</script>";}
          //             }else{ echo "<script>alert(\"Enter Enter Date of Birth\");</script>";}
          //           }else {echo "<script>alert(\"Enter Valid Phone Number\");</script>";}
          //         }else{ echo "<script>alert(\"Enter Phone Number\");</script>";}
          //       }else{ echo "<script>alert(\"Enter Address\");</script>";}
          //     }else {echo "<script>alert(\"Enter Valid Email Address\");</script>";}
          //   }else{ echo "<script>alert(\"Enter Email Address\");</script>";}
          // }else{ echo "<script>alert(\"Enter Full Name\");</script>";} 
  }
  ?>
</div>
</body>
</html>