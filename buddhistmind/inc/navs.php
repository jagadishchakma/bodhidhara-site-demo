<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">বৌদ্ধমনন</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "buddhistmind1"){ echo 'id="active"'; }?>><a href="/buddhistmind/page/2">অহিংসা</a></li>
				<li <?php if($view["subcategory"] == "buddhistmind2"){ echo 'id="active"'; }?>><a href="/buddhistmind/page/2">নীতি</a></li>
				<li <?php if($view["subcategory"] == "buddhistmind3"){ echo 'id="active"'; }?>><a href="/buddhistmind/page/2">ত্যাগ</a></li>
				<li <?php if($view["subcategory"] == "buddhistmind4"){ echo 'id="active"'; }?>><a href="/buddhistmind/page/2">নির্বাণ</a></li>
				<li <?php if($view["subcategory"] == "buddhistmind5"){ echo 'id="active"'; }?>><a href="/buddhistmind/page/2">ধ্যান</a></li>
				<li <?php if($view["subcategory"] == "buddhistmind6"){ echo 'id="active"'; }?>><a href="/buddhistmind/page/2">দান</a></li>
				<li <?php if($view["subcategory"] == "buddhistmind7"){ echo 'id="active"'; }?>><a href="/buddhistmind/page/2">শীল</a></li>
				<li <?php if($view["subcategory"] == "buddhistmind8"){ echo 'id="active"'; }?>><a href="/buddhistmind/page/2">দর্শন</a></li>
				<li <?php if($view["subcategory"] == "buddhistmind9"){ echo 'id="active"'; }?>><a href="/buddhistmind/page/2">বিবিধ</a></li>
				<li <?php if($view["subcategory"] == "buddhistmind10"){ echo 'id="active"'; }?>><a href="/buddhistmind/page/2">পূণ্য</a></li>
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