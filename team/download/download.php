<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - Team Downloads</title>' . LF . LF;

			// Include standard <head> metadata

			include('../../Resources/Head.php');
		?>
	</head>
	<body>
		<?php
			// The main page content is a 3 column table (left column is the menu, right one is the news)

			echo '<!-- Logiqx pages are basically a table with one row and three columns -->' . LF . LF;

			include('../../Resources/Top.php');
		?>

					<h1>ZIPs to extract into the 'Logiqx' area</h1>

					<h2>Mike's Backup (complete 'Bin', 'Dats', 'Dats_RC' and'WWW' directories)</h2>

					<table class="guide">
					    <tr>
						<th>File</th>
						<th>Size</th>
						<th>Description</th>
					    </tr>
					    <tr>
						<td><a href="Bin.zip">Bin.zip</a></td>
						<td>~300KB</td>
						<td>Mike:
						  CHDGames, CheckMerging, DatUtil, FileChk, FileList, FixDups, MAMEDiff<br />
						  Ben Jos: AddDatInfo,
						  CottageListInfo, DatDiff, HootListInfo, M1ListInfo, ValiDat<br />
						  3rd Party: Expat, Sablotron</td>
					    </tr>
					    <tr>
						<td><a href="Dats.zip">Dats.zip</a></td>
						<td>~15MB</td>
						<td>CMPro data files (the main data file creation area)</td>
					    </tr>
					    <tr>
						<td><a href="Dats_RC.zip">Dats_RC.zip</a></td>
						<td>~3MB</td>
						<td>RomCenter data files</td>
					    </tr>
					    <tr>
						<td><a href="WWW.zip">WWW.zip</a></td>
						<td>~12MB</td>
						<td>Web pages for www.logiqx.com</td>
					    </tr>
					</table>

		<?php
			// Standard page footer (counter)

			include('../../Resources/Bottom.php');
		?>
	</body>
</html>

