<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - ZIP Contents</title>' . LF . LF;

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

					<p><img src="OlderEmus.gif" width="140" height="40" alt="MAME" /></p>

					<pre>
<?php
$handle = popen('unzip -v "$(ls -t Older*cm?.zip | head -1)"', 'r');
while (!feof($handle))
{
	$buffer = fgets($handle, 4096);
	echo $buffer;
}
pclose($handle);
?>
					</pre>
		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

