<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Lesson 6: Enhanced directory structure and makefiles</title>' . LF . LF;

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

					<h2 class="guide">Lesson 6: Enhanced the directory structure and makefiles</h2>

					<p class="guide"><b>(posted on the list by Logiqx on 1st October 2002)</b></p>

					<p class="guide">I have just updated 3 more dats for logiqx.com (FBA, Daphne,
					RAINE) and made some improvements to 'Dats' and 'Dats_RC' at the
					same time.</p>

					<hr />

					<p class="guide">1) I have created sub-directories for files that relate to a
					particular version of each emulator.</p>
					
					<p class="guide">For example: mame.exe, fba.exe, Nebula drivers, etc.</p>

					<p class="guide"><img src="img/dats.png" width="236" height="556" alt="Dats Folder View" /></p>

					<p class="guide">Files within these directories are either used for automatic
					dat generation, to verify newly created dats or identify ROM
					changes in an emulator (all actions are scripted so that you can
					see what is possible). Old directories can be deleted when a new
					version of the emulator comes out.</p>

					<hr />

					<p class="guide">2) All scripts have been renamed to have a '_' at the
					beginning of them (e.g. '_rebuild_all.bat').</p>

					<p class="guide">With more dats being added to the environment it makes it
					easier to find the script when it is above all other files. ;)</p>

					<hr />

					<p class="guide">3) The makefiles now hide the output of DatUtil and MAMEDiff.</p>

					<p class="guide">Instead, they just output a simple message to say what is
					going on. Much easier on the eyes! :)</p>

					<hr />

					<p class="guide">4) The makefiles in 'Dats_RC' are better written, using the
					'subst' function to reduce the amount of times that each filename
					is included.</p>

					<p class="guide">This will make 'copy and pasting' much simpler.</p>

					<hr />

					<p class="guide">5) I have created a script called '_check_merging.bat' so that
					you can use it. This script uses DatUtil 'fix merging' (-m
					option) then compares the result with the original dat. If there
					is a difference then it is shown so that we can correct our
					master dat.</p>

					<p class="guide">This highlighted problems a few minor problems that I have now
					corrected:</p>

					<ul class="guide">
					    <li>In Viva Nonno I forgot to compliment a CRC of a bad ROM
						(I complimented it in the parent but not in the clone).</li>
					    <li>In Daphne one of the 'merge' names was incorrect.</li>
					    <li>In MAME, there were a few ROMs that weren't completely
						fixed. Basically, you need to do a 'fix merging' twice to
						guarantee that everything is fixed. I'll explain why
						later! Anyway, I have changed the MAME makefile to do two
						fix merges.</li>
					</ul>

					<hr />

					<p class="guide">Finally, because of the changes you should delete your 'Dats'
					and 'Dats_RC' directories (back them up if you wish) and replace
					them with these:</p>

					<ul class="guide">
					    <li><a href="../download/Dats.zip">Dats.zip</a></li>
					    <li><a href="../download/Dats_RC.zip">Dats_RC.zip</a></li>
					</ul>

					<p class="guide">They include the three new dats (so that you can see what I
					have done) and preliminary areas for Laser, Calice and Mimic.
					Currently these areas just contain comparison scripts so that we
					can see what is new in the emulators but they will be interesting
					for you to look at.</p>

					<hr />

					<p class="guide">Got to go out now and won't have access to my e-mail until
					tomorrow. I am sure you will manage ok without me though. ;)</p>

					<p class="guide">Mike (<a href="img/2002-DSC_0301c.jpg">2002-DSC_0301c.jpg</a>
					- taken a few weeks ago)</p>
		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

