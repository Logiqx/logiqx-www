
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <script language="php">
					// Standard PHP includes (database connection and constants)

					include ('../../Resources/Include.php');

				</script>
    <title>ROMBuild v2.8</title>
    <script language="php">
					// Include standard &lt;head> metadata

					include('../../Resources/Head.php');
				</script>
  </head>
  <body>
    <script language="php">
					// The main page content is a 3 column table (left column is the menu, right one is the news)

					echo '' . LF . LF;

					include('../../Resources/Top.php');
				</script>
	<p>
      <img src="../../Resources/Logiqx.png" width="327" height="68" alt="../../Resources/Logiqx.png"/>
    </p>
	<p>
      <img src="ROMBuild.png" width="120" height="40" alt="ROMBuild.png"/>
    </p>

	
	
	
	

	

	
		<p>
			ROMBuild is a ROM manipulation tool that is capable of creating ROMs for the older arcade emus using MAME ones. An example of this is by splitting ROMs in two or joining two together but ROMBuild supports much more than this. It can can split, join, extract, fill, patch, pad, interleave etc but to you the user that doesn't really matter. The important thing is that MAME ROMs go in and ROMs for another emulator come out. :)
		</p>

		<p>
			When used in conjunction with the <a href="../../Dats/">CMPro/ROMCenter dats</a> that I have produced you can generate ROM sets for practically any emulator from MAME ROMs. In fact, the only ROMs you can't generate from MAME sets are where MAME doesn't support the game.
		</p>
	

	<table>
      <tr>
		<td>
          <p>Download <a href="rbuild28.zip">ROMBuild v2.8</a> (106KB)</p>
          <p>
            <a href="rbuild28.zip">
              <img src="../../Resources/Disk.png" width="38" height="38" alt="Download"/>
            </a>
          </p>
        </td>
	</tr>
    </table>

	
		<p>
			There is also the special version that I created for the Neo-Geo changes around the time of MAME v0.80. The changes affected many emulators but this special release of my tool can build the new type of ROMs from the old ones. In total 23 games were affected, iirc:
		</p>
	

	<table>
      <tr>
		<td>
          <p>Download <a href="rbmame80.zip">ROMBuild [MAME v0.80 special]</a> (52KB)</p>
          <p>
            <a href="rbmame80.zip">
              <img src="../../Resources/Disk.png" width="38" height="38" alt="Download"/>
            </a>
          </p>
        </td>
	</tr>
    </table>

	<hr/>
    <p>
      <img src="../../Resources/History.png" width="85" height="40" alt="History"/>
    </p>
    <p>
      <b>17 October 2006</b> - ROMBuild v2.8</p>
    <p>
			
			
			
				- Removed RAINE ROMs since they are now MAME compatible (v0.43.4+)<br/>
	    			- Updated internal ROM names to match MAME v0.109
    			
		</p>
    <p>
      <b>5 October 2005</b> - ROMBuild v2.7</p>
    <p>
			
			
			
				- Removed M1 ROMs since they are now MAME compatible (from v0.7.6).<br/>
				- Removed Nebula ROMs since they are now MAME compatible (from v2.25).<br/>
				- Added support for invaders.rom for SIDE.
			
		</p>
    <p>
      <b>28 March 2005</b> - ROMBuild v2.6</p>
    <p>
			
			
			
				- Updated altbeast ROMs (Calice and System16) to match MAME v0.95.<br/>
			
		</p>
    <p>
      <b>28 February 2005</b> - ROMBuild v2.5</p>
    <p>
			
			
			
				- Internal game renames for Altered Beast (to match MAME v0.92). <br/>
				- Internal ROM renames for a few CPS-2 games (to match MAME v0.92). <br/>
				- Fixed a bug that caused the -l option to crash when listing ROMs.<br/>
			
		</p>
    <p>
      <b>30 January 2005</b> - ROMBuild v2.4</p>
    <p>
			
			
			
				- Removed FBA v0.2.94.98 from the source (superceded by v0.2.95.22). <br/>
				- Added von2 (MAME v0.91) for Nebula Jukebox v2.9 and M1 v0.7.5a3.<br/>
			
		</p>
    <p>
      <b>6 January 2005</b> - ROMBuild v2.3</p>
    <p>
			
			
			
				- Removed ZiNc v0.9 from the source (superceded by v1.0.2). <br/>
				- Removed WinKawaks v1.49 from the source (superceded by v1.52). <br/>
				- Internal renames of tnzs and clone ROMs to match MAME v0.90. <br/>
				- Added an extra option for the benefit of CAESAR.<br/>
			
		</p>
    <p>
      <b>26 October 2004</b> - ROMBuild v2.2</p>
    <p>
			
			
			
				- Added Dynasty Wars support for various emus following MAME v0.87.<br/>
			
		</p>
    <p>
      <b>10 September 2004</b> - ROMBuild v2.1</p>
    <p>
			
			
			
				- Removed the Snow Bros conversions for RAINE (now uses MAME ROMs).<br/>
			
		</p>
    <p>
      <b>2 July 2004</b> - ROMBuild v2.0</p>
    <p>
			
			
			
				- Tidied up the code a bit. Now uses DatLib for common functions. <br/>
				- Corrected internal filenames that were incorrect (mainly Neo-Geo).<br/>
			
		</p>
    <p>
      <b>9 March 2004</b> - ROMBuild v1.18</p>
    <p>
			
			
			
				- Lots of changes around the Neo-Geo redumps of MAME v0.80: <br/>
				- Removed Nebula <br/>
				- Added ACE, RCPS <br/>
				- Changed Calice, FBA, NeoRAGEx <br/>
				- Also removed S11Emu and Zinc<br/>
			
		</p>
    <p>
      <b>5 February 2004</b> - ROMBuild v1.17</p>
    <p>
			
			
			
				- Added support for Robo Army and Sengoku 2 to various emulators <br/>
