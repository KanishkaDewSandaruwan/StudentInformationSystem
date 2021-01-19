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
	height: 750px;
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
<?php

	$regs = $_REQUEST['reg'];


	echo '<form class="reg_form" action="password.php?reg='.$regs.'" method="POST">
		<h2 id="sign_in">Create Password</h2>
		<img src="img/login.png" class="img"><br><br>

		<label class="reg_label"><b>Password</b></label><br>
		<input class="reg_box" type="password" name="pass"><br><br>

		<label class="reg_label" ><b>Confirm Password</b></label><br><br>
		<input class="reg_box" type="password" id="pass_reg" name="conf_pass"><br><br>

		<button class="reg_but" type="submit" name="submit"><b>Register</b></button><br><br>
		<button class="reg_but" type="button" onclick="window.location.href=\'login.php\'"><b>Login</b></button><br><br>';

	if(isset($_POST['submit'])){
		

		$pass=stripslashes($_REQUEST['pass']);
		$conf_pass=stripslashes($_REQUEST['conf_pass']);

		$loginsql3="SELECT * FROM students WHERE regnumber='$regs'";
		$result3=mysqli_query($con,$loginsql3) or mysqli_errno();
		$rows4=mysqli_fetch_assoc($result3);
		$sid = $rows4['sid'];

			if(!empty($pass)){
				if(!empty($conf_pass)){
					if($pass==$conf_pass){

						$passave = md5($pass);

						$qu = "INSERT INTO student_login(regnumber,password,sid) values('$regs','$passave','$sid')";
						$res = mysqli_query($con,$qu);
						 if($res){
						 	echo '<script>alert("Registration Successfuly");
						 			window.location.href="login.php";
						 	 </script>';
						 }else{
						 	echo "Sever Error";
						 }

					}else{ echo "Password is Not Match";}
				}else{ echo "Please confirm Password";}
			}else{ echo "Please Enter Password";}
}
?>
</form>

</body>
</html>