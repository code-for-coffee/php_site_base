<?php

/* 
	This is a default content page template.
	It calls the header, your custom content, and the footer.
	You can link your own code in a separate page or add in HTML as you see fit.
*/

if(!isset($_SESSION))
{
	session_start();
}

include("site_settings.php");
include($structureHeaderPage);
include("content.php");				// link your code here!
include($structureFooterPage);

?>