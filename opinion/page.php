<?php
if(isset($_GET["page"])){
	$page = $_GET["page"];
}else{
	header("location: index.php");
}
error_reporting(0);
include_once("../admin/config.php");
include_once("../admin/format.php");
$category = "opinion";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head prefix="og: http://ogp.me/ns#">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!--turn off IE compatibility mode -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, maximum-scale=1, user-scalable=0">
	<!-- Website SEO -->
	<title>মতামত -সংবাদ-পাতা-<?php echo pagenum($page); ?>- বোধিধারা</title>
	<meta name="keywords" content="মতামত, নানা বিষয়ে জনগনের মতামত, আলোচনা, মন্তব্য, অভিমত, বোধিধারা, আত্মজীবনী, ছাত্ররাজনীতি, পত্রিকা, বাংলাদেশ">
	<meta name="description" content="মতামত - নানা সমসাময়িক বিষয়ে জনগনের মন্তব্য, অভিমত, বিশ্লেষণ বিষয়ক ফিচার। বোধিধারা, বাংলাদেশের সর্বাধিক পঠিত অনলাইন বাংলা সংবাদপত্র/পত্রিকা।">
	<!--for fb -->
	<meta property="og:title" content="মতামত -সংবাদ-পাতা-<?php echo pagenum($page); ?>- বোধিধারা">
	<meta property="og:site_name" content="বোধিধারা">
	<meta property="og:description" content="মতামত - নানা সমসাময়িক বিষয়ে জনগনের মন্তব্য, অভিমত, বিশ্লেষণ বিষয়ক ফিচার। বোধিধারা, বাংলাদেশের সর্বাধিক পঠিত অনলাইন বাংলা সংবাদপত্র/পত্রিকা।">
	<meta property="og:type" content="website">
	<meta property="og:url" content="/opinion/page/<?php echo $page; ?>">
	<meta property="og:image" content="/img/bodhidhara.png">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta name="fb:app_id" property="fb:app_id" content="549787358890465">
	<?php include_once("../inc/css-file.php"); ?>
	<link rel="stylesheet" href="/opinion/link/style.css"/>
	<link rel="stylesheet" href="/opinion/link/page.css"/>
