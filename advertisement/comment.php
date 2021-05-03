<?php
	$id = $_GET["id"];
	$category = $_GET["category"];
	include_once("../admin/config.php");
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_COOKIE["bodhi_user_pass"])){
			$pass = $_COOKIE["bodhi_user_pass"];
			$sql = "SELECT * FROM bodhi_users WHERE authon='$pass'";
			$result = mysqli_query($conn,$sql);
			$view = mysqli_fetch_assoc($result);
			$name = $view["name"];
			$img = $view["profile"];
			$com = $_POST["com"];
			$sql = "INSERT INTO ads_comments(news_id,name,uimg,com) VALUES ('$id','$name','$img','$com')";
			if(mysqli_query($conn, $sql)){
				$sql = "SELECT * FROM bodhi_ads WHERE selNo = '$id'";
				$result = mysqli_query($conn, $sql);
				$view = mysqli_fetch_assoc($result);
				$comment = $view["pComment"]+1;
				$update = "UPDATE bodhi_ads SET pComment = '$comment' WHERE selNO = '$id'";
				if(mysqli_query($conn, $update)){
					echo "আপনার মন্তব্য গ্রহণ করা হয়েছে।";
				}
			}
		}else{
			$name = $_POST["guest-name"];
			$img = "profile.png";
			$com = $_POST["com"];
			$sql = "INSERT INTO ads_comments(news_id,name,uimg,com) VALUES ('$id','$name','$img','$com')";
			if(mysqli_query($conn, $sql)){
				$sql = "SELECT * FROM bodhi_ads WHERE selNo = '$id'";
				$result = mysqli_query($conn, $sql);
				$view = mysqli_fetch_assoc($result);
				$comment = $view["pComment"]+1;
				$update = "UPDATE bodhi_ads SET pComment = '$comment' WHERE selNO = '$id'";
				if(mysqli_query($conn, $update)){
					echo "আপনার মন্তব্য গ্রহণ করা হয়েছে।";
				}
			}
		}
	}else{
		header("location: /advertisement/");
	}
?>