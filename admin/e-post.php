<?php
include_once("config.php");
$cookie = $_COOKIE['adminpass'];
$sql = "SELECT * FROM bodhi_admin WHERE pass='$cookie'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if($row == 1){
	
}else{
	header("location: login.php");
}
?>
<!DOCTYPE HTML>
<html lang="bn">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel | E-paper Posts </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="../link/bootstrap.css" />
	<script src="../link/jquery-3.3.1.min.js"></script>
	<style> 
		body{
			font-family: Kiron, SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif !important;
		}
		.header {
			background-color: #a3dad5;
			position: fixed;
			left: 0;
			right: 0;
			top: 0;
			overflow: hidden;
			height: 100px;
		}
		nav .menu{
			position: fixed;
			background-color: #c8dedc;
			left: 0;
			top: 100px;;
			width: 250px;
			overflow: scroll;;
			height: 100%;
		}
		.section{
			padding: 10px;
			margin-top: 100px;
		}
		.section .rules{
			width: 90%;
			margin: 0 auto;
			font-family: SolaimanLipi,Arial,sans-serif;
		}
		h1,h2{
			text-align: center;
		}
		h2{
			color: green;
		}
		input,textarea,select{
			width: 100%;
			padding: 10px;
			margin: 10px;
		}
		.img{
			border: 1px solid gray;
		}
		.btn-primary{
			padding: 10px;
			margin: 10px;
		}
		textarea{
			height: 200px;
		}
		.menu-toggle{
			cursor: pointer;
			padding: 12px;
			margin: 10px;
			background: #101412;
			transition: background-color .5s;
			width: 50px;
			color: white;
		}
		ul li{
			list-style: none;
		}
		ul li ul li{
			list-style: circle;
		}
		ul li ul li a{
			color: black;
		}
		h1{
			margin-left: 40px;
		}
		#showpic{
			display: none;
		}
		#showtips{
			display: none;
			border: 1px solid green;
			margin: 10px;
		}
		#showcode{
			display: none;
			border: 1px solid green;
			margin: 10px;
		}
		#showcode1{
			display: none;
			border: 1px solid green;
			margin: 10px;
		}
		#showcode2{
			display: none;
			border: 1px solid green;
			margin: 10px;
		}
		#showcode3{
			display: none;
			border: 1px solid green;
			margin: 10px;
		}
		#showcode4{
			display: none;
			border: 1px solid green;
			margin: 10px;
		}
		#showcode5{
			display: none;
			border: 1px solid green;
			margin: 10px;
		}
		#showcode6{
			display: none;
			border: 1px solid green;
			margin: 10px;
		}
		#showcode7{
			display: none;
			border: 1px solid green;
			margin: 10px;
		}
		#showcode8{
			display: none;
			border: 1px solid green;
			margin: 10px;
		}
		
		@media only screen and (min-width: 992px) {
			#openPageslide{
				display: none;
			}
			.section{
				margin-left: 250px;
			}
			#txt{
				height: 600px;
			}
		}
		@media only screen and (max-width: 991px) {
			.menu,.logo{
				display: none;
			}
		}
		.file_drag_area{
			width: 100%;
			height: 300px;
			border: 2px dashed gray;
			line-height: 300px;
			font-size: 24px;
			text-align: center;
			padding: 10px;
			margin: 10px;
		}
		.file_drag_over{
			color: #000;
			border-color: #000;
		}
		.generator{
			padding: 10px;
			margin: 10px;
		}
		.generate{
			padding-bottom: 10px;
		}
		.generate-code {
			border: 1px solid red;
			padding: 10px;
		}
		.col-md-6,.col-md-3,.col-md-4,.col-md-8 {
			padding: 0;
		}
	</style>
	<script> 
		$(document).ready(function(){
			var $pageslide = $('#pageslide');
			$("#openPageslide").click(function(){
				$('#openPageslide1').show();
				$('#openPageslide').hide();
			   $pageslide.css({ 'display':'block'}).animate({'left':0 });
				return false;
			});
			 $("#openPageslide1").click(function(){
				$('#openPageslide').show();
				$('#openPageslide1').hide();
			   $pageslide.animate({'left': 300*-1 + 'px' },function(){
				  $pageslide.hide();
				});
				return false;
			});
		}); 
		// For Extra Feature Add Script
		$(document).ready(function(){
			$("#pic").click(function(){
				$("#showpic").toggle();
			});
			$("#tips").click(function(){
				$("#showtips").toggle();
			});
			$("#code").click(function(){
				$("#showcode").toggle();
			});
			$("#code1").click(function(){
				$("#showcode1").toggle();
			});
			$("#code2").click(function(){
				$("#showcode2").toggle();
			});
			$("#code3").click(function(){
				$("#showcode3").toggle();
			});
			$("#code4").click(function(){
				$("#showcode4").toggle();
			});
			$("#code5").click(function(){
				$("#showcode5").toggle();
			});
			$("#code6").click(function(){
				$("#showcode6").toggle();
			});
			$("#code7").click(function(){
				$("#showcode7").toggle();
			});
			$("#code8").click(function(){
				$("#showcode8").toggle();
			});
		}); 
		// this script for select options
		$(document).ready(function(){
		  $("#category").on("change",function(){
			var selectedVal = $(this).find("option:selected" ).val();
		   
			$('#subcategory > optgroup[label="'+selectedVal+'"]')
			  .show()
			  .siblings("optgroup")
			  .css("display","none");
		 });  
		});
		
    </script>
