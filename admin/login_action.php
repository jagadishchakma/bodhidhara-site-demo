<?php
	include_once("config.php");
	if(isset($_POST["submit"])){
		$name = $_POST["u_name"];
		$pass = $_POST["u_pass"];
		$pass = md5(sha1($pass));
		$sql = "SELECT * FROM bodhi_admin WHERE name='$name' AND pass='$pass'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_num_rows($result);
		if($result == true) {
			if($row == 1) {
			    setcookie('adminpass',$pass,time()+10020,'admin');
				header("location: index.php");
				echo'<h1 style="color: green;font-size:25px">Login Successfully</h1>';
			}else{
				header('location: login.php?error');
			}
		}else{
			header('location: login.php?error');
		}
	}
?>