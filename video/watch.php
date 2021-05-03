<?php
include_once("../admin/config.php");
include_once("../admin/format.php");
function sub_category($subcategory){
	$sub = $subcategory;
	$engsub = array("category1","category2","category3","category4","category5","category6","category7","category8","category9","category10");
	$bnsub = array("দেশনা","বনভন্তের দেশনা "," ধর্মীয় গান","TFB","কঠিন চীবর দান","অনুষ্ঠানের ভিডিও","আদিবাসী নৃত্য","বসবাস ","প্রতিরূপ দেশ","বিবিধ");
	return str_replace($engsub, $bnsub, $sub);
}
$a_id = $_GET['id'];
$sql = "SELECT * FROM bodhi_video WHERE selNo='$a_id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if($row === 1){
	$view = mysqli_fetch_assoc($result);
	// Unique visitor counter
	$viewers = $view["pView"]; 
	$viewUp = $viewers+1;
	$like = $view["pLike"];
	$vUpdate = "UPDATE bodhi_video SET pView='$viewUp' WHERE selNo='$a_id'";
	mysqli_query($conn,$vUpdate);
}else{
	header("location: /video");
}
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
	<title><?php echo $view["title"]; ?></title>
	<meta name="keywords" content="<?php echo $view["tags"]; ?>">
	<meta name="description" content="<?php echo textShorten($view["about"]); ?>">
	<!--for fb -->
	<meta property="og:title" content="<?php echo $view["title"]; ?> - বোধিধারা">
	<meta property="og:site_name" content="বোধিধারা">
	<meta property="og:description" content="<?php echo textShorten($view["about"]); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
	<meta property="og:image" content="/bimg/<?php echo $view["fimg"]; ?>">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta name="fb:app_id" property="fb:app_id" content="549787358890465">
	<?php include_once("../inc/css-file.php"); ?>
	<link rel="stylesheet" href="/video/link/style.css?v=1.0"/>
	<link rel="stylesheet" href="/video/link/article.css?v=1.1"/>
