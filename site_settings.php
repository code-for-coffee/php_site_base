<?php

/*  this file is designed to store generic website values
	modify these variables with the correct data for your new site
*/
	// site specific
	$siteName 			= "This Website";
	$siteVersion		= 0.5;
	$siteContactName 	= "webAdmin";
	$siteContactEmail 	= "webAdmin@yourwebsite.com";
	$siteCopyright 		= "This website is © " + $siteName;
	$siteCopyrightYear 	= "2013";
	$siteDomainURL 		= "http://www.yourwebsite.com";

	// site <head> tag info
	$headMetaKeywords 	= array("keywords",
							  	"go"
							  	"here");
	$headMetaDescription = "Generic Site Description";
	$headMetaCharset 	= "utf-8";

	// external StyleSheet
	$extFileStylesheet 	= "style/main.css";

	// external JavaScript libraries
	// by default these link to Google's hosted libraries but are changeable
	// extJavaScript libs enables libraries if TRUE.
	$extJavaScriptLibsEnabled = true;
	$extJavaScriptLibs 	= array("//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js",
							   "//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js",
							   "//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js");

	// files - only change these variables if you rename files!
	$structureIndexPage 	= "index.php";		// index.php by default
	$structureFooterPage 	= "footer.php";		// footer.php by default
	$structureHeaderPage 	= "header.php";		// header.php by default

	// database settings - if not required just comment these out
	$dbServer 		= "localhost";
	$dbServerUser 	= "";
	$dbServerPsswd 	= "";
	$dbTablePrefix 	= ""; 
	
	// php methods - if not required just comment out
	include("code/methods.php");
?>