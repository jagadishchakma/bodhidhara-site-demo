<?php
error_reporting(0);
include_once("../admin/config.php");
include_once("../admin/format.php");
$category = "bangladesh";
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
	<title>সারাবাংলা খবর - বোধিধারা</title>
	<meta name="keywords" content="বাংলাদেশ, বাংলাদেশের খবর, Bangla News on Bangladesh, বাংলাদেশের সংবাদ, প্রথম আলো, উপজেলা, বিএনপি, আওয়ামী লীগ, জাতীয় পার্টি, শিল্প, নির্বাচনতরাজনীতি, সরকার, অপরাধ, পরিবেশ, অর্থনীতি, সংবাদ, শিক্ষা, চট্টগ্রাম, ঢাকা, জাপা, নেতা, জাতীয়, বৈঠক, হত্যা, জামায়াত, আটক, নতুন, সিলেট, আইন, দুর্ঘটনা, রাজধানী, সাক্ষাৎকার, বিজ্ঞান, মোবাইল, ফোন, পরামর্শ, ভিডিও, টাকা, ছাত্রলীগ, হরতাল, হাসিনা, বঙ্গবন্ধু, রাজধানী,  গুলিবিদ্ধ, প্রধানমন্ত্রী, শেখ হাসিনা, bangladesh news, bangladesh newspaper, bangladesh news paper, bangladeshi newspaper, bangladeshi news paper, bangladesh bangla news, bangladesh bangla newspaper, bangladeshi news, bangladesh online newspaper, bangladesh newspaper list, bangladesh paper, bangladesh bangla news paper, bangladeshi bangla news paper, bangladeshi bangla newspaper, bangladeshi newspaper list, bangladesh newspaper site, bangladeshi paper, bangladesh news site, bangladeshi newspapers online, bangladesh newspapers all, online news bangladesh, bangla news paper of bangladesh, bangladesi newspaper, পত্রিকা, বাংলাদেশ">
	<meta name="description" content="Read Bangla Breaking News on Parliament, Govt, Justice, Road Accident, Cricket, Sports, Education, Business, Agriculture, Population, Dhaka  at Bodhidhara">
	<!--for fb -->
	<meta property="og:title" content="সারাবাংলা খবর - বোধিধারা">
	<meta property="og:site_name" content="বোধিধারা">
	<meta property="og:description" content="Read Bangla Breaking News on Parliament, Govt, Justice, Road Accident, Cricket, Sports, Education, Business, Agriculture, Population, Dhaka  at Bodhidhara">
	<meta property="og:type" content="website">
	<meta property="og:url" content="/bangladesh">
	<meta property="og:image" content="/img/bodhidhara.png">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta name="fb:app_id" property="fb:app_id" content="549787358890465">		
	<?php include_once("../inc/css-file.php"); ?>
	<link rel="stylesheet" href="/bangladesh/link/style.css"/>
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
					<li class="breadcrumb-item"> <a href="/bangladesh">সারাবাংলা</a> </li>
				</ul>
			</div>
			<div class="row main-news-section">
				<div class="col-md-6 news"><!-- bangladesh Main News-->
					<?php
						$sql = "SELECT * FROM bodhi_news WHERE category='bangladesh' ORDER BY id DESC limit 1";
						$result = mysqli_query($conn, $sql);
						while($view = mysqli_fetch_assoc($result)){
					?>
					<div class="main-news">
						<a href="bangladesh/article/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>">
							<div class="image"> 
								<span
								   class="lazy-image out"
								   data-class="big-img"
								   data-image="../bimg/<?php echo $view["fimg"]; ?>"
								   data-alt="<?php echo slugTitle($view["title"]); ?>">
								</span>
							</div>
							<div class="info"> 
								<h2 class="title-holder"><span class="title"><?php echo $view["title"]; ?></span></h2>
							</div>
						</a>
					</div>
					<?php } ?>
				</div><!-- Closed -->
				<?php
					$a = "SELECT * FROM bodhi_news WHERE category='bangladesh' ORDER BY id DESC limit 3";
					$b = mysqli_query($conn, $a);
					$x = 1;
					while($c = mysqli_fetch_assoc($b)){
						$y = $x++;
						$array[$y] = $c["id"];
					}
					$row2 = $array[2];
					$row3 = $array[3];
				?>
				<div class="col-md-3 news-sub"><!-- bangladesh Sub News -->
				<?php
				$sql = "SELECT * FROM bodhi_news WHERE category='bangladesh' AND id IN ('$row2','$row3') ORDER BY id DESC";
				$result = mysqli_query($conn, $sql);
				while($view = mysqli_fetch_assoc($result)){
				?>
				<div class="main-sub-news news"> 
					<a href="/bangladesh/article/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>">
						<div class="image"> 
							<span
							   class="lazy-image out"
							   data-class="big-img"
							   data-image="../bimg/<?php echo $view["fimg"]; ?>"
							   data-alt="<?php echo slugTitle($view["title"]); ?>">
							</span>
						</div>
						<div class="info"> 
							<h2 class="title-holder"><span class="title"><?php echo $view["title"]; ?></span></h2>
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
					<a href="../advertisement/article/<?php echo $view['selNo']?>/<?php echo slugTitle($view['title']); ?>">
						<div class="adds-img"><img src="../adimg/<?php echo $view['pic1']?>" alt="<?php echo slugTitle($view["title"]); ?>" width="100%" height="300"/><span class="ads-icon" title="Ads by TFB">ads</span></div>
						<div class="adds-title"><h2><?php echo $view['title']?></h2></div>
					</a>
				</div><!-- Closed -->
				<?php } ?>
			</div>
			<div class="row news-relate"><!-- bangladesh News Relate -->
				<?php
					$a = "SELECT * FROM bodhi_news WHERE category='bangladesh' ORDER BY id DESC limit 11";
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
					$sql = "SELECT * FROM bodhi_news WHERE category='bangladesh' AND id IN ('$row4','$row5','$row6','$row7','$row8','$row9','$row10','$row11') ORDER BY id DESC";
					$result = mysqli_query($conn, $sql);
					while($view = mysqli_fetch_assoc($result)){
				?>
				<div class="col-md-3 col-6 news"> 
					<div class="each-news"> 
						<a class="news-link-overly" href="/bangladesh/article/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
							<div class="image"> 
								<span
								   class="lazy-image out"
								   data-class="big-img"
								   data-image="../bimg/<?php echo $view["fimg"]; ?>"
								   data-alt="<?php echo slugTitle($view["title"]); ?>">
								</span>
							</div>
							<div class="info news-title"> 
								<div class="news-title-holder"><h2> <?php echo $view["title"]; ?></h2></div>
								<div class="news-summery-holder"> <p> <?php echo textShorten($view["excerpt"]); ?></p></div>
								<div class="news-date-holder"><span> <?php echo get_time_ago($view["pTime"]); ?> </span></div>
							</div>
						</a>
					</div>
				</div>	
				<?php
					}
				?>	
			</div><!-- Closed -->
		</section>
		<!--- Here A Advertisements --->
		<article class="article-last"> 
			<div class="row"> 
				<div class="col-md-8 col-12 new-col"> 
					<div class="last-news-one"> 
					
						<?php
						$a = "SELECT * FROM bodhi_news WHERE category='bangladesh' ORDER BY id DESC limit 14";
						$b = mysqli_query($conn, $a);
						$x = 1;
						while($c = mysqli_fetch_assoc($b)){
							$y = $x++;
							$array[$y] = $c["id"];
						}
						$row12 = $array[12];
						$row13 = $array[13];
						$row14 = $array[14];
						?>
						<?php
							$sql = "SELECT * FROM bodhi_news WHERE category='bangladesh' AND id IN ('$row12','$row13','$row14') ORDER BY id DESC";
							$result = mysqli_query($conn, $sql);
							while($view = mysqli_fetch_assoc($result)){
						?>
						<div class="last-news"> 
							<a class="news-link-overly" href="/bangladesh/article/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
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
									<div class="news-summery-holder"> <p>  <?php echo textShorten($view["excerpt"]); ?></p></div>
									<div class="news-date-holder"><span> <?php echo get_time_ago($view["pTime"]); ?> </span></div>
								</div>
							</div> 
							</a>
						</div>
						<?php
						}
						?>
					</div>	
					<!--- Here A Advertisements --->
					<div class="last-news-two"> 
						<?php
						$a = "SELECT * FROM bodhi_news WHERE category='bangladesh' ORDER BY id DESC limit 18";
						$b = mysqli_query($conn, $a);
						$x = 1;
						while($c = mysqli_fetch_assoc($b)){
							$y = $x++;
							$array[$y] = $c["id"];
						}
						$row15 = $array[15];
						$row16 = $array[16];
						$row17 = $array[17];
						$row18 = $array[18];
						?>
						<?php
							$sql = "SELECT * FROM bodhi_news WHERE category='bangladesh' AND id IN ('$row15','$row16','$row17','$row18') ORDER BY id DESC";
							$result = mysqli_query($conn, $sql);
							while($view = mysqli_fetch_assoc($result)){
						?>
						<div class="last-news"> 
							<a class="news-link-overly" href="/bangladesh/article/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
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
									<div class="news-summery-holder"> <p>  <?php echo textShorten($view["excerpt"]); ?></p></div>
									<div class="news-date-holder"><span> <?php echo get_time_ago($view["pTime"]); ?> </span></div>
								</div>
							</div> 
							</a>
						</div>
						<?php
						}
						?>
					</div>
					<!--- Here A Advertisements --->
					<div class="last-news-three"> 
						<?php
						$a = "SELECT * FROM bodhi_news WHERE category='bangladesh' ORDER BY id DESC limit 21";
						$b = mysqli_query($conn, $a);
						$x = 1;
						while($c = mysqli_fetch_assoc($b)){
							$y = $x++;
							$array[$y] = $c["id"];
						}
						$row19 = $array[19];
						$row20 = $array[20];
						$row21 = $array[21];
						?>
						<?php
							$sql = "SELECT * FROM bodhi_news WHERE category='bangladesh' AND id IN ('$row19','$row20','$row21') ORDER BY id DESC";
							$result = mysqli_query($conn, $sql);
							while($view = mysqli_fetch_assoc($result)){
						?>
						<div class="last-news"> 
							<a class="news-link-overly" href="/bangladesh/article/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
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
									<div class="news-summery-holder"> <p>  <?php echo textShorten($view["excerpt"]); ?></p></div>
									<div class="news-date-holder"><span> <?php echo get_time_ago($view["pTime"]); ?> </span></div>
								</div>
							</div> 
							</a>
						</div>
						<?php
						}
						?>
					</div>
					<?php 
					$sql = "SELECT * FROM bodhi_news WHERE category='bangladesh'";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					if($rows > 21){
					?>
					<div class="bottom">
						<a class="more-link" href="/bangladesh/page.php?page=2">আরও</a>
					</div>
					<?php } ?>
				</div>
				<div class="col-md-4 col-12"> 
					<div class="news-multimedia"> 
						<div class="picture-multimedia">
							<div class="multimedia-name">
								<h2>ছবি</h2>
							</div>
							<div class="row"> 
								<?php
								$sql = "SELECT * FROM bodhi_photo ORDER BY id DESC limit 1";
								$result = mysqli_query($conn, $sql);
								while($view = mysqli_fetch_assoc($result)){
								?>
								<div class="col-12"> <!--- First Pictures Thumbnail --->
									<a class="thumbnail-link" href="/photo/gallery/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
										<div class="thumbnail">
											<div class="image"> 
												<span
												   class="lazy-image out"
												   data-class="big-img"
												   data-image="../album/<?php echo $view["fimg"]; ?>"
												   data-alt="<?php echo slugTitle($view["title"]); ?>">
												</span>
											</div>
											<span class="glyphicon glyphicon-camera"></span>
										</div>
										<div class="info"> 
											<div class="news-title-holder"><h4><?php echo $view["title"]; ?></h4></div>
											<div class="news-date-holder"><span> <?php echo get_time_ago($view["pTime"]); ?> </span></div>
										</div>
									</a>
								</div>
								<?php } ?>
								<?php
								$a = "SELECT * FROM bodhi_photo ORDER BY id DESC limit 5";
								$b = mysqli_query($conn, $a);
								$x = 1;
								while($c = mysqli_fetch_assoc($b)){
									$y = $x++;
									$array[$y] = $c["id"];
								}
								$row2 = $array[2];
								$row3 = $array[3];
								$row4 = $array[4];
								$row5 = $array[5];
								?>
								<?php
									$sql = "SELECT * FROM bodhi_photo WHERE id IN ('$row2','$row3','$row4','$row5') ORDER BY id DESC";
									$result = mysqli_query($conn, $sql);
									while($view = mysqli_fetch_assoc($result)){
								?>
								<div class="col-6"> <!--- Secondary Picture Thumbnail --->
									<a class="thumbnail-link" href="/photo/gallery/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
										<div class="thumbnail">
											<div class="image"> 
												<span
												   class="lazy-image out"
												   data-class="big-img"
												   data-image="../album/<?php echo $view["fimg"]; ?>"
												   data-alt="<?php echo slugTitle($view["title"]); ?>">
												</span>
											</div>
											<span class="glyphicon glyphicon-camera"></span>
										</div>
										<div class="info"> 
											<div class="news-title-holder"><h4><?php echo $view["title"]; ?></h4></div>
											<div class="news-date-holder"><span> <?php echo get_time_ago($view["pTime"]); ?> </span></div>
										</div>
									</a>
								</div>
								<?php 
								}
								?>
							</div>
						</div>
						<div class="video-multimedia"> 
							<div class="multimedia-name">
								<h2>ভিডিও</h2>
							</div>
							<div class="row"> 
								<?php
								$sql = "SELECT * FROM bodhi_video  ORDER BY id DESC limit 1";
								$result = mysqli_query($conn, $sql);
								while($view = mysqli_fetch_assoc($result)){
								?>
								<div class="col-12"> <!--- First Video Thumbnail --->
									<a class="thumbnail-link" href="../video/watch/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
										<div class="thumbnail">
											<div class="image"> 
												<span
												   class="lazy-image out"
												   data-class="big-img"
												   data-image="../bimg/<?php echo $view["fimg"]; ?>"
												   data-alt="<?php echo slugTitle($view["title"]); ?>">
												</span>
											</div>
											<span class="glyphicon glyphicon-facetime-video"></span>
										</div>
										<div class="info"> 
											<div class="news-title-holder"><h4><?php echo $view["title"]; ?></h4></div>
											<div class="news-date-holder"><span> <?php echo get_time_ago($view["pTime"]); ?> </span></div>
										</div>
									</a>
								</div>
								<?php } ?>
								<?php
								$a = "SELECT * FROM bodhi_video ORDER BY id DESC limit 5";
								$b = mysqli_query($conn, $a);
								$x = 1;
								while($c = mysqli_fetch_assoc($b)){
									$y = $x++;
									$array[$y] = $c["id"];
								}
								$row2 = $array[2];
								$row3 = $array[3];
								$row4 = $array[4];
								$row5 = $array[5];
								?>
								<?php
									$sql = "SELECT * FROM bodhi_video WHERE id IN ('$row2','$row3','$row4','$row5') ORDER BY id DESC";
									$result = mysqli_query($conn, $sql);
									while($view = mysqli_fetch_assoc($result)){
								?>
								<div class="col-6"> <!--- Secondary Video Thumbnail --->
									<a class="thumbnail-link" href="../video/watch/<?php echo slugTitle($view["selNo"]); ?>/<?php echo slugTitle($view["title"]); ?>"> 
										<div class="thumbnail">
											<div class="image"> 
												<span
												   class="lazy-image out"
												   data-class="big-img"
												   data-image="../bimg/<?php echo $view["fimg"]; ?>"
												   data-alt="<?php echo slugTitle($view["title"]); ?>">
												</span>
											</div>
											<span class="glyphicon glyphicon-facetime-video"></span>
										</div>
										<div class="info"> 
											<div class="news-title-holder"><h4><?php echo $view["title"]; ?></h4></div>
											<div class="news-date-holder"><span> <?php echo get_time_ago($view["pTime"]); ?> </span></div>
										</div>
									</a>
								</div>
								<?php 
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
	<!--- Here A Advertisements --->
	<?php include_once("../inc/footer.php"); ?>
</body>
</html>