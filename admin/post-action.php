<?php
include_once("config.php");
$cookie = $_COOKIE['adminpass'];
$sql = "SELECT * FROM bodhi_admin WHERE pass='$cookie'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if($row == 1){
	// Bodhidhara categoryPost
	if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["bodhi-post"])){
		$title = $_POST['title'];
		$title = str_replace("'","\'",$title);
		$text = $_POST['txt'];
		$text = str_replace("'","\'",$text);
		$excerpt = $_POST['excerpt'];
		$excerpt = str_replace("'","\'",$excerpt);
		$tag = $_POST['tag'];
		$author = $_POST['author'];
		$category = $_POST['category'];
		$subcategory = $_POST['subcategory'];
		// unique users id generate
		$num = date("mdh");
		$ran = rand(100,1000).$num;
		$img = $_POST["img"];
		
		// Inserted
		$sql = "INSERT INTO bodhi_news(title,txt,excerpt,tags,selNo,fimg,author,category,subcategory) VALUES('$title','$text','$excerpt','$tag','$ran','$img','$author','$category','$subcategory')";
		if(mysqli_query($conn, $sql)) {
			header("location: post.php?post1=bodhi_post&type=successfully");
		}else{
			echo"Not".mysqli_error($conn);
		}
		// Bodhidhara Voting Post
	}elseif($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["voting-submit"])){
		$text = $_POST['txt'];
		$text = str_replace("'","\'",$text);
		// unique poll id generate
		$num = date("mdh");
		$ran = rand(100,1000).$num;
		$sql = "INSERT INTO bodhi_poll(selNo, vot_title) VALUES ('$ran','$text')";
		if(mysqli_query($conn,$sql)){
			header("location: post.php?post2=voting_post & type=successfully");
		}else{
			echo"Not inserted";
		}
		// Bodhidhara Ads Post
	}elseif($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["ads-submit"])){
		$name = $_POST["name"];
		$add = $_POST["address"];
		$passion = $_POST["passion"];
		$title = $_POST["title"];
		$txt = $_POST["txt"];
		$txt = str_replace("'","\'",$txt);
		$category = $_POST["category"];
		// unique users id generate
		$num = date("mdh");
		$ran = rand(100,1000).$num;
		//image upload 1
		$uniqueimg1 = uniqid().$_FILES['pic1']['name'];
		$destination = "../adimg/".$uniqueimg1;
		$filename = $_FILES['pic1']['tmp_name'];
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES['pic1']['tmp_name']);
		if($check == false) {
			$a = 0;
		}else{
			move_uploaded_file($filename,$destination);
		}
		// image upload 2
		$uniqueimg2 = uniqid().$_FILES['pic2']['name'];
		$destination = "../adimg/".$uniqueimg2;
		$filename = $_FILES['pic2']['tmp_name'];
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES['pic2']['tmp_name']);
		if($check == false) {
			$a = 0;
		}else{
			move_uploaded_file($filename,$destination);
		}
		//image upload 3
		$uniqueimg3 = uniqid().$_FILES['pic3']['name'];
		$destination = "../adimg/".$uniqueimg3;
		$filename = $_FILES['pic3']['tmp_name'];
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES['pic3']['tmp_name']);
		if($check == false) {
			$a = 0;
		}else{
			move_uploaded_file($filename,$destination);
		}
		$sql = "INSERT INTO bodhi_ads(name,selNo,addr,passion,title,txt,category,pic1,pic2,pic3) VALUES ('$name','$ran','$add','$passion','$title','$txt','$category','$uniqueimg1','$uniqueimg2','$uniqueimg3')";
		if(mysqli_query($conn,$sql)){
			header("location: post.php?post3=ads_post & type=successfully");
		}else{
			echo"not".mysqli_error($conn);
		}
		// Bodhidhara Video Upload
	}elseif($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["video-submit"])){
		$title = $_POST['title'];
		$title = str_replace("'","\'",$title);
		$author = $_POST['author'];
		$tag = $_POST['tags'];
		$category = $_POST['category'];
		$link = $_POST['link'];
		$link = str_replace("'","\'",$link);
		$txt = $_POST['txt'];
		$txt = str_replace("'","\'",$txt);
		// unique users id generate
		$num = date("mdh");
		$ran = rand(100,1000).$num;
		//image upload
		$uniqueimg = uniqid().$_FILES['img']['name'];
		$destination = "../bimg/".$uniqueimg;
		$filename = $_FILES['img']['tmp_name'];
		move_uploaded_file($filename,$destination);
		// Inserted
		$sql = "INSERT INTO bodhi_video(selNo, author, title, tags, about, link, category, fimg) VALUES('$ran', '$author', '$title', '$tag', '$txt', '$link', '$category', '$uniqueimg')";
		if(mysqli_query($conn, $sql)) {
			header("location: post.php?post4=video_post & type=successfully");
		}else{
			echo"Not".mysqli_error($conn);
		}
		// Bodhidhara Photo Upload
	}elseif($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["photo-submit"])){
		$title = $_POST['title'];
		$title = str_replace("'","\'",$title);
		$author = $_POST["author"];
		$text = $_POST['txt'];
		$text = str_replace("'","\'",$text);
		$tag = $_POST['tags'];
		$excerpt = $_POST['excerpt'];
		$category = $_POST['category'];
		// unique users id generate
		$num = date("mdh");
		$ran = rand(100,1000).$num;
		$img = $_POST["img"];
		// Inserted
		$sql = "INSERT INTO bodhi_photo(selNo,author,title,tags,category,about,excerpt,fimg) VALUES('$ran','$author','$title','$tag','$category','$text','$excerpt','$img')";
		if(mysqli_query($conn, $sql)) {
			header("location: post.php?post5=photo_post & type=successfully");
		}else{
			echo"Not".mysqli_error($conn);
		}
		
	}
}else{
	header("location: login.php");
}

?>