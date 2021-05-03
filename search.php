<?php
include_once("admin/config.php");
include_once("admin/format.php");
$q = $_GET["q"];
$sql = "INSERT INTO seo_list(keyword) VALUES ('$q')";
mysqli_query($conn, $sql);
?>
<!DOCTYPE HTML>
<html lang="bn">
<head prefix="og: https://ogp.me/ns#">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!--turn off IE compatibility mode -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, maximum-scale=1, user-scalable=0">
	<!-- Website SEO -->
	<title>বৌদ্ধবার্তা খবর - বোধিধারা</title>
	<meta name="keywords" content="বৌদ্ধবার্তা, বৌদ্ধবার্তা খবর, পূণ্যলাভ, বিহার পরিচিতি, ধর্মীয় অনুষ্ঠান, বৌদ্ধ ব্যক্তিত্ব, স্বধর্ম উন্নয়ন, ধর্ম প্রচার, প্রতিরূপ দেশ, কঠিন চীবর দান, বিবিধ, আদিবাসী, পার্বত্য চট্টগ্রামের বৌদ্ধ, প্রতিরূপ দেশ, বৌদ্ধ খবর, বৌদ্ধবার্তা বৌদ্ধ খবর , বৌদ্ধ রাষ্ট্র,  বৌদ্ধ ভিক্ষু,বনভন্তে,রাজবনবিহার,জাতক সমগ্র, বিশুদ্ধি মার্গ">
	<meta name="description" content="বৌদ্ধবার্তা খবর - বৌদ্ধ রাষ্ট্র,জাপান, বৌদ্ধ খবর ও বিশ্বের বৌদ্ধ ধর্মের অবদান। বৌদ্ধবার্তা , বৌদ্ধ শিক্ষা, বৌদ্ধ বার্তা, বৌদ্ধ মনন, বাংলায় সমগ্র বৌদ্ধবার্তা প্রকাশ, বিনয় পিটক, সূত্র পিটক, অভিধর্ম পিটক">
	<!--for fb -->
	<meta property="og:title" content="বৌদ্ধবার্তা খবর - বোধিধারা">
	<meta property="og:site_name" content="বোধিধারা">
	<meta property="og:description" content="বৌদ্ধবার্তা খবর - বৌদ্ধ রাষ্ট্র,জাপান, বৌদ্ধ খবর ও বিশ্বের বৌদ্ধ ধর্মের অবদান। বৌদ্ধবার্তা , বৌদ্ধ শিক্ষা, বৌদ্ধ বার্তা, বৌদ্ধ মনন, বাংলায় সমগ্র বৌদ্ধবার্তা প্রকাশ, বিনয় পিটক, সূত্র পিটক, অভিধর্ম পিটক">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.tfbonline.net/buddhistnews">
	<meta property="og:image" content="https://www.tfbonline.net/img/bodhidhara.png">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta name="fb:app_id" property="fb:app_id" content="549787358890465">		
	<?php include_once("inc/css-file.php"); ?>
	<style> 
	.search-type{
		background-color: transparent;
		border: none;
		margin: 0;
		padding: 0;
		color: rgba(0,0,0,.87);
		word-wrap: break-word;
		outline: none;
		display: flex;
		flex: 100%;
		-webkit-tap-highlight-color: transparent;
		margin-top: -37px;
	}
    .search{
		border-bottom-left-radius: 0;
		border-bottom-right-radius: 0;
		border-color: rgba(223,225,229,0);
		box-shadow: 0 1px 6px 0 rgba(32,33,36,0.28);
		background: #fff;
		display: flex;
		border-radius: 8px;
		border: 1px solid #dfe1e5;
		box-shadow: none;
		height: 39px;
		width: 638px;
		border-radius: 24px;
		z-index: 3;
		height: 44px;
		margin: 0 auto;
	}
	.sdk{
		flex: 1;
		display: flex;
		padding: 5px 4px 0 16px;
		padding-left: 20px;
	}
	.input-box{
		display: flex;
		flex: 1;
		flex-wrap: wrap;
	}
