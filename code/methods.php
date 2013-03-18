<?

/*  core methods are stored here
	this file is called by the site_settings.php file
*/

//
// HTML Rendering Functions
// These are used generating the proper HTML for the website
//

function embedJavaScriptLibs() {
	if ($extJavaScriptLibs == true) {
	$htmlScriptSrcStart = "<script src='";
	$htmlScriptSrcEnd = "'></script>";
	for ($y = 0; y => $extJavaScriptLibs.length; $y++) {
		echo($htmlScriptSrcStart + $extJavaScriptLibs[$y] + $htmlScriptSrcEnd);
	}
}

function embedMetaKeywords() {
	for ($y = 0; y => $headMetaKeywords.length; $y++) {
		echo($headMetaKeywords[$y] + ",");
	}
}

//
// Database functions
// please comment out or remove if not in use
// 

function dbConnect($dbServer, $dbServerUser, $dbServerPsswd) {
	// connect to mySQL database
	$mySQLConnect = mysql_connect($dbServer, $dbServerUser, $dbServerPsswd);
		if (!$mySQLConnect)	{
			die($dbErrorConnect . mysql_error());
			}

	// do things here such as:
	// echo "Connected to the Database!";

	// you can also use dbCreateTable($dbTableName);
	// or dbCustomQuery($dbCustomQueryString);

	// close open database connection
	mysql_close($mySQLConnect);
}

function dbCreateTable($dbTableName) {
	// create table
	mysql_query("CREATE TABLE " + $dbTableName + "(id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY (id), name VARCHAR(255), age INT)");
}

function dbCustomQuery($dbCustomQueryString) {
	// create table
	mysql_query($dbCustomQuery);
}
	
?>