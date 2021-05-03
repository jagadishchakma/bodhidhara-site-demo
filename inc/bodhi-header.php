<header class="header"> 
	<nav class="navbar bg-dark navbar-dark">
		<div class="container">
			<a href="https://www.bodhidhara.com" class="navbar-brand">
				<span><img src="/img/logo.png" alt="" width="50" height="55"/>বোধিধারা</span>
			</a>
			
			<div class="menu-wrap"> 
				<div id="nav-icon" class="menu-button visible-xs">
					<div class="menuIcon">
					<span class="burger-icon"></span>
	
					</div>
				</div>
				<div class="menu-content overlay"> 
					<div class="more-main-menu-wrap">
						<div class="more-main-menu-inner"> 
							<div class="top-big-menu big-menu"> 
								<div class="big-menu-top"> 
									<div class="all-menu"> 
										<ul>
											<li><a class="item-1" href="https://www.bodhidhara.com/buddhistnews/"> বৌদ্ধবার্তা</a></li>
											<li><a class="item-2" href="https://www.bodhidhara.com/buddhistmind/"> বৌদ্ধমনন</a></li>
											<li><a class="item-3" href="https://www.bodhidhara.com/literature/"> সাহিত্য</a></li>
											<li><a class="item-4" href="https://www.bodhidhara.com/economy/"> অর্থনীতি</a></li>
											<li><a class="item-5" href="https://www.bodhidhara.com/education/"> শিক্ষা</a></li>
											<li><a class="item-6" href="https://www.bodhidhara.com/opinion/"> মতামত</a></li>
											<li><a class="item-7" href="https://www.bodhidhara.com/lifestyle/"> জীবনযাপন</a></li>
											<li><a class="item-8" href="https://www.bodhidhara.com/tripitak/"> ত্রিপিটক</a></li>
											<li><a class="item-9" href="https://www.bodhidhara.com/culture/"> সংস্কৃতি</a></li>
											<li><a class="item-10" href="https://www.bodhidhara.com/foundation/"> TFB</a></li>
											<li><a class="item-11" href="https://www.bodhidhara.com/rangamati/"> রাঙ্গামাটি</a></li>
											<li><a class="item-12" href="https://www.bodhidhara.com/kagrachari/"> খাগরাছড়ি</a></li>
											<li><a class="item-13" href="https://www.bodhidhara.com/bandarban/"> বান্দরবান</a></li>
											<li><a class="item-14" href="https://www.bodhidhara.com/bangladesh/"> সারাবাংলা</a></li>
											<li><a class="item-15" href="https://www.bodhidhara.com/international/"> আন্তর্জাতিক</a></li>
											<li><a class="item-16" href="https://www.bodhidhara.com/career/"> ক্যারিয়ার</a></li>
											<li><a class="item-17" href="https://www.bodhidhara.com/technology/"> প্রযুক্তি</a></li>
											<li><a class="item-18" href="https://www.bodhidhara.com/entertainment/"> বিনোদন</a></li>
											<li><a class="item-19" href="https://www.bodhidhara.com/sports/"> খেলাধুলা</a></li>
											<li><a class="item-20" href="https://www.bodhidhara.com/buddhistnews/ কঠিন চীবর দান/1/">  কঠিন চীবর</a></li>
										</ul>
									</div>
									<div class="special-menu"> 
										<ul> 
											<li><a class="glyphicon glyphicon-film" href="https://www.bodhidhara.com/video/"> ভিডিও</a></li>
											<li><a class="glyphicon glyphicon-picture" href="https://www.bodhidhara.com/photo/"> ছবি</a></li>
											<li><a class="glyphicon glyphicon-tower" href="https://www.bodhidhara.com/advertisement/"> বিজ্ঞাপন</a></li>
										</ul>
									</div>
								</div>
								<div class="big-menu-bottom"> 
									<div class="bmenu-bottom-left"> 
										<div class="bmenu-bottom-imagelinks"> 
											<ul>
												<li><a href="#"> <span><img src="../img/addgive.png" alt="বিজ্ঞাপন দিন" width="50"/></span> বিজ্ঞাপন দিন</a></li>
												<li><a href="#"> <span><img src="../img/adds.png" alt="বিজ্ঞাপন দেখুন " width="50"/></span> বিজ্ঞাপন দেখুন </a></li>
												<li><a href="#"> <span><img src="../img/write.png" alt="লিখুন" width="50"/></span> লিখুন </a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="navbar-nav">
			
			<div class="nav-item"> 
				<div id="newsfeed"> 
					<div id="unsubnwsfeed" class="<?php if(isset($_COOKIE["bodhidharaSubscribed"])){ echo "unsubscribed"; }else{ echo "subscribed ";}?>"> 
						<input class="tgl-sw tgl-sw-android <?php if(isset($_COOKIE["bodhidharaSubscribed"])){ echo "tgl-sw-android-checked tgl-sw-active"; }?>" id="android-newsfeed" type="checkbox">
						<label class="btn-switch subscribed" for="android-newsfeed" id="sw-android-426779" data-state="false"></label>
					</div>
				</div>
			</div>
			<div class="nav-item dropdown">
				<?php 
				$sql = "SELECT * FROM bodhi_news WHERE DATE(pTime) = CURDATE()";
				$result = mysqli_query($conn, $sql);
				$rows = mysqli_num_rows($result);
				?>
				<span class="nav-link bell-icon" <?php if(isset($_COOKIE["bodhidharaSubscribed"])){ echo 'data-toggle="dropdown"'; }else{ echo 'data-toggle="tooltip" data-placement="bottom" title="Please subscribe me..."';}?> >
				<?php
				if($rows > 0 AND isset($_COOKIE["bodhidharaSubscribed"])){
					echo '<span>'.$rows.'</span>';
				}
				?>
				</span>
				<ul class="dropdown-menu newsfeed">
				<?php
				while($newsfeed = mysqli_fetch_assoc($result)){
					echo '<li class="dropdown-item"><a href="/'.$newsfeed["category"].'/article/'.$newsfeed["selNo"].'/'.$newsfeed["title"].'">'.$newsfeed["title"].'</a></li>';
				}
				?>
				</ul>
			</div>
			<div class="nav-item"> 
				<a class="nav-link spacial-video-icon" href="https://www.bodhidhara.com/video"></a>
			</div>
			<?php 
			if(isset($_COOKIE["bodhi_user_pass"])){
				$authon = $_COOKIE["bodhi_user_pass"];
				$sql = "SELECT * FROM bodhi_users WHERE authon='$authon'";
				$result = mysqli_query($conn, $sql);
				$users = mysqli_fetch_assoc($result);
			?>
				<div class="nav-item"> 
					<span class="nav-link user-img"><img src="/busers/<?php echo $users["profile"]; ?>" title="<?php echo $users["name"]; ?>" width="30" height="30" style="border-radius: 50%"/></span>
				</div>
			<?php
			}else{
			?>
			<div class="nav-item dropdown">  
				<span class="nav-link user-icon" data-toggle="dropdown"></span>
				<ul class="dropdown-menu">
					<li class="dropdown-item" data-toggle="modal" data-target="#loginModal">Login</li>
					<li class="dropdown-item" data-toggle="modal" data-target="#registerModal">Register</li>
				</ul>
				<!-- Modal Of Log In Form -->
				<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document"> 
						<div class="modal-content">
							<div class="modal-header"> 
								<h5 class="modal-title" id="loginModalLabel">Log in</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body"> 
								<span id="jwLoginAjaxWorking"></span>
								<form id="jwLoginVoteFormContainer" class="form-horizontal" role="form">
								  <div class="form-group">
									<label class="control-label col-sm-2" for="email">Email:</label>
									<div class="col-sm-10">
									  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label col-sm-2" for="pwd">Password:</label>
									<div class="col-sm-10"> 
									  <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password">
									</div>
								  </div>
								</form>
							</div>
							<div class="modal-footer"> 
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Clsoe</button>
								<button type="button" class="btn btn-primary" id="login">Continue</button>
							</div>
						</div>
					</div>
					<script>
						$('#jwLoginAjaxWorking').hide();
						$("#login").click(function(){
							if($("#email").val() == "" || $("#email").val().indexOf("@",0)<0 || $("#email").val().indexOf(".",0)<0){ 
								alert('Please Enter Your Valid Email'); 
								return false;
							}
							if($("#pwd").val() == ""){ 
								alert('Please Enter Your Password'); 
								return false;
							}
							var data = $("#jwLoginVoteFormContainer").serialize();
							$('#jwLoginAjaxWorking').show();
							$.ajax({
								type: 'post',
								url: '../login.php',
								data: data,
								beforeSend: function(){
									$('#jwLoginAjaxWorking').html("<img src='../img/spinner1.gif' width='50' height='50'/>");
									$('#jwLoginVoteFormContainer').hide();
									},
								success: function(data){
									$('#jwLoginAjaxWorking').html(data);
									window.location='../index.php';
									},
								error: function(){
									$('#jwLoginAjaxWorking').html("Error");
									$('#jwLoginVoteFormContainer').show();
									}
							});
						})	
					</script>
				</div>
				<!-- Modal Of Register In Form -->
				<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document"> 
						<div class="modal-content"> 
							<div class="modal-header"> 
								<h5 class="modal-title" id="registerModalLabel">Register</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body"> 
								<form action="register.php" method="POST" class="form-horizontal" role="form" name="registerForm" onsubmit="return validateRegister();" >
								  <div class="form-group">
									<label class="control-label col-sm-10" for="name">Name:</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"><br>
									  <span id="wrong"></span>
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label col-sm-10" for="uname">User name:</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" name="uname" id="uname" placeholder="Enter user name"><br>
									  <span id="wrong1"></span>
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label col-sm-2" for="email">Email:</label>
									<div class="col-sm-10">
									  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"><br>
									  <span id="wrong2"></span>
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label col-sm-10" for="pwd">Password:</label>
									<div class="col-sm-10">
									  <input type="password" class="form-control" name="pwd" id="myInput" placeholder="Enter password"><br>
									  <span id="wrong3"></span><br>
									  <input style="color:mediumblue" type="checkbox" onclick="myFunction()"/> Show Password <br>
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label col-sm-10" for="rpwd">Re-type Password:</label>
									<div class="col-sm-10"> 
									  <input type="password" class="form-control" name="rpwd" placeholder="Re-type password"><br>
									  <span id="wrong4"></span>
									</div>
								  </div>
								  <div class="form-group"> 
									<div class="col-sm-offset-2 col-sm-10">
									  <button type="button" class="btn btn-secondary" data-dismiss="modal">Clsoe</button>	
									  <button type="submit" class="btn btn-primary" name="info_btn">Continue</button>
									</div>
								  </div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<script> 
					// Hide Show Password
					function myFunction() {
						var x = document.getElementById("myInput");
						if(x.type === "password" ) {
							x.type = "text";
						}else {
							x.type = "password";
						}
					}
					// Validation sign in form 
					function validateRegister() {
						var name = document.registerForm.name;
						var uname = document.registerForm.uname;
						var email = document.registerForm.email;
						var pwd = document.registerForm.pwd;
						var rpwd = document.registerForm.rpwd;
						
						
						if(name.value == ""){
							document.getElementById("wrong").innerHTML = "Please enter your name";
							return false;
						}else if(uname.value == ""){
							document.getElementById("wrong1").innerHTML = "Please enter user name";
							return false;
						}else if(email.value == "" || email.value.indexOf("@",0)<0 || email.value.indexOf(".",0)<0){
							document.getElementById("wrong2").innerHTML = "Please enter your valid email";
							return false;
						}else if(pwd.value.length <= 7){
							document.getElementById("wrong3").innerHTML = "Password must be 8 characters";
							return false;
						}else if(rpwd.value != pwd.value){
							document.getElementById("wrong4").innerHTML = "Password not matched!";
							return false;
						}
					}
				</script>
			</div>
			<?php 
			}
			?>
			<div class="nav-item search">
				<div class="user-search">
					<div class="search-box"> 
						<form action="search.php" method="GET"> 
							<span class="search-close glyphicon-remove"></span>
							<button class="search-button glyphicon-search" type="submit" name="x-type-search" value="all"></button>
							<div class="search-input-holder">
							<input class="search-input" type="text" autocomplete="off" name="q" placeholder="কী খুঁজতে চান?"/>
							<div class="result">
							
							</div>
							</div>
					
						</form>
					</div>
					<span class="nav-link search-icon"></span>
				</div>
			</div>
			<div class="nav-item"> 
				<a class="nav-link thumb-icon" href="https://www.facebook.com/BodhidharaNews/"></a>
			</div>
		</div>
	</nav>
