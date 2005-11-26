<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - ROM Questions</title>' . LF . LF;

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

					<p><img src="ROMQuestions.png" width="188" height="40" alt="ROM Questions" /></p>

					<p>Last updated: 30th June 2004</p>

					<h1 class="guide">What is a CRC?</h1>

					<p class="guide">ROMs can be identified using a special checksum algorithm called CRC32 (a 32 bit cyclic redundancy check). A perfect checksum algorithm applied to billions of different files should not have a tendency to generate a particular checksum more than any other. In other words,
					the chance of two different files having the same CRC should only be about 1 in 4 billion (2^32=largest 32-bit number). CRC32 is the most effective
					checksum algorithm in this respect. Amongst other things, CRC32 is used by WinZIP to validate the integrity of ZIP archives and for hardware error detection in some types of network.</p>
					<hr />

					<h1 class="guide">What are MD5 and SHA1?</h1>

					<p class="guide">MD5 and SHA1 can be thought of as more advanced alternatives to CRC32. Both
					MD5 and SHA1 are more secure than CRC32 and it is harder to create fake files of
					a given MD5 or SHA1. For a full description of how MD5 and SHA1 work, take a
					look at the <a href="http://www.rsasecurity.com/rsalabs/node.asp?id=2247">Crypto
					FAQ</a> by RSA Security.</p>

					<p class="guide">At this moment in time, standard archives such as ZIP files do not contain
					MD5 or SHA1 details in the header record. In order to validate that files within
					a ZIP have the correct MD5 or SHA1, they must be uncompressed in full and the
					checksum calculated before it can be checked. Validating CRCs is much faster
					because they are stored within the ZIP header and can be retrieved without
					uncompressing the ZIP.</p>
					<hr />

					<h1 class="guide">What does a CRC of 00000000 mean? What is the 'nodump' flag?</h1>

					<p class="guide">For a long time in emulation, a CRC of 00000000 has indicated that the ROM has not yet been dumped or that previous attempts have been unsuccessful. It is almost certain that a game will malfunction without the correct dump but there are some games that appear to work fine without them (Lunar Lander for example). Note that if a dummy ROM is created by your ROM manager (just filled with 00s) then WinZIP will not show a CRC of 00000000, it will show a normal looking CRC.</p>
					<p class="guide">Since MAME v0.68, a new method of specifying these ROMs has been used; MAME
					now uses a ROM flag of 'nodump' to indicate that the ROM has not been dumped.
					Data files for ClrMamePro should now use the 'flag nodump' syntax but RomCenter
					and many other emulator still need to use CRCs of 00000000.</p>
					<hr />

					<h1 class="guide">What is a complemented CRC? What is the 'baddump' flag?</h1>

					<p class="guide">A complemented CRC (sometimes represented using the notation ~) means that the ROM may be incorrect/incomplete/bad but is the best available at that time. The
					complemented CRC is calculated by inverting the CRC for the best available ROM  (i.e. binary 0's turned to 1's and 1's turned to 0's).
					Complemented CRCs allow emulators and ROM managers to identify the
					best available ROM but understand that it may not be 100% correct.</p>
					<p class="guide">Since MAME v0.68, a new method of specifying these ROMs has been used; MAME
					now uses a ROM flag of 'baddump' to indicate that the ROM is
					incorrect/incomplete/bad. Data files for ClrMamePro should now use the 'flag
					baddump' syntax in addition to the actual CRC but RomCenter and many other
					emulators still need to use complemented CRCs.</p>
					<hr />

					<h1 class="guide">What is a bad dump?</h1>

					<p class="guide">A bad dump is a ROM image that is incorrect for some reason. There are numerous reasons that bad dumps occur; partially dumping a ROM (only half of it for example), incorrectly connecting it up for dumping, a faulty/damaged ROM, etc. Bad dumps are often discovered when someone first tries to emulate the game or when someone else dumps the same game and finds the two dumps don't match. Another time that bad dumps are discovered is when a new clone is dumped and after comparing the ROMs in both games it is realised that one of the original dumps was bad. Once a dump is discovered to be bad, the bad CRC in MAME will be replaced with the new good CRC.</p>
					<hr />

					<h1 class="guide">Why do some emulators require different ROMs to MAME?</h1>

					<p class="guide">The first thing to understand is that if two emulators emulate the same game then the contents of the ROM images will be identical. What usually tends to differ between different emulators is the filename that each ROM must have. This is true for the ZIP/directory itself and the ROMs inside the ZIP/directory.

					Something else that makes ROMs appear to differ is when individual ROM files are combined into a larger ROM file. This combining is sometimes a simple concatenation of the files or sometimes the files will be interleaved. Other reasons for ROMs appearing different is additional padding (usually 00s or FFs) or
					byte swapping (where odd and even bytes are swapped over).</p>
					<hr />

					<h1 class="guide">How do I convert MAME ROMs so they can be used by ...?</h1>

					<p class="guide">If it is simply ROM renaming then you can use one of the ROM managers that are available. In addition to the ROM manager you will also need a
					'data file' that contains information about the ROMs required by a particular emulator.
					Data files for every arcade emulator are available from my site (<a href="http://www.logiqx.com/">http://www.logiqx.com/</a>).

					If the ROMs are not just renames and need concatenating, interleaving, etc. then you can use ROMBuild to convert the MAME ROMs. ROMBuild contains the information required to identify the necessary MAME ROMs and also what conversion needs to be applied to them. Once you have generated the correct ROMs using ROMBuild you can then build a usable set with your
					favourite ROM manager.</p>
					<hr />

					<h1 class="guide">How do ROM managers work?</h1>

					<p class="guide">As you should now understand the concept of CRCs you should be able to see how a ROM manager can identify ROMs by their CRC then rename them to whatever a particular emulator requires. ROMBuild uses CRCs to identify the necessary source files then applies the appropriate conversion routines to them.
					ClrMamePro also supports MD5 and SHA1 but when enabled, processing is a lot
					slower than simply using CRCs.</p>
					<hr />

					<h1 class="guide">How can the file size of a ROM be incorrect when the CRC is okay?</h1>

					<p class="guide">If this happens then the file size is incorrectly specified in the emulator or ROM manager
					data file. This occasionally happens with any emulators that generate MAME listinfo style output (MAME, RAINE, PinMAME,
					etc.) because the information is typed by hand and is susceptible to typos.</p>
					<hr />

					<h1 class="guide">Why can an emulator still play games even when the ROM names are incorrect?</h1>

					<p class="guide">Some emulators (e.g. MAME, RAINE, Kawaks, Nebula) load ROMs from ZIP files using the CRC32 instead of the ROM name. This means that the names of the ROMs don't have any real importance but it is still recommended that your ROMs are correctly named to avoid future name conflicts.</p>
					<hr />

					<h1 class="guide">Are some arcade ROMs encrypted?</h1>

					<p class="guide">Yes, encryption is fairly common in arcade games but the ROM dumping process is no different. It is the job of the emulator to decrypt the ROM and make it playable (just like part of the arcade board decrypts the ROM). Sometimes the encryption algorithm is known and can implemented into emulators but in the case of CPS-2 an XOR file is used to un-encrypt ROM data. This XOR file is created by tricking a real CPS-2 board into decrypting the ROMs and sending the un-encrypted data to a PC. By comparing the encrypted data and un-encrypted data an XOR file can then created for the emulators to use. In case you haven't guessed, encrypted data is decrypted by simply XORing the data in the XOR file (a simple binary operator).</p>
					<hr />

					<h1 class="guide">What is ROMCMP.EXE?</h1>

					<p class="guide">ROMCMP (supplied with MAME) is a tool that can be used to compare different ROM sets. Not only can it tell if two ROMs with different names match but it can also identify ROMs that have been concatenated, interleaved,
					byte swapped, etc. It is even capable of identifying partial matches (e.g. 99.725% match). The command line syntax is 'romcmp -d game1.zip game2.zip'.</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

