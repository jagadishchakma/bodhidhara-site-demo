<!DOCTYPE HTML>
<html lang="bn">
<head>
	<meta charset="UTF-8">
	<title> Admin Log In </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="../link/bootstrap.css"/>
	<style> 
		.login{
			width: 320px;
			margin: 0 auto;
			padding-top: 40px;
			padding-left: 20px;
		}
	</style>
	<script>
		// Style for show password
		function myFunction() {
			var x = document.getElementById("myInput");
			if(x.type === "password" ) {
				x.type = "text";
			}else {
				x.type = "password";
			}
		}
	</script>
</head>
<body>
	<div class="container">
		<div class="login"> 
			
			<img src="../img/cpanel.png" alt="" width="200" style="padding-left: 20px;"/>
			<form action="login_action.php" method="POST"> 
				<div class="form-group"> 
					<label class="gray form-control-label"> Name </label><br>
					<input type="text" class="form-control" name="u_name" required=""/><br>
					<small id="wrong"></small>
				</div>
				<div class="form-group"> 
					<label class="gray form-control-label"> Password </label><br>
					<input type="password" class="form-control" id="myInput" name="u_pass" required=""/><br>
					<small id="wrong1"></small> <br>
					<input style="color:mediumblue" type="checkbox" onclick="myFunction()"/> Show Password <br>
				</div>
				<?php 
					if(isset($_REQUEST['error'])){
						echo'<b style="color:red">username or password error!</b> <br>';
					}
				?>
				<input type="submit" class="btn btn-warning" value="Log in" name="submit" id="login"/>
			</form>
		</div>
	</div>
</body>
</html>