(Calice, FBA, M1, NeoRAGEx and Nebula).
			
		</p>
    <p>
      <b>19 December 2003</b> - ROMBuild v1.16</p>
    <p>
			
			
			
				- Added a quick fix so that it does not process large unzipped files.<br/>
			
		</p>
    <p>
      <b>22 October 2003</b> - ROMBuild v1.15</p>
    <p>
			
			
			
				- Removed support for some Androdun ROMs in NeoRAGEx. <br/>
				- Changed the internal details for Modeler's harddunk (harddunj in MAME). <br/>
				- Added Tekken 2 sound ROMs for S11Emu and Zinc. <br/>
				- Added Gauntlet graphics ROMs for MGE. <br/>
				- Added Snow Bros graphics ROMs for various emulators. <br/>
				- Added various games for RAINE.<br/>
			
		</p>
    <p>
      <b>6 May 2003</b> - ROMBuild v1.14</p>
    <p>
			
			
			
				- Added gaiapols/gaiaplis for Hoot and M1. <br/>
				- Added harddunk for Modeler.<br/>
			
		</p>
    <p>
      <b>18 January 2003</b> - ROMBuild v1.13</p>
    <p>
			
			
			
				- Added ThunderForce AC (Bootleg) for Sega System C2 Emulator v0.2b.<br/>
			
		</p>
    <p>
      <b>24 March 2002</b> - ROMBuild v1.12</p>
    <p>
			
			
			
				- Changed internals for Space Invaders Galactica to match MAME v0.59. <br/>
				- Added support for Tower of Druaga ROMs (HiVE v1.04).<br/>
			
		</p>
    <p>
      <b>23 March 2002</b> - ROMBuild v1.11</p>
    <p>
			
			
			
				- Changed source to compile without modification on FreeBSD. <br/>
				- Changed internal Neo-Geo ROM names to match MAME v0.59. <br/>
				- Added support for Pisces graphics ROMs (changed in MAME v0.59):<br/>
				- Xcade v0.85, MacMoon v0.86, Arcade Emulator v0.7, GalEmu v40.9, <br/>
				- PASMulator v0.22, Replay v0.04, Rockulator++ v0.98a, SAGE v1.16, <br/>
				- Sparcade v2.33b, VAntAGE v1.11 <br/>
			
		</p>
    <p>
      <b>11 November 2001</b> - ROMBuild v1.10</p>
    <p>
			
			
			
				- Changed internal details of wboy, wbml and tnzs for MAME v0.56. <br/>
				- Unfortunately it is also impossible to build alpham2 for NeoRAGEx now (due to MAME using a new and completely different dump).<br/>
			
		</p>
    <p>
      <b>28 August 2001</b> - ROMBuild v1.9</p>
    <p>
			
			
			
				- Changed internal details for Pacman clones to match MAME v0.53 <br/>
				- Added Altered Beast for Calice (why does it use old ROM sets)!<br/>
			
		</p>
    <p>
      <b>22 July 2001</b> - ROMBuild v1.8</p>
    <p>
			
			
			
				- Added Super Galaxians for Mimic v1.08. <br/>
				- Ms Pacman was renamed in MAME v0.37b16. Changed ROMBuild to match.<br/>
			
		</p>
    <p>
      <b>8 June 2001</b> - ROMBuild v1.7</p>
    <p>
			
			
			
				- Added Speed Freak for Cinelator 95 Beta. <br/>
				- Now compiled using MinGW and the -Wall option (for clean code).<br/>
			
		</p>
    <p>
      <b>17 March 2001</b> - ROMBuild v1.6</p>
    <p>
			
			
			
				- Fixed problem affecting NeoRAGEx/Callus builds from unzipped ROMs. <br/>
				- Added '-L' option to list all of the ROMs that ROMBuild supports. <br/>
				- Removed Xevious Emulator Demo v1.6 (no longer necessary). <br/>
				- Changed xevious and sxevious PROMs in HiVE to use clean MAME PROMs.<br/>
			
		</p>
    <p>
      <b>11 March 2001</b> - ROMBuild v1.5</p>
    <p>
			
			
			
				- Added SonSon support for RAGE, Replay, Rockulator++ and SonSon Emulator.<br/>
			
		</p>
    <p>
      <b>1 March 2001</b> - ROMBuild v1.4</p>
    <p>
			
			
			
				- Added full support for NeoRAGEx v0.6 and QSound Player v2.<br/>
			
		</p>
    <p>
      <b>1 February 2001</b> - ROMBuild v1.3</p>
    <p>
			
			
			
				- Added Road Runner support for Sideway and removed RAINE (no longer required).<br/>
			
		</p>
    <p>
      <b>18 January 2001</b> - ROMBuild v1.2</p>
    <p>
			
			
			
				- Updated to handle Galaxian ROM changes of MAME v0.37 b11.<br/>
			
		</p>
    <p>
      <b>18 December 2000</b> - ROMBuild v1.1</p>
    <p>
			
			
			
				- New in v1.1: Jump Bug Emulator v0.50 and Kung Fu Master v0.0000001a.<br/>
			
		</p>
    <p>
      <b>8 December 2000</b> - ROMBuild v1.0</p>
    <p>
			
			
			
				- First public release.<br/>
			
		</p>
<script language="php">
					// Standard page footer (counter)

					include('../../Resources/Bottom.php');
				</script>
  </body>
</html>


