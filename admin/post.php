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
	<title>Admin Panel | Posts </title>
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
		#pic{
			padding: 10px;
			margin: 10px;
		}
		#tips{
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
				<li><i><img src="../img/post.png" alt="TFB Post" width="30"/></i> Bodhidhara Page Post
					<ul>
						<li <?php if(isset($_GET["post1"]) == "bodhi_post"){echo'style="background-color: gray"';}?>><a href="post.php?post1=bodhi_post">Bodhi Category Post</a></li>
						<li <?php if(isset($_GET["post2"]) == "voting_post"){echo'style="background-color: gray"';}?>><a href="post.php?post2=voting_post">Bodhi Voting Post</a></li>
						<li <?php if(isset($_GET["post3"]) == "ads_post"){echo'style="background-color: gray"';}?>><a href="post.php?post3=ads_post">Bodhi Ads Post</a></li>
						<li <?php if(isset($_GET["post4"]) == "video_post"){echo'style="background-color: gray"';}?>><a href="post.php?post4=video_post">Bodhi Video Upload</a></li>
						<li <?php if(isset($_GET["post5"]) == "photo_post"){echo'style="background-color: gray"';}?>><a href="post.php?post5=photo_post">Bodhi Photo Upload</a></li>
					</ul>
				</li>	
			</ul>
		</div>
	</nav>
	<section class="section"> 
		<div class="rules"> 
			<?php
			if(isset($_GET["post1"]) == "bodhi_post"){//Bodhidhara News Form
				if(isset($_GET["post1"]) == "bodhi_post" AND isset($_GET["type"]) == "successfully"){
					echo'<h2>Submitted Successfully</h2>';
				}
				echo'<h1>Bodhidhara News Post</h1>';
				echo'
				<form action="post-action.php" method="POST" enctype="multipart/form-data">
					<input type="text" name="title" placeholder="Enter Title Here" required/>
					<input type="text" name="author" placeholder="Author Name" required/>
					<input type="text" name="tag" placeholder="Tags" required/>
					<select name="category" id="category">
						<option selected>Select Main Category</option>
						<option value="buddhistnews">বৌদ্ধবার্তা</option>
						<option value="buddhistmind">বৌদ্ধমনন</option>
						<option value="literature">সাহিত্য</option>
						<option value="economy">অর্থনীতি</option>
						<option value="education"> শিক্ষা</option>
						<option value="opinion">মতামত</option>
						<option value="lifestyle">জীবনযাপন</option>
						<option value="tripitak"> ত্রিপিটক</option>
						<option value="culture">সংস্কৃতি</option>
						<option value="foundation">TFB</option>
						<option value="rangamati">রাঙ্গামাটি</option>
						<option value="kagrachari">খাগড়াছড়ি</option>
						<option value="bandarban">বান্দরবান</option>
						<option value="bangladesh">সারাবাংলা</option>
						<option value="international">আন্তর্জাতিক</option>
						<option value="career">ক্যারিয়ার</option>
						<option value="sports">খেলাধুলা</option>
						<option value="entertainment">বিনোদন</option>
						<option value="technology">প্রযুক্তি</option>
					</select>
					<select name="subcategory" id="subcategory">
					<option selected>Select sub category</option>
					 <optgroup label="buddhistnews">
						<option value="buddhistnews1">পূণ্যলাভ</option>
						<option value="buddhistnews2">বিহার পরিচিতি</option>
						<option value="buddhistnews3">ধর্মীয় অনুষ্ঠান</option>
						<option value="buddhistnews4">বৌদ্ধ ব্যক্তিত্ব</option>
						<option value="buddhistnews5">স্বধর্ম উন্নয়ন</option>
						<option value="buddhistnews6">ধর্ম প্রচার</option>
						<option value="buddhistnews7">প্রতিরূপ দেশ</option>
						<option value="buddhistnews8">কঠিন চীবর দান</option>
						<option value="buddhistnews9">বিবিধ</option>
					  </optgroup>
					  <optgroup label="buddhistmind">
						<option value="buddhistmind1">অহিংসা</option>
						<option value="buddhistmind2">নীতি</option>
						<option value="buddhistmind3">ত্যাগ</option>
						<option value="buddhistmind4">নির্বাণ</option>
						<option value="buddhistmind5">ধ্যান</option>
						<option value="buddhistmind6">দান</option>
						<option value="buddhistmind7">শীল</option>
						<option value="buddhistmind8">দর্শন</option>
						<option value="buddhistmind9">বিবিধ</option>
						<option value="buddhistmind10">পূণ্য</option>
					  </optgroup>
					  <optgroup label="literature">
						<option value="literature1">গল্প</option>
						<option value="literature2">উপন্যাস</option>
						<option value="literature3">নাটক</option>
						<option value="literature4">প্রবন্ধ</option>
						<option value="literature6">ছড়া</option>
						<option value="literature7">কবিতা</option>
						<option value="literature8">ছোটগল্প</option>
						<option value="literature9">শিক্ষণীয় গল্প </option>
						<option value="literature10">বিবিধ</option>
					  </optgroup>
					  <optgroup label="economy">
						<option value="economy1">কৃষি-জুম চাষ</option>
						<option value="economy2">ব্যবসা-বাণিজ্য </option>
						<option value="economy3">শিল্প-কারখানা</option>
						<option value="economy4">শেয়ারবাজার</option>
						<option value="economy5">বাজারধর</option>
						<option value="economy6">উদ্যোক্তা</option>
						<option value="economy7">পরামর্শ</option>
						<option value="economy8">বিবিধ</option>
					  </optgroup>
					  <optgroup label="education">
						<option value="education1">পড়ালেখা</option>
						<option value="education2">গাইডলাইন</option>
						<option value="education3">উপদেশ</option>
						<option value="education4">ইংরেজি</option>
						<option value="education5">বিবিধ</option>
					  </optgroup>
					  <optgroup label="opinion">
						<option value="opinion1">রাজ্যসরকার</option>
						<option value="opinion2">নীতিমালা</option>
						<option value="opinion3">আইন</option>
						<option value="opinion4">হয়নি</option>
						<option value="opinion5">ক্ষতি</option>
						<option value="opinion6">দুর্নীতি</option>
					  </optgroup>
					  <optgroup label="lifestyle">
						<option value="lifestyle1">খাদ্য-দ্রব্য</option>
						<option value="lifestyle2">শরীর যত্ন</option>
						<option value="lifestyle3">মানসিক যত্ন</option>
						<option value="lifestyle4">সম্পর্ক</option>
						<option value="lifestyle5">পেশা</option>
						<option value="lifestyle6">করণীয়</option>
					  </optgroup>
					  <optgroup label="tripitak">
						<option value="tripitak1">বিনয় পিটক</option>
						<option value="tripitak2">সূত্র পিটক</option>
						<option value="tripitak3">অভিধর্ম পিটক</option>
						<option value="tripitak4">বনভন্তের দেশনা</option>
						<option value="tripitak5">অন্যান্য</option>
					  </optgroup>
					  <optgroup label="culture">
						<option value="culture1">চাকমা</option>
						<option value="culture2">মারমা</option>
						<option value="culture3">ত্রিপুরা</option>
						<option value="culture4">আদিবাসী</option>
						<option value="culture5">উতসব</option>
						<option value="culture6">পুরনো দিন</option>
						<option value="culture7">পজ্জম</option>
						<option value="culture8">বানা</option>
						<option value="culture9">ভাষা</option>
						<option value="culture10">শিল্প</option>
					  </optgroup>
					  <optgroup label="foundation">
						<option value="foundation1">পরিচয়</option>
						<option value="foundation2">লক্ষ্য</option>
						<option value="foundation3">ইভেন্ট</option>
						<option value="foundation4">সম্মাননা</option>
					  </optgroup>
					  <optgroup label="rangamati">
						<option value="rangamati1">রাঙ্গামাটি সদর</option>
						<option value="rangamati2">কাপ্তাই</option>
						<option value="rangamati3">কাউখালী</option>
						<option value="rangamati4">বরকল</option>
						<option value="rangamati5">নানিয়াচর</option>
						<option value="rangamati6">রাজস্থলী</option>
						<option value="rangamati7">বিলাইছড়ি</option>
						<option value="rangamati8">বাঘাইছড়ি</option>
						<option value="rangamati9">জুরাছড়ি</option>
						<option value="rangamati10">লংগদু</option>
					  </optgroup>
					  <optgroup label="kagrachari">
						<option value="kagrachari1">খাগড়াছড়ি সদর</option>
						<option value="kagrachari2">পানছড়ি</option>
						<option value="kagrachari3">দীঘিনালা</option>
						<option value="kagrachari4">মহালছড়ি</option>
						<option value="kagrachari5">লক্ষ্ণীছড়ি</option>
						<option value="kagrachari6">মাটিরাঙ্গা</option>
						<option value="kagrachari7">রামঘর</option>
						<option value="kagrachari8">মানিকছড়ি</option>
					  </optgroup>
					  <optgroup label="bandarban">
						<option value="bandarban1">বান্দরবান সদর</option>
						<option value="bandarban2">লামা</option>
						<option value="bandarban3">আলীকদম</option>
						<option value="bandarban4">নাইক্ষ্যংছড়ি</option>
						<option value="bandarban5">রোয়াংছড়ি</option>
						<option value="bandarban6">রুমা</option>
						<option value="bandarban7">থানচি</option>
					  </optgroup>
					  <optgroup label="bangladesh">
						<option value="bangladesh1">অপরাধ</option>
						<option value="bangladesh2">সরকার</option>
						<option value="bangladesh3">সংসদ</option>
						<option value="bangladesh4">উন্নয়ন</option>
						<option value="bangladesh5">আইন লঙ্ঘন</option>
						<option value="bangladesh6">দুর্নীতি</option>
						<option value="bangladesh7">সুখবর</option>
						<option value="bangladesh8">ভ্রমণ</option>
					  </optgroup>
					  <optgroup label="international">
						<option value="international1">থাইল্যান্ড</option>
						<option value="international2">গণচীন</option>
						<option value="international3">আমেরিকা</option>
						<option value="international4">ভারত</option>
						<option value="international5">মায়ানমার</option>
						<option value="international6">শ্রীলংকা</option>
						<option value="international7">কম্বোডিয়া</option>
						<option value="international8">তিব্বত</option>
						<option value="international9">জাপান</option>
					  </optgroup>
					  <optgroup label="career">
						<option value="career1">বাস্তব-গল্প</option>
						<option value="career2">নানান-ক্যারিয়ার </option>
						<option value="career3">পরামর্শ</option>
						<option value="career4">মোটিভেশন</option>
					  </optgroup>
					  <optgroup label="sports">
						<option value="sports1">ফুটবল</option>
						<option value="sports2">ক্রিকেট</option>
						<option value="sports3">অন্যান্য</option>
					  </optgroup>
					  <optgroup label="entertainment">
						<option value="entertainment1">চাকমা টেলিফিল্ম</option>
						<option value="entertainment2">হলিউড</option>
						<option value="entertainment3">বলিউড</option>
					  </optgroup>
					  <optgroup label="technology">
						<option value="technology1">মোবাইল</option>
						<option value="technology2">প্রোগ্রামিং</option>
						<option value="technology3">ফ্রিল্যাস্নিং</option>
						<option value="technology4">কম্পিউটার</option>
						<option value="technology5">বিবিধ</option>
					  </optgroup>
					</select>
					<input type="text" name="img" placeholder="Insert A Image Path"/>
					<textarea id="txt" name="txt" placeholder="News Descriptions" required></textarea>
					<span class="btn btn-primary" id="pic">+ছবি</span>
					<span class="btn btn-primary" id="tips">+টিপস</span>
					<div id="showpic"> 
						<div class="file_drag_area"> 
							Drop Files Here
						</div>
						<div id="uploaded_file"></div>
					</div>
					<div id="showtips"> 
					  <ul>
					  	<li><b>প্যারাগ্রাফঃ</b> &lt;p&gt;আমি প্যারাগ্রাফ টেক্সট&lt;/p&gt;। এই ট্যাগটি অবশ্যই ব্যবহার করতে হবে।</li>
					  	<li><b>টেক্সট ইটালিকঃ</b> &lt;em&gt;আমি ইটালিক টেক্সট&lt;/em&gt;। আউটপুটঃ <em>আমি ইটালিক টেক্সট।</em></li>
						<li><b>বোল্ড টেক্সটঃ</b> &lt;strong&gt;আমি বোল্ড টেক্সট &lt/strong&gt;। আউটপুটঃ <strong>আমি বোল্ড টেক্সট।</strong></li>
					  </ul>
					</div>
					<textarea name="excerpt" placeholder="News Excerpt. At least 250 characters." required></textarea>
					<input type="submit" value="Submit" name="bodhi-post"/>
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
			}elseif(isset($_GET["post2"]) == "voting_post"){
				if(isset($_GET["post2"]) == "voting_post" AND isset($_GET["type"]) == "successfully"){
					echo'<h2>Submitted Successfully</h2>';
				}
				echo'<h1>Bodhidhara Voting Post</h1>';
				echo'
				<form action="post-action.php" method="POST"> 
					<textarea name="txt" placeholder="Descriptions" required></textarea>
					<input type="submit" name="voting-submit" value="Submit"/>
				</form>
				';
			}elseif(isset($_GET["post3"]) == "ads_post"){// Bodhidhara Ads Form
				if(isset($_GET["post3"]) == "ads_post" AND isset($_GET["type"]) == "successfully"){
					echo'<h2>Submitted Successfully</h2>';
				}
				echo'<h1>Bodhidhara Ads Publish</h1>';
				echo'
				<form action="post-action.php" method="POST" enctype="multipart/form-data"> 
					<input type="text" name="name" placeholder="বিজ্ঞাপন দাতার নাম"/>
					<input type="text" name="address" placeholder="ঠিকানা"/>
					<input type="text" name="passion" placeholder="পেশা"/>
					<input type="text" name="title" placeholder="টাইটেল লিখুন"/>
					<textarea name="txt" placeholder="বর্ণনা দিন"></textarea>
					<select name="category"> 
						<option selected>Select Category</option>
						<option value="category1">নিয়োগ</option>
						<option value="category2">গৃহ শিক্ষক</option>
						<option value="category3">বই</option>
						<option value="category4">বিক্রয়</option>
						<option value="category5">ক্রয়</option>
						<option value="category6">প্রশিক্ষণ</option>
						<option value="category7">কোচিং</option>
						<option value="category8">প্রাইভেট</option>
						<option value="category9">সেবা</option>
						<option value="category10">বিবিধ</option>
					</select>
					<span class="btn btn-primary" id="pic">+ছবি</span>
					<div id="showpic"> 
					  <input type="file" name="pic1"/>
					  <input type="file" name="pic2"/>
					  <input type="file" name="pic3"/>
					</div>
					<input class="btn btn-info" type="submit" name="ads-submit" value="Submit"/>
				</form>
				';
			}elseif(isset($_GET["post4"]) == "video_post"){
				if(isset($_GET["post4"]) == "video_post" AND isset($_GET["type"]) == "successfully"){
					echo'<h2>Submitted Successfully</h2>';
				}
				echo'<h1>Bodhidhara Video Upload</h1>';
				echo'
				<form action="post-action.php" method="POST" enctype="multipart/form-data"> 
					<input type="text" name="title" placeholder="Enter Title Here" />
					<input type="text" name="author" placeholder="Author" />
					<input type="text" name="tags" placeholder="Tags" />
					<select name="category">
					<option selected>Select category</option>
					<option value="category1">দেশনা</option>
					<option value="category2">বনভন্তের দেশনা</option>
					<option value="category3">ধর্মীয় গান</option>
					<option value="category4">TFB</option>
					<option value="category5">কঠিন চীবর দান</option>
					<option value="category6">অনুষ্ঠানের ভিডিও</option>
					<option value="category7">আদিবাসী নৃত্য</option>
					<option value="category8">বসবাস</option>
					<option value="category9">প্রতিরূপ দেশ</option>
					<option value="category10">বিবিধ</option>
					</select>
					<textarea id="txt" name="txt" placeholder="Descriptions" required></textarea>
					<input type="text" name="link" placeholder="Please paste your youtube video link.."/>
					<input type="file" name="img" />
					<input type="submit" name="video-submit" value="Submit"/>
				</form>
				';
			}elseif(isset($_GET["post5"]) == "photo_post"){
				if(isset($_GET["post5"]) == "photo_post" AND isset($_GET["type"]) == "successfully"){
					echo'<h2>Submitted Successfully</h2>';
				}
				echo'<h1>Bodhidhara Photo Upload</h1>';
				echo'
				<form action="post-action.php" method="POST" enctype="multipart/form-data"> 
					<input class="input" type="text" name="title" placeholder="Enter Title Here" required/>
					<input class="input" type="text" name="author" placeholder="Author" required/>
					<input class="input" type="text" name="tags" placeholder="Tags" required/>
					<select name="category"> 
						<option selected>Please Select Category</option>
						<option value="album1">এক ফলক</option>
						<option value="album2">বুদ্ধ শাসন</option>
						<option value="album3">প্রতিরূপ দেশ</option>
						<option value="album4">দরিদ্র</option>
						<option value="album5">TFB</option>
						<option value="album6">জুম্ম ফ্যাশন</option>
						<option value="album7">বিনোদন</option>
						<option value="album8">জীবনযাপন</option>
						<option value="album9">ভ্রমণ</option>
						<option value="album10">উন্নয়নের চিত্র</option>
					</select>
					<textarea id="txt" name="txt" placeholder="Descriptions" required></textarea>
					<input class="input" type="text" name="excerpt" placeholder="Excerpt" required/>
					<span class="btn btn-primary" id="tips">+টিপস</span>
					<span class="btn btn-primary" id="pic">+ছবি</span>
					<div id="showtips"> 
					  <ul>
					  	<li><b>টেক্সট ইটালিকঃ</b> &lt;em&gt;আমি ইটালিক টেক্সট&lt;/em&gt;। আউটপুটঃ <em>আমি ইটালিক টেক্সট</em></li>
						<li><b>বোল্ড টেক্সটঃ</b> &lt;strong&gt;আমি বোল্ড টেক্সট &lt/strong&gt;। আউটপুটঃ <strong>আমি বোল্ড টেক্সট</strong></li>
					  </ul>
					</div>
					<div id="showpic"> 
						<div class="file_drag_area"> 
							Drop Files Here
						</div>
						<div id="uploaded_file"></div>
					</div>
					<input class="input img" type="text" name="img" placeholder="Insert Image Path" required/>
					<input class="input" type="submit" name="photo-submit" value="Submit"/>
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
						  url: "upload.php",
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