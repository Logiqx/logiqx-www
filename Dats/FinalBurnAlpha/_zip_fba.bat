@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^FBA_VER/SET &/" "FBA\FBA.vers.mak" >"FBA.vers.bat"
CALL "FBA.vers.bat"
DEL "FBA.vers.bat"

REM --- Generate CMPro ZIP

zip "FBA %FBA_VER% (cm).zip" "FBA %FBA_VER%*"
mv "FBA %FBA_VER% (cm).zip" "%LOGIQX%/WWW/Dats/FinalBurnAlpha/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Multi"

REM --- Generate RomCenter ZIP

zip "FBA %FBA_VER% (rc).zip" "FBA %FBA_VER%*"
mv "FBA %FBA_VER% (rc).zip" "%LOGIQX%/WWW/Dats/FinalBurnAlpha/."
