
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <script language="php">
					// Standard PHP includes (database connection and constants)

					include ('../../Resources/Include.php');

				</script>
    <title>ImgChk v2.7</title>
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
      <img src="ImgChk.png" width="93" height="40" alt="ImgChk.png"/>
    </p>

	
	
	
	

	

	
		<p>ImgChk has been created for the use of people that supply images for emulator frontends (e.g. icons, snaps, cabinets, marquees, flyers). It will verify image collections against a listinfo format datafile and can report unknown images as well as missing images. Image checks for clones and resources are optional.</p>
	

	<table>
      <tr>
		<td>
          <p>Download <a href="imgchk27.zip">ImgChk v2.7</a> (167KB)</p>
          <p>
            <a href="imgchk27.zip">
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
      <b>21 October 2007</b> - ImgChk v2.7</p>
    <p>
			
			
			
				- Added 'AllowNonWorking' property for J.Hardy IV (default is 1).<br/>
				- Uses DatLib v2.21.<br/>
				- Added support for the isbios="yes" of MAME v0.117u2 onwards.<br/>
    			
		</p>
    <p>
      <b>31 October 2005</b> - ImgChk v2.6</p>
    <p>
			
			
			
				- Uses DatLib v2.10.<br/>
				- Fixed identification of ListXML for MAME+MESS v0.101u4 onwards.<br/>
    			
		</p>
    <p>
      <b>28 February 2005</b> - ImgChk v2.5</p>
    <p>
			
			
			
				- Uses DatLib v2.2. <br/>
				- Added support for tab delimited files. <br/>
			
		</p>
    <p>
      <b>17 August 2004</b> - ImgChk v2.4</p>
    <p>
			
			
			
				- Uses DatLib v1.9. <br/>
				- Improved 'AllowAlternates' (now supports '-' and '_' characters). <br/>
				- Automatically ignores '.txt' files within directories and zips. <br/>
				- Added all of the CrashTest snapshots to the INI file. <br/>
			
		</p>
    <p>
      <b>6 August 2004</b> - ImgChk v2.3</p>
    <p>
			
			
			
				- Uses DatLib v1.9. <br/>
				- Added an 'AllowAlternates' option for CrashTest snapshots. <br/>
			
		</p>
    <p>
      <b>22 July 2004</b> - ImgChk v2.2</p>
    <p>
			
			
			
				- Uses DatLib v1.8. <br/>
				- Removed the need for xml2info by adding my own MAME XML parser. <br/>
				- A nice side effect is that names like "Alien<sup>3</sup>: The Gun" work now! <br/>
			
		</p>
    <p>
      <b>11 July 2004</b> - ImgChk v2.1</p>
    <p>
			
			
			
				- Updated the source to use the new functions of DatLib v1.4. <br/>
				- There is no functional change within ImgChk though. <br/>
			
		</p>
    <p>
      <b>2 July 2004</b> - ImgChk v2.0</p>
    <p>
			
			
			
				- Added directory support (previously it only supported ZIPs). <br/>
				- Modified to use DatLib - there are no game or ROM limits anymore! <br/>
				- Also supports all DatLib formats (ListInfo, XML, RomCenter, etc). <br/>
				- Note: For XML support to work, you need xml2info.exe in your path. <br/>
			
		</p>
    <p>
      <b>21 January 2003</b> - ImgChk v1.00</p>
    <p>
			
			
			
				- First private release. <br/>
			
		</p>
<script language="php">
					// Standard page footer (counter)

					include('../../Resources/Bottom.php');
				</script>
  </body>
</html>


