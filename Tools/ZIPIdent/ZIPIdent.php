
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <script language="php">
					// Standard PHP includes (database connection and constants)

					include ('../../Resources/Include.php');

				</script>
    <title>ZIPIdent v2.4</title>
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
      <img src="ZIPIdent.gif" width="104" height="40" alt="ZIPIdent.gif"/>
    </p>

	
	
	
	

	

	
		<p>
			ZIPIdent has been created to assist in the management of unemulated or 'needed soon' ROM collections. Anyone who possesses such a collection (emu developers for example) may find it difficult to spot games that become emulated and then remove them from the unemulated collection. ZIPIdent will identify ZIPs that should not be classified unemulated and if desired will even move them out of the 'unemulated' collection and into a separate directory.
		</p>
		<p>
			It is quite similar to MAME's '-romident' function except for the fact that it processes entire ROM collections, not just an individual ZIP. ZIPIdent probably has some additional logic that '-romident' doesn't contain too (not checked).  
		</p>
	

	<table>
      <colgroup span="1" width="50%"/>
      <colgroup span="1" width="50%"/>
      <tr>
		<td>
          <p>Download <a href="zident24.zip">ZIPIdent v2.4</a> (130KB)</p>
          <p>
            <a href="zident24.zip">
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
      <strong>
        <u>28 February 2005</u>
      </strong> - ZIPIdent v2.4</p>
    <p>
			
			
			
				- Uses DatLib v2.2. <br/>
				- Added support for tab delimited files. <br/>
				- Fixed problem of unrecognised escape sequences looping forever! <br/>
			
		</p>
    <p>
      <strong>
        <u>22 February 2005</u>
      </strong> - ZIPIdent No change.</p>
    <p>
			
			
			
				- Just updated the documentation to describe listxml rather than listinfo! <br/>
			
		</p>
    <p>
      <strong>
        <u>15 February 2005</u>
      </strong> - ZIPIdent v2.3</p>
    <p>
			
			
			
				- Uses DatLib v2.0. <br/>
				- Uses the DatLib flag OPTION_KEEP_FULL_DETAILS (for ROM regions). <br/>
				- Moved the macro FORMAT_GAME_NAME out of DatLib, into ZIPIdent. <br/>
			
		</p>
    <p>
      <strong>
        <u>22 July 2004</u>
      </strong> - ZIPIdent v2.2</p>
    <p>
			
			
			
				- Uses DatLib v1.8. <br/>
				- Removed the need for xml2info by adding my own MAME XML parser. <br/>
				- A nice side effect is that names like "Alien<sup>3</sup>: The Gun" work now! <br/>
			
		</p>
    <p>
      <strong>
        <u>11 July 2004</u>
      </strong> - ZIPIdent v2.1</p>
    <p>
			
			
			
				- Updated the source to use the new functions of DatLib v1.4. <br/>
				- There is no functional change within ZIPIdent though. <br/>
			
		</p>
    <p>
      <strong>
        <u>2 July 2004</u>
      </strong> - ZIPIdent v2.0</p>
    <p>
			
			
			
				- Modified to use DatLib - there are no game or ROM limits anymore! <br/>
				- Also supports all DatLib formats (ListInfo, XML, RomCenter, etc). <br/>
				- Note: For XML support to work, you need xml2info.exe in your path. <br/>
			
		</p>
    <p>
      <strong>
        <u>19 January 2003</u>
      </strong> - ZIPIdent v1.01</p>
    <p>
			
			
			
				- Fixed a bug that caused filenames with >80 characters to hang. <br/>
				- Fixed a bug that caused ZIPs containing >100 files to crash. <br/>
				- Added the ability to use a trailing slash after folders (why)? <br/>
				- Added an extra warning in 'zipident_maybe.log' for corrupt ZIPs. <br/>
			
		</p>
    <p>
      <strong>
        <u>7 April 2002</u>
      </strong> - ZIPIdent v1.0</p>
    <p>
			
			
			
				- First public release. <br/>
			
		</p>
<script language="php">
					// Standard page footer (counter)

					include('../../Resources/Bottom.php');
				</script>
  </body>
</html>


