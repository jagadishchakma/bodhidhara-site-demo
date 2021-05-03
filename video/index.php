<?php
error_reporting(0);
include_once("../admin/config.php");
include_once("../admin/format.php");
function sub_category($subcategory){
	$sub = $subcategory;
	$engsub = array("category1","category2","category3","category4","category5","category6","category7","category8","category9","category10");
	$bnsub = array("দেশনা","বনভন্তের দেশনা "," ধর্মীয় গান","TFB","কঠিন চীবর দান","অনুষ্ঠানের ভিডিও","আদিবাসী নৃত্য","বসবাস ","প্রতিরূপ দেশ","বিবিধ");
	return str_replace($engsub, $bnsub, $sub);
}
$category = "video";
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
	<title>ভিডিও- বোধিধারা</title>
	<meta name="keywords" content="চাকমা, মারমা, চাকমা গান, উপজাতি , রাঙ্গামাটি ভিডিও, বোধিধারা, ত্রিশরণ ফাউন্ডেশন অব বাংলাদেশ, কঠিন চীবর দান, ত্রিপিটক, পার্বত্য চট্টগ্রামের অর্থনীতি, আদিবাসীদের জীবনযাত্রা, Chakma New Songs, Buddhist Songs, Chakma Video, Buddhist Video, পার্বত্য চট্টগ্রাম উন্নয়ন, ইতিবাচক, প, রাঙ্গামাটি খবর,খাগড়াছড়ি খবর, বান্দরবান খবর, বৌদ্ধ ভিক্ষু,বনভন্তে,রাজবনবিহার, পত্রিকা, বাংলাদেশ">
	<meta name="description" content="Chakma Video - পার্বত্য চট্টগ্রাম, parbatta online news video portal, chakma buddhist video">
	<!--for fb -->
	<meta property="og:title" content="ভিডিও - বোধিধারা">
	<meta property="og:site_name" content="বোধিধারা">
	<meta property="og:description" content="ভিডিও খবর - Chakma Video - পার্বত্য চট্টগ্রাম, parbatta online news video portal, chakma buddhist video">
	<meta property="og:type" content="website">
	<meta property="og:url" content="/video">
	<meta property="og:image" content="/img/bodhidhara.png">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta name="fb:app_id" property="fb:app_id" content="549787358890465">		
	<?php include_once("../inc/css-file.php"); ?>
	<link rel="stylesheet" href="/video/link/style.css" />
	<link rel="stylesheet" href="/video/link/article.css" />
