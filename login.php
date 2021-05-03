<?php

include_once("admin/config.php");
function validateForm($data){
	$data = htmlspecialchars(str_replace("'","\'",$data));
	return $data;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$email = validateForm($_POST["email"]);
	$pass = validateForm($_POST["pwd"]);
	$authon = $pass.$email;
	$authon = md5(sha1($authon));
	$sql = "SELECT * FROM bodhi_users WHERE  authon='$authon'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($result);
	if($result) {
		if($row == 1){
			setcookie('bodhi_user_pass',$authon,time()+(86400 * 365),'/');
			echo "Login Successful";
		}else{
			echo "ক্রটি! চেষ্টা করুন";
		}
	}else{
		echo "চেষ্টা করুন";
	}
}else{
	header("location: https://www.bodhidhara.com");
}

?>