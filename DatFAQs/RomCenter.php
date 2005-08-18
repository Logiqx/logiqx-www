<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - RomCenter Data File Format</title>' . LF . LF;

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

					<p><img src="RomCenter.gif" width="202" height="39" alt="RomCenter Dats" /></p>

					<p>Last updated: 30th June 2004</p>

					<h1 class="guide">Version 1.92, 2.00 or 2.50?</h1>

					<p class="guide">There are three RomCenter file formats:</p>

					<ul class="guide">
					  <li>v1.92 for RomCenter 1 (discontinued).</li>
					  <li>v2.00 for RomCenter 2 (superceded).</li>
					  <li>v2.50 for RomCenter 2.</li>
					</ul>
					<p class="guide">I would strongly urge you to create your data files in the 2.50 format
					because it includes some important information that is impossible to represent
					in the older formats. For example, 2.50 format has proper support for the
					MAME resources and also supports more complicated merging definitions. Everyone
					should use the latest version of RomCenter nowadays so nothing should hold you
					back from using the new format!</p>

					<p class="guide">The main differences between the 1.92 and 2.00 formats are:</p>

					<ul class="guide">
					  <li>Three fields were removed from the 'EMULATOR' section of v1.92 dats ('exe',
					    'runcmd', 'romspaths').</li>
					  <li>A change in how merging is specified (the old format used &not;N&not;O for normal ROMs
					    and &not;N&not;N for merged ROMs).</li>
					  <li>A change in the way Neo-Geo games are handled (the old format used &not;O&not;O
					    and &not;O&not;N for Neo-Geo ROMs).</li>
					  <li>Resource ROMs needed removing from all games in the old format.</li>
					  <li>The old format needed sorting (so that parents and clones were contiguous) in
					    order to avoid a strange bug.</li>
					</ul>

					<p class="guide">The main differences between the 2.00 and 2.50 formats are:</p>

					<ul class="guide">
					  <li>New fields in the [CREDITS] section (email, homepage, url and date).</li>
					  <li>New fields in the [DAT] section (plugin, split, merge).</li>
					  <li>A new [RESOURCES] section.</li>
					</ul>
					<hr />
					<h1 class="guide">Header</h1>
					<p class="guide">RomCenter data files have a header at the top to specify details such as the
					emulator name, description, category and the data file version.</p>

<pre>[CREDITS]
author=Logiqx, http://www.logiqx.com/
version=20021031
comment=Laserdisk Emulator
[DAT]
version=2.50
plugin=arcade.dll
split=1
merge=1
[EMULATOR]
refname=Daphne
version=Daphne v0.99.5a</pre>

					<p class="guide">The meanings of these fields is as follows:</p>
					<table class="guide">
					  <tbody>
					    <tr>
					      <th>RomCenter<br />Element</th>
					      <th>CMPro<br />Equivelant</th>
					      <th>Description</th>
					    </tr>
					    <tr>
					      <td>CREDITS/author</td>
					      <td>author</td>
					      <td>Your name and e-mail/web address.</td>
					    </tr>
					    <tr>
					      <td>CREDITS/version</td>
					      <td>version</td>
					      <td>Version number of the data file. I would recommend using something
						like a date encoded version number (YYYYMMDD is preferable to DDMMYYYY
						as it can be sorted and is unambiguous).</td>
					    </tr>
					    <tr>
					      <td>CREDITS/comment</td>
					      <td>category</td>
					      <td>General comment about the emulator (e.g. the systems or game types it
						supports).</td>
					    </tr>
					    <tr>
					      <td>DAT/version</td>
					      <td>N/A</td>
					      <td>Format of the data file (1.92 or 2.00). Many 1.92 data files
						incorrectly show 2.00 and this confuses DatUtil!</td>
					    </tr>
					    <tr>
					      <td>DAT/plugin</td>
					      <td>N/A</td>
					      <td>Used to specify how the ROMs are interpreted by RomCenter. If you are
						using standard arcade ROMs or ROMs without headers, use arcade.dll</td>
					    </tr>
					    <tr>
					      <td>DAT/split</td>
					      <td>forcemerging</td>
					      <td>Used to specify whether parent and clones should be split (0 or 1).</td>
					    </tr>
					    <tr>
					      <td>DAT/merge</td>
					      <td>forcemerging</td>
					      <td>Used to specify whether common ROMs of parents and clones should be
						merged (0 or 1).</td>
					    </tr>
					    <tr>
					      <td>EMULATOR/refname</td>
					      <td>name</td>
					      <td>Name of the emulator without a version number. This field is
						used to identify the emulator from one version of the data file to
						another.</td>
					    </tr>
					    <tr>
					      <td>EMULATOR/version</td>
					      <td>description</td>
					      <td>Name of the emulator with a version number. This is the name
						displayed by RomCenter.</td>
					    </tr>
					  </tbody>
					</table>
					<hr />
					<h1 class="guide">Game ROMs</h1>
					<p class="guide">Game details and ROM details are specified together as follows:</p>

