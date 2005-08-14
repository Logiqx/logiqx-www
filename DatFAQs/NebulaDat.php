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

					<p><img src="NebulaDat.gif" width="134" height="40" alt="Nebula Dat" /></p>

					<p>Last updated: 17th July 2004</p>

					<h1 class="guide">Overview</h1>

					<p class="guide">Although Nebula can generate a RomCenter data file, there are a few good reasons
					for creating an alternative one:
					</p>

					<ul class="guide">
					  <li>The <a href="http://caesar.logiqx.com/">CAESAR</a>
					database needs year and manufacturer information to be included (neither of
					    which are supported by the RomCenter format).</li>
					  <li>SHA1 information can be added for ClrMamePro.</li>
					  <li>The Nebula drivers contain some mistakes that make accurate ROM
					    management difficult/impossible (due to CRC conflicts).</li>
					  <li>The data
					file generated by Nebula is not completely accurate for some reason. Amongst
					    other things, it contains
					    some unneeded
					    ROMs and also has some ROMs missing!</li>
					</ul>
					<p class="guide">DatUtil and MAMEDiff can understand Nebula drivers (i.e. the contents of the 'romdata'
					directory) but the facilities are only suitable for games that have 'romdata' drivers.
					It is therefore easiest to maintain a Nebula data file as two separate files; one
					containing the 'romdata' games and the other containing the remaining games.
					Each of the two files can then be validated using the techniques described later
					on in this document.</p>

					<p class="guide">There are a a variety stages involved in updating the Nebula data file :</p>

					<ul class="guide">
					  <li>Identifying the changes in a new version of Nebula.</li>
					  <li>Identifying and fixing problems in the Nebula drivers (necessary if a data
					    file is to be created that matches the drivers).</li>
					  <li>Validation of the data file for 'romdata' games against the 'romdata'
					    drivers themselves.</li>
					  <li>Validation of the data file for the remaining games against the Nebula
					    generated data file.</li>
					  <li>Combining the two data files ('romdata' games and the remaining games) then
					    adding SHA1 information.</li>
					  <li>Building ROMs and checking them within Nebula.</li>
					  <li>Just for interest, checking the accuracy of the RomCenter data file
					    generated by Nebula itself.</li>
					</ul>

					<p class="guide">Note: The batch scripts in this document use ports of the Unix commands cat,
					rm, and sed. When trying to get the batch scripts to work, cat.exe, rm.exe and
					sed.exe must be in the path (e.g. c:\windows).</p>

					<hr />

					<h1 class="guide">Identifying Changes in a New Version of Nebula</h1>

					<p class="guide">Identifying changes in a new version of Nebula can quickly be achieved using
					MAMEDiff. Firstly, the 'romdata' directories of the two versions must copied
					into directories such as 'Nebula v2.23d' and 'Nebula v2.24d'. After that, the
					following batch script can be used to compare them:</p>
<pre class="small">@ECHO OFF

SET NEBULA_VER_PREVIOUS=v2.23d
SET NEBULA_VER_CURRENT=v2.24

REM --- Concatenate all previous the drivers into one file (%NEBULA_VER_PREVIOUS%.tmp)

