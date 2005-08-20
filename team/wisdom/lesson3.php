<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Lesson 3: Viva Nonno, Clones and Bad dumps</title>' . LF . LF;

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

					<h1 class="guide">Lesson 3: Viva Nonno, Clones and Bad dumps</h1>

					<p class="guide"><b>(Posted on the list by Logiqx on 18th September 2002)</b></p>

					<p class="guide">I've finally got around to looking at this emulator and
					updating the dat by Roman.</p>

					<p class="guide">Okay, I was able to improve on his original dat:</p>

					<ul class="guide">
					    <li>I made it evident that there are six games by using
						clones (previous dat showed four games since clones were
						lumped in with the parent).</li>
					    <li>Changed his 00000000 CRCs in Ridge Racer to complimented
						CRCs. The dumps may be bad but they are the best
						available!</li>
					    <li>Added year information (used <a
						href="http://www.system16.com/">www.system16.com</a> and <a
						href="http://www.klov.com/">www.klov.com</a> to find out
						the years).</li>
					    <li>Swapped the size and crc bits around (I prefer size, then
						crc). Just use DatUtil to convert to my prefered format.
						;)</li>
					</ul>

					<p class="guide">To tell if a dump is bad, use ROMCMP.EXE (comes with MAME).
					For rr1.zip it shows the following:</p>

<pre>
   E:\ROMs\Complete\Recent\Multi\Viva Nonno&gt;romcmp rr1.zip
   21 files
   rr1ccrh.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FIRST AND SECOND HALF IDENTICAL
   rr1ccrl.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FIXED BITS (xxxxx0xx11xxxxxx)
   rr1cg0.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FIXED BITS (xxxxx0xxxxxxxxxx)
   rr1cg1.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FIXED BITS (xxxxx0xxxxxxxxxx)
   rr1cg2.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FIXED BITS (xxxxx0xxxxxxxxxx)
   rr1cg3.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FIXED BITS (xxxxx0xxxxxxxxxx)
   rr1data.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11xxxxxxxxxxxxxxxxx = 0xFF
   rr1pot-l1.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1xxxxxxxxxxxxxxxxxx = 0xFF
   rr1pot-m1.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1xxxxxxxxxxxxxxxxxx = 0xFF
   rr1pot-u1.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1xxxxxxxxxxxxxxxxxx = 0xFF
   rr1prg-ll.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1xxxxxxxxxxxxxxxxxx = 0xFF
   rr1prg-lm.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1xxxxxxxxxxxxxxxxxx = 0xFF
   rr1prg-um.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1xxxxxxxxxxxxxxxxxx = 0xFF
   rr1prg-uu.bin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1xxxxxxxxxxxxxxxxxx = 0xFF
</pre>

					<ul class="guide">
					    <li>It can be seen that rr1ccrh.bin has been overdumped
						(since both halfs are identical, i.e. it should be half
						the size).</li>
					    <li>It can be seen that the rr1ccrl.bin and rr1cgX.bin ROMs
						are bad (since they have stuck bits, a common dumping
						error).</li>
					</ul>

					<p class="guide">I did ROMCMP checks on all Viva ROMs and there was another
					game which needed a CRC complimenting too.</p>

					<p class="guide">Tip: RomCenter shows games that have complimented CRCs with a
					little 'x' next to the game.</p>
		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

