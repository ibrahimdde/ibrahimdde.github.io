<?php require_once("res/x5engine.php"); ?><!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="en-GB" dir="ltr">
	<head>
		<title>Search - Technorogy</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Ibrahim Demir" />
		<meta name="generator" content="Incomedia WebSite X5 Evolution 12.0.10.32 - www.websitex5.com" />
		<meta name="viewport" content="width=974" />
		<link rel="icon" href="favicon.png?12-0-10-32-637551977934737201" type="image/png" />
		<link rel="stylesheet" type="text/css" href="style/reset.css?12-0-10-32" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?12-0-10-32" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?12-0-10-32" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?12-0-10-32" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css?12-0-10-32" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css?12-0-10-32" media="screen" /><![endif]-->
		
		<script type="text/javascript" src="res/jquery.js?12-0-10-32"></script>
		<script type="text/javascript" src="res/x5engine.js?12-0-10-32" data-files-version="12-0-10-32"></script>
		
		
		
		<script type="text/javascript">
			x5engine.boot.push(function () { x5engine.bgStretch('style/bg.jpg', true, 0); });
		</script>
		
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Search - Technorogy</h1>
				
				<div class="imTemplateContent" onclick="x5engine.utils.location('index.html', null, false); return false;" style="position: absolute; top: 10px; left: 10px; width: 858px; height: 197px; cursor: pointer;"></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
			<a id="imGoToMenu"></a><p class="imHidden">Main menu:</p>
			<div id="imMnMnGraphics"></div>
			<div id="imMnMn" class="auto">
				<div class="hamburger-menu-background-container"><div class="hamburger-menu-background menu-mobile-hidden"><div class="hamburger-menu-close-button"><span>&times;</span></div></div></div>
				<ul class="auto menu-mobile-hidden">
					<li id="imMnMnNode0" class=" imPage">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Main Page</span></span>
							</span>
						</a>
					</li></ul>
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<h2 id="imPgTitle">Search results</h2><?php
$search = new imSearch();
$keys = isset($_GET['search']) ? $_GET['search'] : "";
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$type = isset($_GET['type']) ? $_GET['type'] : "pages"; ?>
<div class="searchPageContainer">
<?php echo $search->search($keys, $page, $type); ?>
</div>

				<div class="imClear"></div>
			</div>
			<div id="imFooter">
				
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a> | <a href="#imGoToMenu" title="Remain on this page">Back to main menu</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">To use this website you must enable JavaScript.</div></noscript>
	</body>
</html>
