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
?>
<!DOCTYPE HTML>
<html lang="bn">
<head>
	<meta charset="UTF-8">
	<title>Admin | Edit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="../link/bootstrap.css" />
	<script src="../link/jquery-3.3.1.min.js"></script>
	<style> 
		.header {
			background-color: #a3dad5;
			position: fixed;
			left: 0;
			right: 0;
			top: 0;
			overflow: hidden;
			height: 100px;
		}
		nav .menu{
			position: fixed;
			background-color: #c8dedc;
			left: 0;
			top: 100px;;
			width: 250px;
			overflow: scroll;;
			height: 100%;
		}
		#last-edit{
			margin-bottom: 100px;
		}
		.section{
			padding: 10px;
			margin-top: 100px;
		}
		.section .rules{
			width: 90%;
			margin: 0 auto;
			font-family: SolaimanLipi,Arial,sans-serif;
		}
		.menu-toggle{
			cursor: pointer;
			padding: 12px;
			margin: 10px;
			background: #101412;
			transition: background-color .5s;
			width: 50px;
			color: white;
		}
		ul li{
			list-style: none;
		}
		ul li ul li{
			list-style: circle;
		}
		ul li ul li a{
			color: black;
		}
		h1{
			margin-left: 40px;
		}
		input,textarea{
			width: 100%;
			padding: 10px;
			margin: 10px;
		}
		textarea{
			height: 200px;
		}
		@media only screen and (min-width: 992px) {
			#openPageslide{
				display: none;
			}
			.section .rules{
				width: 50%;
				margin: 0 auto;
			}
			
		}
		@media only screen and (max-width: 991px) {
			.menu,.logo{
				display: none;
			}
		}
	</style>
	<script> 
		$(document).ready(function(){
			var $pageslide = $('#pageslide');
			$("#openPageslide").click(function(){
				$('#openPageslide1').show();
				$('#openPageslide').hide();
			   $pageslide.css({ 'display':'block'}).animate({'left':0 });
				return false;
			});
			 $("#openPageslide1").click(function(){
				$('#openPageslide').show();
				$('#openPageslide1').hide();
			   $pageslide.animate({'left': 300*-1 + 'px' },function(){
				  $pageslide.hide();
				});
				return false;
			});
		}); 
	</script>
