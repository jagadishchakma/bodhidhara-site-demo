<?php
// Start the session
session_start();
include_once("admin/config.php");
function validateForm($data){
	$data = htmlspecialchars(str_replace("'","\'",$data));
	return $data;
}
if(isset($_POST["info_btn"])){
	$name = validateForm($_POST["name"]);
	$uname = validateForm($_POST["uname"]);
	$email = validateForm($_POST["email"]);
	$pwd = validateForm($_POST["pwd"]);
	$pwd = $pwd.$email;
	$authon = md5(sha1($pwd));
	$rpwd = validateForm($_POST["rpwd"]);
	$rpwd = $rpwd.$email;
	$rauthon = md5(sha1($rpwd));
	$num = date("mdh");
	$ran = rand(100,1000).$num;
	$_SESSION["ran"] = $ran;
	$_SESSION["bodhi_user_pass"] = $authon;
	$sql = "INSERT INTO bodhi_users(u_id, name, u_name, email, authon, rtyp_authon) VALUES ('$ran', '$name', '$uname', '$email', '$authon', '$rauthon')";
	if(mysqli_query($conn, $sql)){ ?>
	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<?php include_once("inc/css-file.php"); ?>
		<style> 
			#registerModal{
				padding-right: 17px;
				display: block;
				overflow-x: hidden;
				overflow-y: auto;
				opacity: 1;
				background: #554f4fcf;
			}
			.modal-dialog{
				margin-top: 100px;
			}
		</style>
	</head>
	<body>
		<div class="container"> 
			<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document"> 
				<div class="modal-content"> 
					<div class="modal-header"> 
						<h5 class="modal-title" id="registerModalLabel">Choose Photo</h5>
					</div>
					<div class="modal-body"> 
						<form action="register.php" method="POST" class="form-horizontal" role="form" name="registerForm" enctype="multipart/form-data" onsubmit="return validateRegister();" >
						  <div class="form-group">
						
							<div class="col-sm-10">
							  <input type="file" class="form-control" name="img"><br>
							  <span id="wrong"></span>
							</div>
						  </div>
						  <div class="form-group"> 
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-primary" name="img_btn">Upload</button>
							</div>
						  </div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
		<?php include_once("inc/js-file.php"); ?>
	</body>
	</html>
<?php
	}else{
	    echo "Error".mysqli_error($conn);
	}
}elseif(isset($_POST["img_btn"])){
		$lastid = $_SESSION["ran"];
		$pass = $_SESSION["bodhi_user_pass"];
		//image upload
		$uniqueimg = uniqid().$_FILES['img']['name'];
		$uniqueimg = str_replace(' ', '_', $uniqueimg);
		$destination = "busers/".$uniqueimg;
		$filename = $_FILES['img']['tmp_name'];
		if(move_uploaded_file($filename,$destination)){
			$sql = "UPDATE bodhi_users SET profile='$uniqueimg' WHERE u_id = '$lastid'";
			if(mysqli_query($conn, $sql)){
				setcookie('bodhi_user_pass', $pass, time() + (86400 * 30), "/");
				header("location: index.php");
			}else{
				echo "Data is invalid!";
			}
		}else{
			echo "Image is invalid!";
		}
}else{
	header("location: index.php");
}
?>