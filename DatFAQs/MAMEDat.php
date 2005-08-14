<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - MAME Dat</title>' . LF . LF;

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

					<p><img src="MAMEDat.gif" width="128" height="40" alt="MAME Dat" /></p>

					<p>Last updated: 30th June 2004</p>

					<h1 class="guide">Overview</h1>

					<p class="guide">Although MAME is capable of creating an XML data file using the '-listxml' option
					it is sensible to clean up the output using DatUtil, thereby removing redundant
					information and making it more readable. Also, if you try to use the 'listxml'
					output directly with CMPro or RomCenter you will end up with slightly differing
					behaviour from the two tools (for a few games) due to merging of ROMs with
					different names. The way to avoid this difference in behaviour is to use the
					automatic 'fix merging' feature of DatUtil.
					</p>

					<hr />

					<h1 class="guide">Data File Creation</h1>

					<h2 class="guide">Creating the MAME Data File</h2>

					<p class="guide">In order to create a 'clean' CMPro dat:</p>

					<ul class="guide">
					  <li>mame -listxml &gt;mame.xml</li>
					  <li>datutil mame.xml</li>
					</ul>
					<p class="guide"> The CMPro data file should now be perfect so you can convert it to RomCenter format
					using DatUtil.</p>
					<h2 class="guide">Creation of 'MAME Changes' Data Files</h2>
					<p class="guide">You will need the MAME data file from the previous MAME version in order to do
					this. When you have both data files to hand, use the MAMEDiff options -s, -m and
					-n with -d1 to
					create data files the three set types. I do all of this generation
					using a 'makefile' (C programmers will know what that is) but a simple .bat
					script could be used to save effort when a new MAME release comes out.</p>
					<h2 class="guide">Creation of 'MAME Supplements' Data Files</h2>
					<p class="guide">You will need the MAME data file from the previous MAME version in order to do
					this. When you have both data files to hand, use the MAMEDiff options -s, -m and
					-n with -d2 to
					create data files the three set types. I do all of this generation
					using a 'makefile' (C programmers will know what that is) but a simple .bat
					script could be used to save effort when a new MAME release comes out.</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

