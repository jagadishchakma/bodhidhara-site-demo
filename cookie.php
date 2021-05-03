<?php
if(isset($_POST["name"])){
	$cookie_name = $_POST["name"];
	$cookie_value = $_POST["value"];
	setcookie($cookie_name, $cookie_value, time()+ (86400 * 365), '/');
}else{
	$cookie_name = $_POST["remove"];
	setcookie($cookie_name, '', time()+ 3600);
}
?>