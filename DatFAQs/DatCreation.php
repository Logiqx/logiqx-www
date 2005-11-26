<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Dat Creation</title>' . LF . LF;

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

					<p><img src="DatCreation.png" width="147" height="40" alt="Dat Creation" /></p>

					<p>Last updated: 30th June 2004</p>

					<h1 class="guide">Introduction</h1>

					<p class="guide">Dats are required by ROM managers such as CMPro and RomCenter so that they
					can build and audit ROM sets for use in emulators. It is important to ensure
					that your dats are correct otherwise the ROM manager cannot do its job properly
					and may actually damage ROM sets. This document and the other supplementary
					documents should contain most of the details you need to know about data file creation
					and the potential pitfalls. At this time there are two main formats and if you
					do decide to create a data file I would urge you to release it in both formats.
					Converting from one format to another is very easy using DatUtil so there is
					really no excuse for not doing so! </p>

					<hr />

					<h1 class="guide">General Guidelines </h1>

					<h2 class="guide">Standards </h2>

					<p class="guide">MAME uses lower case filenames for arcade ROMs so if you are creating a data
					file for a new arcade emulator I would recommend you stick to this convention
					(whether or not the ROMs you have use lower case filenames). Lower case
					filenames are much easier on the human eye also. </p>

					<p class="guide">CRCs should be 8 characters long (use leading zeros if necessary), they
					should be lower case and not use the prefix '0x'. All of these points are for
					the sake of consistency and readability. ClrMamePro and my tools can both load
					CRCs with a prefix of '0x' but I think it looks ugly!</p>

					<h2 class="guide">Merging </h2>

					<p class="guide">Many emulators support ROM merging in order to save on the amount of disk space used.
					What this means is that ROMs used by more than one game need only be stored once.
					When games can be merged, one of them is called the 'parent' and the others are
					called the 'clones'. You cannot have a clone of a clone, only one parent with
					one or more clones.</p>

					<p class="guide">e.g. In MAME there is a game called '1942' which is a parent and
					'1942a/1942b' are clones. </p>

					<p class="guide">There are three types of ROM sets: </p>

					<ul class="guide">
					  <li>Non-merged is where each game (whether it is a parent or clone) must store
					    all of it's ROMs in a ZIP/directory specifically for that game.</li>
					  <li>Split-merged is where each parent stores it's ROMs in it's own ZIP/directory but clones only need to store ROMs that are not
					    in the parent. Many clones only differ to the
					    parent by one or two ROMs so this can lead to significant space savings.</li>
					  <li>Fully-merged is where a parent and all of it's clones are stored in a
					    single ZIP/directory. This leads to even greater space savings than
					    split-merging but the downside is that games are bundled together and this
					    is not always advantageous.</li>
					</ul>
					<p class="guide">If an emulator supports ROM merging then the data files you produce should
					specify the ROM merging correctly. If you do not specify merging correctly then it not only prevents
					people from choosing the merge option they would like but can also cause
					misleading scan results. Take PacMan and one of its clones as an example: </p>

					<pre>
game (
	name pacman
	description &quot;PuckMan (Japan set 1)&quot;
	year 1980
	manufacturer &quot;Namco&quot;
	rom ( name namcopac.6e size 4096 crc fee263b3 )
	rom ( name namcopac.6f size 4096 crc 39d1fc83 )
	rom ( name namcopac.6h size 4096 crc 02083b03 )
	rom ( name namcopac.6j size 4096 crc 7a36fe55 )
	rom ( name pacman.5e size 4096 crc 0c944964 )
	rom ( name pacman.5f size 4096 crc 958fedf9 )
)

game (
	name npacmod
	description &quot;PuckMan (harder?)&quot;
	year 1981
	manufacturer &quot;Namco&quot;
	<b>cloneof pacman
	romof pacman</b>
	rom ( name namcopac.6e <b>merge namcopac.6e</b> size 4096 crc fee263b3 )
	rom ( name namcopac.6f <b>merge namcopac.6f</b> size 4096 crc 39d1fc83 )
	rom ( name namcopac.6h <b>merge namcopac.6h</b> size 4096 crc 02083b03 )
	rom ( name npacmod.6j size 4096 crc 7d98d5f5 )
	rom ( name pacman.5e <b>merge pacman.5e</b> size 4096 crc 0c944964 )
	rom ( name pacman.5f <b>merge pacman.5f</b> size 4096 crc 958fedf9 )
)</pre>

					<p class="guide">It can be seen that npacmod only has one ROM that differs from the parent set
					so some people may be tempted to create a data file that forces split sets by
					doing this: </p>

