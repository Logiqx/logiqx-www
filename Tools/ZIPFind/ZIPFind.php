
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php
					// Standard PHP includes (database connection and constants)

					include ('../../Resources/Include.php');

				?>
    <title>ZIPFind v2.4</title>
    <?php
					// Include standard &lt;head> metadata

					include('../../Resources/Head.php');
				?>
  </head>
  <body>
    <?php
					// The main page content is a 3 column table (left column is the menu, right one is the news)

					echo '' . LF . LF;

					include('../../Resources/Top.php');
				?>
	<p>
      <img src="../../Resources/Logiqx.png" width="327" height="68" alt="../../Resources/Logiqx.png"/>
    </p>
	<p>
      <img src="ZIPFind.png" width="95" height="40" alt="ZIPFind.png"/>
    </p>

	
	
	
	

	

	
		<p>ZIPFind is a useful little tool that helps you to find ZIPs that you want from a friends FTP server (or whatever).</p>
	

	<table>
      <tr>
		<td>
          <p>Download <a href="zfind24.zip">ZIPFind v2.4</a> (179KB)</p>
          <p>
            <a href="zfind24.zip">
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
      <b>24 March 2008</b> - ZIPFind v2.4</p>
    <p>
			
			
			
				- Uses DatLib v2.24.<br/>
				- Fixed crash (allzip had spurious carriage returns in kyukaidk).<br/>
				- DatLib v2.11 to 2.23 also contained some relevant changes:<br/>
				- Added the Generic XML format.<br/>
				- Fixed bug that messed up internal indices (affected crc matching)<br/>
				- File identification is now done by loading just the first 4KB.<br/>
				- Fixed a rare crash (if the longest line in the dat was the last).<br/>
    			
		</p>
    <p>
      <b>31 October 2005</b> - ZIPFind v2.3</p>
    <p>
			
			
			
				- Uses DatLib v2.10.<br/>
				- Fixed identification of ListXML for MAME+MESS v0.101u4 onwards.<br/>
    			
		</p>
    <p>
      <b>22 July 2004</b> - ZIPFind v2.2</p>
    <p>
			
			
			
				- Uses DatLib v1.8. <br/>
				- Removed the need for xml2info by adding my own MAME XML parser. <br/>
				- A nice side effect is that names like "Alien<sup>3</sup>: The Gun" work now! <br/>
			
		</p>
    <p>
      <b>11 July 2004</b> - ZIPFind v2.1</p>
    <p>
			
			
			
				- Updated the source to use the new functions of DatLib v1.4. <br/>
				- There is no functional change within ZIPFind though. <br/>
			
		</p>
    <p>
      <b>2 July 2004</b> - ZIPFind v2.0</p>
    <p>
			
			
			
				- Modified to use DatLib - there are no game or ROM limits anymore! <br/>
				- Also supports all DatLib formats (ListInfo, XML, RomCenter, etc). <br/>
				- Note: For XML support to work, you need xml2info.exe in your path.<br/>
			
		</p>
    <p>
      <b>2 February 2003</b> - ZIPFind v1.00</p>
    <p>
			
			
			
				- First private release. <br/>
			
		</p>
<?php
					// Standard page footer (counter)

					include('../../Resources/Bottom.php');
				?>
  </body>
</html>


