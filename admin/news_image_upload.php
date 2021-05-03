<?php

$output = "";
if(isset($_FILES['file']['name'][0])){
	foreach($_FILES['file']['name'] as $keys => $values){
		$values = str_replace(' ', '_', $values);
		$values = uniqid().$values;
		if(move_uploaded_file($_FILES['file']['tmp_name'][$keys], '../bimg/' . $values)){
			$output .= '
			<div class="generator"> 
				<div><img src="../bimg/'.$values.'" alt="" width="100" height="100"/><span style="color: green;">Image Path:</span><span style="border: 1px solid red;padding: 5px;">'.$values.'</span></div>
				<div>Please Copy The Below Code. And Select A Code Block. Then Paste Into Your News Descriptions Box As Your Wise Within.</div>
				<div class="generate"> 
					<h2 style="color: green;text-align:center;border: 2px solid red;padding:5px;">For Full Screen Image Code</h2>
					<div class="generate-code"> 
						<code>
							&lt;div class="image full-screen"&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;span<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;class="lazy-image out"<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-class="big-img"<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-image="../bimg/'.$values.'"&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="desc"&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;ছবিঃ ছবিটি কি সম্বন্ধে?&lt;/span&gt; <br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
							&lt;/div&gt;<br>
						</code>
					</div>
				</div>
				<div class="generate"> 
					<h2 style="color: green;text-align:center;border: 2px solid red;padding:5px;">For Center Screen Image Code</h2>
					<div class="generate-code"> 
						<code>
							&lt;div class="image center-screen"&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;span<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;class="lazy-image out"<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-class="big-img"<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-image="../bimg/'.$values.'"&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="desc"&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;ছবিঃ ছবিটি কি সম্বন্ধে?&lt;/span&gt; <br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
							&lt;/div&gt;<br>
						</code>
					</div>
				</div>
				<div class="generate"> 
					<h2 style="color: green;text-align:center;border: 2px solid red;padding:5px;">For Left Screen Image Code</h2>
					<div class="generate-code"> 
						<code>
							&lt;div class="image left-screen"&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;span<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;class="lazy-image out"<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-class="big-img"<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-image="../bimg/'.$values.'"&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="desc"&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;ছবিঃ ছবিটি কি সম্বন্ধে?&lt;/span&gt; <br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
							&lt;/div&gt;<br>
						</code>
					</div>
				</div>
				<div class="generate"> 
					<h2 style="color: green;text-align:center;border: 2px solid red;padding:5px;">For Right Screen Image Code</h2>
					<div class="generate-code"> 
						<code>
							&lt;div class="image right-screen"&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;span<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;class="lazy-image out"<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-class="big-img"<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-image="../bimg/'.$values.'"&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="desc"&gt;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;ছবিঃ ছবিটি কি সম্বন্ধে?&lt;/span&gt; <br>
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
							&lt;/div&gt;<br>
						</code>
					</div>
				</div>
			</div>
			';
		}
	}
}
echo $output;

