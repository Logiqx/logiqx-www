<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Lesson 1: The Dat Environment</title>' . LF . LF;

			// Include standard <head> metadata

			include('../../Resources/Head.php');
		?>
	</head>
	<body>
		<?php
			// The main page content is a 3 column table (left column is the menu, right one is the news)

			echo '<!-- Logiqx pages are basically a table with one row and three columns -->' . LF . LF;

			include('../../Resources/Top.php');
		?>

					<h1 class="guide">Lesson 1: The Dat Environment</h1>

					<h2 class="guide">MAME and CPS-2 creation used as an example</h2>

					<p class="guide"><b>(Posted on the list by Logiqx on 13th September 2002)</b></p>

					<p class="guide">After completing lesson 0, you will have these things set up:</p>

					<ul class="guide">
					    <li>CygWin, with the 'bin' directory in your path.</li>
					    <li>A Logiqx directory, with 'Bin' directory in your path.</li>
					    <li>A %LOGIQX% variable that points to the Logiqx directory.</li>
					</ul>

					<p class="guide">Your Logiqx 'Bin' directory should look something like this:</p>

<pre>
   411 Oct  2 10:17 check_merging.sh
 68022 May 20 20:26 datutil.exe
  1267 Dec  8  2000 filechk.c
 13106 Sep 17 09:16 filechk.exe
   455 Sep 12 13:41 fixdups.c
 10941 Sep 12 13:41 fixdups.exe
143360 Sep  6 18:04 libexpat.dll
 25935 May 20 20:25 mamediff.exe
 16384 Sep  5 16:03 sabcmd.exe
   277 Sep 17 09:42 sabcmd.txt
253952 Sep  5 16:03 sablot.dll
</pre>

					<p class="guide">Okay, lets get on on with the lesson then!</p>

					<hr />

					<h2 class="guide">PART 1 - Download the lesson!</h2>

					<p class="guide">1) Download <a href="zip/lesson1.zip">http://www.logiqx.com/team/download/lesson1.zip</a>
					(3170KB).</p>

					<p class="guide">2) Extract it into your Logiqx directory. This will
					create a 'Dats' and 'Dats_RC' directory.</p>

					<hr />

					<h2 class="guide">PART 2 - The directory structure</h2>

					<p class="guide">The directory structure contained in lesson 1 is not just for
					demonstration purposes, it is a fully functioning Logiqx set up!
					It is just a little smaller than mine since it only contains the
					stuff needed for MAME and CPS-2 though.</p>

<pre>
%LOGIQX% 
&nbsp;&nbsp; | 
&nbsp;&nbsp; +--Dats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ClrMamePro dats 
&nbsp;&nbsp; |&nbsp; | 
&nbsp;&nbsp; |&nbsp; +--Recent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recent dats 
&nbsp; &nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; | 
 &nbsp; |&nbsp;&nbsp;&nbsp;&nbsp; +--Multi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Multi emulators (MAME, Kawaks, etc) 
&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp; | 
&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp; +--MAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Files needed to make the MAME dat 
&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp; |
&nbsp;&nbsp; |&nbsp; &nbsp;&nbsp;&nbsp;+--Systems&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Systems (CPS-2, Neo-Geo, etc) 
&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | 
&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +--CPS-2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Files needed to make the CPS-2 dat 
&nbsp;&nbsp; | 
&nbsp;&nbsp; +--Dats_RC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RomCenter dats 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +--Recent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recent dats 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +--Multi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Multi emulators (MAME, Kawaks, etc) 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp; | 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp; +--MAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All files needed to make the MAME dat 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +--Systems&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Systems (CPS-2, Neo-Geo, etc) 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +--CPS-2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All files needed to make the CPS-2 dat
</pre>

					<p class="guide">It is important to explain that no matter what the dat is, I
					always create it in CMPro format first and convert to RomCenter
					format using DatUtil. I never do it the other way around since
					dats are easier to edit in CMPro format and it it is also much
					simpler to do everything the same way.</p>

					<hr />

					<h2 class="guide">PART 3 - Automation whenever possible!</h2>

					<p class="guide">If something can be automated then that is what I do! It is
					faster, less boring and less prone to error. The reason that I am
					using MAME and CPS-2 to get you familiar with my environment is
					because they are generated 100% automatically!</p>

					<p class="guide">You don't need to understand anything about writing dats at
					this point.</p>

					<hr />

					<h2 class="guide">PART 4 - The use of 'makefiles'</h2>

					<p class="guide">I achieve automation through the use of makefiles. I won't
					describe them in too much detail (since entire books are written
					on the subject) but I will briefly explain what makefiles are and
					how they work.</p>

					<p class="guide">A makefile is typically used by people like C programmers but
					in essence it lets you specify the way that a file is generated.
					If a file is generated using another one as input, then the
					makefile defines a 'dependency' and also how to generate the one
					file from the other.</p>

					<p class="guide">For example, I mentioned that my RomCenter dats are just
					generated by converting the CMPro one (using DatUtil). A simple
					makefile rule for such an action might look like this:</p>

