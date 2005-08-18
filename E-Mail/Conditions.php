<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Conditions!</title>' . LF . LF;

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

					<p><img src="../Resources/Logiqx.gif" width="327" height="68" alt="Logiqx" /></p>

					<p></p>

					<p>If you want to e-mail me then please make sure that it is not
					about one of these subjects:</p>

					<p><b>Where arcade ROMs are available for download?</b><br />
					I don't know so don't waste your time or mine by asking!</p>

					<p><b>'How To' questions because you are new to emulation?</b><br />
					Sorry but my spare time is limited so I don't have time to teach people the basics.<br />
					I would recommend a visit to the <a href="http://www.mameworld.net/easyemu/">EasyEmu</a> website.</p>

					<p><b>How to use MAME, Kawaks, Nebula (or any other emulator for
					that matter)?</b><br />
					The same answer as immediately above.<br />
					The emulator documentation is generally very good and the common emulators
					are explained at <a href="http://www.mameworld.net/easyemu/">EasyEmu</a>.</p>

					<p><b>Neo-Geo (SNK) and CPS-2 (Capcom) fighting games?</b><br />
					I have no great interest in these systems so please don't bother me about
					them.</p>

					<p>If you wish to contact me on any other matters then feel free
					to <a href="E-Mail.php">e-mail</a> me.</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

