<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">শিক্ষা</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "education1"){ echo 'id="active"'; }?>><a href="/education/page/2">পড়ালেখা</a></li>
				<li <?php if($view["subcategory"] == "education2"){ echo 'id="active"'; }?>><a href="/education/page/2">গাইডলাইন </a></li>
				<li <?php if($view["subcategory"] == "education3"){ echo 'id="active"'; }?>><a href="/education/page/2">উপদেশ</a></li>
				<li <?php if($view["subcategory"] == "education4"){ echo 'id="active"'; }?>><a href="/education/page/2">ইংরেজি</a></li>
				<li <?php if($view["subcategory"] == "education5"){ echo 'id="active"'; }?>><a href="/education/page/2">বিবিধ</a></li>
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