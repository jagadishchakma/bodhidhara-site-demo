<?php
error_reporting(0);
include_once("../admin/config.php");
include_once("../admin/format.php");
function sub_category($subcategory){
	$sub = $subcategory;
	$engsub = array("album1","album2","album3","album4","album5","album6","album7","album8","album9","album10");
	$bnsub = array("এক ফলক","বুদ্ধ শাসন "," প্রতিরূপ দেশ","দরিদ্র","TFB","জুম্ম ফ্যাশন","বিনোদন","জীবনযাপন ","ভ্রমণ","উন্নয়নের চিত্র ");
	return str_replace($engsub, $bnsub, $sub);
}
$category = "photo";
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
	<title>ছবি - বোধিধারা</title>
	<meta name="keywords" content="বৌদ্ধ ছবি, চাকমা জীবনযাপন, আদিবাসী ছবি, আদিবাসী ফোরাম, ছবি সংবাদ, বোধিধারা, ত্রিশরণ ফাউন্ডেশন অব বাংলাদেশ, চাকমা, আদিবাসী, পার্বত্য চট্টগ্রামের অর্থনীতি, আদিবাসীদের জীবনযাত্রা,  পার্বত্য চট্টগ্রাম উন্নয়ন, ইতিবাচক, রাজবনবিহার ছবি, বাংলাদেশের বৌদ্ধ ধর্ম, রাঙ্গামাটি খবর,খাগড়াছড়ি খবর, বান্দরবান খবর, বৌদ্ধ ভিক্ষু,বনভন্তে,রাজবনবিহার,, পত্রিকা, বাংলাদেশ">
	<meta name="description" content="বৌদ্ধ খবর - পার্বত্য চট্টগ্রাম, বাংলাদেশ ও বিশ্বের বৌদ্ধ ধর্মীয় সংবাদ। Buddhist News In CHT , Bodhidhara Newspaper">
	<!--for fb -->
	<meta property="og:title" content="ছবি - বোধিধারা">
	<meta property="og:site_name" content="বোধিধারা">
	<meta property="og:description" content="বৌদ্ধ খবর - পার্বত্য চট্টগ্রাম, বাংলাদেশ ও বিশ্বের বৌদ্ধ ধর্মীয় সংবাদ। Buddhist News In CHT , Bodhidhara Newspaper">
	<meta property="og:type" content="website">
	<meta property="og:url" content="/photo">
	<meta property="og:image" content="/fimg/bodhidhara.png">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta name="fb:app_id" property="fb:app_id" content="549787358890465">		
	<?php include_once("../inc/css-file.php"); ?>
	<link rel="stylesheet" href="/photo/link/style.css?v=1.0"/>
	<link rel="stylesheet" href="/photo/link/article.css?v=1.0"/>
	<link rel="stylesheet" href="/photo/link/common.min.css"/>
