<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - CMPro Data File Format</title>' . LF . LF;

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

					<p><img src="CMPro.png" width="145" height="40" alt="CMPro Dats" /></p>

					<p>Last updated: 30th June 2004</p>

					<h1 class="guide">General Layout</h1>

					<p class="guide">The first suggestion I'll make is the use of indentation (using a single
					tab) and blank lines (to separate games). This means that there is consistency
					across data files and it also improves their readability. e.g.</p>

<pre>game (
	name invaders
	description &quot;Space Invaders&quot;
	year 1978
	manufacturer &quot;Midway&quot;
	rom ( name invaders.h size 2048 crc 734f5ad8 )
	rom ( name invaders.g size 2048 crc 6bfaca4a )
	rom ( name invaders.f size 2048 crc 0ccead96 )
	rom ( name invaders.e size 2048 crc 14e538b0 )
)

game (
	name invadpt2
	description &quot;Space Invaders Part II (Taito)&quot;
	year 1980
	manufacturer &quot;Taito&quot;
	rom ( name pv.01 size 2048 crc 7288a511 )
	rom ( name pv.02 size 2048 crc 097dd8d5 )
	rom ( name pv.03 size 2048 crc 1766337e )
	rom ( name pv.04 size 2048 crc 8f0e62e0 )
	rom ( name pv.05 size 2048 crc 19b505e9 )
	rom ( name pv06_1.bin size 1024 crc a732810b )
	rom ( name pv07_2.bin size 1024 crc 2c5b91cb )
)</pre>

					<p class="guide">You should also note that the use of double quotes (&quot;s) is far more than just formatting.
					Like any programming language you must put quotes around anything that contains
					spaces. This applies to file names (games and ROMs), descriptions, manufacturers
					and the clrmamepro header items. Descriptions and manufacturers should always
					use double quotes whether or not they contain spaces.</p>

					<hr />

					<h1 class="guide">Data File Header</h1>

					<p class="guide">CMPro data files use a 'clrmamepro' element to specify details such as the
					emulator name, description, category and the data file version.</p>

<pre>clrmamepro (
	name Calice
	description &quot;Calice v0.3.2&quot;
	category &quot;Capcom CPS-1 and CPS-2&quot;
	version 20010531
	author &quot;Logiqx, http://www.logiqx.com/&quot;
)</pre>

					<p class="guide">Valid elements are:</p>

					<table class="guide">
					  <tr>
					    <th>CMPro<br />Element</th>
					    <th>RomCenter<br />Equivalent</th>
					    <th>Description</th>
					  </tr>
					  <tr>
					    <td>name</td>
					    <td>EMULATOR/refname</td>
					    <td>Name of the emulator without a version number. This field is
						used by the update feature of the CMPro profiler.</td>
					  </tr>
					  <tr>
					    <td>description</td>
					    <td>EMULATOR/version</td>
					    <td>Name of the emulator with a version number. This is the name
						displayed by CMPro.</td>
					  </tr>
					  <tr>
					    <td>category</td>
					    <td>CREDITS/comment</td>
					    <td>General comment about the emulator (e.g. the systems or game types it
						supports).</td>
					  </tr>
					  <tr>
					    <td>version</td>
					    <td>CREDITS/version</td>
					    <td>Version number of the data file. I would recommend using something
						like a date encoded version number (YYYYMMDD is preferable to DDMMYYYY
						as it can be sorted and is unambiguous).</td>
					  </tr>
					  <tr>
					    <td>author</td>
					    <td>CREDITS/author</td>
					    <td>Your name and e-mail/web address.</td>
					  </tr>
					  <tr>
					    <td>forcemerging</td>
					    <td>DAT/split<br />DAT/merge</td>
					    <td>To force CMPro to use a particular merging format (none/split/full).
						Only do this if the emulator doesn't allow all three of the modes!</td>
					  </tr>
					  <tr>
					    <td>forcezipping</td>
					    <td>N/A</td>
					    <td>To force CMPro to use ZIPs (yes) or directories (no). Only do this if
						the emulator only supports one of these types!</td>
					  </tr>
					</table>

					<br/>

					<hr />

					<h1 class="guide">Games</h1>

					<h2 class="guide">Year and Manufacturer</h2>

					<p class="guide">There are two 'semi-optional' fields that can be included for each game;
					'year' and 'manufacturer'. However, CMPro displays the
					manufacturer in the scanner window so it isn't really optional! For the sake of
					completeness I would recommend you include year and manufacturer. e.g.</p>

