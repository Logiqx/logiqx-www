@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Old"

REM --- Set the version number using the makefile

sed "s/^OLDEREMUS_VER/SET &/" "OlderEmus.vers.mak" >"OlderEmus.vers.bat"
CALL "OlderEmus.vers.bat"
DEL "OlderEmus.vers.bat"

REM --- Generate CMPro ZIP

zip "Older Emus %OLDEREMUS_VER% (xml).zip" Multi/* Single/* Sound/* Notes.html
mv "Older Emus %OLDEREMUS_VER% (xml).zip" "%LOGIQX%/WWW/Dats/OlderEmus/."

