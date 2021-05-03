<?php
include_once("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["page1"])){// Page one
	$page1one = str_replace("'","\'",$_POST["page1one"]);
	$page1two = str_replace("'","\'",$_POST["page1two"]);
	$page1three = str_replace("'","\'",$_POST["page1three"]);
	$page1four = str_replace("'","\'",$_POST["page1four"]);
	$page1five = str_replace("'","\'",$_POST["page1five"]);
	$page1six = str_replace("'","\'",$_POST["page1six"]);
	$page1seven = str_replace("'","\'",$_POST["page1seven"]);
	$page1 ='
	<div class="container">
		<section class="section article-body"> 
			<div class="page1"> 
				<div class="page1-col-one">
					<div class="pco1-heading"><em>FOR BUDDHIST LITERATURE,RELIGION AND SOCIO-CULTURAL RESEARCH</em></div>
					<div class="row"> 
						<div class="col-md-3"> 
							<div class="pco1-num"> 
								<ul>
									'.$page1one.'
								</ul>
							</div>
						</div>
						<div class="col-md-9"> 
							<div class="pco1-intro"> 
								<img src="/epaper/m.png" alt="" width="100%" height="200"/>
							</div>
						</div>
					</div>
				</div>
				<div class="next-prev"> 
					<div class="next">'.$page1two.'</div>
				</div>
				<div class="page1-col-two">
					<h1>'.$page1three.'</h1>
				</div>
				<div class="page1-col-three">
					<img src="/bimg/'.$page1tfour.'" alt="বোধিধারা" width="100%" height="600px"/>
				</div>
				<div class="page1-col-four">
					<div class="row"> 
						<div class="col-md-6"> 
							<div class="index"> 
								<span class="index-title">এই সংখ্যায় থাকছে- </span>
								<ul>
									'.$page1five.'
								</ul>
							</div>
						</div>
						<div class="col-md-6"> 
							<div class="page1-desc"> 
								'.$page1six.'
							</div>
						</div>
					</div>
				</div>
				<div class="next-prev"> 
					<div class="next">'.$page1two.'</div>
				</div>
			</div>
		</section>	
		<footer> 
			<div class="color1"></div>
			<div class="color2">
				<h2><em>'.$page1seven.'</em></h2>
			</div>
		</footer>
	</div>
	';
	$sql = "INSERT INTO bodhi_paper(page1) VALUES('$page1')";
	if(mysqli_query($conn, $sql)) {
		header("location: e-post.php?post1=first_post&type=successfully");
	}else{
		echo"Not".mysqli_error($conn);
	}
}elseif($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["page2"])){
	$page2one = str_replace("'","\'",$_POST["page2one"]);
	$page2two = str_replace("'","\'",$_POST["page2two"]);
	$page2three = str_replace("'","\'",$_POST["page2three"]);
	$page2four = str_replace("'","\'",$_POST["page2four"]);
	$page2five = str_replace("'","\'",$_POST["page2five"]);
	$page2six = str_replace("'","\'",$_POST["page2six"]);
	$page2seven = str_replace("'","\'",$_POST["page2seven"]);
	$page2eight = str_replace("'","\'",$_POST["page2eight"]);
	$page2nine = str_replace("'","\'",$_POST["page2nine"]);
	$page2ten = str_replace("'","\'",$_POST["page2ten"]);
	$page2eleven = str_replace("'","\'",$_POST["page2eleven"]);
	$page2twelve = str_replace("'","\'",$_POST["page2twelve"]);
	$page2thirteen = str_replace("'","\'",$_POST["page2thirteen"]);
	$page2fourteen = str_replace("'","\'",$_POST["page2fourteen"]);
	$page2fifteen = str_replace("'","\'",$_POST["page2fifteen"]);
	$page2sixteen = str_replace("'","\'",$_POST["page2sixteen"]);
	$page2seventeen = str_replace("'","\'",$_POST["page2seventeen"]);
	
	$page2 = '
	<div class="container">
		<section class="section article-body"> 
			<div class="header-bar"> 
				<div class="h-b-o"></div>
				<div class="hbo-talk"> 
					<div class="row"> 
						<div class="col-md-3 col-4"> 
							<div class="hbo-left-talk">
								'.$page2one.'
							</div>
						</div>
						<div class="col-md-3 col-4"> 
							<div class="page-title">'.$page2two.'</div>
						</div>
						<div class="col-md-3 col-4 page"> 
							<div class="page-num">'.$page2three.'<span class="secondary-menu-toggle sub-menu-toggle"></span>
							</div>
							<div class="page-num-toggle"> 
								<ul>
									'.$page2five.'
								</ul>
							</div>
						</div>
						<script>
							$(".page-num").click(function(){ 
								$(".page-num-toggle").toggle();
								$(".secondary-menu-toggle").toggleClass("opened");
							});
						</script>
						<div class="col-md-3"> 
							<div class="hbo-right-talk">
								<big>'.$page2four.'</big>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="next-prev"> 
				<div class="prev">'.$page2six.'</div>
				<div class="next">'.$page2seven.'</div>
			</div>
			<div class="page2"> 
				<div class="guru-advice"> 
					<div class="row"> <!-- Buddha And Banavante Advice ROw -->
						<div class="col-md-6"> 
							<div class="advice"> 
								<div class="guru-icon"><img src="/bimg/'.$page2eight.'" /></div>
								<div class="guru-talk">
									'.$page2nine.'
								</div>
							</div>
						</div>
						<div class="col-md-6"> 
							<div class="advice"> 
								<div class="guru-icon"><img src="/bimg/'.$page2ten.'"/></div>
								<div class="guru-talk">
									'.$page2eleven.'
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="member-comment"> <!-- General Member Comment-->
					<div class="comment"> 
						<div class="row"> 
							<div class="col-md-4 col-12"> 
								<div class="general-icon">
									<img src="/bimg/'.$page2twelve.'" width="100%" height="300"/>
								</div>
							</div>
							<div class="col-md-8 col-12">
								'.$page2thirteen.'
							</div>	
						</div>
					</div>
					<div class="comment"> 
						<div class="row"> 
							<div class="col-md-4 col-12"> 
								<div class="general-icon">
									<img src="/bimg/'.$page2fourteen.'" width="100%" height="300"/>
								</div>
							</div>
							<div class="col-md-8 col-12">
								'.$page2fifteen.'
							</div>
						</div>
					</div>
					<div class="comment"> 
						<div class="row"> 
							<div class="col-md-4 col-12"> 
								<div class="general-icon">
									<img src="/bimg/'.$page2sixteen.'" width="100%" height="300"/>
								</div>
							</div>
							<div class="col-md-8 col-12">
								'.$page2seventeen.'
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
		<div class="next-prev"> 
			<div class="prev">'.$page2six.'</div>
			<div class="next">'.$page2seven.'</div>
		</div>
		<footer> 
			<div class="color1"></div>
			<div class="color2">
				<h2><em>বোধিধারা '.$page2four.'</em></h2>
			</div>
		</footer>
	</div>
	';
	$sql = "SELECT * FROM bodhi_paper";
	$query = mysqli_query($conn, $sql);
	$rows = mysqli_num_rows($query);
	$sql = "UPDATE bodhi_paper SET page2='$page2' WHERE id=$rows";
	if(mysqli_query($conn, $sql)) {
		header("location: e-post.php?post2=second_post&type=successfully");
	}else{
		echo"Not".mysqli_error($conn);
	}
}elseif($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["page3"])){
	$page3one = str_replace("'","\'",$_POST["page3one"]);
	$page3two = str_replace("'","\'",$_POST["page3two"]);
	$page3three = str_replace("'","\'",$_POST["page3three"]);
	$page3four = str_replace("'","\'",$_POST["page3four"]);
	$page3five = str_replace("'","\'",$_POST["page3five"]);
	$page3six = str_replace("'","\'",$_POST["page3six"]);
	$page3seven = str_replace("'","\'",$_POST["page3seven"]);
	$page3eight = str_replace("'","\'",$_POST["page3eight"]);
	$page3nine = str_replace("'","\'",$_POST["page3nine"]);
	$page3ten = str_replace("'","\'",$_POST["page3ten"]);
	$page3eleven = str_replace("'","\'",$_POST["page3eleven"]);
	
	$page3 = '
	<div class="container">
		<section class="section article-body"> 
			<div class="header-bar"> 
				<div class="h-b-o"></div>
				<div class="hbo-talk"> 
					<div class="row"> 
						<div class="col-md-3 col-4"> 
							<div class="hbo-left-talk">
								'.$page3one.'
							</div>
						</div>
						<div class="col-md-3 col-4"> 
							<div class="page-title">'.$page3two.'</div>
						</div>
						<div class="col-md-3 col-4 page"> 
							<div class="page-num">'.$page3three.'<span class="secondary-menu-toggle sub-menu-toggle"></span>
							</div>
							<div class="page-num-toggle"> 
								<ul>
									'.$page3five.'
								</ul>
							</div>
						</div>
						<script>
							$(".page-num").click(function(){ 
								$(".page-num-toggle").toggle();
								$(".secondary-menu-toggle").toggleClass("opened");
							});
						</script>
						<div class="col-md-3"> 
							<div class="hbo-right-talk">
								<big>'.$page3four.'</big>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="next-prev"> 
				<div class="prev">'.$page3six.'</div>
				<div class="next">'.$page3seven.'</div>
			</div>
			<div class="page3"> 
				<div class="row"> 
					<div class="col-md-4"> <!--About Paper-->
						<div class="about"> 
							<div class="papericon"> <img src="/bimg/'.$page3eight.'"/></div>
							<div class="about-paper"> 
								<p>
									বোধিধারা একটি ত্রৈমাসিক বৌদ্ধ সাময়িকী।
									২০০৭ সাল থেকে এর নিয়মিত প্রকাশনা অব্যাহত রয়েছে। বৌদ্ধ লেখক, শিল্পী,
									চিন্তাবিদ, গবেষকদের সাক্ষাতকার, বৌদ্ধ বিশ্বের সমাচার। বিহার ও বৌদ্ধ তীর্থ ঐতিহাসিক
									স্থান সম্পর্কিত প্রতিবেদন ও ভ্রমণ লিপি সর্বোপরি বৌদ্ধ সাহিত্য, সংস্কৃতি, ধর্ম ও সমাজ বিষয়ক
									মূল্যবান লেখা হলো এই পত্রিকার মূল চালিকা শক্তি। পরম পূজ্য আর্যশ্রাবক বনভন্তের দেশিত আদর্শ বৌদ্ধ
									পল্লীর অনুধ্যানকে আরো বেগবান করতে শিল্প সাহিত্য সংগীতের ব্যঞ্জনায় বৌদ্ধ ভাবনার 
									উন্মেস সাধনাই বোধিধারার অনন্য প্রত্যয়।
								</p>
							</div>
							<div class="member"> 
								<div class="ceo line"> 
									<strong>প্রতিষ্ঠাতা</strong><br>
									<strong>ভদন্ত শ্রীমৎ জিনবোধি মহাথেরো</strong>
								</div>
								<div class="advocate line"> 
									<strong>প্রধান পৃষ্টপোষকঃ</strong><br>
									<strong>চাকমা রাজা ব্যরিষ্টার দেবাশীষ রায়</strong>
								</div>
								<div class="advicer line"> 
									<strong>প্রধান উপদেষ্টাঃ</strong><br>
									<strong>ভদন্ত শ্রীমৎ বুদ্ধদত্ত মহাথের</strong><br>
									<strong>যুগ্ম সম্পাদকঃ</strong><br>
									<strong>মোনঘর শিশু সদন, রাঙ্গামাটি</strong>
								</div>
								<div class="advicer-help line"> 
									<strong>উপদেষ্টাঃ</strong><br>
									<strong>বাবু কৃষ্ণ চন্দ্র চাকমা</strong><br>
									<strong>প্রধান নির্বাহীঃ</strong><br>
									<strong>উপজাতীয় শরণার্থী বিষয়ক টাস্ক ফোর্স, খাগড়াছড়ি</strong>
								</div>
								<div class="publicher-chief line"> 
									<strong>সম্পাদক মণ্ডলীর সভাপতিঃ</strong><br>
									<strong>মিঃ প্রকৃতি রঞ্জন চাকমা (অবঃ উপসচিব)</strong>
								</div>
								<div class="publicher-help line"> 
									<strong>সহযোগী সম্পাদকঃ</strong><br>
									<strong>ইন্টূমনি তালুকদার</strong><br>
									<strong>প্রতিবেদকঃ</strong><br>
									<strong>সুপ্রিয় চাকমা (শুভ)</strong>
								</div>
								<div class="publicher line"> 
									<strong>সম্পাদকঃ</strong><br>
									<strong>সঞ্জয় চাকমা (বাবু)</strong>
								</div>
							</div>
							<div class="circular"> 
								<p> 
									বোধিধারায় পবিত্র ত্রিপিটক গ্রন্থ থেকে চয়নপূর্বক 
									বুদ্ধবাণী বুদ্ধ ছবি ও পবিত্র স্থানাদির ছবি ছাপা হয়। কাজেই 
									এটি একটি ধর্মীয় পত্রিকা হিসেবে স্বযত্নে সংরক্ষণ করার জন্য 
									পাঠক পাঠিকাদের প্রতি অনুরোধ রইল।
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-8"> <!--About Member-->
						<div class="publicher-comment"> 
							<div class="pc-title"> 
								<div class="row"> 
									<div class="col-md-8"><h1>'.$page3nine.'</h1></div>
									<div class="col-md-4"><span class="nbo"><img src="/bimg/'.$page3ten.'" alt="" width="100%" height="200px"/></span></div>
								</div>
							</div>
							<div class="pc-article"> 
								'.$page3eleven.'
							</div>
							<div class="pc-info"> 
								<p><strong>সঞ্জয় চাকমা (বাবু)</strong></p>
								<p><strong>সম্পাদক, বোধিধারা।</strong></p>
								<p><strong>মোবাইলঃ ০১৮১৩২২৯৫৯৭</strong></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
		<div class="next-prev"> 
			<div class="prev">'.$page3six.'</div>
			<div class="next">'.$page3seven.'</div>
		</div>
		<footer> 
			<div class="color1"></div>
			<div class="color2">
				<h2><em>বোধিধারা '.$page3four.'</em></h2>
			</div>
		</footer>
	</div>
	';
	$sql = "SELECT * FROM bodhi_paper";
	$query = mysqli_query($conn, $sql);
	$rows = mysqli_num_rows($query);
	$sql = "UPDATE bodhi_paper SET page3='$page3' WHERE id=$rows";
	if(mysqli_query($conn, $sql)) {
		header("location: e-post.php?post3=third_post&type=successfully");
	}else{
		echo"Not".mysqli_error($conn);
	}
}elseif($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["page4"])){
	$page4one = str_replace("'","\'",$_POST["page4one"]);
	$page4two = str_replace("'","\'",$_POST["page4two"]);
	$page4three = str_replace("'","\'",$_POST["page4three"]);
	$page4four = str_replace("'","\'",$_POST["page4four"]);
	$page4five = str_replace("'","\'",$_POST["page4five"]);
	$page4six = str_replace("'","\'",$_POST["page4six"]);
	$page4seven = str_replace("'","\'",$_POST["page4seven"]);
	$page4eight = str_replace("'","\'",$_POST["page4eight"]);
	$page4nine = str_replace("'","\'",$_POST["page4nine"]);
	$page4ten = str_replace("'","\'",$_POST["page4ten"]);
	$page4eleven = str_replace("'","\'",$_POST["page4eleven"]);
	$page = "page".$page4eleven;
	$page4 = '
	<div class="container">
		<section class="section article-body"> 
			<div class="header-bar"> 
				<div class="h-b-o"></div>
				<div class="hbo-talk"> 
					<div class="row"> 
						<div class="col-md-3 col-4"> 
							<div class="hbo-left-talk">
								'.$page4one.'
							</div>
						</div>
						<div class="col-md-3 col-4"> 
							<div class="page-title">'.$page4two.'</div>
						</div>
						<div class="col-md-3 col-4 page"> 
							<div class="page-num">'.$page4three.'<span class="secondary-menu-toggle sub-menu-toggle"></span>
							</div>
							<div class="page-num-toggle"> 
								<ul>
									'.$page4five.'
								</ul>
							</div>
						</div>
						<script>
							$(".page-num").click(function(){ 
								$(".page-num-toggle").toggle();
								$(".secondary-menu-toggle").toggleClass("opened");
							});
						</script>
						<div class="col-md-3"> 
							<div class="hbo-right-talk">
								<big>'.$page4four.'</big>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="next-prev"> 
				<div class="prev">'.$page4six.'</div>
				<div class="next">'.$page4seven.'</div>
			</div>
			<div class="page4"> 
				<div class="row"> 
					<div class="col-md-6 col-12"> 
						'.$page4eight.'
					</div>
					<div class="col-md-6 col-12"> 
						'.$page4nine.'
					</div>
				</div>
			</div>
		</section>	
		<div class="next-prev"> 
			<div class="prev">'.$page4six.'</div>
			<div class="next">'.$page4seven.'</div>
		</div>
		<footer> 
			<div class="color1"></div>
			<div class="color2">
				<h2><em>'.$page4ten.'</em></h2>
			</div>
		</footer>
	</div>
	';
	$sql = "SELECT * FROM bodhi_paper";
	$query = mysqli_query($conn, $sql);
	$rows = mysqli_num_rows($query);
	$sql = "UPDATE bodhi_paper SET $page='$page4' WHERE id=$rows";
	if(mysqli_query($conn, $sql)) {
		header("location: e-post.php?post4=news_post&type=successfully");
	}else{
		echo"Not".mysqli_error($conn);
	}
}elseif($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["page5"])){
	$page5one = str_replace("'","\'",$_POST["page5one"]);
	$page5two = str_replace("'","\'",$_POST["page5two"]);
	$page5three = str_replace("'","\'",$_POST["page5three"]);
	$page5 = '
	<div class="e-p-img"> 
		<img src="/bimg/'.$page5one.'" width="100%" height="300px"/>
	</div>
	<div class="e-p-desc"> 
		<div class="e-p-date"><span>'.$page5two.'</span></div>
		<div class="e-p-page">'.$page5three.'</div>
	</div>
	';
	$sql = "SELECT * FROM bodhi_paper";
	$query = mysqli_query($conn, $sql);
	$rows = mysqli_num_rows($query);
	$sql = "UPDATE bodhi_paper SET detail='$page5' WHERE id=$rows";
	if(mysqli_query($conn, $sql)) {
		header("location: e-post.php?post5=detail_post&type=successfully");
	}else{
		echo"Not".mysqli_error($conn);
	}
}	
?>