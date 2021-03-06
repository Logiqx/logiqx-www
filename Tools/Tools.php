<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php
					// Standard PHP includes (database connection and constants)

					include ('../Resources/Include.php');

				?>
    <title>Logiqx Tools</title>
    <?php
					// Include standard &lt;head> metadata

					include('../Resources/Head.php');
				?>
  </head>
  <body>
    <?php
					// The main page content is a 3 column table (left column is the menu, right one is the news)

					echo '' . LF . LF;

					include('../Resources/Top.php');
				?>
    <p>
      <img src="../Resources/Logiqx.png" width="327" height="68" alt="Logiqx"/>
    </p>
	<p>
      <img src="Tools.png" width="69" height="40" alt="Tools.png"/>
    </p>
		
		
		
			<p>Here are all of my arcade emulation related tools!</p>
		
		<table class="news">
      <colgroup span="1" width="110"/>
      <colgroup span="1"/>
      <colgroup span="1" width="110"/>
      <colgroup span="1" width="110"/>
      <tr>
        <th>Tool</th>
        <th>Description</th>
        <th/>
        <th>
          <p>Last Updated</p>
        </th>
      </tr>
			

			<tr>
        <td>
          <a href="DatLib/">DatLib v2.36</a>
        </td>
        <td>Core to all of my tools it provides data file loading, cleansing, conversion and saving routines</td>
        <td>
          <p/>
        </td>
        <td>
          <p>13/04/2009</p>
        </td>
      </tr>

			<tr>
        <td>
          <a href="DatUtil/">DatUtil v2.46</a>
        </td>
        <td>Data file creation/conversion tool</td>
        <td>
          <p/>
        </td>
        <td>
          <p>13/04/2009</p>
        </td>
      </tr>

			<tr>
        <td>
          <a href="ImgChk/">ImgChk v2.10</a>
        </td>
        <td>ImgChk verifies image collections against any format datafile</td>
        <td>
          <p/>
        </td>
        <td>
          <p>24/03/2008</p>
        </td>
      </tr>

			<tr>
        <td>
          <a href="MAMEDiff/">MAMEDiff v2.31</a>
        </td>
        <td>Data file comparison tool</td>
        <td>
          <p/>
        </td>
        <td>
          <p>13/04/2008</p>
        </td>
      </tr>

			<tr>
        <td>
          <a href="ROMBuild/">ROMBuild v2.14</a>
        </td>
        <td>ROM manipulation tool that can convert modern day ROMs to older formats</td>
        <td>
          <p>
            <img src="../Resources/Updated.png" width="73" height="14" alt="Updated"/>
          </p>
        </td>
        <td>
          <p>
            <strong>19/12/2009</strong>
          </p>
        </td>
      </tr>

			<tr>
        <td>
          <a href="ROMInfo/">ROMInfo v2.8</a>
        </td>
        <td>ROM identification tool (for individual ROMs)</td>
        <td>
          <p/>
        </td>
        <td>
          <p>24/03/2008</p>
        </td>
      </tr>

			<tr>
        <td>
          <a href="ZIPFind/">ZIPFind v2.4</a>
        </td>
        <td>ZIP location tool for use with FTP servers</td>
        <td>
          <p/>
        </td>
        <td>
          <p>24/03/2008</p>
        </td>
      </tr>

			<tr>
        <td>
          <a href="ZIPIdent/">ZIPIdent v2.11</a>
        </td>
        <td>Game identification tool (for groups of ROMs)</td>
        <td>
          <p/>
        </td>
        <td>
          <p>13/04/2009</p>
        </td>
      </tr>

		</table>
	
<?php
					// Standard page footer (counter)

					include('../Resources/Bottom.php');
				?>
  </body>
</html>
