<?php
	require_once 'connection.php';
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>SEUSL Medical Center</title>

	<!-- Load Icon -->
	<link rel="icon" type="image/png" href="img/icon/unnamed.png" sizes="300x300" />
	<!-- link css Styles -->
	<link rel="stylesheet" type="text/css" href="css/login/login_style1.css">
	<!--load all styles of fontawesome -->
	<link href="fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet"> 

	<!--  Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">

</head>
<body class="body" style="background: url(img/back/4QElO0.jpg);
	width: 100%;
	background-size: 100%;">

	<form class="form-signin" id="form" action="login.php" method="POST">

	<b><h2 id="log_in">SEUSL Health Center<br>Log In</h2></b>

	<img src="img/icon/log.ico" class="log_img" style="margin-bottom: 5%;" width="40%" class="ml-5"><br><br>

	<i class="fas fa-user"></i><input class="form_login"  placeholder="UserName" style="text-transform: uppercase;" type="text" id="uname" name="regnum"><br>
	<i class="fas fa-key"></i><input class="form_login" placeholder="Password" type="password" id="pass"  name="pass"><br><br>

	<button class="but_01" type="submit" name="submit"><b>Log In</b></button>




</form>

<?php
	if(isset($_POST['submit']))
	{
		$regnum=stripslashes($_REQUEST['regnum']);
		$password=stripslashes($_REQUEST['pass']);


		$loginsql3="SELECT * FROM medical_officer WHERE username='$regnum' AND password='".md5($password)."'";
		$result3=mysqli_query($con,$loginsql3) or mysqli_errno();
		$rows4=mysqli_num_rows($result3);
		
		if($rows4==1){
			$_SESSION['username']=$regnum;
			echo "<script type=\"text/javascript\">window.location.href='dashboard.php'; </script>";
		}
		else{
			echo "<script>alert(\"Username or Password is incorrect\");</script>";
		}
	}
?>
</body>
</html>