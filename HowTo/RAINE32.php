<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Compiling RAINE32</title>' . LF . LF;

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

					<p><img src="RAINE32.gif" width="237" height="40" alt="Compiling RAINE32" /></p>

					<p>24th February 2005</p>

					<p>Tested with RAINE32 v0.42.3</p>

					<h1 class="guide">1. Introduction</h1>

					<p class="guide">This guide describes how to enhance a MinGW environment (set up using my MAME
					guide) so that it can compile RAINE32. It is written in the same style as the document I wrote explaining how
					to create the MinGW environment for MAME. With the help of this guide any
					proficient PC user should be able to set up MinGW for RAINE32 in around 15 to 20 minutes (assuming the required files are downloaded beforehand). The guide has been
					written with the intention that the user will gain an understanding of what they are doing
					rather than just downloading a ready prepared distribution. It will not tell you how to do
					basic tasks such as <em>creating</em> a directory or <em>extracting</em> files from a ZIP,
					it will tell you <em>where</em> to create a directory or <em>where </em>to extract a ZIP.
					So long as you have those basic skills then you should have no problems.</p>

					<p class="guide">One of the big advantages of explaining things in this manner is that you can
					update your own environment to use newer versions of the tools as they come out,
					without being dependant on someone else doing it for you.</p>

					<p class="guide">The guide will explain how to enhance MinGW on the D: drive but you can choose any
					drive and location that you wish (so long as you think about what you are doing!).</p>

					<p class="guide">First things first, you must follow the guide for <a href="WinMAME.shtml">compiling
					MAME</a>. You cannot continue with this guide until you have done that!</p>

					<hr />

					<h1 class="guide">2. Installing Allegro</h1>

					<p class="guide"><a href="http://www.talula.demon.co.uk/allegro/" target="_blank">Allegro</a> (A Low Level Game Routines
					Library) is used by RAINE32 for graphics handling, sound and input handling.<br/>
					</p>

					<table class="guide">
					  <tr>
					    <td class="green">File</td>
					    <td class="green">Description</td>
					  </tr>
					  <tr>
					    <td class="green">
					    <a href="http://caesar.logiqx.com/zips/tools/gfx_libs/allegro/all403.zip">all403.zip</a></td>
					    <td class="green">Source code for Allegro 4.0.3
					      <p class="guide">You can get the latest version of Allegro from
					      the Demon link above. Just download the latest source code in DOS/Windows
					      friendly format.</p>
					    </td>
					  </tr>
					  <tr>
					    <td class="green"><a href="http://caesar.logiqx.com/zips/tools/gfx_libs/allegro/ahack400.zip">ahack400.zip</a></td>
					    <td class="green">RAINE triple buffer hack for Allegro 4.0.0 (fine for 4.0.3)</td>
					  </tr>
					</table>

					<p class="guide">Firstly, if you didn't install the DirectX 7.0  headers then do it now!</p>
					<ol class="guide">
					  <li>Extract <em>all403.zip</em> to <em>D:\</em> (a directory called <em>ALLEGRO</em> will
					    be created automatically).</li>
					  <li>Open a command prompt (n.b. NOT MSYS) and change directory to <em>D:\ALLEGRO</em></li>
					  <li>Type 'fix mingw32' and press return.</li>
					  <li>Extract <i>ahack400.zip </i>to <i>D:\ALLEGRO</i>.</li>
					  <li>Open an MSYS window and change directory to <em>D:/ALLEGRO</em> (note the
					    forward slash since you are using MSYS).</li>
					  <li>Apply the RAINE triple buffer hack: type 'patch -p1 &lt;raine_allegro_hacks-u.diff'
					    and press return.</li>
					  <li>Type 'export MINGDIR=/mingw' and press return (note the
					    forward slash and no drive letter since you are using MSYS).</li>
					  <li>Type 'make lib'<em> </em>and press return. A decent computer will only
					    take a couple of minutes to compile Allegro.</li>
					</ol>

					<p class="guide">Note: You may well some warnings about 'deprecated' functions. Don't
					worry, these are only warnings and are not fatal errors.</p>

					<p class="guide">After compiling Allegro, install it as follows (from the MSYS window that you compiled under) :</p>

					<ol class="guide">
					  <li>Type 'make install'. This will install the relevant Allegro files into you
					    MinGW directory.</li>
					</ol>

					<p class="guide">Tip: You can create your Allegro directory anywhere that you wish (I only
					used the D: 
					drive for simplicity). You will also notice that the first make 
					command was 'make lib'. If you wish to do a full Allegro build (which includes
					example programs and is about 40MB bigger than the library alone) you can use 'make' 
					instead of 'make lib'. However, only the library is required
					to compile RAINE32  so it is fairly useless doing a full build just for RAINE32.</p>

					<hr />

					<h1 class="guide">4. Installing EXEDAT</h1>

					<p class="guide">EXEDAT is used to append RAINE.dat onto RAINE.EXE. It is
					part of Allegro so you don't need to download anything extra.</p>

					<p class="guide">Compile EXEDAT as follows: </p>

					<ol class="guide">
					  <li>Open an MSYS window and change to the Allegro directory (if you are not
					    already in it)<em>.</em></li>
					  <li>Type 'make exedat'<em> </em>and press return. This will now create <em>exedat.exe</em>
					    in the <em>tools</em> directory of Allegro.</li>
					</ol>

					<p class="guide">After compiling EXEDAT, install it for MinGW as follows:</p>

					<ol class="guide">
					  <li>Type 'cp tools/exedat.exe /mingw/bin'<em> </em>and press return.</li>
					</ol>

					<p class="guide">EXEDAT is now installed. Once you have installed Allegro and EXEDAT, you can
					delete the Allegro directory if you wish.</p>

					<hr />

					<h1 class="guide">5. Installing SDL</h1>

					<p class="guide"><a href="http://www.libsdl.org/" target="_blank">SDL</a> (Simple DirectMedia Layer) is used by RAINE32 for
					sound handling. You need the following archive:</p>

					<table class="guide">
					  <tr>
					    <td class="green">File</td>
					    <td class="green">Description</td>
					  </tr>
					  <tr>
					    <td class="green">
					    <a href="http://caesar.logiqx.com/zips/tools/gfx_libs/sdl/SDL-devel-1.2.7-mingw32.tar.gz">SDL-devel-1.2.7-mingw32.tar.gz</a></td>
					    <td class="green">SDL 1.2.7 development libraries for MinGW.
					      <p class="guide">You can get the latest version of the SDL development libraries from
					      the link above. Just download the latest tar.gz file for MinGW.</p>
					      <p class="guide">Note: I can't get SDL 1.2.8 to work yet!</p>
					    </td>
					  </tr>
					</table>

					<p class="guide"><u>To install SDL:</u></p>

					<ol class="guide">
					  <li>Extract <em>SDL-devel-1.2.7-mingw32.tar.gz</em> to <em>D:\</em> (a directory called <em>SDL-1.2.7</em>
					    will
					    be created automatically).</li>
					  <li>Open an MSYS window and change directory to <em>D:/SDL-1.2.7</em> (note
					    the forward slash since you are using MSYS).</li>
					  <li>Type 'make install-sdl prefix=/mingw' (note
					    the forward slash since you are using MSYS).</li>
					</ol>

					<p class="guide">SDL is now installed in your MinGW environment. Once installed in the MinGW
					environment, you can delete the <i>SDL-1.2.7</i> directory.</p>

					<hr />

					<h1 class="guide">6. Installing zlib</h1>

					<p class="guide"><a href="http://www.gzip.org/zlib/" target="_blank">zlib</a> (ZIP library) is used by RAINE32 for loading zipped ROMs.</p>

					<p class="guide"><u>To compile zlib from the source (n.b. you can skip this and use the
					pre-compiled version below if you wish)</u></p>

					<table class="guide">
					  <tr>
					    <td class="green">File</td>
					    <td class="green">Description</td>
					  </tr>
					  <tr>
					    <td class="green"><a href="http://caesar.logiqx.com/zips/tools/zip_libs/zlib/zlib122.zip">zlib122.zip</a></td>
					    <td class="green">Source code for zlib 1.2.2
					      <p class="guide">You can get the latest version of zlib from the gzip
					      link above.</p>
					    </td>
					  </tr>
					</table>

					<ol class="guide">
					  <li>Create a directory called <em>D:\zlib</em> and extract <em>zlib-1.2.2.tar.gz</em>
					    into it
					    using WinZip (or similar). </li>
					  <li>Edit <em>D:\zlib\</em><i>win32\zlib1.rc</i>  with your favourite text
					    editor and change the version numbers from '1,2,2' to
					    '1,2,2,0' (on lines 8 and 9). </li>
					  <li>Open an MSYS window and change directory to <em>D:/zlib</em> (note
					    the forward slash since you are using MSYS). </li>
					  <li>Type 'make -f win32/makefile.gcc' and press return. </li>
					</ol>

					<p class="guide">After compiling zlib, install it for MinGW as follows (from the MSYS window):</p>

					<ol class="guide">
					  <li>Type 'cp libz.a /mingw/lib' and press return (note the
					    forward slash and no drive letter since you are using MSYS). </li>
					  <li>Type 'cp zlib.h zconf.h /mingw/include' and press return (note the
					    forward slash and no drive letter since you are using MSYS). </li>
					</ol>

					<p class="guide">Once you have installed the required files you can delete <em>D:\ZLIB </em>if you wish.
					Programmers may wish to keep it for reference purposes but other than that you won't need
					it any longer.</p>

					<p class="guide">Tip: As with Allegro it is not necessary that you use the D: drive for compiling zlib,
					it can be done anywhere on your machine.</p>

					<hr />

					<h1 class="guide">7. Installing UPX</h1>

					<p class="guide"><a href="http://upx.sourceforge.net/" target="_blank">UPX</a> (Ultimate Packer for
					eXecutables) is used to reduce the size of the RAINE32 executable. You will
					need the following archive:</p>

					<table class="guide">
					  <tr>
					    <td class="green">File</td>
					    <td class="green">Description</td>
					  </tr>
					  <tr>
					    <td class="green"><a href="http://caesar.logiqx.com/zips/tools/compilers/mingw/upx125w.zip">upx125w.zip</a></td>
					    <td class="green">UPX 1.25 for Win32</td>
					  </tr>
					</table>

					<p class="guide">To install UPX:</p>

					<ol class="guide">
					  <li>Open the archive using WinZip and extract <em>UPX.EXE</em> into <em>D:\MINGW\BIN</em>. </li>
					</ol>

					<p class="guide">UPX is now installed and you can use it to compress any .EXE file that you wish (not
					just MAME and RAINE32).</p>

					<hr />

					<h1 class="guide">8. Installing NASM</h1>
					<p class="guide">You should have already installed NASM within the MAME guide but RAINE needs it to have a different name!</p>

					<ol class="guide">
					  <li>Open an MSYS window and change directory to <em>/mingw/bin</em> (note the
					    forward slash since you are using MSYS). </li>
					  <li>Type 'cp -p nasmw.exe nasm.exe' and press return. </li>
					</ol>

					<p class="guide">NASM is now installed.</p>

					<hr />

					<h1 class="guide">9. Compiling RAINE32</h1>

					<p class="guide">To compile RAINE32 follow these steps:</p>

					<ol class="guide">
					  <li>Create a directory called <em>D:\RAINE</em> and extract the RAINE source into it
					    (acquiring the source is described in <a href="Downloading.shtml">this document</a>).</li>
					  <li>Open an MSYS window and change directory to <em>D:/RAINE</em> (note the
					    forward slash since you are using MSYS).</li>
					  <li>Type 'make' and press return. If it fails straight away, try it again!</li>
					  <li>Type 'make compress' to attach <em>RAINE.DAT</em> and run UPX.</li>
					</ol>

					<p class="guide">A decent computer will take about 5 minutes to compile RAINE32 and
					compress it.</p>

					<p class="guide">Note: You may well get lots of warnings about 'deprecated' functions. Don't
					worry, these are only warnings and are not fatal errors.</p>

		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

