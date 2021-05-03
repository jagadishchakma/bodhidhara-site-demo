<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">সাহিত্য</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "literature1"){ echo 'id="active"'; }?>><a href="/literature/page/2">গল্প</a></li>
				<li <?php if($view["subcategory"] == "literature2"){ echo 'id="active"'; }?>><a href="/literature/page/2">উপন্যাস</a></li>
				<li <?php if($view["subcategory"] == "literature3"){ echo 'id="active"'; }?>><a href="/literature/page/2">নাটক</a></li>
				<li <?php if($view["subcategory"] == "literature4"){ echo 'id="active"'; }?>><a href="/literature/page/2">প্রবন্ধ</a></li>
				<li <?php if($view["subcategory"] == "literature5"){ echo 'id="active"'; }?>><a href="/literature/page/2">ছড়া</a></li>
				<li <?php if($view["subcategory"] == "literature6"){ echo 'id="active"'; }?>><a href="/literature/page/2">কবিতা</a></li>
				<li <?php if($view["subcategory"] == "literature7"){ echo 'id="active"'; }?>><a href="/literature/page/2">ছোটগল্প</a></li>
				<li <?php if($view["subcategory"] == "literature8"){ echo 'id="active"'; }?>><a href="/literature/page/2">শিক্ষণীয় গল্প </a></li>
				<li <?php if($view["subcategory"] == "literature9"){ echo 'id="active"'; }?>><a href="/literature/page/2">বিবিধ </a></li>
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