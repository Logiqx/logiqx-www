<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>FTP Help</title>' . LF . LF;

			// Include standard <head> metadata

			include('../Resources/Head.php');
		?>
	</head>
	<body>
		<?php
			// The main page content is a 3 column table (left column is the menu, right one is the news)

			echo '<!-- Logiqx pages are basically a table with one row and three columns -->' . LF . LF;

			include('../Resources/Top.php');
		?>

					<p>25th April 2006</p>

					<p>Understanding FTP Problems!</p>

					<h1 class="guide">1. Basic FTP Principals</h1>

					<p class="guide">FTP uses two data connections; one for the commands and one for the data. The data connection is used for directory listings, file uploads and file downloads. Any problems with FTP connections are usually related to the data connection so it is important to understand how it is established.<br/><br/>

					The initial connection (for commands) always originates from the FTP client, which usually connects to port 21 on the server. The MAME Testers server uses FTP with implicit SSL and therefore uses port 990 instead of 21.<br/><br/>

					The data connection is established in one of two ways... depending on whether PORT or PASV mode is in use:</p>
					<ul class="guide">
					<li>Using PORT mode (the original FTP protocol), the client is actually the server as far as data transfers are concerned (yes, it does sound strange). After the initial connection, the client tells the server to call it back at a specific IP address, on a specific port. FTP commands continue to be sent across the original connection but actual data (including directory listings) goes across the data connection.</li>
					<li>Using PASV mode (invented to make life simpler for clients behind firewalls or NAT routers), the server provides the client with an IP address and port to connect to for the data. As with PORT mode, commands go across the initial connection and actual data (including directory listings) goes across the data connection.</li>
					</ul>

					<p>The diagrams below illustrate the difference between PORT and PASV mode.</p>

					<p><img src="FTP_1.png" alt="FTP_1.png"/></p>

					<hr />
					<h1 class="guide">2. Connection to MAME Testers (people without a NAT router / firewall)</h1>

					<p class="guide">Whilst the principals described in the previous section still apply to the MAME Testers FTP server, the fact that it only allows specific ports for the data connection introduces some additional considerations when choosing to use PORT mode.<br/><br/>
					Note that the server is behind a NAT router / firewall:</p>
					<ul class="guide">
					<li>Clients actually connect to the router (at an internet address)</li>
					<li>The router forwards the connections to the actual server (at a LAN address)</li>
					</ul>
					<p>Modified diagrams are as follows...</p>

					<p><img src="FTP_2.png" alt="FTP_2.png"/></p>

					<p class="guide">Important settings in PORT mode:</p>
					<ol class="guide">
					<li>In the FTP client, you must ensure that you specify ports 1400-1500 for the data connection. The NAT router / firewall will only allow the data connection to be established over those ports.</li>
					<li>If using a software firewall on your PC (ZoneAlarm, Windows Firewall, etc) then ports 1400-1500 must be opened up. If not, the data connection cannot be established.</li>
					</ol>

					<p>Important settings in PASV mode:<br/><br/>

					None... there is nothing special for you to do!
					The server will supply a valid IP address and port (1400-1500) for the data connection.
					</p>

					<hr />
					<h1 class="guide">3. Connection to MAME Testers (people using a NAT router / firewall)</h1>

					<p class="guide">Whilst the principals described in the previous section still apply to the MAME Testers FTP server, the fact that your PC is behind a NAT router introduces some additional considerations when choosing to use PORT mode.<br/><br/>

					When using PORT mode, the data connection is established with your NAT router and it must be forwarded to your PC.<br/><br/>

					Modified diagrams are as follows...</p>

					<p><img src="FTP_3.png" alt="FTP_3.png"/></p>

					<p class="guide">Important settings in PORT mode:</p>
					<ol class="guide">
					<li>In the FTP client, you must ensure that you specify ports 1400-1500 for the data connection. The NAT router / firewall will only allow the data connection to be established over those ports.</li>
					<li>In the FTP client, you must ensure that the correct IP address is provided to the server (i.e. the IP address of your NAT firewall, not the LAN address of your PC). How this is done varies for each FTP client but be sure check that the 'PORT' command in the FTP output is specifying the correct IP address.</li>
					<li>Configure your NAT router to forward ports 1400-1500 to your PC.</li>
					<li>If using a software firewall on your PC (ZoneAlarm, Windows Firewall, etc) then ports 1400-1500 must be opened up. If not, the data connection cannot be established.</li>
					</ol>

					<p>Important settings in PASV mode:<br/><br/>

					None... there is nothing special for you to do!
					The server will supply a valid IP address and port (1400-1500) for the data connection.
					</p>

					<hr />
					<h1 class="guide">4) Troubleshooting</h1>

					<p class="guide">i) Use PASV!<br/><br/>

					As you should have realised, using PASV is by far the simplest option since it requires no complicated configuration on your part. There used to be an issue with PASV mode where the server would provide its LAN address (rather than the NAT router address) but this was fixed a long time ago and is no longer an issue. There really isn't much reason to be using PORT mode.<br/><br/>

					ii) If the initial connection works but things hang shortly after a PORT or PASV command has been issued (i.e. establishing the data channel) then look at the IP address and port used by the PORT / PASV command. Ensure that they are as you would expect, based on the PORT / PASV descriptions in this guide.<br/><br/>

					Note: Usually the IP address and port are written as six numbers seperated by commas, for example:<br/><br/>

					80,203,184,74,5,121<br/><br/>

					The first 4 numbers (80,203,184,74) are the IP address.<br/>
					The last two numbers (5,121) are the port number (multiply the first number by 256 and add the second number). In this case it indicates port 1401.<br/><br/>

					iii) The server will only allow logins from specific IP address ranges. If your IP address changes then it is possible that you may not be able to log in to the server and must ask the administrator to add your new IP address. This problem can clearly be seen by an appropriate message within your FTP client.<br/>
					</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

