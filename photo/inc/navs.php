<div class="news-nav">
	<div class="secondary-top"> 
		<div class="row"> 
			<div class="col-12">
				<h2 class="secondary-logo">ছবি</h2>
			</div>
		</div>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["category"] == "album1"){ echo 'id="active"'; }?>><a href="/photo/page/2">এক ফলক</a></li>
				<li <?php if($view["category"] == "album2"){ echo 'id="active"'; }?>><a href="/photo/page/2">বুদ্ধ শাসন</a></li>
				<li <?php if($view["category"] == "album3"){ echo 'id="active"'; }?>><a href="/photo/page/2">প্রতিরূপ দেশ</a></li>
				<li <?php if($view["category"] == "album4"){ echo 'id="active"'; }?>><a href="/photo/page/2">দরিদ্র</a></li>
				<li <?php if($view["category"] == "album5"){ echo 'id="active"'; }?>><a href="/photo/page/2">TFB</a></li>
				<li <?php if($view["category"] == "album6"){ echo 'id="active"'; }?>><a href="/photo/page/2">জুম্ম ফ্যাশন</a></li>
				<li <?php if($view["category"] == "album7"){ echo 'id="active"'; }?>><a href="/photo/page/2">বিনোদন </a></li>
				<li <?php if($view["category"] == "album8"){ echo 'id="active"'; }?>><a href="/photo/page/2">জীবনযাপন </a></li>
				<li <?php if($view["category"] == "album9"){ echo 'id="active"'; }?>><a href="/photo/page/2">ভ্রমণ </a></li>
				<li <?php if($view["category"] == "album10"){ echo 'id="active"'; }?>><a href="/photo/page/2">উন্নয়নের চিত্র </a></li>
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