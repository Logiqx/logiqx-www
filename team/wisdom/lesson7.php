<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Lesson 7: Not really a lesson but useful reading</title>' . LF . LF;

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

					<h1 class="guide">Lesson 7: Not really a lesson but useful reading</h1>

					<p class="guide"><b>(Posted on the list by Logiqx on 3rd October 2002)</b></p>

					<p class="guide">Hi everyone, a few things to mention today.</p>

					<hr />

					<p class="guide">1) As you may have noticed on the logiqx.com site, I've
					updated a few more dats.</p>

					<p class="guide">Most of these address problems that '_check_merging.bat'
					reported (I have now checked every single dat for merge
					problems).</p>

					<p class="guide">ACE is the only genuine dat update (added sgemf).</p>

					<hr />

					<p class="guide">2) There is a new '_check_merging.sh' that shows CRC conflicts
					too (needed for Calice).</p>

					<p class="guide">You can get it by re-downloading <a
					href="../download/tools-logiqx.zip">tools-logiqx.zip</a> (if you
					have not done so recently).</p>

					<hr />

					<p class="guide">3) I have improved the dat makefiles after considering
					Stefan's comments:</p>

					<p class="guide">&gt;I noticed some spelling differences, e.g. in the
					rebuild_all.mak<br />
					&gt;first it is &quot;Viva Nonno&quot; (=
					&quot;Viva?Nonno&quot;), then in line #8 it is<br />
					&gt;spelled &quot;viva_nonno&quot;; in the WWW folder it's
					spelled &quot;VivaNonno&quot;<br />
					&gt;and inside the dat files again &quot;Viva Nonno xxxxx&quot;.</p>

					<p class="guide">The lower-case reference (e.g. viva_nonno) is no longer used.
					Instead, it uses a name that matches the rest of the makefile
					rules (i.e. Viva?Nonno).</p>

					<p class="guide">We are left with just 3 variants now but that is for good
					reason:</p>

					<ul class="guide">
					    <li>Viva Nonno - The 'human' name for dat files, ZIPs etc</li>
					    <li>Viva?Nonno - The question mark is required within
						makefile rules</li>
					    <li>VivaNonno - The XML entity name (website directory
						corresponds for consistency). Reason, XML identifiers can
						not have space in them.</li>
					</ul>

					<p class="guide">So, we are now as consistent as we can be considering we use 3
					different technologies (regular files for humans, makefile rules,
					XML entities). ;)</p>

					<hr />

					<p class="guide">4) I updated all makefiles that simply 'cp' (i.e. copy) dats
					or txt files, now they all use the 'subst' trick.</p>

					<p class="guide">This is much better than before, imho.</p>

					<hr />

					<p class="guide">5) U64Emu is now officially 'old', lol.</p>

					<hr />

					<p class="guide">6) For the latest 'Dats', 'Dats_RC' and 'WWW' directories, use
					these links:</p>

					<p class="guide"><a href="../download/Dats.zip">Dats.zip</a>,
					<a href="../download/Dats_RC.zip">Dats_RC.zip</a>,
					<a href="../download/WWW.zip">WWW.zip</a></p>

					<p class="guide">After a while I am sure that these wholesale changes will
					cease and we can start distributing individual directories for
					each emulator. ;)</p>

					<hr />

					<p class="guide">7) I made a start (and almost finished) the Calice dat, just
					mslug4/mslug4n/kof2001 to add (when we have figured out the
					correct dump to use).</p>

					<p class="guide">Calice is a manually-intensive dat!</p>

					<p class="guide">You will see in the latest 'Dats' directory (download from URL
					above) that there is a comparison script for Calice that can
					compare the drivers in two Calice releases and the latest dat
					against the latest driver. Using this I was able to see which
					games were added (or changed) then look at the Calice drivers to
					figure out which dump is really required (he doesn't always use
					the right ZIP name). David has a habit of getting ZIP names and
					ROM names incorrect so after copying a game from the CPS-2 dat I
					checked every single ROM name and corrected it in my dat where
					Calice uses the wrong name.</p>

					<p class="guide">Incorrect ROM names cause many CRC conflicts (shown by
					'_check_merging.bat/.sh') but these are unavoidable. Calice
					doesn't load by CRC so it is better for us to have conflicts in
					the dat and let the ROM managers sort out the mess. At least by
					using the names he desires (albeit with conlicts), out comparison
					scripts don't show any errors in our dat. ;)</p>

					<hr />

					<p class="guide">Tonight I don't plan on doing any computer-based work other
					than:</p>

					<ul class="guide">
					    <li>Packaging the remaining resources and uploading to
						logiqx.com.</li>
					    <li>Updating CAESAR for the emulators that we have recently
						released dats for.</li>
					    <li>Updating my resource collections.</li>
					    <li>Updating my Dad's website.</li>
					</ul>
		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

