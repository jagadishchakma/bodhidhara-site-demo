<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">খাগরাছড়ি</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "kagrachari1"){ echo 'id="active"'; }?>><a href="/kagrachari/page/2">খাগড়াছড়ি সদর</a></li>
				<li <?php if($view["subcategory"] == "kagrachari2"){ echo 'id="active"'; }?>><a href="/kagrachari/page/2">পানছড়ি</a></li>
				<li <?php if($view["subcategory"] == "kagrachari3"){ echo 'id="active"'; }?>><a href="/kagrachari/page/2">দীঘিনালা</a></li>
				<li <?php if($view["subcategory"] == "kagrachari4"){ echo 'id="active"'; }?>><a href="/kagrachari/page/2">মহালছড়ি</a></li>
				<li <?php if($view["subcategory"] == "kagrachari5"){ echo 'id="active"'; }?>><a href="/kagrachari/page/2">লক্ষ্ণীছড়ি</a></li>
				<li <?php if($view["subcategory"] == "kagrachari6"){ echo 'id="active"'; }?>><a href="/kagrachari/page/2">মাটিরাঙ্গা</a></li>
				<li <?php if($view["subcategory"] == "kagrachari7"){ echo 'id="active"'; }?>><a href="/kagrachari/page/2">রামঘর</a></li>
				<li <?php if($view["subcategory"] == "kagrachari8"){ echo 'id="active"'; }?>><a href="/kagrachari/page/2">মানিকছড়ি</a></li>
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