<?php
include_once("../admin/config.php");
include_once("../admin/format.php");
function sub_category($subcategory){
	$sub = $subcategory;
	$engsub = array("buddhistnews1","buddhistnews2","buddhistnews3","buddhistnews4","buddhistnews5","buddhistnews6","buddhistnews7","buddhistnews8","buddhistnews9");
	$bnsub = array("পূণ্যলাভ","বিহার পরিচিতি ","ধর্মীয় অনুষ্ঠান","বৌদ্ধ ব্যক্তিত্ব","স্বধর্ম উন্নয়ন","ধর্ম প্রচার","প্রতিরূপ দেশ","কঠিন চীবর দান","বিবিধ");
	return str_replace($engsub, $bnsub, $sub);
}
$a_id = $_GET['id'];
$sql = "SELECT * FROM bodhi_news WHERE selNo='$a_id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if($row === 1){
	$view = mysqli_fetch_assoc($result);
	$like = $view["pLike"];
	// Unique visitor counter
	$viewers = $view["pView"]; 
	$viewUp = $viewers+1;
	$vUpdate = "UPDATE bodhi_news SET pView='$viewUp' WHERE selNo='$a_id'";
	mysqli_query($conn,$vUpdate);
}else{
	header("location: /buddhistnews");
}
$category = "buddhistnews";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head prefix="og: http://ogp.me/ns#">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!--turn off IE compatibility mode -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0">
		
    <!-- Website SEO -->
	<title><?php echo $view["title"]; ?></title>
	<meta name="keywords" content="<?php echo $view["tag"]; ?>">
	<meta name="description" content="<?php echo seo_description($view["excerpt"]); ?>">
		
	<!--for fb -->
	<meta property="og:title" content="<?php echo $view["title"]; ?>">
	<meta property="og:site_name" content="বোধিধারা">
	<meta property="og:description" content="<?php echo seo_description($view["excerpt"]); ?>">
		
	<meta property="og:type" content="article">
	<!--<meta property="article:author" content="[author_link]" />-->
						
	<meta property="og:url" content="<?php echo $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
		
	<meta property="og:image" content="/bimg/<?php echo $view["fimg"] ;?>">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta name="fb:app_id" property="fb:app_id" content="549787358890465">
	<?php include_once("../inc/css-file.php"); ?>
	<link rel="stylesheet" href="/buddhistnews/link/style.css?v=1.4"/>
	<link rel="stylesheet" href="/buddhistnews/link/article.css?v=1.5"/>
