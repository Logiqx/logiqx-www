<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - News</title>' . LF . LF;

			// Include standard <head> metadata

			include('Resources/Head.php');
		?>
	</head>
	<body>
		<?php
			// The main page content is a 3 column table (left column is the menu, right one is the news)

			echo '<!-- Logiqx pages are basically a table with one row and three columns -->' . LF . LF;

			include('Resources/Top.php');
		?>

					<p><img src="/Resources/Logiqx.gif" width="327" height="68" alt="Logiqx" /></p>

					<p><img src="/Resources/URLBig.gif" width="266" height="40" alt="http://www.logiqx.com/" /></p>

					<p>Welcome to www.logiqx.com - Source of CMPro/RomCenter data
					files and other useful tools.</p>
					<p>To see who you have to thank for the contents of this site, have a
					look at <a href="E-Mail/TheTeam.php">the team</a> page.</p>
					<p>If you have any questions about the files or utilities provided
					here, visit the <a href="forum/">forum</a>.</p>

					<hr />

					<p><img src="/News/News.gif" width="69" height="40" alt="News" /></p>

					<?php
						if (isset($_GET['page']) && $_GET['page']!='')
							include ('News/News' . $_GET['page'] . '.txt');
						else
							include ('News/News23.txt');
					?>

					<hr />

					<p>
						<a href="/?page=22">July to September 2005</a> -
						<a href="/?page=21">April to June 2005</a> -
						<a href="/?page=20">January to March 2005</a>
					</p>

					<p>
						<a href="/?page=19">October to December 2004</a> -
						<a href="/?page=18">July to September 2004</a> -
						<a href="/?page=17">April to June 2004</a> -
						<a href="/?page=16">January to March 2004</a>
					</p>

					<p>
						<a href="/?page=15">October to December 2003</a> -
						<a href="/?page=14">July to September 2003</a> -
						<a href="/?page=13">April to June 2003</a> -
						<a href="/?page=12">January to March 2003</a>
					</p>

					<p>
						<a href="/?page=11">October to December 2002</a> -
						<a href="/?page=10">July to September 2002</a> -
						<a href="/?page=09">April to June 2002</a> -
						<a href="/?page=08">January to March 2002</a>
					</p>

					<p>
						<a href="/?page=07">October to December 2001</a> -
						<a href="/?page=06">July to September 2001</a> -
						<a href="/?page=05">April to June 2001</a> -
						<a href="/?page=04">January to March 2001</a>
					</p>

					<p>
						<a href="/?page=03">October to December 2000</a> -
						<a href="/?page=02">July to September 2000</a> -
						<a href="/?page=01">April to June 2000</a>
					</p>

		<?php
			// Standard page footer (counter)

			include('Resources/Bottom.php');
		?>
	</body>
</html>

