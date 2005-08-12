<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Question!</title>' . LF . LF;

			// Include standard <head> metadata

			include('../Resources/Head.php');
		?>
	</head>
	<body>
		<?php
			// The main page content is a 3 column table (left column is the menu, right one is the news)

			echo '<!-- Logiqx pages are basically a table with one row and three columns -->' . LF . LF;

			include('../Resources/Top.php');
		?>

					<p><img src="../Resources/Logiqx.gif" width="327" height="68" alt="Logiqx" /></p>

					<p></p>

					<p>Is your question about Nebula, Kawaks, NeoRAGEx or Capcom games?<br />
e.g. Street Fighter Alpha, King of Fighters 2001, Metal Slug 4, Dimahoo, Marvel vs Capcom, Marvel vs Street Fighter, D&amp;D etc.</p>

					<p class="huge"><a href="http://www.cps2shock.com/">Yes</a></p>

					<p><a href="E-Mail.php">No</a></p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

