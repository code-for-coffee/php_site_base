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