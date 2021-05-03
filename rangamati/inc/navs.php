<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">রাঙ্গামাটি</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "rangamati1"){ echo 'id="active"'; }?>><a href="/rangamati/page/2">রাঙ্গামাটি সদর</a></li>
				<li <?php if($view["subcategory"] == "rangamati2"){ echo 'id="active"'; }?>><a href="/rangamati/page/2">কাপ্তাই </a></li>
				<li <?php if($view["subcategory"] == "rangamati3"){ echo 'id="active"'; }?>><a href="/rangamati/page/2">কাউখালী </a></li>
				<li <?php if($view["subcategory"] == "rangamati4"){ echo 'id="active"'; }?>><a href="/rangamati/page/2">বরকল </a></li>
				<li <?php if($view["subcategory"] == "rangamati5"){ echo 'id="active"'; }?>><a href="/rangamati/page/2">নানিয়াচর </a></li>
				<li <?php if($view["subcategory"] == "rangamati6"){ echo 'id="active"'; }?>><a href="/rangamati/page/2">রাজস্থলী </a></li>
				<li <?php if($view["subcategory"] == "rangamati7"){ echo 'id="active"'; }?>><a href="/rangamati/page/2">বিলাইছড়ি </a></li>
				<li <?php if($view["subcategory"] == "rangamati8"){ echo 'id="active"'; }?>><a href="/rangamati/page/2">বাঘাইছড়ি </a></li>
				<li <?php if($view["subcategory"] == "rangamati9"){ echo 'id="active"'; }?>><a href="/rangamati/page/2">জুরাছড়ি  </a></li>
				<li <?php if($view["subcategory"] == "rangamati10"){ echo 'id="active"'; }?>><a href="/rangamati/page/2">লংগদু </a></li>
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