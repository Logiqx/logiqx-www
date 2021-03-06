<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Nebula Jukebox Dat</title>' . LF . LF;

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

					<p><img src="NebulaJukeboxDat.png" width="239" height="40" alt="Nebula Jukebox" /></p>

					<p>Last updated: 17th July 2004</p>

					<h1 class="guide">Overview</h1>

					<p class="guide">Creation and maintenance of the Nebula Jukebox data file is very similar to
					that of the standard Nebula data file (reading the document explaining
					Nebula is recommended before reading this one). As with Nebula, the data file
					for Nebula Jukebox is also maintained as two files;
					one for 'romdata' based games and one for the remaining games. The main
					difference is that when using the 'romdata' features of DatUtil, the -j option
					should be used so that only Z80 and sound ROMs are processed. When using the 'romdata'
					features of MAMEDiff, the 'romdata' must go through the -j option of DatUtil
					first.</p>

					<p class="guide">When updating the Nebula Jukebox data file, the same stages are involved as
					for Nebula:</p>

					<ul class="guide">
					  <li>Identifying the changes in a new version of Nebula Jukebox.</li>
					  <li>Identifying and fixing problems in the Nebula Jukebox drivers.</li>
					  <li>Validation of the data file for 'romdata' games against the 'romdata'
					    drivers themselves.</li>
					  <li>Validation of the data file for the remaining games against the Nebula
					    Jukebox data file (included with the emulator).</li>
					  <li>Combining the two data files ('romdata' games and the remaining games) then
					    adding SHA1 information.</li>
					  <li>Building ROMs and checking them within Nebula Jukebox.</li>
					</ul>

					<p class="guide">Note: The batch scripts in this document use ports of the Unix commands cat,
					rm, and sed. When trying to get the batch scripts to work, cat.exe, rm.exe and
					sed.exe must be in the path (e.g. c:\windows).</p>

					<hr />

					<h1 class="guide">Identifying Changes in a New Version of Nebula Jukebox</h1>

					<p class="guide">Identifying changes in a new version of Nebula Jukebox can quickly be achieved using
					MAMEDiff. Firstly, the 'romdata' directories of the two versions must copied
					into directories such as 'Nebula Jukebox v2.8' and 'Nebula Jukebox v2.9'. After that, the
					following batch script can be used to compare them:</p>

<pre class="small">@ECHO OFF

SET NEBULA_VER_PREVIOUS=v2.8
SET NEBULA_VER_CURRENT=v2.9

REM --- Concatenate all previous the drivers into one file (%NEBULA_VER_PREVIOUS%.tmp)

