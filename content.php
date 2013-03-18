	<div id="wrapper">
		<header id="main_header">
			<h1><?php echo "$siteName" ?></h1>
		</header>
		<nav id="main_menu">
			<ul>
				<li>home</li>
				<li>menuItem1</li>
				<li>menuItem1</li>
				<li>menuItem3</li>
			</ul>
		</nav>
		<section id="main_section">
			<article>
				<header>
					<hgroup>
						<h1>Greetings!</h1>
						<h2>It looks like everything is in order!</h2>
					</hgroup>
				</header>
				<p>Your website template is set up! To continue, please edit the <strong>site_settings.php</strong> file to your liking. <br />
				Not sure why you're seeing this? Contact your friendly administratory, <?php echo "<a href='mailto:{$siteContactEmail}'>{$siteContactName}</a>"; ?></p>
			</article>
		</section>
		<aside id="main_aside">
			<blockquote>Content goes here!</blockquote>
		</aside>
	</div>