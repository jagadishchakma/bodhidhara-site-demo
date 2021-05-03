<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">ত্রিপিটক</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "tripitak1"){ echo 'id="active"'; }?>><a href="/tripitak/page/2">বিনয় পিটক</a></li>
				<li <?php if($view["subcategory"] == "tripitak2"){ echo 'id="active"'; }?>><a href="/tripitak/page/2">সূত্র পিটক</a></li>
				<li <?php if($view["subcategory"] == "tripitak3"){ echo 'id="active"'; }?>><a href="/tripitak/page/2">অভিধর্ম পিটক</a></li>
				<li <?php if($view["subcategory"] == "tripitak4"){ echo 'id="active"'; }?>><a href="/tripitak/page/2">বনভন্তের দেশনা</a></li>
				<li <?php if($view["subcategory"] == "tripitak5"){ echo 'id="active"'; }?>><a href="/tripitak/page/2">অন্যান্য</a></li>
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