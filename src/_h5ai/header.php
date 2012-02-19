<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="h5ai-php no-js" lang="en"> <!--<![endif]-->
<?php include "php/main.php"; ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $h5ai->getTitle(); ?></title>
	<meta name="h5ai-version" content="h5ai %BUILD_VERSION% (php)">
	<meta name="description" content="Directory index styled with h5ai (http://larsjung.de/h5ai)">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/_h5ai/images/h5ai-16x16.png">
	<link rel="apple-touch-icon" type="image/png" href="/_h5ai/images/h5ai-48x48.png">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,italic,bold">
	<link rel="stylesheet" href="/_h5ai/css/main-php.css">
	<script src="/_h5ai/js/modernizr.min.js"></script>
</head>
<body>
	<div id="selection-rect"></div>
	<nav class="clearfix">
		<ul id="navbar">
			<?php echo $crumb->toHtml(); ?>
		</ul>
	</nav>
	<?php echo $tree->toHtml(); ?>
	<section id="content">
		<?php echo $customize->getHeader(); ?>
		<?php echo $extended->toHtml(); ?>
		<?php echo $customize->getFooter(); ?>
	</section>
	<footer class="clearfix">
		<span class="left">
			<a href="http://larsjung.de/h5ai" target="_blank" title="h5ai project page">h5ai %BUILD_VERSION% (php)</a>
			<span class="hideOnJs noJsMsg"> ⚡ JavaScript is disabled! ⚡ </span>
		</span>
		<span class="right">
			<span id="langSelector">
				<span class="lang">en</span> - <span class="l10n-lang">english</span>
				<span class="langOptions"></span>
			</span>
		</span>
		<span class="center">
			<span class="hideOnNoJs">
				<span class="status default">
					<span class="folderTotal"></span> <span class="l10n-folders">folders</span>
					<span class='sep'>·</span>
					<span class="fileTotal"></span> <span class="l10n-files">files</span>
				</span>
				<span class="status dynamic">
				</span>
			</span>
		</span>
	</footer>
	<script src="/_h5ai/js/libs.js"></script>
	<script src="/_h5ai/config.js"></script>
	<script src="/_h5ai/js/main.js"></script>
	<section id="table">
		<!-- The following code was generated by Apache's autoindex module and gets ignored and removed from the DOM tree. -->
