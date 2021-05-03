<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">বিনোদন</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "entertainment1"){ echo 'id="active"'; }?>><a href="/entertainment/page/2">চাকমা টেলিফিল্ম</a></li>
				<li <?php if($view["subcategory"] == "entertainment2"){ echo 'id="active"'; }?>><a href="/entertainment/page/2">হলিউড </a></li>
				<li <?php if($view["subcategory"] == "entertainment3"){ echo 'id="active"'; }?>><a href="/entertainment/page/2">বলিউড</a></li>
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