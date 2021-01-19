
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
          <h3 class=""><a class="text-light" style="text-decoration: none;" href="doctor_dashboard.php"><b><i class="fas fa-arrow-left mr-2"></i> SEUSL Health Center - Search Students</b></a></h3>
        </div>

        <!-- Search form -->
         <div class="col-md-3 justify-content-center">
            <form action="" method="POST" class="form-inline">
              <i class="fas fa-search text-light" aria-hidden="true"></i>
              <input name="search_box" class="form-control form-control-sm ml-3 w-80" type="text" placeholder="Search" aria-label="Search">
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

.search_h1{
	padding: 3%;
	font-size: 50px; 
	font-family: \"Times New Roman\", Times, serif;

}

</style>
<?php
require_once 'connection.php';


if (isset($_POST['submit'])) {

  $search = $_REQUEST['search_box'];
  				
  				//Student details

			    $count=1;
			    $viewquery = " SELECT * FROM students where regnumber = '".$search."'";
			    $viewresult = mysqli_query($con,$viewquery);
			    $viewresult1 = mysqli_query($con,$viewquery);

		if ($row8 = mysqli_fetch_assoc($viewresult1)) {
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

    			// Student Treatment Details
    			$viewquery = " SELECT * FROM treat where reg_num = '".$search."'";
                  $viewresult = mysqli_query($con,$viewquery);

                  echo '
                  <div class="view_div" style="margin-top:10px; width:100%; margin-left:0.1%;">
                  <a style="text-decoration: none; color :white; " href="doctor_dashboard.php?id=2"><h1 class="student_h1"> Student Treatment Details </h1></br></a>



                  <table style="width : 100%;" class="student_table_new"> 
                    <tr>
                      <th style="width : 15%"> Student Registration Number </th>
                      <th style="width : 20%"> Doctor </th>
                      <th style="width : 20%"> Description </th>
                      <th style="width : 20%"> Drug List </th>
                      <th style="width : 10%"> Treated Date </th>
                      <th style="width : 10%"> Medical Report Issue </th>  
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
                      </tr>';
                    }


                    $count++;
                  }
                  echo '</table> </div>';

    			// Student Medical Issue Details

    			 $count=1;
                $viewquery = " SELECT * FROM medical_issue where reg_num = '".$search."' ";
                $viewresult = mysqli_query($con,$viewquery);

                echo '
                <div style="margin-top:10px; width:100%; margin-left:0.1%;" class="view_div">
                <a style="text-decoration: none; color :white;" href="doctor_dashboard.php?id=33"><h1 class="student_h1"> Your Medical Report Details </h1></br></a>


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

                 $count=1;
                                      
		}else{
			echo '<h1 class="search_h1">No Results. be careful with letters. you can use Registration Number only</h1>';
		}

}else{
echo '<h1 class="search_h1">Enter Registration Number to Search</h1>';
 
}

?>