</head>
<body>
	<header class="header"> 
		<div class="row"> 
			<div class="col-md-8"> 
				<span class="menu-toggle" id="openPageslide">menu</span>
				<span class="menu-toggle" id="openPageslide1" style="display:none">menu</span>
				<img src="../img/cpanel.png" alt="" width="200" style="padding-left: 20px;"/>
			</div>
			<div class="col-md-4"> 
				
			</div>
		</div>
	</header>
	<nav> 
		<div class="menu" id="pageslide"> 
			<ul>
				<li><i><img src="../img/dashboard.png" alt="cpanel" width="30"/></i><a href="index.php"> Dashboard</a></li>
				<li><i><img src="../img/post.png" alt="TFB Post" width="30"/></i> E-paper Page Post
					<ul>
						<li <?php if(isset($_GET["post1"]) == "first_post"){echo'style="background-color: gray"';}?>><a href="e-post.php?post1=first_post">First Page Post</a></li>
						<li <?php if(isset($_GET["post2"]) == "second_post"){echo'style="background-color: gray"';}?>><a href="e-post.php?post2=second_post">Second Page Post</a></li>
						<li <?php if(isset($_GET["post3"]) == "third_post"){echo'style="background-color: gray"';}?>><a href="e-post.php?post3=third_post">Third Page Post</a></li>
						<li <?php if(isset($_GET["post4"]) == "news_post"){echo'style="background-color: gray"';}?>><a href="e-post.php?post4=news_post">News Page POst</a></li>
						<li <?php if(isset($_GET["post4"]) == "news_post"){echo'style="background-color: gray"';}?>><a href="e-post.php?post5=news_detail">News Detail Post</a></li>
					</ul>
				</li>	
			</ul>
		</div>
	</nav>
	<section class="section"> 
		<div class="rules"> 
			<?php
			if(isset($_GET["post1"]) == "first_post"){//E-paper First Page Post
				if(isset($_GET["post1"]) == "first_post" AND isset($_GET["type"]) == "successfully"){
					echo'<h2>Submitted Successfully</h2>';
				}
				echo'<h1>E-paper First Page Post</h1>';
				echo'
					<form action="e-post-action.php" method="POST">
						<div class="one"> 
							<textarea name="page1one" placeholder="Details News Paper"></textarea>
							<span class="btn btn-primary" id="code">+কোড</span>
							<div id="showcode"> 
								&lt;li&gt;বর্ষ- ১২, সংখ্যা- ০৩&lt;/li&gt; <br>
								&lt;li&gt;শনিবার, ১৮মে১৯&lt;/li&gt; <br>
								&lt;li&gt;৪ জ্যৈষ্ঠ ১৪২৬ বঙ্গাব্দ&lt;/li&gt; <br>
								&lt;li&gt;২৫৬৩দ বুদ্ধাব্দ&lt;/li&gt; <br>
								&lt;li&gt;পৃষ্ঠা- ২৪&lt;/li&gt; <br>
								&lt;li&gt;শ্রদ্ধাদান- &lt;big&gt;২৫&lt;/big&gt; টাকা&lt;/li&gt; <br>
							</div>
						</div>
						<div class="next-prev"> 
							<input type="text" name="page1two" placeholder="Next Page Link"/>
							<span class="btn btn-primary" id="code1">+কোড</span>
							<div id="showcode1"> 
								&lt;a class="btn btn-success" href="https://www.bodhidhara.com/epaper/article.php?id=23&page=46"&gt;পরের পৃষ্ঠা &lt;span class="glyphicon glyphicon-chevron-right"&gt;&lt;/span&gt;&lt;/a&gt;
							</div>
						</div>
						<div class="title"> 
							<input type="txt" name="page1three" placeholder="Title"/>
							<input type="text" name="page1four" placeholder="Image Path" />
						</div>
						<span class="btn btn-primary" id="pic">+ছবি</span>
						<div id="showpic"> 
							<div class="file_drag_area"> 
								Drop Files Here
							</div>
							<div id="uploaded_file"></div>
						</div>
						<div class="row"> 
							<div class="col-md-6"> 
								<textarea name="page1five" placeholder="Papaer Contents"></textarea>
								<span class="btn btn-primary" id="code2">+কোড</span>
								<div id="showcode2"> 
									&lt;li&gt;List One&lt;/li&gt; <br>
									&lt;li&gt;List One&lt;/li&gt; <br>
									&lt;li&gt;List One&lt;/li&gt; <br>
									&lt;li&gt;List One&lt;/li&gt;
								</div>
							</div>
							<div class="col-md-6"> 
								<textarea name="page1six" placeholder="News Summery"></textarea>
								<span class="btn btn-primary" id="code3">+কোড</span>
								<div id="showcode3"> 
									&lt;p&gt;<br>
									বুদ্ধ পূর্ণিমায় বৌদ্ধ শিশুদের মেলা হবে “লুম্বিনীমেলা”। 
									ফুলে ফুলে সাজাবে বৌদ্ধ গান, নাচ, অংকনকলা, আবৃত্তিকলা, অভিনয় শৈলী-সবকিছু। 
									বুদ্ধের ধর্মের জয়ডংকার বাজাবার অজেয় শক্তি সাহস সঞ্চয়ের এই তো একটি দিন- বুদ্ধ পূর্ণিমা। 
									বুদ্ধ পূর্ণিমা আমাদের দুয়ারে এসে ফিরে যায়। 
									তার দিকে একটু ফিরে তাকালে সেতো আমাদের আশির্বাদ দিয়ে যেতো। <br>
									&lt;/p&gt; <br>
									&lt;p&gt;<br>
									বুদ্ধ পূর্ণিমায় বৌদ্ধ শিশুদের মেলা হবে “লুম্বিনীমেলা”। 
									ফুলে ফুলে সাজাবে বৌদ্ধ গান, নাচ, অংকনকলা, আবৃত্তিকলা, অভিনয় শৈলী-সবকিছু।  <br>
									&lt;/p&gt;<br>
								</div>
							</div>
						</div>
						<input type="text" name="page1seven" value="বোধিধারা নিয়মিত প্রকাশনার চলমান ১২ বছর"/>
						<input type="submit" value="Submit" name="page1"/>
					</form>
				<script>
				$(document).ready(function(){
				  $(".file_drag_area").on("dragover", function(){
					  $(this).addClass("file_drag_over");
					  return false;
				  });
				  $(".file_drag_area").on("dragleave", function(){
					  $(this).removeClass("file_drag_over");
					  return false;
				  });
				  $(".file_drag_area").on("drop", function(e){
					  e.preventDefault();
					  $(this).removeClass("file_drag_over");
					  var formData = new FormData();
					  var files_list = e.originalEvent.dataTransfer.files;
					  for(var i = 0; i<files_list.length; i++){
						  formData.append("file[]", files_list[i]);
					  }
					  $.ajax({
						  url: "news_image_upload.php",
						  method: "POST",
						  data: formData,
						  contentType: false,
						  cache: false,
						  processData: false,
						  success: function(data){
							 $("#uploaded_file").html(data); 
						  }
					  });
				  });
				});
				</script>
				';
			}elseif(isset($_GET["post2"]) == "second_post"){ // E-paper Second Page Post
				if(isset($_GET["post2"]) == "second_post" AND isset($_GET["type"]) == "successfully"){
					echo'<h2>Submitted Successfully</h2>';
				}
				echo'<h1>E-paper Second Page Post</h1>';
				echo'
				<form action="e-post-action.php" method="POST"> 
					<div class="header-form"> 
						<div class="row"> 
							<div class="col-md-3"> 
								<input type="text" name="page2one" value="<big>ত্রৈমাসিক বোধিধারা</big><br><small>শনিবার,১৮মে১৯</small>"/>
							</div>
							<div class="col-md-3"> 
								<input type="text" name="page2two" value="উপদেশ বাণী"/>
							</div>
							<div class="col-md-3"> 
								<input type="text" name="page2three" value="০৪ পৃষ্ঠা"/>
							</div>
							<div class="col-md-3"> 
								<input type="text" name="page2four" value="নিয়মিত প্রকাশনার ১২ বছর"/>
							</div>
						</div>
					</div>
					<div class="pagination-form"> 
						<textarea name="page2five" placeholder="Page Number Serial"></textarea>
						<span class="btn btn-primary" id="code">+কোড</span>
						<div id="showcode"> 
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০১ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০২ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৩পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৪ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৫পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৬ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৭ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৮ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৯ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১০ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১১ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১২ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৩ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৪ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৫ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৬ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br> 
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৭ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৮ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br> 
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৯ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;২০ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;২১ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
						</div>
					</div>
					<div class="next-prev"> 
						<div class="row"> 
							<div class="col-md-6"> 
								<input type="text" name="page2six" placeholder="Previous link"/>
								<span class="btn btn-primary" id="code1">+কোড</span>
								<div id="showcode1"> 
									&lt;a class="btn btn-success" href="https://www.bodhidhara.com/epaper/article.php?id=23&page=46"&gt;&lt;span class="glyphicon glyphicon-chevron-left"&gt;&lt;/span&gt; পূর্বের পৃষ্ঠা &lt;/a&gt;
								</div>
							</div>
							<div class="col-md-6"> 
								<input type="text" name="page2seven" placeholder="Next link"/>
								<span class="btn btn-primary" id="code2">+কোড</span>
								<div id="showcode2"> 
									&lt;a class="btn btn-success" href="https://www.bodhidhara.com/epaper/article.php?id=23&page=46"&gt;পরের পৃষ্ঠা &lt;span class="glyphicon glyphicon-chevron-right"&gt;&lt;/span&gt;&lt;/a&gt;
								</div>
							</div>
						</div>
					</div>
					<div class="guru-advice"> 
						<div class="row"> 
							<div class="col-md-6"> 
								<input type="text" name="page2eight" placeholder="Image Path"/>
								<textarea name="page2nine" placeholder="Advice"></textarea>
								<span class="btn btn-primary" id="code3">+কোড</span>
								<div id="showcode3"> 
									&lt;div class="talk-title"&gt;বুদ্ধের বাণী&lt;/div&gt; <br>
									&lt;div class="talk"&gt; <br>
										&lt;p&gt;বুদ্ধ পূর্ণিমায় বৌদ্ধ শিশুদের মেলা হবে “লুম্বিনীমেলা”। ফুলে ফুলে সাজাবে বৌদ্ধ গান, নাচ, অংকনকলা, আবৃত্তিকলা, অভিনয় শৈলী-সবকিছু। বুদ্ধের ধর্মের জয়ডংকার বাজাবার অজেয় শক্তি সাহস সঞ্চয়ের এই তো একটি দিন- বুদ্ধ পূর্ণিমা। বুদ্ধ পূর্ণিমা আমাদের দুয়ারে এসে ফিরে যায়। তার দিকে একটু ফিরে তাকালে সেতো আমাদের আশির্বাদ দিয়ে যেতো। &lt;/p&gt; <br>
									&lt;/div&gt; <br>
								</div>
							</div>
							<div class="col-md-6"> 
								<input type="text" name="page2ten" placeholder="Image Path"/>
								<textarea name="page2eleven" placeholder="Advice"></textarea>
								<span class="btn btn-primary" id="code4">+কোড</span>
								<div id="showcode4"> 
									&lt;div class="talk-title"&gt;বুদ্ধের বাণী&lt;/div&gt; <br>
									&lt;div class="talk"&gt; <br>
										&lt;p&gt;বুদ্ধ পূর্ণিমায় বৌদ্ধ শিশুদের মেলা হবে “লুম্বিনীমেলা”। ফুলে ফুলে সাজাবে বৌদ্ধ গান, নাচ, অংকনকলা, আবৃত্তিকলা, অভিনয় শৈলী-সবকিছু। বুদ্ধের ধর্মের জয়ডংকার বাজাবার অজেয় শক্তি সাহস সঞ্চয়ের এই তো একটি দিন- বুদ্ধ পূর্ণিমা। বুদ্ধ পূর্ণিমা আমাদের দুয়ারে এসে ফিরে যায়। তার দিকে একটু ফিরে তাকালে সেতো আমাদের আশির্বাদ দিয়ে যেতো। &lt;/p&gt; <br>
									&lt;/div&gt; <br>
								</div>
							</div>
						</div>
					</div>
					<div class="user-advice"> 
						<div class="row"> 
							<div class="col-md-4"> 
								<input type="tex" name="page2twelve" placeholder="Image Path"/>
							</div>
							<div class="col-md-8"> 
								<textarea name="page2thirteen" placeholder="General Advice"></textarea>
								<span class="btn btn-primary" id="code5">+কোড</span>
								<div id="showcode5"> 
									&lt;div class="general-talk"&gt; <br>
									বুদ্ধ পূর্ণিমায় বৌদ্ধ শিশুদের মেলা হবে “লুম্বিনীমেলা”। ফুলে ফুলে সাজাবে বৌদ্ধ গান, নাচ, অংকনকলা, আবৃত্তিকলা, অভিনয় শৈলী-সবকিছু। বুদ্ধের ধর্মের জয়ডংকার বাজাবার অজেয় শক্তি সাহস সঞ্চয়ের এই তো একটি দিন- বুদ্ধ পূর্ণিমা। বুদ্ধ পূর্ণিমা আমাদের দুয়ারে এসে ফিরে যায়। তার দিকে একটু ফিরে তাকালে সেতো আমাদের আশির্বাদ দিয়ে যেতো।  <br>
									&lt;/div&gt; <br>
									&lt;div class="talker"&gt; <br>
										&lt;span&gt;সুপ্রিয় চাকমা (শুভ)&lt;/span&gt; &lt;br&gt; <br>
										&lt;span&gt;প্রতিবেদক&lt;/span&gt; &lt;br&gt; <br>
										&lt;span&gt;হিলর প্রোডাকশন এর সভাপতি&lt;/span&gt; &lt;br&gt; <br>
									&lt;/div&gt;
								</div>
							</div>
						</div>
						<div class="row"> 
							<div class="col-md-4"> 
								<input type="tex" name="page2fourteen" placeholder="Image Path"/>
							</div>
							<div class="col-md-8"> 
								<textarea name="page2fifteen" placeholder="General Advice"></textarea>
								<span class="btn btn-primary" id="code6">+কোড</span>
								<div id="showcode6"> 
									&lt;div class="general-talk"&gt; <br>
									বুদ্ধ পূর্ণিমায় বৌদ্ধ শিশুদের মেলা হবে “লুম্বিনীমেলা”। ফুলে ফুলে সাজাবে বৌদ্ধ গান, নাচ, অংকনকলা, আবৃত্তিকলা, অভিনয় শৈলী-সবকিছু। বুদ্ধের ধর্মের জয়ডংকার বাজাবার অজেয় শক্তি সাহস সঞ্চয়ের এই তো একটি দিন- বুদ্ধ পূর্ণিমা। বুদ্ধ পূর্ণিমা আমাদের দুয়ারে এসে ফিরে যায়। তার দিকে একটু ফিরে তাকালে সেতো আমাদের আশির্বাদ দিয়ে যেতো।  <br>
									&lt;/div&gt; <br>
									&lt;div class="talker"&gt; <br>
										&lt;span&gt;সুপ্রিয় চাকমা (শুভ)&lt;/span&gt; &lt;br&gt; <br>
										&lt;span&gt;প্রতিবেদক&lt;/span&gt; &lt;br&gt; <br>
										&lt;span&gt;হিলর প্রোডাকশন এর সভাপতি&lt;/span&gt; &lt;br&gt; <br>
									&lt;/div&gt;
								</div>
							</div>
						</div>
						<div class="row"> 
							<div class="col-md-4"> 
								<input type="tex" name="page2sixteen" placeholder="Image Path"/>
							</div>
							<div class="col-md-8"> 
								<textarea name="page2seventeen" placeholder="General Advice"></textarea>
								<span class="btn btn-primary" id="code7">+কোড</span>
								<div id="showcode7"> 
									&lt;div class="general-talk"&gt; <br>
									বুদ্ধ পূর্ণিমায় বৌদ্ধ শিশুদের মেলা হবে “লুম্বিনীমেলা”। ফুলে ফুলে সাজাবে বৌদ্ধ গান, নাচ, অংকনকলা, আবৃত্তিকলা, অভিনয় শৈলী-সবকিছু। বুদ্ধের ধর্মের জয়ডংকার বাজাবার অজেয় শক্তি সাহস সঞ্চয়ের এই তো একটি দিন- বুদ্ধ পূর্ণিমা। বুদ্ধ পূর্ণিমা আমাদের দুয়ারে এসে ফিরে যায়। তার দিকে একটু ফিরে তাকালে সেতো আমাদের আশির্বাদ দিয়ে যেতো।  <br>
									&lt;/div&gt; <br>
									&lt;div class="talker"&gt; <br>
										&lt;span&gt;সুপ্রিয় চাকমা (শুভ)&lt;/span&gt; &lt;br&gt; <br>
										&lt;span&gt;প্রতিবেদক&lt;/span&gt; &lt;br&gt; <br>
										&lt;span&gt;হিলর প্রোডাকশন এর সভাপতি&lt;/span&gt; &lt;br&gt; <br>
									&lt;/div&gt;
								</div>
							</div>
						</div>
					</div>
					<div class="another"> 
					<span class="btn btn-primary" id="pic">+ছবি</span>
					<div id="showpic"> 
						<div class="file_drag_area"> 
							Drop Files Here
						</div>
						<div id="uploaded_file"></div>
					</div>
					<input type="submit" value="Submit" name="page2"/>
					
					</div>
				</form>
				<script>
				$(document).ready(function(){
				  $(".file_drag_area").on("dragover", function(){
					  $(this).addClass("file_drag_over");
					  return false;
				  });
				  $(".file_drag_area").on("dragleave", function(){
					  $(this).removeClass("file_drag_over");
					  return false;
				  });
				  $(".file_drag_area").on("drop", function(e){
					  e.preventDefault();
					  $(this).removeClass("file_drag_over");
					  var formData = new FormData();
					  var files_list = e.originalEvent.dataTransfer.files;
					  for(var i = 0; i<files_list.length; i++){
						  formData.append("file[]", files_list[i]);
					  }
					  $.ajax({
						  url: "news_image_upload.php",
						  method: "POST",
						  data: formData,
						  contentType: false,
						  cache: false,
						  processData: false,
						  success: function(data){
							 $("#uploaded_file").html(data); 
						  }
					  });
				  });
				});
				</script>
				';
			}elseif(isset($_GET["post3"]) == "third_post"){// E-paper Third Page Post
				if(isset($_GET["post3"]) == "third_post" AND isset($_GET["type"]) == "successfully"){
					echo'<h2>Submitted Successfully</h2>';
				}
				echo'<h1>E-paper Third Page Post</h1>';
				echo'
				<form action="e-post-action.php" method="POST"> 
					<div class="header-form"> 
						<div class="row"> 
							<div class="col-md-3"> 
								<input type="text" name="page3one" value="<big>ত্রৈমাসিক বোধিধারা</big><br><small>শনিবার,১৮মে১৯</small>"/>
							</div>
							<div class="col-md-3"> 
								<input type="text" name="page3two" value="উপদেশ বাণী"/>
							</div>
							<div class="col-md-3"> 
								<input type="text" name="page3three" value="০৪ পৃষ্ঠা"/>
							</div>
							<div class="col-md-3"> 
								<input type="text" name="page3four" value="নিয়মিত প্রকাশনার ১২ বছর"/>
							</div>
						</div>
					</div>
					<div class="pagination-form"> 
						<textarea name="page3five" placeholder="Page Number Serial"></textarea>
						<span class="btn btn-primary" id="code">+কোড</span>
						<div id="showcode"> 
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০১ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০২ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৩পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৪ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৫পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৬ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৭ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৮ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৯ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১০ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১১ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১২ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৩ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৪ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৫ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৬ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br> 
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৭ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৮ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br> 
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৯ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;২০ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;২১ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
						</div>
					</div>
					<div class="next-prev"> 
						<div class="row"> 
							<div class="col-md-6"> 
								<input type="text" name="page3six" placeholder="Previous link"/>
								<span class="btn btn-primary" id="code1">+কোড</span>
								<div id="showcode1"> 
									&lt;a class="btn btn-success" href="https://www.bodhidhara.com/epaper/article.php?id=23&page=46"&gt;&lt;span class="glyphicon glyphicon-chevron-left"&gt;&lt;/span&gt; পূর্বের পৃষ্ঠা &lt;/a&gt;
								</div>
							</div>
							<div class="col-md-6"> 
								<input type="text" name="page3seven" placeholder="Next link"/>
								<span class="btn btn-primary" id="code2">+কোড</span>
								<div id="showcode2"> 
									&lt;a class="btn btn-success" href="https://www.bodhidhara.com/epaper/article.php?id=23&page=46"&gt;পরের পৃষ্ঠা &lt;span class="glyphicon glyphicon-chevron-right"&gt;&lt;/span&gt;&lt;/a&gt;
								</div>
							</div>
						</div>
					</div>
					<div class="page3"> 
						<div class="row"> 
							<div class="col-md-4"> 
								<input type="text" name="page3eight" placeholder="Image Path"/>
								<span class="btn btn-primary" id="pic">+ছবি</span>
								<div id="showpic"> 
									<div class="file_drag_area"> 
										Drop Files Here
									</div>
									<div id="uploaded_file"></div>
								</div>
							</div>
							<div class="col-md-8"> 
								<input type="text" name="page3nine" placeholder="Title Here" />
								<input type="text" name="page3ten" placeholder="Author Image Path" />
								<textarea name="page3eleven" placeholder="Summery"></textarea>
								<span class="btn btn-primary" id="code3">+কোড</span>
								<div id="showcode3"> 
								&lt;p&gt;&lt;/p&gt; <br>
								&lt;p&gt;&lt;/p&gt; <br>
								&lt;p&gt;&lt;/p&gt; <br>
								</div>
							</div>
						</div>
					</div>
					<input class="btn btn-info" type="submit" name="page3" value="Submit"/>
				</form>
				<script>
				$(document).ready(function(){
				  $(".file_drag_area").on("dragover", function(){
					  $(this).addClass("file_drag_over");
					  return false;
				  });
				  $(".file_drag_area").on("dragleave", function(){
					  $(this).removeClass("file_drag_over");
					  return false;
				  });
				  $(".file_drag_area").on("drop", function(e){
					  e.preventDefault();
					  $(this).removeClass("file_drag_over");
					  var formData = new FormData();
					  var files_list = e.originalEvent.dataTransfer.files;
					  for(var i = 0; i<files_list.length; i++){
						  formData.append("file[]", files_list[i]);
					  }
					  $.ajax({
						  url: "news_image_upload.php",
						  method: "POST",
						  data: formData,
						  contentType: false,
						  cache: false,
						  processData: false,
						  success: function(data){
							 $("#uploaded_file").html(data); 
						  }
					  });
				  });
				});
				</script>
				';
			}elseif(isset($_GET["post4"]) == "news_post"){ // E-paper News Post
				if(isset($_GET["post4"]) == "news_post" AND isset($_GET["type"]) == "successfully"){
					echo'<h2>Submitted Successfully</h2>';
				}
				echo'<h1>E-paper News Post</h1>';
				echo'
				<form action="e-post-action.php" method="POST"> 
					<div class="header-form"> 
						<div class="row"> 
							<div class="col-md-3"> 
								<input type="text" name="page4one" value="<big>ত্রৈমাসিক বোধিধারা</big><br><small>শনিবার,১৮মে১৯</small>"/>
							</div>
							<div class="col-md-3"> 
								<input type="text" name="page4two" value="উপদেশ বাণী"/>
							</div>
							<div class="col-md-3"> 
								<input type="text" name="page4three" value="০৪ পৃষ্ঠা"/>
							</div>
							<div class="col-md-3"> 
								<input type="text" name="page4four" value="নিয়মিত প্রকাশনার ১২ বছর"/>
							</div>
						</div>
					</div>
					<div class="pagination-form"> 
						<textarea name="page4five" placeholder="Page Number Serial"></textarea>
						<span class="btn btn-primary" id="code">+কোড</span>
						<div id="showcode"> 
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০১ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০২ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৩পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৪ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৫পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৬ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৭ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৮ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;০৯ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১০ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১১ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১২ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৩ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৪ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৫ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৬ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br> 
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৭ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৮ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br> 
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;১৯ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;২০ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
							&lt;li&gt;&lt;a href="https://www.bodhidhara.com/epaper/article.php?id=01&page=23"&gt;২১ পৃষ্ঠা&lt;/a&gt;&lt;/li&gt; <br>
						</div>
					</div>
					<div class="next-prev"> 
						<div class="row"> 
							<div class="col-md-6"> 
								<input type="text" name="page4six" placeholder="Previous link"/>
								<span class="btn btn-primary" id="code1">+কোড</span>
								<div id="showcode1"> 
									&lt;a class="btn btn-success" href="https://www.bodhidhara.com/epaper/article.php?id=23&page=46"&gt;&lt;span class="glyphicon glyphicon-chevron-left"&gt;&lt;/span&gt; পূর্বের পৃষ্ঠা &lt;/a&gt;
								</div>
							</div>
							<div class="col-md-6"> 
								<input type="text" name="page4seven" placeholder="Next link"/>
								<span class="btn btn-primary" id="code2">+কোড</span>
								<div id="showcode2"> 
									&lt;a class="btn btn-success" href="https://www.bodhidhara.com/epaper/article.php?id=23&page=46"&gt;পরের পৃষ্ঠা &lt;span class="glyphicon glyphicon-chevron-right"&gt;&lt;/span&gt;&lt;/a&gt;
								</div>
							</div>
						</div>
					</div>
					<div class="body_content"> 
						<div class="row"> 
							<div class="col-md-6"> 
								<textarea name="page4eight"> </textarea>
								<span class="btn btn-primary" id="code3">+কোড</span>
								<div id="showcode3"> 
									&lt;div class="left-column"&gt; <br>
									&nbsp;&nbsp;&nbsp;&lt;div class="bn-title"&gt;&lt;h1&gt;শিরোনাম&lt;/h1&gt;&lt;/div&gt; <br>
									&nbsp;&nbsp;&nbsp;&lt;div class="bn-article"&gt; <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt; <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;strong&gt;লেখকের নামঃ&lt;/strong&gt; <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt; <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt; <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt; <br>
									&nbsp;&nbsp;&nbsp;&lt;/div&gt; <br>
									&lt;/div&gt; 
								</div>
							</div>
							<div class="col-md-6"> 
								<textarea name="page4nine"></textarea>
								<span class="btn btn-primary" id="code4">+কোড</span>
								<div id="showcode4"> 
									&lt;div class="right-column"&gt; <br>
									&nbsp;&nbsp;&nbsp;&lt;div class="bn-title"&gt;&lt;h1&gt;শিরোনাম&lt;/h1&gt;&lt;/div&gt; <br>
									&nbsp;&nbsp;&nbsp;&lt;div class="bn-article"&gt; <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt; <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;strong&gt;লেখকের নামঃ&lt;/strong&gt; <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt; <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt; <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt; <br>
									&nbsp;&nbsp;&nbsp;&lt;/div&gt; <br>
									&lt;/div&gt; 
								</div>
							</div>
						</div>
					</div>
					<div class="footer"> 
						<input type="text" name="page4ten" value="বোধিধারা নিয়মিত প্রকাশনার চলমান ১২ বছর"/>
						<input type="text" name="page4eleven" value="9"/>
						<span class="btn btn-primary" id="pic">+ছবি</span>
						<div id="showpic"> 
							<div class="file_drag_area"> 
								Drop Files Here
							</div>
							<div id="uploaded_file"></div>
						</div>
						<input class="btn btn-info" type="submit" name="page4" value="Submit"/>
					</div>
				</form>
				<script>
				$(document).ready(function(){
				  $(".file_drag_area").on("dragover", function(){
					  $(this).addClass("file_drag_over");
					  return false;
				  });
				  $(".file_drag_area").on("dragleave", function(){
					  $(this).removeClass("file_drag_over");
					  return false;
				  });
				  $(".file_drag_area").on("drop", function(e){
					  e.preventDefault();
					  $(this).removeClass("file_drag_over");
					  var formData = new FormData();
					  var files_list = e.originalEvent.dataTransfer.files;
					  for(var i = 0; i<files_list.length; i++){
						  formData.append("file[]", files_list[i]);
					  }
					  $.ajax({
						  url: "news_image_upload.php",
						  method: "POST",
						  data: formData,
						  contentType: false,
						  cache: false,
						  processData: false,
						  success: function(data){
							 $("#uploaded_file").html(data); 
						  }
					  });
				  });
				});
				</script>
				';
			}elseif(isset($_GET["post5"]) == "detail_post"){ // E-paper Last Page Post
				if(isset($_GET["post5"]) == "detail_post" AND isset($_GET["type"]) == "successfully"){
					echo'<h2>Submitted Successfully</h2>';
				}
				echo'<h1>E-paper Detail Page Post</h1>';
				echo'
				<form action="e-post-action.php" method="POST"> 
					<input type="text" name="page5one" placeholder="Image Path"/>
					<input type="text" name="page5two" placeholder="Publish Date = প্রকাশিতঃ ২৫ জানুয়ারি ২০১৯"/>
					<input type="text" name="page5three" placeholder="Total page count number = পৃষ্টা সংখ্যাঃ ১৭"/>
					<span class="btn btn-primary" id="pic">+ছবি</span>
					<div id="showpic"> 
						<div class="file_drag_area"> 
							Drop Files Here
						</div>
						<div id="uploaded_file"></div>
					</div>
					<input class="btn btn-info" type="submit" name="page5" value="Submit"/>
				</form>
				
				
	
				<script>
				$(document).ready(function(){
				  $(".file_drag_area").on("dragover", function(){
					  $(this).addClass("file_drag_over");
					  return false;
				  });
				  $(".file_drag_area").on("dragleave", function(){
					  $(this).removeClass("file_drag_over");
					  return false;
				  });
				  $(".file_drag_area").on("drop", function(e){
					  e.preventDefault();
					  $(this).removeClass("file_drag_over");
					  var formData = new FormData();
					  var files_list = e.originalEvent.dataTransfer.files;
					  for(var i = 0; i<files_list.length; i++){
						  formData.append("file[]", files_list[i]);
					  }
					  $.ajax({
						  url: "news_image_upload.php",
						  method: "POST",
						  data: formData,
						  contentType: false,
						  cache: false,
						  processData: false,
						  success: function(data){
							 $("#uploaded_file").html(data); 
						  }
					  });
				  });
				});
				</script>
				';
			}
			?>
		</div>
	</section>
</body>
</html>