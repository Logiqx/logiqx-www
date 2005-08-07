<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - How To Compile</title>' . LF . LF;

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

					<p><img src="HowTo.gif" width="196" height="40" alt="HowTo" /></p>

					<p>I wrote a document sometime in January 2001 to help out a few
					people who could compile MAME but also wanted to compile RAINE. At that time, MAME and
					RAINE needed different versions of Allegro (A Low Level Game Routines Library) so I wrote
					the documents in such a way that MAME and RAINE could easily be compiled without the need
					for two separate DJGPP environments. The latest documents now explain how to
					compile the Windows versions of MAME and RAINE with a single MinGW
					environment.</p>

					<p>Important: These documents have been well tested by various
					non-development members of the RAINE team. I have released them in the hope that you may
					find them useful and to give you a better understanding of MinGW. If you have difficulties
					in understanding these instructions then please don't mail me directly asking for help as
					I am usually too busy to answer! I am sure you will find suitable assistance in the MAME and
					RAINE message boards.</p>

					<p>Documents:</p>

					<p><a href="WinMAME.php">Compiling MAME</a> and <a href="RAINE32.php">Compiling RAINE32</a></p>

					<p>Listed below is an old document explaining how to download the RAINE source from SourceForge.<br />
					However, I suggest that you do not use this guide and just download the source
					from the <a href="http://www.rainemu.com/" target="_blank">RAINE</a> home page!</p>
					<p><a href="Downloading.php">Downloading the RAINE source using CVS</a>
					or using <a href="jCVS.php">jCVS ( JAVA CVS)</a></p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

