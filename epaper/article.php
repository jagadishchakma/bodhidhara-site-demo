<?php
/*
E-paper name: Bodhidhara
Edition: 2019
Author: Jagadish Chakma
Version: 1.0
*/
error_reporting(0);
include_once("../admin/config.php");
$category = '';
$id = $_GET["id"];
$page = $_GET["page"];
$page = "page".$page;
$url = "https://wwww.bodhidhara.com/epaper/article.php?id=".$id."&page=".$page."";

$sql = "SELECT $page FROM bodhi_paper WHERE id=$id";
$query = mysqli_query($conn, $sql);
if($query){ ?>
<!DOCTYPE HTML>
<html lang="bn">
<head prefix="og: https://ogp.me/ns#">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!--turn off IE compatibility mode -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0">
	<!-- Website SEO -->
	<title>ত্রৈনাসিক বোধিধারা পত্রিকা</title>
	<meta name="keywords" content="বৌদ্ধবার্তা, বৌদ্ধবার্তা খবর, পূণ্যলাভ, বিহার পরিচিতি, ধর্মীয় অনুষ্ঠান, বৌদ্ধ ব্যক্তিত্ব, স্বধর্ম উন্নয়ন, ধর্ম প্রচার, প্রতিরূপ দেশ, কঠিন চীবর দান, বিবিধ, আদিবাসী, পার্বত্য চট্টগ্রামের বৌদ্ধ, প্রতিরূপ দেশ, বৌদ্ধ খবর, বৌদ্ধবার্তা বৌদ্ধ খবর , বৌদ্ধ রাষ্ট্র,  বৌদ্ধ ভিক্ষু,বনভন্তে,রাজবনবিহার,জাতক সমগ্র, বিশুদ্ধি মার্গ">
	<meta name="description" content="বৌদ্ধবার্তা খবর - বৌদ্ধ রাষ্ট্র, বৌদ্ধ খবর ও বিশ্বের বৌদ্ধ ধর্মের অবদান। বৌদ্ধবার্তা , বৌদ্ধ শিক্ষা, বৌদ্ধ বার্তা, বৌদ্ধ মনন, বাংলায় সমগ্র বৌদ্ধবার্তা প্রকাশ, বিনয় পিটক, সূত্র পিটক, অভিধর্ম পিটক">
	<!--for fb -->
	<meta property="og:title" content="্রৈনাসিক বোধিধারা পত্রিকা">
	<meta property="og:site_name" content="বোধিধারা">
	<meta property="og:description" content="বৌদ্ধবার্তা খবর - বৌদ্ধ রাষ্ট্র, বৌদ্ধ খবর ও বিশ্বের বৌদ্ধ ধর্মের অবদান। বৌদ্ধবার্তা , বৌদ্ধ শিক্ষা, বৌদ্ধ বার্তা, বৌদ্ধ মনন, বাংলায় সমগ্র বৌদ্ধবার্তা প্রকাশ, বিনয় পিটক, সূত্র পিটক, অভিধর্ম পিটক">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo $url; ?>">
	<meta property="og:image" content="/img/bodhidhara.png">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta name="fb:app_id" property="fb:app_id" content="549787358890465">		
	<?php include_once("../inc/css-file.php"); ?>
	<link rel="stylesheet" href="/epaper/style.css"/>
</head>
<body>
	<?php 
	include_once("../inc/bodhi-header.php");
	$view = mysqli_fetch_assoc($query);
	echo $view["$page"];
	?>
	<!--- Here A Advertisements --->
	<?php include_once("../inc/footer.php"); ?>
</body>
</html>
<?php	
}else{
	header("location: https://www.bodhidhara.com");
}
?>
