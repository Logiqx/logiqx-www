<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - MAME Changes History</title>' . LF . LF;

			// Include standard <head> metadata

			include('../../Resources/Head.php');
		?>
	</head>
	<body>
		<?php
			// The main page content is a 3 column table (left column is the menu, right one is the news)

			echo '<!-- Logiqx pages are basically a table with one row and three columns -->' . LF . LF;

			include('../../Resources/Top.php');
		?>

					<p><img src="MAMEChanges.gif" width="192" height="40" alt="MAME" /></p>

					<p>Previous MAME Releases</p>

					<table class="news">
						<tr>
							<?php
								echo '<td><p>' . LF;
								foreach (glob("MAME Changes v*.* (cm).zip") as $filename)
								{
   									echo INDENT . TAB . TAB . TAB . '<a href="' . $filename . '">' . $filename . '</a>';
									echo ' (' . ceil(filesize($filename)/1024) . 'KB)<br />' . LF;
								}
								echo INDENT . TAB . TAB . '</p></td>' . LF;

								echo '<td><p>' . LF;
								foreach (glob("MAME Changes v*.* (rc).zip") as $filename)
								{
   									echo INDENT . TAB . TAB . TAB . '<a href="' . $filename . '">' . $filename . '</a>';
									echo ' (' . ceil(filesize($filename)/1024) . 'KB)<br />' . LF;
								}
								echo INDENT . TAB . TAB . '</p></td>' . LF;
							?>
						</tr>
					</table>
		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