<pre>
Dats_RC/Recent/Multi/MAME.dat: Dats/Recent/Multi/MAME.dat
	datutil -o Dats_RC/Recent/Multi/MAME.dat Dats/Recent/Multi/MAME.dat
</pre>

					<p class="guide">What this rule says is that the RomCenter file is dependant on
					the CMPro one. If the CMPro file has a newer file date than the
					RomCenter one (or if the RomCenter one does not exist), then the
					datutil command is run by make.</p>

					<p class="guide">I use the same principal for any 'supplement' dat files that
					are produced. For example, the 'supplementary' dats that I make
					for Kawaks are dependant on the MAME dat and the Kawaks dat. If
					either dat has changed, then MAMEDiff should be used to generate
					the 'supplement dat'. This may be shown as:</p>

<pre>
Supplement.dat: MAME.dat Kawaks.dat
	mamediff -S -T -o MAME.dat Kawaks.dat
</pre>

					<p class="guide">Makefiles can be incredibly complex but mine are probably of
					medium complexity. The real techies amongst you may like to look
					at how they work and exactly what they do but the rest of you
					should just regard them as a 'black box' (i.e. it just does a
					job). You don't need to know how it does it's job, just that it
					does do it! At this moment I don't really want to explain
					them any further!</p>

					<hr />

					<h2 class="guide">PART 5 - Generating a MAME dat</h2>

					<p class="guide">Inside the directory 'Dats/Recent/Multi/MAME' you will see
					several files but the only two that get updated for a MAME
					release are:</p>

					<ul class="guide">
					    <li>mamepp.exe (current MAME executable).</li>
					    <li>MAME.vers.mak (current version number of MAME).</li>
					</ul>

					<p class="guide">If you ever want to create your own MAME dat, then just
					replace mamepp.exe and update MAME.vers.mak accordingly.</p>

					<p class="guide">Note: If you don't have a PPro then you need to copy your
					'mame.exe' into this directory and give it the name 'mamepp.exe'.
					</p>

					<p class="guide">Inside the directory 'Dats/Recent/Multi' you will see a batch
					script called 'rebuild_all.bat'. This script just runs the 'make'
					command to rebuild all of the multi emu dats that actually need a
					rebuild (currently you only have one multi emu though... MAME).</p>

					<p class="guide">Double click 'rebuild_all.bat' and you will see all of the
					MAME dats get built!</p>

					<p class="guide">The makefile is just building them using DatUtil and MAMEDiff.
					Look at the file 'MAME.rules.mak' to see exactly what is being
					done (if you are already familiar with DatUtil and MAMEDiff).</p>

					<hr />

					<h2 class="guide">PART 6 - Generating a CPS-2 dat</h2>

					<p class="guide">The CPS-2 dat is also generated 100% automatically, just like
					the MAME dat.</p>

					<p class="guide">However, instead of using an executable (like mamepp.exe), I
					get given a file from Raz called 'cps2.dat'. This simply gets put
					into the 'CPS-2' folder and 'rebuild_all.bat' is run (after
					updating 'CPS-2.vers.mak' of course).</p>

					<hr />

					<h2 class="guide">PART 7 - RomCenter conversion</h2>

					<p class="guide">The directories under 'Dats_RC' correspond exactly to the ones
					under the 'Dats' directory. Each directory has a
					'rebuild_all.bat' script and running them will generate RomCenter
					dats directly from your CMPro ones.</p>

					<hr />

					<h2 class="guide">PART 8 - Try to understand the scripts/makefiles?</h2>

					<p class="guide">I know that some of you will look at them and understand most
					of what they are doing straight away. Others of you will be
					completely confused by them! Just try to get an idea of how they
					hang together rather than worrying about every single line of
					code. ;)</p>

					<p class="guide">The main objective of this lesson is to ensure you have a
					working dat environment and are beginning to understand that many
					things are automatically generated. You should even be able to
					create MAME and CPS-2 dats for yourselves too, assuming that you
					get a new mamepp.exe or cps2.dat!</p>

					<p class="guide">As time goes by and different lessons cover different
					subjects, everything should seem far simpler. I know that there
					will still be many questions left to answer but this is just the
					first few steps of a long journey!</p>
		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

