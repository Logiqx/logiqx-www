<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Exercise 2: Adding new dat to the rebuild_all scripts!</title>' . LF . LF;

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

					<h1 class="guide">Exercise 2: Adding a new dat to the rebuild_all scripts!</h1>

					<p class="guide"><b>(Posted by Logiqx on the list on 19th September 2002)</b></p>

					<p class="guide">This exercise requires a little more thinking than exercise 1
					and should improve your familiarity with the makefile stuff!</p>

					<p class="guide">Extract the following 3 ZIPs into their appropriate locations:</p>

					<ul class="guide">
					    <li><a href="zip/exercise2-dats.zip">exercise2-dats.zip</a>
						(into Dats/Recent/Multi)</li>
					    <li><a href="zip/exercise2-dats_rc.zip">exercise2-dats_rc.zip</a>
						(into Dats_RC/Recent/Multi)</li>
					    <li><a href="zip/exercise2-www.zip">exercise2-www.zip</a>
					    	(into WWW/Dats)</li>
					</ul>

					<p class="guide">After extracting them all, see if you can add Viva Nonno to
					the rebuild_all.mak files!</p>

					<p class="guide">Tip 1: Use the existing MAME entries as a guide.</p>

					<p class="guide">Tip 2: In makefile rules, where a filename contains spaces you
					need to use '?' characters instead.</p>
		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

