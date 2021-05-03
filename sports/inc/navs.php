<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">খেলাধুলা</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "sports1"){ echo 'id="active"'; }?>><a href="/sports/page/2">ফুটবল</a></li>
				<li <?php if($view["subcategory"] == "sports2"){ echo 'id="active"'; }?>><a href="/sports/page/2">ক্রিকেট</a></li>
				<li <?php if($view["subcategory"] == "sports3"){ echo 'id="active"'; }?>><a href="/sports/page/2">অন্যান্য</a></li>
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