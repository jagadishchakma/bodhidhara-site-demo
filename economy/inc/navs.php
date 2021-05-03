<div class="news-nav">
	<div class="secondary-top"> 
		<h2 class="secondary-logo">অর্থনীতি</h2>
	</div>
	<span class="secondary-menu-toggle sub-menu-toggle"></span>
	<div class="secondary-menu-wrap"> 
		<div class="breadcrumb-list"> 
			<ul>
				<li <?php if($view["subcategory"] == "economy1"){ echo 'id="active"'; }?>><a href="/economy/page/2">কৃষি-জুম চাষ</a></li>
				<li <?php if($view["subcategory"] == "economy2"){ echo 'id="active"'; }?>><a href="/economy/page/2">ব্যবসা-বাণিজ্য </a></li>
				<li <?php if($view["subcategory"] == "economy3"){ echo 'id="active"'; }?>><a href="/economy/page/2">শিল্প-কারখানা</a></li>
				<li <?php if($view["subcategory"] == "economy4"){ echo 'id="active"'; }?>><a href="/economy/page/2">শেয়ারবাজার</a></li>
				<li <?php if($view["subcategory"] == "economy5"){ echo 'id="active"'; }?>><a href="/economy/page/2">বাজারধর</a></li>
				<li <?php if($view["subcategory"] == "economy6"){ echo 'id="active"'; }?>><a href="/economy/page/2">উদ্যোক্তা</a></li>
				<li <?php if($view["subcategory"] == "economy7"){ echo 'id="active"'; }?>><a href="/economy/page/2">পরামর্শ</a></li>
				<li <?php if($view["subcategory"] == "economy8"){ echo 'id="active"'; }?>><a href="/economy/page/2">বিবিধ </a></li>
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