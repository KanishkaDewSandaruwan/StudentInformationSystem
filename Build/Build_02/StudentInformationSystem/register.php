<?php
	require_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
form.reg_form{
	margin-top: 3%;
	text-align: center;
	margin-left:30%;
	/*margin-top: 50px;*/
	background-color: white;
	width: 30%;
	height: 700px;
	border: 1px solid black;
	padding: 2%;
	padding-top: 0px;
	border-radius: 2em;
}
form img{
	width: 200px;
	height: 200px;
	margin-top: 10%;
}
form h2{
	color: #0f3460;
	font-size: 30px;
	margin-top: 5%;
}
label.reg_label{
	color: #0f3460;
	font-size: 2vw;

}
button.reg_but{
	width: 80%;
	margin-top: 2%;
	height: 60px;
	background-color: #0f3460;
	color: white;
	font-size: 1.5vw;
	text-align: center;
	cursor: pointer;

}
input.reg_box{
	width: 80%;
	height: 30px;
	margin-top: 2%;
}	
#sign_in{
	text-transform: uppercase;
	font-size: 2vw;	
}

</style>
</head>
<body style="background: url(img/back/4QElO0.jpg);
	width: 100%;
	background-size: 100%;">

<form class="reg_form" action="register.php" method="POST">
	<h2 id="sign_in">Register</h2>
	<img src="img/login.png" class="img"><br><br>

	<label class="reg_label"> Registration Number</label><br>
	<input class="reg_box" type="text" id="uname_reg" name="regnum"><br><br><br>

	<button class="reg_but" type="submit" name="submit"><b>Go Next</b></button><br><br>
	<button class="reg_but" type="button" onclick="window.location.href='login.php'"><b>Back</b></button><br><br>


	<?php
	if(isset($_POST['submit'])){
		$username=stripslashes($_REQUEST['regnum']);

		$registersql1="SELECT * from student_login where regnumber='$username'";
		$result1=mysqli_query($con,$registersql1);
		$row = mysqli_fetch_assoc($result1);

		$registersql2="SELECT * from students where regnumber='$username'";
		$result2=mysqli_query($con,$registersql2);

		if(mysqli_num_rows($result2) > 0){
			$pass = $row['password'];

			if(empty($pass)){
				header('location:password.php?reg='.$username.'');
			}else{
				echo '<script>alert("You Alrady Registerd");
					window.location.href="login.php";
					</script>';
			}

		}else{
			echo '<script>alert("Registration Number is Wrong or Your Not Register Yet"); </script>';
		}
	}
?>

</form>

</body>
</html>