<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Links</title>' . LF . LF;

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

					<p><img src="../Resources/Logiqx.gif" width="327" height="68" alt="Logiqx Logo" /></p>

					<p><img src="Links.gif" width="64" height="40" alt="Links" /></p>

					<p>In order to use the data files provided on this site, you will
					need either ClrMamePro or RomCenter.</p>

					<table class="links">
					  <tr>
					    <td><a href="http://www.clrmame.com/"><img src="CMPro.gif" 
					    width="120" height="78" alt="CMPro" /></a></td>
					    <td><a href="http://www.romcenter.com/"><img src="RomCenter.gif" 
					    width="241" height="49" alt="RomCenter" /></a></td>
					  </tr>
					  <tr>
					    <td>ClrMamePro by Roman Scherzer.<br />
					      The most powerful ROM manager available.</td>
					    <td>RomCenter by Eric Bole-Feysot.<br />
					    Easier for beginners than ClrMame Pro.</td>
					  </tr>
					</table>

					<p></p>

					<p>There are some alternative ROM management tools that you might
					also like to try...</p>

					<table class="links">
					  <tr>
					    <td><a href="http://www.mamemerge.emuchrist.org/"><img src="mamemerge.png" width="222" height="40" alt="MAME Merge" /></a></td>
					    <td><a href="http://www.mameworld.net/setcleaner/"><img src="setcleaner.png" width="197" height="40" alt="SetCleaner" /></a></td>
					  </tr>
					  <tr>
					    <td>MAME Merge by Insane.<br />
					      Similar to the ClrMamePro rebuilder facility.</td>
					    <td>SetCleaner by Simon Stanley Sitzia.<br />
					      Amongst other things it can clean MAME ROM sets.</td>
					  </tr>
					</table>

					<p></p>
					<p>If you are using Linux, you might find these
					tools useful although I have not tried them myself:</p>

					<table class="links">
					  <tr>
					    <td><a href="http://advancemame.sourceforge.net/"><img src="advance-logo.png" width="250" height="46" alt="Advance Scan" /></a></td>
					    <td><a href="http://mamory.sourceforge.net/"><img src="mamory.png" width="233" height="48" alt="MAMORY" /></a></td>
					  </tr>
					  <tr>
					    <td>AdvanceScan by Andrea Mazzoleni.</td>
					    <td>Mamory by Pierre Mazi&egrave;re.</td>
					  </tr>
					</table>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

