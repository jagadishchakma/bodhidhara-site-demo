<base href="https://www.bodhidhara.com/">
<link rel="icon" type="image/icon" href="/img/favicon.jpg"/>
<link rel="stylesheet" href="../link/bootstrap.css?v=1.6"/>
<link rel="stylesheet" href="../link/tfb.all.css?v=3.1"/>
<link rel="stylesheet" href="../link/cmq.styles.min.css?v=1.2"/>
<link rel="stylesheet" href="../link/jquery.btnswitch.css"/>
<link rel="stylesheet" href="../link/pace-theme-flash.css?v=1.7"/>
<link rel="stylesheet" href="../link/fontello.css"/>
<script src="../link/jquery-3.3.1.min.js"></script>
<script src="../link/jquery.btnswitch.js"></script>
<script src="../link/lazy-images.js?v=1.9"></script>
<script src="../link/pace.min.js"></script>
<script>
  // For Lazy Image Loader Script Function Call From lazy-images.js
      $(document).ready(function(){
        $(".image").lazyImages();
      });
  // For Page Load Progress bars
  paceOptions = {
	  elements: true
	};
	function load(time){
	  var x = new XMLHttpRequest()
	  x.open('GET', "http://localhost:5646/walter/" + time, true);
	  x.send();
	};

	load(20);
	load(100);
	load(500);
	load(2000);
	load(3000);

	setTimeout(function(){
	  Pace.ignore(function(){
		load(3100);
	  });
	}, 4000);

	Pace.on('hide', function(){
	  console.log('done');
	});
</script>