<html xmlns="http://www.w3.org/1999/xhtml">
<html>
	<head>
		<title><?php echo "$siteName"; ?></title> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style/main.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	</head>
	<script>
	function setCookie() {
		// checks to see if we have been here before; if not, creates cookie.
		var siteHistory=getCookie("siteHistory");
  		if (siteHistory=null && siteHistory="") {
  			setCookie("siteHistory", "beenHere", 365);
 		}
	}
	</script>
<body onload="setCookie();">





