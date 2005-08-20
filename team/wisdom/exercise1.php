<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Exercise 1: Packaging!</title>' . LF . LF;

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

					<h1 class="guide">Exercise 1: Packaging!</h1>

					<p class="guide"><b>(Posted by Logiqx on the list on 17th September 2002)</b></p>

					<p class="guide">As many of you have managed the last lesson successfully, we
					can try doing one of the immediate tasks as a practise exercise!</p>

					<p class="guide">I have uploaded <a href="zip/exercise1.zip">exercise1.zip</a>
					to the download area that contains makefiles for all of the
					resources that have recently been updated. In most cases the
					makefiles just copy the dats to a nicer name but the file size,
					CRC and datestamp are preserved (so that it is obvious that the
					file is unchanged).</p>

					<p class="guide">Anyhow, the task/exercise is (for a couple of dats of your
					choice):</p>

					<p class="guide">1) Package the dats into their appropriate ZIPs. Naming
					standard as follows:</p>

					<ul class="guide">
					    <li>MAME Artwork 20020916 (cm).zip - CMPro</li>
					    <li>MAME Artwork 20020916 (rc).zip - RomCenter</li>
					</ul>

					<p class="guide">2) Update the web page XML.</p>

					<p class="guide">You should test your work within the lesson 2 environment. Be
					sure to check the emulator page and contents page contain the
					changes that you expect.Also, remember that the dates should show
					when the dat was packaged/uploaded, not when the dat was created.
					;)</p>

					<p class="guide">3) ZIP up the WWW/Dats/xxx directories and put them on the
					FTP.</p>

					<p class="guide">I'll let people pick the dats that they want to package
					because duplication isn't too important right now. I think this
					exercise will be of benefit to all dat creators and packagers. ;)</p>
		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

