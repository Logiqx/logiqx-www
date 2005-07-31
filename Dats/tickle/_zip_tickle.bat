@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^TICKLE_VER/SET &/;s/?/ /g" "Tickle\Tickle.vers.mak" >"Tickle.vers.bat"
CALL "Tickle.vers.bat"
DEL "Tickle.vers.bat"

REM --- Generate CMPro ZIP

zip "Tickle %TICKLE_VER% (cm).zip" "Tickle %TICKLE_VER%*"
mv "Tickle %TICKLE_VER% (cm).zip" "%LOGIQX%/WWW/Dats/Tickle/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Multi"

REM --- Generate RomCenter ZIP

zip "Tickle %TICKLE_VER% (rc).zip" "Tickle %TICKLE_VER%*"
mv "Tickle %TICKLE_VER% (rc).zip" "%LOGIQX%/WWW/Dats/Tickle/."
