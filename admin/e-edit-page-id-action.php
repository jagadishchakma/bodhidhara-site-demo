<?php
include_once("config.php");
$id = $_GET["id"];
$page = $_GET["page"];
$page_edit = $_POST["page-edit"];
$page_edit = str_replace("'","\'",$page_edit);
$sql = "UPDATE bodhi_paper SET $page='$page_edit' WHERE id=$id";

if(mysqli_query($conn, $sql)){
	header("location: e-edit-page-id.php?id=$id&page=$page&type=succeess");
}else{
	echo"Error";
}
?>