</head>
<body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/bn_IN/sdk.js#xfbml=1&version=v5.0&appId=549787358890465&autoLogAppEvents=1"></script>
	<?php include_once("../inc/bodhi-header.php"); ?>
	<section class="section container"> 
		<?php include_once("inc/navs.php"); ?>
		<!-- Here a Advertisements -->
		<div class="breadcrumb"> 
			<ul>
				<li class="breadcrumb-item bred"> <a href="https://www.bodhidhara.com"><strong>প্রচ্ছদ</strong></a> </li>
				<li class="breadcrumb-item bred"> <a href="/buddhistnews">বৌদ্ধবার্তা</a> </li>
				<li class="breadcrumb-item"><a href="/buddhistnews"><?php echo sub_category($view["subcategory"]); ?></a> </li>
			</ul>
		</div>
		<div class="row"> 
			<div class="col-md-8 col-12"> 
				<div class="row"> 
					<div class="left-category"> 
						<div class="col-in"><a href="/buddhistnews">বৌদ্ধবার্তা সংবাদ</a></div>
					</div>
					<div class="right-title">
						<h1><?php echo $view["title"]; ?></h1>
					</div>
				</div>
				<div class="spacer"></div>
				<div class="row detail-holder"> 
					<div class="left-part"> 
						<div class="col-in"> 
							<div class="additional"> 
								<div class="glyphicon glyphicon-user author each-row"><span><?php echo $view["author"]; ?></span></div>
								<div class="glyphicon glyphicon-time time each-row"><span><?php echo get_time_ago($view["pTime"]); ?></span></div>
								<div class="share each-row">
									<h2>শেয়ার করুন:</h2> 
									<div class="inline-share">
										
									</div>
								</div>
								<div class="glyphicon glyphicon-eye-open view"><span><?php echo formatView($view["pView"]); ?> বার পড়া হয়েছে</span></div>
							</div>
						</div>
					</div>
					<div class="right-part">
						<div class="col-in"> 
							<article class="detail-content-holder">
								<div class="article-body"> 
									<?php
										$article = $view["txt"];
										if(strpos($article, "lazy-image") == FALSE){
										echo '
										<div class="blank-image"><span class="lazy-image"></span></div>
										';
										}
										echo html_entity_decode($article);
									?>
								</div>
							</article>
							<div class="more-tag">
								<a class="more-link" href="/buddhistnews/page/2">আরও সংবাদ</a>
								<?php 
								$id = $view["id"]-1;
								$limit = $id-100;
								$sql = "SELECT * FROM bodhi_news WHERE category='buddhistnews' AND id BETWEEN $limit AND $id ORDER BY id DESC limit 1";
								$result = mysqli_query($conn, $sql);
								$left = mysqli_fetch_assoc($result);
								?>
								<a class="more-link" href="/buddhistnews/article/<?php echo $left["selNo"]; ?>/<?php echo slugTitle($left["title"]); ?>">আগের সংবাদ</a>
								<?php 
								$id = $view["id"]+1;
								$limit = $id+100;
								$sql = "SELECT * FROM bodhi_news WHERE category='buddhistnews' AND id BETWEEN $id AND $limit ORDER BY id ASC limit 1";
								$result = mysqli_query($conn, $sql);
								$right = mysqli_fetch_assoc($result);
								?>
								<a class="more-link" href="/buddhistnews/article/<?php echo $right["selNo"]; ?>/<?php echo slugTitle($right["title"]); ?>">পরের সংবাদ</a>
							</div>
							<div class="additional-bottom-container">
								<div class="like-holder">  
									<span> <button class="btn btn-success like glyphicon glyphicon-thumbs-up"></button><span id="likecount"><?php echo $like; ?></span></span>
								</div>
								<div class="fb-save" data-uri="https://www.bodhidhara.com/buddhistnews/article/680111202/%E0%A6%85%E0%A6%A8%E0%A7%81%E0%A6%B0%E0%A7%81%E0%A6%A6%E0%A7%8D%E0%A6%A7-%E0%A6%AC%E0%A6%A8-%E0%A6%AC%E0%A6%BF%E0%A6%B9%E0%A6%BE%E0%A6%B0%E0%A7%87--%E0%A6%B6%E0%A7%81%E0%A6%AD%E0%A6%BE%E0%A6%97%E0%A6%AE%E0%A6%A8-%E0%A6%95%E0%A6%B0%E0%A6%B2%E0%A7%87%E0%A6%A8-%E0%A6%B8%E0%A6%BE%E0%A6%A7%E0%A6%95%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%AC%E0%A6%B0-%E0%A6%A7%E0%A6%B0%E0%A7%8D%E0%A6%AE-%E0%A6%A4%E0%A6%BF%E0%A6%B7%E0%A7%8D%E0%A6%AF-%E0%A6%AE%E0%A6%B9%E0%A6%BE%E0%A6%B8%E0%A7%8D%E0%A6%A5%E0%A6%AC%E0%A6%BF%E0%A6%B0-%E0%A6%AD%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%A4%E0%A7%87" data-size="large"></div>
								<div class="share-holder"> 
									<div class="inline-share">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-12"> 
				<div class="o-r-news"> 
					<?php 
					$sql = "SELECT * FROM bodhi_news WHERE category='buddhistnews' ORDER BY id DESC limit 8";
					$result = mysqli_query($conn, $sql);
					while($view = mysqli_fetch_assoc($result)){
					?>
					<div class="row listing-one"> 
						<a class="news-link-overly" href="/buddhistnews/article/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>">
							<div class="col-img">
								<div class="image"> 
									<span
									   class="lazy-image out"
									   data-class="big-img"
									   data-image="../bimg/<?php echo $view["fimg"]; ?>"
									   data-alt="<?php echo slugTitle($view["title"]); ?>">
									</span>
								</div>
							</div>
							<div class="col-title">
								<h2><?php echo $view["title"]; ?></h2>
							</div>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- News Comment -->
	<?php require_once("../inc/comment.php"); ?>
	<!-- News Comment Closed -->
	<div class="content-next-prev"> 
		<div class="prev content-holder"> 
			<span class="dir glyphicon glyphicon-chevron-left"></span>
			<div class="content-inner"> 
				<div class="contents"> 
					<div class="each"> 
						<a class="prev-next-link" href="/buddhistnews/article/<?php echo $left["selNo"]; ?>/<?php echo slugTitle($left["title"]); ?>"></a>
						<div class="image"> 
							<img src="../bimg/<?php echo $left["fimg"]; ?>" alt="<?php echo slugTitle($left["title"]); ?>" height="60px"/>
						</div>
						<div class="info"> 
							<div class="title-holder"> 
								<h2 class="title"><?php echo $left["title"]; ?></h2>
							</div>
							<div class="additional-prev-next"> 
							
							</div>
						</div>
					</div>
				</div>
				<div class="foot"> 
					আগের সংবাদ
				</div>
			</div>
		</div>
		<div class="content-holder next"> 
			<span class="dir glyphicon glyphicon-chevron-right"></span>
			<div class="content-inner"> 
				<div class="contents"> 
					<div class="each"> 
						<a class="prev-next-link" href="/buddhistnews/article/<?php echo $right["selNo"]; ?>/<?php echo slugTitle($right["title"]); ?>"></a>
						<div class="image"> 
							<span><img src="../bimg/<?php echo $right["fimg"]; ?>" alt="<?php echo slugTitle($right["title"]); ?>" height="60px"/></span>
						</div>
						<div class="info"> 
							<div class="title-holder"> 
								<h2 class="title"><?php echo $right["title"]; ?></h2>
							</div>
							<div class="additional-next-prev"> 
							
							</div>
						</div>
					</div>
				</div>
				<div class="foot"> 
					পরের সংবাদ
				</div>
			</div>
		</div>
	</div>
	<article class="container news-relate"> 
		<div class="row"> 
			<?php
				$sql = "SELECT * FROM bodhi_news ORDER BY id DESC limit 16";
				$result = mysqli_query($conn, $sql);
				while($view = mysqli_fetch_assoc($result)){
			?>
			<div class="col-md-3 col-6 news"> 
				<div class="each-news"> 
					<a class="news-link-overly" href="../<?php echo $view["category"]; ?>/article/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
						<div class="image"> 
							<span
							   class="lazy-image out"
							   data-class="big-img"
							   data-image="../bimg/<?php echo $view["fimg"]; ?>"
							   data-alt="<?php echo slugTitle($view["title"]); ?>">
							</span>
						</div>
						<div class="news-title"> 
							<div class="news-title-holder"><h2> <?php echo $view["title"]; ?></h2></div>
							<div class="news-summery-holder"> <p> <?php echo textShorten($view["excerpt"]); ?></p></div>
							<div class="news-category-holder"><span class="dash"><?php echo category($view["category"]); ?></span></div>
						</div>
					</a>
				</div>
			</div>
			<?php
			}
			?>
		</div>
		<div class="spacer-bottom"></div>
	</article>
	<?php include_once("../inc/footer.php"); ?>
</body>
</html>