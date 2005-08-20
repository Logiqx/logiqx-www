
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <script language="php">
					// Standard PHP includes (database connection and constants)

					include ('../../Resources/Include.php');

				</script>
    <title>DatUtil v2.17</title>
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
      <img src="CMProRC.gif" width="233" height="142" alt="CMProRC.gif"/>
    </p>
	<p>
      <img src="DatUtil.gif" width="81" height="40" alt="DatUtil.gif"/>
    </p>

	
	
	
	

	

	
		<p>
			DatUtil was created to aid in the creation of dat files for Rom Managers such as ClrMamePro and RomCenter (Roman Scherzer / Eric Bole-Feysot). It can convert between formats, extract individual games (and optionally their clones) and cleanse dats. It supports a variety of formats...<br/>
			<br/>
			<b>Load and Save:</b>
      <br/>
			<br/>
			- MAME ListInfo (ClrMamePro, MAME, MESS, RAINE, Shark)<br/>
			- RomCenter 2.50<br/>
			- MAME ListXML (MAME and MESS)<br/>
			- Tab Delimited<br/>
			<br/>
			<b>Load only:</b>
      <br/>
			<br/>
			- RomCenter 1.90<br/>
			- RomCenter 2.00<br/>
			- Nebula Drivers<br/>
			- Calice Drivers<br/>
			- Zinc --list-sets<br/>
			- GNGEO romrc<br/>
			- ClrMame Log<br/>
			- Folder Scan (subdirectories and zips)<br/>
			<br/>
			<b>Save only:</b>
      <br/>
			<br/>
			- Title List (for listing game titles - used by CPS-2 readme and RAINE docs)<br/>
			- RomCenter Sublist
		</p>
	

	<table>
      <tr>
		<td>
          <p>Download <a href="dutil217.zip">DatUtil v2.17</a> (134KB)</p>
          <p>
            <a href="dutil217.zip">
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
      <b>10 April 2005</b> - DatUtil v2.17</p>
    <p>
			
			
			
				- Uses DatLib v2.5. <br/>
				- Excludes disks from RomCenter data files (-k will include them).<br/>
			
		</p>
    <p>
      <b>25 March 2005</b> - DatUtil v2.16</p>
    <p>
			
			
			
				- Uses DatLib v2.4. <br/>
				- Fixed another crash with datutil -X and 'forcemerging full'. <br/>
				- Changed the delimited format to use \N for NULLs. <br/>
				- Changed the delimited format so that all types are 'game_*'. <br/>
				- Changed the delimited format so that games include 'runnable'. <br/>
				- Added save support for a DISK section in the RomCenter format. <br/>
				- Added several aliases for the output formats (see notes above).<br/>
			
		</p>
    <p>
      <b>7 March 2005</b> - DatUtil v2.15</p>
    <p>
			
			
			
				- Uses DatLib v2.3. <br/>
				- Fixed a problem with counting parents (happened with DatUtil -X). <br/>
				- This also avoids a crash with datutil -X and 'forcemerging full'. <br/>
			
		</p>
    <p>
      <b>28 February 2005</b> - DatUtil v2.14</p>
    <p>
			
			
			
				- Uses DatLib v2.2. <br/>
				- Added support for tab delimited files ('-f delimited'). <br/>
				- Added save-support for RomCenter sublists ('-f sublist'). <br/>
				- Added \t support to the listinfo driver (and tab delimited). <br/>
				- Fixed problem of unrecognised escape sequences looping forever! <br/>
			
		</p>
    <p>
      <b>22 February 2005</b> - DatUtil v2.13</p>
    <p>
			
			
			
				- Uses DatLib v2.1. <br/>
				- Added a test option (-t) where nothing is actually saved. <br/>
				- Log file is now automatically deleted if it is empty. <br/>
				- Made selections more flexible (can now use commas as a delimiter). <br/>
				- Added warnings for invalid game/sourcefile selections (-g and -G). <br/>
				- Added warning messages for duplicated games (i.e. same game name). <br/>
				- Can identify listinfo files even if they only contain resources. <br/>
				- The 'remove clones' option will retain the original dat format. <br/>
				- Fixed a crash caused by empty selection files (the '@' syntax). <br/>
				- Saving a RomCenter datafile will now report an error if the '' <br/>
				symbol is used in the game or ROM details (i.e. the dat is bad). <br/>
				- Changed the error messages that are given when files are missing. <br/>
				- Changed the command line help a little bit (explanation of -!). <br/>
			
		</p>
    <p>
      <b>15 February 2005</b> - DatUtil v2.12</p>
    <p>
			
			
			
				- Uses DatLib v2.0. <br/>
				- Compiled with GCC 3.4.2 (previously used GCC 3.2.3). <br/>
				- Rewrote the manual, please read it from start to end. ;) <br/>
				- Changed the summary of switches produced by DatUtil -?. <br/>
				- Added the -k option to keep all details (chips, dips, etc). <br/>
				- Added the -G option to select games from a specified sourcefile. <br/>
				- Added the -! option so that -g and -G can be used as exclusions. <br/>
				- Added the -X option to switch off 'fix merging' (use with -g). <br/>
				- Added the -D option to switch off 'remove duplicates' (as above). <br/>
				- Removed the -z and -y options as they are redundant now. <br/>
				<br/>
				- DatLib v2.0 (enhancements relating to DatUtil): <br/>
				- Added 'sourcefile' support to the listinfo and listxml drivers. <br/>
				- Supports all known details in listinfo and listxml (-k option). <br/>
				- N.b. ROM region is not loaded unless using the datutil -k option. <br/>
				- Supports 'history' entries (when using the -k option). <br/>
				- Added support for \\, \n, \xXX and \" in ListInfo (e.g. history). <br/>
				- Improved entity handling (e.g. &amp;amp; &amp;#X;) in the ListXML parser. <br/>
				- Supports 2 additional MESS objects (devices and extensions). <br/>
				- DatLib can now save data in listxml format (MAME and MESS). <br/>
				- Complemented CRCs are reported (should use flags nodump instead). <br/>
				- Added checks for MD5 and SHA1 conflicts (CRCs already checked). <br/>
				- Added support for external selection files with the @ symbol. <br/>
				- Removed the hack made in DatLib v1.13 for Calice drivers. <br/>
				- Removed funny size and missing year checks (pretty useless now).<br/>
			
		</p>
    <p>
      <b>16 January 2005</b> - DatUtil v2.11</p>
    <p>
			
			
			
				- Uses DatLib v1.14. <br/>
				- Added support for the GNGEO romrc file. <br/>
				- Increased maximum ROM size to 64MB (used when scanning folders).<br/>
			
		</p>
    <p>
      <b>4 January 2005</b> - DatUtil v2.10</p>
    <p>
			
			
			
				- Uses DatLib v1.13. <br/>
				- Added support for Calice drivers. <br/>
			
		</p>
    <p>
      <b>25 November 2004</b> - DatUtil v2.9</p>
    <p>
			
			
			
				- Uses DatLib v1.12. <br/>
				- Improved the handling of CRC conflicts within the 'fix merging'. <br/>
			
		</p>
    <p>
      <b>26 October 2004</b> - DatUtil v2.8</p>
    <p>
			
			
			
				- Uses DatLib v1.11. <br/>
				- Added a parser for the ZiNc --list-sets. <br/>
			
		</p>
    <p>
      <b>18 August 2004</b> - DatUtil v2.7</p>
    <p>
			
			
			
				- Uses DatLib v1.10. <br/>
				- Better handling of 'clones of clones' when loading data files. <br/>
			
		</p>
    <p>
      <b>30 July 2004</b> - DatUtil v2.6</p>
    <p>
			
			
			
				- Uses DatLib v1.9. <br/>
				- Added full support for disk 'merge' and 'flags' information. <br/>
			
		</p>
    <p>
      <b>22 July 2004</b> - DatUtil v2.5</p>
    <p>
			
			
			
				- Uses DatLib v1.8. <br/>
				- Removed the need for xml2info by adding my own MAME XML parser. <br/>
				- A nice side effect is that names like "Alien<sup>3</sup>: The Gun" work now! <br/>
			
		</p>
    <p>
      <b>21 July 2004</b> - DatUtil v2.4</p>
    <p>
			
			
			
				- Uses DatLib v1.7 <br/>
				- Added support for MESS XML. <br/>
				- Directory scanner now supports CHDs (when in a game directory). <br/>
				- Improved 'fix merging' (where clone ROMs are not in the parent). <br/>
				- Enhanced 'fix merging' to work for disks (SHA1/MD5 are copied). <br/>
				- Added check for SHA1/MD5 conflicts of disks across clones. <br/>
			
		</p>
    <p>
      <b>17 July 2004</b> - DatUtil v2.3</p>
    <p>
			
			
			
				- Uses DatLib v1.5 <br/>
				- Added the -j option for Nebula Jukebox (Z80 and Samples only). <br/>
			
		</p>
    <p>
      <b>11 July 2004</b> - DatUtil v2.2</p>
    <p>
			
			
			
				- Uses DatLib v1.4: <br/>
				- Added support for comments between games in CMPro data files. <br/>
				- Added an option to ignore missing year information (-y). <br/>
				- Added an option to select MD5 usage rather than SHA1 (-m). <br/>
				Note that '-m' was previously used for the 'fix merging' option! <br/>
				- Added an option to include missing info from another dat (-i). <br/>
				Games: cloneof, romof, sampleof (good after using the -g option). <br/>
				ROMs: size, crc, md5, sha1, flags (good for adding SHA1, etc). <br/>
			
		</p>
    <p>
      <b>4 July 2004</b> - DatUtil v2.1</p>
    <p>
			
			
			
				- Added a message to say that the -m option is not required now. <br/>
				- Uses DatLib v1.1: <br/>
				- ClrMamePro/RomCenter header is now ignored when using OPTION_GAME. <br/>
				- Removed a warning when you try using 'datutil -g &lt;resource> -c'. <br/>
				- Added debug information to identify spurious warnings like above. <br/>
				- Added the -x option to calculate SHA1/MD5 when scanning ZIPs. <br/>
				- n.b. SHA1/MD5 used to be calculated by default in DatUtil v2.0. <br/>
			
		</p>
    <p>
      <b>2 July 2004</b> - DatUtil v2.0</p>
    <p>
			
			
			
				Wow, I never thought I'd get around to this rewrite but here it is! <br/>
				<br/>
				Uses DatLib - The new library for handling dats of many formats <br/>
				<br/>
				- A generic dat structure with various loading and cleansing routines. <br/>
				<br/>
				- Far better memory handling. No longer uses huge blocks of fixed size memory. <br/>
				<br/>
				Info: DatUtil used to allocate almost 45MB for a dat when it was loaded. <br/>
				This was without MD5/SHA1 support and for a limited number of games! <br/>
				DatLib now allocates only what it really requires (which is usually <br/>
				about twice the size of the dat file). <br/>
				<br/>
				- Multi-phase processing (pre-parse, parse, cleanse, save): <br/>
				<br/>
				- Pre-parser translates dat into an intermediate dat format. <br/>
				- Parser interprets the intermediate format to populate the dat structure. <br/>
				- Cleanser does things like 'lowercase', 'remove dups', 'fix merging', etc. <br/>
				- Saving outputs the cleansed dat structure in the required output format. <br/>
				<br/>
				Note: The main difference is the addition of the pre-parser (which removes <br/>
				common operations from the different dat parsers) and the separation <br/>
				of the cleansing operations from the loader (they used to be embedded <br/>
				in the various parsers, particularly painful for RomCenter format!). <br/>
				<br/>
				- No limit on the number of games, ROMs, disks, samples etc. <br/>
				<br/>
				- No limit on the length of file names, game titles, manufacturer names etc. <br/>
				<br/>
				- Improved size and CRC handling (now numeric, not text based). <br/>
				<br/>
				- Supports 'rebuildto' information for games. <br/>
				<br/>
				- Supports alternative checksums (MD5 and SHA1). <br/>
				N.B. The directory scanner also generates MD5 and SHA1 checksums for files. <br/>
				<br/>
				- Supports 'region' information of ROMs. <br/>
				<br/>
				- Improved driver system for developers adding new dat formats. <br/>
				<br/>
				- Fully supports the latest RomCenter dat format (2.50). <br/>
				<br/>
				- Improved RomCenter parser is not case sensitive like the old one was. <br/>
				<br/>
				- All cleansing features can now be used with all supported formats. <br/>
				<br/>
				- Improved 'fix merging'. Now operates across clones, not just parent/clone. <br/>
				Also fixes bad parent references and prevents clones of clones. <br/>
				The feature is run by default when a data file is loaded into memory. <br/>
				A summary of fixes is shown in datutil.log, use -v option for full details. <br/>
				<br/>
				- Duplicate ROMs are now removed when the data file is loaded into memory. <br/>
				<br/>
				- Added debugging information (to help me track down problems). <br/>
				<br/>
				- Removed alternate ROM support. It was only used by Shark and made data file <br/>
				comparisons unnecessarily complicated! <br/>
				<br/>
				- Removed code that fixed the bad parent 'pc' in MESS dats (the default <br/>
				'fix merging' code does the same job now but without being hard coded). <br/>
				<br/>
				- ClrMamePro log parser now supports disk images and alternative checksums. <br/>
				<br/>
				- Nebula parser is now much better. With the default 'fix merging' behaviour, <br/>
				the data file that is generated should be almost usable now! <br/>
				<br/>
				- Improved baddump and nodump handling. <br/>
				Also supports the syntax of MAME v0.68 (where the word 'flags' was missing). <br/>
				<br/>
				- Improved logging. Added a verbose (-v) option for even more detail! <br/>
				<br/>
				- You are given a warning if you try to convert a RomCenter data file where <br/>
				the plugin is not 'arcade.dll'. It is likely that such a conversion will <br/>
				not work correctly in ClrMamePro. <br/>
				<br/>
				- The -g and -c options can now be used on resources. You can therefore <br/>
				extract games for neogeo, zn1, etc. (e.g. 'datutil -g cpzn1 -c mame.dat'). <br/>
				<br/>
				- Removed the dat comparison facility. Use MAMEDiff instead! <br/>
				<br/>
				- Added load support for MAME ListXML format (uses the xml2info tool). <br/>
				<br/>
				- Added a warning summary to datutil.log. <br/>
				Warnings are for missing details, funny ROM sizes and CRC conflicts. <br/>
				For full details of the warnings, use the DatUtil -v (verbose) option. <br/>
				<br/>
				- Added details of all information that is lost when saving in a different <br/>
				format (e.g. Years and Manufacturers are lost when using RomCenter format). <br/>
				<br/>
				Unsupported formats - Not included in the rewrite as they are of little use! <br/>
				<br/>
				Load and Save: <br/>
				<br/>
				- Calice DRV (drivers) <br/>
				<br/>
				Load only: <br/>
				<br/>
				- Callus gamelist <br/>
				- CPSE data (drivers) <br/>
				- Mimic HWC (drivers) <br/>
				- System16 GCS (drivers) <br/>
				- Sparcade RAT (drivers) <br/>
				- Retrocade Romlist <br/>
				- JAS romlist <br/>
				- JFF text <br/>
			
		</p>
    <p>
      <b>26 February 2004</b> - DatUtil v1.32</p>
    <p>
			
			
			
				- Finally added disk support for MAME! <br/>
			
		</p>
    <p>
      <b>31 January 2004</b> - DatUtil v1.31</p>
    <p>
			
			
			
				- When saving data files in listinfo format, 'crc 00000000' is now <br/>
				written out as 'flags nodump'. <br/>
			
		</p>
    <p>
      <b>24 January 2004</b> - DatUtil v1.30</p>
    <p>
			
			
			
				- Increased the maximum number of games from 5000 to 6000. <br/>
				- Removed support for the old RomCenter 1 format... <br/>
				The old format is inadequate for modern day MAME releases. <br/>
				- Removed knowledge of the MAME resource names. RomCenter 2 data <br/>
				files must therefore have a [RESOURCES] section from now on. <br/>
			
		</p>
    <p>
      <b>20 January 2004</b> - DatUtil v1.29</p>
    <p>
			
			
			
				- Minor adjustment to the routine that decides if a ROM lives in a resource. <br/>
				This fixes the handling of shootgal/sg-01-0. <br/>
			
		</p>
    <p>
      <b>31 December 2003</b> - DatUtil v1.28</p>
    <p>
			
			
			
				- Added knowledge of the atpsx resource. <br/>
			
		</p>
    <p>
      <b>29 December 2003</b> - DatUtil v1.27</p>
    <p>
			
			
			
				- Added knowledge of the two new resources added in MAME v0.78. <br/>
			
		</p>
    <p>
      <b>14 September 2003</b> - DatUtil v1.26</p>
    <p>
			
			
			
				- Changed names of Neo-Geo BIOS ROMs in the Nebula driver reader. <br/>
			
		</p>
    <p>
      <b>25 August 2003</b> - DatUtil v1.25</p>
    <p>
			
			
			
				- Added knowledge of the seven new resources added in MAME v0.72.<br/>
			
		</p>
    <p>
      <b>19 May 2003</b> - DatUtil v1.24</p>
    <p>
			
			
			
				- Added support for '[RESOURCES]' in RomCenter2 data files.<br/>
			
		</p>
    <p>
      <b>19 May 2003</b> - DatUtil v1.23</p>
    <p>
			
			
			
				- Added a fix for the 'nodump' syntax of MAME v0.68.<br/>
			
		</p>
    <p>
      <b>7 April 2003</b> - DatUtil v1.22</p>
    <p>
			
			
			
				- Fixed CMPro log scanner to support the syntax 'bad dump'. <br/>
				- Added knowledge of konamigx resource.<br/>
			
		</p>
    <p>
      <b>18 January 2003</b> - DatUtil v1.21</p>
    <p>
			
			
			
				- Removed 'cloneof neogeo' from 'neocd' in Nebula driver. <br/>
				- Added knowledge of skns and stvbios resources.<br/>
			
		</p>
    <p>
      <b>20 May 2002</b> - DatUtil v1.20</p>
    <p>
			
			
			
				- New resource ROMs in MAME listinfo are automatically detected. <br/>
				- ClrMamePro log and Nebula driver loaders now use the STORE_ROM <br/>
				macro (this makes -g work correctly, amongst other things). <br/>
				- Improved -m (fix merging) behaviour for resource ROMs. <br/>
				- Nebula drivers now output the correct 'romof' for Neo-Geo clones.<br/>
			
		</p>
    <p>
      <b>22 April 2002</b> - DatUtil v1.19</p>
    <p>
			
			
			
				- Added support for the PGM resource.<br/>
			
		</p>
    <p>
      <b>20 April 2002</b> - DatUtil v1.18</p>
    <p>
			
			
			
				- Increased maximum number of samples to 10,000 (for PinMAME). <br/>
				- Exceeding the sample limit now results in a graceful exit.<br/>
			
		</p>
    <p>
      <b>4 April 2002</b> - DatUtil v1.17</p>
    <p>
			
			
			
				- Made 'fix-merging' option check the CRC as well as the name. <br/>
				- Fix merging option warns of CRC conflicts it finds. Useful test! <br/>
				- Strips trailing spaces from Nebula ROM names (for convenience). <br/>
				- Executable is called 'datutil.exe' again.<br/>
			
		</p>
    <p>
      <b>29 March 2002</b> - DatUtil v1.16</p>
    <p>
			
			
			
				- Added Nebula driver support (useful for data file validation). <br/>
				- Supports the new '0x' syntax of CMPro logs. <br/>
				- ZIP scanner now removes '.Zip' from filenames (case sensitive). <br/>
				- Increased maximum line length to 16384 bytes (for MAME history). <br/>
				- Increased maximum number of ROMs to 75000. <br/>
				- Exceeding the game or ROM limits now results in a graceful exit. <br/>
				- Compiled with zlib v1.1.4 <br/>
			
		</p>
    <p>
      <b>10 February 2002</b> - DatUtil v1.15</p>
    <p>
			
			
			
				- Enhanced Calice support to cope with Neo-Geo sound ROMs. <br/>
				- Modified source to compile easily with CygWin (and FreeBSD?). <br/>
			
		</p>
    <p>
      <b>11 November 2001</b> - DatUtil v1.14</p>
    <p>
			
			
			
				- Added knowledge of ng-lo.rom. <br/>
			
		</p>
    <p>
      <b>27 September 2001</b> - DatUtil v1.13</p>
    <p>
			
			
			
				- Supports CPSE driver file. <br/>
				- Added 'ignore funny size' option (-z) for non-arcade dats. <br/>
				- Added 'make lower case' option (-l). Affects names and CRCs. <br/>
				- Puts "s around empty CMPro header items. <br/>
				- Fixed directory/zip scanner for ROM names containing spaces. <br/>
				- Fixed zip scanner to strip uppercase '.ZIP' from game names. <br/>
				- Improved the 'funny size' warning relating to RomCenter 2 dats.<br/>
			
		</p>
    <p>
      <b>28 August 2001</b> - DatUtil v1.12</p>
    <p>
			
			
			
				- Supports new ROM loading introduced in Calice v0.3.8 to v0.4.4.<br/>
			
		</p>
    <p>
      <b>28 June 2001</b> - DatUtil v1.11</p>
    <p>
			
			
			
				- Added some warnings for bad quality RomCenter dats <br/>
				(wrong version number in header and missing ROM sizes).
			
		</p>
    <p>
      <b>23 June 2001</b> - DatUtil v1.10</p>
    <p>
			
			
			
				- Fixed detection of RAINE32 dat format. <br/>
				- Improved ZIP scanner (not case sensitive when searching for zips).<br/>
			
		</p>
    <p>
      <b>8 June 2001</b> - DatUtil v1.9</p>
    <p>
			
			
			
				- Added directory scanning feature (reads ZIPs and subdirectories). <br/>
				- Calice loader now uses the main driver code, not 'verifyroms'. <br/>
				- RomCenter 2 loader fixes missing 'romof' details automatically.<br/>
			
		</p>
    <p>
      <b>18 May 2001</b> - DatUtil v1.8</p>
    <p>
			
			
			
				- Fixed a minor bug in the '-m' feature (bug introduced in v1.7). <br/>
				- Now compiled with MinGW (no long filename problems on NT now). <br/>
			
		</p>
    <p>
      <b>26 April 2001</b> - DatUtil v1.7</p>
    <p>
			
			
			
				- Added handling of decocass resource in MAME dats. <br/>
				- Added load/save support for CMPro element 'clrmamepro' and ROMCenter headers. <br/>
				- Added preliminary support for Calice Driver files. <br/>
				- Added load support for ClrMamePro log files (i.e. to convert into a dat format). <br/>
				- Further improved the '-m' feature ('fix merging' option). <br/>
				- RomCenter2 save routine strips redundant 'merge' information from non-clones. <br/>
				- DJGPP compilation now uses -Wall option. <br/>
				- Can now be compiled with Microsoft Visual C++.<br/>
			
		</p>
    <p>
      <b>22 February 2001</b> - DatUtil v1.6</p>
    <p>
			
			
			
				- Added option to improve MAME's merging information ('-m').<br/>
			
		</p>
    <p>
      <b>6 February 2001</b> - DatUtil v1.5</p>
    <p>
			
			
			
				- Some handling of the playch10 and cvs resources in MAME dats. <br/>
				- RomCenter 2 is now the default save format when converting CMPro dats.<br/>
			
		</p>
    <p>
      <b>18 December 2000</b> - DatUtil v1.4</p>
    <p>
			
			
			
				- Mimic HWC support. <br/>
				- New format to list game titles ('-f titlelist'). <br/>
				- Year/Manufacturer support for formats that can include them. <br/>
				- Can specify values for ROMCenter/ROMCenter2 headers. <br/>
				- Remove clones factility ('-r'). <br/>
				- GWC loader now understands '.speech' tags (System16 Beta). <br/>
				- Callus95 Patch renamed 'directory' to 'parent'. Now supported. <br/>
				- Auto sorts when converting to RomCenter format or a Title List. <br/>
				- Improved sorting (ensures each parent precedes it's clones). <br/>
				- RAINE and MESS files are converted to CMPro format by default. <br/>
				- Fixed a problem with the '-g' option and RAINE gameinfo files. <br/>
				- Increased maximum ROM size to 9 characters (~1GB) for U64Emu. <br/>
				- Increased number of lines scanned when identifying CMPro dats. <br/>
				- Source: Added a makefile and included a SAVE_ONLY_FORMAT. <br/>
				- Source: Changed parameter passing (uses a structure now). <br/>
				- Preliminary: 'Verify Merging' facility (currently disabled). <br/>
			
		</p>
    <p>
      <b>19 May 2000</b> - DatUtil v1.3</p>
    <p>
			
			
			
				- RomCenter 2 support. <br/>
				- New method of sorting (useful for RomCenter). <br/>
				- Two EXEs. This is because the long ROM name version eats memory <br/>
				and is slow on machines without much physical memory. <br/>
				- Improved handling of invalid parents. <br/>
				- Warns of funny ROM sizes. <br/>
				- Generates log of warnings during conversion.<br/>
			
		</p>
    <p>
      <b>28 April 2000</b> - DatUtil v1.2</p>
    <p>
			
			
			
				- Increased game/rom name length to 80 characters. <br/>
				That's about it! <br/>
			
		</p>
    <p>
      <b>8 April 2000</b> - DatUtil v1.1</p>
    <p>
			
			
			
				- Added support for JFF.TXT, Sparcade RAT and JAS Romlist. <br/>
				- Increased maximum number of games from 4096 to 5000. <br/>
				- Increased game/rom name length to 50 characters. <br/>
				- Improved listinfo parser so that it can handle odd formatting. <br/>
				- Other minor modifications. <br/>
			
		</p>
    <p>
      <b>1 April 2000</b> - DatUtil v1.0</p>
    <p>
			
			
			
				- Initial version.<br/>
			
		</p>
<script language="php">
					// Standard page footer (counter)

					include('../../Resources/Bottom.php');
				</script>
  </body>
</html>

