
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php
					// Standard PHP includes (database connection and constants)

					include ('../../Resources/Include.php');

				?>
    <title>ROMInfo v2.8</title>
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
      <img src="ROMInfo.png" width="107" height="40" alt="ROMInfo.png"/>
    </p>

	
	
	
	

	

	
		<p>ROMInfo is for identifying arcade ROMs and checking if they are emulated yet.<br/> It does this using the <a href="../../Dats/Dats.php">CMPro dats</a> from the <a href="http://caesar.logiqx.com/">CAESAR</a> database and should cover every arcade game emulated so far.</p>
	

	<table>
      <tr>
		<td>
          <p>Download <a href="rinfo28.zip">ROMInfo v2.8</a> (176KB)</p>
          <p>
            <a href="rinfo28.zip">
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
      <b>24 March 2008</b> - ROMInfo v2.8</p>
    <p>
			
			
			
				- Uses DatLib v2.24.<br/>
				- Fixed crash (allzip had spurious carriage returns in kyukaidk).<br/>
    		                - DatLib 2.23 also added the Generic XML format.
			
		</p>
    <p>
      <b>11 July 2006</b> - ROMInfo v2.7</p>
    <p>
			
			
			
				- Uses DatLib v2.16.<br/>
				- Fixed bug that messed up internal indices (affected crc matching)<br/>
    			
		</p>
    <p>
      <b>6 December 2005</b> - ROMInfo v2.6</p>
    <p>
			
			
			
				- Uses DatLib v2.13.<br/>
				- DatLib v2.12 broke the RomCenter drivers (now fixed).
    			
		</p>
    <p>
      <b>5 December 2005</b> - ROMInfo v2.5</p>
    <p>
			
			
			
				- Uses DatLib v2.12.<br/>
				- Fixed a rare crash (if the longest line in the dat was the last).<br/>
				- Fixed a problem loading RomCenter data files containing [].
    			
		</p>
    <p>
      <b>31 October 2005</b> - ROMInfo v2.4</p>
    <p>
			
			
			
				- Uses DatLib v2.10.<br/>
				- Fixed identification of ListXML for MAME+MESS v0.101u4 onwards.<br/>
    			
		</p>
    <p>
      <b>28 February 2005</b> - ROMInfo v2.3</p>
    <p>
			
			
			
				- Uses DatLib v2.2. <br/>
				- Added support for tab delimited files.<br/>
			
		</p>
    <p>
      <b>22 July 2004</b> - ROMInfo v2.2</p>
    <p>
			
			
			
				- Uses DatLib v1.8. <br/>
				- Removed the need for xml2info by adding my own MAME XML parser. <br/>
				- A nice side effect is that names like "Alien<sup>3</sup>: The Gun" work now!<br/>
			
		</p>
    <p>
      <b>11 July 2004</b> - ROMInfo v2.1</p>
    <p>
			
			
			
				- Updated the source to use the new functions of DatLib v1.4. <br/>
				- There is no functional change within ROMInfo though.<br/>
			
		</p>
    <p>
      <b>2 July 2004</b> - ROMInfo v2.0</p>
    <p>
			
			
			
				- Modified to use DatLib - there are no game or ROM limits anymore! <br/>
				- Also supports all DatLib formats (ListInfo, XML, RomCenter, etc). <br/>
				- Note: For XML support to work, you need xml2info.exe in your path.<br/>
			
		</p>
    <p>
      <b>22 January 2001</b> - ROMInfo v1.03</p>
    <p>
			
			
			
				- Added standard file support. <br/>
				- Added support for multiple CRCs/files/zips. <br/>
				- Added automatic logging (sends output to rominfo.log). <br/>
				- Other minor improvements to the output format and the source code.<br/>
			
		</p>
    <p>
      <b>6 January 2001</b> - ROMInfo v1.02</p>
    <p>
			
			
			
				- Drag and drop support added.<br/>
			
		</p>
    <p>
      <b>31 December 2000</b> - ROMInfo v1.01</p>
    <p>
			
			
			
				- ZIP support added.<br/>
			
		</p>
    <p>
      <b>30 December 2000</b> - ROMInfo v1.0</p>
    <p>
			
			
			
				- First public release.<br/>
			
		</p>
<?php
					// Standard page footer (counter)

					include('../../Resources/Bottom.php');
				?>
  </body>
</html>


