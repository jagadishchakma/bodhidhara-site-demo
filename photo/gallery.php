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
$a_id = $_GET['album'];
$sql = "SELECT * FROM bodhi_photo WHERE selNo='$a_id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if($row === 1){
	$view = mysqli_fetch_assoc($result);
	// Unique visitor counter
	$viewers = $view["pView"]; 
	$viewUp = $viewers+1;
	$like = $view["pLike"];
	$vUpdate = "UPDATE bodhi_photo SET pView='$viewUp' WHERE selNo='$a_id'";
	mysqli_query($conn,$vUpdate);
}else{
	header("location: /photo");
}
$category = "photo";
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
	<title><?php echo slugTitle($view["title"]); ?></title>
	<meta name="keywords" content="<?php echo $view["tags"]; ?>">
	<meta name="description" content="<?php echo textShorten($view["excerpt"]); ?>">
	<!--for fb -->
	<meta property="og:title" content="<?php echo $view["title"]; ?>-ছবি - বোধিধারা">
	<meta property="og:site_name" content="বোধিধারা">
	<meta property="og:description" content="<?php echo textShorten($view["excerpt"]); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
	<meta property="og:image" content="/album/<?php echo $view["fimg"]; ?>">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta name="fb:app_id" property="fb:app_id" content="549787358890465">		
	<?php include_once("../inc/css-file.php"); ?>
	<link rel="stylesheet" href="/photo/link/style.css?v=1.0"/>
	<link rel="stylesheet" href="/photo/link/article.css?v=1.2"/>
	<link rel="stylesheet" href="/photo/link/page.css"/>
