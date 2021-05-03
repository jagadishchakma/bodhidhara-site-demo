<?php
if(isset($_GET["page"])){
	$page = $_GET["page"];
}else{
	header("location: index.php");
}
error_reporting(0);
include_once("../admin/config.php");
include_once("../admin/format.php");
function sub_category($subcategory){
	$sub = $subcategory;
	$engsub = array("album1","album2","album3","album3","album5","album6","album7","album8","album9","album10");
	$bnsub = array("এক ফলক","বুদ্ধ শাসন "," প্রতিরূপ দেশ","দরিদ্র","TFB","জুম্ম ফ্যাশন","বিনোদন","জীবনযাপন ","ভ্রমণ","উন্নয়নের চিত্র ");
	return str_replace($engsub, $bnsub, $sub);
}
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
	<title>ছবি-পাতা-<?php echo pagenum($page); ?> - বোধিধারা</title>
	<meta name="keywords" content="বৌদ্ধ ছবি, চাকমা জীবনযাপন, আদিবাসী ছবি, আদিবাসী ফোরাম, ছবি সংবাদ, বোধিধারা, ত্রিশরণ ফাউন্ডেশন অব বাংলাদেশ, চাকমা, আদিবাসী, পার্বত্য চট্টগ্রামের অর্থনীতি, আদিবাসীদের জীবনযাত্রা,  পার্বত্য চট্টগ্রাম উন্নয়ন, ইতিবাচক, রাজবনবিহার ছবি, বাংলাদেশের বৌদ্ধ ধর্ম, রাঙ্গামাটি খবর,খাগড়াছড়ি খবর, বান্দরবান খবর, বৌদ্ধ ভিক্ষু,বনভন্তে,রাজবনবিহার,, পত্রিকা, বাংলাদেশ">
	<meta name="description" content="বৌদ্ধ খবর - পার্বত্য চট্টগ্রাম, বাংলাদেশ ও বিশ্বের বৌদ্ধ ধর্মীয় সংবাদ। Buddhist News In CHT , Bodhidhara Newspaper">
	<!--for fb -->
	<meta property="og:title" content="ছবি-পাতা-<?php echo pagenum($page); ?> - বোধিধারা">
	<meta property="og:site_name" content="বোধিধারা">
	<meta property="og:description" content="বৌদ্ধ খবর - পার্বত্য চট্টগ্রাম, বাংলাদেশ ও বিশ্বের বৌদ্ধ ধর্মীয় সংবাদ। Buddhist News In CHT , Bodhidhara Newspaper">
	<meta property="og:type" content="website">
	<meta property="og:url" content="/photo/page.php?page=<?php echo $page; ?>">
	<meta property="og:image" content="/img/bodhidhara.png">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta name="fb:app_id" property="fb:app_id" content="549787358890465">		
	<?php include_once("../inc/css-file.php"); ?>
	<link rel="stylesheet" href="/photo/link/style.css" />
	<link rel="stylesheet" href="photo/link/article.css" />
	<link rel="stylesheet" href="/photo/link/page.css">
</head>
<body>
	<?php include_once("../inc/bodhi-header.php"); ?>
	<section class="container"> 
		<?php include_once("inc/navs.php"); ?>
		<!-- Here a Advertisements -->
		<div class="breadcrumb"> 
			<ul>
				<li class="breadcrumb-item bred"><a href="https://www.bodhidhara.com/"></a></li>
				<li class="breadcrumb-item bred"><a href="/photo">ছবি</a></li>
				<li class="breadcrumb-item"><a href="page.php?page=<?php echo $page; ?>">পাতা-<?php echo pagenum($page); ?></a></li>
			</ul>
		</div>
		<div class="news-multimedia news-relate"> 
			<h4 class="titlebar">ছবি-পাতা-<?php echo pagenum($page); ?></h4>
			<div class="row"> 
				<?php
				$per_page = 12;
				$start_form = ($page-1) * $per_page;
				$sql = "SELECT * FROM bodhi_photo ORDER BY id DESC limit $start_form, $per_page";
				$result = mysqli_query($conn,$sql);
				while($view = mysqli_fetch_assoc($result)){ ?>
				<div class="col-md-3 col-6 news"> 
					<div class="each-news each-row"> 
						<a class="news-link-overly thumbnail-link" href="/photo/gallery/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
							<div class="image thumbnail"> 
								<span
								   class="lazy-image out"
								   data-class="big-img"
								   data-image="../album/<?php echo $view["fimg"]; ?>"
								   data-alt="<?php echo slugTitle($view["title"]); ?>">
								</span>
								<span class="glyphicon glyphicon-camera"></span>
							</div>
							<div class="news-title thumbnail-info"> 
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
				$sql = "SELECT * FROM bodhi_photo";
				$result = mysqli_query($conn, $sql);
				$rows = mysqli_num_rows($result);
				$total_pages = ceil($rows/$per_page);
				if($total_pages == $page){?>
					<a class="previous-page" href="/photo/page/<?php echo $page-1; ?>"><span>&lt; &lt; </span></a>
				<?php }elseif($page == 1){ ?>
					<a class="next-page" href="/photo/page/<?php echo $page+1; ?>"><span>&gt; &gt; </span></a>
				<?php }else{
					?>
					<a class="previous-page" href="/photo/page/<?php echo $page-1; ?>"><span>&lt; &lt; </span></a>
					<a class="next-page" href="/photo/page/<?php echo $page+1; ?>"><span>&gt; &gt; </span></a>
				
				<?php }
				?>
			</div>
		</div>
	</section>
	<!-- Here are advertisements -->
	<?php include_once("../inc/footer.php"); ?>
</body>
</html>