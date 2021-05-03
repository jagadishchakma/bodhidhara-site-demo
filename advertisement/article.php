<?php
include_once("../admin/config.php");
include_once("../admin/format.php");
function sub_category($subcategory){
	$sub = $subcategory;
	$engsub = array("category1","category2","category3","category4","category5","category6","category7","category8","category9","category10");
	$bnsub = array("নিয়োগ","গৃহ শিক্ষক  ","বই","বিক্রয়","ক্রয়","প্রশিক্ষণ","কোচিং","প্রাইভেট ","সেবা ","বিবিধ ");
	return str_replace($engsub, $bnsub, $sub);
}
$a_id = $_GET['id'];
$sql = "SELECT * FROM bodhi_ads WHERE selNo='$a_id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if($row === 1){
	$view = mysqli_fetch_assoc($result);
	$like = $view["pLike"];
	$rid = $view["id"];
	// Unique visitor counter
	$viewers = $view["pView"]; 
	$viewUp = $viewers+1;
	$vUpdate = "UPDATE bodhi_ads SET pView='$viewUp' WHERE selNo='$a_id'";
	mysqli_query($conn,$vUpdate);
}else{
	header("location: https://www.bodhidhara.com/advertisement");
}
$category = "advertisement";
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
	<meta name="keywords" content="<?php echo $view["tag"]; ?>">
	<meta name="description" content="">
		
	<!--for fb -->
	<meta property="og:title" content="<?php echo $view["title"]; ?>">
	<meta property="og:site_name" content="বোধিধারা">
	<meta property="og:description" content="">
		
	<meta property="og:type" content="article">
	<!--<meta property="article:author" content="[author_link]" />-->
						
	<meta property="og:url" content="<?php echo $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
		
	<meta property="og:image" content="/bimg/<?php echo $view["fimg"] ;?>">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta name="fb:app_id" property="fb:app_id" content="549787358890465">
	<?php include_once("../inc/css-file.php"); ?>
	<link rel="stylesheet" href="/advertisement/link/style.css"/>
	<link rel="stylesheet" href="/advertisement/link/article.css"/>
	<link rel="stylesheet" href="/advertisement/link/xzoom.css" />
