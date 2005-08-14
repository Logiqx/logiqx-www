<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

					<p><b><u><img src="ListinfoHistory.gif" width="174" height="40" alt="Listinfo History" /></u></b>
					</p>

					<p>Last updated: 30th June 2004
					</p>

					<p><b><u>0.27</u></b><br />
					<br />
					A (proprietary) checksum was introduced, to add some degree of certainty that the correct ROMs were being loaded. Before this version, MAME did not use
					checksums, CRCs, or any other kind of check.<br />
					<br />
					<b><u>0.31</u></b><br />
					<br />
					The first version since the introduction of checksums that has drivers that are remarked out in driver.c; this would eventually lead to "real" Test
					Drivers.
					</p>

					<p>Driver files themselves sometimes have things remarked out too. In fact, 0.27
					already had a "test driver" (astdelu1).<br />
					<br />
					<b><u>0.33b7</u></b><br />
					<br />
					Merging of sets was introduced, so any dats for versions of MAME before this one should not contain any merging information.<br />
					<br />
					<b><u>0.34b4</u></b><br />
					<br />
					The proprietary checksum (as introduced in 0.27) was replaced by "the standard" 32-bit CRC.<br />
					<br />
					<b><u>0.34b8</u></b><br />
					<br />
					The "load by CRC" feature was introduced, so when creating dats for any versions
					of MAME before that, or indeed for any emulator that does not support loading by
					CRC, ROM names should NEVER be changed to merge names.<br />
					<br />
					The "-listinfo" feature was introduced in this version (0.34b8) as well, but it did not seem to actually work until the next version (0.34rc1).<br />
					<br />
					<b><u>0.34rc1</u></b><br />
					<br />
					The -listinfo feature actually works now.<br />
					<br />
					A sample "resource" for YM-3812 was added.<br />
					<br />
					<b><u>0.35b11</u></b><br />
					<br />
					Introduction of merge information to the rom lines in the -listinfo output.<br />
					<br />
					<b><u>0.35rc1</u></b><br />
					<br />
					A bug would cause -listinfo to crash.<br />
					<br />
					<b><u>0.36b2</u></b><br />
					<br />
					The sample "resource" for YM-3812 was removed.<br />
					<br />
					<b><u>0.36b10</u></b><br />
					<br />
					The "samples problem" was introduced in this version. Due to a bug, sample information would not appear in the -listinfo output. The problem
					affected this version and several more until it was finally fixed in 0.37b7.<br />
					<br />
					<b><u>0.37b7</u></b><br />
					<br />
					The "samples problem" (a bug introduced in version 0.36b10) was finally fixed starting with this version.<br />
					<br />
					<b><u>0.37b9</u></b><br />
					<br />
					This version had a big screwup in its merge names; they were "one off", so when creating a dat for this version of MAME from its -listinfo output, using the
					"Ignore merges" option is highly recommended. Manually trying to fix all those merges would be way too much work.<br />
					<br />
					<b><u>0.62</u></b><br />
					<br />
					Introduction of disk support, using MD5 digests for validation.<br />
					<br />
					<b><u>0.68</u></b><br />
					<br />
					Introduction of the "baddump" and "nodump" flags. In this version, those flags appeared by themselves, without a "flags" tag preceding them. The preceding
					"flags" tag was introduced in the next version (0.69). Note that both types are supported by the ClrMameProDatParser class.<br />
					<br />
					SHA1 digests were introduced in this version (0.68) as well.<br />
					<br />
					The -listinfo output for this version does not contain any merge information.<br />
					<br />
					<b><u>0.69</u></b><br />
					<br />
					The "baddump" and "nodump" flags were replaced by "flags baddump" and "flags
					nodump&quot;, respectively.<br />
					<br />
					<b><u>0.74u2</u></b><br />
					<br />
					Elimination of Test Drivers.<br />
					<br />
					<b><u>0.77u1</u></b><br />
					<br />
					Introduction of SHA1 digests for disks.<br />
					<br />
					<b><u>0.84</u></b><br />
					<br />
					ListInfo is going to be removed (just ListXML will remain).
					</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

