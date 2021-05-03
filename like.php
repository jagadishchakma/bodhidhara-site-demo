<?php  
include_once("admin/config.php");
if(isset($_POST["id"])){
	$like = $_POST["like"];// Bodhidhara News Like
	$id = $_POST["id"];
	$sql = "UPDATE bodhi_news SET pLike='$like' WHERE selNo='$id'";
	$result = mysqli_query($conn, $sql);
	if($result){
		echo $like;
	}
}
if(isset($_POST["adlike"])){
	$adlike = $_POST["adlike"];// Advertisement Like
	$adid = $_POST["adid"];
	$sql = "UPDATE bodhi_ads SET pLike='$adlike' WHERE selNo='$adid'";
	$result = mysqli_query($conn, $sql);
	if($result){
		echo $adlike;
	}
}
if(isset($_POST["albumlike"])){
	$albumlike = $_POST["albumlike"];// Advertisement Like
	$albumid = $_POST["albumid"];
	$sql = "UPDATE tfb_album SET pLike='$albumlike' WHERE selNo='$albumid'";
	$result = mysqli_query($conn2, $sql);
	if($result){
		echo $albumlike;
	}
}
if(isset($_POST["videolike"])){
	$videolike = $_POST["videolike"];// Video Like
	$videoid = $_POST["videoid"];
	$sql = "UPDATE bodhi_video SET pLike='$videolike' WHERE selNo='$videoid'";
	$result = mysqli_query($conn, $sql);
	if($result){
		echo $videolike;
	}
}
?>