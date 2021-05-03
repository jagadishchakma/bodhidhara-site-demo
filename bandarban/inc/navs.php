<div class="news-nav">
	<div class="secondary-top"> 
		<div class="row"> 
			<div class="col-12">
				<h2 class="secondary-logo">বান্দরবান</h2>
			</div>
		</div>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "bandarban1"){ echo 'id="active"'; }?>><a href="/bandarban/page/2">বান্দরবান সদর</a></li>
				<li <?php if($view["subcategory"] == "bandarban2"){ echo 'id="active"'; }?>><a href="/bandarban/page/2">লামা</a></li>
				<li <?php if($view["subcategory"] == "bandarban3"){ echo 'id="active"'; }?>><a href="/bandarban/page/2">আলীকদম</a></li>
				<li <?php if($view["subcategory"] == "bandarban4"){ echo 'id="active"'; }?>><a href="/bandarban/page/2">নাইক্ষ্যংছড়ি</a></li>
				<li <?php if($view["subcategory"] == "bandarban5"){ echo 'id="active"'; }?>><a href="/bandarban/page/2">রোয়াংছড়ি</a></li>
				<li <?php if($view["subcategory"] == "bandarban6"){ echo 'id="active"'; }?>><a href="/bandarban/page/2">রুমা</a></li>
				<li <?php if($view["subcategory"] == "bandarban7"){ echo 'id="active"'; }?>><a href="/bandarban/page/2">থানচি</a></li>
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