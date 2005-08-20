<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Lesson 2: Packaging dats and updating the web site</title>' . LF . LF;

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

					<h1 class="guide">Lesson 2: Packaging dats and updating the web site</h1>

					<p class="guide"><b>(Posted on the list by Logiqx on 16th September 2002)</b></p>

					<p class="guide">Check that you have XML tools in your Logiqx 'Bin' directory
					(they were in 'tools-xml.zip'):</p>

<pre>
143360 Sep  6 18:04 libexpat.dll
 16384 Sep  5 16:03 sabcmd.exe
   277 Sep 17 09:42 sabcmd.txt
253952 Sep  5 16:03 sablot.dll
</pre>

					<p class="guide">XML wasn't used in any scripts for lesson 1 but it is needed
					for lesson 2.</p>

					<hr />

					<h2 class="guide">PART 1 - Download the lesson!</h2>

					<p class="guide">1) Download <a href="zip/lesson2.zip">http://www.logiqx.com/team/download/lesson2.zip</a>
					(3830KB)</p>

					<p class="guide">2) Extract it into your Logiqx directory.</p>

					<p class="guide">Note: This replaces the 24MB file that you may have downloaded
					a while ago, before the team was established (logiqx_www.zip).</p>

					<hr />

					<h2 class="guide">PART 2 - The directory structure</h2>

					<p class="guide">The directory structure contained in lesson 2 is not just for
					demonstration purposes, it is a fully functioning www.logiqx.com
					mirror. It is just a little smaller than mine though, since it
					only contains the stuff needed for dats.</p>

