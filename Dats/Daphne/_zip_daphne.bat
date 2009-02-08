@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^DAPHNE_VER/SET &/" "Daphne\Daphne.vers.mak" >"Daphne.vers.bat"
CALL "Daphne.vers.bat"
DEL "Daphne.vers.bat"

REM --- Generate CMPro ZIP

zip "Daphne %DAPHNE_VER% (xml).zip" "Daphne %DAPHNE_VER%*"
mv "Daphne %DAPHNE_VER% (xml).zip" "%LOGIQX%/WWW/Dats/Daphne/."

