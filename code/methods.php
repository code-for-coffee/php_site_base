<?

/*  core methods are stored here
	this file is called by the site_settings.php file
*/

function dbConnect($dbServer, $dbServerUser, $dbServerPsswd) {
	// connect to mySQL database
	$mySQLConnect = mysql_connect($dbServer, $dbServerUser, $dbServerPsswd);
		if (!$mySQLConnect)	{
			die($dbErrorConnect . mysql_error());
			}
		elseif ($mySQLConnect) {
			// everything looks good!
			}

	// do things here
	mysql_query("CREATE TABLE test(id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY (id), name VARCHAR(255), age INT)");


	// close open database connection
	mysql_close($mySQLConnect);
}



?>