</head>
<body>
	<?php include_once("../inc/bodhi-header.php"); ?>
	<section class="section container"> 
		<?php include_once("inc/navs.php"); ?>
		<!-- Here a Advertisements -->
		<div class="breadcrumb"> 
			<ul>
				<li class="breadcrumb-item bred"> <a href="https://www.bodhidhara.com"></a> </li>
				<li class="breadcrumb-item bred"> <a href="/photo">ছবি</a> </li>
				<li class="breadcrumb-item"> <a href="/photo"><?php echo sub_category($view["category"]); ?></a> </li>
			</ul>
		</div>
		<div class="row"> 
			<div class="col-md-8 col-12 "> 
				<div class="photo"> 
					<div class="photo-live"> 
						<div class="image"> 
							<span
							   class="lazy-image out"
							   data-class="big-img"
							   data-image="../album/<?php echo $view["fimg"]; ?>"
							   data-alt="<?php echo slugTitle($view["title"]); ?>">
							</span>
						</div>
					</div>
					<div class="photo-title"> 
						<h1 class="title"><?php echo $view["title"]; ?></h1>
					</div>
					<div class="photo-time"><span class="time"><?php echo get_time_ago($view["pTime"]); ?></span></div>
					<div class="vidoe-share"> 
						<div class="inline-share">
										
						</div>
					</div>
					<div class="glyphicon glyphicon-eye-open view"><span><?php echo formatView($view["pView"]); ?> বার পড়া হয়েছে</span></div>
					<div class="article-body">
						<?php echo $view["about"]; ?>
					</div>
					<div class="more-tag">
						<a class="more-link" href="/photo/page/2">আরও ছবি</a>
						<?php 
						$id = $view["id"]-1;
						$sql = "SELECT * FROM bodhi_photo WHERE id='$id'";
						$result = mysqli_query($conn, $sql);
						$left = mysqli_fetch_assoc($result);
						?>
						<a class="more-link" href="/photo/gallery/<?php echo $left["selNo"]; ?>/<?php echo slugTitle($left["title"]); ?>">আগের ছবি</a>
						<?php 
						$id = $view["id"]+1;
						$sql = "SELECT * FROM bodhi_photo WHERE id='$id'";
						$result = mysqli_query($conn, $sql);
						$right = mysqli_fetch_assoc($result);
						?>
						<a class="more-link" href="/photo/gallery/<?php echo $right["selNo"]; ?>/<?php echo slugTitle($right["title"]); ?>">পরের ছবি</a>
					</div>
					<div class="additional-tag"> 
						<div class="like-holder">  
							<span> <button class="btn btn-success albumlike glyphicon glyphicon-thumbs-up"></button><span id="likecount"><?php echo $like; ?></span></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-12 "> 
				<div class="o-r-news"> 
					<?php 
					$sql = "SELECT * FROM bodhi_photo ORDER BY id DESC limit 8";
					$result = mysqli_query($conn, $sql);
					while($view = mysqli_fetch_assoc($result)){
					?>
					<div class="row listing-one"> 
						<a class="news-link-overly" href="/photo/gallery/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>">
							<div class="col-img">
								<div class="image"> 
									<span
									   class="lazy-image out"
									   data-class="big-img"
									   data-image="../album/<?php echo $view["fimg"]; ?>"
									   data-alt="<?php echo slugTitle($view["title"]); ?>">
									</span>
									<span class="glyphicon glyphicon-camera"></span>
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
	<!-- Comment Started -->
	<div class="news-comment" id="comments">
		<div class="row"> 
			<div class="col-md-2"> 
				<?php
					$sql = "SELECT * FROM photo_comments WHERE news_id='$a_id' ORDER BY id DESC";
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
					<p>মন্তব্য করতে <a class="btn btn-primary" data-toggle="modal" data-target="#loginModal">লগইন</a> অথবা <a data-toggle="modal" data-target="#registerModal" style="color: blue;font-size: 20px;">রেজিস্টার</a> করুন</p>
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
					url: '/photo/comment.php?id=<?php echo $a_id; ?>&category=<?php echo $category; ?>',
					data: data,
					beforeSend: function(){
						$('#jwPollAjaxWorking').html("<img src='../img/spinner1.gif' alt='' width='50' height='50'/>");
						$('#jwPollVoteFormContainer').hide();
						},
					success: function(data){
						$('#jwPollAjaxWorking').html(data);
						window.location='<?php echo "/".$category."/gallery/".$a_id."/".$_GET["title"] ?>';
						},
					error: function(){
						$('#jwPollAjaxWorking').html("Error");
						$('#jwPollVoteFormContainer').show();
						}
				});
			})	
		</script>
	</div>
	<!-- Comment Closed -->
	<div class="content-next-prev"> 
		<div class="prev content-holder"> 
			<span class="dir glyphicon glyphicon-chevron-left"></span>
			<div class="content-inner"> 
				<div class="contents"> 
					<div class="each"> 
						<a class="prev-next-link" href="/photo/gallery/<?php echo $left["selNo"]; ?>/<?php echo $left["title"]; ?>"></a>
						<div class="image"> 
							<img src="/album/<?php echo $left["fimg"]; ?>" alt="<?php echo $left["title"]; ?>" height="60px"/>
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
					আগের ছবি
				</div>
			</div>
		</div>
		<div class="content-holder next"> 
			<span class="dir glyphicon glyphicon-chevron-right"></span>
			<div class="content-inner"> 
				<div class="contents"> 
					<div class="each"> 
						<a class="prev-next-link" href="/photo/gallery/<?php echo $right["selNo"]; ?>/<?php echo $right["title"]; ?>"></a>
						<div class="image"> 
							<span><img src="/album/<?php echo $right["fimg"]; ?>" alt="<?php echo $right["title"]; ?>" height="60px"/></span>
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
					পরের ছবি
				</div>
			</div>
		</div>
	</div>
	<article class="container news-relate"> 
		<div class="news-multimedia"> 
			<div class="row"> 
				<?php
					$sql = "SELECT * FROM bodhi_photo ORDER BY id DESC limit 8";
					$result = mysqli_query($conn, $sql);
					$rows = mysqli_num_rows($result);
					while($view = mysqli_fetch_assoc($result)){
				?>
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
				<?php
				}
				?>
			</div>
		</div>
		<?php 
		if($rows > 0){ ?>
		<div class="bottom">
			<a class="more-link" href="/photo/page/2">আরও</a>
		</div>	
		<?php } ?>
	</article>
	<?php include_once("../inc/footer.php"); ?>
</body>
</html>