<pre>[GAMES]
&not;invaders&not;Space Invaders&not;invaders&not;Space Invaders&not;invaders.h&not;734f5ad8&not;2048&not;&not;&not;
&not;invaders&not;Space Invaders&not;invaders&not;Space Invaders&not;invaders.g&not;6bfaca4a&not;2048&not;&not;&not;
&not;invaders&not;Space Invaders&not;invaders&not;Space Invaders&not;invaders.f&not;0ccead96&not;2048&not;&not;&not;
&not;invaders&not;Space Invaders&not;invaders&not;Space Invaders&not;invaders.e&not;14e538b0&not;2048&not;&not;&not;</pre>

					<p class="guide">The fields are:</p>
					<p class="guide">&not;parent name&not;parent description&not;game name&not;game description&not;rom name&not;rom
					crc&not;rom size&not;romof name&not;merge name&not;</p>
					<p class="guide">In CMPro terms these are cloneof, description (from parent), name (game),
					description, name (rom), crc, size, romof, merge.</p>
					<p class="guide"> If you
					maintain RomCenter data files by hand it is very easy to make mistakes (due to
					the duplication of game details) so
					I recommend you create data files in CMPro format then convert them to RomCenter
					using DatUtil.</p>
					<p class="guide">Merging is specified by having a different 'parent name/game name' and by using
					the last two fields of each line in the data file. No matter whether a ROM is available
					in the parent set or not, the 'romof' field should always be specified. The 'merge name' field
					should only be specified where the ROM exists in the parent game though. e.g.</p>

<pre>&not;invaders&not;Space Invaders&not;sisv&not;Space Invaders (SV Version)&not;sv0h.bin&not;86bb8cb6&not;1024&not;invaders&not;&not;
&not;invaders&not;Space Invaders&not;sisv&not;Space Invaders (SV Version)&not;sv02.bin&not;0e159534&not;1024&not;invaders&not;&not;
&not;invaders&not;Space Invaders&not;sisv&not;Space Invaders (SV Version)&not;invaders.g&not;6bfaca4a&not;2048&not;invaders&not;invaders.g&not;
&not;invaders&not;Space Invaders&not;sisv&not;Space Invaders (SV Version)&not;invaders.f&not;0ccead96&not;2048&not;invaders&not;invaders.f&not;
&not;invaders&not;Space Invaders&not;sisv&not;Space Invaders (SV Version)&not;tv04.m1&not;cd2c67f6&not;2048&not;invaders&not;&not;</pre>

					<hr />
					<h1 class="guide">Disks and Samples</h1>
					<p class="guide">The RomCenter file format has no support for disks or samples at this time. If you
					convert a CMPro data file to RomCenter format then convert it back again you
					will lose the disk and sample information.</p>
					<hr />
					<h1 class="guide">Resources</h1>
					<p class="guide">Resources are used by MAME for the sharing of common ROMs for a particular
					system (e.g. NeoGeo, PlayChoice-10, Deco Cassette, CVS).</p>

<pre>resource (
	name neogeo
	description &quot;Neo Geo BIOS&quot;
	rom ( name neo-geo.rom size 131072 crc 9036d879 )
	rom ( name ng-sm1.rom size 131072 crc 97cf998b )
	rom ( name ng-sfix.rom size 131072 crc 354029fc )
)</pre>

					<p class="guide">Resources are included in the [RESOURCES] section of RomCenter data files.
					For example:</p>

<pre>[RESOURCES]
&not;neogeo&not;Neo-Geo&not;neogeo&not;Neo-Geo&not;sp-s2.sp1&not;9036d879&not;131072&not;&not;&not;
&not;neogeo&not;Neo-Geo&not;neogeo&not;Neo-Geo&not;sp-s.sp1&not;c7f2fa45&not;131072&not;&not;&not;
&not;neogeo&not;Neo-Geo&not;neogeo&not;Neo-Geo&not;usa_2slt.bin&not;e72943de&not;131072&not;&not;&not;
&not;neogeo&not;Neo-Geo&not;neogeo&not;Neo-Geo&not;sp-e.sp1&not;2723a5b5&not;131072&not;&not;&not;
&not;neogeo&not;Neo-Geo&not;neogeo&not;Neo-Geo&not;asia-s3.rom&not;91b64be3&not;131072&not;&not;&not;
&not;neogeo&not;Neo-Geo&not;neogeo&not;Neo-Geo&not;vs-bios.rom&not;f0e8f27d&not;131072&not;&not;&not;
&not;neogeo&not;Neo-Geo&not;neogeo&not;Neo-Geo&not;sp-j2.rom&not;acede59c&not;131072&not;&not;&not;
&not;neogeo&not;Neo-Geo&not;neogeo&not;Neo-Geo&not;sm1.sm1&not;97cf998b&not;131072&not;&not;&not;
&not;neogeo&not;Neo-Geo&not;neogeo&not;Neo-Geo&not;000-lo.lo&not;e09e253c&not;65536&not;&not;&not;
&not;neogeo&not;Neo-Geo&not;neogeo&not;Neo-Geo&not;sfix.sfx&not;354029fc&not;131072&not;&not;&not;</pre>

					<p class="guide">As with CMPro data files, you should use the 'romof' field in games that
					should use the resource ZIP but the 'merge' field should only be used for ROMs
					that are shared. e.g.</p>

