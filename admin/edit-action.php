<?php
include_once("config.php");
$cookie = $_COOKIE['adminpass'];
$sql = "SELECT * FROM bodhi_admin WHERE pass='$cookie'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if($row == 1){
	
}else{
	header("location: login.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_GET["tb1"]) AND isset($_GET["id"])){
	$id = $_GET["id"];
	$tb = $_GET["tb1"];
	$title = $_POST["title"];
	$author = $_POST["author"];
	$title = str_replace("'","\'",$title);
	$tags = $_POST["tags"];
	$txt = $_POST["txt"];
	$txt = str_replace("'","\'",$txt);
	$excerpt = $_POST["excerpt"];
	$excerpt = str_replace("'","\'",$excerpt);
	$fimg = $_POST["fimg"];
	$edit = "UPDATE bodhi_news SET title='$title', txt='$txt', excerpt='$excerpt', tags='$tags', author='$author', fimg='$fimg' WHERE id='$id'";
	if(mysqli_query($conn,$edit)){
		header("location: edit.php?tb1=bodhi_edit&id=$id&success");
	}else{
		echo "Error";
	}
}
if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_GET["tb2"]) AND isset($_GET["id"])){
	$id = $_GET["id"];
	$tb = $_GET["tb2"];
	$txt = $_POST["txt"];
	$txt = str_replace("'","\'",$txt);
	
	$edit = "UPDATE bodhi_poll SET vot_title='$txt' WHERE id='$id'";
	if(mysqli_query($conn,$edit)){
		header("location: edit.php?tb2=voting_edit&id=$id&success");
	}else{
		echo "Error";
	}
}
if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_GET["tb3"]) AND isset($_GET["id"])){
	$id = $_GET["id"];
	$name = $_POST["name"];
	$addr = $_POST["addr"];
	$title = $_POST["title"];
	$title = str_replace("'","\'",$title);
	$tags = $_POST["tags"];
	$txt = $_POST["txt"];
	$txt = str_replace("'","\'",$txt);
	
	$edit = "UPDATE bodhi_ads SET name='$name', addr='$addr', title='$title', tags='$tags', txt='$txt' WHERE id='$id'";
	if(mysqli_query($conn,$edit)){
		header("location: edit.php?tb3=ads_edit&id=$id&success");
	}else{
		echo "Error";
	}
}
if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_GET["tb4"]) AND isset($_GET["id"])){
	$id = $_GET["id"];
	$title = $_POST["title"];
	$title = str_replace("'","\'",$title);
	$tags = $_POST["tags"];
	$link = $_POST["link"];
	$link = str_replace("'","\'",$link);
	$txt = $_POST["txt"];
	$txt = str_replace("'","\'",$txt);
	
	$edit = "UPDATE bodhi_video SET title='$title', tags='$tags', about='$txt', link='$link'	WHERE id='$id'";
	if(mysqli_query($conn,$edit)){
		header("location: edit.php?tb4=video_edit&id=$id&success");
	}else{
		echo "Error";
	}
}
if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_GET["tb5"]) AND isset($_GET["id"])){
	$id = $_GET["id"];
	$title = $_POST["title"];
	$title = str_replace("'","\'",$title);
	$tags = $_POST["tags"];
	$txt = $_POST["txt"];
	$txt = str_replace("'","\'",$txt);
	
	$edit = "UPDATE tfb_album SET title='$title', tags='$tags', about='$txt' WHERE id='$id'";
	if(mysqli_query($conn2,$edit)){
		header("location: edit.php?tb5=photo_edit&id=$id&success");
	}else{
		echo "Error";
	}
}











