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
	<title>ত্রিশরণ ফাউন্ডেশন অব বাংলাদেশ</title>
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
		
		@media only screen and (min-width: 992px) {
			#openPageslide{
				display: none;
			}
			.section{
				margin-left: 250px;
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
				<li><i><img src="../img/dashboard.png" alt="cpanel" width="30"/></i><a href=""> Dashboard</a></li>
				<li><i><img src="../img/post.png" alt="Bodhidhara Post" width="30"/></i> Post
					<ul>
						<li><a href="post.php?post1=bodhi_post">Bodhi Category Post</a></li>
						<li><a href="post.php?post2=voting_post">Bodhi Voting Post </a></li>
						<li><a href="post.php?post3=ads_post">Bodhi Ads  Post</a></li>
						<li><a href="post.php?post4=video_post">Bodhi Video Upload </a></li>
						<li><a href="post.php?post5=photo_post">Bodhi Photo Upload </a></li>
					</ul>
				</li>
				<li><i><img src="../img/edit.png" alt="Bodhidhara Edit" width="30"/></i> Edit
					<ul>
						<li><a href="edit.php?edit1=bodhi_edit">Bodhi Category Edit</a></li>
						<li><a href="edit.php?edit2=voting_edit">Bodhi Voting Edit</a></li>
						<li><a href="edit.php?edit3=ads_edit">Bodhi Ads Edit</a></li>
						<li><a href="edit.php?edit4=video_edit">Bodhi Video Edit</a></li>
						<li><a href="edit.php?edit5=photo_edit">Bodhi Photo Edit</a></li>
					</ul>
				</li>
				<li><span class="glyphicon glyphicon-paperclip"></span> E-paper Post
					<ul>
						<li><a href="e-post.php?post1=first_post">First Page Post</a></li>
						<li><a href="e-post.php?post2=second_post">Second Page Post</a></li>
						<li><a href="e-post.php?post3=third_post">Third Page Post</a></li>
						<li><a href="e-post.php?post4=news_post">News Page Post</a></li>
						<li><a href="e-post.php?post5=last_post">Last Page Post</a></li>
					</ul>
				</li>
				<li><a href="e-edit.php"><span class="glyphicon glyphicon-paperclip"></span> E-paper Edit</a></li>
			</ul>
			<div style="height: 100px;"></div>
		</div>
	</nav>
	<section class="section"> 
		<div class="rules"> 
			<h1>Bodhidhara E-paper Edit</h1>
			<table border="1"> 
				<tr>
					<th>Paper ID</th>
				</tr>
				<tr>
				<?php
				$sql = "SELECT * FROM bodhi_paper";
				$query = mysqli_query($conn, $sql);
				while($view=mysqli_fetch_assoc($query)){
					echo '<td><a href="e-edit-page.php?id='.$view["id"].'">'.$view["id"].'</a></td>';
				}
				?>
				</tr>
			</table>
		</div>
	</section>
	<footer> 
	
	</footer>
</body>
</html>