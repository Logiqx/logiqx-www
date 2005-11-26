<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Dats FAQs</title>' . LF . LF;

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

					<p><img src="DatFAQs.png" width="117" height="40" alt="Dat FAQs" /></p>

					<p>Last updated: 17th July 2004</p>

					<p>These pages have been written for anyone that is considering
					creating and releasing their own data files for CMPro or RomCenter.</p>

					<p>I suggest that you have a read of them as there are lots of
					potential pitfalls and my advice should help you to avoid them.</p>

					<hr />

					<h1>General ROM Information</h1>

					<p><a href="ROMQuestions.php">ROM Questions</a></p>

					<h1>Data File Creation</h1>

					<p><a href="DatCreation.php">Principals and Guidelines<br />
					</a><a href="CMPro.php">CMPro Format<br />
					</a><a href="RomCenter.php">RomCenter Format</a></p>

					<h1>Case Studies!</h1>

					<p><a href="MAMEDat.php">MAME</a> - see below for details about
					listinfo changes over time.<br />
					<a href="NebulaDat.php">Nebula</a>
					<a href="NebulaJukeboxDat.php">Nebula Jukebox</a><br />
					<a href="WinKawaksDat.php">WinKawaks</a></p>

					<p>For a history of MAME's listinfo output, you can read
					<a href="ListinfoHistory.php">Ben Jos' notes</a>.</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

