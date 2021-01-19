
<!DOCTYPE html>
<html>
<head>
  <title>SEUSL Health Center</title>

  <!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">
    <link rel="stylesheet" type="text/css" href="css/form_css/form.css">
    <!-- load icon -->
    <link rel="icon" type="image/png" href="img/icon/unnamed.png" sizes="300x300" />

    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="js/a.js"></script>
    <script src="js/b.js"></script>
    <script src="js/c.js"></script> 

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/js/npm.js"></script>


</head>
<body>
<div class="container-fluid ">
      <div class="row p-3" style="border-bottom: 3px solid black; background-color: #0f3460">
        <div class="col-md-9 ">
          <h3 class=""><a class="text-light" style="text-decoration: none;" href="doctor_dashboard.php"><b><i class="fas fa-arrow-left mr-3"></i>SEUSL Health Center - View Students Details</b></a></h3>
        </div>

        <!-- Search form -->
         <div class="col-md-3 justify-content-center">
            <form action="" method="POST" class="form-inline">
              <i class="fas fa-search text-light" aria-hidden="true"></i>
              <input name="search_box" class="form-control form-control-sm ml-3 w-70" type="text" placeholder="Search" aria-label="Search">
              <button type="submit" name="submit" class="btn btn-outline-light btn-rounded waves-effect ml-2">Search</button>
          </form>
         </div>
      </div>
    </div><!-- Nav Bar End -->
</body>
</html>

<style type="text/css">
    table.student_table_03{
  text-align: center;
  margin-top: -5px;

}
table.student_table_03 th{
  border: 2px solid black;
  text-align: center;
  color: white;
  font-size: 1vw;
  background-color: black;
}
table.student_table_03 td{ 
  border: 1px solid black;
  background-color: white;
  font-size: 1vw;
  height : 10px;
  color: black;
}

</style>
<?php
require_once 'connection.php';


if (isset($_POST['submit'])) {

  $search = $_REQUEST['search_box'];
  

    $count=1;
    $viewquery = " SELECT * FROM students where regnumber = '".$search."' OR full_name = '".$search."' OR  email = '".$search."'";
    $viewresult = mysqli_query($con,$viewquery);

    echo '
    <div class="view_div mt-1 ml-1">
    <h1 class="student_h1"> Student Details </h1></br>


    <table style= "padding :2%; width:99%; margin-left:0.5%;" class="student_table_new"> 
    <tr>
      <th style="width : 10%"> Name </th>
      <th style="width : 8%"> Phone Number </th>
      <th style="width : 8%"> Date of Birth </th>
      <th style="width : 5%"> Gender </th>
      <th style="width : 10%"> Email </th>
      <th style="width : 15%"> Addresss </th>
      <th style="width : 10%"> Faculty </th>
      <th style="width : 12%"> Registered Number </th>
      <th style="width : 12%"> Registered Date </th>
    </tr>';

    while($row = mysqli_fetch_assoc($viewresult))
    {
    echo '
    <tr>
    <td>'.$row['full_name'].'</td>
    <td>'.$row['phone_number'].'</td>
    <td>'.$row['dob'].'</td>
    <td>'.$row['gender'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['address'].'</td>
    <td>'.$row['faculty'].'</td>
    <td>'.$row['regnumber'].'</td>
    <td>'.$row['trndate'].'</td>

    </tr>
    ';
    $count++;
    }
    echo '</table></div>';



}else{

  $count=1;
  $viewquery = " SELECT * FROM students";
  $viewresult = mysqli_query($con,$viewquery);

  echo '
  <div class="view_div mt-1 ml-1">
  <h1 class="student_h1"> Student Details </h1></br>


  <table style= "padding :2%; width:99%; margin-left:0.5%;" class="student_table_new"> 
  <tr>
    <th style="width : 10%"> Name </th>
    <th style="width : 8%"> Phone Number </th>
    <th style="width : 8%"> Date of Birth </th>
    <th style="width : 5%"> Gender </th>
    <th style="width : 10%"> Email </th>
    <th style="width : 15%"> Addresss </th>
    <th style="width : 10%"> Faculty </th>
    <th style="width : 12%"> Registered Number </th>
    <th style="width : 12%"> Registered Date </th>

  </tr>';

  while($row = mysqli_fetch_assoc($viewresult))
  {
  echo '
  <tr>
  <td>'.$row['full_name'].'</td>
  <td>'.$row['phone_number'].'</td>
  <td>'.$row['dob'].'</td>
  <td>'.$row['gender'].'</td>
  <td>'.$row['email'].'</td>
  <td>'.$row['address'].'</td>
  <td>'.$row['faculty'].'</td>
  <td>'.$row['regnumber'].'</td>
  <td>'.$row['trndate'].'</td>

  </tr>
  ';
  $count++;
  }
  echo '</table>';
  echo '<button onclick="window.location.href=\'doctor_dashboard.php\'" class="btn btn-light" style="margin-left: 1%; margin-top: 2%;"><i class="fas fa-backward mr-1"></i> Back to Main</button>';

  echo '</div>';
}

?>