</head>
<body>
	<?php include_once("../inc/bodhi-header.php"); ?>
	<div class="container">
		<section class="section"> 
			<?php include_once("inc/navs.php"); ?>
			<!-- Here a Advertisements -->
			<div class="breadcrumb"> 
				<ul>
					<li class="breadcrumb-item bred"> <a href="https://www.bodhidhara.com"></a> </li>
					<li class="breadcrumb-item"> <a href="/photo">ছবি</a> </li>
				</ul>
			</div>
			<div class="row"> 
				<div class="col-md-8 col-12"> 
					<div class="jd-slider slider2">
						<div class="slide-inner">
							<div class="slide-show"> 
								<ul class="slide-area">
									<?php
									$sql = "SELECT * FROM bodhi_photo ORDER BY id DESC limit 4";
									$result = mysqli_query($conn, $sql);
									while($view = mysqli_fetch_assoc($result)){
									?>
									<li>
										<a href="/photo/gallery/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"><img src="../album/<?php echo $view["fimg"]; ?>" alt="<?php echo slugTitle($view["title"]); ?>" /></a>
										<p><?php echo $view["title"]; ?></p>
									</li>
									<?php } ?>
								</ul>
							</div>
							<div class="slide-point"> 
								<span class="prev" href="#">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</span>
								<span class="next" href="#">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</span>
							</div>
							<div class="controller">
								<a class="auto" href="#">
									<i class="fas fa-play fa-xs"></i>
									<i class="fas fa-pause fa-xs"></i>
								</a>
								<div class="indicate-area"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12"> 
					<?php			
					$sql = "SELECT * FROM bodhi_ads ORDER BY id DESC limit 1";
					$result = mysqli_query($conn, $sql);
					while($view = mysqli_fetch_assoc($result)){ ?>
					<div class="add-show"> 
						<a href="../advertisement/article/<?php echo $view['selNo']?>/<?php echo slugTitle($view['title']); ?>">
							<div class="adds-fimg"><img src="../adimg/<?php echo $view['pic1']?>" alt="<?php echo slugTitle($view['title']); ?>" width="100%" height="300"/><span class="ads-icon" title="Ads by TFB">ads</span></div>
							<div class="adds-title"><h2><?php echo $view['title']?></h2></div>
						</a>
					</div><!-- Closed -->
					<?php } ?>
				</div>
			</div>
			<div class="news-relate"><!-- Main Picture Section -->	 
				<div class="news-multimedia"> 
					<div class="picture-multimedia"><!-- Picture Multimedia Started -->
						<?php
						$sql = "SELECT * FROM bodhi_photo ORDER BY id DESC limit 8";
						$result = mysqli_query($conn, $sql);
						$rows = mysqli_num_rows($result);
						if($rows > 0){ ?>
						<div class="row"> <!-- Picture Collection Recently --> 
							<?php while($view = mysqli_fetch_assoc($result)){ ?>
							<div class="col-md-3 col-6 news"> 
								<div class="each-news each-row"> 
									<a class="news-link-overly thumbnail-link" href="/photo/gallery/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
										<div class="image thumbnail"> 
											<span
											   class="lazy-image out"
											   data-class="big-fimg"
											   data-image="../album/<?php echo $view["fimg"]; ?>"
											   data-alt="<?php echo slugTitle($view["title"]); ?>">
											</span>
											<span class="glyphicon glyphicon-camera"></span>
										</div>
										<div class="news-title thumbnail-info"> 
											<div class="news-title-holder"><h2 class="title"> <?php echo $view["title"]; ?></h2></div>
											<div class="news-category-holder"><span class="dash"><?php echo sub_category($view["category"]); ?></span></div>
										</div>
									</a>
								</div>
							</div>
							<?php } ?>
						</div>
						<?php } ?>
					</div>	
				</div>	
			</div><!-- Picture Collection Recently Closed -->		
		</section>
		<article class="news-relate"> 
			<div class="news-multimedia"> <!-- Picture Collection Three --> 
				<div class="picture-multimedia"> 
					<?php
					$sql = "SELECT * FROM bodhi_photo WHERE category='album1' ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>এক ফলক</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){ ?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/photo/gallery/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-fimg"
										   data-image="../album/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										<span class="glyphicon glyphicon-camera"></span>
									</div>
									<div class="news-title thumbnail-info"> 
										<div class="news-title-holder"><h2 class="title"> <?php echo $view["title"]; ?></h2></div>
										<div class="news-category-holder"><span class="time"><?php echo get_time_ago($view["pTime"]); ?></span></div>
									</div>
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
			</div><!-- Picture Collection One Closed -->
			<div class="news-multimedia"> <!-- Picture Collection Two --> 
				<div class="picture-multimedia"> 
					<?php
					$sql = "SELECT * FROM bodhi_photo WHERE category='album2' ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>বুদ্ধ শাসন</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){ ?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/photo/gallery/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-fimg"
										   data-image="../album/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										<span class="glyphicon glyphicon-camera"></span>
									</div>
									<div class="news-title thumbnail-info"> 
										<div class="news-title-holder"><h2 class="title"> <?php echo $view["title"]; ?></h2></div>
										<div class="news-category-holder"><span class="time"><?php echo get_time_ago($view["pTime"]); ?></span></div>
									</div>
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
			</div><!-- Picture Collection Two Closed -->
			<div class="news-multimedia"> <!-- Picture Collection Three --> 
				<div class="picture-multimedia"> 
					<?php
					$sql = "SELECT * FROM bodhi_photo WHERE category='album3' ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>প্রতিরূপ দেশ</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){ ?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/photo/gallery/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-fimg"
										   data-image="../album/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										<span class="glyphicon glyphicon-camera"></span>
									</div>
									<div class="news-title thumbnail-info"> 
										<div class="news-title-holder"><h2 class="title"> <?php echo $view["title"]; ?></h2></div>
										<div class="news-category-holder"><span class="time"><?php echo get_time_ago($view["pTime"]); ?></span></div>
									</div>
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
			</div><!-- Picture Collection Three Closed -->
			<div class="news-multimedia"> <!-- Picture Collection Four --> 
				<div class="picture-multimedia"> 
					<?php
					$sql = "SELECT * FROM bodhi_photo WHERE category='album5' ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>TFB</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){ ?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/photo/gallery/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-fimg"
										   data-image="../album/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										<span class="glyphicon glyphicon-camera"></span>
									</div>
									<div class="news-title thumbnail-info"> 
										<div class="news-title-holder"><h2 class="title"> <?php echo $view["title"]; ?></h2></div>
										<div class="news-category-holder"><span class="time"><?php echo get_time_ago($view["pTime"]); ?></span></div>
									</div>
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
			</div><!-- Picture Collection Four Closed -->
			<div class="news-multimedia"> <!-- Picture Collection Eight --> 
				<div class="picture-multimedia"> 
					<?php
					$sql = "SELECT * FROM bodhi_photo WHERE category='album8' ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>জীবনযাপন</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){ ?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/photo/gallery/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-fimg"
										   data-image="../album/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										<span class="glyphicon glyphicon-camera"></span>
									</div>
									<div class="news-title thumbnail-info"> 
										<div class="news-title-holder"><h2 class="title"> <?php echo $view["title"]; ?></h2></div>
										<div class="news-category-holder"><span class="time"><?php echo get_time_ago($view["pTime"]); ?></span></div>
									</div>
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
			</div><!-- Picture Collection Eight Closed -->
			<div class="news-multimedia"> <!-- Picture Collection Nine --> 
				<div class="picture-multimedia"> 
					<?php
					$sql = "SELECT * FROM bodhi_photo WHERE category='album9' ORDER BY id DESC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>ভ্রমণ</h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){ ?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/photo/gallery/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-fimg"
										   data-image="../album/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										<span class="glyphicon glyphicon-camera"></span>
									</div>
									<div class="news-title thumbnail-info"> 
										<div class="news-title-holder"><h2 class="title"> <?php echo $view["title"]; ?></h2></div>
										<div class="news-category-holder"><span class="time"><?php echo get_time_ago($view["pTime"]); ?></span></div>
									</div>
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
			</div><!-- Picture Collection Ten Closed -->
			<div class="news-multimedia"> <!-- Picture Collection Nine --> 
				<div class="picture-multimedia"> 
					<?php
					$sql = "SELECT * FROM bodhi_photo ORDER BY id ASC limit 4";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 0){ ?>
					
					<div class="multimedia-name">
						<h2>উন্নয়নের চিত্র </h2>
					</div>
					<div class="row">
						<?php while($view = mysqli_fetch_assoc($result)){ ?>
						<div class="col-md-3 col-6 news"> 
							<div class="each-news each-row"> 
								<a class="news-link-overly thumbnail-link" href="/photo/gallery/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
									<div class="image thumbnail"> 
										<span
										   class="lazy-image out"
										   data-class="big-fimg"
										   data-image="../album/<?php echo $view["fimg"]; ?>"
										   data-alt="<?php echo slugTitle($view["title"]); ?>">
										</span>
										<span class="glyphicon glyphicon-camera"></span>
									</div>
									<div class="news-title thumbnail-info"> 
										<div class="news-title-holder"><h2 class="title"> <?php echo $view["title"]; ?></h2></div>
										<div class="news-category-holder"><span class="time"><?php echo get_time_ago($view["pTime"]); ?></span></div>
									</div>
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
			</div><!-- Picture Collection Ten Closed -->
			<?php 
			if($rows > 0){ ?>
			<div class="bottom">
				<a class="more-link" href="/photo/page/2">আরও</a>
			</div>	
			<?php } ?>
		</article>
	</div>	
	<!-- Here A Advertisements -->
	<?php include_once("../inc/footer.php"); ?>
    <script src="/photo/link/jquery.jdSlider-latest.min.js"></script>
    <script>
         window.onload = function () {
            $('.slider1').jdSlider();
            $('.slider2').jdSlider({
                wrap: '.slide-inner',
                isAuto: true,
                isLoop: true
            });
            $('.slider3').jdSlider({
                wrap: '.slide-inner',
                slideShow: 2,
                slideToScroll: 2,
                isLoop: false,
                responsive: [{
                    viewSize: 768,
                    settings: {
                        slideShow: 1,
                        slideToScroll: 1
                    }
                }]
            });
            $('.slider3-2').jdSlider({
                wrap: '.slide-inner',
                slideShow: 2,
                slideToScroll: 1,
                isLoop: true,
                responsive: [{
                    viewSize: 768,
                    settings: {
                        slideShow: 1
                    }
                }]
            });
            $('.slider3-3').jdSlider({
                wrap: '.slide-inner',
                slideShow: 2,
                slideToScroll: 2,
                isLoop: true,
                responsive: [{
                    viewSize: 768,
                    settings: {
                        slideShow: 1,
                        slideToScroll: 1
                    }
                }]
            });
            $('.slider4').jdSlider({
                wrap: '.slide-inner',
                isSliding: false,
                isAuto: true,
                isLoop: true,
                isDrag: false
            });
        };
    </script>
</body>
</html>