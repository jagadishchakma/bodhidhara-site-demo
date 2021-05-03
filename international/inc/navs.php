<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">আন্তর্জাতিক</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "international1"){ echo 'id="active"'; }?>><a href="/international/page/2">থাইল্যান্ড</a></li>
				<li <?php if($view["subcategory"] == "international2"){ echo 'id="active"'; }?>><a href="/international/page/2">গণচীন </a></li>
				<li <?php if($view["subcategory"] == "international3"){ echo 'id="active"'; }?>><a href="/international/page/2">আমেরিকা</a></li>
				<li <?php if($view["subcategory"] == "international4"){ echo 'id="active"'; }?>><a href="/international/page/2">ভারত</a></li>
				<li <?php if($view["subcategory"] == "international5"){ echo 'id="active"'; }?>><a href="/international/page/2">মায়ানমার</a></li>
				<li <?php if($view["subcategory"] == "international6"){ echo 'id="active"'; }?>><a href="/international/page/2">শ্রীলংকা</a></li>
				<li <?php if($view["subcategory"] == "international7"){ echo 'id="active"'; }?>><a href="/international/page/2">কম্বোডিয়া</a></li>
				<li <?php if($view["subcategory"] == "international8"){ echo 'id="active"'; }?>><a href="/international/page/2">তিব্বত </a></li>
				<li <?php if($view["subcategory"] == "international9"){ echo 'id="active"'; }?>><a href="/international/page/2">জাপান </a></li>
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