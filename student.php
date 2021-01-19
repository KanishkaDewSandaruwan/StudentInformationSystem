<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="jq/jq.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- load icon -->
    <link rel="icon" type="image/png" href="img/icon/unnamed.png" sizes="300x300" />
<!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/form_css/form.css">
    <link rel="stylesheet" type="text/css" href="css/student/main.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/form_css/form.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/home_style.css"> -->

    <!-- Font awesome link -->
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SEUSL Health Center - Student</title>
</head>

<body style="font-family: \"Times New Roman\",Times, serif;">

  <!-- Start your project here-->
  <div style="height: 100vh">
    <div class="flex-center flex-column">
     <!--Navbar -->
     <nav class="navbar navbar-expand-lg" style="background-color: #0f3460;">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <i style="color: white; font-size: 40px;" class="fas fa-bars"></i>
		  </button>

		  <div style="float: right;" class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item dropdown">
		        <a style="color: white; font-size: 25px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i style="font-size: 40px;" class="fas fa-user-graduate"></i></a>
		        <div class="dropdown-menu" style="background-color: #fff;" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="student_pass.php">Change Password</a>
		          <!-- <a class="dropdown-item" href="#">Another action</a> -->
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="logout.php">Log Out</a>
		        </div>
		      </li>
		      <li class="nav-item">
		        <a style="color: white;  font-size: 25px;" class="nav-link ml-2" href="#"><i style="font-size: 40px;" class="fas fa-calendar-check"></i></a>
		      </li>
		    </ul>
		  </div>
		  <a style="color: white; font-size: 25px;" class="navbar-brand" href="student.php"><b>Welcome! SEUSL Health Center</b></a>
		</nav>
		<section class="container-fluid">
			<div class="row">
			    <div class="col-12 col-md-12 col-lg-4" style="background-color: #0f3460; font-size: 20px; padding-top: 1%; margin-top: 0.1%;  color: white; border-bottom-right-radius: 2em;">
			    	<?php 

			    		$user = $_SESSION['username'];

				    	$count=1;
	                    $viewquery = " SELECT * FROM students where regnumber='".$user."'";
	                    $viewresult = mysqli_query($con,$viewquery); 
	                    $row = mysqli_fetch_assoc($viewresult);
			    	
                    ?>

                    <form style="padding: 3%;">
                    	<label style="color: orange">Registration Number :</label>  <label style="margin-left: 3%;"><?php echo $user ?></label><br>
                    	<label style="color: orange">Your Name :</label>  <label style="margin-left: 3%;"><?php echo $row['full_name']; ?></label><br>
                    	<label style="color: orange">Phone Number :</label>  <label style="margin-left: 3%;"><?php echo $row['phone_number']; ?></label><br>
                    	<label style="color: orange">Email :</label>  <label style="margin-left: 3%;"><?php echo $row['email']; ?></label><br>
                    	<label style="color: orange">Gender :</label>  <label style="margin-left: 3%;"><?php echo $row['gender']; ?></label><br>
                    	<label style="color: orange">Faculty :</label>  <label style="margin-left: 3%;"><?php echo $row['faculty']; ?></label><br>
                    	<label style="color: orange">Date of Birth :</label>  <label style="margin-left: 3%;"><?php echo $row['dob']; ?></label><br>
                    	<label style="color: orange">Registerd Date :</label>  <label style="margin-left: 3%;"><?php echo $row['trndate']; ?></label><br>
                    </form>
                    <div class="dropdown-divider"></div>
			    </div>
			    <div class="col-12 col-sm-6 col-lg-8">
			    	<?php 
			    		$count=1;
                    $viewquery = " SELECT * FROM treat where reg_num = '".$user."'";
                    $viewresult = mysqli_query($con,$viewquery);

                    echo '
                    <div style="margin-top:0.1%;" class="view_div">
                    <a style="text-decoration: none; color :white;" href="dashboard.php?id=2"><h1 class="student_h1"> Your Treatment Details </h1></br></a>



                    <table style="width : 100%;" class="student_table_new"> 
                      <tr>
                        <th style="width : 15%"> Student Registration Number </th>
                        <th style="width : 20%"> Doctor </th>
                        <th style="width : 20%"> Description </th>
                        <th style="width : 20%"> Drug List </th>
                        <th style="width : 10%"> Treated Date </th>

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
                        </tr>';
                      }else{
                        echo '
                        <tr>
                        <td>'.$row['reg_num'].'</td>
                        <td>'.$row['doc_id'].'</td>
                        <td>'.$row['description'].'</td>
                        <td>'.$row['nb'].'</td>
                        <td>'.$row['trn_date'].'</td>
                        </tr>';
                      }


                      $count++;
                    }
                    echo '</table> </div>';


                    $count=1;
                $viewquery = " SELECT * FROM medical_issue where reg_num = '".$user."' ";
                $viewresult = mysqli_query($con,$viewquery);

                echo '
                <div style="margin-top:10px;" class="view_div">
                <a style="text-decoration: none; color :white;" href="dashboard.php?id=33"><h1 class="student_h1"> Your Medical Report Details </h1></br></a>


                <table class="student_table_new" style="width : 100%;"> 
                  <tr>
                    <th style="width : 15%"> Registration Number </th>
                    <th style="width : 20%"> Doctor </th>
                    <th style="width : 8%"> Treated ID </th>  
                    <th style="width : 25%"> Description </th>  
                    <th style="width : 10%"> Issue Date </th>  
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
                      </tr>
                      ';
                    }
                  $count++;
                }
                echo '</table>';


			    	 ?>
			    </div>
			</div>
		</section>

	<!--/.Navbar -->
    </div>
  </div>
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
<div style="background-color: #0f3460; padding: 0.5%;" class="row">

  <p style="color: yellow; margin-left: 3%;">Copyright©2020.SEUSL.HelthCenter <br> Created By : I.P.P.W.HEMACHANDRA</p>
</div>
</html>