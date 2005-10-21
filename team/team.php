<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>The Remains of Team Logiqx!</title>' . LF . LF;

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

					<h1>The Remains of Team Logiqx!</h1>

					<h2>CGI scripts:</h2>

					<p><a href="../cgi-bin/untar_all.cgi">untar_all.cgi</a> (Extract upload.tar.gz)</p>

					<h2>Stuff to use:</h2>

					<p><a href="download/mame_related_updates.xls">MAME related updates</a> (Excel
					format, not zipped).</p>

					<p><a href="download/">Things to download</a> (backups and tools...)</p>

					<h2>Lessons and other pearls of wisdom:</h2>

					<p>Remind: <a href="../DatFAQs/">Logiqx DAT FAQs</a>. A must! And also a good way to start.</p>

					<p>Lesson 0, part 1: <a href="wisdom/lesson0.php">Tools to Install</a>
					(Sept 11th) <br />
					Lesson 1: <a href="wisdom/lesson1.php">The Dat Environment</a> (Sept
					13th) <br />
					Lesson 2: <a href="wisdom/lesson2.php">Packaging dats and updating
					the web site</a> (Sept 16th) <br />
					<i>Exercise 1: <a href="wisdom/exercise1.php">Packaging!</a>
					(Sept 17th) </i><br />
					Lesson 3: <a href="wisdom/lesson3.php">Viva Nonno, Clones and Bad
					dumps</a> (Sept 18th) <br />
					<i>Exercise 2:<a href="wisdom/exercise2.php">Adding
					new dat to the rebuild_all scripts!</a> (Sept 19th) </i><br />
					Lesson 4: <a href="wisdom/lesson4.php">WinKawaks, a huge dat update
					using scripts</a> (Sept 19th) <br />
					Lesson 5: <a href="wisdom/lesson5.php">Nebula</a> (Sept 20th) <br />
					Lesson 6: <a href="wisdom/lesson6.php">Enhanced directory structure
					and makefiles</a> (Oct 1st) <br />
					Lesson 7: <a href="wisdom/lesson7.php">Not really a lesson but useful
					reading</a> (Oct 3rd) <br />
					</p>

					<hr />

					<h2>Relevant Links:</h2>

					<p>
					<a href="http://www.system16.com/">System 16 - The
					Arcade Museum</a> - The best Sega, Atari, Namco, Taitoto and Konami
					hardware info and game lists. <br />
					<a href="http://unmamed.mame.net/">Bobby Tribble's
					unMAMEd arcade games</a> - Fine and usually trustable info about
					unemulated games. <br />
					<a href="http://emustatus.rainemu.com/">Emulation Status</a>
					- Info about lots of games, many unemulated games <br />
					<a href="http://www.klov.com/">Killer List Of Videogames</a> - Yeah
					usually it kills you when reading it <br />
					<a href="http://www.mameworld.net/easyemu/">EasyEmu</a>
					- In case anyone needs :) <br />
					<a href="http://www.gamefaqs.com/">GameFAQs</a> - In case anyone wants! <br />
					</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