</head>
<body>
	<?php include_once("../inc/bodhi-header.php"); ?>
	<div class="container">
		<section class="section"> 
			<?php include_once("inc/navs.php"); ?>
			<!-- Here a Advertisements -->
			<div class="breadcrumb"> 
				<ul>
					<li class="breadcrumb-item bred"> <a href="https://www.bodhidhara.com"><strong>প্রচ্ছদ</strong></a> </li>
					<li class="breadcrumb-item"> <a href="/video"> ভিডিও </a> </li>
				</ul>
			</div>
			<div class="row main-news-section">
				<div class="col-md-6 news"><!-- Video Main News-->
					<?php
					$sql = "SELECT * FROM bodhi_video ORDER BY id DESC limit 1";
					$result = mysqli_query($conn, $sql);
					while($view = mysqli_fetch_assoc($result)){ ?>
					<div class="main-news">
						<a href="/video/watch/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>">
							<div class="image"> 
								<span
								   class="lazy-image out"
								   data-class="big-img"
								   data-image="../bimg/<?php echo $view["fimg"]; ?>"
								   data-alt="<?php echo slugTitle($view["title"]); ?>">
								</span>
								
								<span class="video-icon glyphicon glyphicon-facetime-video top"></span>
							</div>
							<div class="info"> 
								<h2 class="title-holder"><?php echo $view["title"]; ?></h2>
							</div>
						</a>
					</div>
					<?php } ?>
				</div><!-- Closed -->
				<?php
					$a = "SELECT * FROM bodhi_video ORDER BY id DESC limit 3";
					$b = mysqli_query($conn, $a);
					$x = 1;
					while($c = mysqli_fetch_assoc($b)){
						$y = $x++;
						$array[$y] = $c["id"];
					}
					$row2 = $array[2];
					$row3 = $array[3];
				?>
				<div class="col-md-3 news-sub"><!-- Video Sub News -->
				<?php
				$sql = "SELECT * FROM bodhi_video WHERE id IN ('$row2','$row3') ORDER BY id DESC";
				$result = mysqli_query($conn, $sql);
				while($view = mysqli_fetch_assoc($result)){
				?>
				<div class="main-sub-news news"> 
					<a href="/video/watch/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>">
						<div class="image"> 
							<span
							   class="lazy-image out"
							   data-class="big-img"
							   data-image="../bimg/<?php echo $view["fimg"]; ?>"
							   data-alt="<?php echo slugTitle($view["title"]); ?>">
							</span>
							
							<span class="video-icon glyphicon glyphicon-facetime-video top"></span>
						</div>
						<div class="info"> 
							<h3 class="title-holder"><?php echo $view["title"]; ?></h3>
						</div>
					</a>
				</div>
				<?php
					}
				?>
				</div><!-- Closed -->
				<?php			
				$sql = "SELECT * FROM bodhi_ads WHERE id=2";
				$result = mysqli_query($conn, $sql);
				while($view = mysqli_fetch_assoc($result)){ ?>
				<div class="col-3 add-show"> 
					<a href="/advertisement/article/<?php echo $view['selId']?>/<?php echo slugTitle($view['title']); ?>">
						<div class="adds-img"><img src="../adimg/<?php echo $view['pic1']?>" alt="<?php echo slugTitle($view['title']); ?>" width="100%" height="300"/><span class="ads-icon" title="Ads by TFB">ads</span></div>
						<div class="adds-title"><h2><?php echo $view['title']?></h2></div>
					</a>
				</div><!-- Closed -->
				<?php } ?>
			</div>
			<div class="news-relate"><!-- Video News Relate -->
				<div class="news-multimedia"> 
					<div class="row video-multimedia">
						<?php
						$a = "SELECT * FROM bodhi_video ORDER BY id DESC limit 11";
						$b = mysqli_query($conn, $a);
						$x = 1;
						while($c = mysqli_fetch_assoc($b)){
							$y = $x++;
							$array[$y] = $c["id"];
						}
						$row4 = $array[4];
						$row5 = $array[5];
						$row6 = $array[6];
						$row7 = $array[7];
						$row8 = $array[8];
						$row9 = $array[9];
						$row10 = $array[10];
						$row11 = $array[11];
						?>
						<?php
						$sql = "SELECT * FROM bodhi_video WHERE id IN ('$row4','$row5','$row6','$row7','$row8','$row9','$row10','$row11') ORDER BY id DESC";
						$result = mysqli_query($conn, $sql);
						while($view = mysqli_fetch_assoc($result)){
						?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/video/watch/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
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
				</div>	
			</div><!-- Closed -->
		</section>
		<!-- Here A Advertisements -->
		<article class="article-last"> 
			<div class="division-video"> <!-- Video Collection One --> 
				<div class="news-multimedia"> 
					<?php		
					$sql = "SELECT * FROM bodhi_video WHERE category='video1' ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>দেশনা</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/video/watch/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-img"
										   data-image="../bimg/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										
										<span class="video-icon glyphicon glyphicon-facetime-video top"></span>
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
					<?php } ?>
				</div>
			</div><!-- Video Collection One Closed -->
			<div class="division-video"> <!-- Video Collection Two --> 
				<div class="news-multimedia"> 
					<?php		
					$sql = "SELECT * FROM bodhi_video WHERE category='video2' ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>বনভন্তের দেশনা</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/video/watch/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-img"
										   data-image="../bimg/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										
										<span class="video-icon glyphicon glyphicon-facetime-video top"></span>
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
					<?php } ?>
				</div>
			</div><!-- Video Collection Two Closed -->
			<div class="division-video"> <!-- Video Collection Three --> 
				<div class="news-multimedia"> 
					<?php		
					$sql = "SELECT * FROM bodhi_video WHERE category='video3' ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>ধর্মীয় গান</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/video/watch/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-img"
										   data-image="../bimg/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										
										<span class="video-icon glyphicon glyphicon-facetime-video top"></span>
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
					<?php } ?>
				</div>
			</div><!-- Video Collection Three Closed -->
			<div class="division-video"> <!-- Video Collection Four --> 
				<div class="news-multimedia"> 
					<?php		
					$sql = "SELECT * FROM bodhi_video WHERE category='video4' ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>TFB</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="video/watch/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-img"
										   data-image="../bimg/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										
										<span class="video-icon glyphicon glyphicon-facetime-video top"></span>
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
					<?php } ?>
				</div>
			</div><!-- Video Collection Four Closed -->
			<div class="division-video"> <!-- Video Collection Five --> 
				<div class="news-multimedia"> 
					<?php		
					$sql = "SELECT * FROM bodhi_video ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>অনুষ্ঠানের ভিডিও</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/video/watch/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-img"
										   data-image="../bimg/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										
										<span class="video-icon glyphicon glyphicon-facetime-video top"></span>
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
					<?php } ?>
				</div>
			</div><!-- Video Collection Five Closed -->
			<div class="division-video"> <!-- Video Collection Six --> 
				<div class="news-multimedia"> 
					<?php		
					$sql = "SELECT * FROM bodhi_video ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>আদিবাসী নৃত্য</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/video/watch/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-img"
										   data-image="../bimg/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										
										<span class="video-icon glyphicon glyphicon-facetime-video top"></span>
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
					<?php } ?>
				</div>
			</div><!-- Video Collection Six Closed -->
			<div class="division-video"> <!-- Video Collection Seven --> 
				<div class="news-multimedia"> 
					<?php		
					$sql = "SELECT * FROM bodhi_video ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>প্রতিরূপ দেশ</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/video/watch/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-img"
										   data-image="../bimg/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										<span class="video-icon glyphicon glyphicon-facetime-video top"></span>
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
					<?php } ?>
				</div>
			</div><!-- Video Collection Seven Closed -->
			<div class="division-video"> <!-- Video Collection Eight --> 
				<div class="news-multimedia"> 
					<?php		
					$sql = "SELECT * FROM bodhi_video ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>কঠিন চীবর দান</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/video/watch/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-img"
										   data-image="../bimg/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										
										<span class="video-icon glyphicon glyphicon-facetime-video top"></span>
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
					<?php } ?>
				</div>
			</div><!-- Video Collection Eight Closed -->
			<?php 
			if($rows > 0){ ?>
			<div class="bottom">
				<a class="more-video-link" href="/video/page/1">আরও</a>
			</div>	
			<?php } ?>	
		</article>
	</div>
	<!-- Here A Advertisements -->
	<?php include_once("../inc/footer.php"); ?>
</body>
</html>