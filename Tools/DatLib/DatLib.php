
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <script language="php">
					// Standard PHP includes (database connection and constants)

					include ('../../Resources/Include.php');

				</script>
    <title>DatLib v2.7</title>
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
      <img src="../../Resources/Logiqx.gif" width="327" height="68" alt="../../Resources/Logiqx.gif"/>
    </p>
	<p>
      <img src="DatLib.gif" width="78" height="40" alt="DatLib.gif"/>
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
          <p>Download <a href="datlib27.zip">DatLib v2.7</a> (81KB)</p>
          <p>
            <a href="datlib27.zip">
              <img src="../../Resources/Disk.gif" width="38" height="38" alt="Download"/>
            </a>
          </p>
        </td>
	</tr>
    </table>

	<hr/>
    <p>
      <img src="../../Resources/History.gif" width="85" height="40" alt="History"/>
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


