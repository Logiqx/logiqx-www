		<table class="layout">
			<colgroup span="1" width="120"></colgroup>
			<colgroup span="1" width="8"></colgroup>
			<colgroup span="1"></colgroup>

			<tr>
				<td>
					<script type="text/javascript">
						<!--
							function menuOn(obj) { document[obj].src = '/Menu/' + obj + 'On.gif'; } 
							function menuOff(obj) { document[obj].src = '/Menu/' + obj + 'Off.gif'; } 
						//-->
					</script>

					<p><img src="/Menu/Arcade.gif" alt="Arcade Cabinet" width="87" height="164" /></p>

					<?php
						if (!isset($non_xhtml_compliant))
						{
							echo '<p>' . LF;
							echo INDENT . TAB . '<a href="http://validator.w3.org/check?uri=referer">' . LF;
							echo INDENT . TAB . TAB . '<img src="/Resources/valid-xhtml10.png"' . LF;
							echo INDENT . TAB . TAB . ' alt="Valid XHTML 1.0!" height="31" width="88" />' . LF;
							echo INDENT . TAB . '</a>' . LF;
							echo INDENT . TAB . '<br />' . LF;
							echo INDENT . '</p>' . LF;

							echo '<p>' . LF;
							echo INDENT . TAB . '<a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.logiqx.com/">' . LF;
							echo INDENT . TAB . TAB . '<img src="/Resources/valid-css.png"' . LF;
							echo INDENT . TAB . TAB . ' alt="Valid CSS!" height="31" width="88" />' . LF;
							echo INDENT . TAB . '</a>' . LF;
							echo INDENT . TAB . '<br />' . LF;
							echo INDENT . '</p>' . LF;
						}
					?>

					<hr />

					<p><a href="/"><img src="/Menu/NewsOff.gif"
						onmouseover="menuOn('News')" onmouseout="menuOff('News')"
						alt="News" width="40" height="20" id="News" name="News" /></a></p>

					<p><a href="http://caesar.logiqx.com/"><img src="/Menu/CAESAROff.gif"
						onmouseover="menuOn('CAESAR')" onmouseout="menuOff('CAESAR')"
						alt="CAESAR" width="64" height="20" id="CAESAR" name="CAESAR"  /></a></p>

					<p><a href="/Dats/Dats.php"><img src="/Menu/DatsOff.gif"
						onmouseover="menuOn('Dats')" onmouseout="menuOff('Dats')"
						alt="Dats" width="33" height="20" id="Dats" name="Dats" /></a></p>

					<hr />

					<p><a href="/Tools/DatUtil/DatUtil.php"><img src="/Menu/DatUtilOff.gif"
						onmouseover="menuOn('DatUtil')" onmouseout="menuOff('DatUtil')"
						alt="DatUtil" width="47" height="20" id="DatUtil" name="DatUtil" /></a></p>

					<p><a href="/Tools/MAMEDiff/MAMEDiff.php"><img src="/Menu/MAMEDiffOff.gif"
						onmouseover="menuOn('MAMEDiff')" onmouseout="menuOff('MAMEDiff')"
						alt="MAMEDiff" width="72" height="20" id="MAMEDiff" name="MAMEDiff" /></a></p>

					<p><a href="/Tools/ROMBuild/ROMBuild.php"><img src="/Menu/ROMBuildOff.gif"
						onmouseover="menuOn('ROMBuild')" onmouseout="menuOff('ROMBuild')"
						alt="ROMBuild" width="70" height="20" id="ROMBuild" name="ROMBuild" /></a></p>

					<p><a href="/Tools/ROMInfo/ROMInfo.php"><img src="/Menu/ROMInfoOff.gif"
						onmouseover="menuOn('ROMInfo')" onmouseout="menuOff('ROMInfo')"
						alt="ROMInfo" width="63" height="20" id="ROMInfo" name="ROMInfo" /></a></p>

					<p><a href="/Tools/ZIPIdent/ZIPIdent.php"><img src="/Menu/ZIPIdentOff.gif"
						onmouseover="menuOn('ZIPIdent')" onmouseout="menuOff('ZIPIdent')"
						alt="ZIPIdent" width="61" height="20" id="ZIPIndent" name="ZIPIdent" /></a></p>

					<p><a href="/Tools/ImgChk/ImgChk.php"><img src="/Menu/ImgChkOff.gif"
						onmouseover="menuOn('ImgChk')" onmouseout="menuOff('ImgChk')"
						alt="ImgChk" width="55" height="20" id="ImgChk" name="ImgChk" /></a></p>

					<p><a href="/Tools/DatLib/DatLib.php"><img src="/Menu/DatLibOff.gif"
						onmouseover="menuOn('DatLib')" onmouseout="menuOff('DatLib')"
						alt="DatLib" width="46" height="20" id="DatLib" name="DatLib" /></a></p>

					<hr />

					<p><a href="/forum/"><img src="/Menu/ForumOff.gif"
						onmouseover="menuOn('Forum')" onmouseout="menuOff('Forum')"
						alt="Forum" width="46" height="20" id="Forum" name="Forum" /></a></p>

					<p><a href="/FAQs/DatFAQs.php"><img src="/Menu/DatFAQsOff.gif"
						onmouseover="menuOn('DatFAQs')" onmouseout="menuOff('DatFAQs')"
						alt="DatFAQs" width="69" height="20" id="DatFAQs" name="DatFAQs" /></a></p>

					<p><a href="/HowTo/HowTo.php"><img src="/Menu/HowToOff.gif"
						onmouseover="menuOn('HowTo')" onmouseout="menuOff('HowTo')"
						alt="HowTo" width="116" height="20" id="HowTo" name="HowTo" /></a></p>

					<p><a href="/Links/Links.php"><img src="/Menu/LinksOff.gif"
						onmouseover="menuOn('Links')" onmouseout="menuOff('Links')"
						alt="Links" width="37" height="20" id="Links" name="Links" /></a></p>

					<hr />

					<?php
						// Adverts

						if (@$_GET['ads'] != 'no')
						{
							echo LF. INDENT . '<p>' . LF;
							echo INDENT . TAB. '<!-- Cube Advert -->' . LF;
							virtual('/ads/cube.php');
							echo INDENT . '</p>' . LF;
						}
					?>
				</td>

				<td></td>

				<td>
					<?php
						if (@$_GET['ads'] != 'no')
						{
							echo '<p>' . LF;
							echo INDENT . TAB. '<!-- Banner Advert -->' . LF;
							virtual('/ads/top.php');
							echo INDENT . '</p>' . LF;
						}
					?>

					<hr />

