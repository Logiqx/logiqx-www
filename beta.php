<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - News</title>' . LF . LF;

			// Include standard <head> metadata

			include('Resources/Head.php');
		?>
	</head>
	<body>
		<?php
			// The main page content is a 3 column table (left column is the menu, right one is the news)

			echo '<!-- Logiqx pages are basically a table with one row and three columns -->' . LF . LF;

			include('Resources/Top.php');
		?>

		<p><img src="../Resources/Logiqx.gif" width="327" height="68" alt="Logiqx Logo" /></p>

		<p><img src="../Resources/URLBig.gif" width="266" height="40"
		alt="http://www.logiqx.com/" /></p>

		<p>Welcome to www.logiqx.com - Source of CMPro/RomCenter data
		files and other useful tools.</p>
		<p>To see who you have to thank for the contents of this site, have a
		look at <a href="../E-Mail/TheTeam.php">the team</a> page.</p>
		<p>If you have any questions about the files or utilities provided
		here, visit the <a href="/forum/">forum</a>.</p>

		<?php
			// Standard page footer (counter)

			include('Resources/Bottom.php');
		?>
	</body>
</html>

