<?php
error_reporting(0);
if(isset($_GET["page"])){
	$page = $_GET["page"];
}else{
	header("location: index.php");
}
function perc($vot, $total){
	$per = 100 / $total;
	$vot = $per * $vot;
	return $vot;
}
include_once("../admin/config.php");
include_once("../admin/format.php");
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
	<title>অনলাইন জরিপ ফলাফল - বোধিধারা</title>
	<meta name="keywords" content="বৌদ্ধবার্তা, বৌদ্ধবার্তা খবর, পূণ্যলাভ, বিহার পরিচিতি, ধর্মীয় অনুষ্ঠান, বৌদ্ধ ব্যক্তিত্ব, স্বধর্ম উন্নয়ন, ধর্ম প্রচার, প্রতিরূপ দেশ, কঠিন চীবর দান, বিবিধ, আদিবাসী, পার্বত্য চট্টগ্রামের বৌদ্ধ, প্রতিরূপ দেশ, বৌদ্ধ খবর, বৌদ্ধবার্তা বৌদ্ধ খবর , বৌদ্ধ রাষ্ট্র,  বৌদ্ধ ভিক্ষু,বনভন্তে,রাজবনবিহার,জাতক সমগ্র, বিশুদ্ধি মার্গ">
	<meta name="description" content="অনলাইন জরিপ ফলাফল , বৌদ্ধবার্তা খবর - বৌদ্ধ রাষ্ট্র,জাপান, বৌদ্ধ খবর ও বিশ্বের বৌদ্ধ ধর্মের অবদান। বৌদ্ধবার্তা , বৌদ্ধ শিক্ষা, বৌদ্ধ বার্তা, বৌদ্ধ মনন, বাংলায় সমগ্র বৌদ্ধবার্তা প্রকাশ, বিনয় পিটক, সূত্র পিটক, অভিধর্ম পিটক">
	<!--for fb -->
	<meta property="og:title" content="অনলাইন জরিপ ফলাফল - বোধিধারা">
	<meta property="og:site_name" content="বোধিধারা">
	<meta property="og:description" content="বৌদ্ধবার্তা খবর - বৌদ্ধ রাষ্ট্র, বৌদ্ধ খবর ও বিশ্বের বৌদ্ধ ধর্মের অবদান। বৌদ্ধবার্তা , বৌদ্ধ শিক্ষা, বৌদ্ধ বার্তা, বৌদ্ধ মনন">
	<meta property="og:type" content="website">
	<meta property="og:url" content="/home/poll">
	<meta property="og:image" content="/img/bodhidhara.png">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta name="fb:app_id" property="fb:app_id" content="549787358890465">
	<?php include_once("../inc/css-file.php"); ?>
	<style> 
	.spacer{
		width: 100%;
		height: 100px;
		background: #c3c3c33b;
	}
	.poll-result .result:first-child{
		border-top: none;
	}
	.poll-result .result{
		padding-top: 24px !important;
		padding-bottom: 24px !important;
		border-top: 2px solid gray;
		border-bottom: 2px solid gray;
		margin: 2px;
	}
	.poll-result .result:last-child{
		border-bottom: none;
	}
	.paginations{
		overflow: hidden;
		line-height: 32px;
		text-align: center;
		width: 100%;
		margin-top: 50px;
		margin-bottom: 50px;
	}
	.paginations .previous-page, .paginations .next-page{
		background: #ebebeb;
		color: #6f6e6e;
		border: 1px solid #ccc;
		float: none;
		padding: 12px 40px;
		font-size: 20px;
	}
	.paginations a,.paginations span{
		border-radius: 4px;
		display: inline-block;
		margin-left: 4px;
	}
	.paginations a:hover{
		background: #dddfdf;
		color: #000;
	}
	</style>
</head>
<body>
	<?php include_once("../inc/bodhi-header.php"); ?>
	<section class="spacer"></section>
	<section class="container"> 
		<!-- Here a Advertisements -->
		<div class="row"> 
			<div class="col-md-8 col-12">
				<div class="poll-system"><span>অনলাইন জরিপ ফলাফল:</span></div>
				<div class="poll-result"> 
					<?php
					$page = $_GET["page"];
					$per_page = 3;
					$start_form = ($page-1) * $per_page;
					$sql = "SELECT * FROM bodhi_poll ORDER BY id DESC limit $start_form, $per_page";
					$result = mysqli_query($conn,$sql);
					while($view = mysqli_fetch_assoc($result)){?>
					<div class="result">
						<div class="poll-title">
							<h2 class="title"><?php echo $view["vot_title"]; ?></h2>
						</div>
						<div class="total-vote">
							<span class="count">ভোট দিয়েছেন <?php echo formatView($view["total"]); ?>  জন </span>
						</div>
						<div class="progress-vote"> 
							<div class="row"> 
								<div class="col-4"> 
									হ্যাঁ
								</div>
								<div class="col-4"> 
									<div class="progress">
									  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70"
									  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo perc($view["yes"],$view["total"]); ?>%">
										
									  </div>
									</div>
								</div>
								<div class="col-4"> 
									<?php echo formatView($view["yes"]); ?> জন 
								</div>
							</div>
							<div class="row"> 
								<div class="col-4"> 
									না
								</div>
								<div class="col-4"> 
									<div class="progress">
									  <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70"
									  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo perc($view["no"],$view["total"]); ?>%">
										
									  </div>
									</div>
								</div>
								<div class="col-4"> 
									<?php echo formatView($view["no"]); ?> জন 
								</div>
							</div>
							<div class="row"> 
								<div class="col-4"> 
									মন্তব্য নেই
								</div>
								<div class="col-4"> 
									<div class="progress">
									  <div class="progress-bar" role="progressbar" aria-valuenow="70"
									  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo perc($view["no_comment"],$view["total"]); ?>%">
										
									  </div>
									</div>
								</div>
								<div class="col-4"> 
									<?php echo formatView($view["no_comment"]); ?> জন 
								</div>
							</div>
						</div>
					</div>
					<?php
					}
					?>
				</div>	
				<div class="paginations">
					<?php
					$sql = "SELECT * FROM bodhi_poll ORDER BY id DESC";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					$total_pages = ceil($rows/$per_page);
					if($total_pages == $page){?>
						<a class="previous-page" href="/home/poll.php?page=<?php echo $page-1; ?>"><span>&lt; &lt; </span></a>
					<?php }elseif($page == 1){ ?>
						<a class="next-page" href="/home/poll.php?page=<?php echo $page+1; ?>"><span>&gt; &gt; </span></a>
					<?php }else{
						?>
						<a class="previous-page" href="/home/poll.php?page=<?php echo $page-1; ?>"><span>&lt; &lt; </span></a>
						<a class="next-page" href="/home/poll.php?page=<?php echo $page+1; ?>"><span>&gt; &gt; </span></a>
					
					<?php }
					?>
				</div>	
			</div>
			<div class="col-md-4 col-12"> 
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
	<!-- Here are advertisements -->
	<?php include_once("../inc/footer.php"); ?>
</body>
</html>