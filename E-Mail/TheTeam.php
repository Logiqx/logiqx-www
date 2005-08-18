<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - The Team</title>' . LF . LF;

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

					<p><img src="TheTeam.gif" width="123" height="40" alt="The Team" /></p>

					<p>The contents of this site are brought to you by 
					the following people:<br />
					<br />
					Logiqx - Dat creator and packager. Creator and maintainer of www.logiqx.com<br />
					Pi - Our eyes and ears! He is also the news poster for CAESAR<br />
					<br />
					Previous members of the team who sadly don't have enough time to contribute
					anymore:<br />
					<br />
					Ben Jos - Dat creator<br />
					Rosewood - Dat creator and packager<br />
					SLA - Dat creator<br />
					</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

