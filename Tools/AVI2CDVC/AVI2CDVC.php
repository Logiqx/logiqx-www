
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php
					// Standard PHP includes (database connection and constants)

					include ('../../Resources/Include.php');

				?>
    <title>AVI2CDVC v1.01</title>
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
      <img src="AVI2CDVC.png" width="135" height="40" alt="AVI2CDVC.png"/>
    </p>
	
	
	
	
	
		<p>When capturing DV source on a PC it is usually stamped with the FourCC 'dvsd' and it therefore gets processed with the default DV codec of your PC (usually Microsoft). I prefer to use the Canopus codec and in order to do this you must change the FourCC to 'cdvc'. AVI2CDVC will allow you to quickly change the FourCC of your AVI files and is also quite powerful in that it can change all AVIs in a given directory, recursively processing all sub directories too if you so desire.</p>
	
	<table>
      <tr>
		<td>
          <p>Download <a href="avi2cdvc.zip">AVI2CDVC v1.01</a> (17KB)</p>
          <p>
            <a href="avi2cdvc.zip">
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
      <b>15 May 2003</b> - AVI2CDVC v1.01</p>
    <p>
			
			
			- First public release.
		</p>
<?php
					// Standard page footer (counter)

					include('../../Resources/Bottom.php');
				?>
  </body>
</html>


