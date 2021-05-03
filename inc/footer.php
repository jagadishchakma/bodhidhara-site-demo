<footer class="footer">
	<div class="footer-portion"> 
		<div class="foot-top-container"> 
			<div class="foot_top"> 
				<!-- Additional Footer menu for mobile -->
				<div class="m-menu">
					<div class="m-menu-list">
						<div class="row">
							<div class="col-2">
								<div class="mmx">
									<a href="https://www.bodhidhara.com"> 
									<div class="mmx-icon"><span class="glyphicon glyphicon-home"></span></div>
									<div class="mmx-title"><span>হোম</span></div>
									</a>
								</div>
							</div>
							<div class="col-3">
								<div class="mmx" data-toggle="modal" data-target="#e-paperModal">
									<div class="mmx-icon"><span class="glyphicon glyphicon-paperclip"></span></div>
									<div class="mmx-title"><span>ত্রৈমাসিক</span></div>
								</div>
							</div>
							<div class="col-3">
								<div class="mmx">
									<a href="https://www.bodhidhara.com/foundation/">
									<div class="mmx-icon"><span class="glyphicon glyphicon-leaf"></span></div>
									<div class="mmx-title"><span>টিএফবি</span></div>
									</a>
								</div>
							</div>
							<div class="col-2">
								<div class="mmx">
									<a href="https://www.bodhidhara.com/video/"> 
									<div class="mmx-icon"><span class="glyphicon glyphicon-film"></span></div>
									<div class="mmx-title"><span>ভিডিও</span></div>
									</a>
								</div>
							</div>
							<div class="col-2">
								<div class="mmx">
									<a href="https://www.bodhidhara.com/photo/"> 
									<div class="mmx-icon"><span class="glyphicon glyphicon-picture"></span></div>
									<div class="mmx-title"><span>ছবি</span></div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Ended -->
				<!-- MOdel For E-paper -->
				<div class="modal fade" id="e-paperModal" tabindex="-1" role="dialog" aria-labelledby="e-paperModal" aria-hidden="true">
					<div class="modal-dialog epaper-modal-dialog modal-dialog-centered" role="document"> 
						<div class="modal-content">
							<div class="modal-header"> 
								<h5 class="modal-title" id="e-paperModal">বোধিধারা পত্রিকার ই-কাগজ</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body"> 
								<div class="row"> 
								<?php
								$sql = "SELECT * FROM bodhi_paper";
								$query = mysqli_query($conn, $sql);
								while($view = mysqli_fetch_assoc($query)){
									echo '
									<div class="col-md-3 col-12"> 
										<div class="e-paper"> 
											'.$view["detail"].'
											<div class="e-p-read"> 
												<div class="e-p-read-button"><button type="button" class="btn btn-primary" id="login"><a href="https://www.bodhidhara.com/epaper/article.php?id='.$view["id"].'&page=1">অনলাইনে পড়ুন</a></button></div>
											</div>
										</div>
									</div>
									';
								}
								?>
									
								</div>
							</div>
							<div class="modal-footer"> 
								
							</div>
						</div>
					</div>
				</div>
				<!-- Ended -->
			</div>
		</div>
		<div class="foot-wrap-bg"> 
			<div class="foot-middle-container"> 
				<div class="foot-big-menu big-menu"> 
					<div class="big-menu-top"> 
						<div class="all-menu"> 
							<ul>
								<li><a href="https://www.bodhidhara.com/buddhistnews/"> বৌদ্ধবার্তা</a></li>
								<li><a href="https://www.bodhidhara.com/buddhistmind/"> বৌদ্ধমনন</a></li>
								<li><a href="https://www.bodhidhara.com/literature/"> সাহিত্য</a></li>
								<li><a href="https://www.bodhidhara.com/economy/"> অর্থনীতি</a></li>
								<li><a href="https://www.bodhidhara.com/education/"> শিক্ষা</a></li>
								<li><a href="https://www.bodhidhara.com/opinion/"> মতামত</a></li>
								<li><a href="https://www.bodhidhara.com/lifestyle/"> জীবনযাপন</a></li>
								<li><a href="https://www.bodhidhara.com/tripitak/"> ত্রিপিটক</a></li>
								<li><a href="https://www.bodhidhara.com/culture/"> সংস্কৃতি</a></li>
								<li><a href="https://www.bodhidhara.com/foundation/"> TFB</a></li>
								<li><a href="https://www.bodhidhara.com/rangamati/"> রাঙ্গামাটি</a></li>
								<li><a href="https://www.bodhidhara.com/kagrachari/"> খাগরাছড়ি</a></li>
								<li><a href="https://www.bodhidhara.com/bandarban/"> বান্দরবান</a></li>
								<li><a href="https://www.bodhidhara.com/bangladesh/"> সারাবাংলা</a></li>
								<li><a href="https://www.bodhidhara.com/international/"> আন্তর্জাতিক</a></li>
								<li><a href="https://www.bodhidhara.com/career/"> ক্যারিয়ার</a></li>
								<li><a href="https://www.bodhidhara.com/technology/"> প্রযুক্তি</a></li>
								<li><a href="https://www.bodhidhara.com/entertainment/"> বিনোদন</a></li>
								<li><a href="https://www.bodhidhara.com/sports/"> খেলাধুলা</a></li>
								<li class="new-celebrate"><a href="/buddhistnews/tags/katina-cibor-dan/1"> কঠিন চীবর দান</a></li>
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
						<div class="bmenu-bottom-right"> 
							<p>
							<em><strong>Bodhidhara</strong></em> is the first buddhist news read  newspaper in Bangladesh. The online portal of <em><strong>Bodhidhara</strong></em> is the most visited websites in CHT.
							<br> <a class="palo_privacy_link" href="#" target="_blank" title="Privacy Policy">Privacy Policy</a> | <a class="palo_privacy_link" href="#" target="_blank" title="Terms of Use">Terms of Use</a>				
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="foot-bottom-container"> 
				<div class="foot-bottom"> 
				&copy;
				<span itemprop="publisher" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">স্বত্ব বোধিধারা</span> ২০০৭ - ২০১৯	</span>
				<div class="editor-publisher">সম্পাদক ও প্রকাশক: সঞ্জয় চাকমা (বাবু)</div>
				<div class="office-address">বোধিপুর বন বিহার ,<span class="palo-break"></span> সাপছড়ি ইউপি, রাঙ্গামাটি সদর <br> </div>
				<div class="offcie-contact"> <br>ফোন: ৮১৮০০৭৮-৮১,
					<span class="palo-break"></span>ইমেইল:&nbsp;<span class="palo-web-eng">tfbfoundation3@gmail.com</span></div>
				</div>
			</div>
		</div>
	</div>