.submit button{
    flex: 0 0 auto;
    padding-right: 13px;
	height: 44px;
    width: 44px;
    background: transparent;
    border: none;
    cursor: pointer;
	padding: 0;
	border-radius: 0;
	box-sizing: border-box;
    align-items: flex-start;
    text-align: center;
	text-rendering: auto;
    color: initial;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    margin: 0em 0em 0em 0em;
}	
.font-holder{
	    background: none;
		color: #4285f4;
		height: 24px;
		width: 24px;
		margin: auto;
		display: block;
}
.font{
	display: inline-block;
    fill: currentColor;
    height: 24px;
    line-height: 24px;
    position: relative;
    width: 24px;
}
.input{
	color: transparent;
    flex: 100%;
    white-space: pre;
    font: 16px arial,sans-serif;
    line-height: 34px;
    height: 34px !important;
}




@media only screen and (min-width: 1200px){
	.area-wrap,.footer-area{
		margin: 0 auto;
		width: 45%;
		max-width: 880px;
	}
}
@media only screen and (min-width: 992px){
	.area-wrap,.footer-area{
		margin: 0 auto;
		width: 65%;
		max-width: 960px;
	}
}
@media only screen and (min-width: 768px){
	.area-wrap,.footer-area{
		margin: 0 auto;
		width: 80%;
		max-width: 768px;
	}
}


.top-nav{
	float: left;
    position: relative;
    white-space: nowrap;
    align-items: baseline;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    min-width: 782px;
}
.top-nav ul li{
	height: 26px;
	line-height: 16px;
	margin: 11px 1px 0;
	display: inline-block;
	outline-width: 0;
    outline: none;
	position: relative;
}
.top-nav ul li.load{
	border-bottom: 3px solid #1A73E8;
    color: #1A73E8;
}
.top-nav ul li a{
	padding: 0 12px;
}
.top-nav ul li a .title{
	padding-left: 15px;
}

.icon-all:before{
	font-family: 'Glyphicons Halflings';
	content: "\e003";
	position: absolute;
	left: 0;
}
.icon-video:before{
	font-family: 'Glyphicons Halflings';
	content:"\e059";
	position: absolute;
	left: 0;
}
.icon-image:before{
	font-family: Glyphicons Halflings;
	content: "\e046";
	position: absolute;
	left: 0;
}
.icon-news:before{
	font-family: 'Glyphicons Halflings';
	content: "\e162";
	position: absolute;
	left: 0;
}
.resultset{
	overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    padding-top: 8px;
    padding-bottom: 0;
    padding-right: 8px;
	color: #777;
	display: block;
    top: 0;
    -webkit-transition: all 220ms ease-in-out;
}
.topic-bar{
	color: #609;
	text-decoration: none;
}
.video-bar{
	font-size: 20px;
    line-height: 1.3;
	font-weight: normal;
    margin: 10px;
    padding: 0;
}
.video-result{
	margin-top: 20px;
}
.title-topic{
	color: #1a0dab;
	font-size: 18px;
    line-height: 1.3;
}
.title-from{
	font-size: 16px;
    padding-top: 1px;
    line-height: 1.5;
}
cite{
	color: #006621;
    font-style: normal;
}
.col-12{
	padding: 0px;
	margin-top: 20px;
}
.col-12 a:hover{
	text-decoration: underline;
}
.image-result{
	margin-top: 50px;
}
.image-bar{
	font-size: 20px;
    line-height: 1.3;
	font-weight: normal;
    margin: 10px;
    padding: 0;
}
.q-related{
	margin-top: 50px;
}
.related-bar{
	color: #222;
    height: auto;
    padding-bottom: 8px;
	font-size: 20px;
    line-height: 1.3;
	font-weight: normal;
}
.q-related ul li{
	list-style-type: none;
}
.q-related ul li a{
	color: #1a0dab;
	text-decoration: none;
}
.q-related ul li a:hover{
	text-decoration: underline;
}
.time{
	font-size: 16px;
}

footer{
	background: rgba(64, 49, 49, 0.11);
}
footer .footer-area{
	padding: 15px;
}
footer .footer-area ul li{
	display: inline-block;
	list-style: none;
	padding-left: 15px;
	padding-right: 15px;
}

