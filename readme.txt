
php_site_base

"Simple php site base template."
v0.5 - 3/17/2013
-------------------------------------

Released under GPL 3.0
http://www.gnu.org/licenses/gpl.html

Questions? Comments? 
jtraverjr [at] gmail [dot] com
http://github.com/code-for-coffee

About: 
-------------------------------------

This small project is designed for a quick and easy template for new web sites. Need to create a new site in a flash? Just upload these files to your server and edit away. Instructions are included below! This site layout uses your typical header/content/footer layout so that all you have to do is create the layout of your site once and edit the content as needed. 


Included Files:
-------------------------------------

index.php  			This file generates php session and includes each file to create a webpage.
content.php 		Your custom content goes here! 
footer.php 			Site footer code. Closing tags, contact bits, copyright, and so forth.
header.php 			Site header code. Opening tags, script & stylesheet links, and so forth.
site_settings.php   Basic site globals are declared here. Make sure you edit this to fit your site!
css/main.css 		Your default stylesheet.
code/methods.php 	php Methods used to make this work
code/scripts.js 	Local JavaScript files


Adding Additional pages
-------------------------------------

To add additional pages to your website you'll need to do the following:

	1. Create two new files
	2. Copy the contents of index.php and content.php into these new files
	3. Change line 16 of the new index.php file - include("content.php"); - to match your new content page's filename.
	4. Save the new files and link to them however you desire! Your header+footer code will be attached automatically.


Release Notes
-------------------------------------
v.05
	* converted everything from XHTML Trans to HTML5
	* updated CSS to match HTML5 params
	* automated keywords and linked Javascripts from the site_settings.php file
	* added more methods to handle these changes to code/methods.php
	* Cleaned up the code/methods.php file
v.04
	* added example functions in the code/methods.php file
	* updated a few files to make sure version support exists
	* updated link to updated jQuery library
v.03
	* added basic MySQL support (via code/methods.php)
v.02
	* added readme + instructions
	* edited content.php
	* cleaned up footer.php's code
v.01
	* First release