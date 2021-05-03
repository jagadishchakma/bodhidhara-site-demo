<div class="news-nav">
	<div class="secondary-top"> 
		<div class="row"> 
			<div class="col-12">
				<h2 class="secondary-logo">জীবনযাপন</h2>
			</div>
		</div>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "lifestyle1"){ echo 'id="active"'; }?>><a href="/lifestyle/page/2">খাদ্য-দ্রব্য</a></li>
				<li <?php if($view["subcategory"] == "lifestyle2"){ echo 'id="active"'; }?>><a href="/lifestyle/page/2">শরীর যত্ন</a></li>
				<li <?php if($view["subcategory"] == "lifestyle3"){ echo 'id="active"'; }?>><a href="/lifestyle/page/2">মানসিক যত্ন</a></li>
				<li <?php if($view["subcategory"] == "lifestyle4"){ echo 'id="active"'; }?>><a href="/lifestyle/page/2">সম্পর্ক</a></li>
				<li <?php if($view["subcategory"] == "lifestyle5"){ echo 'id="active"'; }?>><a href="/lifestyle/page/2">পেশা</a></li>
				<li <?php if($view["subcategory"] == "lifestyle6"){ echo 'id="active"'; }?>><a href="/lifestyle/page/2">করণীয়</a></li>
			</ul>
		</div>
	</div>
</div>
<script>
	$('.secondary-menu-toggle').click(function(){ 
		$('.secondary-menu-wrap').toggle();
		$('.secondary-menu-toggle').toggleClass('opened');
	});
</script>