</footer>
<span class="back-to-top glyphicon glyphicon-chevron-up"></span>
<?php include_once("../inc/js-file.php"); ?>
<script> 
	// For Search Button
	$(document).ready(function(){
		$(".search-icon").click(function(){
			$(".search-box").css("display", "block");
		});
		$(".search-close").click(function(){
			$(".search-box").css("display", "none");
		});
	});
	// For Search Function 
	$(document).ready(function(){
		$('.search-box input[type="text"]').on("keyup input", function(){
			/* Get input value on change */
			var inputVal = $(this).val();
			var resultDropdown = $(this).siblings(".result");
			if(inputVal.length){
				$.get("../q_search.php", {search: inputVal}).done(function(data){
					// Display the returned data in browser
					resultDropdown.html(data);
				});
			} else{
				resultDropdown.empty();
			}
		});
		
		// Set search input value on click of result item
		$(document).on("click", ".result p", function(){
			$(this).parents(".search-box").find('input[type="text"]').val($(this).text());
			$(this).parent(".result").empty();
		});
	});	
	// For Like Button 
	$(document).ready(function(){//News Like Button
		$(".like").click(function(){
			$.post("like.php",
			{
				id: "<?php echo $a_id; ?>",
				like: "<?php echo $like+1; ?>"
			},
			function(data, status){
				document.getElementById("likecount").innerHTML = data;
				$(".like").css("color", "blue");	
				$(".like").addClass("disabled");	
			});
		});
		$(".adlike").click(function(){// Ads Like Button
			$.post("like.php",
			{
				adid: "<?php echo $a_id; ?>",
				adlike: "<?php echo $like+1; ?>"
			},
			function(data, status){
				document.getElementById("likecount").innerHTML = data;
				$(".adlike").css("color", "blue");	
				$(".adlike").addClass("disabled");	
			});
		});
		$(".albumlike").click(function(){// Photo Like Button
			$.post("like.php",
			{
				albumid: "<?php echo $a_id; ?>",
				albumlike: "<?php echo $like+1; ?>"
			},
			function(data, status){
				document.getElementById("likecount").innerHTML = data;
				$(".albumlike").css("color", "blue");	
				$(".albumlike").addClass("disabled");	
			});
		});
		$(".videolike").click(function(){// Video Like Button
			$.post("like.php",
			{
			videoid: "<?php echo $a_id; ?>",
			videolike: "<?php echo $like+1; ?>"
			},
			function(data, status){
				document.getElementById("likecount").innerHTML = data;
				$(".videolike").css("color", "blue");	
				$(".videolike").addClass("disabled");	
			});
		});
	});
	
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$(window).scroll(function(){
			if($(this).scrollTop()>100){
				$('.back-to-top').fadeIn();
			}
			else{
				$('.back-to-top').fadeOut();
			}
			});
		$('.back-to-top').click(function(){
			$('body,html').animate({scrollTop:0},800);
		})
	})
</script>