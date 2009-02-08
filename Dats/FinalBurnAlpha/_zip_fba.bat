@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^FBA_VER/SET &/" "FBA\FBA.vers.mak" >"FBA.vers.bat"
CALL "FBA.vers.bat"
DEL "FBA.vers.bat"

REM --- Generate CMPro ZIP

zip "FBA %FBA_VER% (xml).zip" "FBA %FBA_VER%*"
mv "FBA %FBA_VER% (xml).zip" "%LOGIQX%/WWW/Dats/FinalBurnAlpha/."

