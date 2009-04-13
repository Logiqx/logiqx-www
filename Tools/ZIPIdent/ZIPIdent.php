
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <script language="php">
					// Standard PHP includes (database connection and constants)

					include ('../../Resources/Include.php');

				</script>
    <title>ZIPIdent v2.11</title>
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
      <img src="ZIPIdent.png" width="104" height="40" alt="ZIPIdent.png"/>
    </p>

	
	
	
	

	

	
		<p>
			ZIPIdent has been created to assist in the management of unemulated or 'needed soon' ROM collections. Anyone who possesses such a collection (emu developers for example) may find it difficult to spot games that become emulated and then remove them from the unemulated collection. ZIPIdent will identify ZIPs that should not be classified unemulated and if desired will even move them out of the 'unemulated' collection and into a separate directory.
		</p>
		<p>
			It is quite similar to MAME's '-romident' function except for the fact that it processes entire ROM collections, not just an individual ZIP. ZIPIdent probably has some additional logic that '-romident' doesn't contain too (not checked).  
		</p>
	

	<table>
      <tr>
		<td>
          <p>Download <a href="zident211.zip">ZIPIdent v2.11</a> (201KB)</p>
          <p>
            <a href="zident211.zip">
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
      <b>13 April 2009</b> - ZIPIdent v2.11</p>
    <p>
			
			
			
				- Uses DatLib v2.36.<br/>
            			- Added partial support for 64-bit ROM sizes (not usable yet).<br/>
    			
		</p>
    <p>
      <b>24 March 2008</b> - ZIPIdent v2.10</p>
    <p>
			
			
			
				- Uses DatLib v2.24.<br/>
				- Fixed crash (allzip had spurious carriage returns in kyukaidk).<br/>
    		                - DatLib 2.23 also added the Generic XML format.
			
		</p>
    <p>
      <b>26 November 2007</b> - ZIPIdent v2.9</p>
    <p>
			
			
			
				- Uses DatLib v2.22.<br/>
				- Fixed crash when loading full MESS XML (0.105 upwards).<br/>
    			
		</p>
    <p>
      <b>11 July 2006</b> - ZIPIdent v2.8</p>
    <p>
			
			
			
				- Uses DatLib v2.16.<br/>
				- Fixed bug that messed up internal indices (affected crc matching)<br/>
    			
		</p>
    <p>
      <b>6 December 2005</b> - ZIPIdent v2.7</p>
    <p>
			
			
			
				- Uses DatLib v2.13.<br/>
				- DatLib v2.12 broke the RomCenter drivers (now fixed).
    			
		</p>
    <p>
      <b>5 December 2005</b> - ZIPIdent v2.6</p>
    <p>
			
			
			
				- Uses DatLib v2.12.<br/>
				- Fixed a rare crash (if the longest line in the dat was the last).<br/>
				- Fixed a problem loading RomCenter data files containing [].
    			
		</p>
    <p>
      <b>31 October 2005</b> - ZIPIdent v2.5</p>
    <p>
			
			
			
				- Uses DatLib v2.10.<br/>
				- Fixed identification of ListXML for MAME+MESS v0.101u4 onwards.<br/>
    			
		</p>
    <p>
      <b>28 February 2005</b> - ZIPIdent v2.4</p>
    <p>
			
			
			
				- Uses DatLib v2.2. <br/>
				- Added support for tab delimited files. <br/>
				- Fixed problem of unrecognised escape sequences looping forever! <br/>
			
		</p>
    <p>
      <b>22 February 2005</b> - ZIPIdent No change.</p>
    <p>
			
			
			
				- Just updated the documentation to describe listxml rather than listinfo! <br/>
			
		</p>
    <p>
      <b>15 February 2005</b> - ZIPIdent v2.3</p>
    <p>
			
			
			
				- Uses DatLib v2.0. <br/>
				- Uses the DatLib flag OPTION_KEEP_FULL_DETAILS (for ROM regions). <br/>
				- Moved the macro FORMAT_GAME_NAME out of DatLib, into ZIPIdent. <br/>
			
		</p>
    <p>
      <b>22 July 2004</b> - ZIPIdent v2.2</p>
    <p>
			
			
			
				- Uses DatLib v1.8. <br/>
				- Removed the need for xml2info by adding my own MAME XML parser. <br/>
				- A nice side effect is that names like "Alien<sup>3</sup>: The Gun" work now! <br/>
			
		</p>
    <p>
      <b>11 July 2004</b> - ZIPIdent v2.1</p>
    <p>
			
			
			
				- Updated the source to use the new functions of DatLib v1.4. <br/>
				- There is no functional change within ZIPIdent though. <br/>
			
		</p>
    <p>
      <b>2 July 2004</b> - ZIPIdent v2.0</p>
    <p>
			
			
			
				- Modified to use DatLib - there are no game or ROM limits anymore! <br/>
				- Also supports all DatLib formats (ListInfo, XML, RomCenter, etc). <br/>
				- Note: For XML support to work, you need xml2info.exe in your path. <br/>
			
		</p>
    <p>
      <b>19 January 2003</b> - ZIPIdent v1.01</p>
    <p>
			
			
			
				- Fixed a bug that caused filenames with >80 characters to hang. <br/>
				- Fixed a bug that caused ZIPs containing >100 files to crash. <br/>
				- Added the ability to use a trailing slash after folders (why)? <br/>
				- Added an extra warning in 'zipident_maybe.log' for corrupt ZIPs. <br/>
			
		</p>
    <p>
      <b>7 April 2002</b> - ZIPIdent v1.0</p>
    <p>
			
			
			
				- First public release. <br/>
			
		</p>
<script language="php">
					// Standard page footer (counter)

					include('../../Resources/Bottom.php');
				</script>
  </body>
</html>


