<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">বিজ্ঞাপন</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["category"] == "category1"){ echo 'id="active"'; }?>><a href="/advertisement/page/1">নিয়োগ</a></li>
				<li <?php if($view["category"] == "category2"){ echo 'id="active"'; }?>><a href="/advertisement/page/1">গৃহ শিক্ষক </a></li>
				<li <?php if($view["category"] == "category3"){ echo 'id="active"'; }?>><a href="/advertisement/page/1">বই</a></li>
				<li <?php if($view["category"] == "category4"){ echo 'id="active"'; }?>><a href="/advertisement/page/1">বিক্রয়</a></li>
				<li <?php if($view["category"] == "category5"){ echo 'id="active"'; }?>><a href="/advertisement/page/1">ক্রয়</a></li>
				<li <?php if($view["category"] == "category6"){ echo 'id="active"'; }?>><a href="/advertisement/page/1">প্রশিক্ষণ</a></li>
				<li <?php if($view["category"] == "category7"){ echo 'id="active"'; }?>><a href="/advertisement/page/1">কোচিং</a></li>
				<li <?php if($view["category"] == "category8"){ echo 'id="active"'; }?>><a href="/advertisement/page/1">প্রাইভেট </a></li>
				<li <?php if($view["category"] == "category9"){ echo 'id="active"'; }?>><a href="/advertisement/page/1">সেবা </a></li>
				<li <?php if($view["category"] == "category10"){ echo 'id="active"'; }?>><a href="/advertisement/page/1">বিবিধ </a></li>
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