</head>
<body>
	<?php include_once("../inc/bodhi-header.php"); ?>
	<section class="container"> 
		<?php include_once("inc/navs.php"); ?>
		<!-- Here a Advertisements -->
		<div class="breadcrumb"> 
			<ul>
				<li class="breadcrumb-item bred"> <a href="/opinion"></a> </li>
				<li class="breadcrumb-item bred"> <a href="/opinion">মতামত</a> </li>
				<li class="breadcrumb-item"> <a href="opinion/page/<?php echo $page; ?>">পাতা-<?php echo pagenum($page); ?></a> </li>
			</ul>
		</div>
		<div class="row"> 
			<div class="col-md-8 col-12">
				<h4 class="titlebar">মতামত-সংবাদ-পাতা-<?php echo pagenum($page); ?></h4>
				<div class="page-view-news"> 
					<?php
					$per_page = 8;
					$start_form = ($page-1) * $per_page;
					$sql = "SELECT * FROM bodhi_news WHERE category='opinion' ORDER BY id DESC limit $start_form, $per_page";
					$result = mysqli_query($conn,$sql);
					while($view = mysqli_fetch_assoc($result)){?>
					<div class="last-news"> 
						<a class="news-link-overly" href="/opinion/article/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
						<div class="row"> 
							<div class="col-md-4 col-5"> 
								<div class="image"> 
									<span
									   class="lazy-image out"
									   data-class="big-img"
									   data-image="../bimg/<?php echo $view["fimg"]; ?>"
									   data-alt="<?php echo slugTitle($view["title"]); ?>">
									</span>
								</div>
							</div>
							<div class="col-md-8 col-7"> 
								<div class="news-title-holder"><h2>  <?php echo $view["title"]; ?> </h2></div>
								<div class="news-summery-holder"><p>  <?php echo textShorten($view["excerpt"]); ?> </p></div>
								<div class="news-date-holder"><span> <?php echo get_time_ago($view["pTime"]); ?> </span></div>
							</div>
						</div> 
						</a>
					</div>
					<?php
					}	
					?>
				</div>
				<div class="paginations">
					<?php
					error_reporting(0);
					$sql = "SELECT * FROM bodhi_news WHERE category='opinion'";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					$total_pages = ceil($rows/$per_page);
					if($total_pages == $page){?>
						<a class="previous-page" href="/opinion/page/<?php echo $page-1; ?>"><span>&lt; &lt; </span></a>
					<?php }elseif($page == 1){ ?>
						<a class="next-page" href="/opinion/page/<?php echo $page+1; ?>"><span>&gt; &gt; </span></a>
					<?php }else{
						?>
						<a class="previous-page" href="/opinion/page/<?php echo $page-1; ?>"><span>&lt; &lt; </span></a>
						<a class="next-page" href="/opinion/page/<?php echo $page+1; ?>"><span>&gt; &gt; </span></a>
					
					<?php }
					?>
				</div>
			</div>
			<div class="col-md-4 col-12 page-other"> 
				<div class="page-other-news"> 
					<h2 class="title-bar">মতামত</h2>
					<div class="row"> 
						<?php
						$sql = "SELECT * FROM bodhi_news WHERE category='opinion' ORDER BY id DESC limit 4";
						$result = mysqli_query($conn,$sql);
						while($view = mysqli_fetch_assoc($result)){?>
						<div class="col-6 new-col"> 
							<a class="news-link-overly" href="/opinion/article/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
								<div class="image"> 
									<span
									   class="lazy-image out"
									   data-class="big-img"
									   data-image="../bimg/<?php echo $view["fimg"]; ?>"
									   data-alt="<?php echo slugTitle($view["title"]); ?>">
									</span>
								</div>
								<div class="title-holder">
									<h2 class="title"><?php echo $view["title"]; ?></h2>
								</div>
							</a>
						</div>
						<?php
						}
						?>
					</div>
				</div>
				<div class="widget-news"> 
					<div class="tabs"> 
						<ul class="nav nav-tabs">
							<li class="nav-item tab-one"><span class="nav-link">সর্বশেষ</span></li>
							<li class="nav-item tab-two"><span class="nav-link">আলোচিত</span></li>
							<li class="nav-item tab-three"><span class="nav-link">জনপ্রিয়</span></li>
						</ul>
					</div>
					<div class="tabs-content"> 
						<div class="each-tab tab-content-one"> 
							<ul>
							<?php
							$sql = "SELECT * FROM bodhi_news ORDER BY id DESC limit 5";
							$result = mysqli_query($conn,$sql);
							while($view = mysqli_fetch_assoc($result)){?>
							<li><a href="/<?php echo $view["category"];?>/article/<?php echo $view["selNo"];?>/<?php echo slugTitle($view["title"]);?>">
								<span class="count"><span class="glyphicon glyphicon-time"><span class="time-ago"><?php echo get_time_ago($view["pTime"]); ?></span></span></span>
								<span class="tab-list-title"><?php echo $view["title"]; ?></span>
								</a></li>
							<?php
							}
							?>
							</ul>
						</div>
						<div class="each-tab tab-content-two">
							<ul>
								<?php
								$sql = "SELECT * FROM bodhi_news ORDER BY pComment DESC limit 5";
								$result = mysqli_query($conn,$sql);
								while($view = mysqli_fetch_assoc($result)){?>
								<li><a href="/<?php echo $view["category"];?>/article/<?php echo $view["selNo"];?>/<?php echo slugTitle($view["title"]);?>">
									<span class="count"><span class="glyphicon glyphicon-comment"><span><?php echo formatView($view["pComment"]); ?></span></span></span>
									<span class="tab-list-title"><?php echo $view["title"]; ?></span>
									</a></li>
								<?php
								}
								?>
							</ul>
						</div>
						<div class="each-tab tab-content-three"> 
							<ul>
								<?php
								$sql = "SELECT * FROM bodhi_news ORDER BY pLike DESC limit 5";
								$result = mysqli_query($conn,$sql);
								while($view = mysqli_fetch_assoc($result)){?>
								<li><a href="/<?php echo $view["category"];?>/article/<?php echo $view["selNo"];?>/<?php echo slugTitle($view["title"]);?>">
									<span class="count"><span class="glyphicon glyphicon-thumbs-up"><span><?php echo formatView($view["pLike"]); ?></span></span></span>
									<span class="tab-list-title"><?php echo $view["title"]; ?></span>
									</a></li>
								<?php
								}
								?>
							</ul>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function(){
						$(".widget-news .tabs-content .each-tab:first").show();
						$(".widget-news .tabs .nav-item:first").addClass("active");
						$(".tab-one").click(function(){
							$(this).addClass("active");
							$(".tab-two, .tab-three").removeClass("active");
							$(".tab-content-one").show();
							$(".tab-content-two, .tab-content-three").hide();
						});
						$(".tab-two").click(function(){
							$(this).addClass("active");
							$(".tab-one, .tab-three").removeClass("active");
							$(".tab-content-two").show();
							$(".tab-content-one, .tab-content-three").hide();
						});
						$(".tab-three").click(function(){
							$(this).addClass("active");
							$(".tab-one, .tab-two").removeClass("active");
							$(".tab-content-three").show();
							$(".tab-content-one, .tab-content-two").hide();
						});
					});
				</script>
			</div>
		</div>
	</section>
	<!---- Here are advertisements--->
	<?php include_once("../inc/footer.php"); ?>
</body>
</html>