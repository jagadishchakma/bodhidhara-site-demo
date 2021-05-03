<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">প্রযুক্তি</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "technology1"){ echo 'id="active"'; }?>><a href="/technology/page/2">মোবাইল</a></li>
				<li <?php if($view["subcategory"] == "technology2"){ echo 'id="active"'; }?>><a href="/technology/page/2">প্রোগ্রামিং</a></li>
				<li <?php if($view["subcategory"] == "technology3"){ echo 'id="active"'; }?>><a href="/technology/page/2">ফ্রিল্যাস্নিং</a></li>
				<li <?php if($view["subcategory"] == "technology4"){ echo 'id="active"'; }?>><a href="/technology/page/2">কম্পিউটার</a></li>
				<li <?php if($view["subcategory"] == "technology5"){ echo 'id="active"'; }?>><a href="/technology/page/2">বিবিধ</a></li>
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