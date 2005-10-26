<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Error ' . $_GET['code'] . '</title>' . LF . LF;

			// Include standard <head> metadata

			include('Resources/Head.php');
		?>
	</head>
	<body>
		<?php
			// The main page content is a 3 column table (left column is the menu, right one is the news)

			echo '<!-- Logiqx pages are basically a table with one row and three columns -->' . LF . LF;

			include('Resources/Top.php');

			echo INDENT . '<p><img src="' . $www_root . 'Resources/Logiqx.gif" width="327" height="68" alt="Logiqx" /></p>' . LF;

			echo INDENT . '<p><img src="' . $www_root . 'Resources/URLBig.gif" width="266" height="40" alt="http://www.logiqx.com/" /></p>' . LF . LF;

			switch ($_GET['code'])
			{
				case 401:
					echo INDENT . '<h1>Error 401 - Authorization Required</h1>' . LF . LF;
					echo INDENT . '<p>You are not authorized to access this section of the website!</p>' . LF;
					break;
				case 403:
					echo INDENT . '<h1>Error 403 - Forbidden</h1>' . LF . LF;
					echo INDENT . '<p>Directory browsing id forbidden on this server!</p>' . LF;
					break;
				case 404:
					echo INDENT . '<h1>Error 404 - Not Found</h1>' . LF . LF;
					echo INDENT . '<p>The page that you have requested cannot be found.</p>' . LF;
					echo INDENT . '<p>Maybe it has been moved or renamed... try browsing for it using the menu on the left hand side of this page.</p>' . LF;
					break;
			}
		?>
		<?php
			// Standard page footer (counter)

			include('Resources/Bottom.php');
		?>
	</body>
</html>

