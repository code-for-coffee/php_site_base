<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo "$siteName"; ?></title> 
		<meta charset="<?php echo "$headMetaCharset" ?>">
		<meta keyword="<?php embedMetaKeywords(); ?>">
		<meta description="<?php echo "$headMetaDescription" ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo "$extFileStylesheet" ?>">
		<?php embedJavaScriptLibs(); ?>
		<script src="code/scripts.js"></script>
	</head>
	<script>
	$(document).ready(function(){
		// let's go!
	});
	</script>
<body onload="setCookie();">