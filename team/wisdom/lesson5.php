<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Lesson 5: Nebula</title>' . LF . LF;

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

					<h1 class="guide">Lesson 5: Nebula</h1>

					<p class="guide"><b>(Posted on the list by Logiqx on Sept 20th)</b></p>

					<p class="guide">I have now added the necessary Nebula stuff to my 'Dats' and
					'Dats_RC' directories (for the latest mirror of my directories,
					download <a href="../download/Dats.zip">Dats.zip</a> and
					<a href="../download/Dats_RC.zip">Dats_RC.zip</a>).</p>

					<p class="guide">If you look at these, you will see that there are two useful
					batch scripts in the 'Dats/Recent/Multi/Nebula' directory:</p>

					<ul class="guide">
					    <li>One to validate the auto-generated dat
						(_check_generated_dat.bat)</li>
					    <li>One to validate mine (_check_logiqx_dat.bat).</li>
					</ul>

					<p class="guide">Reading the logs is a little confusing but they are still
					unbelievably useful for identifying which games need looking at!
					As you can see, the Nebula generated dat contains loads of errors
					but mine shows none. ;)</p>

					<p class="guide">The games listed in the log for my dat are CPS-2 clones
					(listed because drivers don't specify all parent ROMs) and
					PGM/Konami games (since they do not have drivers). Unfortuntately
					we are stuck with that little annoyance.</p>

					<p class="guide">Obviously, the proof of the pudding is to validate a ROM
					collection within Nebula itself (I check a full set of ROMs using
					the full dat and MAME/supplement ROMs to check the supplement
					dat). Doing so within Nebula shows all games as green for me.</p>

					<p class="guide">There were a few driver errors causing name conflicts in
					Nebula so I fixed them and sent the fixes to ElSemi. Hopefully
					they will be in the next release of Nebula.</p>
		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

