
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <script language="php">
					// Standard PHP includes (database connection and constants)

					include ('../../Resources/Include.php');

				</script>
    <title>MAMEDiff v2.29</title>
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
      <img src="MAMEMAME.png" width="316" height="100" alt="MAMEMAME.png"/>
    </p>
	<p>
      <img src="MAMEDiff.png" width="123" height="40" alt="MAMEDiff.png"/>
    </p>

	
	
	
	

	

	
		<p>MAMEDiff makes it easy to identify ROM related changes in a new release of MAME (it can even find game additions that aren't mentioned in whatsnew.txt). It can spot game renames and will not regard them as one game deleted and another added. When ROMs or games are renamed (or if there is a change in the way that sets are merged), MAMEDiff will just tell you how to rebuild the affected sets (i.e. no downloading required). A must-have for any MAME fanatic! It also works for new releases of MESS, RAINE, Final Burn Alpha, Kawaks, etc.</p>
	

	<table>
      <tr>
		<td>
          <p>Download <a href="mdiff229.zip">MAMEDiff v2.29</a> (218KB)</p>
          <p>
            <a href="mdiff229.zip">
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
      <b>5 May 2008</b> - MAMEDiff v2.29</p>
    <p>
			
			
			
				- Added the -x option for Final Burn and FBA. Use it with -d1.<br/>
    			
		</p>
    <p>
      <b>5 May 2008</b> - MAMEDiff v2.28</p>
    <p>
			
			
			
				- Uses DatLib v2.28.<br/>
				- MAMEDiff -z option is inferred from 'forcenodump' (if present).<br/>
				- Fixed de-duplication of "nodump" ROMs and disks for MAMEDiff.<br/>
				- Log file now shows the MAMEDiff version as well as the options.<br/>
    			
		</p>
    <p>
      <b>24 March 2008</b> - MAMEDiff v2.27</p>
    <p>
			
			
			
				- Uses DatLib v2.24.<br/>
				- Fixed crash (allzip had spurious carriage returns in kyukaidk).<br/>
    		                - DatLib 2.23 also added the Generic XML format.
			
		</p>
    <p>
      <b>30 December 2006</b> - MAMEDiff v2.26</p>
    <p>
			
			
			
				- Uses DatLib v2.19.<br/>
				- Improved -dX modes (understands merging despite differing names) <br/>
				- Added CPS-2 to descriptions when producing disk supplements<br/>
				- Added sourcefile information to output datafile<br/>
				- Fixed sample functionality in the standard comparison modes.<br/>
              			i.e. Running MAMEDiff without options or in verbose mode (-v).
    			
		</p>
    <p>
      <b>11 July 2006</b> - MAMEDiff v2.25</p>
    <p>
			
			
			
				- Uses DatLib v2.16.<br/>
				- Fixed bug that messed up internal indices (affected crc matching)<br/>
				- More intelligent directory scanner (regarding samples and CHDs)<br/>
				- Removed 64MB file limit from directory scanner (reads 1MB blocks)
    			
		</p>
    <p>
      <b>9 January 2005</b> - MAMEDiff v2.24</p>
    <p>
			
			
			
				- Added -d4 (even smaller supplements - for ROM archival only).<br/>
				- Updated the usage information on the command line.<br/>
            			- Tidied up the code in generate.c (used by -d1, -d2, -d3, -d4).
    			
		</p>
    <p>
      <b>6 December 2005</b> - MAMEDiff v2.23</p>
    <p>
			
			
			
				- Uses DatLib v2.13.<br/>
				- DatLib v2.12 broke the RomCenter drivers (now fixed).
    			
		</p>
    <p>
      <b>5 December 2005</b> - MAMEDiff v2.22</p>
    <p>
			
			
			
				- Uses DatLib v2.12.<br/>
				- Fixed a rare crash (if the longest line in the dat was the last).<br/>
				- Fixed a problem loading RomCenter data files containing [].<br/>
				- From DatLib v2.11.<br/>
				- M1 XML will not use hex for ROM sizes after all... changed back!
    			
		</p>
    <p>
      <b>31 October 2005</b> - MAMEDiff v2.21</p>
    <p>
			
			
			
				- Uses DatLib v2.10.<br/>
				- Fixed identification of ListXML for MAME+MESS v0.101u4 onwards.<br/>
    			
		</p>
    <p>
      <b>28 October 2005</b> - MAMEDiff v2.20</p>
    <p>
			
			
			
				- Uses DatLib v2.9.<br/>
				- M1 XML will use hex for ROM sizes. Changed driver accordingly.<br/>
			
		</p>
    <p>
      <b>5 October 2005</b> - MAMEDiff v2.19</p>
    <p>
			
			
			
				- Uses DatLib v2.8.<br/>
				- Improved the logerror() function (used for reporting ZIP errors).<br/>
				- Added support for M1's XML format (when it becomes available).
			
		</p>
    <p>
      <b>17 September 2005</b> - MAMEDiff v2.18</p>
    <p>
			
			
			
				- Uses DatLib v2.7.<br/>
				- Compiled with zlib 1.3.<br/>
				- Improved Neo-Geo handling for the Nebula driver.<br/>
				- Improved 'romof' handling for RomCenter 2 driver (during loading).
			
		</p>
    <p>
      <b>31 August 2005</b> - MAMEDiff v2.18</p>
    <p>
			
			
			
				- Uses DatLib v2.6. <br/>
				- Fixed a 'hang' that occurred with circular cloneof relationships.<br/>
			
		</p>
    <p>
      <b>28 February 2005</b> - MAMEDiff v2.16</p>
    <p>
			
			
			
				- Uses DatLib v2.2. <br/>
				- Added support for tab delimited files. <br/>
				- Fixed problem of unrecognised escape sequences looping forever! <br/>
			
		</p>
    <p>
      <b>22 February 2005</b> - MAMEDiff v2.15</p>
    <p>
			
			
			
				- Uses DatLib v2.1. <br/>
				- Now outputs a listing of game name comparisons (mamediff.out). <br/>
				- Can identify listinfo files even if they only contain resources. <br/>
				- Changed the error messages that are given when files are missing. <br/>
			
		</p>
    <p>
      <b>15 February 2005</b> - MAMEDiff v2.14</p>
    <p>
			
			
			
				- Uses DatLib v2.0. <br/>
				- Supports the DatLib v2.0 method of handling baddump/nodump ROMs.<br/>
			
		</p>
    <p>
      <b>16 January 2005</b> - MAMEDiff v2.13</p>
    <p>
			
			
			
				- Uses DatLib v1.14. <br/>
				- Added support for Calice drivers (DatLib v1.13). <br/>
				- Added support for the GNGEO romrc file. <br/>
				- Increased maximum ROM size to 64MB (used when scanning folders). <br/>
				- Fixed a memory allocation bug that could cause a hang sometimes. <br/>
			
		</p>
    <p>
      <b>25 November 2004</b> - MAMEDiff v2.12</p>
    <p>
			
			
			
				- Uses DatLib v1.12. <br/>
				- Improved the handling of CRC conflicts within the 'fix merging'. <br/>
			
		</p>
    <p>
      <b>26 October 2004</b> - MAMEDiff v2.11</p>
    <p>
			
			
			
				- Uses DatLib v1.11. <br/>
				- Added a parser for the ZiNc --list-sets. <br/>
			
		</p>
    <p>
      <b>18 August 2004</b> - MAMEDiff v2.10</p>
    <p>
			
			
			
				- Uses DatLib v1.10. <br/>
				- Better handling of 'clones of clones' when loading data files. <br/>
			
		</p>
    <p>
      <b>2 August 2004</b> - MAMEDiff v2.9</p>
    <p>
			
			
			
				- Fixed a bug that was introduced in v2.6 and affected -d3 option.<br/>
			
		</p>
    <p>
      <b>30 July 2004</b> - MAMEDiff v2.8</p>
    <p>
			
			
			
				- Uses DatLib v1.9. <br/>
				- Added full support for disk 'merge' and 'flags' information. <br/>
				- Made use of the DatLib FORMAT_LISTINFO_XXXXXX macros throughout.<br/>
			
		</p>
    <p>
      <b>22 July 2004</b> - MAMEDiff v2.7</p>
    <p>
			
			
			
				- Uses DatLib v1.8. <br/>
				- Removed the need for xml2info by adding my own MAME XML parser. <br/>
				- A nice side effect is that names like "Alien<sup>3</sup>: The Gun" work now!<br/>
			
		</p>
    <p>
      <b>21 July 2004</b> - MAMEDiff v2.6</p>
    <p>
			
			
			
				- Uses DatLib v1.7 <br/>
				- Added support for MESS XML. <br/>
				- Avoids duplicate ROMs in MAMEDiff -d1/-d2/-d3 data files. <br/>
				- Added support for disks and samples in the -d1/-d2/-d3 options. <br/>
				Use '-o disk' or '-o sample' to specify the desired object type. <br/>
				These options even work when comparing directories against dats! <br/>
				- Added instructions to the readme about ROM/disk/sample auditing.<br/>
			
		</p>
    <p>
      <b>18 July 2004</b> - MAMEDiff v2.5</p>
    <p>
			
			
			
				- Added -b option (non-separated BIOS) for use with the -dX modes. <br/>
				- Added sample and disk support to the standard comparison modes. <br/>
				i.e. Running MAMEDiff without options or in verbose mode (-v).<br/>
      <br/>
			
		</p>
    <p>
      <b>11 July 2004</b> - MAMEDiff v2.4</p>
    <p>
			
			
			
				- Updated the source to use the new functions of DatLib v1.4. <br/>
				- There is no functional change within MAMEDiff though.<br/>
			
		</p>
    <p>
      <b>6 July 2004</b> - MAMEDiff v2.3</p>
    <p>
			
			
			
				- Compiled with DatLib v1.3 to fix a small issue with -d1/-d2/-d3. <br/>
				Problem only affected data files containing games without ROMs.<br/>
      <br/>
			
		</p>
    <p>
      <b>5 July 2004</b> - MAMEDiff v2.2</p>
    <p>
			
			
			
				- Fixed a bug in the standard comparison that could cause a memory fault and crash MAMEDiff. <br/>
				- Made a couple of changes so that MAMEDiff can be used as a batch tool <br/>
				for ROM auditing (i.e. compare a directory against a dat): <br/>
				- When using -d1/-d2/-d3, games without ROMs are now ignored. <br/>
				- When using -d1/-d2/-d3 and -z, no dumps that replace a real CRC <br/>
				are not considered a change now (the previous ROM is still fine). <br/>
				- To use for simple ROM verification, use the following syntax: <br/>
				mamediff -d1 -r [-z] &lt;dir> &lt;dat><br/>
			
		</p>
    <p>
      <b>4 July 2004</b> - MAMEDiff v2.1</p>
    <p>
			
			
			
				- When using -d1, MAMEDiff will report the options in the log file. <br/>
				- Uses DatLib v2.1 so ZIP comparisons will be much faster now. <br/>
			
		</p>
    <p>
      <b>2 July 2004</b> - MAMEDiff v2.0</p>
    <p>
			
			
			
				- Modified to use DatLib so there should be no size limitations now. <br/>
				- Basically a complete rewrite of all dat generation routines! <br/>
				- Supports all of the DatLib formats (CMPro, XML, RomCenter, Nebula Drivers, etc.) <br/>
				- Does not re-order games and ROMs in output data files now. <br/>
				- Outputs SHA1, MD5, flags (baddump and nodump) and regions now. <br/>
				- Better at spotting renames now due to a different game checksum. <br/>
				- Better internal 'fix merging' results in more accurate output. <br/>
				- The prefix 'Neo-Geo' is no longer added to Neo-Geo games. <br/>
				- Supports full-width game descriptions now (i.e. >100 characters). <br/>
				- Replaced -M, -S, -N, -t, -T options with -d1, -d2, -d3, -r, -z. <br/>
				Read the documentation for full details of the new options. <br/>
				- Update and supplement dats will be different, hopefully better!<br/>
			
		</p>
    <p>
      <b>4 March 2004</b> - MAMEDiff v1.26</p>
    <p>
			
			
			
				- Increased length of ROM names to 40 chars (for MAME v0.79).<br/>
			
		</p>
    <p>
      <b>31 January 2004</b> - MAMEDiff v1.25</p>
    <p>
			
			
			
				- When generating data files and log files, 'crc 00000000' is now written out as 'flags nodump'.<br/>
			
		</p>
    <p>
      <b>24 January 2004</b> - MAMEDiff v1.24</p>
    <p>
			
			
			
				- Increased the maximum number of games from 5000 to 6000. <br/>
				- Added support for the 0x syntax used in some data files. <br/>
				- Fixed a small glitch in -S/-N/-M (used by 'MAME Changes') where some resources containing changes may not get output. <br/>
				- Note: This only used to happen when the resource was not required by any of the games in the output data file. <br/>
				- I finally got around to making a change so that new MAME resources don't need to be added to MAMEDiff ever again. <br/>
				- I guess I was being lazy and never expected so many of them!<br/>
			
		</p>
    <p>
      <b>20 January 2004</b> - MAMEDiff v1.23</p>
    <p>
			
			
			
				- Internal 'fix merging' runs twice now so that it propagates to all clones. <br/>
				- Minor adjustment to the routine that decides if a ROM lives in a resource. <br/>
				- This fixes the handling of shootgal/sg-01-0 and lots of unrequired games in a 'split-merged changes' datafile.<br/>
			
		</p>
    <p>
      <b>31 December 2003</b> - MAMEDiff v1.22</p>
    <p>
			
			
			
				- Added knowledge of the atpsx resource.<br/>
			
		</p>
    <p>
      <b>28 December 2003</b> - MAMEDiff v1.21</p>
    <p>
			
			
			
				- Added knowledge of the 2 new resources added in MAME v0.78. <br/>
				- Increased the maximum ROM size to 9 digits (for sfish2).<br/>
			
		</p>
    <p>
      <b>25 August 2003</b> - MAMEDiff v1.20</p>
    <p>
			
			
			
				- Added knowledge of the seven new resources added in MAME v0.72.<br/>
			
		</p>
    <p>
      <b>20 May 2003</b> - MAMEDiff v1.19</p>
    <p>
			
			
			
				- Found a small glitch in 'fix merging' while testing the non-public v1.18.<br/>
				<br/>
				- MAMEDiff v1.18 (non-public):<br/>
				<br/>
				- Fixed memory addressing bug (triggered by the many apparent [but not really] merge related changes in MAME v0.58). <br/>
				- Included 'fix merging' logic in the listinfo parser because MAME listinfo no longer includes merge details.<br/>
			
		</p>
    <p>
      <b>19 May 2003</b> - MAMEDiff v1.17</p>
    <p>
			
			
			
				- Fixed so that the missing konamigx resource in MAME v0.67 doesn't cause a crash! <br/>
				- Added support for the new 'nodump' syntax of MAME v0.68.<br/>
			
		</p>
    <p>
      <b>7 April 2003</b> - MAMEDiff v1.16</p>
    <p>
			
			
			
				- Added knowledge of the Konami GX BIOS.<br/>
			
		</p>
    <p>
      <b>18 January 2003</b> - MAMEDiff v1.15</p>
    <p>
			
			
			
				- Increased line buffer size to 32KB (for those people who end up with MAME history in their listinfo). <br/>
				- Added knowledge of the Sega ST-V BIOS.<br/>
			
		</p>
    <p>
      <b>14 November 2002</b> - MAMEDiff v1.14</p>
    <p>
			
			
			
				- Required some improvements for MAME v0.62: <br/>
				- Added support for the SKNS resource. <br/>
				- Improved merge handling (required by European SKNS games). <br/>
				- Does not output empty year information to mamediff.dat. <br/>
				- Made a minor change to improve compatibility with MSVC++.<br/>
			
		</p>
    <p>
      <b>20 May 2002</b> - MAMEDiff v1.13</p>
    <p>
			
			
			
				- Automatically detects and handles new resource ROMs. <br/>
				- New resource ROMs are now included in the -t/-T output.<br/>
			
		</p>
    <p>
      <b>22 April 2002</b> - MAMEDiff v1.12</p>
    <p>
			
			
			
				- Added support for the PGM resource. <br/>
			
		</p>
    <p>
      <b>4 April 2002</b> - MAMEDiff v1.11</p>
    <p>
			
			
			
				- Made internal 'fix-merging' logic check CRC as well as name. <br/>
				- Increased maximum ROM name length to 20 (for neopong). <br/>
				- Minor fix relating to ROM names that are too long. <br/>
				- Exits gracefully when the maximum no of games/ROMs reached.<br/>
			
		</p>
    <p>
      <b>17 March 2002</b> - MAMEDiff v1.10</p>
    <p>
			
			
			
				- Fixed bug with last version where standard compare refused to start (affected -v as well).<br/>
			
		</p>
    <p>
      <b>15 March 2002</b> - MAMEDiff v1.09</p>
    <p>
			
			
			
				- Added the -t and -T options (brief description below). <br/>
				- Made CRCs case insensitive. <br/>
				- Minor fix to -v output.<br/>
				<br/>
				- Explanation of the -t and -T options <br/>
				<br/>
				- In addition to the -M, -S and -N options that produce CMPro dats of changed ZIPs, you can produce 'tiny' versions of the dats. This allows you to create a small supplementary dat for the new emulator that when added to the original set is 100% suitable for the new emulator (i.e. for emulators that support multiple ROM paths).<br/>
				<br/>
				- Not only can these options be used when upgrading from one version of an emu to another but they can even be used when trying to use ROMs of one emulator with another (e.g. trying to use MAME ROMs with RAINE, Kawaks or Nebula). When used in this way you can use a standard MAME ROM set and a small emulator specific 'supplementary' ROM set for the emulator of your choice. <br/>
			
		</p>
    <p>
      <b>10 February 2002</b> - MAMEDiff v1.08</p>
    <p>
			
			
			
				- Improved the -M, -S and -N options:<br/>
				- The dats generated now include resource information so that CMPro can separate out Standard/Neo-Geo games etc.<br/>
				- The non-merged dat now doesn't include 'merge' information in games where the parent isn't included in the dat.<br/>
				- Modified source to compile easily with CygWin (and FreeBSD?).<br/>
			
		</p>
    <p>
      <b>7 May 2001</b> - MAMEDiff v1.07</p>
    <p>
			
			
			
				- Minor fix: Removes unneeded 'romof' details with -S and -N. <br/>
				- Now compiled with MinGW (just like the new Windows MAME). <br/>
				- Can also be compiled with Microsoft Visual C++.<br/>
			
		</p>
    <p>
      <b>24 March 2001</b> - MAMEDiff v1.06</p>
    <p>
			
			
			
				- Major: Added three new modes (-M, -S and -N) to show newly required ZIPs (generates a report and CMPro dat file). <br/>
				- Minor: Now ignores RAINE and clrmamepro headers. <br/>
				- Minor: Compiled with -Wall (fixed all warnings it uncovered).<br/>
			
		</p>
    <p>
      <b>11 March 2001</b> - MAMEDiff v1.05</p>
    <p>
			
			
			
				- Tiny fix to exclude resources from the game and ROM totals.<br/>
			
		</p>
    <p>
      <b>31 December 2000</b> - MAMEDiff v1.04</p>
    <p>
			
			
			
				- Increased game name length from 8 to 20 (for Modeler dat). <br/>
				- Prefixes Neo-Geo titles with 'Neo-Geo' (so they stand out). <br/>
				- ROMs added to parent set are also reported for clone too. <br/>
				- Now spots merge changes at the same time as CRC compliment. <br/>
				- Added '-c' option to assist with the maintenance of CAESAR. <br/>
				- Included source, do not abuse! <br/>
				- Internal change: max of 32 flags instead of 16 (int->long). <br/>
				- Internal change: strcpy->strncpy to avoid memory problems.<br/>
			
		</p>
    <p>
      <b>28 July 2000</b> - MAMEDiff v1.03</p>
    <p>
			
			
			
				- Added support for complimented CRCs. <br/>
				- MAME v0.37 beta 5 convinced me to do it ;)<br/>
			
		</p>
    <p>
      <b>23 May 2000</b> - MAMEDiff v1.02</p>
    <p>
			
			
			
				- Added support for MESS (just a minor modification) <br/>
				- Added RAINE support too (since it was so easy)<br/>
			
		</p>
    <p>
      <b>24 April 2000</b> - MAMEDiff v1.01</p>
    <p>
			
			
			
				- Released v1.01 of MameDiff to fix SIGSEGV crash in pure DOS. Didn't affect Windows users...<br/>
			
		</p>
    <p>
      <b>15 April 2000</b> - MAMEDiff v1.0</p>
    <p>
			
			
			
				- Released version 1.0 of my new tool for MAME users. <br/>
			
		</p>
<script language="php">
					// Standard page footer (counter)

					include('../../Resources/Bottom.php');
				</script>
  </body>
</html>


