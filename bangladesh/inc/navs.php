<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">সারাবাংলা</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "bangladesh1"){ echo 'id="active"'; }?>><a href="/bangladesh/page/2">অপরাধ</a></li>
				<li <?php if($view["subcategory"] == "bangladesh2"){ echo 'id="active"'; }?>><a href="/bangladesh/page/2">সরকার</a></li>
				<li <?php if($view["subcategory"] == "bangladesh3"){ echo 'id="active"'; }?>><a href="/bangladesh/page/2">সংসদ</a></li>
				<li <?php if($view["subcategory"] == "bangladesh4"){ echo 'id="active"'; }?>><a href="/bangladesh/page/2">উন্নয়ন</a></li>
				<li <?php if($view["subcategory"] == "bangladesh5"){ echo 'id="active"'; }?>><a href="/bangladesh/page/2">আইন লঙ্ঘন</a></li>
				<li <?php if($view["subcategory"] == "bangladesh6"){ echo 'id="active"'; }?>><a href="/bangladesh/page/2">দুর্নীতি</a></li>
				<li <?php if($view["subcategory"] == "bangladesh7"){ echo 'id="active"'; }?>><a href="/bangladesh/page/2">সুখবর</a></li>
				<li <?php if($view["subcategory"] == "bangladesh8"){ echo 'id="active"'; }?>><a href="/bangladesh/page/2">ভ্রমণ</a></li>
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