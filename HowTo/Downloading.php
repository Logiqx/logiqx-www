<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Downloading RAINE</title>' . LF . LF;

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

					<p><img src="Downloading.gif" width="331" height="40" alt="Downloading RAINE Source" /></p>

					<p>12th October 2001</p>

					<h1 class="guide">1. Introduction</h1>

					<p class="guide">This guide describes how to get yourself a copy of the RAINE source. There are
					basically three options:</p>

					<ol class="guide">
					  <li>Get the source for last official release. This is by far the easiest
					    option and the one that I would recommend!</li>
					  <li>Get the daily snapshot from SourceForge (known as a tarball).</li>
					  <li>Get the very latest source from SourceForge (using anonymous CVS).</li>
					</ol>

					<hr />

					<h1 class="guide">2. Getting the Last Official Release</h1>

					<p class="guide">This is by far the simplest option and you simply need to visit the RAINE project page
					at SourceForge:</p>

					<p class="guide"><a href="http://sourceforge.net/projects/raine/">http://sourceforge.net/projects/raine/</a></p>

					<p class="guide">The version that you download from here should not cause you any problems if your DJGPP
					environment is set up correctly.</p>

					<hr />

					<h1 class="guide">3. Getting the Daily Snapshot (tarball)</h1>

					<p class="guide">Before describing this method it should be explained that snapshots are generated
					automatically by SourceForge and are just a snapshot of work in progress. They are not
					beta releases and may well contain experimental code (you will not know whether this is
					the case or not) so there is no guarantee of their stability. If you have difficulties
					compiling it then you should check that you can at least compile the last official
					release. If the official release compiles and you can't compile the latest snapshot then
					it could be that the source contains partial changes or that you need to upgrade something
					in your DJGPP environment. Please do not bother the RAINE team if you are unable to
					compile these versions.</p>

					<p class="guide">Anyway, now that you understand what you are downloading you can use the following URL:</p>

					<p class="guide"><a href="http://cvs.sourceforge.net/cvstarballs/raine-cvsroot.tar.bz2">http://cvs.sourceforge.net/cvstarballs/raine-cvsroot.tar.bz2</a>
					</p>

					<p class="guide">You will need a copy of <a href="http://www.cvshome.org/">CVS</a> (Concurrent Versions System) in order to use the contents
					of the tarball.</p>

					<table class="guide">
					  <tr>
					    <td>File</td>
					    <td>Description</td>
					  </tr>
					  <tr>
					    <td><a href="cvs-1-11-17.zip">cvs1-11-17.zip</a></td>
					    <td>Command line CVS for 32-bit Windows machines (95, NT etc)</td>
					  </tr>
					</table>

					<p class="guide">To install CVS:</p>

					<ol class="guide">
					  <li>Copy <em>cvs.exe</em> to a directory in your path (e.g. <em>C:\WINDOWS\COMMAND</em>)</li>
					</ol>

					<p class="guide">Using WinZip extract the tar.gz file to D:\CVS (you can choose another location if you
					wish but change the subsequent commands accordingly).</p>

					<p class="guide">To extract the source from the CVS directory: </p>

					<ol class="guide">
					  <li>Change directory to where you would like a 'RAINE' directory creating (CVS will create
					    it for you). This MUST be on the same drive as the 'CVS' directory<em> </em>(which would
					    mean somewhere on the D: drive in this example).</li>
					  <li>Type the following command:</li>
					</ol>

					<pre>cvs -d /cvs/raine checkout -kb raine</pre>

					<p class="guide">Once the CVS command has completed you should be able to type 'cd RAINE' and compile it
					with 'make dirs' followed by 'make'.</p>

					<hr />

					<h1 class="guide">4. Using the Anonymous CVS</h1>

					<p class="guide">As with the daily tarballs, anonymous CVS will return a work in progress version of
					RAINE (so you have no idea what is in it - only RAINE developers know).You are on your own
					if you encounter problems, sorry but that's how it is!</p>

					<p class="guide">You will need a copy of CVS (just as you did for the tarball) so download it using this
					link:</p>

					<table class="guide">
					  <tr>
					    <td>File</td>
					    <td>Description</td>
					  </tr>
					  <tr>
					    <td><a href="cvs-1-11-17.zip">cvs1-11-17.zip</a></td>
					    <td>Command line CVS for 32-bit Windows machines (95, NT etc)</td>
					  </tr>
					</table>

					<p class="guide">To install CVS: </p>

					<ol class="guide">
					  <li>Copy <em>cvs.exe</em> to a directory in your path (e.g. <em>C:\WINDOWS\COMMAND</em>)</li>
					</ol>

					<p class="guide">To download the source from SourceForge: </p>

					<ol class="guide">
					  <li>Change directory to where you would like a 'RAINE' directory creating (CVS will create
					    it for you).</li>
					  <li>Type the following commands (or create a batch script that does the same thing):</li>
					</ol>

<pre>set HOME=c:\
cvs -d:pserver:anonymous@cvs.raine.sourceforge.net:/cvsroot/raine login
cvs -z3 -d:pserver:anonymous@cvs.raine.sourceforge.net:/cvsroot/raine checkout raine</pre>

					<p class="guide">Note: You can use anything you like instead of c:\ (logging in creates a file called <em>.cvspass
					</em>in this location so you don&quot;t have to log in again). Also, just press &lt;return&gt;
					when asked for a password.</p>

					<p class="guide">Once the CVS command has completed you should be able to type 'cd RAINE' and compile it
					with 'make dirs' followed by 'make'.</p>

					<p class="guide">To refresh the source at a later date: </p>

					<ol class="guide">
					  <li>Change your working directory to 'RAINE'.</li>
					  <li>Type the following commands (or create a batch script that does the same thing):</li>
					</ol>

<pre>set HOME=c:\
cvs -z3 update</pre>

					<p class="guide">Note: The -z3 option is for file compression and reduces the download time.</p>

					<p class="guide">Once the CVS command has completed you should be able to compile it with 'make'.</p>

					<hr />

					<h1 class="guide">5. Final Note</h1>

					<p class="guide">The source code is available at SourceForge for the RAINE developers to work on as a
					team and in an effective manner. It is publicly accessible so that non-team members can
					download it, study it and see if they are able to contribute in any way. It is not there
					for public releases of the product before it is ready. By all means feel free to compile
					it for yourself but please do not distribute any executables.</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

