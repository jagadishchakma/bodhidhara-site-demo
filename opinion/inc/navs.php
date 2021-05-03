<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">মতামত</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "opinion1"){ echo 'id="active"'; }?>><a href="/opinion/page/2">রাজ্যসরকার</a></li>
				<li <?php if($view["subcategory"] == "opinion2"){ echo 'id="active"'; }?>><a href="/opinion/page/2">নীতিমালা </a></li>
				<li <?php if($view["subcategory"] == "opinion3"){ echo 'id="active"'; }?>><a href="/opinion/page/2">আইন</a></li>
				<li <?php if($view["subcategory"] == "opinion4"){ echo 'id="active"'; }?>><a href="/opinion/page/2">অন্যরকম</a></li>
				<li <?php if($view["subcategory"] == "opinion5"){ echo 'id="active"'; }?>><a href="/opinion/page/2">হয়নি</a></li>
				<li <?php if($view["subcategory"] == "opinion6"){ echo 'id="active"'; }?>><a href="/opinion/page/2">ক্ষতি</a></li>
				<li <?php if($view["subcategory"] == "opinion7"){ echo 'id="active"'; }?>><a href="/opinion/page/2">দুর্নীতি</a></li>
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