</header>
<nav class="nav-menu sticky-top"> 
	<div class="row"> 
		<div class="col-md-1 nav-link col-6 x-m menu-item-2" <?php if($category ==  'buddhistnews'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/buddhistnews/"><img src="../img/messege.png" alt="বৌদ্ধবার্তা" style="width:30px; height:30px; border-radius:50%"/> বৌদ্ধবার্তা</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-12" <?php if($category ==  'foundation'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/foundation/"><img src="../img/tfb-logo.png" alt="বিজ্ঞাপন" style="width:30px; height:30px; border-radius:50%"/> TFB</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-4" <?php if($category ==  'video'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/video/"><img src="../img/video.png" alt="ভিডিও" style="width:30px; height:30px; border-radius:50%"/> ভিডিও</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-5" <?php if($category ==  'literature'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/literature/"><img src="../img/poem.png" alt="সাহিত্য" style="width:30px; height:30px; border-radius:50%"/> সাহিত্য</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-6" <?php if($category ==  'economy'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/economy/"><img src="../img/economics.png" alt="অর্থনীতি" style="width:30px; height:30px; border-radius:50%"/> অর্থনীতি</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-7" <?php if($category ==  'education'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/education/"><img src="../img/graduate.png" alt=" শিক্ষা" style="width:30px; height:30px; border-radius:50%"/> শিক্ষা</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-8" <?php if($category ==  'opinion'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/opinion/"><img src="../img/opinion.png" alt="মতামত" style="width:30px; height:30px; border-radius:50%"/> মতামত</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-9" <?php if($category ==  'lifestyle'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/lifestyle/"><img src="../img/lifestyle.png" alt="জীবনযাপন" style="width:30px; height:30px; border-radius:50%"/> জীবনযাপন</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-10" <?php if($category ==  'tripitak'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/tripitak/"><img src="../img/tripitok.png" alt="ত্রিপিটক" style="width:30px; height:30px; border-radius:50%"/> ত্রিপিটক</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-11" <?php if($category ==  'culture'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/culture/"><img src="../img/culture.png" alt="সংস্কৃতি" style="width:30px; height:30px; border-radius:50%"/> সংস্কৃতি</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-3" <?php if($category ==  'buddhistmind'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/buddhistmind/"><img src="../img/buddha.png" alt="বৌদ্ধমনন" style="width:30px; height:30px; border-radius:50%"/> বৌদ্ধমনন</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-13" <?php if($category ==  'rangamati'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/rangamati/"><img src="../img/ranga.png" alt="বিজ্ঞাপন" style="width:30px; height:30px; border-radius:50%"/> রাঙ্গামাটি</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-14" <?php if($category ==  'kagrachari'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/kagrachari/"><img src="../img/bandar.png" alt="বিজ্ঞাপন" style="width:30px; height:30px; border-radius:50%"/> খাগরাছড়ি</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-15" <?php if($category ==  'bandarban'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/bandarban/"><img src="../img/kagra.png" alt="বিজ্ঞাপন" style="width:30px; height:30px; border-radius:50%"/> বান্দরবান</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-16" <?php if($category ==  'bangladesh'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/bangladesh/"><img src="../img/bangla.png" alt="বিজ্ঞাপন" style="width:30px; height:30px; border-radius:50%"/> সারাবাংলা</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-17" <?php if($category ==  'international'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/international/"><img src="../img/gloab.png" alt="বিজ্ঞাপন" style="width:30px; height:30px; border-radius:50%"/> আন্তর্জাতিক</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-18" <?php if($category ==  'career'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/career/"><img src="../img/career.png" alt="বিজ্ঞাপন" style="width:30px; height:30px; border-radius:50%"/> ক্যারিয়ার</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-19" <?php if($category ==  'technology'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/technology/"><img src="../img/tech.png" alt="বিজ্ঞাপন" style="width:30px; height:30px; border-radius:50%"/> প্রযুক্তি</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-20" <?php if($category ==  'entertainment'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/entertainment/"><img src="../img/entertain.png" alt="বিজ্ঞাপন" style="width:30px; height:30px; border-radius:50%"/>বিনোদন</a></div>
		<div class="col-md-1 nav-link col-6 x-m menu-item-21" <?php if($category ==  'sports'){ echo 'id="nav-active"'; }?>><a href="https://www.bodhidhara.com/buddhistnews/কঠিন চীবর দান/1"><img src="../img/sports.png" alt="বিজ্ঞাপন" style="width:30px; height:30px; border-radius:50%"/> কঠিন চীবর</a></div>
	</div>
</nav>