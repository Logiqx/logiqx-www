<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Video</title>' . LF . LF;

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
					<h1>Tools</h1>
					<p>All of the <a href="Tools.php">tools</a> that I use regularly.</p>
					<h1>DVD Decrypter Settings</h1>
					<p><a href="DVD%20Decrypter%20Settings/1%20-%20General.png">DVD Decrypter Settings/1 - General.png</a><a href="DVD%20Decrypter%20Settings/2%20-%20File%20Mode.png"><br />
					DVD Decrypter Settings/2 - File Mode.png</a><a href="DVD%20Decrypter%20Settings/3%20-%20IFO%20Mode.png"><br />
					DVD Decrypter Settings/3 - IFO Mode.png</a><a href="DVD%20Decrypter%20Settings/4%20-%20ISO%20Mode.png"><br />
					DVD Decrypter Settings/4 - ISO Mode.png</a><a href="DVD%20Decrypter%20Settings/5%20-%20Stream%20Processing.png"><br />
					DVD Decrypter Settings/5 - Stream Processing.png</a><a href="DVD%20Decrypter%20Settings/6%20-%20Events.png"><br />
					DVD Decrypter Settings/6 - Events.png</a></p>
					<h1>CCE Basic Settings</h1>
					<p><a href="CCE%20Basic%20Settings/PAL%204.3%20-%20Interlaced%20DV%20-%202-pass%20VBR%20-%20General.png">PAL 4.3 - Interlaced DV - 2-pass VBR - General</a><a href="CCE%20Basic%20Settings/PAL%204.3%20-%20Interlaced%20DV%20-%202-pass%20VBR%20-%20Advanced.png"><br />
					PAL 4.3 - Interlaced DV - 2-pass VBR - Advanced</a></p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