<pre>game (
	name pacman
	description &quot;PuckMan (Japan set 1)&quot;
	year 1980
	manufacturer &quot;Namco&quot;
	rom ( name namcopac.6e size 4096 crc fee263b3 )
	rom ( name namcopac.6f size 4096 crc 39d1fc83 )
	rom ( name namcopac.6h size 4096 crc 02083b03 )
	rom ( name namcopac.6j size 4096 crc 7a36fe55 )
	rom ( name pacman.5e size 4096 crc 0c944964 )
	rom ( name pacman.5f size 4096 crc 958fedf9 )
)

game (
	name npacmod
	description &quot;PuckMan (harder?)&quot;
	year 1981
	manufacturer &quot;Namco&quot;
	rom ( name npacmod.6j size 4096 crc 7d98d5f5 )
)</pre>

					<p class="guide">Even though this would work to a degree it is a bad idea for two reasons: </p>

					<ol class="guide">
					  <li>ROM managers will report npacmod as working if just the one ROM
					    (npacmod.6j) is
					    present. If any of the necessary parent ROMs are missing it should
					    report a problem for npacmod but cannot (since you removed the information it needs).</li>
					  <li>It forces people to use split sets when they might want to fully merge
					    their ROMs (or not merge them at all).</li>
					</ol>

					<p class="guide">Similarly, people may be tempted to create a fully merged data file as
					follows: </p>

					<pre>
