<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">সংস্কৃতি</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "culture1"){ echo 'id="active"'; }?>><a href="culture/page/2">চাকমা </a></li>
				<li <?php if($view["subcategory"] == "culture2"){ echo 'id="active"'; }?>><a href="culture/page/2">মারমা</a></li>
				<li <?php if($view["subcategory"] == "culture3"){ echo 'id="active"'; }?>><a href="culture/page/2">ত্রিপুরা</a></li>
				<li <?php if($view["subcategory"] == "culture4"){ echo 'id="active"'; }?>><a href="culture/page/2">আদিবাসী</a></li>
				<li <?php if($view["subcategory"] == "culture5"){ echo 'id="active"'; }?>><a href="culture/page/2">বৈসাবি</a></li>
				<li <?php if($view["subcategory"] == "culture6"){ echo 'id="active"'; }?>><a href="culture/page/2">পুরনো দিন</a></li>
				<li <?php if($view["subcategory"] == "culture7"){ echo 'id="active"'; }?>><a href="culture/page/2">পজ্জম </a></li>
				<li <?php if($view["subcategory"] == "culture8"){ echo 'id="active"'; }?>><a href="culture/page/2">বানা</a></li>
				<li <?php if($view["subcategory"] == "culture9"){ echo 'id="active"'; }?>><a href="culture/page/2">ভাষা </a></li>
				<li <?php if($view["subcategory"] == "culture10"){ echo 'id="active"'; }?>><a href="culture/page/2">শিল্প </a></li>
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