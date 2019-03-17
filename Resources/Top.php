		<table class="layout">
			<colgroup span="1" width="120"></colgroup>
			<colgroup span="1" width="8"></colgroup>
			<colgroup span="1"></colgroup>

			<tr>
				<td>
					<?php
						echo '<script type="text/javascript">' . LF;
						echo INDENT . TAB . '<!--' . LF;
							echo INDENT . TAB . TAB .'if (navigator.userAgent.indexOf("Firefox") != -1)' . LF;
								echo INDENT . TAB . TAB . TAB .'menuAnimationOn = true;' . LF;
							echo INDENT . TAB . TAB .'else' . LF;
								echo INDENT . TAB . TAB . TAB .'menuAnimationOn = false;' . LF . LF;
								
							echo INDENT . TAB . TAB .'function menuOn(obj) { if (menuAnimationOn) document[obj].src = ' . "'" . $www_root . 'Menu/' . "'" . ' + obj + ' . "'" . 'On.png' . "'" . ' } ' . LF;
							echo INDENT . TAB . TAB .'function menuOff(obj) { if (menuAnimationOn) document[obj].src = ' . "'" . $www_root . 'Menu/' . "'" . ' + obj + ' . "'" . 'Off.png' . "'" . ' } ' . LF;
						echo INDENT . TAB . '//-->' . LF;
						echo INDENT . '</script>' . LF . LF;

						echo INDENT . '<p><img src="' . $www_root . 'Menu/Arcade.png" alt="Arcade Cabinet" width="87" height="164" /></p>' . LF . LF;

						echo INDENT . '<hr />' . LF . LF;

						echo INDENT . '<p><a href="' . $www_root . '/"><img src="' . $www_root . 'Menu/NewsOff.png"' . LF;
						echo INDENT . TAB . 'onmouseover="menuOn(' . "'" . 'News' . "'" . ')" onmouseout="menuOff(' . "'" . 'News' . "'" . ')"' . LF;
						echo INDENT . TAB . 'alt="News" width="40" height="20" id="News" /></a></p>' . LF . LF;

						echo INDENT . '<p><a href="http://caesar.logiqx.com/"><img src="' . $www_root . 'Menu/CAESAROff.png"' . LF;
						echo INDENT . TAB . 'onmouseover="menuOn(' . "'" . 'CAESAR' . "'" . ')" onmouseout="menuOff(' . "'" . 'CAESAR' . "'" . ')"' . LF;
						echo INDENT . TAB . 'alt="CAESAR" width="64" height="20" id="CAESAR" /></a></p>' . LF . LF;

						echo INDENT . '<p><a href="http://forum.logiqx.com/"><img src="' . $www_root . 'Menu/ForumOff.png"' . LF;
						echo INDENT . TAB . 'onmouseover="menuOn(' . "'" . 'Forum' . "'" . ')" onmouseout="menuOff(' . "'" . 'Forum' . "'" . ')"' . LF;
						echo INDENT . TAB . 'alt="Forum" width="46" height="20" id="Forum" /></a></p>' . LF . LF;

						echo INDENT . '<p><a href="' . $www_root . 'Dats/"><img src="' . $www_root . 'Menu/DatsOff.png"' . LF;
						echo INDENT . TAB . 'onmouseover="menuOn(' . "'" . 'Dats' . "'" . ')" onmouseout="menuOff(' . "'" . 'Dats' . "'" . ')"' . LF;
						echo INDENT . TAB . 'alt="Dats" width="33" height="20" id="Dats" /></a></p>' . LF . LF;

						echo INDENT . '<p><a href="' . $www_root . 'Tools/"><img src="' . $www_root . 'Menu/ToolsOff.png"' . LF;
						echo INDENT . TAB . 'onmouseover="menuOn(' . "'" . 'Tools' . "'" . ')" onmouseout="menuOff(' . "'" . 'Tools' . "'" . ')"' . LF;
						echo INDENT . TAB . 'alt="Tools" width="40" height="20" id="Tools" /></a></p>' . LF . LF;

						echo INDENT . '<p><a href="' . $www_root . 'DatFAQs/"><img src="' . $www_root . 'Menu/DatFAQsOff.png"' . LF;
						echo INDENT . TAB . 'onmouseover="menuOn(' . "'" . 'DatFAQs' . "'" . ')" onmouseout="menuOff(' . "'" . 'DatFAQs' . "'" . ')"' . LF;
						echo INDENT . TAB . 'alt="DatFAQs" width="69" height="20" id="DatFAQs" /></a></p>' . LF . LF;

						echo INDENT . '<p><a href="' . $www_root . 'HowTo/"><img src="' . $www_root . 'Menu/HowToOff.png"' . LF;
						echo INDENT . TAB . 'onmouseover="menuOn(' . "'" . 'HowTo' . "'" . ')" onmouseout="menuOff(' . "'" . 'HowTo' . "'" . ')"' . LF;
						echo INDENT . TAB . 'alt="HowTo" width="116" height="20" id="HowTo" /></a></p>' . LF . LF;

						echo INDENT . '<p><a href="' . $www_root . 'Links/"><img src="' . $www_root . 'Menu/LinksOff.png"' . LF;
						echo INDENT . TAB . 'onmouseover="menuOn(' . "'" . 'Links' . "'" . ')" onmouseout="menuOff(' . "'" . 'Links' . "'" . ')"' . LF;
						echo INDENT . TAB . 'alt="Links" width="37" height="20" id="Links" /></a></p>' . LF . LF;

						echo INDENT . '<hr />' . LF . LF;

						if (!isset($non_xhtml_compliant))
						{
							echo '<p>' . LF;
							echo INDENT . TAB . '<a href="http://validator.w3.org/check?uri=referer">' . LF;
							echo INDENT . TAB . TAB . '<img src="' . $www_root . 'Resources/valid-xhtml10.png"' . LF;
							echo INDENT . TAB . TAB . ' alt="Valid XHTML 1.0!" height="31" width="88" />' . LF;
							echo INDENT . TAB . '</a>' . LF;
							echo INDENT . '</p>' . LF;
						}

						echo '<p>' . LF;
						echo INDENT . TAB . '<a href="http://jigsaw.w3.org/css-validator/check/referer">' . LF;
						echo INDENT . TAB . TAB . '<img src="' . $www_root . 'Resources/valid-css.png"' . LF;
						echo INDENT . TAB . TAB . ' alt="Valid CSS!" height="31" width="88" />' . LF;
						echo INDENT . TAB . '</a>' . LF;
						echo INDENT . '</p>' . LF . LF;
					?>
				</td>

				<td></td>

				<td>