.multimedia{
	border: 1px solid #dfe1e5;
    border-radius: 8px;
    box-shadow: none;
	background-color: #fff;
    display: block;
    overflow: hidden
}
.video-title{
	padding: 5px;
}
.video a{
	color: #1a0dab;
}
.video a:hover {
	text-decoration: underline;
}
.image{
	position: relative;
}
.play-icon{
	position: absolute;
	background-image: url("img/play.png");
	background-size: 48px 48px;
	bottom: 0;
	color: #fff;
	left: 0;
	height: 48px;
	margin: auto;
	opacity: 0.8;
	right: 0;
	top: 0;
	width: 48px;
}
.glyphicon-camera{
	position: absolute;
	bottom: 0;
	color: #fff;
	left: 0;
	height: 48px;
	margin: auto;
	opacity: 0.8;
	right: 0;
	top: 0;
	width: 48px;
	font-size: 30px;
}
#active1{
	font-size: 30px;
}
.pagination{
	padding: 20px;
}
.result{
	position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: white;
    color: black;
	z-index: 100;
}
form{
	position: relative;
}
@media only screen and (min-width: 768px){
	.navigation-bar{
		position: fixed;
		top: 0;
		background: #fff;
		box-shadow: 0 5px 5px -5px #000;
		z-index: 9;
		right: 0;
		left: 0;
	}
	.area-wrap{
		margin-top: 70px;
	}
}
.area-wrap{
	padding: 10px;
	overflow: hidden;
}
.glyphicon.glyphicon-user {

    background: white;
    padding: 10px;
    border-radius: 50%;

}
@media only screen and (max-width: 992px){
	.search{
		width: 400px;
	}
	.container{
		margin-right: 15px;
		margin-left: 15px;
	}
}
@media only screen and (max-width: 668px){
	.search,form{
		width: 100%;
	}
	.container{
		margin-right: 15px;
		margin-left: 15px;
	}
	.navbar-brand{
		width: 300px;
		margin: 0 auto;
		display: block;
	}
	.user-profile{
		position: absolute;
		right: 20px;
		top: 15px;
	}
}
.image-result .col-12, .video-result .col-12{
	padding: 5px;
	</style>
</head>
<body>
	<header class="navigation-bar"> 
		<nav class="navbar bg-light navbar-light">
			<div class="container">
				<a href="#" class="navbar-brand">
					<span><img src="../logo.png" alt="" width="50" height="55"/>বোধিধারা</span>
				</a>
				<form action="search.php" method="GET">
					<div class="search"> 
						<div class="sdk"> 
							<div class="input-box"> 
								<div class="input"> </div>
								<input class="search-type" type="text" name= "q" value="<?php echo $_GET["q"]; ?>"/>
								<div class="result">
							
								</div>
							</div>
						</div>
						<div class="submit"> 
							<button type="submit" name="x-type-search" value="<?php echo $_GET["x-type-search"]; ?>">
								<span class="font-holder"> 
									<span class=" font glyphicon glyphicon-search"> 
										
									</span>
								</span>
							</button>
						</div>
					</div>
				</form>
				<div class="user-profile"> 
					<span class="glyphicon glyphicon-user"></span>
				</div>
			</div>
		</nav>
	</header>
	<div class="area-wrap"> 	
		<section> 
			<div class="top-nav"> 
				<ul>
					<li <?php if($_GET["x-type-search"] == "all"){ echo 'class="load"';}?>><a href="search.php?x-type-search=all&q=<?php echo $_GET["q"]; ?>"><span class="icon-all"></span><span class="title">All</span></a></li>
					<li <?php if($_GET["x-type-search"] == "video"){ echo 'class="load"';}?>><a href="search.php?x-type-search=video&q=<?php echo $_GET["q"]; ?>"><span class="icon-video"></span></span><span class="title">Video</span></a></li>
					<li <?php if($_GET["x-type-search"] == "image"){ echo 'class="load"';}?>><a href="search.php?x-type-search=image&q=<?php echo $_GET["q"]; ?>"><span class="icon-image"></span><span class="title">Image</span></a></li>
					<li <?php if($_GET["x-type-search"] == "news"){ echo 'class="load"';}?>><a href="search.php?x-type-search=news&q=<?php echo $_GET["q"]; ?>"><span class="icon-news"></span><span class="title">News</span></a></li>
				</ul>
			</div>
			<div class="resultset"> 
				<?php
				$total = "";
				$sub = $_REQUEST["q"];
				$aKeyword = explode(" ", $sub);
				$query = "SELECT * FROM bodhi_video WHERE title LIKE '%".$aKeyword[0]."%'";
				$result = mysqli_query($conn, $query); 	 
				if(mysqli_num_rows($result) > 0){
					$total .= mysqli_num_rows($result);
				}
				$query = "SELECT * FROM bodhi_news WHERE txt LIKE '%".$aKeyword[0]."%' OR title LIKE '%".$aKeyword[0]."%'";
				$result = mysqli_query($conn, $query); 	 
				if(mysqli_num_rows($result) > 0){
					$total .= mysqli_num_rows($result);
				}
				?>
				<span>প্রায় <?php echo $total; ?>টি ফলাফল পাওয়া গেছে</span>
			</div>
			<div class="topic"> 
				<span>ফলাফলগুলি প্রদর্শিত- <a class="topic-bar" href="search.php?x-type-search=<?php echo $_GET["x-type-search"]; ?>&q=<?php echo $sub; ?>"><?php echo $sub; ?></a></span>
			</div>
			<?php if($_GET["x-type-search"] == "all"){ ?>
			<div class="video-result"> 
				<?php 
				$sub = $_REQUEST["q"];
				$aKeyword = explode(" ", $sub);
				$query = "SELECT * FROM bodhi_video WHERE title LIKE '%".$aKeyword[0]."%' limit 3";
				$result = mysqli_query($conn, $query); 	 
				$rows = mysqli_num_rows($result);
				if($rows > 0){
					echo '
					<h3 class="video-bar">ভিডিওগুলি</h3>
					<div class="row">
					';
					while($view = mysqli_fetch_assoc($result)){
						echo '
						<div class="col-md-4 col-sm-4 col-12"> 
							<div class="multimedia"> 
								<a href="/video/watch/'.$view["selNo"].'/'.slugTitle($view["title"]).'"> 
									<div class="image"> 
										<span class="play-icon"></span>
										<img src="bimg/'.$view["fimg"].'" alt="" width="100%" height="150"/>
									</div>
									<div class="video-title"> 
										<span>'.$view["title"].'</span>
									</div>
								</a>
							</div>
						</div>
						';
					}
					echo '</div>';
				}		
				
			?>
					
			</div>
			<div class="news-result"> 
				<div class="row">
					<?php
					$per_page = 3;
					if(isset($_GET['page'])){
						$page = $_GET['page'];
					}else{
						$page = 1;
					}
					$start_form = ($page-1) * $per_page;
					
					$sub = $_REQUEST["q"];
					$aKeyword = explode(" ", $sub);
					$query = "SELECT * FROM bodhi_news WHERE txt LIKE '%".$aKeyword[0]."%' OR title LIKE '%".$aKeyword[0]."%' limit $start_form, $per_page";
					$result = mysqli_query($conn, $query); 	 
					$rows = mysqli_num_rows($result);
					if($rows > 0){
						while($view = mysqli_fetch_assoc($result)){
						echo '
						<div class="col-12"> 
							<div class="result-title"> 
								<a href="/'.$view["category"].'/article/'.$view["selNo"].'/'.slugTitle($view["title"]).'"> 
									<div class="title-topic"><h3>'.$view["title"].'</h3></div>
									<div class="title-from"><cite>'.category($view["category"]).' › '.seosubcategory($view["subcategory"]).'</cite></div>
								</a>
							</div>
							<div class="summery"> 
								<p class="summery-text"><span class="time"> '.get_time_ago($view["pTime"]).'</span> - '.stextShorten($view["txt"]).' </p>
							</div>
						</div>
						';
						}
					}
					?>	
				</div>
			</div>
			<div class="image-result"> 
				<?php 
				$sub = $_REQUEST["q"];
				$aKeyword = explode(" ", $sub);
				$query = "SELECT * FROM tfb_album WHERE title LIKE '%".$aKeyword[0]."%' OR about LIKE '%".$aKeyword[0]."%' limit 3";
				$result = mysqli_query($conn2, $query); 	 
				$rows = mysqli_num_rows($result);
				if($rows > 0){
					echo '
					<h3 class="image-bar">ছবিগুলি</h3>
					<div class="row">
					';
					while($view = mysqli_fetch_assoc($result)){
						echo '
						<div class="col-md-4 col-sm-4 col-12"> 
							<div class="multimedia"> 
								<a href="/video/watch/'.$view["selNo"].'/'.slugTitle($view["title"]).'"> 
									<div class="image"> 
										<span class="glyphicon glyphicon-camera"></span>
										<img src="album/'.$view["img"].'" alt="" width="100%" height="150"/>
									</div>
									<div class="video-title"> 
										<span>'.$view["title"].'</span>
									</div>
								</a>
							</div>
						</div>
						';
					}
					echo '</div>';
				}		
				
				?>
			</div>
			
			<?php 
			}
			elseif($_GET["x-type-search"] == "video"){
			?>
			<div class="video-result"> 
				<?php 
				$sub = $_REQUEST["q"];
				$aKeyword = explode(" ", $sub);
				$query = "SELECT * FROM bodhi_video WHERE title LIKE '%".$aKeyword[0]."%'";
				$result = mysqli_query($conn, $query); 	 
				$rows = mysqli_num_rows($result);
				if($rows > 0){
					echo '
					<h3 class="video-bar">ভিডিওগুলি</h3>
					<div class="row">
					';
					while($view = mysqli_fetch_assoc($result)){
						echo '
						<div class="col-md-4 col-sm-4 col-12"> 
							<div class="multimedia"> 
								<a href="/video/watch/'.$view["selNo"].'/'.slugTitle($view["title"]).'"> 
									<div class="image"> 
										<span class="play-icon"></span>
										<img src="bimg/'.$view["fimg"].'" alt="" width="100%" height="150"/>
									</div>
									<div class="video-title"> 
										<span>'.$view["title"].'</span>
									</div>
								</a>
							</div>
						</div>
						';
					}
					echo '</div>';
				}		
				
				?>
					
			</div>
			<?php 
			}
			elseif($_GET["x-type-search"] == "image"){
			?>
			<div class="image-result"> 
				<?php 
				$sub = $_REQUEST["q"];
				$aKeyword = explode(" ", $sub);
				$query = "SELECT * FROM tfb_album WHERE title LIKE '%".$aKeyword[0]."%' OR about LIKE '%".$aKeyword[0]."%'";
				$result = mysqli_query($conn2, $query); 	 
				$rows = mysqli_num_rows($result);
				if($rows > 0){
					echo '
					<h3 class="image-bar">ছবিগুলি</h3>
					<div class="row">
					';
					while($view = mysqli_fetch_assoc($result)){
						echo '
						<div class="col-md-4 col-sm-4 col-12"> 
							<div class="multimedia"> 
								<a href="/photo/gallery/'.$view["selNo"].'/'.slugTitle($view["title"]).'"> 
									<div class="image"> 
										<span class="glyphicon glyphicon-camera"></span>
										<img src="album/'.$view["img"].'" alt="" width="100%" height="150"/>
									</div>
									<div class="video-title"> 
										<span>'.$view["title"].'</span>
									</div>
								</a>
							</div>
						</div>
						';
					}
					echo '</div>';
				}		
				
				?>
			</div>
			<?php 
			}
			elseif($_GET["x-type-search"] == "news"){
			?>
			<div class="news-result"> 
				<div class="row">
					<?php
					$per_page = 3;
					if(isset($_GET['page'])){
						$page = $_GET['page'];
					}else{
						$page = 1;
					}
					$start_form = ($page-1) * $per_page;
					
					$sub = $_REQUEST["q"];
					$aKeyword = explode(" ", $sub);
					$query = "SELECT * FROM bodhi_news WHERE txt LIKE '%".$aKeyword[0]."%' OR title LIKE '%".$aKeyword[0]."%' limit $start_form, $per_page";
					$result = mysqli_query($conn, $query); 	 
					$rows = mysqli_num_rows($result);
					if($rows > 0){
						while($view = mysqli_fetch_assoc($result)){
						echo '
						<div class="col-12"> 
							<div class="result-title"> 
								<a href="#"> 
									<div class="title-topic"><h3>'.$view["title"].'</h3></div>
									<div class="title-from"><cite>'.$view["category"].' › '.$view["subcategory"].'</cite></div>
								</a>
							</div>
							<div class="summery"> 
								<p class="summery-text"><span class="time"> '.get_time_ago($view["pTime"]).'</span> - '.stextShorten($view["txt"]).' </p>
							</div>
						</div>
						';
						}
					}
					?>	
				</div>
			</div>
			<?php
			}
			else{
			?>
			
			<?php 
			}
			?>
		</section>
		<article> 
			<div class="q-related"> 
				<?php
				$sub = $_REQUEST["q"];
				$aKeyword = explode(" ", $sub);
				$query = "SELECT * FROM seo_list WHERE keyword LIKE '%".$aKeyword[0]."%' limit 8";
				$result = mysqli_query($conn, $query); 	 
				$rows = mysqli_num_rows($result);
				if($rows > 0){
					echo '
					<h3 class="related-bar">লোকজন আরও খুজেন...</h3>
					<ul>
					';
					while($view = mysqli_fetch_assoc($result)){
						echo '<li><a href="search.php?x-type-search='.$_GET["x-type-search"].'&q='.$view["keyword"].'">'.$view["keyword"].'</a></li>';
					}
					echo '</ul>';
				}	
				?>
			</div>
			<div class="pagination"> 
				<!--pagination start-->
					<?php
					error_reporting(0);
					$sub = $_REQUEST["q"];
					$aKeyword = explode(" ", $sub);
					$sql = "SELECT * FROM bodhi_news WHERE txt LIKE '%".$aKeyword[0]."%' OR title LIKE '%".$aKeyword[0]."%'";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					$total_pages = ceil($rows/$per_page);
					?>
					<nav class="Page navigation example">
						<ul class="pagination pagination-md">
						<?php
							for($i = 1; $i < $total_pages; $i++){
								if($i == $page+1 || $i == $page+2 || $i == $page+3 ||  $i == $page || $i == $page-1 || $i == $page-2){
										?>
										<li <?php if($_GET['page'] == $i){echo'id="active1"';}?>><a class="page-link" href="search.php?x-type-search=<?php echo $_GET["x-type-search"]; ?>&q=<?php echo $sub; ?>&page=<?php echo $i;?>"><?php echo $i; ?></a></li>
										<?php
								}
							}
						?>	
						</ul>
					</nav>
					<!--pagination end-->
			</div>
		</article>
	</div>
	<footer> 
		<div class="footer-area">
			<ul>
				<li><a href="privacy">Privacy Policy</a></li>
				<li><a href="terms">Terms of Use</a></li>
				<li><a href="about">About</a></li>
				<li><a href="contact">Contact</a></li>
			</ul>
		</div>
	</footer>
	<script src="link/jquery-3.3.1.min.js"></script>
	<script> 
		// For Search Function 
		$(document).ready(function(){
			$('input[type="text"]').on("keyup input", function(){
				/* Get input value on change */
				var inputVal = $(this).val();
				var resultDropdown = $(this).siblings(".result");
				if(inputVal.length){
					$.get("q_search.php", {search: inputVal}).done(function(data){
						// Display the returned data in browser
						resultDropdown.html(data);
					});
				} else{
					resultDropdown.empty();
				}
			});
			
			// Set search input value on click of result item
			$(document).on("click", ".result p", function(){
				$(this).parents(".search-box").find('input[type="text"]').val($(this).text());
				$(this).parent(".result").empty();
			});
		});
	</script>
</body>
</html>