<pre class="small">&not;sengoku&not;Sengoku Denshou (set 1)&not;sengoku&not;Sengoku Denshou (set 1)&not;sngku_p1.rom&not;f8a63983&not;524288&not;neogeo&not;&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengoku&not;Sengoku Denshou (set 1)&not;sngku_p2.rom&not;3024bbb3&not;131072&not;neogeo&not;&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengoku&not;Sengoku Denshou (set 1)&not;sngku_s1.rom&not;b246204d&not;131072&not;neogeo&not;&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengoku&not;Sengoku Denshou (set 1)&not;ng-sfix.rom&not;354029fc&not;131072&not;neogeo&not;ng-sfix.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengoku&not;Sengoku Denshou (set 1)&not;neo-geo.rom&not;9036d879&not;131072&not;neogeo&not;neo-geo.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengoku&not;Sengoku Denshou (set 1)&not;ng-sm1.rom&not;97cf998b&not;131072&not;neogeo&not;ng-sm1.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengoku&not;Sengoku Denshou (set 1)&not;sngku_m1.rom&not;9b4f34c6&not;131072&not;neogeo&not;&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengoku&not;Sengoku Denshou (set 1)&not;sngku_v1.rom&not;23663295&not;1048576&not;neogeo&not;&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengoku&not;Sengoku Denshou (set 1)&not;sngku_v2.rom&not;f61e6765&not;1048576&not;neogeo&not;&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengoku&not;Sengoku Denshou (set 1)&not;sngku_c1.rom&not;b4eb82a1&not;1048576&not;neogeo&not;&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengoku&not;Sengoku Denshou (set 1)&not;sngku_c2.rom&not;d55c550d&not;1048576&not;neogeo&not;&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengoku&not;Sengoku Denshou (set 1)&not;sngku_c3.rom&not;ed51ef65&not;1048576&not;neogeo&not;&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengoku&not;Sengoku Denshou (set 1)&not;sngku_c4.rom&not;f4f3c9cb&not;1048576&not;neogeo&not;&not;</pre>

					<p class="guide">In the case of games that are clones and need access to the resource ROMs,
					they should only specify the parent game. e.g.</p>

<pre class="small">&not;sengoku&not;Sengoku Denshou (set 1)&not;sengokh&not;Sengoku Denshou (set 2)&not;sngkh_p1.rom&not;33eccae0&not;524288&not;sengoku&not;&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengokh&not;Sengoku Denshou (set 2)&not;sngku_p2.rom&not;3024bbb3&not;131072&not;sengoku&not;sngku_p2.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengokh&not;Sengoku Denshou (set 2)&not;sngku_s1.rom&not;b246204d&not;131072&not;sengoku&not;sngku_s1.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengokh&not;Sengoku Denshou (set 2)&not;ng-sfix.rom&not;354029fc&not;131072&not;sengoku&not;ng-sfix.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengokh&not;Sengoku Denshou (set 2)&not;neo-geo.rom&not;9036d879&not;131072&not;sengoku&not;neo-geo.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengokh&not;Sengoku Denshou (set 2)&not;ng-sm1.rom&not;97cf998b&not;131072&not;sengoku&not;ng-sm1.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengokh&not;Sengoku Denshou (set 2)&not;sngku_m1.rom&not;9b4f34c6&not;131072&not;sengoku&not;sngku_m1.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengokh&not;Sengoku Denshou (set 2)&not;sngku_v1.rom&not;23663295&not;1048576&not;sengoku&not;sngku_v1.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengokh&not;Sengoku Denshou (set 2)&not;sngku_v2.rom&not;f61e6765&not;1048576&not;sengoku&not;sngku_v2.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengokh&not;Sengoku Denshou (set 2)&not;sngku_c1.rom&not;b4eb82a1&not;1048576&not;sengoku&not;sngku_c1.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengokh&not;Sengoku Denshou (set 2)&not;sngku_c2.rom&not;d55c550d&not;1048576&not;sengoku&not;sngku_c2.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengokh&not;Sengoku Denshou (set 2)&not;sngku_c3.rom&not;ed51ef65&not;1048576&not;sengoku&not;sngku_c3.rom&not;
&not;sengoku&not;Sengoku Denshou (set 1)&not;sengokh&not;Sengoku Denshou (set 2)&not;sngku_c4.rom&not;f4f3c9cb&not;1048576&not;sengoku&not;sngku_c4.rom&not;</pre>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

