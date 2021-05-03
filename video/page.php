<?php
if(isset($_GET["page"])){
	$page = $_GET["page"];
}else{
	header("location: index.php");
}
function sub_category($subcategory){
	$sub = $subcategory;
	$engsub = array("category1","category2","category3","category4","category5","category6","category7","category8","category9","category10");
	$bnsub = array("দেশনা","বনভন্তের দেশনা "," ধর্মীয় গান","TFB","কঠিন চীবর দান","অনুষ্ঠানের ভিডিও","আদিবাসী নৃত্য","বসবাস ","প্রতিরূপ দেশ","বিবিধ");
	return str_replace($engsub, $bnsub, $sub);
}
error_reporting(0);
include_once("../admin/config.php");
include_once("../admin/format.php");
$category = "video";
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
	<title>ভিডিও-পাতা-<?php echo pagenum($page); ?>- বোধিধারা</title>
	<meta name="keywords" content="চাকমা, মারমা, চাকমা গান, উপজাতি , রাঙ্গামাটি ভিডিও, বোধিধারা, ত্রিশরণ ফাউন্ডেশন অব বাংলাদেশ, কঠিন চীবর দান, ত্রিপিটক, পার্বত্য চট্টগ্রামের অর্থনীতি, আদিবাসীদের জীবনযাত্রা, Chakma New Songs, Buddhist Songs, Chakma Video, Buddhist Video, পার্বত্য চট্টগ্রাম উন্নয়ন, ইতিবাচক, প, রাঙ্গামাটি খবর,খাগড়াছড়ি খবর, বান্দরবান খবর, বৌদ্ধ ভিক্ষু,বনভন্তে,রাজবনবিহার, পত্রিকা, বাংলাদেশ">
	<meta name="description" content="Chakma Video - পার্বত্য চট্টগ্রাম, parbatta online news video portal, chakma buddhist video">
	<!--for fb -->
	<meta property="og:title" content="ভিডিও-পাতা-<?php echo pagenum($page); ?>- বোধিধারা">
	<meta property="og:site_name" content="বোধিধারা">
	<meta property="og:description" content="ভিডিও খবর - Chakma Video - পার্বত্য চট্টগ্রাম, parbatta online news video portal, chakma buddhist video">
	<meta property="og:type" content="website">
	<meta property="og:url" content="/video/page.php?page=<?php echo $page; ?>">
	<meta property="og:image" content="/img/bodhidhara.png">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta name="fb:app_id" property="fb:app_id" content="549787358890465">
	<?php include_once("../inc/css-file.php"); ?>
	<link rel="stylesheet" href="/video/link/style.css"/>
	<link rel="stylesheet" href="/video/link/article.css"/>
	<link rel="stylesheet" href="/video/link/page.css"/>
</head>
<body>
	<?php include_once("../inc/bodhi-header.php"); ?>
	<section class="container"> 
		<?php include_once("inc/navs.php"); ?>
		<!-- Here a Advertisements -->
		<div class="breadcrumb"> 
			<ul>
				<li class="breadcrumb-item bred"><a href="https://www.bodhidhara.com/"></a></li>
				<li class="breadcrumb-item bred"><a href="/video">ভিডিও</a></li>
				<li class="breadcrumb-item"><a href="page.php?page=<?php echo $page; ?>">পাতা-<?php echo pagenum($page); ?></a></li>
			</ul>
		</div>
		<div class="news-multimedia news-relate"> 
			<h4 class="titlebar">ভিডিও-পাতা-<?php echo pagenum($page); ?></h4>
			<div class="row"> 
				<?php
				$per_page = 12;
				$start_form = ($page-1) * $per_page;
				$sql = "SELECT * FROM bodhi_video ORDER BY id DESC limit $start_form, $per_page";
				$result = mysqli_query($conn,$sql);
				while($view = mysqli_fetch_assoc($result)){ ?>
				<div class="col-md-3 col-6 news"> 
					<div class="each-news each-row"> 
						<a class="news-link-overly thumbnail-link" href="watch.php?id=<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
							<div class="image thumbnail"> 
								<span
								   class="lazy-image out"
								   data-class="big-img"
								   data-image="../bimg/<?php echo $view["fimg"]; ?>"
								   data-alt="<?php echo slugTitle($view["title"]); ?>">
								</span>
								<span class="video-icon glyphicon glyphicon-facetime-video top"></span>
							</div>
							<div class="thumbnail-info"> 
								<div class="news-title-holder"><h2> <?php echo $view["title"]; ?></h2></div>
								<div class="news-category-holder"><span class="dash"><?php echo sub_category($view["category"]); ?></span></div>
							</div>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="paginations">
				<?php
				error_reporting(0);
				$sql = "SELECT * FROM bodhi_video";
				$result = mysqli_query($conn, $sql);
				$rows = mysqli_num_rows($result);
				$total_pages = ceil($rows/$per_page);
				if($total_pages == $page){?>
					<a class="previous-page" href="/video/page/<?php echo $page-1; ?>"><span>&lt; &lt; </span></a>
				<?php }elseif($page == 1){ ?>
					<a class="next-page" href="/video/page/<?php echo $page+1; ?>"><span>&gt; &gt; </span></a>
				<?php }else{
					?>
					<a class="previous-page" href="/video/page/<?php echo $page-1; ?>"><span>&lt; &lt; </span></a>
					<a class="next-page" href="/video/page/<?php echo $page+1; ?>"><span>&gt; &gt; </span></a>
				
				<?php }
				?>
			</div>
		</div>
	</section>
	<!-- Here are advertisements -->
	<?php include_once("../inc/footer.php"); ?>
</body>
</html>