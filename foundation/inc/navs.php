<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">ত্রিশরণ ফাউন্ডেশন</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li><a href="">সদস্যবৃন্দ</a></li>
				<li <?php if($view["subcategory"] == "foundation1"){ echo 'id="active"'; }?>><a href="/foundation/page/2">পরিচয় </a></li>
				<li <?php if($view["subcategory"] == "foundation2"){ echo 'id="active"'; }?>><a href="/foundation/page/2">লক্ষ্য</a></li>
				<li <?php if($view["subcategory"] == "foundation3"){ echo 'id="active"'; }?>><a href="/foundation/page/2">ইভেন্ট</a></li>
				<li <?php if($view["subcategory"] == "foundation4"){ echo 'id="active"'; }?>><a href="/foundation/page/2">সম্মাননা</a></li>
				<li><a href="https://www.bodhidhara.com/video/">ভিডিও</a></li>
				<li><a href="https://www.bodhidhara.com/photo/">ছবি</a></li>
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