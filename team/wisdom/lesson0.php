<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Lesson 0: Tools to Install</title>' . LF . LF;

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

					<h1 class="guide">Lesson 0: Tools to Install</h1>

					<p class="guide"><b>(Posted on the list by Logiqx on September 11th 2002)</b></p>

					<p class="guide">Before we start doing the lessons proper, you will need to
					install a few tools on your PC. Please ensure you do this before
					you begin the lessons themselves.</p>

					<p class="guide">This shouldn't take more than 30 minutes. Let me know how you
					get on. ;)</p>

					<hr />

					<h1 class="guide">STEP 1 - Install CygWin</h1>

					<ul class="guide">
					    <li><a href="cygwin.php">Install CygWin</a>, ensuring that
						you include the 'make' command too (by default it is not
						installed).</li>
					</ul>

					<hr />

					<h1 class="guide">STEP 2 - Create a 'Logiqx' directory</h1>

					<ul class="guide">
					    <li>Create a directory called 'Logiqx' on a drive that is
						convenient for you.</li>
					</ul>

					<p class="guide">Hint: This will probably be 'c:\' for most people.</p>

					<hr />

					<h1 class="guide">STEP 3 - Download the 'Bin' tools needed</h1>

					<ul class="guide">
					    <li>Download all of the 'Bin' archives from <a
						href="../download/index.html">http://www.logiqx.com/team/download/</a>
					    </li>
					    <li>Extract all of the archives into your 'Logiqx' directory
						(e.g. 'c:\Logiqx').</li>
					</ul>

					<p class="guide">Note: The ZIPs will automatically create a 'Bin' directory for
					you under 'Logiqx'.</p>

					<hr />

					<h1 class="guide">STEP 4 - Configure your path</h1>

					<h2 class="guide">Windows 95 or 98</h2>

					<ul class="guide">
					    <li>Add these lines to c:\autoexec.bat </li>
					</ul>

<pre>
     SET LOGIQX=c:\Logiqx
     SET PATH=%PATH%;%LOGIQX%\bin
</pre>

					<ul class="guide">
					    <li>Once your autoexec.bat is updated you will need to reboot
						your PC.</li>
					</ul>

					<h2 class="guide">Windows NT, 2000 or XP (do not use c:\autoexec.bat,
					that is naughty, lol)</h2>

					<p class="guide">I only have Windows 2000 as reference but NT and XP are almost
					identical... </p>

					<ul class="guide">
					    <li>From the Start Menu, select 'Settings-&gt;Control Panel'</li>
					    <li>Double-click the 'System' icon </li>
					</ul>

					<ul class="guide">
					    <li>Select the 'Advanced' sheet (on Windows 2000, called
						'Environment' on NT)</li>
					    <li>Click on 'Environment Variables...'</li>
					</ul>

					<ul class="guide">
					    <li>Click on 'New...' (under the 'System variables' section)</li>
					    <li>Specify a variable name of 'LOGIQX' and value of
						'c:\Logiqx' (change the 'c:' as appropriate, if you are
						using a different disk!)</li>
					</ul>

					<ul class="guide">
					    <li>Select 'Path' (under the 'System variables' section)</li>
					    <li>Click 'Edit...'</li>
					    <li>Add ';%LOGIQX%\bin' at the end of the value line and
						press 'OK' </li>
					</ul>

					<p class="guide">Important! You can define these two variables in either 'User
					variables' or 'System variables' but you must do <i>both in the
					same section</i>!</p>

					<p class="guide">Note: On NT/2000/XP there is no need for a reboot (if you
					followed my steps above).</p>

					<hr />

					<h1 class="guide">STEP 5 - Test it works!</h1>

					<ul class="guide">
					    <li>Open a command prompt (what some people call a 'DOS
						window') </li>
					    <li>Execute 'echo %LOGIQX%'. This should show something like
						'c:\Logiqx'. </li>
					    <li>Execute 'path'. This should show something like
						'c:\Logiqx\bin' at the end of the line. </li>
					    <li>Execute 'ls -l'. This should show a Unix-style directory
						listing.</li>
					</ul>

					<p class="guide">If everything worked as expected then you have done everything
					right. :)</p>
		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