</head>
<body>
	<?php include_once("../inc/bodhi-header.php"); ?>
	<section class="section container"> 
		<?php include_once("inc/navs.php"); ?>
		<!-- Here a Advertisements -->
		<div class="breadcrumb"> 
			<ul>
				<li class="breadcrumb-item bred"> <a href="https://www.bodhidhara.com"></a> </li>
				<li class="breadcrumb-item bred"> <a href="/video">ভিডিও</a> </li>
				<li class="breadcrumb-item"> <a href="/video"><?php echo sub_category($view["category"]); ?></a> </li>
			</ul>
		</div>
		<div class="row"> 
			<div class="col-md-8 col-12 "> 
				<div class="video"> 
					<div class="video-live"> 
						<?php
						$link = $view["link"];
						$link = preg_replace("#.*youtube\.com/watch\?v=#","",$link);
						$video = '<iframe src="https://www.youtube.com/embed/'.$link.'" frameborder="0" width="100%" height="100%" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>';
						echo $video;
						?>
					</div>
					<div class="video-title"> 
						<h1 class="title"><?php echo $view["title"]; ?></h1>
					</div>
					<div class="video-time"><span class="time"><?php echo get_time_ago($view["pTime"]); ?></span></div>
					<div class="vidoe-share"> 
						<div class="inline-share"></div>
					</div>
					<div class="video-summery"> 
						<?php echo $view["about"]; ?>
					</div>
					<div class="more-tag">
						<a class="more-link" href="/video/page/2">আরও ভিডিও</a>
						<?php 
						$id = $view["id"]-1;
						$sql = "SELECT * FROM bodhi_video WHERE id ='$id' ";
						$result = mysqli_query($conn, $sql);
						$left = mysqli_fetch_assoc($result);
						?>
						<a class="more-link" href="/video/watch/<?php echo $left["selNo"]; ?>/<?php echo $left["title"]; ?>">আগের ভিডিও</a>
						<?php 
						$id = $view["id"]+1;
						$sql = "SELECT * FROM bodhi_video WHERE id ='$id' ";
						$result = mysqli_query($conn, $sql);
						$right = mysqli_fetch_assoc($result);
						?>
						<a class="more-link" href="/video/watch/<?php echo $right["selNo"]; ?>/<?php echo $right["title"]; ?>">পরের ভিডিও</a>
					</div>
					<div class="like-holder">  
						<span> <button class="btn btn-success videolike glyphicon glyphicon-thumbs-up"></button><span id="likecount"><?php echo $like; ?></span></span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-12 "> 
				<div class="o-r-news"> 
					<?php 
					$sql = "SELECT * FROM bodhi_video ORDER BY id DESC limit 8";
					$result = mysqli_query($conn, $sql);
					while($view = mysqli_fetch_assoc($result)){
					?>
					<div class="row listing-one"> 
						<a class="news-link-overly" href="/video/watch/<?php echo $view["selNo"]; ?>/<?php echo $view["title"]; ?>">
							<div class="col-img">
								<div class="image thumbnail"> 
									<span
									   class="lazy-image out"
									   data-class="big-img"
									   data-image="../bimg/<?php echo $view["fimg"]; ?>"
									   data-alt="<?php echo slugTitle($view["title"]); ?>">
									</span>
									<span class="video-icon glyphicon glyphicon-facetime-video top"></span>
								</div>
							</div>
							<div class="col-title">
								<h2><?php echo $view["title"]; ?></h2>
								<span class="time"><?php echo get_time_ago($view["pTime"]); ?></span>
							</div>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Comments Starts -->
	<div class="news-comment" id="comments">
		<div class="row"> 
			<div class="col-md-2"> 
				<?php
					$sql = "SELECT * FROM video_comments WHERE news_id='$a_id' ORDER BY id DESC";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_num_rows($result);
				?>
				<h3>মন্তব্য ( <?php echo $row;?> )</h3>
			</div>
			<div class="col-md-6"> 
				<?php 
					if($row > 0){
						while($view = mysqli_fetch_assoc($result)){
							echo'
							<div class="comment">
								<div class="commenter-info">
									<span class="commenter"><img src="../busers/'.$view['uimg'].'" alt="'.$view['name'].'" style="border-radius: 50%;width: 50px;height:50px"/></span>
									<span class="commenter-name">'.$view['name'].'</span>
								</div>
								<div class="txtComment">
									<p class="comment-date">'.get_time_ago($view['comdate']).'</p>
									<p>'.comment(nl2br($view['com'])).'</p>
								</div>
							</div>';
						}
					}
				?>
			</div>
			<div class="col-md-4"> 
				<?php
				if(isset($_COOKIE["bodhi_user_pass"])){ ?>
				<div class="comment-toggle"><h2><button class="glyphicon glyphicon-plus" data-toggle="collapse" data-target="#collapseComment" aria-expanded="false" aria-controls="collapseComment"></button>  মন্তব্য করুন </h2></div>
				<div class="collapse" id="collapseComment"> 
					<span id="jwPollAjaxWorking"></span>
					<div class="card card-body" id="jwPollVoteFormContainer">
						<form id="vote_the_poll"> 
							
							<textarea class="com" name="com" cols="30" rows="3" placeholder="আপনার মন্তব্য" required></textarea>
							
						</form>
						<input class="btn btn-dark" type="submit" id="com-submit" value="মন্তব্য"/>
					</div>
				</div>
				<?php }else{?>
				<div class="default-comment"> 
					<p>মন্তব্য করতে <a class="btn btn-primary" href="../login">লগইন</a> অথবা <a href="../register" style="color: blue;font-size: 20px;">রেজিস্টার</a> করুন</p>
					<div class="comment-toggle"><h2><button class="glyphicon glyphicon-plus" data-toggle="collapse" data-target="#collapseComment" aria-expanded="false" aria-controls="collapseComment"></button> অতিথি হিসেবে মন্তব্য করুন </h2></div>
					<div class="collapse" id="collapseComment"> 
						<span id="jwPollAjaxWorking"></span>
						<div class="card card-body" id="jwPollVoteFormContainer">
							<form id="vote_the_poll"> 
								<input type="text" class="name" name="guest-name" placeholder="আপনার নাম" required/>
								<br>
								<textarea class="com" name="com" cols="30" rows="3" placeholder="আপনার মন্তব্য" required></textarea>
								<br>
							</form>
							<input class="btn btn-dark" type="submit" id="com-submit" value="মন্তব্য"/>
						</div>
					</div>
				</div>
				<?php }
				?>
			</div>
		</div>
		<script>
			$('.glyphicon-plus').click(function(){ 
				$('.glyphicon-plus').toggleClass('glyphicon-minus');
			});
		</script>
		<script>
			$('#jwPollAjaxWorking').hide();	
			$("#com-submit").click(function(){
				if($(".name").val() == ""){ 
					alert('Please Enter Your Name'); 
					return false;
				}
				if($(".com").val() == ""){ 
					alert('Please Enter Your Comment'); 
					return false;
				}
				var data = $("#vote_the_poll").serialize();
				$('#jwPollAjaxWorking').show();
				$.ajax({
					type: 'post',
					url: '/video/comment.php?id=<?php echo $a_id; ?>&category=<?php echo $category; ?>',
					data: data,
					beforeSend: function(){
						$('#jwPollAjaxWorking').html("<img src='../img/spinner1.gif' alt='' width='50' height='50'/>");
						$('#jwPollVoteFormContainer').hide();
						},
					success: function(data){
						$('#jwPollAjaxWorking').html(data);
						window.location='<?php echo "/".$category."/watch/".$a_id."/".$_GET["title"] ?>';
						},
					error: function(){
						$('#jwPollAjaxWorking').html("Error");
						$('#jwPollVoteFormContainer').show();
						}
				});
			})	
		</script>
	</div>   
	<!-- Comments Ended --> 
	<div class="content-next-prev"> 
		<div class="prev content-holder"> 
			<span class="dir glyphicon glyphicon-chevron-left"></span>
			<div class="content-inner"> 
				<div class="contents"> 
					<div class="each"> 
						<a class="prev-next-link" href="/video/watch/<?php echo $left["selNo"]; ?>/<?php echo $left["title"]; ?>"></a>
						<div class="image"> 
							<span><img src="../bimg/<?php echo $right["fimg"]; ?>" alt="<?php echo $right["title"]; ?>" height="60px"/></span>
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
					আগের ভিডিও
				</div>
			</div>
		</div>
		<div class="content-holder next"> 
			<span class="dir glyphicon glyphicon-chevron-right"></span>
			<div class="content-inner"> 
				<div class="contents"> 
					<div class="each"> 
						<a class="prev-next-link" href="/video/watch/<?php echo $right["selNo"]; ?>/<?php echo $right["title"]; ?>"></a>
						<div class="image"> 
							<span><img src="../bimg/<?php echo $right["fimg"]; ?>" alt="<?php echo $right["title"]; ?>" height="60px"/></span>
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
					পরের ভিডিও
				</div>
			</div>
		</div>
	</div>
	<article class="container news-relate"> 
		<div class="news-multimedia"> 
			<div class="row"> 
				<?php
					$sql = "SELECT * FROM bodhi_news ORDER BY id DESC limit 8";
					$result = mysqli_query($conn, $sql);
					while($view = mysqli_fetch_assoc($result)){
				?>
				<div class="col-md-3 col-6 news"> 
					<div class="each-news each-row"> 
						<a class="news-link-overly" href="../<?php echo $view["category"]; ?>/article/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>"> 
							<div class="image thumbnail"> 
								<span
								   class="lazy-image out"
								   data-class="big-img"
								   data-image="../bimg/<?php echo $view["fimg"]; ?>"
								   data-alt="<?php echo slugTitle($view["title"]); ?>">
								</span>
							</div>
							<div class="news-title thumbnail-info"> 
								<div class="news-title-holder"><h2> <?php echo $view["title"]; ?></h2></div>
								<div class="news-category-holder"><span class="dash">বৌদ্ধবার্তা</span></div>
							</div>
						</a>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
		<div class="spacer-bottom"></div>
	</article>
	<?php include_once("../inc/footer.php"); ?>
</body>
</html>