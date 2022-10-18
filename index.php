<?php
	$url = strtok("$_SERVER[REQUEST_SCHEME]://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", "\?|#");

	// page basic settings
	$page_title 		= "Visual Acuity Test";
	$page_description 	= "Randomized eye test chart.";
	$page_author		= "Morgan";
	$page_keywords		= "Heledron, Hadron, Cymaera, Eye, Snellen, Chart, Test, Exam, Visual, Acuity";

	// page open graph settings
	$page_og_title = $page_title;
	$page_og_description = $page_description;
	$page_og_url = $url;
	$page_og_image = $url . "thumbnail.png";
	$page_og_type = "website";
?>
<!DOCTYPE html>
<html class="full-window-document">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- title & favicon -->
	<title><?php echo $page_title;?></title>
    <link rel="icon" href="/favicon.png" type="image/png"/>
	
	<!-- info -->
    <meta name="author" content="<?php echo $page_author;?>"/>
    <meta name="description" content="<?php echo $page_description;?>"/>
    <meta name="keywords" content="<?php echo $page_keywords;?>"/>
	
	<!-- sharing -->
    <meta property="og:title" content="<?php echo $page_og_title;?>"/>
    <meta property="og:description" content="<?php echo $page_og_description;?>"/>
    <meta property="og:url"   content="<?php echo $page_og_url;?>"/>
    <meta property="og:image" content="<?php echo $page_og_image;?>"/>
    <meta property="og:type"  content="<?php echo $page_og_type;?>"/>

	<!-- styles -->
	<link rel="stylesheet" href="./main.css" type="text/css" />
	<link rel="stylesheet" href="/shared/fontawesome-free-5.13.1-web/css/all.min.css" type="text/css" />
	<link rel="stylesheet" href="/shared/fontawesome-free-5.13.1-web/css/brands.min.css" type="text/css" />

	<!-- scripts -->
	<script src="./main.js" type="module"></script>
</head>
<body>
	<nav>
		<button class="generate" title="Randomize">
			<i class="fa fa-dice"></i>
		</button>

		<div style="flex: 1"></div>

		<a href="https://github.com/TheCymaera/visual-acuity-test" title="GitHub">
			<i class="fab fa-github"></i>
		</a>
		<a href="/" title="Home">
			<i class="fa fa-home"></i>
		</a>
	</nav>

	<div class="chart">
	
	</div>

	<div style="height: 300px"></div>
</body>
</html>