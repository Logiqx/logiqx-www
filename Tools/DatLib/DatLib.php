
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <script language="php">
					// Standard PHP includes (database connection and constants)

					include ('../../Resources/Include.php');

				</script>
    <title>DatLib v2.29</title>
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
      <img src="DatLib.png" width="78" height="40" alt="DatLib.png"/>
    </p>

	
	
	
	

	

	
		<p>DatLib is now at the heart of all of my tools!</p>

		<p>It supports a variety of data file formats and handles the
		standard loading, cleansing, converting and saving operations that are required
		by tools such as DatUtil, MAMEDiff, ROMBuild, ROMInfo and ZipIdent.</p>

		<p>This package is a source only release and is only required if
		you want to compile any of my tools.</p>
	

	<table>
      <tr>
		<td>
          <p>Download <a href="datlib229.zip">DatLib v2.29</a> (105KB)</p>
          <p>
            <a href="datlib229.zip">
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
      <b>10 June 2008</b> - DatLib v2.29</p>
    <p>
			
			
			
				- Added warning when forcenodump is missing.<br/>
    			
		</p>
    <p>
      <b>5 May 2008</b> - DatLib v2.28</p>
    <p>
			
			
			
				- Fixed parsing of listinfo comments.<br/>
				- MAMEDiff -z option is inferred from 'forcenodump' (if present).<br/>
				- Fixed de-duplication of "nodump" ROMs and disks for MAMEDiff.<br/>
    			
		</p>
    <p>
      <b>16 April 2008</b> - DatLib v2.27</p>
    <p>
			
			
			
				- Fixed generation of url within CMPro datafiles (needs quotes).<br/>
				- Added support for release information (mainly for console ROMs).<br/>
				- Added release support to list+generic xml, listinfo, delimited.<br/>
				- Added the &lt;release> element to the ROM Management Datafile DTD.<br/>
				- Added support for Game Launcher and GameEx Map Files (untested).<br/>
				- Added support for substring selections (within descriptions).<br/>
    			
		</p>
    <p>
      <b>6 April 2008</b> - DatLib v2.26</p>
    <p>
			
			
			
				- Minor tweaks to the DTD (header and manufacturer now optional).<br/>
				- Fixed empty header being written to Generic XML datafiles.<br/>
				- Fixed conversion of MESS XML to Generic XML (machines -> games).<br/>
    			
		</p>
    <p>
      <b>4 April 2008</b> - DatLib v2.25</p>
    <p>
			
			
			
				- Added automatic date population (based on the version number).<br/>
				- Renamed forcezipping to forcepacking (CMPro).<br/>
				- Renamed forcedrommode to rommode (RomCenter 3).<br/>
				- Renamed forcedbiosmode to biosmode (RomCenter 3).<br/>
				- Renamed forcedsamplemode to samplemode (RomCenter 3).<br/>
				- Changed from m/s/n to merged/split/unmerged (RomCenter 3).<br/>
				- Changed from y/n to yes/no (RomCenter 3).<br/>
				- Added internal flags for all header items (fixes, warnings, etc).<br/>
				- Added fix summary for header items (appears in datutil.log).<br/>
				- Added warnings for invalid header items (appear in datutil.log).<br/>
				- Added notices for lost header items (appear in datutil.log).<br/>
				- Added the DTD for ROM Management Datafiles (revision 1.1).<br/>
				- Documented the limitations of the XML parser in readme.txt.<br/>
  			
		</p>
    <p>
      <b>24 March 2008</b> - DatLib v2.24</p>
    <p>
			
			
			
            			- Fixed crash (allzip had spurious carriage returns in kyukaidk).
  			
		</p>
    <p>
      <b>17 March 2008</b> - DatLib v2.23</p>
    <p>
			
			
			
				- Simplified the internal handling of CMPro and RomCenter headers.<br/>
				- Added date, email, homepage, url, comment, forcenodump to CMPro.<br/>
				- Added category to RomCenter header (for completeness).<br/>
				- Added the Generic XML format.<br/>
				- Note: CMPro, RomCenter and XML headers all contain the same info.<br/>
    			
		</p>
    <p>
      <b>26 November 2007</b> - DatLib v2.22</p>
    <p>
			
			
			
				- Fixed crash when loading full MESS XML (0.105 upwards).<br/>
				- MESS: Support for new device attributes (type, tag and mandatory).<br/>
				- MESS: Support for machine "RAM options".<br/>
				- MAME + MESS: Support for new emulator "debug" attribute.<br/>
				- MAME + MESS: Changed "refresh" attributes from float to double.<br/>
				- MAME + MESS: Added driver "savestate" warnings.<br/>
    			
		</p>
    <p>
      <b>29 July 2007</b> - DatLib v2.21</p>
    <p>
			
			
			
				- Empty attributes are now ignored (e.g. sha1="")<br/>
				- Removed cloneof, romof and sampleof fixes from datutil -i<br/>
            			- DatUtil -i, -I and -p now default the output format to CMPro
				(in addition to -g, -G and -r which already behave like that)<br/>
				- Added support for the isbios="yes" of MAME v0.117u2 onwards.<br/>
    			
		</p>
    <p>
      <b>1 January 2007</b> - DatLib v2.20</p>
    <p>
			
			
			
				- Added 'prune' feature for removing roms, disk and/or samples<br/>
            			- Added 'incorporate' feature to assist in combining datafiles
    			
		</p>
    <p>
      <b>30 December 2006</b> - DatLib v2.19</p>
    <p>
			
			
			
				- Internal change that only affects MAMEDiff (see note below)<br/>
				- Improved -dX modes (understands merging despite differing names)
    			
		</p>
    <p>
      <b>17 October 2006</b> - DatLib v2.18</p>
    <p>
			
			
			
				- More intelligent DTD creation when saving in ListXML format<br/>
				- Added support for game/display (MAME v0.107)<br/>
				- Added support for game/input/control (MAME v0.107)<br/>
				- Added support for emulator/build (MAME+MESS v0.101u4 upwards)<br/>
				- Added support for driver/savestate (MAME v0.101u1 upwards)<br/>
            			- Note: The above changes affect the tab delimited format!
    			
		</p>
    <p>
      <b>16 July 2006</b> - DatLib v2.17</p>
    <p>
			
			
			
				- Fixed bug that caused the DatUtil -g and -r options to crash
    			
		</p>
    <p>
      <b>11 July 2006</b> - DatLib v2.16</p>
    <p>
			
			
			
				- Fixed bug that messed up internal indices (affected crc matching)<br/>
				- More intelligent directory scanner (regarding samples and CHDs)<br/>
				- Removed 64MB file limit from directory scanner (reads 1MB blocks)
    			
		</p>
    <p>
      <b>13 January 2006</b> - DatLib v2.15</p>
    <p>
			
			
			
				- Last release would not load data files less than 4KB in size!
    			
		</p>
    <p>
      <b>12 January 2006</b> - DatLib v2.14</p>
    <p>
			
			
			
				- Added a save-only format to imitate MAME's gamelist.txt file.<br/>
				- File identification is now done by loading just the first 4KB.
    			
		</p>
    <p>
      <b>6 December 2005</b> - DatLib v2.13</p>
    <p>
			
			
			
				- DatLib v2.12 broke the RomCenter drivers (now fixed).
    			
		</p>
    <p>
      <b>5 December 2005</b> - DatLib v2.12</p>
    <p>
			
			
			
				- Fixed a rare crash (if the longest line in the dat was the last).<br/>
				- Fixed a problem loading RomCenter data files containing [].
    			
		</p>
    <p>
      <b>13 November 2005</b> - DatLib v2.11</p>
    <p>
			
			
			
				- Added support for 'board', 'colordeep', 'credits' and 'archive'<br/>
				(fully supported by ListInfo, ListXML and Delimited formats).<br/>
				- M1 XML loader now retains the 'board' information (see above).<br/>
				- M1 XML will not use hex for ROM sizes after all... changed back!<br/>
				- Improved the way that the Nebula driver handles Neo-Geo ROMs.<br/>
				- Fixed Nebula Jukebox driver for Neo-Geo ROMs (broken in v2.7).
    			
		</p>
    <p>
      <b>31 October 2005</b> - DatLib v2.10</p>
    <p>
			
			
			
				- Fixed identification of ListXML for MAME+MESS v0.101u4 onwards.<br/>
				- Added OPTION_ALWAYS_QUOTE for DatUtil (the '-q' option).
    			
		</p>
    <p>
      <b>28 October 2005</b> - DatLib v2.9</p>
    <p>
			
			
			
				- Added better support for file formats that use hex ROM sizes.<br/>
				- M1 XML will use hex for ROM sizes. Changed driver accordingly.<br/>
				- Now reports duplicate game descriptions and CRCs (i.e. ROMs).
    			
		</p>
    <p>
      <b>5 October 2005</b> - DatLib v2.8</p>
    <p>
			
			
			
				- Improved the logerror() function (used for reporting ZIP errors).<br/>
				- Added support for M1's XML format (when it becomes available).
			
		</p>
    <p>
      <b>17 September 2005</b> - DatLib v2.7</p>
    <p>
			
			
			
				- Compiled with zlib 1.3.<br/>
				- Improved Neo-Geo handling for the Nebula driver.<br/>
				- Improved 'romof' handling for RomCenter 2 driver (during loading).
			
		</p>
    <p>
      <b>31 August 2005</b> - DatLib v2.6</p>
    <p>
			
			
			
				- Fixed a 'hang' that occurred with circular cloneof relationships.
			
		</p>
    <p>
      <b>10 April 2005</b> - DatLib v2.5</p>
    <p>
			
			
			
				- Excludes disks from RomCenter data files (datutil -k to override).
			
		</p>
    <p>
      <b>25 March 2005</b> - DatLib v2.4</p>
    <p>
			
			
			
				- Fixed another crash with datutil -X and 'forcemerging full'.<br/>
				- Changed the delimited format to use \N for NULLs.<br/>
				- Changed the delimited format so that all types are 'game_*'.<br/>
				- Changed the delimited format so that games include 'runnable'.<br/>
				- Added save support for a DISK section in the RomCenter format.<br/>
				- Added several aliases for the output formats (see DatUtil docs).
			
		</p>
    <p>
      <b>7 March 2005</b> - DatLib v2.3</p>
    <p>
			
			
			
				- Fixed a problem with counting parents (happened with DatUtil -X).<br/>
				- This also avoids a crash with datutil -X and 'forcemerging full'.
			
		</p>
    <p>
      <b>28 February 2005</b> - DatLib v2.2</p>
    <p>
			
			
			
				- Changed strtof to atof (for the guys compiling on NetBSD).<br/>
				- Added support for tab delimited files ('-f delimited').<br/>
				- Added save-support for RomCenter sublists ('-f sublist').<br/>
				- Added \t support to the listinfo driver (and tab delimited).<br/>
				- Fixed problem of unrecognised escape sequences looping forever!
			
		</p>
    <p>
      <b>22 February 2005</b> - DatLib v2.1</p>
    <p>
			
			
			
				- Made selections more flexible (can now use commas as a delimiter).<br/>
				- Added warnings for invalid game/sourcefile selections (-g and -G).<br/>
				- Added warning messages for duplicated games (i.e. same game name).<br/>
				- Can identify listinfo files even if they only contain resources.<br/>
				- The 'remove clones' option will retain the original dat format.<br/>
				- Fixed a crash caused by empty selection files (the '@' syntax).<br/>
				- Saving a RomCenter datafile will now report an error if the ''<br/>
				symbol is used in the game or ROM details (i.e. the dat is bad).<br/>
				- Changed the error messages that are given when files are missing.
			
		</p>
    <p>
      <b>15 February 2005</b> - DatLib v2.0</p>
    <p>
			
			
			
				- Compiled with GCC 3.4.2 (previously used GCC 3.2.3).<br/>
				- Added 'sourcefile' support to the listinfo and listxml drivers.<br/>
				- Now supports all known details in listinfo and listxml.<br/>
				- Use the flag OPTION_KEEP_FULL_DETAILS to switch on full loading!<br/>
				- N.b. ROM region is not loaded without OPTION_KEEP_FULL_DETAILS.<br/>
				- Supports 'history' entries (when using OPTION_KEEP_FULL_DETAILS).<br/>
				- Added support for \\, \n, \xXX and \" in ListInfo (e.g. history).<br/>
				- Improved entity handling (e.g. &amp;amp; &amp;#X;) in the ListXML parser.<br/>
				- Supports 2 additional MESS objects (devices and extensions).<br/>
				- DatLib can now save data in listxml format (MAME and MESS).<br/>
				- Changed the listxml and listinfo drivers to use simple macros.<br/>
				- Changed the internal representation of baddump/nodump.<br/>
				- Complemented CRCs are reported (should use flags nodump instead).<br/>
				- Added checks for MD5 and SHA1 conflicts (CRCs already checked).<br/>
				- Added OPTION_FIX_MERGING_OFF and OPTION_REMOVE_DUPLICATES_OFF.<br/>
				- Added OPTION_SOURCEFILE_SELECTION and OPTION_INVERT_SELECTION.<br/>
				- Added support for external selection files with the @ symbol.<br/>
				- Renamed OPTION_GAME to OPTION_GAME_SELECTION.<br/>
				- Renamed OPTION_GAME_AND_CLONES to OPTION_CLONE_SELECTION.<br/>
				- Removed the hack made in DatLib v1.13 for Calice drivers.<br/>
				- Removed funny size and missing year checks (pretty useless now).
			
		</p>
    <p>
      <b>16 January 2005</b> - DatLib v1.14</p>
    <p>
			
			
			
				- Added support for the GNGEO romrc file.<br/>
				- Increased maximum ROM size to 64MB (used when scanning folders).
			
		</p>
    <p>
      <b>4 January 2005</b> - DatLib v1.13</p>
    <p>
			
			
			
				- Added support for Calice drivers.<br/>
				- Modified the -i functionality for the use of Calice drivers.<br/>
				- Made a change to getopt.h for the latest version of MinGW/GCC.
			
		</p>
    <p>
      <b>25 November 2004</b> - DatLib v1.12</p>
    <p>
			
			
			
				- Improved the handling of CRC conflicts within the 'fix merging'.
			
		</p>
    <p>
      <b>26 October 2004</b> - DatLib v1.11</p>
    <p>
			
			
			
				- Added a parser for the ZiNc --list-sets.
			
		</p>
    <p>
      <b>18 August 2004</b> - DatLib v1.10</p>
    <p>
			
			
			
				- Better handling of 'clones of clones' when loading data files.
			
		</p>
    <p>
      <b>30 July 2004</b> - DatLib v1.9</p>
    <p>
			
			
			
				- Added full support for disk 'merge' and 'flags' information.<br/>
				- Improved the FORMAT_LISTINFO_XXXXXX macros a little bit.
			
		</p>
    <p>
      <b>22 July 2004</b> - DatLib v1.8</p>
    <p>
			
			
			
				- Removed the need for xml2info by adding my own MAME XML parser.<br/>
				- A nice side effect is that names like "Alien<sup>3</sup>: The Gun" work now!
			
		</p>
    <p>
      <b>21 July 2004</b> - DatLib v1.7</p>
    <p>
			
			
			
				- Added support for MESS XML.<br/>
				- Added disks and samples to the game_zip structures.<br/>
				- Now avoids duplicate ROMs getting into the game_zip structures.<br/>
				- Added OPTION_INCLUDE_NODUMPS_IN_ZIPS for game_zip structures.<br/>
				- Directory scanner now supports CHDs (when in a game directory).<br/>
				- Directory scanner can spoof samples (OPTION_OBJECT_TYPE_SAMPLE).<br/>
				- Improved 'fix merging' (where clone ROMs are not in the parent).<br/>
				- Enhanced 'fix merging' to work for disks (SHA1/MD5 are copied).<br/>
				- Added check for SHA1/MD5 conflicts of disks across clones.
			
		</p>
    <p>
      <b>18 July 2004</b> - DatLib v1.6</p>
    <p>
			
			
			
				- Added disk CRCs for MAMEDiff (CRC is calculated using MD5/SHA1).<br/>
				- Added OPTION_NON_SEPERATED_BIOS_ROMS for MAMEDiff -d1/-d2/-d3.
			
		</p>
    <p>
      <b>17 July 2004</b> - DatLib v1.5</p>
    <p>
			
			
			
				- Added the OPTION_NEBULA_JUKEBOX (parses Z80 and Samples only).
			
		</p>
    <p>
      <b>11 July 2004</b> - DatLib v1.4</p>
    <p>
			
			
			
				- Added support for comments before games in CMPro data files.<br/>
				- Added an option to ignore missing year information.<br/>
				- Changed the way that parameters are passed to init_dat().<br/>
				- Changed the way that parameters are passed to save_dat().<br/>
				- Only SHA1 _or_ MD5 will be processed now. Using both is silly!<br/>
				- Added function to extract missing info from another dat/dir.
			
		</p>
    <p>
      <b>6 July 2004</b> - DatLib v1.3</p>
    <p>
			
			
			
				- Fixed a build_zip_structures() problem occurring with empty ZIPs.
			
		</p>
    <p>
      <b>5 July 2004</b> - DatLib v1.2</p>
    <p>
			
			
			
				- Removed ROM size limit when extended checksums are not being used.<br/>
				- Empty ZIPs are not loaded into the game_zip structures now.
			
		</p>
    <p>
      <b>4 July 2004</b> - DatLib v1.1</p>
    <p>
			
			
			
				- ClrMamePro/RomCenter header is now ignored when using OPTION_GAME.<br/>
				- Removed a warning when you try using 'datutil -g &lt;resource> -c'.<br/>
				- Added debug information to identify spurious warnings like above.<br/>
				- Directory/ZIP scanner will not calculate MD5/SHA1 by default now.<br/>
				- You must use OPTION_EXTENDED_CHECKSUMS, as used by 'datutil -x'.
			
		</p>
    <p>
      <b>2 July 2004</b> - DatLib v1.0</p>
    <p>
			
			
			
				- The first public release.
			
		</p>
<script language="php">
					// Standard page footer (counter)

					include('../../Resources/Bottom.php');
				</script>
  </body>
</html>