</head>
<body>
	<header class="header"> 
		<div class="row"> 
			<div class="col-md-8"> 
				<span class="menu-toggle" id="openPageslide">menu</span>
				<span class="menu-toggle" id="openPageslide1" style="display:none">menu</span>
				<img src="../img/cpanel.png" alt="" width="200" style="padding-left: 20px;"/>
			</div>
			<div class="col-md-4"> 
				
			</div>
		</div>
	</header>
	<nav> 
		<div class="menu" id="pageslide"> 
			<ul>
				<li><i><img src="../img/dashboard.png" alt="cpanel" width="30"/></i><a href="index.php"> Dashboard</a></li>
				<li><i><img src="../img/edit.png" alt="TFB Post" width="30"/></i> Home Page Edit
					<ul>
						<li <?php if(isset($_GET["edit1"]) == "bodhi_edit"){echo'style="background-color: gray"';}?>><a href="edit.php?edit1=bodhi_edit">Bodhi Category Edit</a></li>
						<li <?php if(isset($_GET["edit2"]) == "voting_edit"){echo'style="background-color: gray"';}?>><a href="edit.php?edit2=voting_edit">Bodhi Voting Edit</a></li>
						<li <?php if(isset($_GET["edit3"]) == "ads_edit"){echo'style="background-color: gray"';}?>><a href="edit.php?edit3=ads_edit">Bodhi Ads Edit</a></li>
						<li <?php if(isset($_GET["edit4"]) == "video_edit"){echo'style="background-color: gray"';}?>><a href="edit.php?edit4=video_edit">Bodhi Video Edit</a></li>
						<li <?php if(isset($_GET["edit5"]) == "photo_edit"){echo'style="background-color: gray"';}?>><a href="edit.php?edit5=photo_edit">Bodhi Photo Edit</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<section class="section"> 
		<div class="rules"> 
			<?php
			include_once("config.php");
			if(isset($_GET["edit1"]) == "bodhi_edit"){
				echo'<h1 style="text-align:center">Bodhi Category Edit</h1>';
				echo'<table class="table-bordered table-hover">
					<thead class="thead-light">';
					$sql = "SELECT * FROM bodhi_news ORDER BY id DESC";
					$result = mysqli_query($conn,$sql);
					while($view  = mysqli_fetch_assoc($result)){
						echo'
						<tr>
						<td><a href="edit.php?tb1=bodhi_edit&id='.$view["id"].'">Edit</a></td>
						<td><a href="edit.php?tb1=bodhi_edit&id='.$view["id"].'">'.$view["title"].'</a></td>
						</tr>
						';
					}
				echo'</thead>
				</table>';
			}elseif(isset($_GET["edit2"]) == "voting_edit"){
				echo'<h1 style="text-align:center">Bodhi Voting Edit</h1>';
				echo'<table class="table-bordered table-hover">
					<thead class="thead-light">';
					$sql = "SELECT * FROM bodhi_poll ORDER BY id DESC";
					$result = mysqli_query($conn,$sql);
					while($view  = mysqli_fetch_assoc($result)){
						echo'
						<tr>
						<td><a href="edit.php?tb2=voting_edit&id='.$view["id"].'">Edit</a></td>
						<td><a href="edit.php?tb2=voting_edit&id='.$view["id"].'">'.$view["vot_title"].'</a></td>
						</tr>
						';
					}
				echo'</thead>
				</table>';
			}elseif(isset($_GET["edit3"]) == "ads_edit"){
				echo'<h1 style="text-align:center">Bodhi Ads Edit</h1>';
				echo'<table class="table-bordered table-hover">
					<thead class="thead-light">';
					$sql = "SELECT * FROM bodhi_ads ORDER BY id DESC";
					$result = mysqli_query($conn,$sql);
					while($view  = mysqli_fetch_assoc($result)){
						echo'
						<tr>
						<td><a href="edit.php?tb3=ads_edit&id='.$view["id"].'">Edit</a></td>
						<td><a href="edit.php?tb3=ads_edit&id='.$view["id"].'">'.$view["title"].'</a></td>
						</tr>
						';
					}
				echo'</thead>
				</table>';
			}elseif(isset($_GET["edit4"]) == "video_edit"){
				echo'<h1 style="text-align:center">Bodhi Video Edit</h1>';
				echo'<table class="table-bordered table-hover">
					<thead class="thead-light">';
					$sql = "SELECT * FROM bodhi_video ORDER BY id DESC";
					$result = mysqli_query($conn,$sql);
					while($view  = mysqli_fetch_assoc($result)){
						echo'
						<tr>
						<td><a href="edit.php?tb4=video_edit&id='.$view["id"].'">Edit</a></td>
						<td><a href="edit.php?tb4=video_edit&id='.$view["id"].'">'.$view["title"].'</a></td>
						</tr>
						';
					}
				echo'</thead>
				</table>';
			}elseif(isset($_GET["edit5"]) == "photo_edit"){
				echo'<h1 style="text-align:center">Bodhi Photo Edit</h1>';
				echo'<table class="table-bordered table-hover">
					<thead class="thead-light">';
					$sql = "SELECT * FROM tfb_album ORDER BY id DESC";
					$result = mysqli_query($conn2,$sql);
					while($view  = mysqli_fetch_assoc($result)){
						echo'
						<tr>
						<td><a href="edit.php?tb5=photo_edit&id='.$view["id"].'">Edit</a></td>
						<td><a href="edit.php?tb5=photo_edit&id='.$view["id"].'">'.$view["title"].'</a></td>
						</tr>
						';
					}
				echo'</thead>
				</table>';
				// now edit form
			}elseif(isset($_GET["tb1"]) == "bodhi_edit"){
					$id = $_GET["id"];
					$tb = $_GET["tb1"];
					$sql = "SELECT * FROM bodhi_news WHERE id='$id'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_num_rows($result);
					if($row == 1){
						if(isset($_GET["tb1"]) == "bodhi_edit" & isset($_GET["success"])){
							echo'<h2 style="text-align:center;color:green">Successfully Updated</h2>';
						}
						$view  = mysqli_fetch_assoc($result);
						echo'<h1>'.$view["title"].'</h1>';
						echo'
						<form action="edit-action.php?tb1=bodhi_edit&id='.$id.'" method="POST"> 
							<input type="text" name="title" value="'.$view["title"].'" required/>
							<textarea name="txt" required>'.$view["txt"].'</textarea>
							<input type="text" name="excerpt" value="'.$view["excerpt"].'" required/>
							<input type="text" name="tags" value="'.$view["tags"].'" required/>
							<input type="text" name="author" value="'.$view["author"].'" required/>
								<input type="text" name="fimg" value="'.$view["fimg"].'" required/>
							<input type="submit" name="submit" value="Update"/>
						</form>
						';
					}else{
						header("location: edit.php");
					}
			}elseif(isset($_GET["tb2"]) == "voting_edit"){
					$id = $_GET["id"];
					$tb = $_GET["tb2"];
					$sql = "SELECT * FROM bodhi_poll WHERE id='$id'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_num_rows($result);
					if($row == 1){
						if(isset($_GET["tb2"]) == "voting_edit" & isset($_GET["success"])){
							echo'<h2 style="text-align:center;color:green">Successfully Updated</h2>';
						}
						$view  = mysqli_fetch_assoc($result);
						echo'<h1>'.$view["vot_title"].'</h1>';
						echo'
						<form action="edit-action.php?tb2=voting_edit&id='.$id.'" method="POST"> 
							<textarea name="txt" required>'.$view["vot_title"].'</textarea>
							<input type="submit" name="submit" value="Update"/>
						</form>
						';
					}else{
						header("location: edit.php");
					}
			}elseif(isset($_GET["tb3"]) == "ads_edit"){
					$id = $_GET["id"];
					$tb = $_GET["tb3"];
					$sql = "SELECT * FROM bodhi_ads WHERE id='$id'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_num_rows($result);
					if($row == 1){
						if(isset($_GET["tb3"]) == "ads_edit" & isset($_GET["success"])){
							echo'<h2 style="text-align:center;color:green">Successfully Updated</h2>';
						}
						$view  = mysqli_fetch_assoc($result);
						echo'<h1>'.$view["title"].'</h1>';
						echo'
						<form action="edit-action.php?tb3=ads_edit&id='.$id.'" method="POST"> 
							<input type="text" name="name" value="'.$view["name"].'" required/>
							<input type="text" name="addr" value="'.$view["addr"].'" required/>
							<input type="text" name="title" value="'.$view["title"].'" required/>
							<input type="text" name="tags" value="'.$view["tags"].'" required/>
							<textarea name="txt" required>'.$view["txt"].'</textarea>
							<input type="submit" name="submit" value="Update"/>
						</form>
						';
					}else{
						header("location: edit.php");
					}
			}elseif(isset($_GET["tb4"]) == "video_edit"){
					$id = $_GET["id"];
					$tb = $_GET["tb4"];
					$sql = "SELECT * FROM bodhi_video WHERE id='$id'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_num_rows($result);
					if($row == 1){
						if(isset($_GET["tb4"]) == "video_edit" & isset($_GET["success"])){
							echo'<h2 style="text-align:center;color:green">Successfully Updated</h2>';
						}
						$view  = mysqli_fetch_assoc($result);
						echo'<h1>'.$view["title"].'</h1>';
						echo'
						<form action="edit-action.php?tb4=video_edit&id='.$id.'" method="POST"> 
							<input type="text" name="title" value="'.$view["title"].'" required/>
							<input type="text" name="tags" value="'.$view["tags"].'" required/>
							<input type="text" name="link" value="'.$view["link"].'" required/>
							<textarea name="txt" required>'.$view["about"].'</textarea>
							<input type="submit" name="submit" value="Update"/>
						</form>
						';
					}else{
						header("location: edit.php");
					}
			}elseif(isset($_GET["tb5"]) == "photo_edit"){
					$id = $_GET["id"];
					$tb = $_GET["tb5"];
					$sql = "SELECT * FROM bodhi_photo WHERE id='$id'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_num_rows($result);
					if($row == 1){
						if(isset($_GET["tb5"]) == "photo_edit" & isset($_GET["success"])){
							echo'<h2 style="text-align:center;color:green">Successfully Updated</h2>';
						}
						$view  = mysqli_fetch_assoc($result);
						echo'<h1>'.$view["title"].'</h1>';
						echo'
						<form action="edit-action.php?tb5=photo_edit&id='.$id.'" method="POST"> 
							<input type="text" name="title" value="'.$view["title"].'" required/>
							<input type="text" name="tags" value="'.$view["tags"].'" required/>
							<textarea name="txt" required>'.$view["about"].'</textarea>
							<input type="submit" name="submit" value="Update"/>
						</form>
						';
					}else{
						header("location: edit.php");
					}
			}else{
				echo"
				<h1>ব্যবহারের নিয়মাবলিঃ</h1>
				<p>
					<ul>
						<li><b>Main News Edit: </b>  এখানে হোম পেজ এর প্রধান পোস্টগুলি Edit করা হয়।</li>
						<li><b>Sub-main News Edit: </b> এখানে হোম পেজ এর দ্বিতীয় প্রধান  পোস্টগুলি Edit করা হয়।</li>
						<li><b>News Edit: </b>এখানে হোম পেজ এর তৃতীয়  পোস্টগুলি Edit করা হয়।</li>
						<li><b>TFB Schedule Edit: </b> এখানে হোম পেজ এর টিএফবি'র পরিক্রমা  পোস্টগুলি Edit করা হয়।</li>
						<li><b>TFB Intro Edit: </b> এখানে হোম পেজ এর টিএফবি'র পরিচয়  পোস্টগুলি Edit করা হয়।</li>
						<li><b>TFB Goal Edit: </b> এখানে হোম পেজ এর টিএফবি'র লক্ষ্য  পোস্টগুলি Edit করা হয়।</li>
						<li><b>Reader Edit: </b> এখানে হোম পেজ এর পাঠকপ্রিয় জেনে নাও   পোস্টগুলি Edit করা হয়।</li>
					</ul>
				</p>
				";
			}
			?>
		</div>
	</section>
	<footer> 
	
	</footer>
</body>
</html>