<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">বৌদ্ধবার্তা</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "buddhistnews1"){ echo 'id="active"'; }?>><a href="/buddhistnews/page/2">পূণ্যলাভ</a></li>
				<li <?php if($view["subcategory"] == "buddhistnews2"){ echo 'id="active"'; }?>><a href="/buddhistnews/page/2">বিহার পরিচিতি</a></li>
				<li <?php if($view["subcategory"] == "buddhistnews3"){ echo 'id="active"'; }?>><a href="/buddhistnews/page/2">ধর্মীয় অনুষ্ঠান</a></li>
				<li <?php if($view["subcategory"] == "buddhistnews4"){ echo 'id="active"'; }?>><a href="/buddhistnews/page/2">বৌদ্ধ ব্যক্তিত্ব</a></li>
				<li <?php if($view["subcategory"] == "buddhistnews5"){ echo 'id="active"'; }?>><a href="/buddhistnews/page/2">স্বধর্ম উন্নয়ন</a></li>
				<li <?php if($view["subcategory"] == "buddhistnews6"){ echo 'id="active"'; }?>><a href="/buddhistnews/page/2">ধর্ম প্রচার</a></li>
				<li <?php if($view["subcategory"] == "buddhistnews7"){ echo 'id="active"'; }?>><a href="/buddhistnews/page/2">প্রতিরূপ দেশ</a></li>
				<li <?php if($view["subcategory"] == "buddhistnews8"){ echo 'id="active"'; }?>><a href="/buddhistnews/page/2">কঠিন চীবর দান</a></li>
				<li <?php if($view["subcategory"] == "buddhistnews9"){ echo 'id="active"'; }?>><a href="/buddhistnews/page/2">বিবিধ</a></li>
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