<pre>game (
	name invaders
	description &quot;Space Invaders&quot;
	year 1978
	manufacturer &quot;Midway&quot;
	rom ( name invaders.h size 2048 crc 734f5ad8 )
	rom ( name invaders.g size 2048 crc 6bfaca4a )
	rom ( name invaders.f size 2048 crc 0ccead96 )
	rom ( name invaders.e size 2048 crc 14e538b0 )
)</pre>

					<h2 class="guide">Clones and Merging</h2>

					<p class="guide">There are two fields that relate to the merging of ROMs; 'cloneof' and 'romof'.
					In MAME
					the 'cloneof' field represents a notional link between the two games and the
					'romof' field represents that the ROMs themselves can be shared. CMPro actually ignores
					the 'romof' field and uses the 'cloneof' value to determine how the ROMs can be shared. However, you should use
					the MAME meanings of 'cloneof and 'romof' both for the sake of
					clarity and to allow faultless conversions between CMPro and RomCenter formats. If you don't
					use these fields correctly then you cannot guarantee that your data file will
					work as expected in CMPro and RomCenter for all three merge types.</p>

					<hr />

					<h1 class="guide">ROMs</h1>

					<p class="guide">An example ROM element is as follows:</p>

<pre>	rom ( name invaders.h size 2048 crc 734f5ad8 )</pre>

					<p class="guide">General points to bear in mind:</p>
					<ul class="guide">
					  <li>Using indentation makes your data file more readable (use a single tab for
					    the ROM lines).</li>
					  <li>The order of the sub-elements should be 'name', then 'size', then 'crc',
					    then 'sha1', then 'md5', then 'region', then 'flags'.</li>
					  <li>CRCs should be 8 characters long (use leading zeros if necessary), they
					    should be lower case and not use the prefix '0x'. All of these points are for the sake of
					    consistency and readability. The same applies to SHA1 and MD5 but they are
					    40 and 32 characters long (respectively).</li>
					  <li>It is essential to use quotes around the name if it contains spaces.  </li>
					  <li>If copying and pasting from the MAME listinfo output then remove the 'offs'
					    sub-elements. An easy way to achieve this is to run the data file through
					    DatUtil.</li>
					</ul>

					<p class="guide">ROM merging is defined using the 'merge' keyword. e.g.</p>

<pre>game (
	name sisv
	description &quot;Space Invaders (SV Version)&quot;
	year 1978
	manufacturer &quot;Taito&quot;
	cloneof invaders
	romof invaders
	rom ( name sv0h.bin size 1024 crc 86bb8cb6 )
	rom ( name sv02.bin size 1024 crc 0e159534 )
	rom ( name invaders.g <b>merge invaders.g</b> size 2048 crc 6bfaca4a )
	rom ( name invaders.f <b>merge invaders.f</b> size 2048 crc 0ccead96 )
	rom ( name tv04.m1 size 2048 crc cd2c67f6 )
)</pre>

					<p class="guide">In actual fact CMPro works out the 'merge' sub-element itself by checking if
					a ROM of the same name and CRC exists in parent (specified by the 'cloneof'
					element). However, in order for your dat to work correctly in RomCenter it must
					specify the 'merge' sub-element correctly. Always specify the merging
					information correctly or you cannot guarantee that your data file will
					work correctly in CMPro and RomCenter for all three merge types. In order to
					check that merge information is correct, run the data file through DatUtil and
					check the log file to see if DatUtil found issues with your merging.</p>

					<hr />

					<h1 class="guide">Disks</h1>

					<p class="guide">CMPro includes disk support but at this time, RomCenter does not. 
					MD5 and SHA1 do not both need to be specified in the data file:</p>

