<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Listinfo History</title>' . LF . LF;

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

					<p><img src="ListinfoHistory.gif" width="174" height="40" alt="Listinfo History" /></p>

					<p>Last updated: 30th June 2004</p>

					<h2>0.27</h2>
					
					<p>A (proprietary) checksum was introduced, to add some degree of certainty that the correct ROMs were being loaded. Before this version, MAME did not use checksums, CRCs, or any other kind of check.</p>
					
					<h2>0.31</h2>
					
					<p>The first version since the introduction of checksums that has drivers that are remarked out in driver.c; this would eventually lead to "real" Test Drivers.</p>

					<p>Driver files themselves sometimes have things remarked out too. In fact, 0.27 already had a "test driver" (astdelu1).</p>
					
					<h2>0.33b7</h2>
					
					<p>Merging of sets was introduced, so any dats for versions of MAME before this one should not contain any merging information.</p>
					
					<h2>0.34b4</h2>
					
					<p>The proprietary checksum (as introduced in 0.27) was replaced by "the standard" 32-bit CRC.</p>
					
					<h2>0.34b8</h2>
					
					<p>The "load by CRC" feature was introduced, so when creating dats for any versions
					of MAME before that, or indeed for any emulator that does not support loading by
					CRC, ROM names should NEVER be changed to merge names.</p>
					
					<p>The "-listinfo" feature was introduced in this version (0.34b8) as well, but it did not seem to actually work until the next version (0.34rc1).</p>
					
					<h2>0.34rc1</h2>
					
					<p>The -listinfo feature actually works now.</p>
					
					<p>A sample "resource" for YM-3812 was added.</p>
					
					<h2>0.35b11</h2>
					
					<p>Introduction of merge information to the rom lines in the -listinfo output.</p>
					
					<h2>0.35rc1</h2>
					
					<p>A bug would cause -listinfo to crash.</p>
					
					<h2>0.36b2</h2>
					
					<p>The sample "resource" for YM-3812 was removed.</p>
					
					<h2>0.36b10</h2>
					
					<p>The "samples problem" was introduced in this version. Due to a bug, sample information would not appear in the -listinfo output. The problem
					affected this version and several more until it was finally fixed in 0.37b7.</p>
					
					<h2>0.37b7</h2>
					
					<p>The "samples problem" (a bug introduced in version 0.36b10) was finally fixed starting with this version.</p>
					
					<h2>0.37b9</h2>
					
					<p>This version had a big screwup in its merge names; they were "one off", so when creating a dat for this version of MAME from its -listinfo output, using the
					"Ignore merges" option is highly recommended. Manually trying to fix all those merges would be way too much work.</p>
					
					<h2>0.62</h2>
					
					<p>Introduction of disk support, using MD5 digests for validation.</p>
					
					<h2>0.68</h2>
					
					<p>Introduction of the "baddump" and "nodump" flags. In this version, those flags appeared by themselves, without a "flags" tag preceding them. The preceding
					"flags" tag was introduced in the next version (0.69). Note that both types are supported by the ClrMameProDatParser class.
					
					SHA1 digests were introduced in this version (0.68) as well.</p>
					
					<p>The -listinfo output for this version does not contain any merge information.</p>
					
					<h2>0.69</h2>
					
					<p>The "baddump" and "nodump" flags were replaced by "flags baddump" and "flags
					nodump", respectively.</p>
					
					<h2>0.74u2</h2>
					
					<p>Elimination of Test Drivers.</p>
					
					<h2>0.77u1</h2>
					
					<p>Introduction of SHA1 digests for disks.</p>
					
					<h2>0.84</h2>
					
					<p>ListInfo is going to be removed (just ListXML will remain).</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

