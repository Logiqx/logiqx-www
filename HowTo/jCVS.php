<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			// Standard PHP includes (database connection and constants)

			include ('../Resources/Include.php');

			// Display the page title

			echo '<title>Logiqx - jCVS</title>' . LF . LF;

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

					<p><img src="jCVS.gif" width="136" height="40" alt="jCVS" /></p>
					<p>6th March 2002</p>
					<h1 class="guide">1. Installing jCVS</h1>
					<p class="guide">Firstly, download <a href="http://www.jcvs.org/">jCVS</a> and extract it to your PC using WinZip or
					similar.</p>
					<p class="guide">You can then run jCVS by double-clicking on 'jCVS-5.3.1/bin/jcvsii.jar'
					(so long as you have Sun's Java runtime environment installed).</p>
					<hr />
					<h1 class="guide">2. Downloading the RAINE Source</h1>
					<p class="guide">Click on the 'Checkout' tab and fill in the fields as below. Note that if you
					do not have your own user name (i.e. you are not a member of the RAINE team)
					then you must use 'anonymous' and 'PServer' (not 'SSHServer').</p>
					<p class="guide"><img src="001_checkout.png" width="662" height="488" alt="" /></p>
					<p class="guide">Press 'Checkout Module' and once it has finished you should
					see something similar to this:</p>
					<p class="guide"><img src="002_checkout_complete.png" width="662" height="488" alt="" /></p>
					<p class="guide">Also, it will have opened up a project window showing the source tree that
					has been created:</p>
					<p class="guide"><img src="003_project.png" width="525" height="440" alt="" /></p>
					<hr />
					<h1 class="guide">3. Add RAINE to your Work Bench</h1>
					<p class="guide">Without closing the project window, select 'Work Bench' as shown below:</p>
					<p class="guide"><img src="004_empty_workbench.png" width="662" height="488" alt="" /></p>
					<p class="guide">Switch back to the project window and select 'File-&gt;Add to Work Bench...'.</p>
					<p class="guide"><img src="005_add_to_workbench.png" width="525" height="440" alt="" /></p>
					<p class="guide">Fill in the definition fields as shown below:</p>
					<p class="guide"><img src="006_workbench_definition.png" width="480" height="360" alt="" /></p>
					<p class="guide">You should now have 'RAINE Source Code' within your Work Bench.</p>
					<p class="guide"><img src="007_raine_workbench.png" width="662" height="488" alt="" /></p>
					<hr />
					<h1 class="guide">4. Specify your Default Editor</h1>
					<p class="guide">If you want to edit files from within jCVS, select 'File-&gt;Edit Preferences...'.</p>
					<p class="guide"><img src="008_workbench_prefs.png" width="662" height="488" alt="" /></p>
					<p class="guide">Under 'Actions-&gt;Verb Commands', add a new type '._DEF_.edit' and specify your desired
					editor (e.g. notepad). You should also set up a default
					verb command for '._DEF_.open' (the default verb when you double click on a
					project file).</p>
					<p class="guide"><img src="009_verb_commands.png" width="500" height="440" alt="" /></p>
					<hr />
					<h1 class="guide">5. Log In and Play!</h1>
					<p class="guide">Now everything is set up you can start to play. Close your project window
					then double click on 'RAINE Source Code'. </p>
					<p class="guide"><img src="007_raine_workbench.png" width="662" height="488" alt="" /></p>
					<p class="guide">Enter your username (probably 'anonymous' with an empty password):</p>
					<p class="guide"><img src="010_login.png" width="290" height="160" alt="" /></p>
					<p class="guide">To edit a file, right-click it and select 'Edit File'.</p>
					<p class="guide"><img src="011_edit_file.png" width="525" height="462" alt="" /></p>
					<p class="guide">To refresh your source with the very latest from SourceForge, select
					'Project-&gt;Update'. </p>
					<p class="guide"><img src="012_update.png" width="525" height="462" alt="" /></p>
					<p class="guide">That's pretty much all you'll need to know, unless you're a member of the
					RAINE team who actually needs to 'commit' their changes back to SourceForge.</p>
		<?php
			// Standard page footer (counter)

			include('../Resources/Bottom.php');
		?>
	</body>
</html>

