 <?php
require_once 'admin.php'; //Check login  
ob_start();
if(isset($_REQUEST['medical_issu'])){

	 function fetch_data()  
	 {  
	      $output = ''; 
	      $connect = mysqli_connect("localhost", "root", "", "medicalinfo");

	      	$q4 = "SELECT * FROM students where regnumber = '".$_REQUEST['medical_issu']."'"; 
            $res4 = mysqli_query($connect,$q4);
            $row5 = mysqli_fetch_assoc($res4);

	      $sql = "SELECT * FROM treat join medical_issue on treat.treat_id = medical_issue.treat_id join doctor on doctor.did = treat.doc_id  where treat.reg_num ='".$_REQUEST['medical_issu']."'"; 
	       $result = mysqli_query($connect, $sql);  
	      while($row = mysqli_fetch_array($result))  
	      {       
	      $output .= '<tr>  
	                          <td>'.$row["trndate"].'</td>  
	                          <td>'.$row["reg_num"].'</td>  
	                          <td>'.$row["full_name"].'</td>  
	                          <td>'.$row["description"].'</td>  
	                     </tr>  
	                          ';  
	      }  
	      return $output;  
	 }  
	 if(isset($_POST["create_pdf"]))  
	 {  
	      require_once('tcpdf/tcpdf.php'); 
	      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
	      $obj_pdf->SetCreator(PDF_CREATOR);  
	      $obj_pdf->SetTitle("Faculty of Technology - Lecture Attendance Details Report");  
	      $obj_pdf->SetTitle("Faculty of Technology - Lecture Attendance Details Report");  
	      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
	      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
	      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
	      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
	      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
	      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
	      $obj_pdf->setPrintHeader(false);  
	      $obj_pdf->setPrintFooter(false);  
	      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
	      $obj_pdf->SetFont('helvetica', '', 10);  
	      $obj_pdf->AddPage();  
	      $content = '';  
	      $content = '  
	      <h3 align="center">Faculty of Technology - Medical Report</h3><br /><br /> 
	      <table border="1" cellspacing="0" cellpadding="5">  
	           <tr>  
	                <th width="20%">Date</th>  
	                <th width="20%">Registration Number</th>  
	                <th width="10%">Doctor Name</th>  
	                <th width="50%">Descriptione</th>  
	           </tr>  
	      ';  
	      $content .= fetch_data();  
	      $content .= '</table>';  
	      $obj_pdf->writeHTML($content);  
	      $obj_pdf->Output(''.$_REQUEST['date'].'_'.$_REQUEST['medical_issu'].'_Attendance.pdf', 'I');  
	 }  

 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>SEUSL - Reports</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
           <link rel="stylesheet" type="text/css" href="css/boot.css">           
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">
           		
                <h3 align="center">Faculty of Technology - Medical Report</h3><br />  
                <div class="table-responsive"> 
                     <table class="table table-bordered" style="width: 100%; border: 1px solid red;">  
                          <tr>  
                               <th width="10%">Date</th>  
                               <th width="20%">Registration Number</th>  
                               <th width="5%">doctor Name</th>  
                               <th width="30%">Description</th>  
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                     <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                          <button type="button" onclick="window.location.href='attend_report_check.php'" class="btn btn-success">Go Back</button>
                          <button type="button" onclick="window.location.href='dashboard.php'" class="btn btn-success">Go to Dashboard</button>
                     </form> 
<?php } ?>
                </div>  
           </div>  
      </body>  
 </html>  