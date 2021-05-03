<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">ভিডিও</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["category"] == "category1"){ echo 'id="active"'; }?>><a href="/video/page/2">দেশনা</a></li>
				<li <?php if($view["category"] == "category2"){ echo 'id="active"'; }?>><a href="/video/page/2">বনভন্তের দেশনা </a></li>
				<li <?php if($view["category"] == "category3"){ echo 'id="active"'; }?>><a href="/video/page/2">ধর্মীয় গান</a></li>
				<li <?php if($view["category"] == "category4"){ echo 'id="active"'; }?>><a href="/video/page/2">TFB</a></li>
				<li <?php if($view["category"] == "category5"){ echo 'id="active"'; }?>><a href="/video/page/2">কঠিন চীবর দান</a></li>
				<li <?php if($view["category"] == "category6"){ echo 'id="active"'; }?>><a href="/video/page/2">অনুষ্ঠানের ভিডিও</a></li>
				<li <?php if($view["category"] == "category7"){ echo 'id="active"'; }?>><a href="/video/page/2">আদিবাসী নৃত্য</a></li>
				<li <?php if($view["category"] == "category8"){ echo 'id="active"'; }?>><a href="/video/page/2">বসবাস</a></li>
				<li <?php if($view["category"] == "category9"){ echo 'id="active"'; }?>><a href="/video/page/2">প্রতিরূপ দেশ</a></li>
				<li <?php if($view["category"] == "category10"){ echo 'id="active"'; }?>><a href="/video/page/2">বিবিধ </a></li>
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