cat Nebula?%NEBULA_VER_PREVIOUS%/romdata/*.dat Nebula?%NEBULA_VER_PREVIOUS%/romdata/*.DAT &gt;%NEBULA_VER_PREVIOUS%.tmp

REM --- Concatenate all current the drivers into one file (%NEBULA_VER_CURRENT%.tmp)

cat Nebula?%NEBULA_VER_CURRENT%/romdata/*.dat Nebula?%NEBULA_VER_CURRENT%/romdata/*.DAT &gt;%NEBULA_VER_CURRENT%.tmp

REM --- Stage 1: Compare the previous and current drivers

mamediff -v %NEBULA_VER_PREVIOUS%.tmp %NEBULA_VER_CURRENT%.tmp
NOTEPAD mamediff.log
rm -f %NEBULA_VER_PREVIOUS%.tmp %NEBULA_VER_CURRENT%.tmp mamediff.log</pre>

					<p class="guide">This results in typical a MAMEDiff style output that shows the changes
					between the two versions. This only applies to 'romdata' games though, changes
					to the remaining games must be spotted in the release notes or within the
					emulator itself. Fortunately, Nebula only has about a dozen games
					that are not of the 'romdata' type though (compared to over 400 that are of
					the 'romdata' type).</p>

					<hr />

					<h1 class="guide">Fixing Problems in the Nebula Drivers</h1>

					<p class="guide">It has already been mentioned that a few problems exist in the Nebula
					drivers themselves and need fixing. The problems that currently exist are 'CRC conflicts' which
					basically means that two ROMs in a parent and clone have the same name but a
					different CRC. This causes a
					problem when trying to merge ROMs using a ROM manager like RomCenter or
					ClrMamePro. Such conflicts can be identified by using the following batch script:</p>

<pre class="small">@ECHO OFF

SET NEBULA_EMU_VER=v2.24

REM --- Convert drivers into a valid dat and check datutil.log

cat Nebula?%NEBULA_EMU_VER%/romdata/*.dat Nebula?%NEBULA_EMU_VER%/romdata/*.DAT &gt;tmp.dat
datutil -v -l tmp.dat
NOTEPAD datutil.log

rm -f tmp.dat datutil.dat datutil.log</pre>

					<p class="guide">The output will show problems that exist in the Nebula drivers. For example:</p>
<pre class="small">-------------------------------------------------------------------------------
Warning Summary
-------------------------------------------------------------------------------

ROM warnings:

    CRC Conflict

-------------------------------------------------------------------------------
Warning Details
-------------------------------------------------------------------------------

garoun - Garou: Mark of the Wolves (Decrypted C)
    ROM 253-v1.bin - CRC Conflict (263e388c)
    ROM 253-v2.bin - CRC Conflict (2c6bc7be)
    ROM 253-v3.bin - CRC Conflict (0425b27d)
    ROM 253-v4.bin - CRC Conflict (a54be8a9)

garoup - Garou: Mark of the Wolves (Prototype)
    ROM 253-v1.bin - CRC Conflict (274f3923)
    ROM 253-v2.bin - CRC Conflict (8f86dabe)
    ROM 253-v3.bin - CRC Conflict (05fd06cd)
    ROM 253-v4.bin - CRC Conflict (14984063)

garou - Garou: Mark of the Wolves
    ROM 253-v1.bin - CRC Conflict (263e388c)
    ROM 253-v2.bin - CRC Conflict (2c6bc7be)
    ROM 253-v3.bin - CRC Conflict (0425b27d)
    ROM 253-v4.bin - CRC Conflict (a54be8a9)

garouo - Garou: Mark of the Wolves (Set 2)
    ROM 253-v1.bin - CRC Conflict (263e388c)
    ROM 253-v2.bin - CRC Conflict (2c6bc7be)
    ROM 253-v3.bin - CRC Conflict (0425b27d)
    ROM 253-v4.bin - CRC Conflict (a54be8a9)

rbff2 - Real Bout Fatal Fury 2: The Newcomers
    ROM 240-p1.bin - CRC Conflict (b6969780)

rbff2a - Real Bout Fatal Fury 2: The Newcomers (Set 2)
    ROM 240-p1.bin - CRC Conflict (80e41205)

wh1 - World Heroes
    ROM 053-p1.bin - CRC Conflict (95b574cb)
    ROM 053-p2.bin - CRC Conflict (f198ed45)

wh1h - World Heroes (Alternate Set)
    ROM 053-p1.bin - CRC Conflict (ed29fde2)
    ROM 053-p2.bin - CRC Conflict (98f2b158)</pre>

					<p class="guide">Once the CRC conflicts have been identified, they need rectifying by
					re-naming the appropriate ROMs in the Nebula drivers. This will not affect
					Nebula itself since it loads ROMs by CRC (rather than loading them by name) but
					it will allow a good RomCenter/ClrMamePro data file to be created that matches the 'fixed'
					drivers.</p>

					<hr />
					<h1 class="guide">
					Validation of the Data File for 'ROMDATA' Games</h1>
					<p class="guide">DatUtil enables you to convert Nebula drivers into a ClrMamePro or RomCenter
					data file and by using this facility, you can create a data file for use with
					MAMEDiff. The only thing to bear in mind is that Nebula drivers do not
					always list all of the ROMs in clones (where ROMs are available in the
					parent) so the data file generated from the 'romdata' could be missing some ROMs. This
					only seems to happen for CPS-2 games but to keep the size of the MAMEDiff report
					down, it is recommended to exclude all merged ROMs in the clones. This is done for
					both the data file being validated and the data file that is generated directly
					from the 'romdata' directory by using the Unix 'grep' command.</p>
					<p class="guide">Comparison of the data file for 'romdata' games against the 'romdata' itself
					can therefore be done with the following batch script:</p>

<pre class="small">@ECHO OFF

SET NEBULA_EMU_VER=v2.24
SET NEBULA_DAT_VER=v2.24

REM --- Convert drivers into a valid dat, without merged ROMs

cat Nebula?%NEBULA_EMU_VER%/romdata/*.dat Nebula?%NEBULA_EMU_VER%/romdata/*.DAT &gt;tmp.dat
datutil -l tmp.dat &gt;nul
grep -v &quot; merge &quot; datutil.dat &gt;driver.dat
rm -f tmp.dat datutil.dat datutil.log

REM --- Remove merged ROMs from the 'logiqx' dat

grep -v &quot; merge &quot; &quot;Nebula %NEBULA_DAT_VER%.dat&quot; &gt;logiqx.dat

REM --- Compare the 'driver' dat against the 'logiqx' dat

mamediff -v driver.dat logiqx.dat
NOTEPAD mamediff.log
rm -f driver.dat logiqx.dat mamediff.log</pre>

					<p class="guide">If the data file for 'romdata' games is correct then MAMEDiff should report
					'No differences found'.</p>
					<p class="guide">You really need to understand what DatUtil and MAMEDiff do internally to know
					how and why the differences are picked up by this test. Basically though, the
					only errors that can go unnoticed are parent ROMs being listed in clones
					unnecessarily. This is because such ROMs would be treated as 'merged' ROMs and
					therefore excluded from the comparison (as a result of the ' grep' commands).
					However, they are fairly harmless because the ROM manager won't create them
					since they are merged/shared and will only be stored in the parent ZIP.</p>

					<hr />
					<h1 class="guide">Validation of the Data File for Non-'ROMDATA' Games</h1>
					<p class="guide">To validate the data file for games without 'romdata' drivers, the best thing
					that can be done is to compare them against the RomCenter data file generated by
					Nebula itself. This relies on the accuracy of the RomCenter data file but it is
					the best that can be achieved before trying the games in the emulator itself.
					The following script uses MAMEDiff to show ROMs that are in the hand created
					data file but not the Nebula generated one.</p>

<pre class="small">@ECHO OFF

SET NEBULA_EMU_VER=v2.24
SET NEBULA_DAT_VER=v2.24

REM --- Convert RomCenter.dat names to lower case.

datutil -l -o &quot;Nebula %NEBULA_EMU_VER%/NebulaCMPro.dat&quot; &quot;Nebula %NEBULA_EMU_VER%/NebulaRomCenter.dat&quot; &gt;nul

REM --- Compare the 'RomCenter' dat against the 'extra' dat

mamediff -d2 -r &quot;Nebula %NEBULA_EMU_VER%/NebulaCMPro.dat&quot; &quot;Nebula %NEBULA_DAT_VER% extra.dat&quot;
NOTEPAD mamediff.log
rm -f datutil.log mamediff.log mamediff.dat</pre>

					<p class="guide">What this comparison will show is ROMs in the hand created data file that are
					either incorrect (i.e. wrong name, size or CRC) and ROMs that are simply
					unneeded. Example output might be something like this:</p>

<pre>Supplementary dat for use with Nebula v2.24 extra
Use in addition to a perfect split-merged set for NebulaCMPro

Created with the MAMEDiff option(s): -d2 -r 

Neo-Geo Universe BIOS v1.2 [name: uni-bios]

  ROM: uni-bios.rom ( 131072 bytes, crc 4fa698e9)</pre>

					<p class="guide">By looking at the Nebula generated data file, uni-bios.rom can be seen to
					have a CRC of 00000000 (so that any new versions can be used) so this is not an
					error in the hand created data file.</p>
					<p class="guide">The only problems that can be missed by this check are ROMs that are
					completely missing from the hand created data file. Such problems must be
					identified by checking the games in the emulator itself, either by using the
					built-in ROM audit or by loading the game.</p>

					<hr />
					<h1 class="guide">Combining the Two Data Files and Adding SHA1 Information</h1>
					<p class="guide">Once the two data files have been updated to match the latest version of the
					emulator, they can be joined using the 'cat' command:</p>

<pre>cat &quot;Nebula v2.24.dat&quot; &quot;Nebula v2.24 extra.dat&quot; &gt;full.dat</pre>

					<p class="guide">If an SHA1 information is missing, it can be added using a command something
					like this:</p>

<pre>datutil -f listinfo -x -i &quot;E:\ROMs\Nebula&quot; full.dat</pre>

					<p class="guide">The resulting data file (called 'datutil.dat') can then be compared against
					the original data file and copied over the top if everything went OK.</p>

					<hr />
					<h1 class="guide">Building ROMs and Checking them Within Nebula</h1>
					<p class="guide">Now that the data file has been completed, a ROM set can be created using
					CMPro/RomCenter and checked within the emulator.</p>
					<p class="guide">With so many games, it is easiest to check each system one by one within the
					emulator (just look for non-green games). For example, checking PolyGameMaster
					games should show that they are all good and working:</p>
					<p class="guide"><img src="NebulaDat.png" width="698" height="424" alt=" Nebula Screenshot" /></p>

					<p class="guide">It is pretty unlikely that there will be a problem with the 'romdata' based
					games so pay particular attention to the systems that do not use 'romdata'.</p>

					<hr />
					<h1 class="guide">Checking the Accuracy of the Nebula-Generated Data File</h1>
					<p class="guide">Once the hand-created data file has been tested, it can be used to check the
					accuracy of the data file generated by Nebula itself. There is a big problem
					with the Neo-Geo resource ROMs in the data file generated by Nebula so the best thing is to just exclude them from
					the comparison using the 'grep' command. A suitable batch script for doing the
					comparison might be as follows:</p>

<pre class="small">@ECHO OFF

SET NEBULA_EMU_VER=v2.24
SET NEBULA_DAT_VER=v2.24

REM --- Convert ElSemi data file into CMPro format, removing Neo-Geo ROMs and making names lower case

grep -v sfix.sfx &quot;Nebula %NEBULA_EMU_VER%/NebulaRomCenter.dat&quot;|grep -v neo-geo.rom|grep -v sm1.sm1|grep -v 000-lo.lo &gt;elsemi.dat
datutil -l -o elsemi.dat elsemi.dat &gt;nul

REM --- Remove Neo-Geo ROMs from the Logiqx data file

grep -v sfix.sfx &quot;../Nebula %NEBULA_DAT_VER%.dat&quot;|grep -v neo-geo.rom|grep -v sm1.sm1|grep -v 000-lo.lo &gt;logiqx.dat

REM --- Compare the 'driver' dat against the 'logiqx' dat

mamediff -v elsemi.dat logiqx.dat
NOTEPAD mamediff.log
rm -f elsemi.dat logiqx.dat datutil.log mamediff.log</pre>

					<p class="guide">The output may look something like this and basically shows how the
					Nebula generated data file should be changed if it is to match the hand
					created data file:</p>

<pre class="small">-------------------- Games affected by set reorganisation --------------------

The King of Fighters '99: Millennium Battle (Non Encrypkof99 [name: kof99n - parent: kof99]
&lt; rom ( name //kf99_s1d.rom size 131072 crc 1b0133fe )
&gt; rom ( name kf99_s1d.rom size 131072 crc 1b0133fe sha1 7f8e743bc0c8384dec12ca7007d32b23fef8875d )

Sengoku 3 (Decrypted C) [name: sngoku3n - parent: sengoku3]
&lt; rom ( name   size 0 flags nodump )

Super Street Fighter 2 Turbo (Asia 940223) [name: ssf2ta - parent: ssf2]
&lt; rom ( name ssf.q05 merge ssf.q05 size 524288 crc 4770e7b7 )
&lt; rom ( name ssf.q06 merge ssf.q06 size 524288 crc 4e79c951 )
&lt; rom ( name ssf.q03 merge ssf.q03 size 524288 crc 695cc2ca )
&lt; rom ( name ssf.q08 merge ssf.q08 size 524288 crc 6f5a088c )
&lt; rom ( name ssf.q04 merge ssf.q04 size 524288 crc 9d9ebe32 )
&lt; rom ( name ssf.q07 merge ssf.q07 size 524288 crc cdd14313 )

Super Street Fighter 2 Turbo (US 940223) [name: ssf2tur1 - parent: ssf2]
&lt; rom ( name ssf.q05 merge ssf.q05 size 524288 crc 4770e7b7 )
&lt; rom ( name ssf.q06 merge ssf.q06 size 524288 crc 4e79c951 )
&lt; rom ( name ssf.q03 merge ssf.q03 size 524288 crc 695cc2ca )
&lt; rom ( name ssf.q08 merge ssf.q08 size 524288 crc 6f5a088c )
&lt; rom ( name ssf.q04 merge ssf.q04 size 524288 crc 9d9ebe32 )
&lt; rom ( name ssf.q07 merge ssf.q07 size 524288 crc cdd14313 )

Super Street Fighter 2 X (Jap 940223) [name: ssf2xj - parent: ssf2]
&lt; rom ( name ssf.q05 merge ssf.q05 size 524288 crc 4770e7b7 )
&lt; rom ( name ssf.q06 merge ssf.q06 size 524288 crc 4e79c951 )
&lt; rom ( name ssf.q03 merge ssf.q03 size 524288 crc 695cc2ca )
&lt; rom ( name ssf.q08 merge ssf.q08 size 524288 crc 6f5a088c )
&lt; rom ( name ssf.q04 merge ssf.q04 size 524288 crc 9d9ebe32 )
&lt; rom ( name ssf.q07 merge ssf.q07 size 524288 crc cdd14313 )

&lt; NeoGeo Universe BIOS [name: uni-bios]
&gt; Neo-Geo [name: neogeo]
&lt; rom ( name uni-bios.rom size 131072 flags nodump )

---------------------- Games requiring additional ROMs -----------------------

Puzzle Bobble  [name: pbobblen]
&gt; rom ( name 083-v3.bin size 1048576 crc 0840cbc4 sha1 1adbd7aef44fa80832f63dfb8efdf69fd7256a57 )
&gt; rom ( name 083-v4.bin size 524288 crc 0a548948 sha1 e1e4afd17811cb60401c14fbcf0465035165f4fb )

Puzzle Bobble (Set 2) [name: pbobblna - parent: pbobblen]
&gt; rom ( name 083-v3.bin merge 083-v3.bin size 1048576 crc 0840cbc4 sha1 1adbd7aef44fa80832f63dfb8efdf69fd7256a57 )
&gt; rom ( name 083-v4.bin merge 083-v4.bin size 524288 crc 0a548948 sha1 e1e4afd17811cb60401c14fbcf0465035165f4fb )

Super Street Fighter 2 Turbo (ETC 940223) [name: ssf2t - parent: ssf2]
&gt; rom ( name sfx.02 size 131072 crc 0022633f sha1 cab3afc79da53e3887eb1ccd1f4d19790728e6cd )
&gt; rom ( name sfx.09 size 524288 crc 642fae3f sha1 746df99b826b9837bba267104132161153c1daff )
&gt; rom ( name sfxe.08 size 524288 crc 74c24062 sha1 f3eca09e0544c6aa46b0c4bead2246ab1e9a97d9 )
&gt; rom ( name sfxex.08 size 524288 crc d7436ae9 sha1 1861f9c81ff2ffd956b94412ef6eb096f7558b96 )

Super Street Fighter 2 Turbo (Asia 940223) [name: ssf2ta - parent: ssf2]
&gt; rom ( name sfx.02 size 131072 crc 0022633f sha1 cab3afc79da53e3887eb1ccd1f4d19790728e6cd )
&gt; rom ( name ssf.19 merge ssf.19 size 2097152 crc 34e825c5 sha1 4d320fc96d1ef0b9928a8ce801734245a4c097a5 ) *already in MAME
&gt; rom ( name sfxa.08 size 524288 crc 39be596c sha1 f7ab80e64cbb703535dd39b875273eefa57df489 )
&gt; rom ( name ssf.15 merge ssf.15 size 2097152 crc 5eb703af sha1 4b302dbb66e8a5c2ad92798699391e981bada427 ) *already in MAME
&gt; rom ( name sfx.09 size 524288 crc 642fae3f sha1 746df99b826b9837bba267104132161153c1daff )
&gt; rom ( name sfxax.08 size 524288 crc 7c5fd202 sha1 e08db90a71528b8479de820cd6d6a7304de9775c )
&gt; rom ( name ssf.13 merge ssf.13 size 2097152 crc cf94d275 sha1 bf2a6d98a656d1cb5734da7836686242d3211137 ) *already in MAME
&gt; rom ( name ssf.17 merge ssf.17 size 2097152 crc ffa60e0f sha1 b21b1c749a8241440879bf8e7cb33968ccef97e5 ) *already in MAME

Super Street Fighter 2 Turbo (US 940223) [name: ssf2tur1 - parent: ssf2]
&gt; rom ( name sfx.02 size 131072 crc 0022633f sha1 cab3afc79da53e3887eb1ccd1f4d19790728e6cd )
&gt; rom ( name ssf.19 merge ssf.19 size 2097152 crc 34e825c5 sha1 4d320fc96d1ef0b9928a8ce801734245a4c097a5 ) *already in MAME
&gt; rom ( name ssf.15 merge ssf.15 size 2097152 crc 5eb703af sha1 4b302dbb66e8a5c2ad92798699391e981bada427 ) *already in MAME
&gt; rom ( name sfx.09 size 524288 crc 642fae3f sha1 746df99b826b9837bba267104132161153c1daff )
&gt; rom ( name sfxu.08 size 524288 crc b3c71810 sha1 b51515f4f4aee5bbbfc8b79372d0bc6e0c140912 )
&gt; rom ( name ssf.13 merge ssf.13 size 2097152 crc cf94d275 sha1 bf2a6d98a656d1cb5734da7836686242d3211137 ) *already in MAME
&gt; rom ( name sfxux.08 size 524288 crc fa2396a6 sha1 80da9a5355eebd9dc2f3846020338966a1de596f )
&gt; rom ( name ssf.17 merge ssf.17 size 2097152 crc ffa60e0f sha1 b21b1c749a8241440879bf8e7cb33968ccef97e5 ) *already in MAME

Super Street Fighter 2 X (Jap 940223) [name: ssf2xj - parent: ssf2]
&gt; rom ( name sfx.02 size 131072 crc 0022633f sha1 cab3afc79da53e3887eb1ccd1f4d19790728e6cd )
&gt; rom ( name sfxj.08 size 524288 crc 2de76f10 sha1 8cbe96dfeaa41306caa2819b82272ce3b0b9f926 )
&gt; rom ( name ssf.19 merge ssf.19 size 2097152 crc 34e825c5 sha1 4d320fc96d1ef0b9928a8ce801734245a4c097a5 ) *already in MAME
&gt; rom ( name ssf.15 merge ssf.15 size 2097152 crc 5eb703af sha1 4b302dbb66e8a5c2ad92798699391e981bada427 ) *already in MAME
&gt; rom ( name sfx.09 size 524288 crc 642fae3f sha1 746df99b826b9837bba267104132161153c1daff )
&gt; rom ( name sfxjx.08 size 524288 crc 656a9858 sha1 58e2364a945cc0a52079cb170e72abd436660610 )
&gt; rom ( name ssf.13 merge ssf.13 size 2097152 crc cf94d275 sha1 bf2a6d98a656d1cb5734da7836686242d3211137 ) *already in MAME
&gt; rom ( name ssf.17 merge ssf.17 size 2097152 crc ffa60e0f sha1 b21b1c749a8241440879bf8e7cb33968ccef97e5 ) *already in MAME

------------------------------- Game additions -------------------------------

&gt; Neo-Geo Universe BIOS v1.2 [name: uni-bios]
&gt; Vampire Hunter 2: Darkstalkers Revenge (Japan 970913) [name: vhunt2r1]</pre>

					<p class="guide">As can be seen above, there are a variety of unneeded ROMs, missing ROMs,
					missing games and peculiarities in the Nebula generated data file. Brief
					explanations are as follows:</p>

					<ul class="guide">
					  <li>Incorrect ROMs in clones of ssf2 (ssf2t, ssf2ta, ssf2tur1 and ssf2xj).</li>
					  <li>Missing sound ROMs in pbobblen and pbobblna.</li>
					  <li>The game vhuntr1 is missing (perhaps because the driver refers to a
					    non-existent parent called vhunt).</li>
					  <li>A badly named ROM in kof99n (it looks like there has been an attempt to
					    comment it out).</li>
					  <li>A strange ROM entry in sngoku3n.</li>
					</ul>
					<p class="guide">Note: The uni-bios difference is due to the fact that Nebula does not specify
					a CRC for uni-bios.rom but the hand-created data file does. It is therefore not
					an error in either data file.</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

