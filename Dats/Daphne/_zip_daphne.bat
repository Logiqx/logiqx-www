@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^DAPHNE_VER/SET &/" "Daphne\Daphne.vers.mak" >"Daphne.vers.bat"
CALL "Daphne.vers.bat"
DEL "Daphne.vers.bat"

REM --- Generate CMPro ZIP

zip "Daphne %DAPHNE_VER% (cm).zip" "Daphne %DAPHNE_VER%*"
mv "Daphne %DAPHNE_VER% (cm).zip" "%LOGIQX%/WWW/Dats/Daphne/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Multi"

REM --- Generate RomCenter ZIP

zip "Daphne %DAPHNE_VER% (rc).zip" "Daphne %DAPHNE_VER%*"
mv "Daphne %DAPHNE_VER% (rc).zip" "%LOGIQX%/WWW/Dats/Daphne/."