</head>
<body>
	<?php include_once("../inc/bodhi-header.php"); ?>
	<section class="section container"> 
		<?php include_once("inc/navs.php"); ?>
		<!-- Here a Advertisements -->
		<div class="breadcrumb"> 
			<ul>
				<li class="breadcrumb-item bred"> <a href="https://www.bodhidhara.com"><strong>প্রচ্ছদ</strong></a> </li>
				<li class="breadcrumb-item bred"> <a href="https://www.bodhidhara.com/advertisement">বিজ্ঞাপন</a> </li>
				<li class="breadcrumb-item"><a href="https://www.bodhidhara.com/advertisement"><?php echo sub_category($view["category"]); ?></a> </li>
			</ul>
		</div>
		<div class="row"> 
			<div class="col-md-8 col-12"> 
				<div class="row"> 
					<div class="left-category"> 
						<div class="col-in"><a href="https://www.bodhidhara.com/advertisement">বিজ্ঞাপন সংবাদ</a></div>
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
								<div class="glyphicon glyphicon-user author each-row"><span><?php echo $view["name"]; ?></span></div>
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
									<div class="xzoom-container">
										<div class="image"> 
											<span
											   class="lazy-image out"
											   data-class="xzoom"
											   data-image="../adimg/<?php echo $view["pic1"]; ?>"
											   data-alt="<?php echo slugTitle($view["title"]); ?>">
											</span>
										</div>
										<div class="xzoom-thumbs">
											<img class="xzoom-gallery1 thumb1" width="80" src="../adimg/<?php echo $view['pic1']; ?>">
											
											<img class="xzoom-gallery2 thumb2" width="80" src="../adimg/<?php echo $view['pic2']; ?>">
											
											<img class="xzoom-gallery3 thumb3" width="80" src="../adimg/<?php echo $view['pic3']; ?>">
			
									    </div>
									    <script>
										$(document).ready(function(){
											$(".thumb1").click(function(){
												$(".xzoom").attr("src", "../adimg/<?php echo $view['pic1']; ?>");
											});
											$(".thumb2").click(function(){
												$(".xzoom").attr("src", "../adimg/<?php echo $view['pic2']; ?>");
											});
											$(".thumb3").click(function(){
												$(".xzoom").attr("src", "../adimg/<?php echo $view['pic3']; ?>");
											});
										});
										</script>
									</div>
									<div class="ads-info">
										<div class="author-info">
											<span class="author-name"><strong>বিজ্ঞাপন দাতার নাম:</strong><?php echo $view["name"]; ?></span>
											<span class="author-passion"><strong>পেশা:</strong><?php echo $view["passion"]; ?></span>
											<span class="author-addr"><strong>ঠিকানা:</strong><?php echo $view["addr"]; ?></span>
											<span class="author-mobile"><strong>যোগাযোগ:</strong><?php echo $view["addr"]; ?></span>
										</div>
										<p>	
										<?php
											$article = nl2br($view["txt"]);
											echo $article;
										?>
										</p>
									</div>
								</div>
							</article>
							<div class="more-tag">
								<a class="more-link" href="https://www.bodhidhara.com/advertisement/">আরও বিজ্ঞাপন</a>
								<span class="contents-tag-header">বিষয়:</span>
								<a class="more-link" href="https://www.bodhidhara.com/advertisement/"><?php echo sub_category($view["category"]); ?></a>
							</div>
							<div class="additional-bottom-container">
								<div class="like-holder">  
									<span> <button class="btn btn-success adlike glyphicon glyphicon-thumbs-up"></button><span id="likecount"><?php echo $like; ?></span></span>
								</div>
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
					$sql = "SELECT * FROM bodhi_ads ORDER BY id DESC limit 8";
					$result = mysqli_query($conn, $sql);
					while($view = mysqli_fetch_assoc($result)){
					?>
					<div class="row listing-one"> 
						<a class="news-link-overly" href="/advertisement/article/<?php echo $view["selNo"]; ?>/<?php echo slugTitle($view["title"]); ?>">
							<div class="col-img">
								<div class="image"> 
									<span
									   class="lazy-image out"
									   data-class="big-img"
									   data-image="../adimg/<?php echo $view["pic1"]; ?>"
									   data-alt="<?php echo slugTitle($view["title"]); ?>">
									</span>
								</div>
							</div>
							<div class="col-title">
								<h2><?php echo $view["title"]; ?></h2>
								<span class="news-date-holder"> <?php echo get_time_ago($view["pTime"]); ?> </span>
							</div>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>	
	<!-- News Comment -->
	<div class="news-comment" id="comments">
		<div class="row"> 
			<div class="col-md-2"> 
				<?php
					$sql = "SELECT * FROM ads_comments WHERE news_id='$a_id' ORDER BY id DESC";
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
					<p>মন্তব্য করতে <a class="btn btn-primary"  data-toggle="modal" data-target="#loginModal>লগইন</a> অথবা <a   data-toggle="modal" data-target="#registerModal"style="color: blue;font-size: 20px;">রেজিস্টার</a> করুন</p>
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
					url: '/advertisement/comment.php?id=<?php echo $a_id; ?>&category=<?php echo $category; ?>',
					data: data,
					beforeSend: function(){
						$('#jwPollAjaxWorking').html("<img src='../img/spinner1.gif' alt='' width='50' height='50'/>");
						$('#jwPollVoteFormContainer').hide();
						},
					success: function(data){
						$('#jwPollAjaxWorking').html(data);
						window.location='<?php echo "/".$category."/article/".$a_id."/".$_GET["title"] ?>';
						},
					error: function(){
						$('#jwPollAjaxWorking').html("Error");
						$('#jwPollVoteFormContainer').show();
						}
				});
			})	
		</script>
	</div> 
	<!-- News Comment Closed -->
	<div class="content-next-prev"> 
		<div class="prev content-holder"> 
			<span class="dir glyphicon glyphicon-chevron-left"></span>
			<div class="content-inner"> 
				<div class="contents"> 
					<div class="each"> 
						<?php
							$rid = $rid-1;
							$sql = "SELECT * FROM bodhi_ads WHERE id='$rid'";
							$result = mysqli_query($conn, $sql);
							$left = mysqli_fetch_assoc($result);
						?>
						<a class="prev-next-link" href="/advertisement/article/<?php echo $left["selNo"]; ?>/<?php echo slugTitle($left["title"]); ?>"></a>
						<div class="image"> 
							<img src="../adimg/<?php echo $left["pic1"]; ?>" alt="<?php echo slugTitle($left["title"]); ?>" height="60px"/>
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
					আগের বিজ্ঞাপন
				</div>
			</div>
		</div>
		<div class="content-holder next"> 
			<span class="dir glyphicon glyphicon-chevron-right"></span>
			<div class="content-inner"> 
				<div class="contents"> 
					<div class="each"> 
						<?php
							$rid = $rid+1;
							$sql = "SELECT * FROM bodhi_ads WHERE id='$rid'";
							$result = mysqli_query($conn, $sql);
							$right = mysqli_fetch_assoc($result);
						?>
						<a class="prev-next-link" href="/advertisement/article/<?php echo $right["selNo"]; ?>/<?php echo slugTitle($right["title"]); ?>"></a>
						<div class="image"> 
							<span><img src="../adimg/<?php echo $right["pic1"]; ?>" alt="<?php echo slugTitle($right["title"]); ?>" height="60px"/></span>
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
					পরের বিজ্ঞাপন
				</div>
			</div>
		</div>
	</div>
	<article class="container news-relate"> 
		<div class="row"> 
			<?php
				$sql = "SELECT * FROM bodhi_news ORDER BY id DESC limit 8";
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
						<div class="info"> 
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