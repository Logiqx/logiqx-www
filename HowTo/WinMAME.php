<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Compiling WinMAME</title>' . LF . LF;

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

					<p><img src="Compiling.gif" width="317" height="40" alt="Compilng MAME &amp; RAINE" /></p>

					<p>24th February 2005</p>

					<p>Tested with MAME v0.92u2000 and RAINE32 v0.42.3</p>

					<h1 class="guide">1. Introduction</h1>

					<p class="guide">This guide describes how to set up a MinGW environment that is suitable for compiling
					MAME and RAINE32. It is written in the same style as the document I wrote explaining how
					to create a DJGPP environment suitable for DMAME and RAINE. With the help of this guide any
					proficient PC user should be able to set up MinGW for MAME and RAINE32 in around
					10 to 15 minutes (assuming the required files are downloaded beforehand). The guide has been
					written with the intention that the user will gain an understanding of what they are doing
					rather than just downloading a ready prepared distribution. It will not tell you how to do
					basic tasks such as <em>creating</em> a directory or <em>extracting</em> files from a ZIP,
					it will tell you <em>where</em> to create a directory or <em>where </em>to extract a ZIP.
					So long as you have those basic skills then you should have no problems.</p>

					<p class="guide">One of the big advantages of explaining things in this manner is that you can
					update your own environment to use newer versions of the tools as they come out,
					without being dependant on someone else doing it for you or waiting for me to
					update my guide.</p>

					<p class="guide">The guide will explain how to install MinGW onto the D: drive but you can choose any
					drive and location that you wish (so long as you think about what you are doing!).</p>

					<hr />

					<h1 class="guide">2. Installing MinGW (Minimalist GNU for Windows)</h1>

					<p class="guide"><a href="http://mingw.sourceforge.net/" target="_blank">MinGW</a> comes as separate
					downloadable components and you will need the following to compile MAME and RAINE32:</p>

					<table class="guide">
					  <tr>
					    <td class="green">File</td>
					    <td class="green">Description</td>
					  </tr>
					  <tr>
					    <td class="green"><a href="http://caesar.logiqx.com/zips/tools/compilers/mingw/gcc-core-3.4.2-20040916-1.tar.gz">gcc-core-3.4.2-20040916-1.tar.gz</a></td>
					    <td class="green">GCC 3.4.2 (GNU C Compiler).
					    </td>
					  </tr>
					  <tr>
					    <td class="green"><a href="http://caesar.logiqx.com/zips/tools/compilers/mingw/binutils-2.15.91-20040904-1.tar.gz">binutils-2.15.91-20040904-1.tar.gz</a></td>
					    <td class="green"> Binutils 2.15.91 (binary and object handling)</td>
					  </tr>
					  <tr>
					    <td class="green"><a href="http://caesar.logiqx.com/zips/tools/compilers/mingw/mingw-runtime-3.7.tar.gz">mingw-runtime-3.7.tar.gz</a></td>
					    <td class="green">MinGW Runtime 3.7 (stdio etc)</td>
					  </tr>
					  <tr>
					    <td class="green"><a href="http://caesar.logiqx.com/zips/tools/compilers/mingw/w32api-3.2.tar.gz">w32api-3.2.tar.gz</a></td>
					    <td class="green">Windows API 3.2 (needed during linking)</td>
					  </tr>
					</table>

					<p class="guide">Note that the above files have the extension '.tar.gz'. This format originates from the
					Unix community and the files are actually created using two tools ('tar' creates a single
					archive of all the files and 'gzip' is used to compress the tar file). However, recent
					versions of WinZip support this compression format so you don't need any additional tools.</p>

					<p class="guide">To install MinGW:</p>

					<ol class="guide">
					  <li>Create a directory called <em>D:\MinGW</em> </li>
					  <li>Unzip the binutils, gcc, mingw-runtime and w32api archives into <em>D:\MinGW </em>(using WinZip or similar). Ensure that
					    you unzip the files in order that I just described (which may not be the same
					    as the order in the above table). This
					    is important because some files exist in more than one archive (notably GCC
					    and binutils) so you should use the most <b> up to date </b>version. Say 'yes' to overwrite
					    prompts, but only do so if you are replacing an older file with a newer one!</li>
					</ol>

					<hr />
					<h1 class="guide">3. Installing MSYS (Minimal SYStem for MinGW):</h1>

					<p class="guide">To simplify the usage of MinGW, you need to install MSYS. It is simplest to
					describe it as a command prompt from which you can compile MAME and RAINE but
					the reality it provides far more than just that. It is a minimal POSIX system
					for MinGW and includes the various Unix commands that are required when
					compiling MAME as well as a fully functional version of GNU make. It also means
					that you don't need to configure your Windows PATH variable to get MinGW working
					and PATH conflicts should also be impossible.&nbsp;</p>

					<table class="guide">
					  <tr>
					    <td class="green">File</td>
					    <td class="green">Description</td>
					  </tr>
					  <tr>
					    <td class="green"><a href="http://caesar.logiqx.com/zips/tools/compilers/mingw/MSYS-1.0.10.exe">MSYS-1.0.10.exe</a></td>
					    <td class="green">MSYS 1.0.10
					    </td>
					  </tr>
					</table>

					<p class="guide">To install MSYS:</p>

					<ol class="guide">
					  <li>Run <i>MSYS-1.0.10.exe</i> which is a standard Windows style installer.</li>
					  <li>When asked where you would like to install MSYS, choose a location of your
					    own choice (e.g. <i>D:\MSYS</i>).</li>
					  <li>After the installation, a command window opens up and asks if you wish to
					    continue with the post install. Answer 'y'.</li>
					  <li>When asked if you have MinGW installed, answer 'y'.</li>
					  <li>When asked where your MinGW installation is, type in the path of your
					    MinGW directory using <b>forward slashes</b> (e.g. <i>D:/MinGW</i>).</li>
					  <li>Installation of MSYS should now be complete and it will be available on
					    your start menu.</li>
					</ol>

					<hr />

					<h1 class="guide">4. Installing DirectX 7.0</h1>

					<p class="guide">MAME uses DirectX 7.0 and although RAINE32 uses Allegro (not DirectX directly), Allegro needs DirectX 
					7.0 when it is compiled. In other words, whether you intend to compile MAME or
					RAINE32 you need DirectX 7.0 installed.</p>

					<table class="guide">
					  <tr>
					    <td class="green">File</td>
					    <td class="green">Description</td>
					  </tr>
					  <tr>
					    <td class="green"><a href="http://caesar.logiqx.com/zips/tools/compilers/mingw/dx70_mgw.zip">
					    dx70_mgw.zip</a></td>
					    <td class="green">DirectX 7.0 libraries and headers for MinGW</td>
					  </tr>
					</table>

					<p class="guide">To install DirectX  7.0:</p>

					<ol class="guide">
					  <li>Open<i> dx70_mgw.zip </i>with WinZip and extract into <em>
					  D:\MINGW.</em></li>
					</ol>

					<p class="guide">Note: You will be asked if you want to overwrite some existing files
					(probably just the 9
					files in the 'lib' directory with a '.a' extension). You should answer 'yes' to
					any questions asking if you wish to overwrite existing files.</p>

					<hr />

					<h1 class="guide">5. Installing NASM</h1>

					<p class="guide"><a href="http://nasm.sourceforge.net/" target="_blank">NASM</a> (Netwide Assembler) is used by
					MAME and RAINE32 as an x86 assembler. You require the following archive:</p>

					<table class="guide">
					  <tr>
					    <td class="green">File</td>
					    <td class="green">Description</td>
					  </tr>
					  <tr>
					    <td class="green">
					    <a href="http://caesar.logiqx.com/zips/tools/assemblers/nasm/nasm-0.98.39-win32.zip">nasm-0.98.39-win32.zip</a></td>
					    <td class="green">NASM 0.98.39 for Win32
					      <p class="guide">You can get the latest version of NASM from the
					      SourceForge link above. Click the 'Download' link then go to the 'Win32 binaries'
					      right at the bottom of the page.</p>
					    </td>
					  </tr>
					</table>

					<p class="guide">To install NASM:</p>

					<ol class="guide">
					  <li>Open <em>nasm-0.98.39-win32.zip</em> using WinZip then extract <em>NASMW.EXE</em> 
					    and <i>NDISASMW.EXE</i> into <em>D:\MINGW\BIN</em>.</li>
					</ol>

					<p class="guide">NASM is now installed.</p>

					<hr />

					<h1 class="guide">6. Compiling MAME</h1>

					<p class="guide">The MAME source comes as a ZIP inside a ZIP to gain the greatest compression possible.
					To compile MAME, follow these steps:</p>

					<ol class="guide">
					  <li>Create a directory called <em>D:\MAME</em> and extract the MAME source into it. </li>
					  <li>Open an MSYS window and change directory to <em>D:/MAME</em>  (note the
					    forward slash since you are using MSYS). </li>
					  <li>Type 'make' and press return. </li>
					</ol>

					<p class="guide">Tips:</p>
					<ul class="guide">
					  <li>To compile a Pentium Pro optimised version of MAME, type 'make
					    I686=1'.</li>
					  <li>When compiling a new version of MAME, always run 'make clean'
					    first (or 'make clean I686=1' if you are building a Pentium Pro
					    optimised version). Failing to do the 'clean' first might result in a dysfunctional
					    build!</li>
					</ul>

					<p class="guide">A decent computer will take about 30 minutes to compile MAME but a
					low-spec machine could take a couple of hours or more!</p>

					<hr />

					<h1 class="guide">7. Compiling MAME Updates</h1>

					<p class="guide">The MAME updates come as '.diff' files, distributed inside a ZIP.
					To compile the MAME update, follow these steps:</p>

					<ol class="guide">
					  <li>Extract the '.diff' file into <i>D:\MAME</i> (assuming that's where you
					    extracted the MAME source). </li>
					  <li>Open an MSYS window and change directory to <em>D:/MAME</em>  (note the
					    forward slash since you are using MSYS). </li>
					  <li>Type 'patch -p1 &lt;whatever.diff' and press return.<br />
					    Use this procedure for all of the updates that you wish to apply.<br />
					    Note: Be sure to apply all updates in the correct sequence and do not miss any out! </li>
					  <li>Type 'make clean' and press return. </li>
					  <li>Type 'make' and press return. </li>
					</ol>

					<p class="guide">Tips (as above):</p>
					<ul class="guide">
					  <li>To compile a Pentium Pro optimised version of MAME, type 'make
					    I686=1'.</li>
					  <li>When compiling a new version of MAME, always run 'make clean'
					    first (or 'make clean I686=1' if you are building a Pentium Pro
					    optimised version). Failing to do the 'clean' first might result in a dysfunctional
					    build!</li>
					</ul>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

