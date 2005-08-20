<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Lesson 4: WinKawaks, a huge dat update using scripts</title>' . LF . LF;

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

					<h1 class="guide">Lesson 4: WinKawaks - a huge dat update using scripts</h1>

					<p class="guide"><b>(Posted on the list by Logiqx on 19th September 2002)</b></p>

					<p class="guide">For the more advanced of you, who have already:</p>

					<ol class="guide">
					    <li>Set up a working Logiqx environment.</li>
					    <li>Completed lessons 0 and 1.</li>
					    <li>Completed exercise 2.</li>
					</ol>

					<hr />

					<h2 class="guide">Install the lesson</h2>

					<p class="guide">Download these files:</p>

					<ul class="guide">
					    <li><a href="zip/lesson4-dats.zip">lesson4-dats.zip</a></li>
					    <li><a href="zip/lesson4-dats_rc.zip">lesson4-dats_rc.zip</a></li>
					</ul>

					<p class="guide">Extract them into the relevant locations and update your main
					makefiles to include the WinKawaks dat. After doing exercise 2
					you should find this task pretty straightforward! An example of
					your new makefile may look like this:</p>

<pre>
include $(LOGIQX)/Dats/standard_header.mak
include $(LOGIQX)/Dats/Recent/Multi/MAME/MAME.vers.mak 
include $(LOGIQX)/Dats/Recent/Multi/WinKawaks/WinKawaks.vers.mak

recent_multi: \ 
	mame \ 
	winkawaks \ 
	cleanup

include $(LOGIQX)/Dats/Recent/Multi/MAME/MAME.rules.mak 
include $(LOGIQX)/Dats/Recent/Multi/WinKawaks/WinKawaks.rules.mak
include $(LOGIQX)/Dats/standard_footer.mak
</pre>

					<hr />

					<h2 class="guide">Explanation</h2>

					<p class="guide">Inside Dats/Recent/Multi/WinKawaks/v1.45 I have left notes and
					logs from all of my workings during the dat update. Sorry it's
					not a little more<br />
					descriptive but I am at work and want to get this out to you
					before I go on holiday tomorrow morning! However, anyone familiar
					with DatUtil and MAMEDiff should be able to understand it given a
					little time.</p>

					<p class="guide">I added or fixed about 156 games in roughly 20 to 30 minutes.
					Should be 100% accurate too. :)</p>

					<p class="guide">Read 'v1.45 instructions.txt' to find out how I did it.</p>
		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