<pre>%LOGIQX%
&nbsp;&nbsp; |
&nbsp;&nbsp; +--WWW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Root directory of Logiqx.com
&nbsp;&nbsp; |&nbsp; |
&nbsp;&nbsp; |&nbsp; +--Dats&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dat index for Logiqx.com and RomCenter.com
&nbsp;&nbsp; |&nbsp; |&nbsp; |
&nbsp;&nbsp; |&nbsp; |&nbsp; +--DTD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XML Document Type Definition
&nbsp;&nbsp; |&nbsp; |&nbsp; |
&nbsp;&nbsp; |&nbsp; |&nbsp; +--XSL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XML Stylesheets (define the XML-&gt;HTML conversions)
&nbsp;&nbsp; |&nbsp; |&nbsp; |
&nbsp;&nbsp; |&nbsp; |&nbsp; +--CPS-2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPS-2 XML, HTML (generated), GIF and ZIPs
&nbsp;&nbsp; |&nbsp; |&nbsp; |
&nbsp;&nbsp; |&nbsp; |&nbsp; +--MAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAME XML, HTML (generated), GIF and ZIPs
&nbsp;&nbsp; |&nbsp; |&nbsp; |
&nbsp;&nbsp; |&nbsp; |&nbsp; +--...etc&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other emulators
&nbsp;&nbsp; |&nbsp; |
&nbsp;&nbsp; |&nbsp; +--E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The E-Mail pages and CPS-2 FAQ from Logiqx.com
&nbsp;&nbsp; |&nbsp; |
&nbsp;&nbsp; |&nbsp; +--Menu&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GIFs for the left-side menu of Logiqx.com
&nbsp;&nbsp; |&nbsp; |
&nbsp;&nbsp; |&nbsp; +--News&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The current front page and previous front pages
&nbsp;&nbsp; |&nbsp; |
&nbsp;&nbsp; |&nbsp; +--Resources&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Common GIFs used throughout Logiqx.com
&nbsp;&nbsp; |
&nbsp;&nbsp; +--&lt;a few files&gt;&nbsp;&nbsp;The main web page and scripts for preparing uploads&nbsp;
</pre>

					<hr />

					<h2 class="guide">PART 3 - Use of archive bits!</h2>

					<p class="guide">In order to cut down the size of uploads (i.e. only upload
					new/changed files), I make extensive use of the 'archive' bit.
					All files have an 'archive' bit which gets 'set' every time a
					file is changed (or created).</p>

					<p class="guide">When you extract the files from lesson1.zip, the archive bit
					will be set for every file. This is not really desirable so I
					have provided a script to reset them. To 'clear' the archive
					bits, run 'WWW/archive_bit_clear.bat' (just double click on it).
					</p>

					<hr />

					<h2 class="guide">PART 4 - Packaging ZIPs</h2>

					<p class="guide">Lesson 1 gave you a rough idea about what the 'Dats' and
					'Dats_RC' directories are. Once dats have been created in those
					areas (and all testing has been done), simply ZIP them up and
					copy the ZIPs into the appropriate directory under 'WWW/Dats'.
					</p>

					<hr />

					<h2 class="guide">PART 5 - Editing the XML (contents of the web pages)</h2>

					<p class="guide">The dat related web pages are all generated using XML. This
					means that all of the information for an emulator dat is located
					in one location (the XML) and shared by all of the web pages in
					which it appears (contents pages, emulator pages, RomCenter web
					update, etc). This ensures consistency throughout the site and
					reduces the amount of work involved when making updates.</p>

					<p class="guide">To update the details for an individual dat, edit the
					appropriate '.ent.xml' file within the 'WWW/Dats' directory (e.g.
					'Dats/MAME/MAME.ent.xml').</p>

					<p class="guide">The details that generally need updating are:</p>

					<table class="guide">
					    <tr>
						<th>Id</th>
						<th>Description</th>
					    </tr>
					    <tr>
						<td>Version</td>
						<td>The version of the emulator/data file (e.g. v1.07).</td>
					    </tr>
					    <tr>
						<td>Suitability</td>
						<td>Only used if different to 'Version'.<br />
						e.g. v1.08 would indicate that the dat can be used with
						v1.08 of the emulator, even thuogh the dat is for v1.07.</td>
					    </tr>
					    <tr>
						<td>Status (New/Updated)</td>
						<td>Either 'New', 'Updated' or blank.<br />
						It is this field that results in the GIFs 'New.gif' or
						'Updated.gif' being used on the contents page.</td>
					    </tr>
					    <tr>
						<td>Date (DD/MM/YYYY)</td>
						<td>The date that the web page was updated, not the dat!</td>
					    </tr>
					    <tr>
						<td>Games</td>
						<td>The number of games in the data file (use the CMPro
						profiler or DatUtil to count games/ROMs in a data file).</td>
					    </tr>
					    <tr>
						<td>Filenames and sizes</td>
						<td>The file names and sizes of the ZIP files.</td>
					    </tr>
					    <tr>
						<td>Revisions</td>
						<td>The revision history (details about changes made).</td>
					    </tr>
					</table>

					<hr />

					<h2 class="guide">PART 6 - Rebuilding the HTML</h2>

					<p class="guide">To re-generate the HTML for emulator dats that have had their
					the XML changed, run the script 'rebuild_all.bat'.</p>

					<p class="guide">Those of you who completed lesson 1 will probably have guessed
					that this script runs... make!</p>

					<p class="guide">The makefile will:</p>

					<ul class="guide">
					    <li>Rebuild individual emulator pages</li>
					    <li>Rebuild the Logiqx.com index page</li>
					    <li>Rebuild the RomCenter.com index page</li>
					    <li>Rebuild the details for the RomCenter web update facility</li>
					    <li>Validate all ZIP files details (check that they exist and
						check the size).</li>
					</ul>

					<p class="guide">Note: The ZIP validation (filechk.exe) is not case sensitive.
					I only wrote it quickly and never went as far as doing that. If
					anyone feels like making it better, they are more than welcome!</p>

					<hr />

					<h2 class="guide">PART 7 - Submitting work to the whole team (not just to the
					site maintainer)</h2>

					<p class="guide">Sharing your work with the rest of the team is easy.</p>

					<ul class="guide">
					    <li>To share dat work with the team, just ZIP up the contents
						of 'Dats/&lt;old or recent&gt;/&lt;single or multi
						etc&gt;/&lt;emu dir&gt;'</li>
					    <li>To submit web updates to the team, just ZIP up the
						contents of 'WWW/Dats/&lt;emu dir&gt;' (i.e. an
						'.ent.xml' file and ZIPs).</li>
					</ul>

					<p class="guide">Both ZIPs should be posted to the list but in the case of
					large files, we will have to set up a group FTP. Leslaw? ;) I
					would suggest that anything bigger than 30KB be considered large
					and not sent via e-mail (bearing in mind that some people only
					have 56K connections).</p>

					<p class="guide">The site maintanier must extract the web updates into his own
					'WWW' directory and run 'rebuild_all.bat' (to update the web
					pages). He is the only person that must keep up to date with
					every submission and will therefore the only person who can
					generate accurate index pages.</p>

					<hr />

					<h2 class="guide">PART 8 - Updating the front page news (site maintainer;
					Robin)</h2>

					<p class="guide">Updating the front page is simply a matter of editing
					'WWW/News/News.shtml' (using your favorite HTML editor).</p>

					<p class="guide">Every 3 months (Jan-&gt;Mar, Apr-&gt;Jun, Jul-&gt;Sep,
					Oct-&gt;Dec), I rename News.shtml to NewsXX.shtml and start a
					fresh News.shtml.</p>

					<hr />

					<h2 class="guide">PART 9 - Preparing the upload (site maintainer; Robin)</h2>

					<p class="guide">As already mentioned, the upload procedure utilises the
					archive flag of files. To 'tar' everything up ready for upload
					(think of 'tar' as the Unix equivalent for ZIP), just
					double-click 'WWW/make_gz.zip'.</p>

					<p class="guide">What this does is:</p>

					<ul class="guide">
					    <li>Copy all files that have their archive bit set (i.e. they
						have been created or changed since the last run) to a
						directory called 'WWW_Update'. After the copy, all
						archive bits are 'cleared'.</li>
					    <li>TARs up and compresses the contents of the 'WWW_Update'
						directory into a file called 'Upload/all.tar.gz'. It is
						the file all.tar.gz that gets uploaded to Logiqx.com (via
						FTP) and then extracted using a CGI script (i.e. a simple
						URL).</li>
					</ul>

					<p class="guide">Note: The 'WWW_Update' directory is not purged automatically.
					After 'all.tar.gz' has been uploaded and extracted, you should
					empty out 'WWW_Update' (or simply delete it completely).</p>
		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

