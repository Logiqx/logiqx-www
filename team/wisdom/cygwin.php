<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Installing CygWin</title>' . LF . LF;

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

					<h1 class="guide">Installing CygWin</h1>

					<p class="guide">The Logiqx environment relies heavily on the use of Unix
					scripting so you must install Cygwin!</p>

					<hr />

					<h1 class="guide">1. Install CygWin (about 10MB worth of downloading).</h1>

					<p class="guide">Run <a href="http://www.cygwin.com/setup.exe">http://www.cygwin.com/setup.exe</a></p>

					<p class="guide">You will see this screen:</p>

					<p class="guide"><img src="img/image1.png" width="503" height="386" alt="image 1" /></p>

					<p class="guide">Press 'Next &gt;'.</p>

					<p class="guide"><img src="img/image2.png" width="503" height="386" alt="image 2" /></p>

					<p class="guide">Press 'Next &gt;' (Install from Internet).</p>

					<p class="guide"><img src="img/image3.png" width="503" height="386" alt="image 3" /></p>

					<p class="guide">Choose the location that you want to install to, ensure that
					'DOS' is selected and then press 'Next &gt;'.</p>

					<p class="guide"><img src="img/image4.png" width="503" height="386" alt="image 4" /></p>

					<p class="guide">Choose the location that you want to download the installation
					files to and then press 'Next &gt;'.</p>

					<p class="guide"><img src="img/image5.png" width="503" height="386" alt="image 5" /></p>

					<p class="guide">Press 'Next &gt;' (Direct Connection).</p>

					<p class="guide"><img src="img/image7.png" width="503" height="386" alt="image 6" /></p>

					<p class="guide">Select a download site and press 'Next &gt;'.</p>

					<p class="guide"><img src="img/image8.png" width="503" height="386" alt="image 8" /></p>

					<p class="guide">Open up the 'Devel category using the '+' gadget.</p>

					<p class="guide"><img src="img/image9.png" width="503" height="386" alt="image 9" /></p>

					<p class="guide">Ensure that 'make' is selected (denoted by a cross) and press
					'Next &gt;'.</p>

					<p class="guide"><img src="img/image10.png" width="503" height="386" alt="image 10" /></p>

					<p class="guide">Watch CygWin install and once complete, it will tell you!</p>

					<hr />

					<h1 class="guide">2. Set up your PATH</h1>

					<h2 class="guide">Windows 95 or 98</h2>

					<ul class="guide">
					    <li>Add this line to c:\autoexec.bat</li>
					</ul>

					<pre>     SET PATH=%PATH%;c:\cygwin\bin</pre>

					<ul class="guide">
						<li>Once your autoexec.bat is updated you will need to reboot
						your PC.</li>
					</ul>

					<h2 class="guide">Windows NT, 2000 or XP (do not use c:\autoexec.bat,
					that is naughty, lol)</h2>

					<p class="guide">I only have Windows 2000 as reference but NT and XP are almost
					identical...</p>

					<ul class="guide">
					    <li>From the Start Menu, select 'Settings-&gt;Control Panel'</li>
					    <li>Double-click the 'System' icon</li>
					</ul>

					<ul class="guide">
					    <li>Select the 'Advanced' sheet (on Windows 2000, called
						'Environment' on NT)</li>
					    <li>Click on 'Environment Variables...'</li>
					</ul>

					<ul class="guide">
					    <li>Select 'Path' (under the 'System variables' section)</li>
					    <li>Click 'Edit...'</li>
					    <li>Add ';c:\cygwin\bin' at the end of the value line and
						press 'OK'</li>
					</ul>

					<p class="guide">Note: On NT/2000/XP there is no need for a reboot (if you
					followed my steps above).</p>

					<hr />

					<h1 class="guide">3. Test CygWin</h1>

					<p class="guide">Open a DOS prompt and use the 'ls -l' command to test your
					CygWin installation. This should show a Unix-style directory listing.</p>
		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

