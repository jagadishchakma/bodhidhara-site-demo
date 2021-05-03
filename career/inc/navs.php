<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">ক্যারিয়ার</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "career1"){ echo 'id="active"'; }?>><a href="/career/page/2">বাস্তব-গল্প</a></li>
				<li <?php if($view["subcategory"] == "career2"){ echo 'id="active"'; }?>><a href="/career/page/2">নানান-ক্যারিয়ার </a></li>
				<li <?php if($view["subcategory"] == "career3"){ echo 'id="active"'; }?>><a href="/career/page/2">পরামর্শ</a></li>
				<li <?php if($view["subcategory"] == "career4"){ echo 'id="active"'; }?>><a href="/career/page/2">মোটিভেশন</a></li>
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