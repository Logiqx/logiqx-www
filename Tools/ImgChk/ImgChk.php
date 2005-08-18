
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <script language="php">
					// Standard PHP includes (database connection and constants)

					include ('../../Resources/Include.php');

				</script>
    <title>ImgChk v2.5</title>
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
      <img src="ImgChk.gif" width="93" height="40" alt="ImgChk.gif"/>
    </p>

	
	
	
	

	

	
		<p>ImgChk has been created for the use of people that supply images for emulator frontends (e.g. icons, snaps, cabinets, marquees, flyers). It will verify image collections against a listinfo format datafile and can report unknown images as well as missing images. Image checks for clones and resources are optional.</p>
	

	<table>
      <tr>
		<td>
          <p>Download <a href="imgchk25.zip">ImgChk v2.5</a> (122KB)</p>
          <p>
            <a href="imgchk25.zip">
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
      </strong> - ImgChk v2.5</p>
    <p>
			
			
			
				- Uses DatLib v2.2. <br/>
				- Added support for tab delimited files. <br/>
			
		</p>
    <p>
      <strong>
        <u>17 August 2004</u>
      </strong> - ImgChk v2.4</p>
    <p>
			
			
			
				- Uses DatLib v1.9. <br/>
				- Improved 'AllowAlternates' (now supports '-' and '_' characters). <br/>
				- Automatically ignores '.txt' files within directories and zips. <br/>
				- Added all of the CrashTest snapshots to the INI file. <br/>
			
		</p>
    <p>
      <strong>
        <u>6 August 2004</u>
      </strong> - ImgChk v2.3</p>
    <p>
			
			
			
				- Uses DatLib v1.9. <br/>
				- Added an 'AllowAlternates' option for CrashTest snapshots. <br/>
			
		</p>
    <p>
      <strong>
        <u>22 July 2004</u>
      </strong> - ImgChk v2.2</p>
    <p>
			
			
			
				- Uses DatLib v1.8. <br/>
				- Removed the need for xml2info by adding my own MAME XML parser. <br/>
				- A nice side effect is that names like "Alien<sup>3</sup>: The Gun" work now! <br/>
			
		</p>
    <p>
      <strong>
        <u>11 July 2004</u>
      </strong> - ImgChk v2.1</p>
    <p>
			
			
			
				- Updated the source to use the new functions of DatLib v1.4. <br/>
				- There is no functional change within ImgChk though. <br/>
			
		</p>
    <p>
      <strong>
        <u>2 July 2004</u>
      </strong> - ImgChk v2.0</p>
    <p>
			
			
			
				- Added directory support (previously it only supported ZIPs). <br/>
				- Modified to use DatLib - there are no game or ROM limits anymore! <br/>
				- Also supports all DatLib formats (ListInfo, XML, RomCenter, etc). <br/>
				- Note: For XML support to work, you need xml2info.exe in your path. <br/>
			
		</p>
    <p>
      <strong>
        <u>21 January 2003</u>
      </strong> - ImgChk v1.00</p>
    <p>
			
			
			
				- First private release. <br/>
			
		</p>
<script language="php">
					// Standard page footer (counter)

					include('../../Resources/Bottom.php');
				</script>
  </body>
</html>