<pre>game (
	name jdredd
	romof acpsx
	description &quot;Judge Dredd (Rev C Dec. 17 1997)&quot;
	year 1996
	manufacturer &quot;Acclaim&quot;
	rom ( name coh-1000a.353 merge coh-1000a.353 size 524288 crc 8d8d0764 )
	rom ( name j-dread.u36 size 131072 crc 37addbf9 )
	rom ( name j-dread.u35 size 131072 crc c1e17191 )
<b>	disk ( name jdreddc sha1 83ed8df25d100b1c060f4dde2f162ba31803db7d )
</b>)</pre>

					<hr />

					<h1 class="guide">Samples</h1>

					<p class="guide">CMPro includes sample support but it will only check that a sample of the
					correct name exists. Samples are specified as follows:</p>

<pre>game (
	name invaders
	description &quot;Space Invaders&quot;
	year 1978
	manufacturer &quot;Midway&quot;
	rom ( name invaders.h size 2048 crc 734f5ad8 )
	rom ( name invaders.g size 2048 crc 6bfaca4a )
	rom ( name invaders.f size 2048 crc 0ccead96 )
	rom ( name invaders.e size 2048 crc 14e538b0 )
	<b>sample 1.wav
	sample 2.wav</b>
)</pre>

					<p class="guide">Sample sharing is achieved using the 'sampleof' keyword:</p>

<pre>game (
	name invad2ct
	description &quot;Space Invaders II (Midway, cocktail)&quot;
	year 1980
	manufacturer &quot;Midway&quot;
	rom ( name invad2ct.h size 2048 crc 51d02a71 )
	rom ( name invad2ct.g size 2048 crc 533ac770 )
	rom ( name invad2ct.f size 2048 crc d1799f39 )
	rom ( name invad2ct.e size 2048 crc 291c1418 )
	rom ( name invad2ct.b size 2048 crc 8d9a07c4 )
	rom ( name invad2ct.a size 2048 crc efdabb03 )
	<b>sampleof invaders</b>
	sample 1.wav
	sample 2.wav
)</pre>

					<hr />

					<h1 class="guide">Resources</h1>
					<p class="guide">Resources are used by MAME for the sharing of common ROMs for a particular
					system (e.g. NeoGeo, PlayChoice-10, Deco Cassette, CVS).</p>

<pre>resource (
	name neogeo
	description &quot;Neo Geo BIOS&quot;
	year 1990
	manufacturer &quot;SNK&quot;
	rom ( name neo-geo.rom size 131072 crc 9036d879 )
	rom ( name ng-sm1.rom size 131072 crc 97cf998b )
	rom ( name ng-sfix.rom size 131072 crc 354029fc )
)</pre>

					<p class="guide">The ROM details for
					resources are actually built into CMPro (they are in the 'engine.cfg' file) but
					it is good practise to include them in your data file for the sake of
					completeness (and also essential for the RomCenter version of your data file). When a game uses ROMs from a resource it should not specify that
					it is a clone of the resource (via the 'cloneof' element), it should just
					specify it shares ROMs (through the 'romof' element). Clones of games that are
					on the same system should specify their parent in both the 'cloneof' and 'romof'
					elements as it is the parent itself that specifies the resource (e.g. 'sengokh'
					in MAME has 'cloneof' and 'romof' specified as 'sengoku').</p>

<pre>game (
	name sengoku
	description &quot;Sengoku / Sengoku Denshou (set 1)&quot;
	year 1991
	manufacturer &quot;SNK&quot;
	romof neogeo
)

game (
	name sengokh
	description &quot;Sengoku / Sengoku Denshou (set 2)&quot;
	year 1991
	manufacturer &quot;SNK&quot;
	cloneof sengoku
	romof sengoku
)</pre>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

