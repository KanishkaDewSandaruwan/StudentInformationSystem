<?php
require_once 'connection.php';

if(isset($_REQUEST['medical_issu']))
{
          $id = $_REQUEST['medical_issu'];

          $querygetcode="SELECT  * FROM medical_issue where medicai_issue_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['medicai_issue_id'];

          $query1="DELETE FROM medical_issue WHERE medicai_issue_id='$a '";
          mysqli_query($con,$query1);

          header('location:doctor_dashboard.php?id=33');
}
else if(isset($_REQUEST['treat_id'])){
          $id = $_REQUEST['treat_id'];

          $querygetcode="SELECT  * FROM treat where treat_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['treat_id'];

          $query1="DELETE FROM treat WHERE treat_id='$a '";
          mysqli_query($con,$query1);
          header('location:doctor_dashboard.php?id=2');
}


else{
  header('location:doctor_dashboard.php'); 
}
?>