cat Nebula?Jukebox?%NEBULA_VER_PREVIOUS%/romdata/*.dat Nebula?Jukebox?%NEBULA_VER_PREVIOUS%/romdata/*.DAT &gt;%NEBULA_VER_PREVIOUS%.tmp
datutil -j -o %NEBULA_VER_PREVIOUS%.tmp %NEBULA_VER_PREVIOUS%.tmp &gt;nul

REM --- Concatenate all current the drivers into one file (%NEBULA_VER_CURRENT%.tmp)

cat Nebula?Jukebox?%NEBULA_VER_CURRENT%/romdata/*.dat Nebula?Jukebox?%NEBULA_VER_CURRENT%/romdata/*.DAT &gt;%NEBULA_VER_CURRENT%.tmp
datutil -j -o %NEBULA_VER_CURRENT%.tmp %NEBULA_VER_CURRENT%.tmp &gt;nul

REM --- Stage 1: Compare the previous and current drivers

mamediff -v %NEBULA_VER_PREVIOUS%.tmp %NEBULA_VER_CURRENT%.tmp
NOTEPAD mamediff.log
rm -f %NEBULA_VER_PREVIOUS%.tmp %NEBULA_VER_CURRENT%.tmp datutil.log mamediff.log</pre>

					<p class="guide">This results in typical a MAMEDiff style output that shows the changes
					between the two versions. This only applies to 'romdata' games though and changes
					to the remaining games must be spotted in the release notes or within the
					emulator itself. Nebula Jukebox has slightly under 40 games
					that are not of the 'romdata' type, compared to over 210 that are of
					the 'romdata' type.</p>

					<hr />

					<h1 class="guide">Fixing Problems in the Nebula Drivers</h1>

					<p class="guide">There are no CRC conflicts in the Nebula Jukebox drivers as there are in
					Nebula itself (actually, it is not even possible because Nebula Jukebox does not
					have any clones). The script that confirms this is as follows:</p>

<pre class="small">@ECHO OFF

SET NEBULA_EMU_VER=v2.9

REM --- Convert drivers into a valid dat and check datutil.log

cat Nebula?Jukebox?%NEBULA_EMU_VER%/romdata/*.dat Nebula?Jukebox?%NEBULA_EMU_VER%/romdata/*.DAT &gt;tmp.dat
datutil -v -l -j tmp.dat
NOTEPAD datutil.log

rm -f tmp.dat datutil.dat datutil.log</pre>

					<p class="guide">However, a problem does occur in Nebula Jukebox v2.9 and affects the CRCs in the znsound 'romdata'. Before attempting to create a ClrMamePro/RomCenter
					data file, these errors should be corrected. The differences after fixing these
					problems are as follows (as reported by MAMEDiff):</p>

<pre class="small">-------------------- Games affected by set reorganisation --------------------

Kikaioh [name: kikaioh]
&lt; rom ( name kio-02 size 131072 flags nodump )
&lt; rom ( name kio-03 size 131072 flags nodump )

Rival Schools [name: rvschool]
&lt; rom ( name jst-02 size 131072 crc 49ff4446 )
&lt; rom ( name jst-03 size 131072 crc 49ff4446 )
&lt; rom ( name jst-01m size 4194304 crc bed42f03 )

Street Fighter EX [name: sfex]
&lt; rom ( name sfe-02 size 131072 crc 49ff4446 )
&lt; rom ( name sfe-03 size 131072 crc 49ff4446 )
&lt; rom ( name sfe-01m size 4194304 crc bed42f03 )

Street Fighter EX 2 Plus [name: sfex2p]
&lt; rom ( name sf2p-02 size 131072 crc 49ff4446 )
&lt; rom ( name sf2p-03 size 131072 crc 49ff4446 )
&lt; rom ( name sf2p-01 size 4194304 crc bed42f03 )

Star Gladiator 2 [name: sg2j]
&lt; rom ( name sg2-02 size 131072 crc 49ff4446 )
&lt; rom ( name sg2-03 size 131072 crc 49ff4446 )
&lt; rom ( name sg2-01m size 4194304 crc bed42f03 )

Toshinden 2 [name: ts2j]
&lt; rom ( name ts2-02 size 131072 crc 49ff4446 )
&lt; rom ( name ts2-01 size 4194304 crc bed42f03 )

---------------------- Games requiring additional ROMs -----------------------

Kikaioh [name: kikaioh]
&gt; rom ( name kio-03 size 131072 crc 0b313ae5 )
&gt; rom ( name kio-02 size 131072 crc 174309b3 )

Rival Schools [name: rvschool]
&gt; rom ( name jst-02 size 131072 crc 7809e2c3 )
&gt; rom ( name jst-03 size 131072 crc 860ff24d )
&gt; rom ( name jst-01m size 4194304 crc 9a7c98f9 )

Street Fighter EX [name: sfex]
&gt; rom ( name sfe-02 size 131072 crc 1908475c )
&gt; rom ( name sfe-03 size 131072 crc 95c1e2e0 )
&gt; rom ( name sfe-01m size 4194304 crc f5afff0d )

Street Fighter EX 2 Plus [name: sfex2p]
&gt; rom ( name sf2p-01 size 4194304 crc 14a5bb0e )
&gt; rom ( name sf2p-02 size 131072 crc 3705de5e )
&gt; rom ( name sf2p-03 size 131072 crc 6ae828f6 )

Star Gladiator 2 [name: sg2j]
&gt; rom ( name sg2-02 size 131072 crc 415ee138 )
&gt; rom ( name sg2-03 size 131072 crc 43806735 )
&gt; rom ( name sg2-01m size 4194304 crc 643ea27b )

Toshinden 2 [name: ts2j]
&gt; rom ( name ts2-02 size 131072 crc 2f45c461 )
&gt; rom ( name ts2-01 size 4194304 crc d7a505e0 )</pre>

					<hr />
					<h1 class="guide">
					Validation of the Data File for 'ROMDATA' Games</h1>
					<p class="guide">DatUtil enables you to convert Nebula Jukebox drivers into a ClrMamePro or RomCenter
					data file and by using this facility, you can create a data file for use with
					MAMEDiff. Comparison of the data file for 'romdata' games against the 'romdata' itself
					can therefore be done with the following batch script:</p>

<pre class="small">@ECHO OFF

SET NEBULA_EMU_VER=v2.9
SET NEBULA_DAT_VER=v2.9

REM --- Convert drivers into a valid dat

cat Nebula?Jukebox?%NEBULA_EMU_VER%/romdata/*.dat Nebula?Jukebox?%NEBULA_EMU_VER%/romdata/*.DAT &gt;tmp.dat
datutil -l -j -o driver.dat tmp.dat &gt;nul
rm -f tmp.dat datutil.log

REM --- Compare the 'driver' dat against the 'logiqx' dat

mamediff -v driver.dat &quot;Nebula Jukebox %NEBULA_DAT_VER%.dat&quot;
NOTEPAD mamediff.log
rm -f driver.dat mamediff.log</pre>

					<p class="guide">If the data file for 'romdata' games is correct then MAMEDiff should report
					'No differences found'.</p>

					<hr />
					<h1 class="guide">Validation of the Data File for Non-'ROMDATA' Games</h1>
					<p class="guide">To validate the data file for games without 'romdata' drivers, the best thing
					that can be done is to compare them against the RomCenter data file that comes
					with
					Nebula Jukebox. This relies on the accuracy of the RomCenter data file but it is
					the best that can be achieved before trying the games in the emulator itself.
					The following script uses MAMEDiff to show ROMs that are in the hand created
					data file but not the Nebula Jukebox supplied one.</p>

<pre class="small">@ECHO OFF

SET NEBULA_EMU_VER=v2.9
SET NEBULA_DAT_VER=v2.9

REM --- Convert RomCenter.dat names to lower case.

datutil -l -o &quot;Nebula Jukebox %NEBULA_EMU_VER%/CMPro.dat&quot; &quot;Nebula Jukebox %NEBULA_EMU_VER%/RomCenter.dat&quot; &gt;nul

REM --- Compare the 'RomCenter' dat against the 'extra' dat

mamediff -d2 -r &quot;Nebula Jukebox %NEBULA_EMU_VER%/CMPro.dat&quot; &quot;Nebula Jukebox %NEBULA_DAT_VER% extra.dat&quot;
NOTEPAD mamediff.log
rm -f datutil.log mamediff.log mamediff.dat</pre>

					<p class="guide">What this comparison will show is ROMs in the hand created data file that are
					either incorrect (i.e. wrong name, size or CRC) and ROMs that are simply
					unneeded. This should simply say 'No supplement required'.</p>
					<p class="guide">The only problems that can be missed by this check are ROMs that are
					completely missing from the hand created data file. Such problems must be
					identified by checking the games in the emulator itself, by loading each non-'romdata'
					game in turn!</p>

					<hr />
					<h1 class="guide">Combining the Two Data Files and Adding SHA1 Information</h1>
					<p class="guide">Once the two data files have been updated to match the latest version of the
					emulator, they can be joined using the 'cat' command:</p>

<pre>cat &quot;Nebula v2.9.dat&quot; &quot;Nebula v2.9 extra.dat&quot; &gt;full.dat</pre>

					<p class="guide">If an SHA1 information is missing, it can be added using a command something
					like this:</p>

<pre>datutil -f listinfo -x -i &quot;E:\ROMs\Nebula Jukebox&quot; full.dat</pre>

					<p class="guide">The resulting data file (called 'datutil.dat') can then be compared against
					the original data file and copied over the top if everything went OK.</p>

					<hr />
					<h1 class="guide">Building ROMs and Checking them Within Nebula Jukebox</h1>
					<p class="guide">Now that the data file has been completed, a ROM set can be created using
					CMPro/RomCenter and checked within the emulator.</p>
					<p class="guide">The games that are 'romdata' based should be pretty much guaranteed to be
					correct because of the checks already done but non-'romdata' games must be
					checked one by one! The Konami, PGM and Sega games must therefore be loaded to
					check that the data file is correct. This basically means double-clicking each
					game one by one. If any ROMs are missing, Nebula Jukebox will report what they
					are in a console window.</p>
					<p class="guide"><img src="NebulaJukeboxDat.png" width="716" height="568" alt="Nebula Jukebox Snapshot" /></p>

					<hr />
					<h1 class="guide">About the Data File Provided with Nebula Jukebox</h1>
					<p class="guide">The data file provided with Nebula Jukebox v2.9 does not contain CPS or
					Neo-Geo games. Also, the games that it does include specify all ROMs (e.g.
					program ROMs, graphics ROMs, etc). It serves as a useful reference for checking
					non-'romdata' games as decribed above but should not be used to create a Nebula
					Jukebox ROM collection.</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

