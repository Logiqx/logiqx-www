<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Dats FAQs</title>' . LF . LF;

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

					<p><img src="WinKawaksDat.gif" width="189" height="40" alt="WinKawaks Dat" /></p>

					<p>Last updated: 30th June 2004</p>

					<h1 class="guide">Overview</h1>

					<p class="guide">Although WinKawaks is capable of creating a ClrMamePro or RomCenter data file itself, the <a href="http://caesar.logiqx.com/">CAESAR</a>
					database needs year and manufacturer information to be included. This is one of
					the reasons that I have created a WinKawaks data file. Also, although it might
					seem a lot of effort to create a data file from scratch it
					does have the benefit that it
					can be compared against the auto-generated one for spotting ROM errors in Kawaks
					itself.
					</p>

					<hr />

					<h1 class="guide">Initial Creation (which won't need to be done again)</h1>

					<p class="guide">This was done using an old version of DatUtil and the techniques are no
					longer relevant. I haven't got the inclination to explain how I would go about
					this task now so I will just skip this section and move on to how I update the
					data file!</p>

					<hr />
					<h1 class="guide">
					Data File Updates</h1>
					<h2 class="guide">Identifying Necessary Changes</h2>
					<p class="guide">Thankfully the automatic data file generation of WinKawaks makes life pretty easy when doing
					updates.</p>
					<p class="guide">All that needs to be done is a comparison made between my last public data file and
					the auto-generated data file of the new WinKawaks (use MAMEDiff with the -v
					option). Any differences reported then they need to be rectified by copy and pasting details from the MAME,
					Neo-Geo or CPS-2 data files. The new WinKawaks data file can then loaded into CMPro
					and your ROM collection updated to match. After updating your ROM collection, if the WinKawaks internal audit
					reports all is well then the CMPro data file can be run through DatUtil to create a RomCenter
					data file. </p>
					<hr />
					<h1 class="guide">Final Notes</h1>
					<p class="guide">There are a few benefits to maintaining my own data file for WinKawaks:</p>
					<p class="guide">1) CAESAR gets its year and manufacturer information.<br />
					2) CRC and size errors in WinKawaks can be spotted and reported to the
					author.<br />
					3) SHA1 and MD5 checksums can be added to the data file if I wish.</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

