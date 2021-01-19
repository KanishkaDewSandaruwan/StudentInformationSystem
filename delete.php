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

          header('location:dashboard.php?id=33');
}
else if(isset($_REQUEST['drug_id']))
{
          $id = $_REQUEST['drug_id'];

          $querygetcode="SELECT  * FROM drugs where drug_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['drug_id'];

          $query1="DELETE FROM drugs WHERE drug_id='$a '";
          mysqli_query($con,$query1);
          header('location:dashboard.php?id=18');

}  else if(isset($_REQUEST['treat_id'])){
          $id = $_REQUEST['treat_id'];

          $querygetcode="SELECT  * FROM treat where treat_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['treat_id'];

          $query1="DELETE FROM treat WHERE treat_id='$a '";
          mysqli_query($con,$query1);
          header('location:dashboard.php?id=2');
}

else if(isset($_REQUEST['doc_id']))
{
          $id = $_REQUEST['doc_id'];

          $querygetcode="SELECT  * FROM doctor where did='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['did'];
          $name=$result_row['full_name'];

          $query2="SELECT * FROM treat WHERE doc_id='$a'";
          $sql2=mysqli_query($con,$query2);


          $query9="SELECT * FROM medical_issue WHERE doctor='$a'";
          $sql9=mysqli_query($con,$query9);
          

          while ($row = mysqli_fetch_assoc($sql2)) {
            $trid=$row['treat_id'];
            $query4="UPDATE treat SET doc_id='$name' WHERE treat_id='".$trid."'";
            mysqli_query($con,$query4);
          }

          while ($row9 = mysqli_fetch_assoc($sql9)) {
            $mid = $row9['medicai_issue_id'];
            $query5="UPDATE medical_issue SET doctor='$name' WHERE medicai_issue_id='".$mid."'";
            mysqli_query($con,$query5);
          }

          $query1="DELETE FROM doctor WHERE did='$a '";
          mysqli_query($con,$query1);
          header('location:dashboard.php?id=1'); 
}
else if(isset($_REQUEST['sid']))
{
          $id = $_REQUEST['sid'];

          $querygetcode="SELECT  * FROM students where sid='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['sid'];
          $reg=$result_row['regnumber'];

          $query1="DELETE FROM students WHERE sid='$a '";
          mysqli_query($con,$query1);

          $query1="DELETE FROM treat WHERE reg_num='$reg '";
          mysqli_query($con,$query1);

          $query1="DELETE FROM medical_issue WHERE reg_num='$reg '";
          mysqli_query($con,$query1);


          header('location:view.php'); 
}
else if(isset($_REQUEST['office_id']))
{
          $id = $_REQUEST['office_id'];

          $querygetcode="SELECT  * FROM medical_officer where office_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['office_id'];

          $query1="DELETE FROM medical_officer WHERE office_id='$a '";
          mysqli_query($con,$query1);
          header('location:dashboard.php?id=14');  
}
else{
  header('location:dashboard.php'); 
}
?>