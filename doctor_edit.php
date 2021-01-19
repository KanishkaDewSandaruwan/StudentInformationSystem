<?php
  require_once 'connection.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/c.css">
    <link rel="stylesheet" type="text/css" href="css/form_css/edit_form.css">

    <!-- load icon -->
    <link rel="icon" type="image/png" href="img/icon/unnamed.png" sizes="300x300" />

    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
     <script type="text/javascript" src="bootstrap/js/npm.js"></script>

    <title>SEUSL Health Center</title>
  </head>
  <body class="a bg-light">
    <div class="container-fluid ">
      <div class="row p-3" style="border-bottom: 3px solid black; background-color: #0f3460; font-family: \"Times New Roman\", Times, serif;">
        <div class="col-md-8 ">
          <h1 class="top_h1 text-light"><a class="head_link text-light" href="doctor_dashboard.php">SEUSL Health Center - Editor Dashboard</a></h1>
        </div>
      </div>
    </div><!-- Nav Bar End -->


    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 bg-light" style="padding-bottom: 2%;">
<?php
if(isset($_REQUEST['medical_issu']))
{
            $id = $_REQUEST['medical_issu'];
            $q2 = "SELECT * FROM medical_issue WHERE medicai_issue_id='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['medicai_issue_id'];

              if($id==$row1['medicai_issue_id'])
               {
                echo '<form class="form_edit" action="doctor_edit.php?medical_issu='.$id.'" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="regnum" class="a mr-3"><b>Registration Number</b></label>
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
                        <input type="text" class="form-control" name="tratid" placeholder="Treated ID">
                      </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="desc"><b>Description</b></label>
                      <input type="text" class="form-control" name="desc" placeholder="Description">
                    </div>
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-light" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-3 btn-light"  onclick="window.location.href=\'doctor_dashboard.php?id=33\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit'])){

                    $regnum = $_REQUEST['regnum'];
                    $doctor = $_REQUEST['doctor'];
                    $tratid = $_REQUEST['tratid'];
                    $desc = $_REQUEST['desc'];

                    $q4 = "SELECT * FROM doctor WHERE full_name='$doctor'";
                    $res4 = mysqli_query($con,$q4);
                    $row2 = mysqli_fetch_assoc($res4);
                    $doctID = $row2['did'];

                    if(!empty($regnum))
                        {
                          $loginsql="SELECT * FROM medical_issue WHERE medicai_issue_id='".$id."'";
                            $result=mysqli_query($con,$loginsql);
                            $rows=mysqli_fetch_assoc($result);
                            $a = $rows['reg_num'];

                            if($a==$regnum)
                            {
                                echo "<script type=\"text/javascript\"> alert(\"This Registration Number already Here\");</script>";
                              }else{ 

                                  $query3="SELECT * FROM students WHERE  regnumber='$regnum'";
                                  $sql3=mysqli_query($con,$query3);

                                  if(mysqli_num_rows($sql3)>0)
                                  {

                                      $query3="UPDATE medical_issue SET reg_num='$regnum' WHERE medicai_issue_id='".$id."'";
                                      $sql3=mysqli_query($con,$query3);
                                      echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"doctor_dashboard.php?id=33\";</script>";



                                  }else{

                                    echo '<script>alert("This Student Not in System");</script>';
                                          
                                 }
                          }
                      }


                      if(!empty($doctor))
                      {

                        $query3="UPDATE medical_issue SET doctor='$doctID' WHERE medicai_issue_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"doctor_dashboard.php?id=33\";</script>";
                      }



                       if(!empty($tratid))
                      {
                        $query3="UPDATE medical_issue SET treat_id='$tratid' WHERE medicai_issue_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"doctor_dashboard.php?id=33\";</script>";
                      }


                       if(!empty($desc))
                      {
                        $query3="UPDATE medical_issue SET description='$desc' WHERE medicai_issue_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"doctor_dashboard.php?id=33\";</script>";
                      }

                }echo '</form>'; //Register Form Validation

            }   


}
else if(isset($_REQUEST['treat_id']))
{
            $id = $_REQUEST['treat_id'];
            $q2 = "SELECT * FROM treat WHERE treat_id='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['treat_id'];

              if($id==$row1['treat_id'])
               {
                echo '<form class="form_edit" action="doctor_edit.php?treat_id='.$id.'" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label><b>Student Registration Number</b></label>
                        <input type="text" class="form-control" name="regnum" placeholder="Student Registration Number">
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
                      <label for="desc"><b>Description</b></label>
                      <input type="text" class="form-control" name="desc" placeholder="Description">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="desc"><b>Drug List</b></label>
                      <input type="text" class="form-control" name="dlist" placeholder="Drug List">
                    </div>
                    </div>



                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-3 btn-light" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-3 btn-light"  onclick="window.location.href=\'doctor_dashboard.php?id=2\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit']))
                  {
                    $regnum = $_REQUEST['regnum'];
                    $doctor = $_REQUEST['doctor'];
                    $desc = $_REQUEST['desc'];
                    $dlist = $_REQUEST['dlist'];


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

                    $q4 = "SELECT * FROM doctor WHERE full_name='$doctor'";
                    $res4 = mysqli_query($con,$q4);
                    $row2 = mysqli_fetch_assoc($res4);
                    


                      if(!empty($regnum))
                        {
                          $loginsql="SELECT * FROM treat WHERE treat_id='".$id."'";
                            $result=mysqli_query($con,$loginsql);
                            $rows=mysqli_fetch_assoc($result);
                            $a = $rows['reg_num'];
                            if (isset($rows['reg_num'])) {
                                if($a==$regnum)
                                {
                                    echo "<script type=\"text/javascript\"> alert(\"This Registration Number already Here\");</script>";
                                  }else{ 

                                      $query3="SELECT * FROM students WHERE  regnumber='$regnum'";
                                      $sql3=mysqli_query($con,$query3);

                                      if(mysqli_num_rows($sql3)>0)
                                      {

                                          $query3="UPDATE treat SET reg_num='$regnum' WHERE treat_id='".$id."'";
                                          $sql3=mysqli_query($con,$query3);
                                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"doctor_dashboard.php?id=2\";</script>";



                                      }else{

                                        echo '<script>alert("This Student Not in System");</script>';
                                              
                                     }
                              }
                            }
                      }

                      if(!empty($dlist))
                      {
                        if (checkDruglist($dlist,$con) == true) {

                          $query3="UPDATE treat SET nb='$dlist' WHERE treat_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"doctor_dashboard.php?id=2\";</script>";
                        }
                      }
                      if(!empty($doctor))
                      {
                        if (isset($row2['did'])) {

                          $doc_id = $row2['did'];

                            $query3="UPDATE treat SET doc_id='$doc_id' WHERE treat_id='".$id."'";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"doctor_dashboard.php?id=2\";</script>";
                        }
                      }
                      if(!empty($desc))
                      {
                        $query3="UPDATE treat SET description='$desc' WHERE treat_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"doctor_dashboard.php?id=2\";</script>";
                      }
                    }

                }echo '</form>'; //Register Form Validation

}  

else{
  header('location:doctor_dashboard.php'); 
}
?>

<style type="text/css">
  form.reg_form{
    width: 100%;
    margin-top: 2%;
    background-color: gray;
    border-radius: 30px;
    padding: 30px;
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

  </body>
</html>