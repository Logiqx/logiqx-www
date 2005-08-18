<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Last Chance!</title>' . LF . LF;

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

					<p>Are you really sure it is not CPS-2 or Neo-Geo related?<br />
					I will NOT be happy if you ask me about the Street Fighter series, King of
					Fighters 2001, Metal Slug 4, Mars Matrix or similar.</p>

					<p class="huge"><a href="http://www.cps2shock.com/">Ooops, I selected the wrong option.
					I want to know about CPS-2 or Neo-Geo</a></p>

					<p><a href="E-Mail.php">Yes, it is definitely NOT CPS-2 or Neo-Geo
					related</a></p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