game (
	name pacman
	description &quot;PuckMan (Japan set 1) and <b>PuckMan (harder?)</b>&quot;
	year 1980
	manufacturer &quot;Namco&quot;
	rom ( name namcopac.6e size 4096 crc fee263b3 )
	rom ( name namcopac.6f size 4096 crc 39d1fc83 )
	rom ( name namcopac.6h size 4096 crc 02083b03 )
	rom ( name namcopac.6j size 4096 crc 7a36fe55 )
	rom ( name pacman.5e size 4096 crc 0c944964 )
	rom ( name pacman.5f size 4096 crc 958fedf9 )
	<b>rom ( name npacmod.6j size 4096 crc 7d98d5f5 )</b>
)</pre>

					<p class="guide">This too would be incorrect for three reasons: </p>

					<ol class="guide">
					  <li>It forces people to fully merge their ROMs when they may want split-merged
					    sets.</li>
					  <li>There is no way to know which ROMs are required for any one game.</li>
					  <li>The ROM manager will report the wrong number of games (1 instead of 2).</li>
					</ol>
					<p class="guide">If an emulator only supports one of the three merging options then you can
					specify it in a CMPro data file using the 'forcemerging' option in the header.
					Do not create a data file containing incorrect merging information. It is a terrible
					sin! </p>

					<p class="guide">The syntax for specify merging information is detailed in the <a href="CMPro.php">CMPro</a> and <a href="RomCenter.php">RomCenter</a>format
					documents. </p>

					<h2 class="guide">Special CRCs and Flags </h2>

					<p class="guide">There are some special CRCs used by ROM managers and at times you may find
					them useful: </p>

					<ul class="guide">
					  <li>00000000 CRCs should be used when a ROM name and size is known but the ROM
					    is unavailable (i.e. the CRC unknown). In CMPro data files, the 'flags
					    nodump' syntax should be used rather than a CRC of 00000000.</li>
					  <li>Complemented CRCs should be used to indicate that a ROM is known to be
					    incorrect but is the best available at the time (MAME uses complemented CRCs to
					    represent other things as well). One example of using
					    complemented CRCs is in the Virtua data file; where some ROMs are known to
					    be half the correct size but have not been re-dumped since. Specifying the
					    available ROMs using complemented CRCs is the best thing to do until they
					    are re-dumped. In CMPro data files, the 'flags baddump' syntax should
					    be used rather than complemented CRCs.</li>
					</ul>
					<p class="guide">Important note: 00000000 CRCs should not be used in RomCenter datafiles to
					list non-dumped games. If a
					game hasn't been dumped then you can neither know the ROM names or their sizes.
					So, if a game hasn't been dumped yet then don't put it in a data file (after
					all, a data file is to identify and validate ROMs). If you want to document
					non-dumped games then provide a little text file with your data file! </p>



					<h2 class="guide">Disks </h2>



					<p class="guide">If an emulator uses disk images then you can also include this information
					in a CMPro data file. At this time it is not possible to put this information
					into RomCenter. </p>



					<h2 class="guide">Samples </h2>



					<p class="guide">If an emulator uses sound samples then you can also include this information
					in a CMPro data file. At this time it is not possible to put this information
					into RomCenter so a dedicated 'samples' data file is a sensible option if the
					samples are not packaged with the emulator itself.</p>

					<hr />

					<h1 class="guide">Creating a Data File </h1>

					<h2 class="guide">Use CMPro as Your Master Format! </h2>

					<p class="guide">I would seriously recommend that you do all of your data file creation in
					CMPro format and convert to RomCenter afterwards. The main reason for this is
					because is is easier to read, less prone to errors during editing and you will spot more mistakes
					too. Once a data file has been loaded into CMPro and is known to be free of
					errors it will convert to RomCenter format without problems. There is also a lot
					of additional information that can be stored in the CMPro data file format and
					you could not maintain it if RomCenter was your master format. </p>

					<h2 class="guide">Scanning Directories/ZIPs </h2>

					<p class="guide">The quickest way to create a data file from a set of ZIP files is to scan the
					ZIPs using a data file creation tool. The best approach nowadays is probably to
					use DatUtil: </p>

					<ul class="guide">
					  <li><a href="../Tools/DatUtil/DatUtil.php">DatUtil</a> has a directory/ZIP scanner facility that can save in CMPro and
					    RomCenter format. It will include CRC, MD5 and SHA1 information in the data
					    file that is generated.</li>
					</ul>
					<p class="guide">You should be cautious when scanning directories or ZIPs because you could
					end up including files that do not belong in the data file (readme files, jed
					files, etc.).
					The filenames could also be a mixture of upper and lower case whereas it has
					already been mentioned that use of lowercase is preferable. The mixed case
					can be fixed with the '-l' option of DatUtil though.</p>

					<h2 class="guide">Creating by Hand (i.e. Text Editor) </h2>

					<p class="guide">When creating a data file for an emulator where the games are already
					emulated by MAME (or any other emulator for that matter), it is generally a good
					idea to copy and paste the ROM details from the existing emulator's data file.
					This can either be done manually (copy and paste) or using the '-g' option of
					DatUtil. </p>

					<p class="guide">When maintaining data files for the CPS-2 emulators I tend to copy and paste
					games directly from the CPS-2 data file. After using the data file in CMPro/RomCenter
					I then check that the game works correctly in the emulator. </p>

					<h2 class="guide">Use Data File Headers</h2>

					<p class="guide">Both the CMPro and RomCenter data files have headers to specify details such as the
					emulator name, version number, data file author, etc. Both emulators use this
					information so you should fill it in correctly. An explanation of the various
					fields is within the <a href="CMPro.php">CMPro</a> and <a href="RomCenter.php">RomCenter</a>
					sections of this document.</p>

					<p class="guide">The header file of a CMPro data file can also specify the type ROM merging
					required by the emulator (non-merged, split-merged or fully-merged). RomCenter
					has a similar option since the introduction of the 2.50 format but it does not
					currently have any effect after the data file is first loaded.</p>

					<h2 class="guide">Include Merge Information</h2>

					<p class="guide">ROM merging has been discussed earlier in this document so make sure you
					do it correctly!</p>

					<hr />

					<h1 class="guide">Converting Between Formats</h1>
					<p class="guide">To convert data files from one format to another use DatUtil. This will
					convert all of the game information and header information for you and if your
					data files are correct there will be no problems at all with this procedure.</p>
					<p class="guide">When attempting to convert some RomCenter data files to CMPro format there
					are two common faults that can cause problems:</p>
					<ul class="guide">
					  <li>An incorrect version number in the header (2.00 used in a 1.92 format
					    datafile). This is an old issue an unlikely to affect anyone nowadays.</li>
					  <li>Some v1.92 data files are missing the &not;N&not;O fields before the size
					    field. Again, this was a long time ago and most RomCenter data files will
					    now be in 2.00 or 2.50 format.</li>
					</ul>
					<p class="guide">To get around these problems you must fix the old RomCenter file by hand.</p>
					<hr />
					<h1 class="guide">Testing</h1>
					<h2 class="guide">Checking Data Files for Errors</h2>
					<p class="guide">There are a variety of methods you can use to test your data file for
					syntactical, logical and lexical errors.</p>
					<ul class="guide">
					  <li>Load the CMPro format data file into CMPro itself as it will report some
					    logical errors (invalid parents, duplicated ROMs, etc.).</li>
					  <li>Run it through DatUtil, saving it in the original format (e.g. 'datutil -f
					    listinfo listinfo.dat'). DatUtil will report anything that looks odd in the data file and the
					    resultant data file should also match the original perfectly (do a text
					    comparison with your favourite diff tool). DatUtil will automatically do a
					    lot of cleansing and fixing so if the resultant data file is different, the
					    original contained errors and these will be reported in the DatUtil
					    log.</li>
					</ul>
					<h2 class="guide">Use MAMEDiff to Check Against the Emulator!</h2>
					<p class="guide">If the emulator can generate its own data file or the emulator is natively supported by
					MAMEDiff then make use of this fact. For example:</p>
					<ul class="guide">
					  <li> WinKawaks can generate a ClrMamePro data file. Use MAMEDiff to check your
					    data file against the one generated by WinKawaks (this can identify errors
					    in your data file and WinKawaks itself).</li>
					  <li>Nebula drivers are supported by DatUtil and MAMEDiff. Concatenate the drivers together
					    ('cat *.drv &gt;drivers.txt') then use MAMEDiff to compare them against your
					    data file ('mamediff drivers.txt calice.dat').</li>
					</ul>
					<p class="guide">If the emulator can't generate its own data file then you may have to resort
					to a hex editor if you want to check ROM names! Before using the hex editor,
					make sure that you decompress the executable if it has been packed with UPX (use
					the '-d' option of UPX).</p>
					<h2 class="guide">Build a ROM Set</h2>
					<p class="guide">Create a complete ROM set using CMPro then scan it with CMPro and/or
					RomCenter.</p>
					<h2 class="guide">Scan a ROM Set</h2>
					<p class="guide">Try scanning what you think is a clean ROM set using both CMPro and RomCenter.
					Both should scan the set perfectly and not produce contradictory results. Do not
					just scan with RomCenter as it is not as strict as CMPro and you may miss some
					errors in your data file as a result.</p>
					<h2 class="guide">Checking a ROM Set from the Emulator </h2>
					<p class="guide">Some emulators will include a ROM audit feature. Run this over the set
					that was produced by your data file. If there is no audit feature then the only
					way to be sure the sets are correct is to load every game! </p>
					<p class="guide">When using an emulator to check sets I would highly recommend that you use
					split-merged sets (assuming the emulator supports them). If a split-merged set
					works without problems then you can be sure that a fully-merged or non-merged
					set will also work (the reverse is not true however).</p>
					<h2 class="guide">Checking MAME Compatibility </h2>
					<p class="guide">This is not really necessary but can be of interest. If you wish to know
					whether an emulator is 100% MAME compatible then do these two tests using CMPro:</p>
					<ul class="guide">
					  <li>Scan a MAME set with the data file for the other emulator. This should
					    only report unneeded ROMs so if you disable 'show unneeded' in CMPro then the scan
					    results should be empty.</li>
					  <li>Use a MAME data file to scan a ROM set for the other emulator. This should
					    only report missing ROMs (so disable 'show missing' in CMPro for empty scan results)
					    and a few games may also be reported as 'wrong name' (when a similar game is
					    supported by the other emulator).</li>
					</ul>
					<p class="guide">Note: If either scan shows any other kind of errors (i.e. wrong filename for
					a ROM), then there is probably some incompatibility.</p>
					<hr />
					<h1 class="guide">Problems Encountered</h1>
					<p class="guide">Now and then you may encounter something that is difficult to represent
					accurately in a ROM manager data file.</p>
					<h2 class="guide">Missing Parents</h2>
					<p class="guide">Sometimes an emulator will support a clone (or clones) but not the parent
					game itself. If the emulator searches a parent directory/ZIP when loading ROMs
					then it may be advantageous to include the parent game in the data file as well
					(rather than make the clone(s) standalone games with no parent defined). The ROM
					manager will report more games than are actually supported by the emulator but
					it does have the big advantage that a MAME-compatible emulator can have a MAME compatible
					data file (whereas removing the parent/clone relationship would
					prevent this). This is common in the data files for the CPS-2 emulators because
					parent games are not always decrypted before the clones. </p>
					<h2 class="guide">Impossible Merging/CRC Conflicts</h2>
					<p class="guide">Occasionally an emulator may use the same filename for two ROMS in a parent
					and clone where the ROMs themselves differ (i.e. same name but different CRC).
					This would obviously cause a problem within a ROM manager because it is
					physically impossible to create a fully merged ROM set.
					The only way to solve this is to remove the parent/clone relationship until such
					time as the emulator is changed to use different ROM names. Alternatively, if
					the emulator can load ROMs by their CRC then you could rename the ROMs in your
					data file. </p>
					<p class="guide">Note: CMPro and RomCenter will report an error in any data file that contains
					conflicting CRCs in parents and clones. </p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

