<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Video Tools</title>' . LF . LF;

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
					<h1>Useful Digital Video Tools:<br />
					Applicable to DVD Ripping/Copying and Video Capture</h1>

					<h2>RECOMMENDED</h2>
					<p>
					<b>AviSynth </b>v2.5.5 - 31/08/2004<br />
					Use AviSynth to feed MPEG-2 or DV footage straight into CCE (or any other MPEG-2 
					encoder), optionally applying visual filters like Convolution3D.<br />
					<a href="http://www.avisynth.org/">http://www.avisynth.org/</a><br />
					<a href="http://sourceforge.net/projects/avisynth2/">
					http://sourceforge.net/projects/avisynth2/</a><br />
					<i>Freeware</i></p>

					<p>
					<b>VirtualDub </b>v1.5.10 - 02/12/2003<br />
					Use VirtualDub to check your AviSynth scripts visually. I also use VirtualDub to extract sound from a video clip for conversion to Dolby AC3.<br />
					<a href="http://www.virtualdub.org/">http://www.virtualdub.org/</a><br />
					<i>Freeware</i></p>

					<p>
					<b>Convolution3D </b>v1.01 - 22/04/2003 (re-compiled for AviSynth v2.5)<br />
					An AviSynth anti-noise filter with both spatial and temporal elements. Good for 
					cleaning up dirty video captures and low quality camcorder footage. Also useful
					when re-encoding low quality MPEG-2 files.<br />
					<a href="http://www.hellninjacommando.com/con3d/">
					http://www.hellninjacommando.com/con3d/</a><br />
					<a href="http://www.avisynth.org/warpenterprises/files/convolution3d_25_dll_20030422.zip">
					http://www.avisynth.org/warpenterprises/files/convolution3d_25_dll_20030422.zip</a><br />
					<i>Freeware</i></p>

					<p>
					<b>Decomb </b>v5.2.1 - 19/05/2004<br />
					An AviSynth plugin for removing combing artifacts from telecined progressive
					streams, interlaced streams, and mixtures thereof. Excellent for NTSC-&gt;PAL 
					conversions.<br />
					<a href="http://neuron2.net/decomb/decombnew.html">
					http://neuron2.net/decomb/decombnew.html</a><br />
					<i>Freeware</i></p>

					<h2>OPTIONAL</h2>

					<p><b>Bitrate Viewer</b> v1.5.054 - 30/06/2002<br />
					Despite being slightly buggy and having some odd behaviour, this tool is
					extremely useful for examining MPEG-2 files to determine their quality, etc.<br />
					<a href="http://www.tecoltd.com/bitratev.htm">http://www.tecoltd.com/bitratev.htm</a><br />
					<i>Shareware, 29.95 Euros. Warning, Bitrate figures do not seem to function as
					expected once registered!</i></p>

					<hr /><h1>Step 1 - Video Capture<br />
					Note: This does not apply to DVD Ripping/Copying</h1>

					<h2>RECOMMENDED</h2>

					<p><b>ScenalyzerLive </b>v2.1 - 28/07/2003<br />
					The ultimate DV capture tool! ScenalyzerLive can save DV in Canopus format so AVI2CDVC (see 'optional' below) is not required.<br />
					<a href="http://scenalyzer.com/">http://scenalyzer.com/</a><br />
					Trialware, <i>$39 or&nbsp;&euro;39 - I have registered</i>
					</p>

					<p>
					<b>Canopus DV Codec </b>v1.0 - 19/05/1999<br />
					Allows you to use Canopus format DV files (i.e. the 'cdvc' FourCC). The codec 
					only allows you to read DV files but not to write them.<br />
					<a href="http://www.canopus.com/">http://www.canopus.com/</a><br />
					<a href="http://www.canopus.com/US/support/drivers/drivers_dvcodec.php">
					http://www.canopus.com/US/support/drivers/drivers_dvcodec.php</a><br />
					<i>Freeware</i></p>

					<h2>OPTIONAL</h2>
					<p>
					<b>AVI2CDVC </b>v1.01 - 15/05/2003<br />
					Allows you to change the FourCC of DV captures from 'dvsd' to 'cdvc' in batch.
					This enables you to use the Canopus codec rather than the weaker MS one.<br />
					<a href="http://www.logiqx.com/Tools/AVI2CDVC/AVI2CDVC.shtml">
					http://www.logiqx.com/Tools/AVI2CDVC/AVI2CDVC.shtml</a><br />
					<i>Freeware - written by me</i></p>

					<p>
					<b>Huffyuv </b>v2.1.1 - 24/08/2000<br />
					A very fast, lossless codec that is good for video capture (use it instead of uncompressed YUV). 
					Not usually needed when working with DV but useful if you need to re-save 
					AviSynth output as an actual AVI file (for whatever reason).<br />
					<a href="http://neuron2.net/www.math.berkeley.edu/benrg/huffyuv.html">
					http://neuron2.net/www.math.berkeley.edu/benrg/huffyuv.html</a><br />
					<i>Donations, no registration as such</i></p>

					<p>
					<b>Morgan M-JPEG Codec V3 </b>v3.0.0.9 - November 2001<br />
					Allows the use of Matrox Rainbow Runner captures (my previous capture card).
					Not needed when doing DV captures via FireWire.<br />
					<a href="http://www.morgan-multimedia.com/">http://www.morgan-multimedia.com/</a><br />
					<i>60 day trial, $20 - I have registered</i></p>

					<hr />

					<h1>Step 1 - DVD Ripping<br />
					Note: This does not apply to Video Capture</h1>

					<h2>RECOMMENDED</h2>
					<p>
					<b>DVD Decrypter </b>v3.5.4.0 - 21/03/2005<br />
					The best DVD ripper available.
					It has Disk (ISO), File (VOB) and IFO (VOB/M2V/AC3, etc) modes.<br />
					<a href="http://www.dvddecrypter.com/">http://www.dvddecrypter.com/</a><br />
					<i>Donations, no registration as such</i></p>

					<p><b>DAEMON Tools </b>v3.47 - 29/08/2004<br />
					Allows you to mount ISO images as a virtual DVD-ROM drive (or CD-ROM drive).
					Very useful after ripping in ISO mode because you can then read the ISO with
					tools such as DVD Decrypter and DVD X Copy.<br />
					<a href="http://www.daemon-tools.cc/">http://www.daemon-tools.cc/</a><br />
					<i>Donations, no registration as such</i></p>

					<p>
					<b>DGMPGDec </b>v1.0.12 - 07/06/2004<br />
					DGIndex (replacement for DVD2AVI) prepares a D2V for M2V/M2P/MPV/VOB (MPEG-2) files.
					The D2V is a sort of virtual movie clip that does not eat up disk space but can be loaded as a standard AVI.
					This is achieved by the application loading the D2V using DGDecode.dll (replacement for MPEG2DEC3).<br />
					<a href="http://neuron2.net/fixd2v/decodefix.html">
					http://neuron2.net/fixd2v/decodefix.html</a><i><br />
					Freeware</i></p>

					<hr />

					<h1>Step 2 - MPEG-2 Encoding/Transcoding<br />
					see <a href="http://www.tecoltd.com/enctest/enctest.htm">http://www.tecoltd.com/enctest/enctest.htm</a></h1>

					<h2>RECOMMENDED</h2>

					<p>
					<b>Cinema Craft Encoder Basic (CCE-Basic)</b> v2.69.01.10 - 30/06/2004<br />
					Little brother of CCE-SP, widely accepted as the best MPEG-2 encoder that there is!<br />
					Contains the same engine as the CCE-SP ($1950) but some of the advanced functions are unavailable (you don't need them though).<br />
					Only accepts AVI, MOV and DV input - use AviSynth &amp; DGMPGDec to re-encode MPEG-2.<br />
					<a href="http://www.cinemacraft.com/eng/ccebasic.html">
					http://www.cinemacraft.com/eng/ccebasic.html</a><br />
					<i>$58 - I have registered</i></p>

					<p><b>ReJig </b>v0.5e - 28/12/2003<br />
					A port of Metakine's transcoding engine from DVDRemaster (called ReQuant).
					You can find the DVDRemaster site at <a href="http://www.metakine.com/">http://www.metakine.com/</a>.
					ReJig can reduce the size of an MPEG-2 movie to any specified percentage in about 15
					minutes!&nbsp;<br />
					<a href="http://www.rejig.org/">http://www.rejig.org/</a><br />
					<a href="http://nic.dnsalias.com/ReJig.zip">http://nic.dnsalias.com/ReJig.zip</a><br />
					<i>Freeware</i></p>

					<h2>OPTIONAL</h2>
					<p>
					<b>Bitrate Calculator Spreadsheet </b>- 28/10/2003<br />
					A spreadsheet that I created for calculating bitrates to be used when encoding
					and transcoding movies.<br />
					<i>Not available on the internet!</i><br />
					<i>Freeware - written by me</i></p>

					<hr />

					<h1>Step 3 - Dolby Digital Encoding<br />
					Note: This does not apply to DVD Ripping/Copying</h1>

					<h2>RECOMMENDED</h2>
					<p><b>Soft Encode</b> v1.0<br />
					A good Dolby Digital encoding tool.<br />
					<a href="http://www.sonicspot.com/softencode/softencode.html">http://www.sonicspot.com/softencode/softencode.html</a><br />
					<i>$995</i></p>

					<p><b>Sound Forge</b> v7.0 (I use v6.0e [build 237] at the moment though)<br />
					An excellent audio processing tool. Particularly useful for finding the
					correct <i>dialog normalization</i> value to use in Soft Encode.<br />
					<a href="http://www.sonicfoundry.com/">http://www.sonicfoundry.com/</a><br />
					<i>$399.96</i></p>

					<hr />

					<h1>Step 4 - DVD Authoring</h1>

					<h2>RECOMMENDED</h2>
					<p>
					<b>DVD-lab</b> v1.3 - 23/01/2004<br />
					A sub $100 authoring system that is very simple to use and very capable in terms of features.<br />
					<a href="http://www.mediachance.com/dvdlab/">http://www.mediachance.com/dvdlab/</a><br />
					<i>$99 - I have registered</i></p>

					<p>
					<b>DVD ReBuilder</b> v0.63a - 05/10/2004<br />
					This program was built to bridge 
					the gap between the incredibly easy but limited "one-click" solutions and the
					incredibly complex but high-quality methods of DVD ripping and backup. DVD ReBuilder is my current choice for making DVD backups (utilising ReJig and
					CCE-Basic).<br />
					<a href="http://forum.doom9.org/showthread.php?postid=548359">http://forum.doom9.org/showthread.php?postid=548359</a><br />
					<i>Donations (suggests $10), no registration as such</i></p>

					<h2>OPTIONAL</h2>

					<p><b>IfoEdit </b>v0.96 - 11/10/2003<br />
					A very useful tool for viewing and editing IFO files (these contain all of the
					information about the contents of a DVD). IfoEdit can be used for simple DVD
					authoring too (when creating copies of DVDs for example).<br />
					<a href="http://mpucoder.kewlhair.com/derrow/">http://mpucoder.kewlhair.com/derrow/</a><br />
					<i>Freeware</i></p>

		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

